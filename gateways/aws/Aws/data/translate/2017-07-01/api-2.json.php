<?php
// This file was auto-generated from sdk-root/src/data/translate/2017-07-01/api-2.json
return [
	'version'    => '2.0',
	'metadata'   => [
		'apiVersion'       => '2017-07-01',
		'endpointPrefix'   => 'translate',
		'jsonVersion'      => '1.1',
		'protocol'         => 'json',
		'serviceFullName'  => 'Amazon Translate',
		'serviceId'        => 'Translate',
		'signatureVersion' => 'v4',
		'signingName'      => 'translate',
		'targetPrefix'     => 'AWSShineFrontendService_20170701',
		'uid'              => 'translate-2017-07-01',
	],
	'operations' => [
		'DeleteTerminology' => [
			'name'   => 'DeleteTerminology',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteTerminologyRequest', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'InternalServerException', ],
			],
		],
		'GetTerminology'    => [
			'name'   => 'GetTerminology',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'GetTerminologyRequest', ],
			'output' => [ 'shape' => 'GetTerminologyResponse', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'InternalServerException', ],
			],
		],
		'ImportTerminology' => [
			'name'   => 'ImportTerminology',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ImportTerminologyRequest', ],
			'output' => [ 'shape' => 'ImportTerminologyResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'InternalServerException', ],
			],
		],
		'ListTerminologies' => [
			'name'   => 'ListTerminologies',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ListTerminologiesRequest', ],
			'output' => [ 'shape' => 'ListTerminologiesResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'InternalServerException', ],
			],
		],
		'TranslateText'     => [
			'name'   => 'TranslateText',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'TranslateTextRequest', ],
			'output' => [ 'shape' => 'TranslateTextResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'TextSizeLimitExceededException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'UnsupportedLanguagePairException', ],
				[ 'shape' => 'DetectedLanguageLowConfidenceException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InternalServerException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
			],
		],
	],
	'shapes'     => [
		'AppliedTerminology'                     => [
			'type'    => 'structure',
			'members' => [
				'Name'  => [ 'shape' => 'ResourceName', ],
				'Terms' => [ 'shape' => 'TermList', ],
			],
		],
		'AppliedTerminologyList'                 => [
			'type'   => 'list',
			'member' => [ 'shape' => 'AppliedTerminology', ],
		],
		'BoundedLengthString'                    => [
			'type'    => 'string',
			'max'     => 5000,
			'min'     => 1,
			'pattern' => '[\\P{M}\\p{M}]{1,5000}',
		],
		'DeleteTerminologyRequest'               => [
			'type'     => 'structure',
			'required' => [ 'Name', ],
			'members'  => [ 'Name' => [ 'shape' => 'ResourceName', ], ],
		],
		'Description'                            => [
			'type'    => 'string',
			'max'     => 256,
			'pattern' => '[\\P{M}\\p{M}]{0,256}',
		],
		'DetectedLanguageLowConfidenceException' => [
			'type'      => 'structure',
			'members'   => [
				'Message'              => [ 'shape' => 'String', ],
				'DetectedLanguageCode' => [ 'shape' => 'LanguageCodeString', ],
			],
			'exception' => true,
		],
		'EncryptionKey'                          => [
			'type'     => 'structure',
			'required' => [ 'Type', 'Id', ],
			'members'  => [
				'Type' => [ 'shape' => 'EncryptionKeyType', ],
				'Id'   => [ 'shape' => 'EncryptionKeyID', ],
			],
		],
		'EncryptionKeyID'                        => [
			'type'    => 'string',
			'max'     => 400,
			'min'     => 1,
			'pattern' => '(arn:aws((-us-gov)|(-cn))?:kms:)?([a-z]{2}-[a-z]+-\\d:)?(\\d{12}:)?(((key/)?[a-zA-Z0-9-_]+)|(alias/[a-zA-Z0-9:/_-]+))',
		],
		'EncryptionKeyType'                      => [ 'type' => 'string', 'enum' => [ 'KMS', ], ],
		'GetTerminologyRequest'                  => [
			'type'     => 'structure',
			'required' => [ 'Name', 'TerminologyDataFormat', ],
			'members'  => [
				'Name'                  => [ 'shape' => 'ResourceName', ],
				'TerminologyDataFormat' => [ 'shape' => 'TerminologyDataFormat', ],
			],
		],
		'GetTerminologyResponse'                 => [
			'type'    => 'structure',
			'members' => [
				'TerminologyProperties'   => [ 'shape' => 'TerminologyProperties', ],
				'TerminologyDataLocation' => [ 'shape' => 'TerminologyDataLocation', ],
			],
		],
		'ImportTerminologyRequest'               => [
			'type'     => 'structure',
			'required' => [ 'Name', 'MergeStrategy', 'TerminologyData', ],
			'members'  => [
				'Name'            => [ 'shape' => 'ResourceName', ],
				'MergeStrategy'   => [ 'shape' => 'MergeStrategy', ],
				'Description'     => [ 'shape' => 'Description', ],
				'TerminologyData' => [ 'shape' => 'TerminologyData', ],
				'EncryptionKey'   => [ 'shape' => 'EncryptionKey', ],
			],
		],
		'ImportTerminologyResponse'              => [
			'type'    => 'structure',
			'members' => [ 'TerminologyProperties' => [ 'shape' => 'TerminologyProperties', ], ],
		],
		'Integer'                                => [ 'type' => 'integer', ],
		'InternalServerException'                => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'String', ], ],
			'exception' => true,
			'fault'     => true,
		],
		'InvalidParameterValueException'         => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'String', ], ],
			'exception' => true,
		],
		'InvalidRequestException'                => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'String', ], ],
			'exception' => true,
		],
		'LanguageCodeString'                     => [ 'type' => 'string', 'max' => 5, 'min' => 2, ],
		'LanguageCodeStringList'                 => [
			'type'   => 'list',
			'member' => [ 'shape' => 'LanguageCodeString', ],
		],
		'LimitExceededException'                 => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'String', ], ],
			'exception' => true,
		],
		'ListTerminologiesRequest'               => [
			'type'    => 'structure',
			'members' => [
				'NextToken'  => [ 'shape' => 'NextToken', ],
				'MaxResults' => [ 'shape' => 'MaxResultsInteger', ],
			],
		],
		'ListTerminologiesResponse'              => [
			'type'    => 'structure',
			'members' => [
				'TerminologyPropertiesList' => [ 'shape' => 'TerminologyPropertiesList', ],
				'NextToken'                 => [ 'shape' => 'NextToken', ],
			],
		],
		'MaxResultsInteger'                      => [ 'type' => 'integer', 'max' => 500, 'min' => 1, ],
		'MergeStrategy'                          => [ 'type' => 'string', 'enum' => [ 'OVERWRITE', ], ],
		'NextToken'                              => [
			'type'    => 'string',
			'max'     => 8192,
			'pattern' => '\\p{ASCII}{0,8192}',
		],
		'ResourceName'                           => [
			'type'    => 'string',
			'max'     => 256,
			'min'     => 1,
			'pattern' => '^([A-Za-z0-9-]_?)+$',
		],
		'ResourceNameList'                       => [ 'type' => 'list', 'member' => [ 'shape' => 'ResourceName', ], ],
		'ResourceNotFoundException'              => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'String', ], ],
			'exception' => true,
		],
		'ServiceUnavailableException'            => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'String', ], ],
			'exception' => true,
		],
		'String'                                 => [
			'type'    => 'string',
			'max'     => 10000,
			'pattern' => '[\\P{M}\\p{M}]{0,10000}',
		],
		'Term'                                   => [
			'type'    => 'structure',
			'members' => [
				'SourceText' => [ 'shape' => 'String', ],
				'TargetText' => [ 'shape' => 'String', ],
			],
		],
		'TermList'                               => [ 'type' => 'list', 'member' => [ 'shape' => 'Term', ], ],
		'TerminologyArn'                         => [
			'type'    => 'string',
			'pattern' => '^arn:aws((-us-gov)|(-cn))?:translate:[a-zA-Z0-9-]+:[0-9]{12}:terminology/.+?/.+?$',
		],
		'TerminologyData'                        => [
			'type'     => 'structure',
			'required' => [ 'File', 'Format', ],
			'members'  => [
				'File'   => [ 'shape' => 'TerminologyFile', ],
				'Format' => [ 'shape' => 'TerminologyDataFormat', ],
			],
		],
		'TerminologyDataFormat'                  => [ 'type' => 'string', 'enum' => [ 'CSV', 'TMX', ], ],
		'TerminologyDataLocation'                => [
			'type'     => 'structure',
			'required' => [ 'RepositoryType', 'Location', ],
			'members'  => [
				'RepositoryType' => [ 'shape' => 'String', ],
				'Location'       => [ 'shape' => 'String', ],
			],
		],
		'TerminologyFile'                        => [ 'type' => 'blob', 'max' => 10485760, 'sensitive' => true, ],
		'TerminologyProperties'                  => [
			'type'    => 'structure',
			'members' => [
				'Name'                => [ 'shape' => 'ResourceName', ],
				'Description'         => [ 'shape' => 'Description', ],
				'Arn'                 => [ 'shape' => 'TerminologyArn', ],
				'SourceLanguageCode'  => [ 'shape' => 'LanguageCodeString', ],
				'TargetLanguageCodes' => [ 'shape' => 'LanguageCodeStringList', ],
				'EncryptionKey'       => [ 'shape' => 'EncryptionKey', ],
				'SizeBytes'           => [ 'shape' => 'Integer', ],
				'TermCount'           => [ 'shape' => 'Integer', ],
				'CreatedAt'           => [ 'shape' => 'Timestamp', ],
				'LastUpdatedAt'       => [ 'shape' => 'Timestamp', ],
			],
		],
		'TerminologyPropertiesList'              => [
			'type'   => 'list',
			'member' => [ 'shape' => 'TerminologyProperties', ],
		],
		'TextSizeLimitExceededException'         => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'String', ], ],
			'exception' => true,
		],
		'Timestamp'                              => [ 'type' => 'timestamp', ],
		'TooManyRequestsException'               => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'String', ], ],
			'exception' => true,
		],
		'TranslateTextRequest'                   => [
			'type'     => 'structure',
			'required' => [
				'Text',
				'SourceLanguageCode',
				'TargetLanguageCode',
			],
			'members'  => [
				'Text'               => [ 'shape' => 'BoundedLengthString', ],
				'TerminologyNames'   => [ 'shape' => 'ResourceNameList', ],
				'SourceLanguageCode' => [ 'shape' => 'LanguageCodeString', ],
				'TargetLanguageCode' => [ 'shape' => 'LanguageCodeString', ],
			],
		],
		'TranslateTextResponse'                  => [
			'type'     => 'structure',
			'required' => [
				'TranslatedText',
				'SourceLanguageCode',
				'TargetLanguageCode',
			],
			'members'  => [
				'TranslatedText'       => [ 'shape' => 'String', ],
				'SourceLanguageCode'   => [ 'shape' => 'LanguageCodeString', ],
				'TargetLanguageCode'   => [ 'shape' => 'LanguageCodeString', ],
				'AppliedTerminologies' => [ 'shape' => 'AppliedTerminologyList', ],
			],
		],
		'UnsupportedLanguagePairException'       => [
			'type'      => 'structure',
			'members'   => [
				'Message'            => [ 'shape' => 'String', ],
				'SourceLanguageCode' => [ 'shape' => 'LanguageCodeString', ],
				'TargetLanguageCode' => [ 'shape' => 'LanguageCodeString', ],
			],
			'exception' => true,
		],
	],
];
