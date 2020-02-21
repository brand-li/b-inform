<?php

namespace ParseCsv\tests\methods;

use ParseCsv\Csv;
use PHPUnit\Framework\TestCase;

class ParseTest extends TestCase {

    /**
     * @var Csv object
     */
    protected $csv;

    /**
     * Setup
     * Setup our test environment objects
     *
     * @access public
     */
    public function setUp() {
        $this->csv = new Csv();
    }

    public function testParse() {
        // can we trick 'is_readable' into whining? See #67.
        $this->parseRepetitiveString('c:/looks/like/a/path');
        $this->parseRepetitiveString('http://looks/like/an/url');
    }

    private function parseRepetitiveString($content) {
        $this->csv->delimiter = ';';
        $this->csv->heading = false;
        $success = $this->csv->parse(str_repeat($content . ';', 500));
        $this->assertEquals(true, $success);

        $row = array_pop($this->csv->data);
        $expected_data = array_fill(0, 500, $content);
        $expected_data [] = '';
        $this->assertEquals($expected_data, $row);
    }

    /**
     * @depends      testParse
     *
     * @dataProvider autoDetectionProvider
     *
     * @param string $file
     */
    public function testSepRowAutoDetection($file) {
        // This file (parse_test.php) is encoded in UTF-8, hence comparison will
        // fail unless we to this:
        $this->csv->output_encoding = 'UTF-8';

        $this->csv->auto($file);
        $this->assertEquals($this->_get_magazines_data(), $this->csv->data);
    }

    protected function _get_magazines_data() {
        return [
            [
                'title' => 'Красивая кулинария',
                'isbn' => '5454-5587-3210',
                'publishedAt' => '21.05.2011',
            ],
            [
                'title' => 'The Wine Connoisseurs',
                'isbn' => '2547-8548-2541',
                'publishedAt' => '12.12.2011',
            ],
            [
                'title' => 'Weißwein',
                'isbn' => '1313-4545-8875',
                'publishedAt' => '23.02.2012',
            ],
        ];
    }

    public function autoDetectionProvider() {
        return [
            'UTF8_no_BOM' => [__DIR__ . '/../example_files/UTF-8_sep_row_but_no_BOM.csv'],
            'UTF8' => [__DIR__ . '/../example_files/UTF-8_with_BOM_and_sep_row.csv'],
            'UTF16' => [__DIR__ . '/../example_files/UTF-16LE_with_BOM_and_sep_row.csv'],
        ];
    }

    public function testSingleColumnWithZeros() {
        $this->csv->delimiter = null;
        $this->csv->parse("URL\nhttp://www.amazon.com/ROX-Ice-Ball-Maker-Original/dp/B00MX59NMQ/ref=sr_1_1?ie=UTF8&qid=1435604374&sr=8-1&keywords=rox,+ice+molds");
        $row = array_pop($this->csv->data);
        $expected_data = ['URL' => 'http://www.amazon.com/ROX-Ice-Ball-Maker-Original/dp/B00MX59NMQ/ref=sr_1_1?ie=UTF8&qid=1435604374&sr=8-1&keywords=rox,+ice+molds'];
        $this->assertEquals($expected_data, $row);
    }

    public function testAllNumericalCsv() {
        $this->csv->heading = false;
        $sInput = "86545235689\r\n34365587654\r\n13469874576";
        $this->assertEquals(false, $this->csv->auto($sInput));
        $this->assertEquals(null, $this->csv->delimiter);
        $expected_data = explode("\r\n", $sInput);
        $actual_data = array_map('reset', $this->csv->data);
        $this->assertEquals($expected_data, $actual_data);
    }

    public function testMissingEndingLineBreak() {
        $this->csv->heading = false;
        $this->csv->enclosure = '"';
        $sInput = "86545235689,a\r\n34365587654,b\r\n13469874576,\"c\r\nd\"";
        $expected_data = [86545235689, 34365587654, 13469874576];

        $actual_data = $this->invokeMethod($this->csv, 'parse_string', array($sInput));
        $actual_column = array_map('reset', $actual_data);
        $this->assertEquals($expected_data, $actual_column);
        $this->assertEquals([
            'a',
            'b',
            "c\r\nd",
        ], array_map('next', $actual_data));
    }

    /**
     * Call protected/private method of a class.
     *
     * @param object &$object    Instantiated object that we will run method on.
     * @param string $methodName Method name to call
     * @param array  $parameters Array of parameters to pass into method.
     *
     * @return mixed Method return.
     */
    private function invokeMethod(&$object, $methodName, array $parameters = array()) {
        $reflection = new \ReflectionClass(get_class($object));
        $method = $reflection->getMethod($methodName);
        $method->setAccessible(true);

        return $method->invokeArgs($object, $parameters);
    }

