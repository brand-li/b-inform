<?php
// This file was auto-generated from sdk-root/src/data/chime/2018-05-01/api-2.json
return [
	'version'    => '2.0',
	'metadata'   => [
		'apiVersion'       => '2018-05-01',
		'endpointPrefix'   => 'chime',
		'protocol'         => 'rest-json',
		'serviceFullName'  => 'Amazon Chime',
		'serviceId'        => 'Chime',
		'signatureVersion' => 'v4',
		'uid'              => 'chime-2018-05-01',
	],
	'operations' => [
		'AssociatePhoneNumberWithUser'               => [
			'name'   => 'AssociatePhoneNumberWithUser',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/accounts/{accountId}/users/{userId}?operation=associate-phone-number',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'AssociatePhoneNumberWithUserRequest', ],
			'output' => [ 'shape' => 'AssociatePhoneNumberWithUserResponse', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedClientException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ThrottledClientException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'AssociatePhoneNumbersWithVoiceConnector'    => [
			'name'   => 'AssociatePhoneNumbersWithVoiceConnector',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/voice-connectors/{voiceConnectorId}?operation=associate-phone-numbers',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'AssociatePhoneNumbersWithVoiceConnectorRequest', ],
			'output' => [ 'shape' => 'AssociatePhoneNumbersWithVoiceConnectorResponse', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedClientException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ThrottledClientException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'BatchDeletePhoneNumber'                     => [
			'name'   => 'BatchDeletePhoneNumber',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/phone-numbers?operation=batch-delete',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'BatchDeletePhoneNumberRequest', ],
			'output' => [ 'shape' => 'BatchDeletePhoneNumberResponse', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedClientException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ThrottledClientException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'BatchSuspendUser'                           => [
			'name'   => 'BatchSuspendUser',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/accounts/{accountId}/users?operation=suspend',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'BatchSuspendUserRequest', ],
			'output' => [ 'shape' => 'BatchSuspendUserResponse', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedClientException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ThrottledClientException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'BatchUnsuspendUser'                         => [
			'name'   => 'BatchUnsuspendUser',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/accounts/{accountId}/users?operation=unsuspend',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'BatchUnsuspendUserRequest', ],
			'output' => [ 'shape' => 'BatchUnsuspendUserResponse', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedClientException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ThrottledClientException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'BatchUpdatePhoneNumber'                     => [
			'name'   => 'BatchUpdatePhoneNumber',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/phone-numbers?operation=batch-update',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'BatchUpdatePhoneNumberRequest', ],
			'output' => [ 'shape' => 'BatchUpdatePhoneNumberResponse', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedClientException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ThrottledClientException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'BatchUpdateUser'                            => [
			'name'   => 'BatchUpdateUser',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/accounts/{accountId}/users',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'BatchUpdateUserRequest', ],
			'output' => [ 'shape' => 'BatchUpdateUserResponse', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedClientException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ThrottledClientException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'CreateAccount'                              => [
			'name'   => 'CreateAccount',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/accounts',
				'responseCode' => 201,
			],
			'input'  => [ 'shape' => 'CreateAccountRequest', ],
			'output' => [ 'shape' => 'CreateAccountResponse', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedClientException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ThrottledClientException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'CreateBot'                                  => [
			'name'   => 'CreateBot',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/accounts/{accountId}/bots',
				'responseCode' => 201,
			],
			'input'  => [ 'shape' => 'CreateBotRequest', ],
			'output' => [ 'shape' => 'CreateBotResponse', ],
			'errors' => [
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'ServiceFailureException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'UnauthorizedClientException', ],
				[ 'shape' => 'ResourceLimitExceededException', ],
				[ 'shape' => 'NotFoundException', ],
			],
		],
		'CreatePhoneNumberOrder'                     => [
			'name'   => 'CreatePhoneNumberOrder',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/phone-number-orders',
				'responseCode' => 201,
			],
			'input'  => [ 'shape' => 'CreatePhoneNumberOrderRequest', ],
			'output' => [ 'shape' => 'CreatePhoneNumberOrderResponse', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedClientException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ThrottledClientException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'CreateVoiceConnector'                       => [
			'name'   => 'CreateVoiceConnector',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/voice-connectors',
				'responseCode' => 201,
			],
			'input'  => [ 'shape' => 'CreateVoiceConnectorRequest', ],
			'output' => [ 'shape' => 'CreateVoiceConnectorResponse', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedClientException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ThrottledClientException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'DeleteAccount'                              => [
			'name'   => 'DeleteAccount',
			'http'   => [
				'method'       => 'DELETE',
				'requestUri'   => '/accounts/{accountId}',
				'responseCode' => 204,
			],
			'input'  => [ 'shape' => 'DeleteAccountRequest', ],
			'output' => [ 'shape' => 'DeleteAccountResponse', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedClientException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ThrottledClientException', ],
				[ 'shape' => 'UnprocessableEntityException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'DeleteEventsConfiguration'                  => [
			'name'   => 'DeleteEventsConfiguration',
			'http'   => [
				'method'       => 'DELETE',
				'requestUri'   => '/accounts/{accountId}/bots/{botId}/events-configuration',
				'responseCode' => 204,
			],
			'input'  => [ 'shape' => 'DeleteEventsConfigurationRequest', ],
			'errors' => [
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'ServiceFailureException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'UnauthorizedClientException', ],
				[ 'shape' => 'ResourceLimitExceededException', ],
			],
		],
		'DeletePhoneNumber'                          => [
			'name'   => 'DeletePhoneNumber',
			'http'   => [
				'method'       => 'DELETE',
				'requestUri'   => '/phone-numbers/{phoneNumberId}',
				'responseCode' => 204,
			],
			'input'  => [ 'shape' => 'DeletePhoneNumberRequest', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedClientException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ThrottledClientException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'DeleteVoiceConnector'                       => [
			'name'   => 'DeleteVoiceConnector',
			'http'   => [
				'method'       => 'DELETE',
				'requestUri'   => '/voice-connectors/{voiceConnectorId}',
				'responseCode' => 204,
			],
			'input'  => [ 'shape' => 'DeleteVoiceConnectorRequest', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedClientException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ThrottledClientException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'DeleteVoiceConnectorOrigination'            => [
			'name'   => 'DeleteVoiceConnectorOrigination',
			'http'   => [
				'method'       => 'DELETE',
				'requestUri'   => '/voice-connectors/{voiceConnectorId}/origination',
				'responseCode' => 204,
			],
			'input'  => [ 'shape' => 'DeleteVoiceConnectorOriginationRequest', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedClientException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ThrottledClientException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'DeleteVoiceConnectorTermination'            => [
			'name'   => 'DeleteVoiceConnectorTermination',
			'http'   => [
				'method'       => 'DELETE',
				'requestUri'   => '/voice-connectors/{voiceConnectorId}/termination',
				'responseCode' => 204,
			],
			'input'  => [ 'shape' => 'DeleteVoiceConnectorTerminationRequest', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedClientException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ThrottledClientException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'DeleteVoiceConnectorTerminationCredentials' => [
			'name'   => 'DeleteVoiceConnectorTerminationCredentials',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/voice-connectors/{voiceConnectorId}/termination/credentials?operation=delete',
				'responseCode' => 204,
			],
			'input'  => [ 'shape' => 'DeleteVoiceConnectorTerminationCredentialsRequest', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedClientException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ThrottledClientException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'DisassociatePhoneNumberFromUser'            => [
			'name'   => 'DisassociatePhoneNumberFromUser',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/accounts/{accountId}/users/{userId}?operation=disassociate-phone-number',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'DisassociatePhoneNumberFromUserRequest', ],
			'output' => [ 'shape' => 'DisassociatePhoneNumberFromUserResponse', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedClientException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ThrottledClientException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'DisassociatePhoneNumbersFromVoiceConnector' => [
			'name'   => 'DisassociatePhoneNumbersFromVoiceConnector',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/voice-connectors/{voiceConnectorId}?operation=disassociate-phone-numbers',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'DisassociatePhoneNumbersFromVoiceConnectorRequest', ],
			'output' => [ 'shape' => 'DisassociatePhoneNumbersFromVoiceConnectorResponse', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedClientException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ThrottledClientException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'GetAccount'                                 => [
			'name'   => 'GetAccount',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/accounts/{accountId}',
			],
			'input'  => [ 'shape' => 'GetAccountRequest', ],
			'output' => [ 'shape' => 'GetAccountResponse', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedClientException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ThrottledClientException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'GetAccountSettings'                         => [
			'name'   => 'GetAccountSettings',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/accounts/{accountId}/settings',
			],
			'input'  => [ 'shape' => 'GetAccountSettingsRequest', ],
			'output' => [ 'shape' => 'GetAccountSettingsResponse', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedClientException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'ThrottledClientException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'GetBot'                                     => [
			'name'   => 'GetBot',
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/accounts/{accountId}/bots/{botId}',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'GetBotRequest', ],
			'output' => [ 'shape' => 'GetBotResponse', ],
			'errors' => [
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'ServiceFailureException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'UnauthorizedClientException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'BadRequestException', ],
			],
		],
		'GetEventsConfiguration'                     => [
			'name'   => 'GetEventsConfiguration',
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/accounts/{accountId}/bots/{botId}/events-configuration',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'GetEventsConfigurationRequest', ],
			'output' => [ 'shape' => 'GetEventsConfigurationResponse', ],
			'errors' => [
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'ServiceFailureException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'UnauthorizedClientException', ],
				[ 'shape' => 'ResourceLimitExceededException', ],
				[ 'shape' => 'NotFoundException', ],
			],
		],
		'GetGlobalSettings'                          => [
			'name'   => 'GetGlobalSettings',
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/settings',
				'responseCode' => 200,
			],
			'output' => [ 'shape' => 'GetGlobalSettingsResponse', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedClientException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ThrottledClientException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'GetPhoneNumber'                             => [
			'name'   => 'GetPhoneNumber',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/phone-numbers/{phoneNumberId}',
			],
			'input'  => [ 'shape' => 'GetPhoneNumberRequest', ],
			'output' => [ 'shape' => 'GetPhoneNumberResponse', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedClientException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ThrottledClientException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'GetPhoneNumberOrder'                        => [
			'name'   => 'GetPhoneNumberOrder',
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/phone-number-orders/{phoneNumberOrderId}',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'GetPhoneNumberOrderRequest', ],
			'output' => [ 'shape' => 'GetPhoneNumberOrderResponse', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedClientException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ThrottledClientException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'GetUser'                                    => [
			'name'   => 'GetUser',
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/accounts/{accountId}/users/{userId}',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'GetUserRequest', ],
			'output' => [ 'shape' => 'GetUserResponse', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedClientException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ThrottledClientException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'GetUserSettings'                            => [
			'name'   => 'GetUserSettings',
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/accounts/{accountId}/users/{userId}/settings',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'GetUserSettingsRequest', ],
			'output' => [ 'shape' => 'GetUserSettingsResponse', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedClientException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ThrottledClientException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'GetVoiceConnector'                          => [
			'name'   => 'GetVoiceConnector',
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/voice-connectors/{voiceConnectorId}',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'GetVoiceConnectorRequest', ],
			'output' => [ 'shape' => 'GetVoiceConnectorResponse', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedClientException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ThrottledClientException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'GetVoiceConnectorOrigination'               => [
			'name'   => 'GetVoiceConnectorOrigination',
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/voice-connectors/{voiceConnectorId}/origination',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'GetVoiceConnectorOriginationRequest', ],
			'output' => [ 'shape' => 'GetVoiceConnectorOriginationResponse', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedClientException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ThrottledClientException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'GetVoiceConnectorTermination'               => [
			'name'   => 'GetVoiceConnectorTermination',
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/voice-connectors/{voiceConnectorId}/termination',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'GetVoiceConnectorTerminationRequest', ],
			'output' => [ 'shape' => 'GetVoiceConnectorTerminationResponse', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedClientException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ThrottledClientException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'GetVoiceConnectorTerminationHealth'         => [
			'name'   => 'GetVoiceConnectorTerminationHealth',
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/voice-connectors/{voiceConnectorId}/termination/health',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'GetVoiceConnectorTerminationHealthRequest', ],
			'output' => [ 'shape' => 'GetVoiceConnectorTerminationHealthResponse', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedClientException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ThrottledClientException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'InviteUsers'                                => [
			'name'   => 'InviteUsers',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/accounts/{accountId}/users?operation=add',
				'responseCode' => 201,
			],
			'input'  => [ 'shape' => 'InviteUsersRequest', ],
			'output' => [ 'shape' => 'InviteUsersResponse', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedClientException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ThrottledClientException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'ListAccounts'                               => [
			'name'   => 'ListAccounts',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/accounts',
			],
			'input'  => [ 'shape' => 'ListAccountsRequest', ],
			'output' => [ 'shape' => 'ListAccountsResponse', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedClientException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ThrottledClientException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'ListBots'                                   => [
			'name'   => 'ListBots',
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/accounts/{accountId}/bots',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'ListBotsRequest', ],
			'output' => [ 'shape' => 'ListBotsResponse', ],
			'errors' => [
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'ServiceFailureException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'UnauthorizedClientException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'NotFoundException', ],
			],
		],
		'ListPhoneNumberOrders'                      => [
			'name'   => 'ListPhoneNumberOrders',
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/phone-number-orders',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'ListPhoneNumberOrdersRequest', ],
			'output' => [ 'shape' => 'ListPhoneNumberOrdersResponse', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedClientException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ThrottledClientException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'ListPhoneNumbers'                           => [
			'name'   => 'ListPhoneNumbers',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/phone-numbers',
			],
			'input'  => [ 'shape' => 'ListPhoneNumbersRequest', ],
			'output' => [ 'shape' => 'ListPhoneNumbersResponse', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedClientException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ThrottledClientException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'ListUsers'                                  => [
			'name'   => 'ListUsers',
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/accounts/{accountId}/users',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'ListUsersRequest', ],
			'output' => [ 'shape' => 'ListUsersResponse', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedClientException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ThrottledClientException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'ListVoiceConnectorTerminationCredentials'   => [
			'name'   => 'ListVoiceConnectorTerminationCredentials',
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/voice-connectors/{voiceConnectorId}/termination/credentials',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'ListVoiceConnectorTerminationCredentialsRequest', ],
			'output' => [ 'shape' => 'ListVoiceConnectorTerminationCredentialsResponse', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedClientException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ThrottledClientException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'ListVoiceConnectors'                        => [
			'name'   => 'ListVoiceConnectors',
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/voice-connectors',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'ListVoiceConnectorsRequest', ],
			'output' => [ 'shape' => 'ListVoiceConnectorsResponse', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedClientException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ThrottledClientException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'LogoutUser'                                 => [
			'name'   => 'LogoutUser',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/accounts/{accountId}/users/{userId}?operation=logout',
				'responseCode' => 204,
			],
			'input'  => [ 'shape' => 'LogoutUserRequest', ],
			'output' => [ 'shape' => 'LogoutUserResponse', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedClientException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ThrottledClientException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'PutEventsConfiguration'                     => [
			'name'   => 'PutEventsConfiguration',
			'http'   => [
				'method'       => 'PUT',
				'requestUri'   => '/accounts/{accountId}/bots/{botId}/events-configuration',
				'responseCode' => 201,
			],
			'input'  => [ 'shape' => 'PutEventsConfigurationRequest', ],
			'output' => [ 'shape' => 'PutEventsConfigurationResponse', ],
			'errors' => [
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'ServiceFailureException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'UnauthorizedClientException', ],
				[ 'shape' => 'ResourceLimitExceededException', ],
				[ 'shape' => 'NotFoundException', ],
			],
		],
		'PutVoiceConnectorOrigination'               => [
			'name'   => 'PutVoiceConnectorOrigination',
			'http'   => [
				'method'       => 'PUT',
				'requestUri'   => '/voice-connectors/{voiceConnectorId}/origination',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'PutVoiceConnectorOriginationRequest', ],
			'output' => [ 'shape' => 'PutVoiceConnectorOriginationResponse', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedClientException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ThrottledClientException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'PutVoiceConnectorTermination'               => [
			'name'   => 'PutVoiceConnectorTermination',
			'http'   => [
				'method'       => 'PUT',
				'requestUri'   => '/voice-connectors/{voiceConnectorId}/termination',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'PutVoiceConnectorTerminationRequest', ],
			'output' => [ 'shape' => 'PutVoiceConnectorTerminationResponse', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedClientException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ThrottledClientException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'PutVoiceConnectorTerminationCredentials'    => [
			'name'   => 'PutVoiceConnectorTerminationCredentials',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/voice-connectors/{voiceConnectorId}/termination/credentials?operation=put',
				'responseCode' => 204,
			],
			'input'  => [ 'shape' => 'PutVoiceConnectorTerminationCredentialsRequest', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedClientException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ThrottledClientException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'RegenerateSecurityToken'                    => [
			'name'   => 'RegenerateSecurityToken',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/accounts/{accountId}/bots/{botId}?operation=regenerate-security-token',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'RegenerateSecurityTokenRequest', ],
			'output' => [ 'shape' => 'RegenerateSecurityTokenResponse', ],
			'errors' => [
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'ServiceFailureException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'UnauthorizedClientException', ],
				[ 'shape' => 'NotFoundException', ],
			],
		],
		'ResetPersonalPIN'                           => [
			'name'   => 'ResetPersonalPIN',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/accounts/{accountId}/users/{userId}?operation=reset-personal-pin',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'ResetPersonalPINRequest', ],
			'output' => [ 'shape' => 'ResetPersonalPINResponse', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedClientException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ThrottledClientException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'RestorePhoneNumber'                         => [
			'name'   => 'RestorePhoneNumber',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/phone-numbers/{phoneNumberId}?operation=restore',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'RestorePhoneNumberRequest', ],
			'output' => [ 'shape' => 'RestorePhoneNumberResponse', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedClientException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ThrottledClientException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'SearchAvailablePhoneNumbers'                => [
			'name'   => 'SearchAvailablePhoneNumbers',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/search?type=phone-numbers',
			],
			'input'  => [ 'shape' => 'SearchAvailablePhoneNumbersRequest', ],
			'output' => [ 'shape' => 'SearchAvailablePhoneNumbersResponse', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedClientException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ThrottledClientException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'UpdateAccount'                              => [
			'name'   => 'UpdateAccount',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/accounts/{accountId}',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'UpdateAccountRequest', ],
			'output' => [ 'shape' => 'UpdateAccountResponse', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedClientException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ThrottledClientException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'UpdateAccountSettings'                      => [
			'name'   => 'UpdateAccountSettings',
			'http'   => [
				'method'       => 'PUT',
				'requestUri'   => '/accounts/{accountId}/settings',
				'responseCode' => 204,
			],
			'input'  => [ 'shape' => 'UpdateAccountSettingsRequest', ],
			'output' => [ 'shape' => 'UpdateAccountSettingsResponse', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedClientException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'ConflictException', ],
				[ 'shape' => 'ThrottledClientException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'UpdateBot'                                  => [
			'name'   => 'UpdateBot',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/accounts/{accountId}/bots/{botId}',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'UpdateBotRequest', ],
			'output' => [ 'shape' => 'UpdateBotResponse', ],
			'errors' => [
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'ServiceFailureException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'UnauthorizedClientException', ],
				[ 'shape' => 'NotFoundException', ],
			],
		],
		'UpdateGlobalSettings'                       => [
			'name'   => 'UpdateGlobalSettings',
			'http'   => [
				'method'       => 'PUT',
				'requestUri'   => '/settings',
				'responseCode' => 204,
			],
			'input'  => [ 'shape' => 'UpdateGlobalSettingsRequest', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedClientException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ThrottledClientException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'UpdatePhoneNumber'                          => [
			'name'   => 'UpdatePhoneNumber',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/phone-numbers/{phoneNumberId}',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'UpdatePhoneNumberRequest', ],
			'output' => [ 'shape' => 'UpdatePhoneNumberResponse', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedClientException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ThrottledClientException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'UpdateUser'                                 => [
			'name'   => 'UpdateUser',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/accounts/{accountId}/users/{userId}',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'UpdateUserRequest', ],
			'output' => [ 'shape' => 'UpdateUserResponse', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedClientException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ThrottledClientException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'UpdateUserSettings'                         => [
			'name'   => 'UpdateUserSettings',
			'http'   => [
				'method'       => 'PUT',
				'requestUri'   => '/accounts/{accountId}/users/{userId}/settings',
				'responseCode' => 204,
			],
			'input'  => [ 'shape' => 'UpdateUserSettingsRequest', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedClientException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ThrottledClientException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'UpdateVoiceConnector'                       => [
			'name'   => 'UpdateVoiceConnector',
			'http'   => [
				'method'       => 'PUT',
				'requestUri'   => '/voice-connectors/{voiceConnectorId}',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'UpdateVoiceConnectorRequest', ],
			'output' => [ 'shape' => 'UpdateVoiceConnectorResponse', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedClientException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ThrottledClientException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
	],
	'shapes'     => [
		'Account'                                            => [
			'type'     => 'structure',
			'required' => [ 'AwsAccountId', 'AccountId', 'Name', ],
			'members'  => [
				'AwsAccountId'      => [ 'shape' => 'String', ],
				'AccountId'         => [ 'shape' => 'String', ],
				'Name'              => [ 'shape' => 'String', ],
				'AccountType'       => [ 'shape' => 'AccountType', ],
				'CreatedTimestamp'  => [ 'shape' => 'Iso8601Timestamp', ],
				'DefaultLicense'    => [ 'shape' => 'License', ],
				'SupportedLicenses' => [ 'shape' => 'LicenseList', ],
			],
		],
		'AccountList'                                        => [
			'type'   => 'list',
			'member' => [ 'shape' => 'Account', ],
		],
		'AccountName'                                        => [
			'type'    => 'string',
			'max'     => 100,
			'min'     => 1,
			'pattern' => '.*\\S.*',
		],
		'AccountSettings'                                    => [
			'type'    => 'structure',
			'members' => [
				'DisableRemoteControl' => [ 'shape' => 'Boolean', ],
				'EnableDialOut'        => [ 'shape' => 'Boolean', ],
			],
		],
		'AccountType'                                        => [
			'type' => 'string',
			'enum' => [ 'Team', 'EnterpriseDirectory', 'EnterpriseLWA', 'EnterpriseOIDC', ],
		],
		'AssociatePhoneNumberWithUserRequest'                => [
			'type'     => 'structure',
			'required' => [ 'AccountId', 'UserId', 'E164PhoneNumber', ],
			'members'  => [
				'AccountId'       => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'accountId',
				],
				'UserId'          => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'userId',
				],
				'E164PhoneNumber' => [ 'shape' => 'E164PhoneNumber', ],
			],
		],
		'AssociatePhoneNumberWithUserResponse'               => [ 'type' => 'structure', 'members' => [], ],
		'AssociatePhoneNumbersWithVoiceConnectorRequest'     => [
			'type'     => 'structure',
			'required' => [ 'VoiceConnectorId', ],
			'members'  => [
				'VoiceConnectorId' => [
					'shape'        => 'NonEmptyString',
					'location'     => 'uri',
					'locationName' => 'voiceConnectorId',
				],
				'E164PhoneNumbers' => [ 'shape' => 'E164PhoneNumberList', ],
			],
		],
		'AssociatePhoneNumbersWithVoiceConnectorResponse'    => [
			'type'    => 'structure',
			'members' => [ 'PhoneNumberErrors' => [ 'shape' => 'PhoneNumberErrorList', ], ],
		],
		'BadRequestException'                                => [
			'type'      => 'structure',
			'members'   => [
				'Code'    => [ 'shape' => 'ErrorCode', ],
				'Message' => [ 'shape' => 'String', ],
			],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'BatchDeletePhoneNumberRequest'                      => [
			'type'     => 'structure',
			'required' => [ 'PhoneNumberIds', ],
			'members'  => [ 'PhoneNumberIds' => [ 'shape' => 'NonEmptyStringList', ], ],
		],
		'BatchDeletePhoneNumberResponse'                     => [
			'type'    => 'structure',
			'members' => [ 'PhoneNumberErrors' => [ 'shape' => 'PhoneNumberErrorList', ], ],
		],
		'BatchSuspendUserRequest'                            => [
			'type'     => 'structure',
			'required' => [ 'AccountId', 'UserIdList', ],
			'members'  => [
				'AccountId'  => [
					'shape'        => 'NonEmptyString',
					'location'     => 'uri',
					'locationName' => 'accountId',
				],
				'UserIdList' => [ 'shape' => 'UserIdList', ],
			],
		],
		'BatchSuspendUserResponse'                           => [
			'type'    => 'structure',
			'members' => [ 'UserErrors' => [ 'shape' => 'UserErrorList', ], ],
		],
		'BatchUnsuspendUserRequest'                          => [
			'type'     => 'structure',
			'required' => [ 'AccountId', 'UserIdList', ],
			'members'  => [
				'AccountId'  => [
					'shape'        => 'NonEmptyString',
					'location'     => 'uri',
					'locationName' => 'accountId',
				],
				'UserIdList' => [ 'shape' => 'UserIdList', ],
			],
		],
		'BatchUnsuspendUserResponse'                         => [
			'type'    => 'structure',
			'members' => [ 'UserErrors' => [ 'shape' => 'UserErrorList', ], ],
		],
		'BatchUpdatePhoneNumberRequest'                      => [
			'type'     => 'structure',
			'required' => [ 'UpdatePhoneNumberRequestItems', ],
			'members'  => [ 'UpdatePhoneNumberRequestItems' => [ 'shape' => 'UpdatePhoneNumberRequestItemList', ], ],
		],
		'BatchUpdatePhoneNumberResponse'                     => [
			'type'    => 'structure',
			'members' => [ 'PhoneNumberErrors' => [ 'shape' => 'PhoneNumberErrorList', ], ],
		],
		'BatchUpdateUserRequest'                             => [
			'type'     => 'structure',
			'required' => [ 'AccountId', 'UpdateUserRequestItems', ],
			'members'  => [
				'AccountId'              => [
					'shape'        => 'NonEmptyString',
					'location'     => 'uri',
					'locationName' => 'accountId',
				],
				'UpdateUserRequestItems' => [ 'shape' => 'UpdateUserRequestItemList', ],
			],
		],
		'BatchUpdateUserResponse'                            => [
			'type'    => 'structure',
			'members' => [ 'UserErrors' => [ 'shape' => 'UserErrorList', ], ],
		],
		'Boolean'                                            => [ 'type' => 'boolean', ],
		'Bot'                                                => [
			'type'    => 'structure',
			'members' => [
				'BotId'            => [ 'shape' => 'String', ],
				'UserId'           => [ 'shape' => 'String', ],
				'DisplayName'      => [ 'shape' => 'SensitiveString', ],
				'BotType'          => [ 'shape' => 'BotType', ],
				'Disabled'         => [ 'shape' => 'NullableBoolean', ],
				'CreatedTimestamp' => [ 'shape' => 'Iso8601Timestamp', ],
				'UpdatedTimestamp' => [ 'shape' => 'Iso8601Timestamp', ],
				'BotEmail'         => [ 'shape' => 'SensitiveString', ],
				'SecurityToken'    => [ 'shape' => 'SensitiveString', ],
			],
		],
		'BotList'                                            => [
			'type'   => 'list',
			'member' => [ 'shape' => 'Bot', ],
		],
		'BotType'                                            => [ 'type' => 'string', 'enum' => [ 'ChatBot', ], ],
		'BusinessCallingSettings'                            => [
			'type'    => 'structure',
			'members' => [
				'CdrBucket' => [
					'shape' => 'String',
					'box'   => true,
				],
			],
		],
		'CallingRegion'                                      => [ 'type' => 'string', ],
		'CallingRegionList'                                  => [
			'type'   => 'list',
			'member' => [ 'shape' => 'CallingRegion', ],
		],
		'ConflictException'                                  => [
			'type'      => 'structure',
			'members'   => [
				'Code'    => [ 'shape' => 'ErrorCode', ],
				'Message' => [ 'shape' => 'String', ],
			],
			'error'     => [ 'httpStatusCode' => 409, ],
			'exception' => true,
		],
		'CpsLimit'                                           => [ 'type' => 'integer', 'min' => 1, ],
		'CreateAccountRequest'                               => [
			'type'     => 'structure',
			'required' => [ 'Name', ],
			'members'  => [ 'Name' => [ 'shape' => 'AccountName', ], ],
		],
		'CreateAccountResponse'                              => [
			'type'    => 'structure',
			'members' => [ 'Account' => [ 'shape' => 'Account', ], ],
		],
		'CreateBotRequest'                                   => [
			'type'     => 'structure',
			'required' => [ 'DisplayName', 'AccountId', ],
			'members'  => [
				'AccountId'   => [
					'shape'        => 'NonEmptyString',
					'location'     => 'uri',
					'locationName' => 'accountId',
				],
				'DisplayName' => [ 'shape' => 'SensitiveString', ],
				'Domain'      => [ 'shape' => 'NonEmptyString', ],
			],
		],
		'CreateBotResponse'                                  => [
			'type'    => 'structure',
			'members' => [ 'Bot' => [ 'shape' => 'Bot', ], ],
		],
		'CreatePhoneNumberOrderRequest'                      => [
			'type'     => 'structure',
			'required' => [ 'ProductType', 'E164PhoneNumbers', ],
			'members'  => [
				'ProductType'      => [ 'shape' => 'PhoneNumberProductType', ],
				'E164PhoneNumbers' => [ 'shape' => 'E164PhoneNumberList', ],
			],
		],
		'CreatePhoneNumberOrderResponse'                     => [
			'type'    => 'structure',
			'members' => [ 'PhoneNumberOrder' => [ 'shape' => 'PhoneNumberOrder', ], ],
		],
		'CreateVoiceConnectorRequest'                        => [
			'type'     => 'structure',
			'required' => [ 'Name', 'RequireEncryption', ],
			'members'  => [
				'Name'              => [ 'shape' => 'VoiceConnectorName', ],
				'RequireEncryption' => [ 'shape' => 'Boolean', ],
			],
		],
		'CreateVoiceConnectorResponse'                       => [
			'type'    => 'structure',
			'members' => [ 'VoiceConnector' => [ 'shape' => 'VoiceConnector', ], ],
		],
		'Credential'                                         => [
			'type'    => 'structure',
			'members' => [
				'Username' => [ 'shape' => 'SensitiveString', ],
				'Password' => [ 'shape' => 'SensitiveString', ],
			],
		],
		'CredentialList'                                     => [
			'type'   => 'list',
			'member' => [ 'shape' => 'Credential', ],
		],
		'DeleteAccountRequest'                               => [
			'type'     => 'structure',
			'required' => [ 'AccountId', ],
			'members'  => [
				'AccountId' => [
					'shape'        => 'NonEmptyString',
					'location'     => 'uri',
					'locationName' => 'accountId',
				],
			],
		],
		'DeleteAccountResponse'                              => [ 'type' => 'structure', 'members' => [], ],
		'DeleteEventsConfigurationRequest'                   => [
			'type'     => 'structure',
			'required' => [ 'AccountId', 'BotId', ],
			'members'  => [
				'AccountId' => [
					'shape'        => 'NonEmptyString',
					'location'     => 'uri',
					'locationName' => 'accountId',
				],
				'BotId'     => [
					'shape'        => 'NonEmptyString',
					'location'     => 'uri',
					'locationName' => 'botId',
				],
			],
		],
		'DeletePhoneNumberRequest'                           => [
			'type'     => 'structure',
			'required' => [ 'PhoneNumberId', ],
			'members'  => [
				'PhoneNumberId' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'phoneNumberId',
				],
			],
		],
		'DeleteVoiceConnectorOriginationRequest'             => [
			'type'     => 'structure',
			'required' => [ 'VoiceConnectorId', ],
			'members'  => [
				'VoiceConnectorId' => [
					'shape'        => 'NonEmptyString',
					'location'     => 'uri',
					'locationName' => 'voiceConnectorId',
				],
			],
		],
		'DeleteVoiceConnectorRequest'                        => [
			'type'     => 'structure',
			'required' => [ 'VoiceConnectorId', ],
			'members'  => [
				'VoiceConnectorId' => [
					'shape'        => 'NonEmptyString',
					'location'     => 'uri',
					'locationName' => 'voiceConnectorId',
				],
			],
		],
		'DeleteVoiceConnectorTerminationCredentialsRequest'  => [
			'type'     => 'structure',
			'required' => [ 'VoiceConnectorId', ],
			'members'  => [
				'VoiceConnectorId' => [
					'shape'        => 'NonEmptyString',
					'location'     => 'uri',
					'locationName' => 'voiceConnectorId',
				],
				'Usernames'        => [ 'shape' => 'SensitiveStringList', ],
			],
		],
		'DeleteVoiceConnectorTerminationRequest'             => [
			'type'     => 'structure',
			'required' => [ 'VoiceConnectorId', ],
			'members'  => [
				'VoiceConnectorId' => [
					'shape'        => 'NonEmptyString',
					'location'     => 'uri',
					'locationName' => 'voiceConnectorId',
				],
			],
		],
		'DisassociatePhoneNumberFromUserRequest'             => [
			'type'     => 'structure',
			'required' => [ 'AccountId', 'UserId', ],
			'members'  => [
				'AccountId' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'accountId',
				],
				'UserId'    => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'userId',
				],
			],
		],
		'DisassociatePhoneNumberFromUserResponse'            => [ 'type' => 'structure', 'members' => [], ],
		'DisassociatePhoneNumbersFromVoiceConnectorRequest'  => [
			'type'     => 'structure',
			'required' => [ 'VoiceConnectorId', ],
			'members'  => [
				'VoiceConnectorId' => [
					'shape'        => 'NonEmptyString',
					'location'     => 'uri',
					'locationName' => 'voiceConnectorId',
				],
				'E164PhoneNumbers' => [ 'shape' => 'E164PhoneNumberList', ],
			],
		],
		'DisassociatePhoneNumbersFromVoiceConnectorResponse' => [
			'type'    => 'structure',
			'members' => [ 'PhoneNumberErrors' => [ 'shape' => 'PhoneNumberErrorList', ], ],
		],
		'E164PhoneNumber'                                    => [
			'type'      => 'string',
			'pattern'   => '^\\+?[1-9]\\d{1,14}$',
			'sensitive' => true,
		],
		'E164PhoneNumberList'                                => [
			'type'   => 'list',
			'member' => [ 'shape' => 'E164PhoneNumber', ],
		],
		'EmailAddress'                                       => [
			'type'      => 'string',
			'pattern'   => '.+@.+\\..+',
			'sensitive' => true,
		],
		'EmailStatus'                                        => [
			'type' => 'string',
			'enum' => [ 'NotSent', 'Sent', 'Failed', ],
		],
		'ErrorCode'                                          => [
			'type' => 'string',
			'enum' => [
				'Unauthorized',
				'Forbidden',
				'NotFound',
				'BadRequest',
				'Conflict',
				'ServiceFailure',
				'ServiceUnavailable',
				'Unprocessable',
				'Throttled',
				'PreconditionFailed',
			],
		],
		'EventsConfiguration'                                => [
			'type'    => 'structure',
			'members' => [
				'BotId'                       => [ 'shape' => 'String', ],
				'OutboundEventsHTTPSEndpoint' => [ 'shape' => 'SensitiveString', ],
				'LambdaFunctionArn'           => [ 'shape' => 'SensitiveString', ],
			],
		],
		'ForbiddenException'                                 => [
			'type'      => 'structure',
			'members'   => [
				'Code'    => [ 'shape' => 'ErrorCode', ],
				'Message' => [ 'shape' => 'String', ],
			],
			'error'     => [ 'httpStatusCode' => 403, ],
			'exception' => true,
		],
		'GetAccountRequest'                                  => [
			'type'     => 'structure',
			'required' => [ 'AccountId', ],
			'members'  => [
				'AccountId' => [
					'shape'        => 'NonEmptyString',
					'location'     => 'uri',
					'locationName' => 'accountId',
				],
			],
		],
		'GetAccountResponse'                                 => [
			'type'    => 'structure',
			'members' => [ 'Account' => [ 'shape' => 'Account', ], ],
		],
		'GetAccountSettingsRequest'                          => [
			'type'     => 'structure',
			'required' => [ 'AccountId', ],
			'members'  => [
				'AccountId' => [
					'shape'        => 'NonEmptyString',
					'location'     => 'uri',
					'locationName' => 'accountId',
				],
			],
		],
		'GetAccountSettingsResponse'                         => [
			'type'    => 'structure',
			'members' => [ 'AccountSettings' => [ 'shape' => 'AccountSettings', ], ],
		],
		'GetBotRequest'                                      => [
			'type'     => 'structure',
			'required' => [ 'AccountId', 'BotId', ],
			'members'  => [
				'AccountId' => [
					'shape'        => 'NonEmptyString',
					'location'     => 'uri',
					'locationName' => 'accountId',
				],
				'BotId'     => [
					'shape'        => 'NonEmptyString',
					'location'     => 'uri',
					'locationName' => 'botId',
				],
			],
		],
		'GetBotResponse'                                     => [
			'type'    => 'structure',
			'members' => [ 'Bot' => [ 'shape' => 'Bot', ], ],
		],
		'GetEventsConfigurationRequest'                      => [
			'type'     => 'structure',
			'required' => [ 'AccountId', 'BotId', ],
			'members'  => [
				'AccountId' => [
					'shape'        => 'NonEmptyString',
					'location'     => 'uri',
					'locationName' => 'accountId',
				],
				'BotId'     => [
					'shape'        => 'NonEmptyString',
					'location'     => 'uri',
					'locationName' => 'botId',
				],
			],
		],
		'GetEventsConfigurationResponse'                     => [
			'type'    => 'structure',
			'members' => [ 'EventsConfiguration' => [ 'shape' => 'EventsConfiguration', ], ],
		],
		'GetGlobalSettingsResponse'                          => [
			'type'    => 'structure',
			'members' => [
				'BusinessCalling' => [ 'shape' => 'BusinessCallingSettings', ],
				'VoiceConnector'  => [ 'shape' => 'VoiceConnectorSettings', ],
			],
		],
		'GetPhoneNumberOrderRequest'                         => [
			'type'     => 'structure',
			'required' => [ 'PhoneNumberOrderId', ],
			'members'  => [
				'PhoneNumberOrderId' => [
					'shape'        => 'GuidString',
					'location'     => 'uri',
					'locationName' => 'phoneNumberOrderId',
				],
			],
		],
		'GetPhoneNumberOrderResponse'                        => [
			'type'    => 'structure',
			'members' => [ 'PhoneNumberOrder' => [ 'shape' => 'PhoneNumberOrder', ], ],
		],
		'GetPhoneNumberRequest'                              => [
			'type'     => 'structure',
			'required' => [ 'PhoneNumberId', ],
			'members'  => [
				'PhoneNumberId' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'phoneNumberId',
				],
			],
		],
		'GetPhoneNumberResponse'                             => [
			'type'    => 'structure',
			'members' => [ 'PhoneNumber' => [ 'shape' => 'PhoneNumber', ], ],
		],
		'GetUserRequest'                                     => [
			'type'     => 'structure',
			'required' => [ 'AccountId', 'UserId', ],
			'members'  => [
				'AccountId' => [
					'shape'        => 'NonEmptyString',
					'location'     => 'uri',
					'locationName' => 'accountId',
				],
				'UserId'    => [
					'shape'        => 'NonEmptyString',
					'location'     => 'uri',
					'locationName' => 'userId',
				],
			],
		],
		'GetUserResponse'                                    => [
			'type'    => 'structure',
			'members' => [ 'User' => [ 'shape' => 'User', ], ],
		],
		'GetUserSettingsRequest'                             => [
			'type'     => 'structure',
			'required' => [ 'AccountId', 'UserId', ],
			'members'  => [
				'AccountId' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'accountId',
				],
				'UserId'    => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'userId',
				],
			],
		],
		'GetUserSettingsResponse'                            => [
			'type'    => 'structure',
			'members' => [ 'UserSettings' => [ 'shape' => 'UserSettings', ], ],
		],
		'GetVoiceConnectorOriginationRequest'                => [
			'type'     => 'structure',
			'required' => [ 'VoiceConnectorId', ],
			'members'  => [
				'VoiceConnectorId' => [
					'shape'        => 'NonEmptyString',
					'location'     => 'uri',
					'locationName' => 'voiceConnectorId',
				],
			],
		],
		'GetVoiceConnectorOriginationResponse'               => [
			'type'    => 'structure',
			'members' => [ 'Origination' => [ 'shape' => 'Origination', ], ],
		],
		'GetVoiceConnectorRequest'                           => [
			'type'     => 'structure',
			'required' => [ 'VoiceConnectorId', ],
			'members'  => [
				'VoiceConnectorId' => [
					'shape'        => 'NonEmptyString',
					'location'     => 'uri',
					'locationName' => 'voiceConnectorId',
				],
			],
		],
		'GetVoiceConnectorResponse'                          => [
			'type'    => 'structure',
			'members' => [ 'VoiceConnector' => [ 'shape' => 'VoiceConnector', ], ],
		],
		'GetVoiceConnectorTerminationHealthRequest'          => [
			'type'     => 'structure',
			'required' => [ 'VoiceConnectorId', ],
			'members'  => [
				'VoiceConnectorId' => [
					'shape'        => 'NonEmptyString',
					'location'     => 'uri',
					'locationName' => 'voiceConnectorId',
				],
			],
		],
		'GetVoiceConnectorTerminationHealthResponse'         => [
			'type'    => 'structure',
			'members' => [ 'TerminationHealth' => [ 'shape' => 'TerminationHealth', ], ],
		],
		'GetVoiceConnectorTerminationRequest'                => [
			'type'     => 'structure',
			'required' => [ 'VoiceConnectorId', ],
			'members'  => [
				'VoiceConnectorId' => [
					'shape'        => 'NonEmptyString',
					'location'     => 'uri',
					'locationName' => 'voiceConnectorId',
				],
			],
		],
		'GetVoiceConnectorTerminationResponse'               => [
			'type'    => 'structure',
			'members' => [ 'Termination' => [ 'shape' => 'Termination', ], ],
		],
		'GuidString'                                         => [
			'type'    => 'string',
			'pattern' => '[a-fA-F0-9]{8}(?:-[a-fA-F0-9]{4}){3}-[a-fA-F0-9]{12}',
		],
		'Invite'                                             => [
			'type'    => 'structure',
			'members' => [
				'InviteId'     => [ 'shape' => 'String', ],
				'Status'       => [ 'shape' => 'InviteStatus', ],
				'EmailAddress' => [ 'shape' => 'EmailAddress', ],
				'EmailStatus'  => [ 'shape' => 'EmailStatus', ],
			],
		],
		'InviteList'                                         => [
			'type'   => 'list',
			'member' => [ 'shape' => 'Invite', ],
		],
		'InviteStatus'                                       => [
			'type' => 'string',
			'enum' => [ 'Pending', 'Accepted', 'Failed', ],
		],
		'InviteUsersRequest'                                 => [
			'type'     => 'structure',
			'required' => [ 'AccountId', 'UserEmailList', ],
			'members'  => [
				'AccountId'     => [
					'shape'        => 'NonEmptyString',
					'location'     => 'uri',
					'locationName' => 'accountId',
				],
				'UserEmailList' => [ 'shape' => 'UserEmailList', ],
			],
		],
		'InviteUsersResponse'                                => [
			'type'    => 'structure',
			'members' => [ 'Invites' => [ 'shape' => 'InviteList', ], ],
		],
		'Iso8601Timestamp'                                   => [
			'type'            => 'timestamp',
			'timestampFormat' => 'iso8601',
		],
		'License'                                            => [
			'type' => 'string',
			'enum' => [ 'Basic', 'Plus', 'Pro', 'ProTrial', ],
		],
		'LicenseList'                                        => [
			'type'   => 'list',
			'member' => [ 'shape' => 'License', ],
		],
		'ListAccountsRequest'                                => [
			'type'    => 'structure',
			'members' => [
				'Name'       => [
					'shape'        => 'AccountName',
					'location'     => 'querystring',
					'locationName' => 'name',
				],
				'UserEmail'  => [
					'shape'        => 'EmailAddress',
					'location'     => 'querystring',
					'locationName' => 'user-email',
				],
				'NextToken'  => [
					'shape'        => 'String',
					'location'     => 'querystring',
					'locationName' => 'next-token',
				],
				'MaxResults' => [
					'shape'        => 'ProfileServiceMaxResults',
					'location'     => 'querystring',
					'locationName' => 'max-results',
				],
			],
		],
		'ListAccountsResponse'                               => [
			'type'    => 'structure',
			'members' => [
				'Accounts'  => [ 'shape' => 'AccountList', ],
				'NextToken' => [ 'shape' => 'String', ],
			],
		],
		'ListBotsRequest'                                    => [
			'type'     => 'structure',
			'required' => [ 'AccountId', ],
			'members'  => [
				'AccountId'  => [
					'shape'        => 'NonEmptyString',
					'location'     => 'uri',
					'locationName' => 'accountId',
				],
				'MaxResults' => [
					'shape'        => 'ResultMax',
					'location'     => 'querystring',
					'locationName' => 'max-results',
				],
				'NextToken'  => [
					'shape'        => 'String',
					'location'     => 'querystring',
					'locationName' => 'next-token',
				],
			],
		],
		'ListBotsResponse'                                   => [
			'type'    => 'structure',
			'members' => [
				'Bots'      => [ 'shape' => 'BotList', ],
				'NextToken' => [ 'shape' => 'String', ],
			],
		],
		'ListPhoneNumberOrdersRequest'                       => [
			'type'    => 'structure',
			'members' => [
				'NextToken'  => [
					'shape'        => 'String',
					'location'     => 'querystring',
					'locationName' => 'next-token',
				],
				'MaxResults' => [
					'shape'        => 'ResultMax',
					'location'     => 'querystring',
					'locationName' => 'max-results',
				],
			],
		],
		'ListPhoneNumberOrdersResponse'                      => [
			'type'    => 'structure',
			'members' => [
				'PhoneNumberOrders' => [ 'shape' => 'PhoneNumberOrderList', ],
				'NextToken'         => [ 'shape' => 'String', ],
			],
		],
		'ListPhoneNumbersRequest'                            => [
			'type'    => 'structure',
			'members' => [
				'Status'      => [
					'shape'        => 'PhoneNumberStatus',
					'location'     => 'querystring',
					'locationName' => 'status',
				],
				'ProductType' => [
					'shape'        => 'PhoneNumberProductType',
					'location'     => 'querystring',
					'locationName' => 'product-type',
				],
				'FilterName'  => [
					'shape'        => 'PhoneNumberAssociationName',
					'location'     => 'querystring',
					'locationName' => 'filter-name',
				],
				'FilterValue' => [
					'shape'        => 'String',
					'location'     => 'querystring',
					'locationName' => 'filter-value',
				],
				'MaxResults'  => [
					'shape'        => 'ResultMax',
					'location'     => 'querystring',
					'locationName' => 'max-results',
				],
				'NextToken'   => [
					'shape'        => 'String',
					'location'     => 'querystring',
					'locationName' => 'next-token',
				],
			],
		],
		'ListPhoneNumbersResponse'                           => [
			'type'    => 'structure',
			'members' => [
				'PhoneNumbers' => [ 'shape' => 'PhoneNumberList', ],
				'NextToken'    => [ 'shape' => 'String', ],
			],
		],
		'ListUsersRequest'                                   => [
			'type'     => 'structure',
			'required' => [ 'AccountId', ],
			'members'  => [
				'AccountId'  => [
					'shape'        => 'NonEmptyString',
					'location'     => 'uri',
					'locationName' => 'accountId',
				],
				'UserEmail'  => [
					'shape'        => 'EmailAddress',
					'location'     => 'querystring',
					'locationName' => 'user-email',
				],
				'MaxResults' => [
					'shape'        => 'ProfileServiceMaxResults',
					'location'     => 'querystring',
					'locationName' => 'max-results',
				],
				'NextToken'  => [
					'shape'        => 'String',
					'location'     => 'querystring',
					'locationName' => 'next-token',
				],
			],
		],
		'ListUsersResponse'                                  => [
			'type'    => 'structure',
			'members' => [
				'Users'     => [ 'shape' => 'UserList', ],
				'NextToken' => [ 'shape' => 'String', ],
			],
		],
		'ListVoiceConnectorTerminationCredentialsRequest'    => [
			'type'     => 'structure',
			'required' => [ 'VoiceConnectorId', ],
			'members'  => [
				'VoiceConnectorId' => [
					'shape'        => 'NonEmptyString',
					'location'     => 'uri',
					'locationName' => 'voiceConnectorId',
				],
			],
		],
		'ListVoiceConnectorTerminationCredentialsResponse'   => [
			'type'    => 'structure',
			'members' => [ 'Usernames' => [ 'shape' => 'SensitiveStringList', ], ],
		],
		'ListVoiceConnectorsRequest'                         => [
			'type'    => 'structure',
			'members' => [
				'NextToken'  => [
					'shape'        => 'String',
					'location'     => 'querystring',
					'locationName' => 'next-token',
				],
				'MaxResults' => [
					'shape'        => 'ResultMax',
					'location'     => 'querystring',
					'locationName' => 'max-results',
				],
			],
		],
		'ListVoiceConnectorsResponse'                        => [
			'type'    => 'structure',
			'members' => [
				'VoiceConnectors' => [ 'shape' => 'VoiceConnectorList', ],
				'NextToken'       => [ 'shape' => 'String', ],
			],
		],
		'LogoutUserRequest'                                  => [
			'type'     => 'structure',
			'required' => [ 'AccountId', 'UserId', ],
			'members'  => [
				'AccountId' => [
					'shape'        => 'NonEmptyString',
					'location'     => 'uri',
					'locationName' => 'accountId',
				],
				'UserId'    => [
					'shape'        => 'NonEmptyString',
					'location'     => 'uri',
					'locationName' => 'userId',
				],
			],
		],
		'LogoutUserResponse'                                 => [ 'type' => 'structure', 'members' => [], ],
		'NonEmptyString'                                     => [ 'type' => 'string', 'pattern' => '.*\\S.*', ],
		'NonEmptyStringList'                                 => [
			'type'   => 'list',
			'member' => [ 'shape' => 'String', ],
			'min'    => 1,
		],
		'NotFoundException'                                  => [
			'type'      => 'structure',
			'members'   => [
				'Code'    => [ 'shape' => 'ErrorCode', ],
				'Message' => [ 'shape' => 'String', ],
			],
			'error'     => [ 'httpStatusCode' => 404, ],
			'exception' => true,
		],
		'NullableBoolean'                                    => [ 'type' => 'boolean', ],
		'OrderedPhoneNumber'                                 => [
			'type'    => 'structure',
			'members' => [
				'E164PhoneNumber' => [ 'shape' => 'E164PhoneNumber', ],
				'Status'          => [ 'shape' => 'OrderedPhoneNumberStatus', ],
			],
		],
		'OrderedPhoneNumberList'                             => [
			'type'   => 'list',
			'member' => [ 'shape' => 'OrderedPhoneNumber', ],
		],
		'OrderedPhoneNumberStatus'                           => [
			'type' => 'string',
			'enum' => [ 'Processing', 'Acquired', 'Failed', ],
		],
		'Origination'                                        => [
			'type'    => 'structure',
			'members' => [
				'Routes'   => [ 'shape' => 'OriginationRouteList', ],
				'Disabled' => [ 'shape' => 'Boolean', ],
			],
		],
		'OriginationRoute'                                   => [
			'type'    => 'structure',
			'members' => [
				'Host'     => [ 'shape' => 'String', ],
				'Port'     => [ 'shape' => 'Port', ],
				'Protocol' => [ 'shape' => 'OriginationRouteProtocol', ],
				'Priority' => [ 'shape' => 'OriginationRoutePriority', ],
				'Weight'   => [ 'shape' => 'OriginationRouteWeight', ],
			],
		],
		'OriginationRouteList'                               => [
			'type'   => 'list',
			'member' => [ 'shape' => 'OriginationRoute', ],
		],
		'OriginationRoutePriority'                           => [ 'type' => 'integer', 'max' => 100, 'min' => 1, ],
		'OriginationRouteProtocol'                           => [ 'type' => 'string', 'enum' => [ 'TCP', 'UDP', ], ],
		'OriginationRouteWeight'                             => [ 'type' => 'integer', 'max' => 100, 'min' => 1, ],
		'PhoneNumber'                                        => [
			'type'    => 'structure',
			'members' => [
				'PhoneNumberId'     => [ 'shape' => 'String', ],
				'E164PhoneNumber'   => [ 'shape' => 'E164PhoneNumber', ],
				'Type'              => [ 'shape' => 'PhoneNumberType', ],
				'ProductType'       => [ 'shape' => 'PhoneNumberProductType', ],
				'Status'            => [ 'shape' => 'PhoneNumberStatus', ],
				'Capabilities'      => [ 'shape' => 'PhoneNumberCapabilities', ],
				'Associations'      => [ 'shape' => 'PhoneNumberAssociationList', ],
				'CreatedTimestamp'  => [ 'shape' => 'Iso8601Timestamp', ],
				'UpdatedTimestamp'  => [ 'shape' => 'Iso8601Timestamp', ],
				'DeletionTimestamp' => [ 'shape' => 'Iso8601Timestamp', ],
			],
		],
		'PhoneNumberAssociation'                             => [
			'type'    => 'structure',
			'members' => [
				'Value'               => [ 'shape' => 'String', ],
				'Name'                => [ 'shape' => 'PhoneNumberAssociationName', ],
				'AssociatedTimestamp' => [ 'shape' => 'Iso8601Timestamp', ],
			],
		],
		'PhoneNumberAssociationList'                         => [
			'type'   => 'list',
			'member' => [ 'shape' => 'PhoneNumberAssociation', ],
		],
		'PhoneNumberAssociationName'                         => [
			'type' => 'string',
			'enum' => [
				'AccountId',
				'UserId',
				'VoiceConnectorId',
			],
		],
		'PhoneNumberCapabilities'                            => [
			'type'    => 'structure',
			'members' => [
				'InboundCall'  => [ 'shape' => 'NullableBoolean', ],
				'OutboundCall' => [ 'shape' => 'NullableBoolean', ],
				'InboundSMS'   => [ 'shape' => 'NullableBoolean', ],
				'OutboundSMS'  => [ 'shape' => 'NullableBoolean', ],
				'InboundMMS'   => [ 'shape' => 'NullableBoolean', ],
				'OutboundMMS'  => [ 'shape' => 'NullableBoolean', ],
			],
		],
		'PhoneNumberError'                                   => [
			'type'    => 'structure',
			'members' => [
				'PhoneNumberId' => [ 'shape' => 'NonEmptyString', ],
				'ErrorCode'     => [ 'shape' => 'ErrorCode', ],
				'ErrorMessage'  => [ 'shape' => 'String', ],
			],
		],
		'PhoneNumberErrorList'                               => [
			'type'   => 'list',
			'member' => [ 'shape' => 'PhoneNumberError', ],
		],
		'PhoneNumberList'                                    => [
			'type'   => 'list',
			'member' => [ 'shape' => 'PhoneNumber', ],
		],
		'PhoneNumberMaxResults'                              => [ 'type' => 'integer', 'max' => 500, 'min' => 1, ],
		'PhoneNumberOrder'                                   => [
			'type'    => 'structure',
			'members' => [
				'PhoneNumberOrderId'  => [ 'shape' => 'GuidString', ],
				'ProductType'         => [ 'shape' => 'PhoneNumberProductType', ],
				'Status'              => [ 'shape' => 'PhoneNumberOrderStatus', ],
				'OrderedPhoneNumbers' => [ 'shape' => 'OrderedPhoneNumberList', ],
				'CreatedTimestamp'    => [ 'shape' => 'Iso8601Timestamp', ],
				'UpdatedTimestamp'    => [ 'shape' => 'Iso8601Timestamp', ],
			],
		],
		'PhoneNumberOrderList'                               => [
			'type'   => 'list',
			'member' => [ 'shape' => 'PhoneNumberOrder', ],
		],
		'PhoneNumberOrderStatus'                             => [
			'type' => 'string',
			'enum' => [
				'Processing',
				'Successful',
				'Failed',
				'Partial',
			],
		],
		'PhoneNumberProductType'                             => [
			'type' => 'string',
			'enum' => [ 'BusinessCalling', 'VoiceConnector', ],
		],
		'PhoneNumberStatus'                                  => [
			'type' => 'string',
			'enum' => [
				'AcquireInProgress',
				'AcquireFailed',
				'Unassigned',
				'Assigned',
				'ReleaseInProgress',
				'DeleteInProgress',
				'ReleaseFailed',
				'DeleteFailed',
			],
		],
		'PhoneNumberType'                                    => [
			'type' => 'string',
			'enum' => [ 'Local', 'TollFree', ],
		],
		'Port'                                               => [ 'type' => 'integer', 'max' => 65535, 'min' => 0, ],
		'ProfileServiceMaxResults'                           => [ 'type' => 'integer', 'max' => 200, 'min' => 1, ],
		'PutEventsConfigurationRequest'                      => [
			'type'     => 'structure',
			'required' => [ 'AccountId', 'BotId', ],
			'members'  => [
				'AccountId'                   => [
					'shape'        => 'NonEmptyString',
					'location'     => 'uri',
					'locationName' => 'accountId',
				],
				'BotId'                       => [
					'shape'        => 'NonEmptyString',
					'location'     => 'uri',
					'locationName' => 'botId',
				],
				'OutboundEventsHTTPSEndpoint' => [ 'shape' => 'SensitiveString', ],
				'LambdaFunctionArn'           => [ 'shape' => 'SensitiveString', ],
			],
		],
		'PutEventsConfigurationResponse'                     => [
			'type'    => 'structure',
			'members' => [ 'EventsConfiguration' => [ 'shape' => 'EventsConfiguration', ], ],
		],
		'PutVoiceConnectorOriginationRequest'                => [
			'type'     => 'structure',
			'required' => [ 'VoiceConnectorId', 'Origination', ],
			'members'  => [
				'VoiceConnectorId' => [
					'shape'        => 'NonEmptyString',
					'location'     => 'uri',
					'locationName' => 'voiceConnectorId',
				],
				'Origination'      => [ 'shape' => 'Origination', ],
			],
		],
		'PutVoiceConnectorOriginationResponse'               => [
			'type'    => 'structure',
			'members' => [ 'Origination' => [ 'shape' => 'Origination', ], ],
		],
		'PutVoiceConnectorTerminationCredentialsRequest'     => [
			'type'     => 'structure',
			'required' => [ 'VoiceConnectorId', ],
			'members'  => [
				'VoiceConnectorId' => [
					'shape'        => 'NonEmptyString',
					'location'     => 'uri',
					'locationName' => 'voiceConnectorId',
				],
				'Credentials'      => [ 'shape' => 'CredentialList', ],
			],
		],
		'PutVoiceConnectorTerminationRequest'                => [
			'type'     => 'structure',
			'required' => [ 'VoiceConnectorId', 'Termination', ],
			'members'  => [
				'VoiceConnectorId' => [
					'shape'        => 'NonEmptyString',
					'location'     => 'uri',
					'locationName' => 'voiceConnectorId',
				],
				'Termination'      => [ 'shape' => 'Termination', ],
			],
		],
		'PutVoiceConnectorTerminationResponse'               => [
			'type'    => 'structure',
			'members' => [ 'Termination' => [ 'shape' => 'Termination', ], ],
		],
		'RegenerateSecurityTokenRequest'                     => [
			'type'     => 'structure',
			'required' => [ 'AccountId', 'BotId', ],
			'members'  => [
				'AccountId' => [
					'shape'        => 'NonEmptyString',
					'location'     => 'uri',
					'locationName' => 'accountId',
				],
				'BotId'     => [
					'shape'        => 'NonEmptyString',
					'location'     => 'uri',
					'locationName' => 'botId',
				],
			],
		],
		'RegenerateSecurityTokenResponse'                    => [
			'type'    => 'structure',
			'members' => [ 'Bot' => [ 'shape' => 'Bot', ], ],
		],
		'RegistrationStatus'                                 => [
			'type' => 'string',
			'enum' => [
				'Unregistered',
				'Registered',
				'Suspended',
			],
		],
		'ResetPersonalPINRequest'                            => [
			'type'     => 'structure',
			'required' => [ 'AccountId', 'UserId', ],
			'members'  => [
				'AccountId' => [
					'shape'        => 'NonEmptyString',
					'location'     => 'uri',
					'locationName' => 'accountId',
				],
				'UserId'    => [
					'shape'        => 'NonEmptyString',
					'location'     => 'uri',
					'locationName' => 'userId',
				],
			],
		],
		'ResetPersonalPINResponse'                           => [
			'type'    => 'structure',
			'members' => [ 'User' => [ 'shape' => 'User', ], ],
		],
		'ResourceLimitExceededException'                     => [
			'type'      => 'structure',
			'members'   => [
				'Code'    => [ 'shape' => 'ErrorCode', ],
				'Message' => [ 'shape' => 'String', ],
			],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'RestorePhoneNumberRequest'                          => [
			'type'     => 'structure',
			'required' => [ 'PhoneNumberId', ],
			'members'  => [
				'PhoneNumberId' => [
					'shape'        => 'NonEmptyString',
					'location'     => 'uri',
					'locationName' => 'phoneNumberId',
				],
			],
		],
		'RestorePhoneNumberResponse'                         => [
			'type'    => 'structure',
			'members' => [ 'PhoneNumber' => [ 'shape' => 'PhoneNumber', ], ],
		],
		'ResultMax'                                          => [ 'type' => 'integer', 'max' => 99, 'min' => 1, ],
		'SearchAvailablePhoneNumbersRequest'                 => [
			'type'    => 'structure',
			'members' => [
				'AreaCode'       => [
					'shape'        => 'String',
					'location'     => 'querystring',
					'locationName' => 'area-code',
				],
				'City'           => [
					'shape'        => 'String',
					'location'     => 'querystring',
					'locationName' => 'city',
				],
				'Country'        => [
					'shape'        => 'String',
					'location'     => 'querystring',
					'locationName' => 'country',
				],
				'State'          => [
					'shape'        => 'String',
					'location'     => 'querystring',
					'locationName' => 'state',
				],
				'TollFreePrefix' => [
					'shape'        => 'TollFreePrefix',
					'location'     => 'querystring',
					'locationName' => 'toll-free-prefix',
				],
				'MaxResults'     => [
					'shape'        => 'PhoneNumberMaxResults',
					'location'     => 'querystring',
					'locationName' => 'max-results',
				],
				'NextToken'      => [
					'shape'        => 'String',
					'location'     => 'querystring',
					'locationName' => 'next-token',
				],
			],
		],
		'SearchAvailablePhoneNumbersResponse'                => [
			'type'    => 'structure',
			'members' => [ 'E164PhoneNumbers' => [ 'shape' => 'E164PhoneNumberList', ], ],
		],
		'SensitiveString'                                    => [ 'type' => 'string', 'sensitive' => true, ],
		'SensitiveStringList'                                => [
			'type'   => 'list',
			'member' => [ 'shape' => 'SensitiveString', ],
		],
		'ServiceFailureException'                            => [
			'type'      => 'structure',
			'members'   => [
				'Code'    => [ 'shape' => 'ErrorCode', ],
				'Message' => [ 'shape' => 'String', ],
			],
			'error'     => [ 'httpStatusCode' => 500, ],
			'exception' => true,
			'fault'     => true,
		],
		'ServiceUnavailableException'                        => [
			'type'      => 'structure',
			'members'   => [
				'Code'    => [ 'shape' => 'ErrorCode', ],
				'Message' => [ 'shape' => 'String', ],
			],
			'error'     => [ 'httpStatusCode' => 503, ],
			'exception' => true,
			'fault'     => true,
		],
		'String'                                             => [ 'type' => 'string', ],
		'StringList'                                         => [
			'type'   => 'list',
			'member' => [ 'shape' => 'String', ],
		],
		'TelephonySettings'                                  => [
			'type'     => 'structure',
			'required' => [
				'InboundCalling',
				'OutboundCalling',
				'SMS',
			],
			'members'  => [
				'InboundCalling'  => [ 'shape' => 'Boolean', ],
				'OutboundCalling' => [ 'shape' => 'Boolean', ],
				'SMS'             => [ 'shape' => 'Boolean', ],
			],
		],
		'Termination'                                        => [
			'type'    => 'structure',
			'members' => [
				'CpsLimit'           => [ 'shape' => 'CpsLimit', ],
				'DefaultPhoneNumber' => [ 'shape' => 'E164PhoneNumber', ],
				'CallingRegions'     => [ 'shape' => 'CallingRegionList', ],
				'CidrAllowedList'    => [ 'shape' => 'StringList', ],
				'Disabled'           => [ 'shape' => 'Boolean', ],
			],
		],
		'TerminationHealth'                                  => [
			'type'    => 'structure',
			'members' => [
				'Timestamp' => [ 'shape' => 'Iso8601Timestamp', ],
				'Source'    => [ 'shape' => 'String', ],
			],
		],
		'ThrottledClientException'                           => [
			'type'      => 'structure',
			'members'   => [
				'Code'    => [ 'shape' => 'ErrorCode', ],
				'Message' => [ 'shape' => 'String', ],
			],
			'error'     => [ 'httpStatusCode' => 429, ],
			'exception' => true,
		],
		'TollFreePrefix'                                     => [
			'type'    => 'string',
			'max'     => 3,
			'min'     => 3,
			'pattern' => '^8(00|33|44|55|66|77|88)$',
		],
		'UnauthorizedClientException'                        => [
			'type'      => 'structure',
			'members'   => [
				'Code'    => [ 'shape' => 'ErrorCode', ],
				'Message' => [ 'shape' => 'String', ],
			],
			'error'     => [ 'httpStatusCode' => 401, ],
			'exception' => true,
		],
		'UnprocessableEntityException'                       => [
			'type'      => 'structure',
			'members'   => [
				'Code'    => [ 'shape' => 'ErrorCode', ],
				'Message' => [ 'shape' => 'String', ],
			],
			'error'     => [ 'httpStatusCode' => 422, ],
			'exception' => true,
		],
		'UpdateAccountRequest'                               => [
			'type'     => 'structure',
			'required' => [ 'AccountId', ],
			'members'  => [
				'AccountId' => [
					'shape'        => 'NonEmptyString',
					'location'     => 'uri',
					'locationName' => 'accountId',
				],
				'Name'      => [ 'shape' => 'AccountName', ],
			],
		],
		'UpdateAccountResponse'                              => [
			'type'    => 'structure',
			'members' => [ 'Account' => [ 'shape' => 'Account', ], ],
		],
		'UpdateAccountSettingsRequest'                       => [
			'type'     => 'structure',
			'required' => [ 'AccountId', 'AccountSettings', ],
			'members'  => [
				'AccountId'       => [
					'shape'        => 'NonEmptyString',
					'location'     => 'uri',
					'locationName' => 'accountId',
				],
				'AccountSettings' => [ 'shape' => 'AccountSettings', ],
			],
		],
		'UpdateAccountSettingsResponse'                      => [ 'type' => 'structure', 'members' => [], ],
		'UpdateBotRequest'                                   => [
			'type'     => 'structure',
			'required' => [ 'AccountId', 'BotId', ],
			'members'  => [
				'AccountId' => [
					'shape'        => 'NonEmptyString',
					'location'     => 'uri',
					'locationName' => 'accountId',
				],
				'BotId'     => [
					'shape'        => 'NonEmptyString',
					'location'     => 'uri',
					'locationName' => 'botId',
				],
				'Disabled'  => [ 'shape' => 'NullableBoolean', ],
			],
		],
		'UpdateBotResponse'                                  => [
			'type'    => 'structure',
			'members' => [ 'Bot' => [ 'shape' => 'Bot', ], ],
		],
		'UpdateGlobalSettingsRequest'                        => [
			'type'     => 'structure',
			'required' => [
				'BusinessCalling',
				'VoiceConnector',
			],
			'members'  => [
				'BusinessCalling' => [ 'shape' => 'BusinessCallingSettings', ],
				'VoiceConnector'  => [ 'shape' => 'VoiceConnectorSettings', ],
			],
		],
		'UpdatePhoneNumberRequest'                           => [
			'type'     => 'structure',
			'required' => [ 'PhoneNumberId', ],
			'members'  => [
				'PhoneNumberId' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'phoneNumberId',
				],
				'ProductType'   => [ 'shape' => 'PhoneNumberProductType', ],
			],
		],
		'UpdatePhoneNumberRequestItem'                       => [
			'type'     => 'structure',
			'required' => [ 'PhoneNumberId', ],
			'members'  => [
				'PhoneNumberId' => [ 'shape' => 'NonEmptyString', ],
				'ProductType'   => [ 'shape' => 'PhoneNumberProductType', ],
			],
		],
		'UpdatePhoneNumberRequestItemList'                   => [
			'type'   => 'list',
			'member' => [ 'shape' => 'UpdatePhoneNumberRequestItem', ],
		],
		'UpdatePhoneNumberResponse'                          => [
			'type'    => 'structure',
			'members' => [ 'PhoneNumber' => [ 'shape' => 'PhoneNumber', ], ],
		],
		'UpdateUserRequest'                                  => [
			'type'     => 'structure',
			'required' => [ 'AccountId', 'UserId', ],
			'members'  => [
				'AccountId'   => [
					'shape'        => 'NonEmptyString',
					'location'     => 'uri',
					'locationName' => 'accountId',
				],
				'UserId'      => [
					'shape'        => 'NonEmptyString',
					'location'     => 'uri',
					'locationName' => 'userId',
				],
				'LicenseType' => [ 'shape' => 'License', ],
			],
		],
		'UpdateUserRequestItem'                              => [
			'type'     => 'structure',
			'required' => [ 'UserId', ],
			'members'  => [
				'UserId'      => [ 'shape' => 'NonEmptyString', ],
				'LicenseType' => [ 'shape' => 'License', ],
			],
		],
		'UpdateUserRequestItemList'                          => [
			'type'   => 'list',
			'member' => [ 'shape' => 'UpdateUserRequestItem', ],
			'max'    => 20,
		],
		'UpdateUserResponse'                                 => [
			'type'    => 'structure',
			'members' => [ 'User' => [ 'shape' => 'User', ], ],
		],
		'UpdateUserSettingsRequest'                          => [
			'type'     => 'structure',
			'required' => [
				'AccountId',
				'UserId',
				'UserSettings',
			],
			'members'  => [
				'AccountId'    => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'accountId',
				],
				'UserId'       => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'userId',
				],
				'UserSettings' => [ 'shape' => 'UserSettings', ],
			],
		],
		'UpdateVoiceConnectorRequest'                        => [
			'type'     => 'structure',
			'required' => [
				'VoiceConnectorId',
				'Name',
				'RequireEncryption',
			],
			'members'  => [
				'VoiceConnectorId'  => [
					'shape'        => 'NonEmptyString',
					'location'     => 'uri',
					'locationName' => 'voiceConnectorId',
				],
				'Name'              => [ 'shape' => 'VoiceConnectorName', ],
				'RequireEncryption' => [ 'shape' => 'Boolean', ],
			],
		],
		'UpdateVoiceConnectorResponse'                       => [
			'type'    => 'structure',
			'members' => [ 'VoiceConnector' => [ 'shape' => 'VoiceConnector', ], ],
		],
		'User'                                               => [
			'type'     => 'structure',
			'required' => [ 'UserId', ],
			'members'  => [
				'UserId'                   => [ 'shape' => 'String', ],
				'AccountId'                => [ 'shape' => 'String', ],
				'PrimaryEmail'             => [ 'shape' => 'EmailAddress', ],
				'PrimaryProvisionedNumber' => [ 'shape' => 'SensitiveString', ],
				'DisplayName'              => [ 'shape' => 'SensitiveString', ],
				'LicenseType'              => [ 'shape' => 'License', ],
				'UserRegistrationStatus'   => [ 'shape' => 'RegistrationStatus', ],
				'UserInvitationStatus'     => [ 'shape' => 'InviteStatus', ],
				'RegisteredOn'             => [ 'shape' => 'Iso8601Timestamp', ],
				'InvitedOn'                => [ 'shape' => 'Iso8601Timestamp', ],
				'PersonalPIN'              => [ 'shape' => 'String', ],
			],
		],
		'UserEmailList'                                      => [
			'type'   => 'list',
			'member' => [ 'shape' => 'EmailAddress', ],
			'max'    => 50,
		],
		'UserError'                                          => [
			'type'    => 'structure',
			'members' => [
				'UserId'       => [ 'shape' => 'NonEmptyString', ],
				'ErrorCode'    => [ 'shape' => 'ErrorCode', ],
				'ErrorMessage' => [ 'shape' => 'String', ],
			],
		],
		'UserErrorList'                                      => [
			'type'   => 'list',
			'member' => [ 'shape' => 'UserError', ],
		],
		'UserIdList'                                         => [
			'type'   => 'list',
			'member' => [ 'shape' => 'NonEmptyString', ],
			'max'    => 50,
		],
		'UserList'                                           => [
			'type'   => 'list',
			'member' => [ 'shape' => 'User', ],
		],
		'UserSettings'                                       => [
			'type'     => 'structure',
			'required' => [ 'Telephony', ],
			'members'  => [ 'Telephony' => [ 'shape' => 'TelephonySettings', ], ],
		],
		'VoiceConnector'                                     => [
			'type'    => 'structure',
			'members' => [
				'VoiceConnectorId'  => [ 'shape' => 'NonEmptyString', ],
				'Name'              => [ 'shape' => 'VoiceConnectorName', ],
				'OutboundHostName'  => [ 'shape' => 'String', ],
				'RequireEncryption' => [ 'shape' => 'Boolean', ],
				'CreatedTimestamp'  => [ 'shape' => 'Iso8601Timestamp', ],
				'UpdatedTimestamp'  => [ 'shape' => 'Iso8601Timestamp', ],
			],
		],
		'VoiceConnectorList'                                 => [
			'type'   => 'list',
			'member' => [ 'shape' => 'VoiceConnector', ],
		],
		'VoiceConnectorName'                                 => [ 'type' => 'string', 'max' => 256, 'min' => 1, ],
		'VoiceConnectorSettings'                             => [
			'type'    => 'structure',
			'members' => [
				'CdrBucket' => [
					'shape' => 'String',
					'box'   => true,
				],
			],
		],
	],
];
