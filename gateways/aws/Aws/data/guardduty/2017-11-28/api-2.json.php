<?php
// This file was auto-generated from sdk-root/src/data/guardduty/2017-11-28/api-2.json
return [
	'version'    => '2.0',
	'metadata'   => [
		'apiVersion'       => '2017-11-28',
		'endpointPrefix'   => 'guardduty',
		'jsonVersion'      => '1.1',
		'protocol'         => 'rest-json',
		'serviceFullName'  => 'Amazon GuardDuty',
		'serviceId'        => 'GuardDuty',
		'signatureVersion' => 'v4',
		'signingName'      => 'guardduty',
		'uid'              => 'guardduty-2017-11-28',
	],
	'operations' => [
		'AcceptInvitation'              => [
			'name'   => 'AcceptInvitation',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/detector/{detectorId}/master',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'AcceptInvitationRequest', ],
			'output' => [ 'shape' => 'AcceptInvitationResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
			],
		],
		'ArchiveFindings'               => [
			'name'   => 'ArchiveFindings',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/detector/{detectorId}/findings/archive',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'ArchiveFindingsRequest', ],
			'output' => [ 'shape' => 'ArchiveFindingsResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
			],
		],
		'CreateDetector'                => [
			'name'   => 'CreateDetector',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/detector', 'responseCode' => 200, ],
			'input'  => [ 'shape' => 'CreateDetectorRequest', ],
			'output' => [ 'shape' => 'CreateDetectorResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
			],
		],
		'CreateFilter'                  => [
			'name'   => 'CreateFilter',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/detector/{detectorId}/filter',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'CreateFilterRequest', ],
			'output' => [ 'shape' => 'CreateFilterResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
			],
		],
		'CreateIPSet'                   => [
			'name'   => 'CreateIPSet',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/detector/{detectorId}/ipset',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'CreateIPSetRequest', ],
			'output' => [ 'shape' => 'CreateIPSetResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
			],
		],
		'CreateMembers'                 => [
			'name'   => 'CreateMembers',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/detector/{detectorId}/member',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'CreateMembersRequest', ],
			'output' => [ 'shape' => 'CreateMembersResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
			],
		],
		'CreateSampleFindings'          => [
			'name'   => 'CreateSampleFindings',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/detector/{detectorId}/findings/create',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'CreateSampleFindingsRequest', ],
			'output' => [ 'shape' => 'CreateSampleFindingsResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
			],
		],
		'CreateThreatIntelSet'          => [
			'name'   => 'CreateThreatIntelSet',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/detector/{detectorId}/threatintelset',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'CreateThreatIntelSetRequest', ],
			'output' => [ 'shape' => 'CreateThreatIntelSetResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
			],
		],
		'DeclineInvitations'            => [
			'name'   => 'DeclineInvitations',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/invitation/decline',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'DeclineInvitationsRequest', ],
			'output' => [ 'shape' => 'DeclineInvitationsResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
			],
		],
		'DeleteDetector'                => [
			'name'   => 'DeleteDetector',
			'http'   => [
				'method'       => 'DELETE',
				'requestUri'   => '/detector/{detectorId}',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'DeleteDetectorRequest', ],
			'output' => [ 'shape' => 'DeleteDetectorResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
			],
		],
		'DeleteFilter'                  => [
			'name'   => 'DeleteFilter',
			'http'   => [
				'method'       => 'DELETE',
				'requestUri'   => '/detector/{detectorId}/filter/{filterName}',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'DeleteFilterRequest', ],
			'output' => [ 'shape' => 'DeleteFilterResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
			],
		],
		'DeleteIPSet'                   => [
			'name'   => 'DeleteIPSet',
			'http'   => [
				'method'       => 'DELETE',
				'requestUri'   => '/detector/{detectorId}/ipset/{ipSetId}',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'DeleteIPSetRequest', ],
			'output' => [ 'shape' => 'DeleteIPSetResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
			],
		],
		'DeleteInvitations'             => [
			'name'   => 'DeleteInvitations',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/invitation/delete',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'DeleteInvitationsRequest', ],
			'output' => [ 'shape' => 'DeleteInvitationsResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
			],
		],
		'DeleteMembers'                 => [
			'name'   => 'DeleteMembers',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/detector/{detectorId}/member/delete',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'DeleteMembersRequest', ],
			'output' => [ 'shape' => 'DeleteMembersResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
			],
		],
		'DeleteThreatIntelSet'          => [
			'name'   => 'DeleteThreatIntelSet',
			'http'   => [
				'method'       => 'DELETE',
				'requestUri'   => '/detector/{detectorId}/threatintelset/{threatIntelSetId}',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'DeleteThreatIntelSetRequest', ],
			'output' => [ 'shape' => 'DeleteThreatIntelSetResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
			],
		],
		'DisassociateFromMasterAccount' => [
			'name'   => 'DisassociateFromMasterAccount',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/detector/{detectorId}/master/disassociate',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'DisassociateFromMasterAccountRequest', ],
			'output' => [ 'shape' => 'DisassociateFromMasterAccountResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
			],
		],
		'DisassociateMembers'           => [
			'name'   => 'DisassociateMembers',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/detector/{detectorId}/member/disassociate',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'DisassociateMembersRequest', ],
			'output' => [ 'shape' => 'DisassociateMembersResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
			],
		],
		'GetDetector'                   => [
			'name'   => 'GetDetector',
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/detector/{detectorId}',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'GetDetectorRequest', ],
			'output' => [ 'shape' => 'GetDetectorResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
			],
		],
		'GetFilter'                     => [
			'name'   => 'GetFilter',
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/detector/{detectorId}/filter/{filterName}',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'GetFilterRequest', ],
			'output' => [ 'shape' => 'GetFilterResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
			],
		],
		'GetFindings'                   => [
			'name'   => 'GetFindings',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/detector/{detectorId}/findings/get',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'GetFindingsRequest', ],
			'output' => [ 'shape' => 'GetFindingsResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
			],
		],
		'GetFindingsStatistics'         => [
			'name'   => 'GetFindingsStatistics',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/detector/{detectorId}/findings/statistics',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'GetFindingsStatisticsRequest', ],
			'output' => [ 'shape' => 'GetFindingsStatisticsResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
			],
		],
		'GetIPSet'                      => [
			'name'   => 'GetIPSet',
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/detector/{detectorId}/ipset/{ipSetId}',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'GetIPSetRequest', ],
			'output' => [ 'shape' => 'GetIPSetResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
			],
		],
		'GetInvitationsCount'           => [
			'name'   => 'GetInvitationsCount',
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/invitation/count',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'GetInvitationsCountRequest', ],
			'output' => [ 'shape' => 'GetInvitationsCountResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
			],
		],
		'GetMasterAccount'              => [
			'name'   => 'GetMasterAccount',
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/detector/{detectorId}/master',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'GetMasterAccountRequest', ],
			'output' => [ 'shape' => 'GetMasterAccountResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
			],
		],
		'GetMembers'                    => [
			'name'   => 'GetMembers',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/detector/{detectorId}/member/get',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'GetMembersRequest', ],
			'output' => [ 'shape' => 'GetMembersResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
			],
		],
		'GetThreatIntelSet'             => [
			'name'   => 'GetThreatIntelSet',
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/detector/{detectorId}/threatintelset/{threatIntelSetId}',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'GetThreatIntelSetRequest', ],
			'output' => [ 'shape' => 'GetThreatIntelSetResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
			],
		],
		'InviteMembers'                 => [
			'name'   => 'InviteMembers',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/detector/{detectorId}/member/invite',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'InviteMembersRequest', ],
			'output' => [ 'shape' => 'InviteMembersResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
			],
		],
		'ListDetectors'                 => [
			'name'   => 'ListDetectors',
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/detector',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'ListDetectorsRequest', ],
			'output' => [ 'shape' => 'ListDetectorsResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
			],
		],
		'ListFilters'                   => [
			'name'   => 'ListFilters',
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/detector/{detectorId}/filter',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'ListFiltersRequest', ],
			'output' => [ 'shape' => 'ListFiltersResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
			],
		],
		'ListFindings'                  => [
			'name'   => 'ListFindings',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/detector/{detectorId}/findings',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'ListFindingsRequest', ],
			'output' => [ 'shape' => 'ListFindingsResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
			],
		],
		'ListIPSets'                    => [
			'name'   => 'ListIPSets',
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/detector/{detectorId}/ipset',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'ListIPSetsRequest', ],
			'output' => [ 'shape' => 'ListIPSetsResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
			],
		],
		'ListInvitations'               => [
			'name'   => 'ListInvitations',
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/invitation',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'ListInvitationsRequest', ],
			'output' => [ 'shape' => 'ListInvitationsResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
			],
		],
		'ListMembers'                   => [
			'name'   => 'ListMembers',
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/detector/{detectorId}/member',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'ListMembersRequest', ],
			'output' => [ 'shape' => 'ListMembersResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
			],
		],
		'ListTagsForResource'           => [
			'name'   => 'ListTagsForResource',
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/tags/{resourceArn}',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'ListTagsForResourceRequest', ],
			'output' => [ 'shape' => 'ListTagsForResourceResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
			],
		],
		'ListThreatIntelSets'           => [
			'name'   => 'ListThreatIntelSets',
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/detector/{detectorId}/threatintelset',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'ListThreatIntelSetsRequest', ],
			'output' => [ 'shape' => 'ListThreatIntelSetsResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
			],
		],
		'StartMonitoringMembers'        => [
			'name'   => 'StartMonitoringMembers',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/detector/{detectorId}/member/start',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'StartMonitoringMembersRequest', ],
			'output' => [ 'shape' => 'StartMonitoringMembersResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
			],
		],
		'StopMonitoringMembers'         => [
			'name'   => 'StopMonitoringMembers',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/detector/{detectorId}/member/stop',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'StopMonitoringMembersRequest', ],
			'output' => [ 'shape' => 'StopMonitoringMembersResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
			],
		],
		'TagResource'                   => [
			'name'   => 'TagResource',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/tags/{resourceArn}',
				'responseCode' => 204,
			],
			'input'  => [ 'shape' => 'TagResourceRequest', ],
			'output' => [ 'shape' => 'TagResourceResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
			],
		],
		'UnarchiveFindings'             => [
			'name'   => 'UnarchiveFindings',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/detector/{detectorId}/findings/unarchive',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'UnarchiveFindingsRequest', ],
			'output' => [ 'shape' => 'UnarchiveFindingsResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
			],
		],
		'UntagResource'                 => [
			'name'   => 'UntagResource',
			'http'   => [
				'method'       => 'DELETE',
				'requestUri'   => '/tags/{resourceArn}',
				'responseCode' => 204,
			],
			'input'  => [ 'shape' => 'UntagResourceRequest', ],
			'output' => [ 'shape' => 'UntagResourceResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
			],
		],
		'UpdateDetector'                => [
			'name'   => 'UpdateDetector',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/detector/{detectorId}',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'UpdateDetectorRequest', ],
			'output' => [ 'shape' => 'UpdateDetectorResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
			],
		],
		'UpdateFilter'                  => [
			'name'   => 'UpdateFilter',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/detector/{detectorId}/filter/{filterName}',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'UpdateFilterRequest', ],
			'output' => [ 'shape' => 'UpdateFilterResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
			],
		],
		'UpdateFindingsFeedback'        => [
			'name'   => 'UpdateFindingsFeedback',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/detector/{detectorId}/findings/feedback',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'UpdateFindingsFeedbackRequest', ],
			'output' => [ 'shape' => 'UpdateFindingsFeedbackResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
			],
		],
		'UpdateIPSet'                   => [
			'name'   => 'UpdateIPSet',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/detector/{detectorId}/ipset/{ipSetId}',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'UpdateIPSetRequest', ],
			'output' => [ 'shape' => 'UpdateIPSetResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
			],
		],
		'UpdateThreatIntelSet'          => [
			'name'   => 'UpdateThreatIntelSet',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/detector/{detectorId}/threatintelset/{threatIntelSetId}',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'UpdateThreatIntelSetRequest', ],
			'output' => [ 'shape' => 'UpdateThreatIntelSetResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
			],
		],
	],
	'shapes'     => [
		'AcceptInvitationRequest'               => [
			'type'     => 'structure',
			'required' => [ 'DetectorId', 'MasterId', 'InvitationId', ],
			'members'  => [
				'DetectorId'   => [
					'shape'        => 'DetectorId',
					'location'     => 'uri',
					'locationName' => 'detectorId',
				],
				'MasterId'     => [
					'shape'        => 'String',
					'locationName' => 'masterId',
				],
				'InvitationId' => [
					'shape'        => 'String',
					'locationName' => 'invitationId',
				],
			],
		],
		'AcceptInvitationResponse'              => [ 'type' => 'structure', 'members' => [], ],
		'AccessKeyDetails'                      => [
			'type'    => 'structure',
			'members' => [
				'AccessKeyId' => [
					'shape'        => 'String',
					'locationName' => 'accessKeyId',
				],
				'PrincipalId' => [
					'shape'        => 'String',
					'locationName' => 'principalId',
				],
				'UserName'    => [
					'shape'        => 'String',
					'locationName' => 'userName',
				],
				'UserType'    => [
					'shape'        => 'String',
					'locationName' => 'userType',
				],
			],
		],
		'AccountDetail'                         => [
			'type'     => 'structure',
			'required' => [ 'AccountId', 'Email', ],
			'members'  => [
				'AccountId' => [
					'shape'        => 'AccountId',
					'locationName' => 'accountId',
				],
				'Email'     => [
					'shape'        => 'Email',
					'locationName' => 'email',
				],
			],
		],
		'AccountDetails'                        => [
			'type'   => 'list',
			'member' => [ 'shape' => 'AccountDetail', ],
			'max'    => 50,
			'min'    => 1,
		],
		'AccountId'                             => [ 'type' => 'string', 'max' => 12, 'min' => 12, ],
		'AccountIds'                            => [
			'type'   => 'list',
			'member' => [ 'shape' => 'AccountId', ],
			'max'    => 50,
			'min'    => 1,
		],
		'Action'                                => [
			'type'    => 'structure',
			'members' => [
				'ActionType'              => [
					'shape'        => 'String',
					'locationName' => 'actionType',
				],
				'AwsApiCallAction'        => [
					'shape'        => 'AwsApiCallAction',
					'locationName' => 'awsApiCallAction',
				],
				'DnsRequestAction'        => [
					'shape'        => 'DnsRequestAction',
					'locationName' => 'dnsRequestAction',
				],
				'NetworkConnectionAction' => [
					'shape'        => 'NetworkConnectionAction',
					'locationName' => 'networkConnectionAction',
				],
				'PortProbeAction'         => [
					'shape'        => 'PortProbeAction',
					'locationName' => 'portProbeAction',
				],
			],
		],
		'ArchiveFindingsRequest'                => [
			'type'     => 'structure',
			'required' => [ 'DetectorId', 'FindingIds', ],
			'members'  => [
				'DetectorId' => [
					'shape'        => 'DetectorId',
					'location'     => 'uri',
					'locationName' => 'detectorId',
				],
				'FindingIds' => [
					'shape'        => 'FindingIds',
					'locationName' => 'findingIds',
				],
			],
		],
		'ArchiveFindingsResponse'               => [ 'type' => 'structure', 'members' => [], ],
		'AwsApiCallAction'                      => [
			'type'    => 'structure',
			'members' => [
				'Api'             => [
					'shape'        => 'String',
					'locationName' => 'api',
				],
				'CallerType'      => [
					'shape'        => 'String',
					'locationName' => 'callerType',
				],
				'DomainDetails'   => [
					'shape'        => 'DomainDetails',
					'locationName' => 'domainDetails',
				],
				'RemoteIpDetails' => [
					'shape'        => 'RemoteIpDetails',
					'locationName' => 'remoteIpDetails',
				],
				'ServiceName'     => [
					'shape'        => 'String',
					'locationName' => 'serviceName',
				],
			],
		],
		'BadRequestException'                   => [
			'type'      => 'structure',
			'members'   => [
				'Message' => [
					'shape'        => 'String',
					'locationName' => 'message',
				],
				'Type'    => [
					'shape'        => 'String',
					'locationName' => '__type',
				],
			],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'Boolean'                               => [ 'type' => 'boolean', ],
		'City'                                  => [
			'type'    => 'structure',
			'members' => [
				'CityName' => [
					'shape'        => 'String',
					'locationName' => 'cityName',
				],
			],
		],
		'ClientToken'                           => [ 'type' => 'string', 'max' => 64, 'min' => 0, ],
		'Condition'                             => [
			'type'    => 'structure',
			'members' => [
				'Eq'                 => [
					'shape'        => 'Eq',
					'deprecated'   => true,
					'locationName' => 'eq',
				],
				'Neq'                => [
					'shape'        => 'Neq',
					'deprecated'   => true,
					'locationName' => 'neq',
				],
				'Gt'                 => [
					'shape'        => 'Integer',
					'deprecated'   => true,
					'locationName' => 'gt',
				],
				'Gte'                => [
					'shape'        => 'Integer',
					'deprecated'   => true,
					'locationName' => 'gte',
				],
				'Lt'                 => [
					'shape'        => 'Integer',
					'deprecated'   => true,
					'locationName' => 'lt',
				],
				'Lte'                => [
					'shape'        => 'Integer',
					'deprecated'   => true,
					'locationName' => 'lte',
				],
				'Equals'             => [
					'shape'        => 'Equals',
					'locationName' => 'equals',
				],
				'NotEquals'          => [
					'shape'        => 'NotEquals',
					'locationName' => 'notEquals',
				],
				'GreaterThan'        => [
					'shape'        => 'Long',
					'locationName' => 'greaterThan',
				],
				'GreaterThanOrEqual' => [
					'shape'        => 'Long',
					'locationName' => 'greaterThanOrEqual',
				],
				'LessThan'           => [
					'shape'        => 'Long',
					'locationName' => 'lessThan',
				],
				'LessThanOrEqual'    => [
					'shape'        => 'Long',
					'locationName' => 'lessThanOrEqual',
				],
			],
		],
		'CountBySeverity'                       => [
			'type'  => 'map',
			'key'   => [ 'shape' => 'String', ],
			'value' => [ 'shape' => 'Integer', ],
		],
		'Country'                               => [
			'type'    => 'structure',
			'members' => [
				'CountryCode' => [
					'shape'        => 'String',
					'locationName' => 'countryCode',
				],
				'CountryName' => [
					'shape'        => 'String',
					'locationName' => 'countryName',
				],
			],
		],
		'CreateDetectorRequest'                 => [
			'type'     => 'structure',
			'required' => [ 'Enable', ],
			'members'  => [
				'Enable'                     => [
					'shape'        => 'Boolean',
					'locationName' => 'enable',
				],
				'ClientToken'                => [
					'shape'            => 'ClientToken',
					'idempotencyToken' => true,
					'locationName'     => 'clientToken',
				],
				'FindingPublishingFrequency' => [
					'shape'        => 'FindingPublishingFrequency',
					'locationName' => 'findingPublishingFrequency',
				],
				'Tags'                       => [
					'shape'        => 'TagMap',
					'locationName' => 'tags',
				],
			],
		],
		'CreateDetectorResponse'                => [
			'type'    => 'structure',
			'members' => [
				'DetectorId' => [
					'shape'        => 'DetectorId',
					'locationName' => 'detectorId',
				],
			],
		],
		'CreateFilterRequest'                   => [
			'type'     => 'structure',
			'required' => [ 'DetectorId', 'Name', 'FindingCriteria', ],
			'members'  => [
				'DetectorId'      => [
					'shape'        => 'DetectorId',
					'location'     => 'uri',
					'locationName' => 'detectorId',
				],
				'Name'            => [
					'shape'        => 'FilterName',
					'locationName' => 'name',
				],
				'Description'     => [
					'shape'        => 'FilterDescription',
					'locationName' => 'description',
				],
				'Action'          => [
					'shape'        => 'FilterAction',
					'locationName' => 'action',
				],
				'Rank'            => [
					'shape'        => 'FilterRank',
					'locationName' => 'rank',
				],
				'FindingCriteria' => [
					'shape'        => 'FindingCriteria',
					'locationName' => 'findingCriteria',
				],
				'ClientToken'     => [
					'shape'            => 'ClientToken',
					'idempotencyToken' => true,
					'locationName'     => 'clientToken',
				],
				'Tags'            => [
					'shape'        => 'TagMap',
					'locationName' => 'tags',
				],
			],
		],
		'CreateFilterResponse'                  => [
			'type'     => 'structure',
			'required' => [ 'Name', ],
			'members'  => [
				'Name' => [
					'shape'        => 'FilterName',
					'locationName' => 'name',
				],
			],
		],
		'CreateIPSetRequest'                    => [
			'type'     => 'structure',
			'required' => [ 'DetectorId', 'Name', 'Format', 'Location', 'Activate', ],
			'members'  => [
				'DetectorId'  => [
					'shape'        => 'DetectorId',
					'location'     => 'uri',
					'locationName' => 'detectorId',
				],
				'Name'        => [
					'shape'        => 'Name',
					'locationName' => 'name',
				],
				'Format'      => [
					'shape'        => 'IpSetFormat',
					'locationName' => 'format',
				],
				'Location'    => [
					'shape'        => 'Location',
					'locationName' => 'location',
				],
				'Activate'    => [
					'shape'        => 'Boolean',
					'locationName' => 'activate',
				],
				'ClientToken' => [
					'shape'            => 'ClientToken',
					'idempotencyToken' => true,
					'locationName'     => 'clientToken',
				],
				'Tags'        => [
					'shape'        => 'TagMap',
					'locationName' => 'tags',
				],
			],
		],
		'CreateIPSetResponse'                   => [
			'type'     => 'structure',
			'required' => [ 'IpSetId', ],
			'members'  => [
				'IpSetId' => [
					'shape'        => 'String',
					'locationName' => 'ipSetId',
				],
			],
		],
		'CreateMembersRequest'                  => [
			'type'     => 'structure',
			'required' => [ 'DetectorId', 'AccountDetails', ],
			'members'  => [
				'DetectorId'     => [
					'shape'        => 'DetectorId',
					'location'     => 'uri',
					'locationName' => 'detectorId',
				],
				'AccountDetails' => [
					'shape'        => 'AccountDetails',
					'locationName' => 'accountDetails',
				],
			],
		],
		'CreateMembersResponse'                 => [
			'type'     => 'structure',
			'required' => [ 'UnprocessedAccounts', ],
			'members'  => [
				'UnprocessedAccounts' => [
					'shape'        => 'UnprocessedAccounts',
					'locationName' => 'unprocessedAccounts',
				],
			],
		],
		'CreateSampleFindingsRequest'           => [
			'type'     => 'structure',
			'required' => [ 'DetectorId', ],
			'members'  => [
				'DetectorId'   => [
					'shape'        => 'DetectorId',
					'location'     => 'uri',
					'locationName' => 'detectorId',
				],
				'FindingTypes' => [
					'shape'        => 'FindingTypes',
					'locationName' => 'findingTypes',
				],
			],
		],
		'CreateSampleFindingsResponse'          => [ 'type' => 'structure', 'members' => [], ],
		'CreateThreatIntelSetRequest'           => [
			'type'     => 'structure',
			'required' => [ 'DetectorId', 'Name', 'Format', 'Location', 'Activate', ],
			'members'  => [
				'DetectorId'  => [
					'shape'        => 'DetectorId',
					'location'     => 'uri',
					'locationName' => 'detectorId',
				],
				'Name'        => [
					'shape'        => 'Name',
					'locationName' => 'name',
				],
				'Format'      => [
					'shape'        => 'ThreatIntelSetFormat',
					'locationName' => 'format',
				],
				'Location'    => [
					'shape'        => 'Location',
					'locationName' => 'location',
				],
				'Activate'    => [
					'shape'        => 'Boolean',
					'locationName' => 'activate',
				],
				'ClientToken' => [
					'shape'            => 'ClientToken',
					'idempotencyToken' => true,
					'locationName'     => 'clientToken',
				],
				'Tags'        => [
					'shape'        => 'TagMap',
					'locationName' => 'tags',
				],
			],
		],
		'CreateThreatIntelSetResponse'          => [
			'type'     => 'structure',
			'required' => [ 'ThreatIntelSetId', ],
			'members'  => [
				'ThreatIntelSetId' => [
					'shape'        => 'String',
					'locationName' => 'threatIntelSetId',
				],
			],
		],
		'Criterion'                             => [
			'type'  => 'map',
			'key'   => [ 'shape' => 'String', ],
			'value' => [ 'shape' => 'Condition', ],
		],
		'DeclineInvitationsRequest'             => [
			'type'     => 'structure',
			'required' => [ 'AccountIds', ],
			'members'  => [
				'AccountIds' => [
					'shape'        => 'AccountIds',
					'locationName' => 'accountIds',
				],
			],
		],
		'DeclineInvitationsResponse'            => [
			'type'     => 'structure',
			'required' => [ 'UnprocessedAccounts', ],
			'members'  => [
				'UnprocessedAccounts' => [
					'shape'        => 'UnprocessedAccounts',
					'locationName' => 'unprocessedAccounts',
				],
			],
		],
		'DeleteDetectorRequest'                 => [
			'type'     => 'structure',
			'required' => [ 'DetectorId', ],
			'members'  => [
				'DetectorId' => [
					'shape'        => 'DetectorId',
					'location'     => 'uri',
					'locationName' => 'detectorId',
				],
			],
		],
		'DeleteDetectorResponse'                => [ 'type' => 'structure', 'members' => [], ],
		'DeleteFilterRequest'                   => [
			'type'     => 'structure',
			'required' => [ 'DetectorId', 'FilterName', ],
			'members'  => [
				'DetectorId' => [
					'shape'        => 'DetectorId',
					'location'     => 'uri',
					'locationName' => 'detectorId',
				],
				'FilterName' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'filterName',
				],
			],
		],
		'DeleteFilterResponse'                  => [ 'type' => 'structure', 'members' => [], ],
		'DeleteIPSetRequest'                    => [
			'type'     => 'structure',
			'required' => [ 'DetectorId', 'IpSetId', ],
			'members'  => [
				'DetectorId' => [
					'shape'        => 'DetectorId',
					'location'     => 'uri',
					'locationName' => 'detectorId',
				],
				'IpSetId'    => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'ipSetId',
				],
			],
		],
		'DeleteIPSetResponse'                   => [ 'type' => 'structure', 'members' => [], ],
		'DeleteInvitationsRequest'              => [
			'type'     => 'structure',
			'required' => [ 'AccountIds', ],
			'members'  => [
				'AccountIds' => [
					'shape'        => 'AccountIds',
					'locationName' => 'accountIds',
				],
			],
		],
		'DeleteInvitationsResponse'             => [
			'type'     => 'structure',
			'required' => [ 'UnprocessedAccounts', ],
			'members'  => [
				'UnprocessedAccounts' => [
					'shape'        => 'UnprocessedAccounts',
					'locationName' => 'unprocessedAccounts',
				],
			],
		],
		'DeleteMembersRequest'                  => [
			'type'     => 'structure',
			'required' => [ 'DetectorId', 'AccountIds', ],
			'members'  => [
				'DetectorId' => [
					'shape'        => 'DetectorId',
					'location'     => 'uri',
					'locationName' => 'detectorId',
				],
				'AccountIds' => [
					'shape'        => 'AccountIds',
					'locationName' => 'accountIds',
				],
			],
		],
		'DeleteMembersResponse'                 => [
			'type'     => 'structure',
			'required' => [ 'UnprocessedAccounts', ],
			'members'  => [
				'UnprocessedAccounts' => [
					'shape'        => 'UnprocessedAccounts',
					'locationName' => 'unprocessedAccounts',
				],
			],
		],
		'DeleteThreatIntelSetRequest'           => [
			'type'     => 'structure',
			'required' => [ 'DetectorId', 'ThreatIntelSetId', ],
			'members'  => [
				'DetectorId'       => [
					'shape'        => 'DetectorId',
					'location'     => 'uri',
					'locationName' => 'detectorId',
				],
				'ThreatIntelSetId' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'threatIntelSetId',
				],
			],
		],
		'DeleteThreatIntelSetResponse'          => [ 'type' => 'structure', 'members' => [], ],
		'DetectorId'                            => [ 'type' => 'string', 'max' => 300, 'min' => 1, ],
		'DetectorIds'                           => [
			'type'   => 'list',
			'member' => [ 'shape' => 'DetectorId', ],
			'max'    => 50,
			'min'    => 0,
		],
		'DetectorStatus'                        => [
			'type' => 'string',
			'enum' => [ 'ENABLED', 'DISABLED', ],
			'max'  => 300,
			'min'  => 1,
		],
		'DisassociateFromMasterAccountRequest'  => [
			'type'     => 'structure',
			'required' => [ 'DetectorId', ],
			'members'  => [
				'DetectorId' => [
					'shape'        => 'DetectorId',
					'location'     => 'uri',
					'locationName' => 'detectorId',
				],
			],
		],
		'DisassociateFromMasterAccountResponse' => [ 'type' => 'structure', 'members' => [], ],
		'DisassociateMembersRequest'            => [
			'type'     => 'structure',
			'required' => [ 'DetectorId', 'AccountIds', ],
			'members'  => [
				'DetectorId' => [
					'shape'        => 'DetectorId',
					'location'     => 'uri',
					'locationName' => 'detectorId',
				],
				'AccountIds' => [
					'shape'        => 'AccountIds',
					'locationName' => 'accountIds',
				],
			],
		],
		'DisassociateMembersResponse'           => [
			'type'     => 'structure',
			'required' => [ 'UnprocessedAccounts', ],
			'members'  => [
				'UnprocessedAccounts' => [
					'shape'        => 'UnprocessedAccounts',
					'locationName' => 'unprocessedAccounts',
				],
			],
		],
		'DnsRequestAction'                      => [
			'type'    => 'structure',
			'members' => [
				'Domain' => [
					'shape'        => 'String',
					'locationName' => 'domain',
				],
			],
		],
		'DomainDetails'                         => [
			'type'    => 'structure',
			'members' => [
				'Domain' => [
					'shape'        => 'String',
					'locationName' => 'domain',
				],
			],
		],
		'Double'                                => [ 'type' => 'double', ],
		'Email'                                 => [ 'type' => 'string', 'max' => 64, 'min' => 1, ],
		'Eq'                                    => [ 'type' => 'list', 'member' => [ 'shape' => 'String', ], ],
		'Equals'                                => [ 'type' => 'list', 'member' => [ 'shape' => 'String', ], ],
		'Feedback'                              => [ 'type' => 'string', 'enum' => [ 'USEFUL', 'NOT_USEFUL', ], ],
		'FilterAction'                          => [
			'type' => 'string',
			'enum' => [ 'NOOP', 'ARCHIVE', ],
			'max'  => 300,
			'min'  => 1,
		],
		'FilterDescription'                     => [ 'type' => 'string', 'max' => 512, 'min' => 0, ],
		'FilterName'                            => [ 'type' => 'string', 'max' => 64, 'min' => 3, ],
		'FilterNames'                           => [
			'type'   => 'list',
			'member' => [ 'shape' => 'FilterName', ],
			'max'    => 50,
			'min'    => 0,
		],
		'FilterRank'                            => [ 'type' => 'integer', 'max' => 100, 'min' => 1, ],
		'Finding'                               => [
			'type'     => 'structure',
			'required' => [
				'AccountId',
				'Arn',
				'CreatedAt',
				'Id',
				'Region',
				'Resource',
				'SchemaVersion',
				'Severity',
				'Type',
				'UpdatedAt',
			],
			'members'  => [
				'AccountId'     => [ 'shape' => 'String', 'locationName' => 'accountId', ],
				'Arn'           => [ 'shape' => 'String', 'locationName' => 'arn', ],
				'Confidence'    => [ 'shape' => 'Double', 'locationName' => 'confidence', ],
				'CreatedAt'     => [ 'shape' => 'String', 'locationName' => 'createdAt', ],
				'Description'   => [ 'shape' => 'String', 'locationName' => 'description', ],
				'Id'            => [ 'shape' => 'String', 'locationName' => 'id', ],
				'Partition'     => [ 'shape' => 'String', 'locationName' => 'partition', ],
				'Region'        => [ 'shape' => 'String', 'locationName' => 'region', ],
				'Resource'      => [ 'shape' => 'Resource', 'locationName' => 'resource', ],
				'SchemaVersion' => [ 'shape' => 'String', 'locationName' => 'schemaVersion', ],
				'Service'       => [ 'shape' => 'Service', 'locationName' => 'service', ],
				'Severity'      => [ 'shape' => 'Double', 'locationName' => 'severity', ],
				'Title'         => [ 'shape' => 'String', 'locationName' => 'title', ],
				'Type'          => [ 'shape' => 'FindingType', 'locationName' => 'type', ],
				'UpdatedAt'     => [ 'shape' => 'String', 'locationName' => 'updatedAt', ],
			],
		],
		'FindingCriteria'                       => [
			'type'    => 'structure',
			'members' => [
				'Criterion' => [
					'shape'        => 'Criterion',
					'locationName' => 'criterion',
				],
			],
		],
		'FindingId'                             => [ 'type' => 'string', 'max' => 300, 'min' => 1, ],
		'FindingIds'                            => [
			'type'   => 'list',
			'member' => [ 'shape' => 'FindingId', ],
			'max'    => 50,
			'min'    => 0,
		],
		'FindingPublishingFrequency'            => [
			'type' => 'string',
			'enum' => [ 'FIFTEEN_MINUTES', 'ONE_HOUR', 'SIX_HOURS', ],
		],
		'FindingStatisticType'                  => [ 'type' => 'string', 'enum' => [ 'COUNT_BY_SEVERITY', ], ],
		'FindingStatisticTypes'                 => [
			'type'   => 'list',
			'member' => [ 'shape' => 'FindingStatisticType', ],
			'max'    => 10,
			'min'    => 0,
		],
		'FindingStatistics'                     => [
			'type'    => 'structure',
			'members' => [
				'CountBySeverity' => [
					'shape'        => 'CountBySeverity',
					'locationName' => 'countBySeverity',
				],
			],
		],
		'FindingType'                           => [ 'type' => 'string', 'max' => 50, 'min' => 1, ],
		'FindingTypes'                          => [
			'type'   => 'list',
			'member' => [ 'shape' => 'FindingType', ],
			'max'    => 50,
			'min'    => 0,
		],
		'Findings'                              => [
			'type'   => 'list',
			'member' => [ 'shape' => 'Finding', ],
			'max'    => 50,
			'min'    => 0,
		],
		'GeoLocation'                           => [
			'type'    => 'structure',
			'members' => [
				'Lat' => [
					'shape'        => 'Double',
					'locationName' => 'lat',
				],
				'Lon' => [
					'shape'        => 'Double',
					'locationName' => 'lon',
				],
			],
		],
		'GetDetectorRequest'                    => [
			'type'     => 'structure',
			'required' => [ 'DetectorId', ],
			'members'  => [
				'DetectorId' => [
					'shape'        => 'DetectorId',
					'location'     => 'uri',
					'locationName' => 'detectorId',
				],
			],
		],
		'GetDetectorResponse'                   => [
			'type'     => 'structure',
			'required' => [ 'ServiceRole', 'Status', ],
			'members'  => [
				'CreatedAt'                  => [
					'shape'        => 'String',
					'locationName' => 'createdAt',
				],
				'FindingPublishingFrequency' => [
					'shape'        => 'FindingPublishingFrequency',
					'locationName' => 'findingPublishingFrequency',
				],
				'ServiceRole'                => [
					'shape'        => 'String',
					'locationName' => 'serviceRole',
				],
				'Status'                     => [
					'shape'        => 'DetectorStatus',
					'locationName' => 'status',
				],
				'UpdatedAt'                  => [
					'shape'        => 'String',
					'locationName' => 'updatedAt',
				],
				'Tags'                       => [
					'shape'        => 'TagMap',
					'locationName' => 'tags',
				],
			],
		],
		'GetFilterRequest'                      => [
			'type'     => 'structure',
			'required' => [ 'DetectorId', 'FilterName', ],
			'members'  => [
				'DetectorId' => [
					'shape'        => 'DetectorId',
					'location'     => 'uri',
					'locationName' => 'detectorId',
				],
				'FilterName' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'filterName',
				],
			],
		],
		'GetFilterResponse'                     => [
			'type'     => 'structure',
			'required' => [ 'Name', 'Action', 'FindingCriteria', ],
			'members'  => [
				'Name'            => [
					'shape'        => 'FilterName',
					'locationName' => 'name',
				],
				'Description'     => [
					'shape'        => 'FilterDescription',
					'locationName' => 'description',
				],
				'Action'          => [
					'shape'        => 'FilterAction',
					'locationName' => 'action',
				],
				'Rank'            => [
					'shape'        => 'FilterRank',
					'locationName' => 'rank',
				],
				'FindingCriteria' => [
					'shape'        => 'FindingCriteria',
					'locationName' => 'findingCriteria',
				],
				'Tags'            => [
					'shape'        => 'TagMap',
					'locationName' => 'tags',
				],
			],
		],
		'GetFindingsRequest'                    => [
			'type'     => 'structure',
			'required' => [ 'DetectorId', 'FindingIds', ],
			'members'  => [
				'DetectorId'   => [
					'shape'        => 'DetectorId',
					'location'     => 'uri',
					'locationName' => 'detectorId',
				],
				'FindingIds'   => [
					'shape'        => 'FindingIds',
					'locationName' => 'findingIds',
				],
				'SortCriteria' => [
					'shape'        => 'SortCriteria',
					'locationName' => 'sortCriteria',
				],
			],
		],
		'GetFindingsResponse'                   => [
			'type'     => 'structure',
			'required' => [ 'Findings', ],
			'members'  => [
				'Findings' => [
					'shape'        => 'Findings',
					'locationName' => 'findings',
				],
			],
		],
		'GetFindingsStatisticsRequest'          => [
			'type'     => 'structure',
			'required' => [ 'DetectorId', 'FindingStatisticTypes', ],
			'members'  => [
				'DetectorId'            => [
					'shape'        => 'DetectorId',
					'location'     => 'uri',
					'locationName' => 'detectorId',
				],
				'FindingStatisticTypes' => [
					'shape'        => 'FindingStatisticTypes',
					'locationName' => 'findingStatisticTypes',
				],
				'FindingCriteria'       => [
					'shape'        => 'FindingCriteria',
					'locationName' => 'findingCriteria',
				],
			],
		],
		'GetFindingsStatisticsResponse'         => [
			'type'     => 'structure',
			'required' => [ 'FindingStatistics', ],
			'members'  => [
				'FindingStatistics' => [
					'shape'        => 'FindingStatistics',
					'locationName' => 'findingStatistics',
				],
			],
		],
		'GetIPSetRequest'                       => [
			'type'     => 'structure',
			'required' => [ 'DetectorId', 'IpSetId', ],
			'members'  => [
				'DetectorId' => [
					'shape'        => 'DetectorId',
					'location'     => 'uri',
					'locationName' => 'detectorId',
				],
				'IpSetId'    => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'ipSetId',
				],
			],
		],
		'GetIPSetResponse'                      => [
			'type'     => 'structure',
			'required' => [ 'Name', 'Format', 'Location', 'Status', ],
			'members'  => [
				'Name'     => [
					'shape'        => 'Name',
					'locationName' => 'name',
				],
				'Format'   => [
					'shape'        => 'IpSetFormat',
					'locationName' => 'format',
				],
				'Location' => [
					'shape'        => 'Location',
					'locationName' => 'location',
				],
				'Status'   => [
					'shape'        => 'IpSetStatus',
					'locationName' => 'status',
				],
				'Tags'     => [
					'shape'        => 'TagMap',
					'locationName' => 'tags',
				],
			],
		],
		'GetInvitationsCountRequest'            => [ 'type' => 'structure', 'members' => [], ],
		'GetInvitationsCountResponse'           => [
			'type'    => 'structure',
			'members' => [
				'InvitationsCount' => [
					'shape'        => 'Integer',
					'locationName' => 'invitationsCount',
				],
			],
		],
		'GetMasterAccountRequest'               => [
			'type'     => 'structure',
			'required' => [ 'DetectorId', ],
			'members'  => [
				'DetectorId' => [
					'shape'        => 'DetectorId',
					'location'     => 'uri',
					'locationName' => 'detectorId',
				],
			],
		],
		'GetMasterAccountResponse'              => [
			'type'     => 'structure',
			'required' => [ 'Master', ],
			'members'  => [
				'Master' => [
					'shape'        => 'Master',
					'locationName' => 'master',
				],
			],
		],
		'GetMembersRequest'                     => [
			'type'     => 'structure',
			'required' => [ 'DetectorId', 'AccountIds', ],
			'members'  => [
				'DetectorId' => [
					'shape'        => 'DetectorId',
					'location'     => 'uri',
					'locationName' => 'detectorId',
				],
				'AccountIds' => [
					'shape'        => 'AccountIds',
					'locationName' => 'accountIds',
				],
			],
		],
		'GetMembersResponse'                    => [
			'type'     => 'structure',
			'required' => [ 'Members', 'UnprocessedAccounts', ],
			'members'  => [
				'Members'             => [
					'shape'        => 'Members',
					'locationName' => 'members',
				],
				'UnprocessedAccounts' => [
					'shape'        => 'UnprocessedAccounts',
					'locationName' => 'unprocessedAccounts',
				],
			],
		],
		'GetThreatIntelSetRequest'              => [
			'type'     => 'structure',
			'required' => [ 'DetectorId', 'ThreatIntelSetId', ],
			'members'  => [
				'DetectorId'       => [
					'shape'        => 'DetectorId',
					'location'     => 'uri',
					'locationName' => 'detectorId',
				],
				'ThreatIntelSetId' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'threatIntelSetId',
				],
			],
		],
		'GetThreatIntelSetResponse'             => [
			'type'     => 'structure',
			'required' => [ 'Name', 'Format', 'Location', 'Status', ],
			'members'  => [
				'Name'     => [
					'shape'        => 'Name',
					'locationName' => 'name',
				],
				'Format'   => [
					'shape'        => 'ThreatIntelSetFormat',
					'locationName' => 'format',
				],
				'Location' => [
					'shape'        => 'Location',
					'locationName' => 'location',
				],
				'Status'   => [
					'shape'        => 'ThreatIntelSetStatus',
					'locationName' => 'status',
				],
				'Tags'     => [
					'shape'        => 'TagMap',
					'locationName' => 'tags',
				],
			],
		],
		'GuardDutyArn'                          => [
			'type'    => 'string',
			'pattern' => '^arn:[A-Za-z_.-]{1,20}:guardduty:[A-Za-z0-9_/.-]{0,63}:\\d+:detector/[A-Za-z0-9_/.-]{32,264}$',
		],
		'IamInstanceProfile'                    => [
			'type'    => 'structure',
			'members' => [
				'Arn' => [
					'shape'        => 'String',
					'locationName' => 'arn',
				],
				'Id'  => [
					'shape'        => 'String',
					'locationName' => 'id',
				],
			],
		],
		'InstanceDetails'                       => [
			'type'    => 'structure',
			'members' => [
				'AvailabilityZone'   => [ 'shape' => 'String', 'locationName' => 'availabilityZone', ],
				'IamInstanceProfile' => [
					'shape'        => 'IamInstanceProfile',
					'locationName' => 'iamInstanceProfile',
				],
				'ImageDescription'   => [ 'shape' => 'String', 'locationName' => 'imageDescription', ],
				'ImageId'            => [ 'shape' => 'String', 'locationName' => 'imageId', ],
				'InstanceId'         => [ 'shape' => 'String', 'locationName' => 'instanceId', ],
				'InstanceState'      => [ 'shape' => 'String', 'locationName' => 'instanceState', ],
				'InstanceType'       => [ 'shape' => 'String', 'locationName' => 'instanceType', ],
				'LaunchTime'         => [ 'shape' => 'String', 'locationName' => 'launchTime', ],
				'NetworkInterfaces'  => [
					'shape'        => 'NetworkInterfaces',
					'locationName' => 'networkInterfaces',
				],
				'Platform'           => [ 'shape' => 'String', 'locationName' => 'platform', ],
				'ProductCodes'       => [ 'shape' => 'ProductCodes', 'locationName' => 'productCodes', ],
				'Tags'               => [ 'shape' => 'Tags', 'locationName' => 'tags', ],
			],
		],
		'Integer'                               => [ 'type' => 'integer', ],
		'InternalServerErrorException'          => [
			'type'      => 'structure',
			'members'   => [
				'Message' => [
					'shape'        => 'String',
					'locationName' => 'message',
				],
				'Type'    => [
					'shape'        => 'String',
					'locationName' => '__type',
				],
			],
			'error'     => [ 'httpStatusCode' => 500, ],
			'exception' => true,
		],
		'Invitation'                            => [
			'type'    => 'structure',
			'members' => [
				'AccountId'          => [
					'shape'        => 'AccountId',
					'locationName' => 'accountId',
				],
				'InvitationId'       => [
					'shape'        => 'String',
					'locationName' => 'invitationId',
				],
				'RelationshipStatus' => [
					'shape'        => 'String',
					'locationName' => 'relationshipStatus',
				],
				'InvitedAt'          => [
					'shape'        => 'String',
					'locationName' => 'invitedAt',
				],
			],
		],
		'Invitations'                           => [
			'type'   => 'list',
			'member' => [ 'shape' => 'Invitation', ],
			'max'    => 50,
			'min'    => 0,
		],
		'InviteMembersRequest'                  => [
			'type'     => 'structure',
			'required' => [ 'DetectorId', 'AccountIds', ],
			'members'  => [
				'DetectorId'               => [
					'shape'        => 'DetectorId',
					'location'     => 'uri',
					'locationName' => 'detectorId',
				],
				'AccountIds'               => [
					'shape'        => 'AccountIds',
					'locationName' => 'accountIds',
				],
				'DisableEmailNotification' => [
					'shape'        => 'Boolean',
					'locationName' => 'disableEmailNotification',
				],
				'Message'                  => [
					'shape'        => 'String',
					'locationName' => 'message',
				],
			],
		],
		'InviteMembersResponse'                 => [
			'type'     => 'structure',
			'required' => [ 'UnprocessedAccounts', ],
			'members'  => [
				'UnprocessedAccounts' => [
					'shape'        => 'UnprocessedAccounts',
					'locationName' => 'unprocessedAccounts',
				],
			],
		],
		'IpSetFormat'                           => [
			'type' => 'string',
			'enum' => [
				'TXT',
				'STIX',
				'OTX_CSV',
				'ALIEN_VAULT',
				'PROOF_POINT',
				'FIRE_EYE',
			],
			'max'  => 300,
			'min'  => 1,
		],
		'IpSetIds'                              => [
			'type'   => 'list',
			'member' => [ 'shape' => 'String', ],
			'max'    => 50,
			'min'    => 0,
		],
		'IpSetStatus'                           => [
			'type' => 'string',
			'enum' => [
				'INACTIVE',
				'ACTIVATING',
				'ACTIVE',
				'DEACTIVATING',
				'ERROR',
				'DELETE_PENDING',
				'DELETED',
			],
			'max'  => 300,
			'min'  => 1,
		],
		'Ipv6Addresses'                         => [ 'type' => 'list', 'member' => [ 'shape' => 'String', ], ],
		'ListDetectorsRequest'                  => [
			'type'    => 'structure',
			'members' => [
				'MaxResults' => [
					'shape'        => 'MaxResults',
					'location'     => 'querystring',
					'locationName' => 'maxResults',
				],
				'NextToken'  => [
					'shape'        => 'String',
					'location'     => 'querystring',
					'locationName' => 'nextToken',
				],
			],
		],
		'ListDetectorsResponse'                 => [
			'type'     => 'structure',
			'required' => [ 'DetectorIds', ],
			'members'  => [
				'DetectorIds' => [
					'shape'        => 'DetectorIds',
					'locationName' => 'detectorIds',
				],
				'NextToken'   => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
			],
		],
		'ListFiltersRequest'                    => [
			'type'     => 'structure',
			'required' => [ 'DetectorId', ],
			'members'  => [
				'DetectorId' => [
					'shape'        => 'DetectorId',
					'location'     => 'uri',
					'locationName' => 'detectorId',
				],
				'MaxResults' => [
					'shape'        => 'MaxResults',
					'location'     => 'querystring',
					'locationName' => 'maxResults',
				],
				'NextToken'  => [
					'shape'        => 'String',
					'location'     => 'querystring',
					'locationName' => 'nextToken',
				],
			],
		],
		'ListFiltersResponse'                   => [
			'type'     => 'structure',
			'required' => [ 'FilterNames', ],
			'members'  => [
				'FilterNames' => [
					'shape'        => 'FilterNames',
					'locationName' => 'filterNames',
				],
				'NextToken'   => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
			],
		],
		'ListFindingsRequest'                   => [
			'type'     => 'structure',
			'required' => [ 'DetectorId', ],
			'members'  => [
				'DetectorId'      => [
					'shape'        => 'DetectorId',
					'location'     => 'uri',
					'locationName' => 'detectorId',
				],
				'FindingCriteria' => [
					'shape'        => 'FindingCriteria',
					'locationName' => 'findingCriteria',
				],
				'SortCriteria'    => [
					'shape'        => 'SortCriteria',
					'locationName' => 'sortCriteria',
				],
				'MaxResults'      => [
					'shape'        => 'MaxResults',
					'locationName' => 'maxResults',
				],
				'NextToken'       => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
			],
		],
		'ListFindingsResponse'                  => [
			'type'     => 'structure',
			'required' => [ 'FindingIds', ],
			'members'  => [
				'FindingIds' => [
					'shape'        => 'FindingIds',
					'locationName' => 'findingIds',
				],
				'NextToken'  => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
			],
		],
		'ListIPSetsRequest'                     => [
			'type'     => 'structure',
			'required' => [ 'DetectorId', ],
			'members'  => [
				'DetectorId' => [
					'shape'        => 'DetectorId',
					'location'     => 'uri',
					'locationName' => 'detectorId',
				],
				'MaxResults' => [
					'shape'        => 'MaxResults',
					'location'     => 'querystring',
					'locationName' => 'maxResults',
				],
				'NextToken'  => [
					'shape'        => 'String',
					'location'     => 'querystring',
					'locationName' => 'nextToken',
				],
			],
		],
		'ListIPSetsResponse'                    => [
			'type'     => 'structure',
			'required' => [ 'IpSetIds', ],
			'members'  => [
				'IpSetIds'  => [
					'shape'        => 'IpSetIds',
					'locationName' => 'ipSetIds',
				],
				'NextToken' => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
			],
		],
		'ListInvitationsRequest'                => [
			'type'    => 'structure',
			'members' => [
				'MaxResults' => [
					'shape'        => 'MaxResults',
					'location'     => 'querystring',
					'locationName' => 'maxResults',
				],
				'NextToken'  => [
					'shape'        => 'String',
					'location'     => 'querystring',
					'locationName' => 'nextToken',
				],
			],
		],
		'ListInvitationsResponse'               => [
			'type'    => 'structure',
			'members' => [
				'Invitations' => [
					'shape'        => 'Invitations',
					'locationName' => 'invitations',
				],
				'NextToken'   => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
			],
		],
		'ListMembersRequest'                    => [
			'type'     => 'structure',
			'required' => [ 'DetectorId', ],
			'members'  => [
				'DetectorId'     => [
					'shape'        => 'DetectorId',
					'location'     => 'uri',
					'locationName' => 'detectorId',
				],
				'MaxResults'     => [
					'shape'        => 'MaxResults',
					'location'     => 'querystring',
					'locationName' => 'maxResults',
				],
				'NextToken'      => [
					'shape'        => 'String',
					'location'     => 'querystring',
					'locationName' => 'nextToken',
				],
				'OnlyAssociated' => [
					'shape'        => 'String',
					'location'     => 'querystring',
					'locationName' => 'onlyAssociated',
				],
			],
		],
		'ListMembersResponse'                   => [
			'type'    => 'structure',
			'members' => [
				'Members'   => [
					'shape'        => 'Members',
					'locationName' => 'members',
				],
				'NextToken' => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
			],
		],
		'ListTagsForResourceRequest'            => [
			'type'     => 'structure',
			'required' => [ 'ResourceArn', ],
			'members'  => [
				'ResourceArn' => [
					'shape'        => 'GuardDutyArn',
					'location'     => 'uri',
					'locationName' => 'resourceArn',
				],
			],
		],
		'ListTagsForResourceResponse'           => [
			'type'    => 'structure',
			'members' => [
				'Tags' => [
					'shape'        => 'TagMap',
					'locationName' => 'tags',
				],
			],
		],
		'ListThreatIntelSetsRequest'            => [
			'type'     => 'structure',
			'required' => [ 'DetectorId', ],
			'members'  => [
				'DetectorId' => [
					'shape'        => 'DetectorId',
					'location'     => 'uri',
					'locationName' => 'detectorId',
				],
				'MaxResults' => [
					'shape'        => 'MaxResults',
					'location'     => 'querystring',
					'locationName' => 'maxResults',
				],
				'NextToken'  => [
					'shape'        => 'String',
					'location'     => 'querystring',
					'locationName' => 'nextToken',
				],
			],
		],
		'ListThreatIntelSetsResponse'           => [
			'type'     => 'structure',
			'required' => [ 'ThreatIntelSetIds', ],
			'members'  => [
				'ThreatIntelSetIds' => [
					'shape'        => 'ThreatIntelSetIds',
					'locationName' => 'threatIntelSetIds',
				],
				'NextToken'         => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
			],
		],
		'LocalPortDetails'                      => [
			'type'    => 'structure',
			'members' => [
				'Port'     => [
					'shape'        => 'Integer',
					'locationName' => 'port',
				],
				'PortName' => [
					'shape'        => 'String',
					'locationName' => 'portName',
				],
			],
		],
		'Location'                              => [ 'type' => 'string', 'max' => 300, 'min' => 1, ],
		'Long'                                  => [ 'type' => 'long', ],
		'Master'                                => [
			'type'    => 'structure',
			'members' => [
				'AccountId'          => [
					'shape'        => 'AccountId',
					'locationName' => 'accountId',
				],
				'InvitationId'       => [
					'shape'        => 'String',
					'locationName' => 'invitationId',
				],
				'RelationshipStatus' => [
					'shape'        => 'String',
					'locationName' => 'relationshipStatus',
				],
				'InvitedAt'          => [
					'shape'        => 'String',
					'locationName' => 'invitedAt',
				],
			],
		],
		'MaxResults'                            => [ 'type' => 'integer', 'max' => 50, 'min' => 1, ],
		'Member'                                => [
			'type'     => 'structure',
			'required' => [
				'AccountId',
				'MasterId',
				'Email',
				'RelationshipStatus',
				'UpdatedAt',
			],
			'members'  => [
				'AccountId'          => [
					'shape'        => 'AccountId',
					'locationName' => 'accountId',
				],
				'DetectorId'         => [
					'shape'        => 'DetectorId',
					'locationName' => 'detectorId',
				],
				'MasterId'           => [
					'shape'        => 'String',
					'locationName' => 'masterId',
				],
				'Email'              => [
					'shape'        => 'Email',
					'locationName' => 'email',
				],
				'RelationshipStatus' => [
					'shape'        => 'String',
					'locationName' => 'relationshipStatus',
				],
				'InvitedAt'          => [
					'shape'        => 'String',
					'locationName' => 'invitedAt',
				],
				'UpdatedAt'          => [
					'shape'        => 'String',
					'locationName' => 'updatedAt',
				],
			],
		],
		'Members'                               => [
			'type'   => 'list',
			'member' => [ 'shape' => 'Member', ],
			'max'    => 50,
			'min'    => 0,
		],
		'Name'                                  => [ 'type' => 'string', 'max' => 300, 'min' => 1, ],
		'Neq'                                   => [ 'type' => 'list', 'member' => [ 'shape' => 'String', ], ],
		'NetworkConnectionAction'               => [
			'type'    => 'structure',
			'members' => [
				'Blocked'             => [
					'shape'        => 'Boolean',
					'locationName' => 'blocked',
				],
				'ConnectionDirection' => [
					'shape'        => 'String',
					'locationName' => 'connectionDirection',
				],
				'LocalPortDetails'    => [
					'shape'        => 'LocalPortDetails',
					'locationName' => 'localPortDetails',
				],
				'Protocol'            => [
					'shape'        => 'String',
					'locationName' => 'protocol',
				],
				'RemoteIpDetails'     => [
					'shape'        => 'RemoteIpDetails',
					'locationName' => 'remoteIpDetails',
				],
				'RemotePortDetails'   => [
					'shape'        => 'RemotePortDetails',
					'locationName' => 'remotePortDetails',
				],
			],
		],
		'NetworkInterface'                      => [
			'type'    => 'structure',
			'members' => [
				'Ipv6Addresses'      => [
					'shape'        => 'Ipv6Addresses',
					'locationName' => 'ipv6Addresses',
				],
				'NetworkInterfaceId' => [
					'shape'        => 'String',
					'locationName' => 'networkInterfaceId',
				],
				'PrivateDnsName'     => [
					'shape'        => 'String',
					'locationName' => 'privateDnsName',
				],
				'PrivateIpAddress'   => [
					'shape'        => 'String',
					'locationName' => 'privateIpAddress',
				],
				'PrivateIpAddresses' => [
					'shape'        => 'PrivateIpAddresses',
					'locationName' => 'privateIpAddresses',
				],
				'PublicDnsName'      => [
					'shape'        => 'String',
					'locationName' => 'publicDnsName',
				],
				'PublicIp'           => [
					'shape'        => 'String',
					'locationName' => 'publicIp',
				],
				'SecurityGroups'     => [
					'shape'        => 'SecurityGroups',
					'locationName' => 'securityGroups',
				],
				'SubnetId'           => [
					'shape'        => 'String',
					'locationName' => 'subnetId',
				],
				'VpcId'              => [
					'shape'        => 'String',
					'locationName' => 'vpcId',
				],
			],
		],
		'NetworkInterfaces'                     => [
			'type'   => 'list',
			'member' => [ 'shape' => 'NetworkInterface', ],
		],
		'NotEquals'                             => [ 'type' => 'list', 'member' => [ 'shape' => 'String', ], ],
		'OrderBy'                               => [ 'type' => 'string', 'enum' => [ 'ASC', 'DESC', ], ],
		'Organization'                          => [
			'type'    => 'structure',
			'members' => [
				'Asn'    => [
					'shape'        => 'String',
					'locationName' => 'asn',
				],
				'AsnOrg' => [
					'shape'        => 'String',
					'locationName' => 'asnOrg',
				],
				'Isp'    => [
					'shape'        => 'String',
					'locationName' => 'isp',
				],
				'Org'    => [
					'shape'        => 'String',
					'locationName' => 'org',
				],
			],
		],
		'PortProbeAction'                       => [
			'type'    => 'structure',
			'members' => [
				'Blocked'          => [
					'shape'        => 'Boolean',
					'locationName' => 'blocked',
				],
				'PortProbeDetails' => [
					'shape'        => 'PortProbeDetails',
					'locationName' => 'portProbeDetails',
				],
			],
		],
		'PortProbeDetail'                       => [
			'type'    => 'structure',
			'members' => [
				'LocalPortDetails' => [
					'shape'        => 'LocalPortDetails',
					'locationName' => 'localPortDetails',
				],
				'RemoteIpDetails'  => [
					'shape'        => 'RemoteIpDetails',
					'locationName' => 'remoteIpDetails',
				],
			],
		],
		'PortProbeDetails'                      => [ 'type' => 'list', 'member' => [ 'shape' => 'PortProbeDetail', ], ],
		'PrivateIpAddressDetails'               => [
			'type'    => 'structure',
			'members' => [
				'PrivateDnsName'   => [
					'shape'        => 'String',
					'locationName' => 'privateDnsName',
				],
				'PrivateIpAddress' => [
					'shape'        => 'String',
					'locationName' => 'privateIpAddress',
				],
			],
		],
		'PrivateIpAddresses'                    => [
			'type'   => 'list',
			'member' => [ 'shape' => 'PrivateIpAddressDetails', ],
		],
		'ProductCode'                           => [
			'type'    => 'structure',
			'members' => [
				'Code'        => [
					'shape'        => 'String',
					'locationName' => 'code',
				],
				'ProductType' => [
					'shape'        => 'String',
					'locationName' => 'productType',
				],
			],
		],
		'ProductCodes'                          => [ 'type' => 'list', 'member' => [ 'shape' => 'ProductCode', ], ],
		'RemoteIpDetails'                       => [
			'type'    => 'structure',
			'members' => [
				'City'         => [
					'shape'        => 'City',
					'locationName' => 'city',
				],
				'Country'      => [
					'shape'        => 'Country',
					'locationName' => 'country',
				],
				'GeoLocation'  => [
					'shape'        => 'GeoLocation',
					'locationName' => 'geoLocation',
				],
				'IpAddressV4'  => [
					'shape'        => 'String',
					'locationName' => 'ipAddressV4',
				],
				'Organization' => [
					'shape'        => 'Organization',
					'locationName' => 'organization',
				],
			],
		],
		'RemotePortDetails'                     => [
			'type'    => 'structure',
			'members' => [
				'Port'     => [
					'shape'        => 'Integer',
					'locationName' => 'port',
				],
				'PortName' => [
					'shape'        => 'String',
					'locationName' => 'portName',
				],
			],
		],
		'Resource'                              => [
			'type'    => 'structure',
			'members' => [
				'AccessKeyDetails' => [
					'shape'        => 'AccessKeyDetails',
					'locationName' => 'accessKeyDetails',
				],
				'InstanceDetails'  => [
					'shape'        => 'InstanceDetails',
					'locationName' => 'instanceDetails',
				],
				'ResourceType'     => [
					'shape'        => 'String',
					'locationName' => 'resourceType',
				],
			],
		],
		'SecurityGroup'                         => [
			'type'    => 'structure',
			'members' => [
				'GroupId'   => [
					'shape'        => 'String',
					'locationName' => 'groupId',
				],
				'GroupName' => [
					'shape'        => 'String',
					'locationName' => 'groupName',
				],
			],
		],
		'SecurityGroups'                        => [ 'type' => 'list', 'member' => [ 'shape' => 'SecurityGroup', ], ],
		'Service'                               => [
			'type'    => 'structure',
			'members' => [
				'Action'         => [
					'shape'        => 'Action',
					'locationName' => 'action',
				],
				'Archived'       => [
					'shape'        => 'Boolean',
					'locationName' => 'archived',
				],
				'Count'          => [
					'shape'        => 'Integer',
					'locationName' => 'count',
				],
				'DetectorId'     => [
					'shape'        => 'DetectorId',
					'locationName' => 'detectorId',
				],
				'EventFirstSeen' => [
					'shape'        => 'String',
					'locationName' => 'eventFirstSeen',
				],
				'EventLastSeen'  => [
					'shape'        => 'String',
					'locationName' => 'eventLastSeen',
				],
				'ResourceRole'   => [
					'shape'        => 'String',
					'locationName' => 'resourceRole',
				],
				'ServiceName'    => [
					'shape'        => 'String',
					'locationName' => 'serviceName',
				],
				'UserFeedback'   => [
					'shape'        => 'String',
					'locationName' => 'userFeedback',
				],
			],
		],
		'SortCriteria'                          => [
			'type'    => 'structure',
			'members' => [
				'AttributeName' => [
					'shape'        => 'String',
					'locationName' => 'attributeName',
				],
				'OrderBy'       => [
					'shape'        => 'OrderBy',
					'locationName' => 'orderBy',
				],
			],
		],
		'StartMonitoringMembersRequest'         => [
			'type'     => 'structure',
			'required' => [ 'DetectorId', 'AccountIds', ],
			'members'  => [
				'DetectorId' => [
					'shape'        => 'DetectorId',
					'location'     => 'uri',
					'locationName' => 'detectorId',
				],
				'AccountIds' => [
					'shape'        => 'AccountIds',
					'locationName' => 'accountIds',
				],
			],
		],
		'StartMonitoringMembersResponse'        => [
			'type'     => 'structure',
			'required' => [ 'UnprocessedAccounts', ],
			'members'  => [
				'UnprocessedAccounts' => [
					'shape'        => 'UnprocessedAccounts',
					'locationName' => 'unprocessedAccounts',
				],
			],
		],
		'StopMonitoringMembersRequest'          => [
			'type'     => 'structure',
			'required' => [ 'DetectorId', 'AccountIds', ],
			'members'  => [
				'DetectorId' => [
					'shape'        => 'DetectorId',
					'location'     => 'uri',
					'locationName' => 'detectorId',
				],
				'AccountIds' => [
					'shape'        => 'AccountIds',
					'locationName' => 'accountIds',
				],
			],
		],
		'StopMonitoringMembersResponse'         => [
			'type'     => 'structure',
			'required' => [ 'UnprocessedAccounts', ],
			'members'  => [
				'UnprocessedAccounts' => [
					'shape'        => 'UnprocessedAccounts',
					'locationName' => 'unprocessedAccounts',
				],
			],
		],
		'String'                                => [ 'type' => 'string', ],
		'Tag'                                   => [
			'type'    => 'structure',
			'members' => [
				'Key'   => [
					'shape'        => 'String',
					'locationName' => 'key',
				],
				'Value' => [
					'shape'        => 'String',
					'locationName' => 'value',
				],
			],
		],
		'TagKey'                                => [
			'type'    => 'string',
			'max'     => 128,
			'min'     => 1,
			'pattern' => '^(?!aws:)[a-zA-Z+-=._:/]+$',
		],
		'TagKeyList'                            => [
			'type'   => 'list',
			'member' => [ 'shape' => 'TagKey', ],
			'max'    => 200,
			'min'    => 1,
		],
		'TagMap'                                => [
			'type'  => 'map',
			'key'   => [ 'shape' => 'TagKey', ],
			'value' => [ 'shape' => 'TagValue', ],
			'max'   => 200,
			'min'   => 1,
		],
		'TagResourceRequest'                    => [
			'type'     => 'structure',
			'required' => [ 'ResourceArn', 'Tags', ],
			'members'  => [
				'ResourceArn' => [
					'shape'        => 'GuardDutyArn',
					'location'     => 'uri',
					'locationName' => 'resourceArn',
				],
				'Tags'        => [
					'shape'        => 'TagMap',
					'locationName' => 'tags',
				],
			],
		],
		'TagResourceResponse'                   => [ 'type' => 'structure', 'members' => [], ],
		'TagValue'                              => [ 'type' => 'string', 'max' => 256, ],
		'Tags'                                  => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
		'ThreatIntelSetFormat'                  => [
			'type' => 'string',
			'enum' => [
				'TXT',
				'STIX',
				'OTX_CSV',
				'ALIEN_VAULT',
				'PROOF_POINT',
				'FIRE_EYE',
			],
			'max'  => 300,
			'min'  => 1,
		],
		'ThreatIntelSetIds'                     => [
			'type'   => 'list',
			'member' => [ 'shape' => 'String', ],
			'max'    => 50,
			'min'    => 0,
		],
		'ThreatIntelSetStatus'                  => [
			'type' => 'string',
			'enum' => [
				'INACTIVE',
				'ACTIVATING',
				'ACTIVE',
				'DEACTIVATING',
				'ERROR',
				'DELETE_PENDING',
				'DELETED',
			],
			'max'  => 300,
			'min'  => 1,
		],
		'UnarchiveFindingsRequest'              => [
			'type'     => 'structure',
			'required' => [ 'DetectorId', 'FindingIds', ],
			'members'  => [
				'DetectorId' => [
					'shape'        => 'DetectorId',
					'location'     => 'uri',
					'locationName' => 'detectorId',
				],
				'FindingIds' => [
					'shape'        => 'FindingIds',
					'locationName' => 'findingIds',
				],
			],
		],
		'UnarchiveFindingsResponse'             => [ 'type' => 'structure', 'members' => [], ],
		'UnprocessedAccount'                    => [
			'type'     => 'structure',
			'required' => [ 'AccountId', 'Result', ],
			'members'  => [
				'AccountId' => [
					'shape'        => 'AccountId',
					'locationName' => 'accountId',
				],
				'Result'    => [
					'shape'        => 'String',
					'locationName' => 'result',
				],
			],
		],
		'UnprocessedAccounts'                   => [
			'type'   => 'list',
			'member' => [ 'shape' => 'UnprocessedAccount', ],
			'max'    => 50,
			'min'    => 0,
		],
		'UntagResourceRequest'                  => [
			'type'     => 'structure',
			'required' => [ 'ResourceArn', 'TagKeys', ],
			'members'  => [
				'ResourceArn' => [
					'shape'        => 'GuardDutyArn',
					'location'     => 'uri',
					'locationName' => 'resourceArn',
				],
				'TagKeys'     => [
					'shape'        => 'TagKeyList',
					'location'     => 'querystring',
					'locationName' => 'tagKeys',
				],
			],
		],
		'UntagResourceResponse'                 => [ 'type' => 'structure', 'members' => [], ],
		'UpdateDetectorRequest'                 => [
			'type'     => 'structure',
			'required' => [ 'DetectorId', ],
			'members'  => [
				'DetectorId'                 => [
					'shape'        => 'DetectorId',
					'location'     => 'uri',
					'locationName' => 'detectorId',
				],
				'Enable'                     => [
					'shape'        => 'Boolean',
					'locationName' => 'enable',
				],
				'FindingPublishingFrequency' => [
					'shape'        => 'FindingPublishingFrequency',
					'locationName' => 'findingPublishingFrequency',
				],
			],
		],
		'UpdateDetectorResponse'                => [ 'type' => 'structure', 'members' => [], ],
		'UpdateFilterRequest'                   => [
			'type'     => 'structure',
			'required' => [ 'DetectorId', 'FilterName', ],
			'members'  => [
				'DetectorId'      => [
					'shape'        => 'DetectorId',
					'location'     => 'uri',
					'locationName' => 'detectorId',
				],
				'FilterName'      => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'filterName',
				],
				'Description'     => [
					'shape'        => 'FilterDescription',
					'locationName' => 'description',
				],
				'Action'          => [
					'shape'        => 'FilterAction',
					'locationName' => 'action',
				],
				'Rank'            => [
					'shape'        => 'FilterRank',
					'locationName' => 'rank',
				],
				'FindingCriteria' => [
					'shape'        => 'FindingCriteria',
					'locationName' => 'findingCriteria',
				],
			],
		],
		'UpdateFilterResponse'                  => [
			'type'     => 'structure',
			'required' => [ 'Name', ],
			'members'  => [
				'Name' => [
					'shape'        => 'FilterName',
					'locationName' => 'name',
				],
			],
		],
		'UpdateFindingsFeedbackRequest'         => [
			'type'     => 'structure',
			'required' => [ 'DetectorId', 'FindingIds', 'Feedback', ],
			'members'  => [
				'DetectorId' => [
					'shape'        => 'DetectorId',
					'location'     => 'uri',
					'locationName' => 'detectorId',
				],
				'FindingIds' => [
					'shape'        => 'FindingIds',
					'locationName' => 'findingIds',
				],
				'Feedback'   => [
					'shape'        => 'Feedback',
					'locationName' => 'feedback',
				],
				'Comments'   => [
					'shape'        => 'String',
					'locationName' => 'comments',
				],
			],
		],
		'UpdateFindingsFeedbackResponse'        => [ 'type' => 'structure', 'members' => [], ],
		'UpdateIPSetRequest'                    => [
			'type'     => 'structure',
			'required' => [ 'DetectorId', 'IpSetId', ],
			'members'  => [
				'DetectorId' => [
					'shape'        => 'DetectorId',
					'location'     => 'uri',
					'locationName' => 'detectorId',
				],
				'IpSetId'    => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'ipSetId',
				],
				'Name'       => [
					'shape'        => 'Name',
					'locationName' => 'name',
				],
				'Location'   => [
					'shape'        => 'Location',
					'locationName' => 'location',
				],
				'Activate'   => [
					'shape'        => 'Boolean',
					'locationName' => 'activate',
				],
			],
		],
		'UpdateIPSetResponse'                   => [ 'type' => 'structure', 'members' => [], ],
		'UpdateThreatIntelSetRequest'           => [
			'type'     => 'structure',
			'required' => [ 'DetectorId', 'ThreatIntelSetId', ],
			'members'  => [
				'DetectorId'       => [
					'shape'        => 'DetectorId',
					'location'     => 'uri',
					'locationName' => 'detectorId',
				],
				'ThreatIntelSetId' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'threatIntelSetId',
				],
				'Name'             => [
					'shape'        => 'Name',
					'locationName' => 'name',
				],
				'Location'         => [
					'shape'        => 'Location',
					'locationName' => 'location',
				],
				'Activate'         => [
					'shape'        => 'Boolean',
					'locationName' => 'activate',
				],
			],
		],
		'UpdateThreatIntelSetResponse'          => [ 'type' => 'structure', 'members' => [], ],
	],
];