    public function testSingleColumn() {
        $this->csv->auto(__DIR__ . '/../example_files/single_column.csv');
        $expected = [
            ['SMS' => '0444'],
            ['SMS' => '5555'],
            ['SMS' => '6606'],
            ['SMS' => '7777'],
        ];
        $this->assertEquals($expected, $this->csv->data);
    }

    public function testMatomoData() {
        // Matomo (Piwik) export cannot be read with
        $this->csv->use_mb_convert_encoding = true;
        $this->csv->output_encoding = 'UTF-8';
        $this->csv->auto(__DIR__ . '/../example_files/Piwik_API_download.csv');
        $aAction27 = array_column($this->csv->data, 'url (actionDetails 27)');
        $this->assertEquals([
            'http://application/_Main/_GraphicMeanSTD_MDI/btnConfBandOptions',
            '',
            '',
        ], $aAction27);

        $aCity = array_column($this->csv->data, 'city');
        $this->assertEquals([
            'São Paulo',
            'Johannesburg',
            '',
        ], $aCity);
    }

    public function testWithMultipleNewlines() {
        $this->csv->auto(__DIR__ . '/../example_files/multiple_empty_lines.csv');
        $aElse9 = array_column($this->csv->data, 'else9');

        /** @noinspection SpellCheckingInspection */
        $this->assertEquals([
            'Abweichung',
            'Abweichung',
            'Abweichung',
            'Alt',
            'Fehlt',
            'Neu',
            'OK',
            'Fehlt',
            'Fehlt',
            'Fehlt',
        ], $aElse9);
    }

    /**
     * @depends testSepRowAutoDetection
     */
    public function testGetColumnDatatypes() {
        $this->csv->auto(__DIR__ . '/fixtures/datatype.csv');
        $this->csv->getDatatypes();
        $expected = [
            'title' => 'string',
            'isbn' => 'string',
            'publishedAt' => 'date',
            'published' => 'boolean',
            'count' => 'integer',
            'price' => 'float',
        ];

        $this->assertEquals($expected, $this->csv->data_types);
    }

    /**
     * @depends testSepRowAutoDetection
     */
    public function testAutoDetectFileHasHeading() {
        $this->csv->auto(__DIR__ . '/fixtures/datatype.csv');
        $this->assertTrue($this->csv->autoDetectFileHasHeading());

        $this->csv->heading = false;
        $this->csv->auto(__DIR__ . '/fixtures/datatype.csv');
        $this->assertTrue($this->csv->autoDetectFileHasHeading());

        $this->csv->heading = false;
        $sInput = "86545235689\r\n34365587654\r\n13469874576";
        $this->csv->auto($sInput);
        $this->assertFalse($this->csv->autoDetectFileHasHeading());

        $this->csv->heading = true;
        $sInput = "86545235689\r\n34365587654\r\n13469874576";
        $this->csv->auto($sInput);
        $this->assertFalse($this->csv->autoDetectFileHasHeading());
    }

    public function testVeryLongNonExistingFile() {
        $this->csv->parse(str_repeat('long_string', PHP_MAXPATHLEN));
        $this->csv->auto(str_repeat('long_string', PHP_MAXPATHLEN));
    }

    public function autoQuotesDataProvider() {
        return array(
            array('auto-double-enclosure.csv', '"'),
            array('auto-single-enclosure.csv', "'"),
        );
    }

    /**
     * @depends      testSepRowAutoDetection
     *
     * @dataProvider autoQuotesDataProvider
     *
     * @param string $file
     * @param string $enclosure
     */
    public function testAutoQuotes($file, $enclosure) {
        $csv = new Csv();
        $csv->auto(__DIR__ . '/fixtures/' . $file, true, null, null, $enclosure);
        $this->assertArrayHasKey('column1', $csv->data[0], 'Data parsed incorrectly with enclosure ' . $enclosure);
        $this->assertEquals('value1', $csv->data[0]['column1'], 'Data parsed incorrectly with enclosure ' . $enclosure);
    }

    public function testWaiverFieldSeparator() {
        $this->assertSame(false, $this->csv->auto(__DIR__ . '/../example_files/waiver_field_separator.csv'));
        $expected = [
            'liability waiver',
            'release of liability form',
            'release of liability',
            'sample waiver',
            'sample waiver form',
        ];
        $actual = array_column($this->csv->data, 'keyword');
        $this->assertSame($expected, $actual);
    }
}