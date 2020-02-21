<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Tests\Integration\Chat\V1\Service;

use Twilio\Exceptions\DeserializeException;
use Twilio\Exceptions\TwilioException;
use Twilio\Http\Response;
use Twilio\Tests\HolodeckTestCase;
use Twilio\Tests\Request;

class RoleTest extends HolodeckTestCase {
	public function testFetchRequest() {
		$this->holodeck->mock( new Response( 500, '' ) );

		try {
			$this->twilio->chat->v1->services( "ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa" )
			                       ->roles( "RLaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa" )->fetch();
		} catch ( DeserializeException $e ) {
		} catch ( TwilioException $e ) {
		}

		$this->assertRequest( new Request(
			'get',
			'https://chat.twilio.com/v1/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Roles/RLaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'
		) );
	}

	public function testFetchResponse() {
		$this->holodeck->mock( new Response(
			200,
			'
            {
                "sid": "RLaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "service_sid": "ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "friendly_name": "channel user",
                "type": "channel",
                "permissions": [
                    "sendMessage",
                    "leaveChannel",
                    "editOwnMessage",
                    "deleteOwnMessage"
                ],
                "date_created": "2016-03-03T19:47:15Z",
                "date_updated": "2016-03-03T19:47:15Z",
                "url": "https://chat.twilio.com/v1/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Roles/RLaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"
            }
            '
		) );

		$actual = $this->twilio->chat->v1->services( "ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa" )
		                                 ->roles( "RLaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa" )->fetch();

		$this->assertNotNull( $actual );
	}

	public function testDeleteRequest() {
		$this->holodeck->mock( new Response( 500, '' ) );

		try {
			$this->twilio->chat->v1->services( "ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa" )
			                       ->roles( "RLaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa" )->delete();
		} catch ( DeserializeException $e ) {
		} catch ( TwilioException $e ) {
		}

		$this->assertRequest( new Request(
			'delete',
			'https://chat.twilio.com/v1/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Roles/RLaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'
		) );
	}

	public function testDeleteResponse() {
		$this->holodeck->mock( new Response(
			204,
			null
		) );

		$actual = $this->twilio->chat->v1->services( "ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa" )
		                                 ->roles( "RLaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa" )->delete();

		$this->assertTrue( $actual );
	}

	public function testCreateRequest() {
		$this->holodeck->mock( new Response( 500, '' ) );

		try {
			$this->twilio->chat->v1->services( "ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa" )
				->roles->create( "friendlyName", "channel", array( 'permission' ) );
		} catch ( DeserializeException $e ) {
		} catch ( TwilioException $e ) {
		}

		$values = array(
			'FriendlyName' => "friendlyName",
			'Type'         => "channel",
			'Permission'   => array( 'permission' ),
		);

		$this->assertRequest( new Request(
			'post',
			'https://chat.twilio.com/v1/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Roles',
			null,
			$values
		) );
	}

	public function testCreateResponse() {
		$this->holodeck->mock( new Response(
			201,
			'
            {
                "sid": "RLaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "service_sid": "ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "friendly_name": "channel user",
                "type": "channel",
                "permissions": [
                    "sendMessage",
                    "leaveChannel",
                    "editOwnMessage",
                    "deleteOwnMessage"
                ],
                "date_created": "2016-03-03T19:47:15Z",
                "date_updated": "2016-03-03T19:47:15Z",
                "url": "https://chat.twilio.com/v1/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Roles/RLaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"
            }
            '
		) );

		$actual = $this->twilio->chat->v1->services( "ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa" )
			->roles->create( "friendlyName", "channel", array( 'permission' ) );

		$this->assertNotNull( $actual );
	}

	public function testReadRequest() {
		$this->holodeck->mock( new Response( 500, '' ) );

		try {
			$this->twilio->chat->v1->services( "ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa" )
				->roles->read();
		} catch ( DeserializeException $e ) {
		} catch ( TwilioException $e ) {
		}

		$this->assertRequest( new Request(
			'get',
			'https://chat.twilio.com/v1/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Roles'
		) );
	}

	public function testReadFullResponse() {
		$this->holodeck->mock( new Response(
			200,
			'
            {
                "meta": {
                    "page": 0,
                    "page_size": 50,
                    "first_page_url": "https://chat.twilio.com/v1/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Roles?PageSize=50&Page=0",
                    "previous_page_url": null,
                    "url": "https://chat.twilio.com/v1/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Roles?PageSize=50&Page=0",
                    "next_page_url": null,
                    "key": "roles"
                },
                "roles": [
                    {
                        "sid": "RLaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "service_sid": "ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "friendly_name": "channel user",
                        "type": "channel",
                        "permissions": [
                            "sendMessage",
                            "leaveChannel",
                            "editOwnMessage",
                            "deleteOwnMessage"
                        ],
                        "date_created": "2016-03-03T19:47:15Z",
                        "date_updated": "2016-03-03T19:47:15Z",
                        "url": "https://chat.twilio.com/v1/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Roles/RLaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"
                    }
                ]
            }
            '
		) );

		$actual = $this->twilio->chat->v1->services( "ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa" )
			->roles->read();

		$this->assertGreaterThan( 0, count( $actual ) );
	}

	public function testReadEmptyResponse() {
		$this->holodeck->mock( new Response(
			200,
			'
            {
                "meta": {
                    "page": 0,
                    "page_size": 50,
                    "first_page_url": "https://chat.twilio.com/v1/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Roles?PageSize=50&Page=0",
                    "previous_page_url": null,
                    "url": "https://chat.twilio.com/v1/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Roles?PageSize=50&Page=0",
                    "next_page_url": null,
                    "key": "roles"
                },
                "roles": []
            }
            '
		) );

		$actual = $this->twilio->chat->v1->services( "ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa" )
			->roles->read();

		$this->assertNotNull( $actual );
	}

	public function testUpdateRequest() {
		$this->holodeck->mock( new Response( 500, '' ) );

		try {
			$this->twilio->chat->v1->services( "ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa" )
			                       ->roles( "RLaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa" )->update( array( 'permission' ) );
		} catch ( DeserializeException $e ) {
		} catch ( TwilioException $e ) {
		}

		$values = array(
			'Permission' => array( 'permission' ),
		);

		$this->assertRequest( new Request(
			'post',
			'https://chat.twilio.com/v1/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Roles/RLaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
			null,
			$values
		) );
	}

	public function testUpdateResponse() {
		$this->holodeck->mock( new Response(
			200,
			'
            {
                "sid": "RLaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "service_sid": "ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "friendly_name": "channel user",
                "type": "channel",
                "permissions": [
                    "sendMessage",
                    "leaveChannel",
                    "editOwnMessage",
                    "deleteOwnMessage"
                ],
                "date_created": "2016-03-03T19:47:15Z",
                "date_updated": "2016-03-03T19:47:15Z",
                "url": "https://chat.twilio.com/v1/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Roles/RLaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"
            }
            '
		) );

		$actual = $this->twilio->chat->v1->services( "ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa" )
		                                 ->roles( "RLaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa" )->update( array( 'permission' ) );

		$this->assertNotNull( $actual );
	}
}