<?php
// This file was auto-generated from sdk-root/src/data/mediapackage-vod/2018-11-07/api-2.json
return [
	'metadata'   => [
		'apiVersion'          => '2018-11-07',
		'endpointPrefix'      => 'mediapackage-vod',
		'jsonVersion'         => '1.1',
		'protocol'            => 'rest-json',
		'serviceAbbreviation' => 'MediaPackage Vod',
		'serviceFullName'     => 'AWS Elemental MediaPackage VOD',
		'serviceId'           => 'MediaPackage Vod',
		'signatureVersion'    => 'v4',
		'signingName'         => 'mediapackage-vod',
		'uid'                 => 'mediapackage-vod-2018-11-07',
	],
	'operations' => [
		'CreateAsset'                    => [
			'errors' => [
				[ 'shape' => 'UnprocessableEntityException', ],
				[ 'shape' => 'InternalServerErrorException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
			'http'   => [ 'method' => 'POST', 'requestUri' => '/assets', 'responseCode' => 200, ],
			'input'  => [ 'shape' => 'CreateAssetRequest', ],
			'name'   => 'CreateAsset',
			'output' => [ 'shape' => 'CreateAssetResponse', ],
		],
		'CreatePackagingConfiguration'   => [
			'errors' => [
				[ 'shape' => 'UnprocessableEntityException', ],
				[ 'shape' => 'InternalServerErrorException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/packaging_configurations',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'CreatePackagingConfigurationRequest', ],
			'name'   => 'CreatePackagingConfiguration',
			'output' => [ 'shape' => 'CreatePackagingConfigurationResponse', ],
		],
		'CreatePackagingGroup'           => [
			'errors' => [
				[ 'shape' => 'UnprocessableEntityException', ],
				[ 'shape' => 'InternalServerErrorException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/packaging_groups',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'CreatePackagingGroupRequest', ],
			'name'   => 'CreatePackagingGroup',
			'output' => [ 'shape' => 'CreatePackagingGroupResponse', ],
		],
		'DeleteAsset'                    => [
			'errors' => [
				[ 'shape' => 'UnprocessableEntityException', ],
				[ 'shape' => 'InternalServerErrorException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
			'http'   => [
				'method'       => 'DELETE',
				'requestUri'   => '/assets/{id}',
				'responseCode' => 202,
			],
			'input'  => [ 'shape' => 'DeleteAssetRequest', ],
			'name'   => 'DeleteAsset',
			'output' => [ 'shape' => 'DeleteAssetResponse', ],
		],
		'DeletePackagingConfiguration'   => [
			'errors' => [
				[ 'shape' => 'UnprocessableEntityException', ],
				[ 'shape' => 'InternalServerErrorException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
			'http'   => [
				'method'       => 'DELETE',
				'requestUri'   => '/packaging_configurations/{id}',
				'responseCode' => 202,
			],
			'input'  => [ 'shape' => 'DeletePackagingConfigurationRequest', ],
			'name'   => 'DeletePackagingConfiguration',
			'output' => [ 'shape' => 'DeletePackagingConfigurationResponse', ],
		],
		'DeletePackagingGroup'           => [
			'errors' => [
				[ 'shape' => 'UnprocessableEntityException', ],
				[ 'shape' => 'InternalServerErrorException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
			'http'   => [
				'method'       => 'DELETE',
				'requestUri'   => '/packaging_groups/{id}',
				'responseCode' => 202,
			],
			'input'  => [ 'shape' => 'DeletePackagingGroupRequest', ],
			'name'   => 'DeletePackagingGroup',
			'output' => [ 'shape' => 'DeletePackagingGroupResponse', ],
		],
		'DescribeAsset'                  => [
			'errors' => [
				[ 'shape' => 'UnprocessableEntityException', ],
				[ 'shape' => 'InternalServerErrorException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/assets/{id}',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'DescribeAssetRequest', ],
			'name'   => 'DescribeAsset',
			'output' => [ 'shape' => 'DescribeAssetResponse', ],
		],
		'DescribePackagingConfiguration' => [
			'errors' => [
				[ 'shape' => 'UnprocessableEntityException', ],
				[ 'shape' => 'InternalServerErrorException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/packaging_configurations/{id}',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'DescribePackagingConfigurationRequest', ],
			'name'   => 'DescribePackagingConfiguration',
			'output' => [ 'shape' => 'DescribePackagingConfigurationResponse', ],
		],
		'DescribePackagingGroup'         => [
			'errors' => [
				[ 'shape' => 'UnprocessableEntityException', ],
				[ 'shape' => 'InternalServerErrorException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/packaging_groups/{id}',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'DescribePackagingGroupRequest', ],
			'name'   => 'DescribePackagingGroup',
			'output' => [ 'shape' => 'DescribePackagingGroupResponse', ],
		],
		'ListAssets'                     => [
			'errors' => [
				[ 'shape' => 'UnprocessableEntityException', ],
				[ 'shape' => 'InternalServerErrorException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/assets',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'ListAssetsRequest', ],
			'name'   => 'ListAssets',
			'output' => [ 'shape' => 'ListAssetsResponse', ],
		],
		'ListPackagingConfigurations'    => [
			'errors' => [
				[ 'shape' => 'UnprocessableEntityException', ],
				[ 'shape' => 'InternalServerErrorException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/packaging_configurations',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'ListPackagingConfigurationsRequest', ],
			'name'   => 'ListPackagingConfigurations',
			'output' => [ 'shape' => 'ListPackagingConfigurationsResponse', ],
		],
		'ListPackagingGroups'            => [
			'errors' => [
				[ 'shape' => 'UnprocessableEntityException', ],
				[ 'shape' => 'InternalServerErrorException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/packaging_groups',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'ListPackagingGroupsRequest', ],
			'name'   => 'ListPackagingGroups',
			'output' => [ 'shape' => 'ListPackagingGroupsResponse', ],
		],
	],
	'shapes'     => [
		'AdMarkers'                              => [
			'enum' => [ 'NONE', 'SCTE35_ENHANCED', 'PASSTHROUGH', ],
			'type' => 'string',
		],
		'Asset'                                  => [
			'members' => [
				'Arn'              => [ 'locationName' => 'arn', 'shape' => '__string', ],
				'EgressEndpoints'  => [
					'locationName' => 'egressEndpoints',
					'shape'        => '__listOfEgressEndpoint',
				],
				'Id'               => [ 'locationName' => 'id', 'shape' => '__string', ],
				'PackagingGroupId' => [
					'locationName' => 'packagingGroupId',
					'shape'        => '__string',
				],
				'ResourceId'       => [
					'locationName' => 'resourceId',
					'shape'        => '__string',
				],
				'SourceArn'        => [ 'locationName' => 'sourceArn', 'shape' => '__string', ],
				'SourceRoleArn'    => [
					'locationName' => 'sourceRoleArn',
					'shape'        => '__string',
				],
			],
			'type'    => 'structure',
		],
		'AssetCreateParameters'                  => [
			'members'  => [
				'Id'               => [
					'locationName' => 'id',
					'shape'        => '__string',
				],
				'PackagingGroupId' => [
					'locationName' => 'packagingGroupId',
					'shape'        => '__string',
				],
				'ResourceId'       => [
					'locationName' => 'resourceId',
					'shape'        => '__string',
				],
				'SourceArn'        => [
					'locationName' => 'sourceArn',
					'shape'        => '__string',
				],
				'SourceRoleArn'    => [
					'locationName' => 'sourceRoleArn',
					'shape'        => '__string',
				],
			],
			'required' => [ 'SourceArn', 'Id', 'PackagingGroupId', 'SourceRoleArn', ],
			'type'     => 'structure',
		],
		'AssetList'                              => [
			'members' => [
				'Assets'    => [
					'locationName' => 'assets',
					'shape'        => '__listOfAssetShallow',
				],
				'NextToken' => [
					'locationName' => 'nextToken',
					'shape'        => '__string',
				],
			],
			'type'    => 'structure',
		],
		'AssetShallow'                           => [
			'members' => [
				'Arn'              => [
					'locationName' => 'arn',
					'shape'        => '__string',
				],
				'Id'               => [
					'locationName' => 'id',
					'shape'        => '__string',
				],
				'PackagingGroupId' => [
					'locationName' => 'packagingGroupId',
					'shape'        => '__string',
				],
				'ResourceId'       => [
					'locationName' => 'resourceId',
					'shape'        => '__string',
				],
				'SourceArn'        => [
					'locationName' => 'sourceArn',
					'shape'        => '__string',
				],
				'SourceRoleArn'    => [
					'locationName' => 'sourceRoleArn',
					'shape'        => '__string',
				],
			],
			'type'    => 'structure',
		],
		'CmafEncryption'                         => [
			'members'  => [
				'SpekeKeyProvider' => [
					'locationName' => 'spekeKeyProvider',
					'shape'        => 'SpekeKeyProvider',
				],
			],
			'required' => [ 'SpekeKeyProvider', ],
			'type'     => 'structure',
		],
		'CmafPackage'                            => [
			'members'  => [
				'Encryption'             => [
					'locationName' => 'encryption',
					'shape'        => 'CmafEncryption',
				],
				'HlsManifests'           => [
					'locationName' => 'hlsManifests',
					'shape'        => '__listOfHlsManifest',
				],
				'SegmentDurationSeconds' => [
					'locationName' => 'segmentDurationSeconds',
					'shape'        => '__integer',
				],
			],
			'required' => [ 'HlsManifests', ],
			'type'     => 'structure',
		],
		'CreateAssetRequest'                     => [
			'members'  => [
				'Id'               => [
					'locationName' => 'id',
					'shape'        => '__string',
				],
				'PackagingGroupId' => [
					'locationName' => 'packagingGroupId',
					'shape'        => '__string',
				],
				'ResourceId'       => [
					'locationName' => 'resourceId',
					'shape'        => '__string',
				],
				'SourceArn'        => [
					'locationName' => 'sourceArn',
					'shape'        => '__string',
				],
				'SourceRoleArn'    => [
					'locationName' => 'sourceRoleArn',
					'shape'        => '__string',
				],
			],
			'required' => [ 'SourceArn', 'Id', 'PackagingGroupId', 'SourceRoleArn', ],
			'type'     => 'structure',
		],
		'CreateAssetResponse'                    => [
			'members' => [
				'Arn'              => [
					'locationName' => 'arn',
					'shape'        => '__string',
				],
				'EgressEndpoints'  => [
					'locationName' => 'egressEndpoints',
					'shape'        => '__listOfEgressEndpoint',
				],
				'Id'               => [
					'locationName' => 'id',
					'shape'        => '__string',
				],
				'PackagingGroupId' => [
					'locationName' => 'packagingGroupId',
					'shape'        => '__string',
				],
				'ResourceId'       => [
					'locationName' => 'resourceId',
					'shape'        => '__string',
				],
				'SourceArn'        => [
					'locationName' => 'sourceArn',
					'shape'        => '__string',
				],
				'SourceRoleArn'    => [
					'locationName' => 'sourceRoleArn',
					'shape'        => '__string',
				],
			],
			'type'    => 'structure',
		],
		'CreatePackagingConfigurationRequest'    => [
			'members'  => [
				'CmafPackage'      => [
					'locationName' => 'cmafPackage',
					'shape'        => 'CmafPackage',
				],
				'DashPackage'      => [
					'locationName' => 'dashPackage',
					'shape'        => 'DashPackage',
				],
				'HlsPackage'       => [
					'locationName' => 'hlsPackage',
					'shape'        => 'HlsPackage',
				],
				'Id'               => [
					'locationName' => 'id',
					'shape'        => '__string',
				],
				'MssPackage'       => [
					'locationName' => 'mssPackage',
					'shape'        => 'MssPackage',
				],
				'PackagingGroupId' => [
					'locationName' => 'packagingGroupId',
					'shape'        => '__string',
				],
			],
			'required' => [ 'Id', 'PackagingGroupId', ],
			'type'     => 'structure',
		],
		'CreatePackagingConfigurationResponse'   => [
			'members' => [
				'Arn'              => [
					'locationName' => 'arn',
					'shape'        => '__string',
				],
				'CmafPackage'      => [
					'locationName' => 'cmafPackage',
					'shape'        => 'CmafPackage',
				],
				'DashPackage'      => [
					'locationName' => 'dashPackage',
					'shape'        => 'DashPackage',
				],
				'HlsPackage'       => [
					'locationName' => 'hlsPackage',
					'shape'        => 'HlsPackage',
				],
				'Id'               => [
					'locationName' => 'id',
					'shape'        => '__string',
				],
				'MssPackage'       => [
					'locationName' => 'mssPackage',
					'shape'        => 'MssPackage',
				],
				'PackagingGroupId' => [
					'locationName' => 'packagingGroupId',
					'shape'        => '__string',
				],
			],
			'type'    => 'structure',
		],
		'CreatePackagingGroupRequest'            => [
			'members'  => [
				'Id' => [
					'locationName' => 'id',
					'shape'        => '__string',
				],
			],
			'required' => [ 'Id', ],
			'type'     => 'structure',
		],
		'CreatePackagingGroupResponse'           => [
			'members' => [
				'Arn' => [
					'locationName' => 'arn',
					'shape'        => '__string',
				],
				'Id'  => [
					'locationName' => 'id',
					'shape'        => '__string',
				],
			],
			'type'    => 'structure',
		],
		'DashEncryption'                         => [
			'members'  => [
				'SpekeKeyProvider' => [
					'locationName' => 'spekeKeyProvider',
					'shape'        => 'SpekeKeyProvider',
				],
			],
			'required' => [ 'SpekeKeyProvider', ],
			'type'     => 'structure',
		],
		'DashManifest'                           => [
			'members' => [
				'ManifestName'         => [
					'locationName' => 'manifestName',
					'shape'        => '__string',
				],
				'MinBufferTimeSeconds' => [
					'locationName' => 'minBufferTimeSeconds',
					'shape'        => '__integer',
				],
				'Profile'              => [
					'locationName' => 'profile',
					'shape'        => 'Profile',
				],
				'StreamSelection'      => [
					'locationName' => 'streamSelection',
					'shape'        => 'StreamSelection',
				],
			],
			'type'    => 'structure',
		],
		'DashPackage'                            => [
			'members'  => [
				'DashManifests'          => [
					'locationName' => 'dashManifests',
					'shape'        => '__listOfDashManifest',
				],
				'Encryption'             => [
					'locationName' => 'encryption',
					'shape'        => 'DashEncryption',
				],
				'SegmentDurationSeconds' => [
					'locationName' => 'segmentDurationSeconds',
					'shape'        => '__integer',
				],
			],
			'required' => [ 'DashManifests', ],
			'type'     => 'structure',
		],
		'DeleteAssetRequest'                     => [
			'members'  => [
				'Id' => [
					'location'     => 'uri',
					'locationName' => 'id',
					'shape'        => '__string',
				],
			],
			'required' => [ 'Id', ],
			'type'     => 'structure',
		],
		'DeleteAssetResponse'                    => [ 'members' => [], 'type' => 'structure', ],
		'DeletePackagingConfigurationRequest'    => [
			'members'  => [
				'Id' => [
					'location'     => 'uri',
					'locationName' => 'id',
					'shape'        => '__string',
				],
			],
			'required' => [ 'Id', ],
			'type'     => 'structure',
		],
		'DeletePackagingConfigurationResponse'   => [ 'members' => [], 'type' => 'structure', ],
		'DeletePackagingGroupRequest'            => [
			'members'  => [
				'Id' => [
					'location'     => 'uri',
					'locationName' => 'id',
					'shape'        => '__string',
				],
			],
			'required' => [ 'Id', ],
			'type'     => 'structure',
		],
		'DeletePackagingGroupResponse'           => [ 'members' => [], 'type' => 'structure', ],
		'DescribeAssetRequest'                   => [
			'members'  => [
				'Id' => [
					'location'     => 'uri',
					'locationName' => 'id',
					'shape'        => '__string',
				],
			],
			'required' => [ 'Id', ],
			'type'     => 'structure',
		],
		'DescribeAssetResponse'                  => [
			'members' => [
				'Arn'              => [
					'locationName' => 'arn',
					'shape'        => '__string',
				],
				'EgressEndpoints'  => [
					'locationName' => 'egressEndpoints',
					'shape'        => '__listOfEgressEndpoint',
				],
				'Id'               => [
					'locationName' => 'id',
					'shape'        => '__string',
				],
				'PackagingGroupId' => [
					'locationName' => 'packagingGroupId',
					'shape'        => '__string',
				],
				'ResourceId'       => [
					'locationName' => 'resourceId',
					'shape'        => '__string',
				],
				'SourceArn'        => [
					'locationName' => 'sourceArn',
					'shape'        => '__string',
				],
				'SourceRoleArn'    => [
					'locationName' => 'sourceRoleArn',
					'shape'        => '__string',
				],
			],
			'type'    => 'structure',
		],
		'DescribePackagingConfigurationRequest'  => [
			'members'  => [
				'Id' => [
					'location'     => 'uri',
					'locationName' => 'id',
					'shape'        => '__string',
				],
			],
			'required' => [ 'Id', ],
			'type'     => 'structure',
		],
		'DescribePackagingConfigurationResponse' => [
			'members' => [
				'Arn'              => [
					'locationName' => 'arn',
					'shape'        => '__string',
				],
				'CmafPackage'      => [
					'locationName' => 'cmafPackage',
					'shape'        => 'CmafPackage',
				],
				'DashPackage'      => [
					'locationName' => 'dashPackage',
					'shape'        => 'DashPackage',
				],
				'HlsPackage'       => [
					'locationName' => 'hlsPackage',
					'shape'        => 'HlsPackage',
				],
				'Id'               => [
					'locationName' => 'id',
					'shape'        => '__string',
				],
				'MssPackage'       => [
					'locationName' => 'mssPackage',
					'shape'        => 'MssPackage',
				],
				'PackagingGroupId' => [
					'locationName' => 'packagingGroupId',
					'shape'        => '__string',
				],
			],
			'type'    => 'structure',
		],
		'DescribePackagingGroupRequest'          => [
			'members'  => [
				'Id' => [
					'location'     => 'uri',
					'locationName' => 'id',
					'shape'        => '__string',
				],
			],
			'required' => [ 'Id', ],
			'type'     => 'structure',
		],
		'DescribePackagingGroupResponse'         => [
			'members' => [
				'Arn' => [
					'locationName' => 'arn',
					'shape'        => '__string',
				],
				'Id'  => [
					'locationName' => 'id',
					'shape'        => '__string',
				],
			],
			'type'    => 'structure',
		],
		'EgressEndpoint'                         => [
			'members' => [
				'PackagingConfigurationId' => [
					'locationName' => 'packagingConfigurationId',
					'shape'        => '__string',
				],
				'Url'                      => [
					'locationName' => 'url',
					'shape'        => '__string',
				],
			],
			'type'    => 'structure',
		],
		'EncryptionMethod'                       => [ 'enum' => [ 'AES_128', 'SAMPLE_AES', ], 'type' => 'string', ],
		'ForbiddenException'                     => [
			'error'     => [ 'httpStatusCode' => 403, ],
			'exception' => true,
			'members'   => [
				'Message' => [
					'locationName' => 'message',
					'shape'        => '__string',
				],
			],
			'type'      => 'structure',
		],
		'HlsEncryption'                          => [
			'members'  => [
				'EncryptionMethod' => [
					'locationName' => 'encryptionMethod',
					'shape'        => 'EncryptionMethod',
				],
				'SpekeKeyProvider' => [
					'locationName' => 'spekeKeyProvider',
					'shape'        => 'SpekeKeyProvider',
				],
			],
			'required' => [ 'SpekeKeyProvider', ],
			'type'     => 'structure',
		],
		'HlsManifest'                            => [
			'members' => [
				'AdMarkers'                      => [
					'locationName' => 'adMarkers',
					'shape'        => 'AdMarkers',
				],
				'IncludeIframeOnlyStream'        => [
					'locationName' => 'includeIframeOnlyStream',
					'shape'        => '__boolean',
				],
				'ManifestName'                   => [
					'locationName' => 'manifestName',
					'shape'        => '__string',
				],
				'ProgramDateTimeIntervalSeconds' => [
					'locationName' => 'programDateTimeIntervalSeconds',
					'shape'        => '__integer',
				],
				'RepeatExtXKey'                  => [
					'locationName' => 'repeatExtXKey',
					'shape'        => '__boolean',
				],
				'StreamSelection'                => [
					'locationName' => 'streamSelection',
					'shape'        => 'StreamSelection',
				],
			],
			'type'    => 'structure',
		],
		'HlsPackage'                             => [
			'members'  => [
				'Encryption'             => [
					'locationName' => 'encryption',
					'shape'        => 'HlsEncryption',
				],
				'HlsManifests'           => [
					'locationName' => 'hlsManifests',
					'shape'        => '__listOfHlsManifest',
				],
				'SegmentDurationSeconds' => [
					'locationName' => 'segmentDurationSeconds',
					'shape'        => '__integer',
				],
				'UseAudioRenditionGroup' => [
					'locationName' => 'useAudioRenditionGroup',
					'shape'        => '__boolean',
				],
			],
			'required' => [ 'HlsManifests', ],
			'type'     => 'structure',
		],
		'InternalServerErrorException'           => [
			'error'     => [ 'httpStatusCode' => 500, ],
			'exception' => true,
			'members'   => [
				'Message' => [
					'locationName' => 'message',
					'shape'        => '__string',
				],
			],
			'type'      => 'structure',
		],
		'ListAssetsRequest'                      => [
			'members' => [
				'MaxResults'       => [
					'location'     => 'querystring',
					'locationName' => 'maxResults',
					'shape'        => 'MaxResults',
				],
				'NextToken'        => [
					'location'     => 'querystring',
					'locationName' => 'nextToken',
					'shape'        => '__string',
				],
				'PackagingGroupId' => [
					'location'     => 'querystring',
					'locationName' => 'packagingGroupId',
					'shape'        => '__string',
				],
			],
			'type'    => 'structure',
		],
		'ListAssetsResponse'                     => [
			'members' => [
				'Assets'    => [
					'locationName' => 'assets',
					'shape'        => '__listOfAssetShallow',
				],
				'NextToken' => [
					'locationName' => 'nextToken',
					'shape'        => '__string',
				],
			],
			'type'    => 'structure',
		],
		'ListPackagingConfigurationsRequest'     => [
			'members' => [
				'MaxResults'       => [
					'location'     => 'querystring',
					'locationName' => 'maxResults',
					'shape'        => 'MaxResults',
				],
				'NextToken'        => [
					'location'     => 'querystring',
					'locationName' => 'nextToken',
					'shape'        => '__string',
				],
				'PackagingGroupId' => [
					'location'     => 'querystring',
					'locationName' => 'packagingGroupId',
					'shape'        => '__string',
				],
			],
			'type'    => 'structure',
		],
		'ListPackagingConfigurationsResponse'    => [
			'members' => [
				'NextToken'               => [
					'locationName' => 'nextToken',
					'shape'        => '__string',
				],
				'PackagingConfigurations' => [
					'locationName' => 'packagingConfigurations',
					'shape'        => '__listOfPackagingConfiguration',
				],
			],
			'type'    => 'structure',
		],
		'ListPackagingGroupsRequest'             => [
			'members' => [
				'MaxResults' => [
					'location'     => 'querystring',
					'locationName' => 'maxResults',
					'shape'        => 'MaxResults',
				],
				'NextToken'  => [
					'location'     => 'querystring',
					'locationName' => 'nextToken',
					'shape'        => '__string',
				],
			],
			'type'    => 'structure',
		],
		'ListPackagingGroupsResponse'            => [
			'members' => [
				'NextToken'       => [
					'locationName' => 'nextToken',
					'shape'        => '__string',
				],
				'PackagingGroups' => [
					'locationName' => 'packagingGroups',
					'shape'        => '__listOfPackagingGroup',
				],
			],
			'type'    => 'structure',
		],
		'MaxResults'                             => [ 'max' => 1000, 'min' => 1, 'type' => 'integer', ],
		'MssEncryption'                          => [
			'members'  => [
				'SpekeKeyProvider' => [
					'locationName' => 'spekeKeyProvider',
					'shape'        => 'SpekeKeyProvider',
				],
			],
			'required' => [ 'SpekeKeyProvider', ],
			'type'     => 'structure',
		],
		'MssManifest'                            => [
			'members' => [
				'ManifestName'    => [
					'locationName' => 'manifestName',
					'shape'        => '__string',
				],
				'StreamSelection' => [
					'locationName' => 'streamSelection',
					'shape'        => 'StreamSelection',
				],
			],
			'type'    => 'structure',
		],
		'MssPackage'                             => [
			'members'  => [
				'Encryption'             => [
					'locationName' => 'encryption',
					'shape'        => 'MssEncryption',
				],
				'MssManifests'           => [
					'locationName' => 'mssManifests',
					'shape'        => '__listOfMssManifest',
				],
				'SegmentDurationSeconds' => [
					'locationName' => 'segmentDurationSeconds',
					'shape'        => '__integer',
				],
			],
			'required' => [ 'MssManifests', ],
			'type'     => 'structure',
		],
		'NotFoundException'                      => [
			'error'     => [ 'httpStatusCode' => 404, ],
			'exception' => true,
			'members'   => [
				'Message' => [
					'locationName' => 'message',
					'shape'        => '__string',
				],
			],
			'type'      => 'structure',
		],
		'PackagingConfiguration'                 => [
			'members' => [
				'Arn'              => [
					'locationName' => 'arn',
					'shape'        => '__string',
				],
				'CmafPackage'      => [
					'locationName' => 'cmafPackage',
					'shape'        => 'CmafPackage',
				],
				'DashPackage'      => [
					'locationName' => 'dashPackage',
					'shape'        => 'DashPackage',
				],
				'HlsPackage'       => [
					'locationName' => 'hlsPackage',
					'shape'        => 'HlsPackage',
				],
				'Id'               => [
					'locationName' => 'id',
					'shape'        => '__string',
				],
				'MssPackage'       => [
					'locationName' => 'mssPackage',
					'shape'        => 'MssPackage',
				],
				'PackagingGroupId' => [
					'locationName' => 'packagingGroupId',
					'shape'        => '__string',
				],
			],
			'type'    => 'structure',
		],
		'PackagingConfigurationCreateParameters' => [
			'members'  => [
				'CmafPackage'      => [
					'locationName' => 'cmafPackage',
					'shape'        => 'CmafPackage',
				],
				'DashPackage'      => [
					'locationName' => 'dashPackage',
					'shape'        => 'DashPackage',
				],
				'HlsPackage'       => [
					'locationName' => 'hlsPackage',
					'shape'        => 'HlsPackage',
				],
				'Id'               => [
					'locationName' => 'id',
					'shape'        => '__string',
				],
				'MssPackage'       => [
					'locationName' => 'mssPackage',
					'shape'        => 'MssPackage',
				],
				'PackagingGroupId' => [
					'locationName' => 'packagingGroupId',
					'shape'        => '__string',
				],
			],
			'required' => [ 'Id', 'PackagingGroupId', ],
			'type'     => 'structure',
		],
		'PackagingConfigurationList'             => [
			'members' => [
				'NextToken'               => [
					'locationName' => 'nextToken',
					'shape'        => '__string',
				],
				'PackagingConfigurations' => [
					'locationName' => 'packagingConfigurations',
					'shape'        => '__listOfPackagingConfiguration',
				],
			],
			'type'    => 'structure',
		],
		'PackagingGroup'                         => [
			'members' => [
				'Arn' => [
					'locationName' => 'arn',
					'shape'        => '__string',
				],
				'Id'  => [
					'locationName' => 'id',
					'shape'        => '__string',
				],
			],
			'type'    => 'structure',
		],
		'PackagingGroupCreateParameters'         => [
			'members'  => [
				'Id' => [
					'locationName' => 'id',
					'shape'        => '__string',
				],
			],
			'required' => [ 'Id', ],
			'type'     => 'structure',
		],
		'PackagingGroupList'                     => [
			'members' => [
				'NextToken'       => [
					'locationName' => 'nextToken',
					'shape'        => '__string',
				],
				'PackagingGroups' => [
					'locationName' => 'packagingGroups',
					'shape'        => '__listOfPackagingGroup',
				],
			],
			'type'    => 'structure',
		],
		'Profile'                                => [ 'enum' => [ 'NONE', 'HBBTV_1_5', ], 'type' => 'string', ],
		'ServiceUnavailableException'            => [
			'error'     => [ 'httpStatusCode' => 503, ],
			'exception' => true,
			'members'   => [
				'Message' => [
					'locationName' => 'message',
					'shape'        => '__string',
				],
			],
			'type'      => 'structure',
		],
		'SpekeKeyProvider'                       => [
			'members'  => [
				'RoleArn'   => [
					'locationName' => 'roleArn',
					'shape'        => '__string',
				],
				'SystemIds' => [
					'locationName' => 'systemIds',
					'shape'        => '__listOf__string',
				],
				'Url'       => [
					'locationName' => 'url',
					'shape'        => '__string',
				],
			],
			'required' => [ 'SystemIds', 'Url', 'RoleArn', ],
			'type'     => 'structure',
		],
		'StreamOrder'                            => [
			'enum' => [
				'ORIGINAL',
				'VIDEO_BITRATE_ASCENDING',
				'VIDEO_BITRATE_DESCENDING',
			],
			'type' => 'string',
		],
		'StreamSelection'                        => [
			'members' => [
				'MaxVideoBitsPerSecond' => [
					'locationName' => 'maxVideoBitsPerSecond',
					'shape'        => '__integer',
				],
				'MinVideoBitsPerSecond' => [
					'locationName' => 'minVideoBitsPerSecond',
					'shape'        => '__integer',
				],
				'StreamOrder'           => [
					'locationName' => 'streamOrder',
					'shape'        => 'StreamOrder',
				],
			],
			'type'    => 'structure',
		],
		'TooManyRequestsException'               => [
			'error'     => [ 'httpStatusCode' => 429, ],
			'exception' => true,
			'members'   => [
				'Message' => [
					'locationName' => 'message',
					'shape'        => '__string',
				],
			],
			'type'      => 'structure',
		],
		'UnprocessableEntityException'           => [
			'error'     => [ 'httpStatusCode' => 422, ],
			'exception' => true,
			'members'   => [
				'Message' => [
					'locationName' => 'message',
					'shape'        => '__string',
				],
			],
			'type'      => 'structure',
		],
		'__boolean'                              => [ 'type' => 'boolean', ],
		'__double'                               => [ 'type' => 'double', ],
		'__integer'                              => [ 'type' => 'integer', ],
		'__listOfAssetShallow'                   => [ 'member' => [ 'shape' => 'AssetShallow', ], 'type' => 'list', ],
		'__listOfDashManifest'                   => [ 'member' => [ 'shape' => 'DashManifest', ], 'type' => 'list', ],
		'__listOfEgressEndpoint'                 => [ 'member' => [ 'shape' => 'EgressEndpoint', ], 'type' => 'list', ],
		'__listOfHlsManifest'                    => [ 'member' => [ 'shape' => 'HlsManifest', ], 'type' => 'list', ],
		'__listOfMssManifest'                    => [ 'member' => [ 'shape' => 'MssManifest', ], 'type' => 'list', ],
		'__listOfPackagingConfiguration'         => [
			'member' => [ 'shape' => 'PackagingConfiguration', ],
			'type'   => 'list',
		],
		'__listOfPackagingGroup'                 => [ 'member' => [ 'shape' => 'PackagingGroup', ], 'type' => 'list', ],
		'__listOf__string'                       => [ 'member' => [ 'shape' => '__string', ], 'type' => 'list', ],
		'__long'                                 => [ 'type' => 'long', ],
		'__string'                               => [ 'type' => 'string', ],
	],
];
