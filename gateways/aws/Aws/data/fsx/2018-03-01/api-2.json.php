<?php
// This file was auto-generated from sdk-root/src/data/fsx/2018-03-01/api-2.json
return [
	'version'    => '2.0',
	'metadata'   => [
		'apiVersion'       => '2018-03-01',
		'endpointPrefix'   => 'fsx',
		'jsonVersion'      => '1.1',
		'protocol'         => 'json',
		'serviceFullName'  => 'Amazon FSx',
		'serviceId'        => 'FSx',
		'signatureVersion' => 'v4',
		'targetPrefix'     => 'AWSSimbaAPIService_v20180301',
		'uid'              => 'fsx-2018-03-01',
	],
	'operations' => [
		'CreateBackup'               => [
			'name'       => 'CreateBackup',
			'http'       => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'      => [ 'shape' => 'CreateBackupRequest', ],
			'output'     => [ 'shape' => 'CreateBackupResponse', ],
			'errors'     => [
				[ 'shape' => 'BadRequest', ],
				[ 'shape' => 'UnsupportedOperation', ],
				[ 'shape' => 'FileSystemNotFound', ],
				[ 'shape' => 'BackupInProgress', ],
				[ 'shape' => 'IncompatibleParameterError', ],
				[ 'shape' => 'ServiceLimitExceeded', ],
				[ 'shape' => 'InternalServerError', ],
			],
			'idempotent' => true,
		],
		'CreateFileSystem'           => [
			'name'   => 'CreateFileSystem',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateFileSystemRequest', ],
			'output' => [ 'shape' => 'CreateFileSystemResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequest', ],
				[ 'shape' => 'ActiveDirectoryError', ],
				[ 'shape' => 'IncompatibleParameterError', ],
				[ 'shape' => 'InvalidImportPath', ],
				[ 'shape' => 'InvalidExportPath', ],
				[ 'shape' => 'InvalidNetworkSettings', ],
				[ 'shape' => 'ServiceLimitExceeded', ],
				[ 'shape' => 'InternalServerError', ],
				[ 'shape' => 'MissingFileSystemConfiguration', ],
			],
		],
		'CreateFileSystemFromBackup' => [
			'name'   => 'CreateFileSystemFromBackup',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateFileSystemFromBackupRequest', ],
			'output' => [ 'shape' => 'CreateFileSystemFromBackupResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequest', ],
				[ 'shape' => 'ActiveDirectoryError', ],
				[ 'shape' => 'IncompatibleParameterError', ],
				[ 'shape' => 'InvalidNetworkSettings', ],
				[ 'shape' => 'ServiceLimitExceeded', ],
				[ 'shape' => 'BackupNotFound', ],
				[ 'shape' => 'InternalServerError', ],
				[ 'shape' => 'MissingFileSystemConfiguration', ],
			],
		],
		'DeleteBackup'               => [
			'name'       => 'DeleteBackup',
			'http'       => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'      => [ 'shape' => 'DeleteBackupRequest', ],
			'output'     => [ 'shape' => 'DeleteBackupResponse', ],
			'errors'     => [
				[ 'shape' => 'BadRequest', ],
				[ 'shape' => 'BackupInProgress', ],
				[ 'shape' => 'BackupNotFound', ],
				[ 'shape' => 'BackupRestoring', ],
				[ 'shape' => 'IncompatibleParameterError', ],
				[ 'shape' => 'InternalServerError', ],
			],
			'idempotent' => true,
		],
		'DeleteFileSystem'           => [
			'name'       => 'DeleteFileSystem',
			'http'       => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'      => [ 'shape' => 'DeleteFileSystemRequest', ],
			'output'     => [ 'shape' => 'DeleteFileSystemResponse', ],
			'errors'     => [
				[ 'shape' => 'BadRequest', ],
				[ 'shape' => 'IncompatibleParameterError', ],
				[ 'shape' => 'FileSystemNotFound', ],
				[ 'shape' => 'ServiceLimitExceeded', ],
				[ 'shape' => 'InternalServerError', ],
			],
			'idempotent' => true,
		],
		'DescribeBackups'            => [
			'name'   => 'DescribeBackups',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeBackupsRequest', ],
			'output' => [ 'shape' => 'DescribeBackupsResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequest', ],
				[ 'shape' => 'FileSystemNotFound', ],
				[ 'shape' => 'BackupNotFound', ],
				[ 'shape' => 'InternalServerError', ],
			],
		],
		'DescribeFileSystems'        => [
			'name'   => 'DescribeFileSystems',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeFileSystemsRequest', ],
			'output' => [ 'shape' => 'DescribeFileSystemsResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequest', ],
				[ 'shape' => 'FileSystemNotFound', ],
				[ 'shape' => 'InternalServerError', ],
			],
		],
		'ListTagsForResource'        => [
			'name'   => 'ListTagsForResource',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ListTagsForResourceRequest', ],
			'output' => [ 'shape' => 'ListTagsForResourceResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequest', ],
				[ 'shape' => 'InternalServerError', ],
				[ 'shape' => 'ResourceNotFound', ],
				[ 'shape' => 'NotServiceResourceError', ],
				[ 'shape' => 'ResourceDoesNotSupportTagging', ],
			],
		],
		'TagResource'                => [
			'name'       => 'TagResource',
			'http'       => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'      => [ 'shape' => 'TagResourceRequest', ],
			'output'     => [ 'shape' => 'TagResourceResponse', ],
			'errors'     => [
				[ 'shape' => 'BadRequest', ],
				[ 'shape' => 'InternalServerError', ],
				[ 'shape' => 'ResourceNotFound', ],
				[ 'shape' => 'NotServiceResourceError', ],
				[ 'shape' => 'ResourceDoesNotSupportTagging', ],
			],
			'idempotent' => true,
		],
		'UntagResource'              => [
			'name'       => 'UntagResource',
			'http'       => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'      => [ 'shape' => 'UntagResourceRequest', ],
			'output'     => [ 'shape' => 'UntagResourceResponse', ],
			'errors'     => [
				[ 'shape' => 'BadRequest', ],
				[ 'shape' => 'InternalServerError', ],
				[ 'shape' => 'ResourceNotFound', ],
				[ 'shape' => 'NotServiceResourceError', ],
				[ 'shape' => 'ResourceDoesNotSupportTagging', ],
			],
			'idempotent' => true,
		],
		'UpdateFileSystem'           => [
			'name'   => 'UpdateFileSystem',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'UpdateFileSystemRequest', ],
			'output' => [ 'shape' => 'UpdateFileSystemResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequest', ],
				[ 'shape' => 'UnsupportedOperation', ],
				[ 'shape' => 'IncompatibleParameterError', ],
				[ 'shape' => 'InternalServerError', ],
				[ 'shape' => 'FileSystemNotFound', ],
				[ 'shape' => 'MissingFileSystemConfiguration', ],
			],
		],
	],
	'shapes'     => [
		'AWSAccountId'                                   => [
			'type'    => 'string',
			'max'     => 12,
			'min'     => 12,
			'pattern' => '^\\d{12}$',
		],
		'ActiveDirectoryBackupAttributes'                => [
			'type'    => 'structure',
			'members' => [
				'DomainName'        => [ 'shape' => 'ActiveDirectoryFullyQualifiedName', ],
				'ActiveDirectoryId' => [ 'shape' => 'DirectoryId', ],
			],
		],
		'ActiveDirectoryError'                           => [
			'type'      => 'structure',
			'required'  => [ 'ActiveDirectoryId', ],
			'members'   => [
				'ActiveDirectoryId' => [ 'shape' => 'DirectoryId', ],
				'Type'              => [ 'shape' => 'ActiveDirectoryErrorType', ],
				'Message'           => [ 'shape' => 'ErrorMessage', ],
			],
			'exception' => true,
		],
		'ActiveDirectoryErrorType'                       => [
			'type' => 'string',
			'enum' => [
				'DOMAIN_NOT_FOUND',
				'INCOMPATIBLE_DOMAIN_MODE',
				'WRONG_VPC',
				'INVALID_DOMAIN_STAGE',
			],
		],
		'ActiveDirectoryFullyQualifiedName'              => [ 'type' => 'string', ],
		'ArchivePath'                                    => [ 'type' => 'string', 'max' => 900, 'min' => 3, ],
		'AutomaticBackupRetentionDays'                   => [ 'type' => 'integer', 'max' => 35, 'min' => 0, ],
		'Backup'                                         => [
			'type'     => 'structure',
			'required' => [
				'BackupId',
				'Lifecycle',
				'Type',
				'CreationTime',
				'FileSystem',
			],
			'members'  => [
				'BackupId'             => [ 'shape' => 'BackupId', ],
				'Lifecycle'            => [ 'shape' => 'BackupLifecycle', ],
				'FailureDetails'       => [ 'shape' => 'BackupFailureDetails', ],
				'Type'                 => [ 'shape' => 'BackupType', ],
				'ProgressPercent'      => [ 'shape' => 'ProgressPercent', ],
				'CreationTime'         => [ 'shape' => 'CreationTime', ],
				'KmsKeyId'             => [ 'shape' => 'KmsKeyId', ],
				'ResourceARN'          => [ 'shape' => 'ResourceARN', ],
				'Tags'                 => [ 'shape' => 'Tags', ],
				'FileSystem'           => [ 'shape' => 'FileSystem', ],
				'DirectoryInformation' => [ 'shape' => 'ActiveDirectoryBackupAttributes', ],
			],
		],
		'BackupFailureDetails'                           => [
			'type'    => 'structure',
			'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ],
		],
		'BackupId'                                       => [
			'type'    => 'string',
			'max'     => 128,
			'min'     => 12,
			'pattern' => '^(backup-[0-9a-f]{8,})$',
		],
		'BackupIds'                                      => [
			'type'   => 'list',
			'member' => [ 'shape' => 'BackupId', ],
			'max'    => 50,
		],
		'BackupInProgress'                               => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ],
			'exception' => true,
		],
		'BackupLifecycle'                                => [
			'type' => 'string',
			'enum' => [ 'AVAILABLE', 'CREATING', 'DELETED', 'FAILED', ],
		],
		'BackupNotFound'                                 => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ],
			'exception' => true,
		],
		'BackupRestoring'                                => [
			'type'      => 'structure',
			'members'   => [
				'Message'      => [ 'shape' => 'ErrorMessage', ],
				'FileSystemId' => [ 'shape' => 'FileSystemId', ],
			],
			'exception' => true,
		],
		'BackupType'                                     => [
			'type' => 'string',
			'enum' => [ 'AUTOMATIC', 'USER_INITIATED', ],
		],
		'Backups'                                        => [
			'type'   => 'list',
			'member' => [ 'shape' => 'Backup', ],
			'max'    => 50,
		],
		'BadRequest'                                     => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ],
			'exception' => true,
		],
		'ClientRequestToken'                             => [
			'type'    => 'string',
			'max'     => 255,
			'min'     => 1,
			'pattern' => '[A-za-z0-9_.-]{0,255}$',
		],
		'CreateBackupRequest'                            => [
			'type'     => 'structure',
			'required' => [ 'FileSystemId', ],
			'members'  => [
				'FileSystemId'       => [ 'shape' => 'FileSystemId', ],
				'ClientRequestToken' => [
					'shape'            => 'ClientRequestToken',
					'idempotencyToken' => true,
				],
				'Tags'               => [ 'shape' => 'Tags', ],
			],
		],
		'CreateBackupResponse'                           => [
			'type'    => 'structure',
			'members' => [ 'Backup' => [ 'shape' => 'Backup', ], ],
		],
		'CreateFileSystemFromBackupRequest'              => [
			'type'     => 'structure',
			'required' => [ 'BackupId', 'SubnetIds', ],
			'members'  => [
				'BackupId'             => [ 'shape' => 'BackupId', ],
				'ClientRequestToken'   => [
					'shape'            => 'ClientRequestToken',
					'idempotencyToken' => true,
				],
				'SubnetIds'            => [ 'shape' => 'SubnetIds', ],
				'SecurityGroupIds'     => [ 'shape' => 'SecurityGroupIds', ],
				'Tags'                 => [ 'shape' => 'Tags', ],
				'WindowsConfiguration' => [ 'shape' => 'CreateFileSystemWindowsConfiguration', ],
			],
		],
		'CreateFileSystemFromBackupResponse'             => [
			'type'    => 'structure',
			'members' => [ 'FileSystem' => [ 'shape' => 'FileSystem', ], ],
		],
		'CreateFileSystemLustreConfiguration'            => [
			'type'    => 'structure',
			'members' => [
				'WeeklyMaintenanceStartTime' => [ 'shape' => 'WeeklyTime', ],
				'ImportPath'                 => [ 'shape' => 'ArchivePath', ],
				'ExportPath'                 => [ 'shape' => 'ArchivePath', ],
				'ImportedFileChunkSize'      => [ 'shape' => 'Megabytes', ],
			],
		],
		'CreateFileSystemRequest'                        => [
			'type'     => 'structure',
			'required' => [ 'FileSystemType', 'StorageCapacity', 'SubnetIds', ],
			'members'  => [
				'ClientRequestToken'   => [
					'shape'            => 'ClientRequestToken',
					'idempotencyToken' => true,
				],
				'FileSystemType'       => [ 'shape' => 'FileSystemType', ],
				'StorageCapacity'      => [ 'shape' => 'StorageCapacity', ],
				'SubnetIds'            => [ 'shape' => 'SubnetIds', ],
				'SecurityGroupIds'     => [ 'shape' => 'SecurityGroupIds', ],
				'Tags'                 => [ 'shape' => 'Tags', ],
				'KmsKeyId'             => [ 'shape' => 'KmsKeyId', ],
				'WindowsConfiguration' => [ 'shape' => 'CreateFileSystemWindowsConfiguration', ],
				'LustreConfiguration'  => [ 'shape' => 'CreateFileSystemLustreConfiguration', ],
			],
		],
		'CreateFileSystemResponse'                       => [
			'type'    => 'structure',
			'members' => [ 'FileSystem' => [ 'shape' => 'FileSystem', ], ],
		],
		'CreateFileSystemWindowsConfiguration'           => [
			'type'     => 'structure',
			'required' => [ 'ThroughputCapacity', ],
			'members'  => [
				'ActiveDirectoryId'                       => [ 'shape' => 'DirectoryId', ],
				'SelfManagedActiveDirectoryConfiguration' => [ 'shape' => 'SelfManagedActiveDirectoryConfiguration', ],
				'ThroughputCapacity'                      => [ 'shape' => 'MegabytesPerSecond', ],
				'WeeklyMaintenanceStartTime'              => [ 'shape' => 'WeeklyTime', ],
				'DailyAutomaticBackupStartTime'           => [ 'shape' => 'DailyTime', ],
				'AutomaticBackupRetentionDays'            => [ 'shape' => 'AutomaticBackupRetentionDays', ],
				'CopyTagsToBackups'                       => [ 'shape' => 'Flag', ],
			],
		],
		'CreationTime'                                   => [ 'type' => 'timestamp', ],
		'DNSName'                                        => [
			'type'    => 'string',
			'max'     => 275,
			'min'     => 16,
			'pattern' => '^(fsi?-[0-9a-f]{8,}\\..{4,253})$',
		],
		'DailyTime'                                      => [
			'type'    => 'string',
			'max'     => 5,
			'min'     => 5,
			'pattern' => '^([01]\\d|2[0-3]):?([0-5]\\d)$',
		],
		'DataRepositoryConfiguration'                    => [
			'type'    => 'structure',
			'members' => [
				'ImportPath'            => [ 'shape' => 'ArchivePath', ],
				'ExportPath'            => [ 'shape' => 'ArchivePath', ],
				'ImportedFileChunkSize' => [ 'shape' => 'Megabytes', ],
			],
		],
		'DeleteBackupRequest'                            => [
			'type'     => 'structure',
			'required' => [ 'BackupId', ],
			'members'  => [
				'BackupId'           => [ 'shape' => 'BackupId', ],
				'ClientRequestToken' => [
					'shape'            => 'ClientRequestToken',
					'idempotencyToken' => true,
				],
			],
		],
		'DeleteBackupResponse'                           => [
			'type'    => 'structure',
			'members' => [
				'BackupId'  => [ 'shape' => 'BackupId', ],
				'Lifecycle' => [ 'shape' => 'BackupLifecycle', ],
			],
		],
		'DeleteFileSystemRequest'                        => [
			'type'     => 'structure',
			'required' => [ 'FileSystemId', ],
			'members'  => [
				'FileSystemId'         => [ 'shape' => 'FileSystemId', ],
				'ClientRequestToken'   => [
					'shape'            => 'ClientRequestToken',
					'idempotencyToken' => true,
				],
				'WindowsConfiguration' => [ 'shape' => 'DeleteFileSystemWindowsConfiguration', ],
			],
		],
		'DeleteFileSystemResponse'                       => [
			'type'    => 'structure',
			'members' => [
				'FileSystemId'    => [ 'shape' => 'FileSystemId', ],
				'Lifecycle'       => [ 'shape' => 'FileSystemLifecycle', ],
				'WindowsResponse' => [ 'shape' => 'DeleteFileSystemWindowsResponse', ],
			],
		],
		'DeleteFileSystemWindowsConfiguration'           => [
			'type'    => 'structure',
			'members' => [
				'SkipFinalBackup' => [ 'shape' => 'Flag', ],
				'FinalBackupTags' => [ 'shape' => 'Tags', ],
			],
		],
		'DeleteFileSystemWindowsResponse'                => [
			'type'    => 'structure',
			'members' => [
				'FinalBackupId'   => [ 'shape' => 'BackupId', ],
				'FinalBackupTags' => [ 'shape' => 'Tags', ],
			],
		],
		'DescribeBackupsRequest'                         => [
			'type'    => 'structure',
			'members' => [
				'BackupIds'  => [ 'shape' => 'BackupIds', ],
				'Filters'    => [ 'shape' => 'Filters', ],
				'MaxResults' => [ 'shape' => 'MaxResults', ],
				'NextToken'  => [ 'shape' => 'NextToken', ],
			],
		],
		'DescribeBackupsResponse'                        => [
			'type'    => 'structure',
			'members' => [
				'Backups'   => [ 'shape' => 'Backups', ],
				'NextToken' => [ 'shape' => 'NextToken', ],
			],
		],
		'DescribeFileSystemsRequest'                     => [
			'type'    => 'structure',
			'members' => [
				'FileSystemIds' => [ 'shape' => 'FileSystemIds', ],
				'MaxResults'    => [ 'shape' => 'MaxResults', ],
				'NextToken'     => [ 'shape' => 'NextToken', ],
			],
		],
		'DescribeFileSystemsResponse'                    => [
			'type'    => 'structure',
			'members' => [
				'FileSystems' => [ 'shape' => 'FileSystems', ],
				'NextToken'   => [ 'shape' => 'NextToken', ],
			],
		],
		'DirectoryId'                                    => [
			'type'    => 'string',
			'max'     => 12,
			'min'     => 12,
			'pattern' => '^d-[0-9a-f]{10}$',
		],
		'DirectoryPassword'                              => [
			'type'      => 'string',
			'max'       => 256,
			'min'       => 1,
			'sensitive' => true,
		],
		'DirectoryUserName'                              => [ 'type' => 'string', 'max' => 256, 'min' => 1, ],
		'DnsIps'                                         => [
			'type'   => 'list',
			'member' => [ 'shape' => 'IpAddress', ],
			'max'    => 2,
			'min'    => 1,
		],
		'ErrorMessage'                                   => [ 'type' => 'string', 'max' => 256, 'min' => 1, ],
		'FileSystem'                                     => [
			'type'    => 'structure',
			'members' => [
				'OwnerId'              => [ 'shape' => 'AWSAccountId', ],
				'CreationTime'         => [ 'shape' => 'CreationTime', ],
				'FileSystemId'         => [ 'shape' => 'FileSystemId', ],
				'FileSystemType'       => [ 'shape' => 'FileSystemType', ],
				'Lifecycle'            => [ 'shape' => 'FileSystemLifecycle', ],
				'FailureDetails'       => [ 'shape' => 'FileSystemFailureDetails', ],
				'StorageCapacity'      => [ 'shape' => 'StorageCapacity', ],
				'VpcId'                => [ 'shape' => 'VpcId', ],
				'SubnetIds'            => [ 'shape' => 'SubnetIds', ],
				'NetworkInterfaceIds'  => [ 'shape' => 'NetworkInterfaceIds', ],
				'DNSName'              => [ 'shape' => 'DNSName', ],
				'KmsKeyId'             => [ 'shape' => 'KmsKeyId', ],
				'ResourceARN'          => [ 'shape' => 'ResourceARN', ],
				'Tags'                 => [ 'shape' => 'Tags', ],
				'WindowsConfiguration' => [ 'shape' => 'WindowsFileSystemConfiguration', ],
				'LustreConfiguration'  => [ 'shape' => 'LustreFileSystemConfiguration', ],
			],
		],
		'FileSystemAdministratorsGroupName'              => [ 'type' => 'string', 'max' => 256, 'min' => 1, ],
		'FileSystemFailureDetails'                       => [
			'type'    => 'structure',
			'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ],
		],
		'FileSystemId'                                   => [
			'type'    => 'string',
			'max'     => 21,
			'min'     => 11,
			'pattern' => '^(fs-[0-9a-f]{8,})$',
		],
		'FileSystemIds'                                  => [
			'type'   => 'list',
			'member' => [ 'shape' => 'FileSystemId', ],
			'max'    => 50,
		],
		'FileSystemLifecycle'                            => [
			'type' => 'string',
			'enum' => [
				'AVAILABLE',
				'CREATING',
				'FAILED',
				'DELETING',
				'MISCONFIGURED',
				'UPDATING',
			],
		],
		'FileSystemMaintenanceOperation'                 => [
			'type' => 'string',
			'enum' => [ 'PATCHING', 'BACKING_UP', ],
		],
		'FileSystemMaintenanceOperations'                => [
			'type'   => 'list',
			'member' => [ 'shape' => 'FileSystemMaintenanceOperation', ],
			'max'    => 20,
		],
		'FileSystemNotFound'                             => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ],
			'exception' => true,
		],
		'FileSystemType'                                 => [ 'type' => 'string', 'enum' => [ 'WINDOWS', 'LUSTRE', ], ],
		'FileSystems'                                    => [
			'type'   => 'list',
			'member' => [ 'shape' => 'FileSystem', ],
			'max'    => 50,
		],
		'Filter'                                         => [
			'type'    => 'structure',
			'members' => [
				'Name'   => [ 'shape' => 'FilterName', ],
				'Values' => [ 'shape' => 'FilterValues', ],
			],
		],
		'FilterName'                                     => [
			'type' => 'string',
			'enum' => [ 'file-system-id', 'backup-type', ],
		],
		'FilterValue'                                    => [
			'type'    => 'string',
			'max'     => 128,
			'min'     => 1,
			'pattern' => '^[0-9a-zA-Z\\*\\.\\\\/\\?\\-\\_]*$',
		],
		'FilterValues'                                   => [
			'type'   => 'list',
			'member' => [ 'shape' => 'FilterValue', ],
			'max'    => 20,
		],
		'Filters'                                        => [
			'type'   => 'list',
			'member' => [ 'shape' => 'Filter', ],
			'max'    => 10,
		],
		'Flag'                                           => [ 'type' => 'boolean', ],
		'IncompatibleParameterError'                     => [
			'type'      => 'structure',
			'required'  => [ 'Parameter', ],
			'members'   => [
				'Parameter' => [ 'shape' => 'Parameter', ],
				'Message'   => [ 'shape' => 'ErrorMessage', ],
			],
			'exception' => true,
		],
		'InternalServerError'                            => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ],
			'exception' => true,
			'fault'     => true,
		],
		'InvalidExportPath'                              => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ],
			'exception' => true,
		],
		'InvalidImportPath'                              => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ],
			'exception' => true,
		],
		'InvalidNetworkSettings'                         => [
			'type'      => 'structure',
			'members'   => [
				'Message'                => [ 'shape' => 'ErrorMessage', ],
				'InvalidSubnetId'        => [ 'shape' => 'SubnetId', ],
				'InvalidSecurityGroupId' => [ 'shape' => 'SecurityGroupId', ],
			],
			'exception' => true,
		],
		'IpAddress'                                      => [
			'type'    => 'string',
			'pattern' => '^(([0-9]|[1-9][0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])\\.){3}([0-9]|[1-9][0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])$',
		],
		'KmsKeyId'                                       => [
			'type'    => 'string',
			'max'     => 2048,
			'min'     => 1,
			'pattern' => '^[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-4[a-fA-F0-9]{3}-[89aAbB][a-fA-F0-9]{3}-[a-fA-F0-9]{12}|arn:aws[a-z-]{0,7}:kms:[a-z]{2}-[a-z-]{4,}-\\d+:\\d{12}:(key|alias)\\/([a-fA-F0-9]{8}-[a-fA-F0-9]{4}-4[a-fA-F0-9]{3}-[89aAbB][a-fA-F0-9]{3}-[a-fA-F0-9]{12}|[a-zA-Z0-9:\\/_-]+)|alias\\/[a-zA-Z0-9:\\/_-]+$',
		],
		'ListTagsForResourceRequest'                     => [
			'type'     => 'structure',
			'required' => [ 'ResourceARN', ],
			'members'  => [
				'ResourceARN' => [ 'shape' => 'ResourceARN', ],
				'MaxResults'  => [ 'shape' => 'MaxResults', ],
				'NextToken'   => [ 'shape' => 'NextToken', ],
			],
		],
		'ListTagsForResourceResponse'                    => [
			'type'    => 'structure',
			'members' => [
				'Tags'      => [ 'shape' => 'Tags', ],
				'NextToken' => [ 'shape' => 'NextToken', ],
			],
		],
		'LustreFileSystemConfiguration'                  => [
			'type'    => 'structure',
			'members' => [
				'WeeklyMaintenanceStartTime'  => [ 'shape' => 'WeeklyTime', ],
				'DataRepositoryConfiguration' => [ 'shape' => 'DataRepositoryConfiguration', ],
			],
		],
		'MaxResults'                                     => [ 'type' => 'integer', 'min' => 1, ],
		'Megabytes'                                      => [ 'type' => 'integer', 'max' => 512000, 'min' => 1, ],
		'MegabytesPerSecond'                             => [ 'type' => 'integer', 'max' => 2048, 'min' => 8, ],
		'MissingFileSystemConfiguration'                 => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ],
			'exception' => true,
		],
		'NetworkInterfaceId'                             => [
			'type'    => 'string',
			'max'     => 21,
			'min'     => 12,
			'pattern' => '^(eni-[0-9a-f]{8,})$',
		],
		'NetworkInterfaceIds'                            => [
			'type'   => 'list',
			'member' => [ 'shape' => 'NetworkInterfaceId', ],
			'max'    => 50,
		],
		'NextToken'                                      => [
			'type'    => 'string',
			'max'     => 255,
			'min'     => 1,
			'pattern' => '^(?:[A-Za-z0-9+\\/]{4})*(?:[A-Za-z0-9+\\/]{2}==|[A-Za-z0-9+\\/]{3}=)?$',
		],
		'NotServiceResourceError'                        => [
			'type'      => 'structure',
			'required'  => [ 'ResourceARN', ],
			'members'   => [
				'ResourceARN' => [ 'shape' => 'ResourceARN', ],
				'Message'     => [ 'shape' => 'ErrorMessage', ],
			],
			'exception' => true,
		],
		'OrganizationalUnitDistinguishedName'            => [ 'type' => 'string', 'max' => 2000, 'min' => 1, ],
		'Parameter'                                      => [ 'type' => 'string', 'min' => 1, ],
		'ProgressPercent'                                => [ 'type' => 'integer', 'max' => 100, 'min' => 0, ],
		'ResourceARN'                                    => [
			'type'    => 'string',
			'max'     => 512,
			'min'     => 8,
			'pattern' => '^arn:aws[a-z-]{0,7}:[A-Za-z0-9][A-za-z0-9_/.-]{0,62}:[A-za-z0-9_/.-]{0,63}:[A-za-z0-9_/.-]{0,63}:[A-Za-z0-9][A-za-z0-9_/.-]{0,127}$',
		],
		'ResourceDoesNotSupportTagging'                  => [
			'type'      => 'structure',
			'required'  => [ 'ResourceARN', ],
			'members'   => [
				'ResourceARN' => [ 'shape' => 'ResourceARN', ],
				'Message'     => [ 'shape' => 'ErrorMessage', ],
			],
			'exception' => true,
		],
		'ResourceNotFound'                               => [
			'type'      => 'structure',
			'required'  => [ 'ResourceARN', ],
			'members'   => [
				'ResourceARN' => [ 'shape' => 'ResourceARN', ],
				'Message'     => [ 'shape' => 'ErrorMessage', ],
			],
			'exception' => true,
		],
		'SecurityGroupId'                                => [
			'type'    => 'string',
			'max'     => 20,
			'min'     => 11,
			'pattern' => '^(sg-[0-9a-f]{8,})$',
		],
		'SecurityGroupIds'                               => [
			'type'   => 'list',
			'member' => [ 'shape' => 'SecurityGroupId', ],
			'max'    => 50,
		],
		'SelfManagedActiveDirectoryAttributes'           => [
			'type'    => 'structure',
			'members' => [
				'DomainName'                          => [ 'shape' => 'ActiveDirectoryFullyQualifiedName', ],
				'OrganizationalUnitDistinguishedName' => [ 'shape' => 'OrganizationalUnitDistinguishedName', ],
				'FileSystemAdministratorsGroup'       => [ 'shape' => 'FileSystemAdministratorsGroupName', ],
				'UserName'                            => [ 'shape' => 'DirectoryUserName', ],
				'DnsIps'                              => [ 'shape' => 'DnsIps', ],
			],
		],
		'SelfManagedActiveDirectoryConfiguration'        => [
			'type'     => 'structure',
			'required' => [
				'DomainName',
				'UserName',
				'Password',
				'DnsIps',
			],
			'members'  => [
				'DomainName'                          => [ 'shape' => 'ActiveDirectoryFullyQualifiedName', ],
				'OrganizationalUnitDistinguishedName' => [ 'shape' => 'OrganizationalUnitDistinguishedName', ],
				'FileSystemAdministratorsGroup'       => [ 'shape' => 'FileSystemAdministratorsGroupName', ],
				'UserName'                            => [ 'shape' => 'DirectoryUserName', ],
				'Password'                            => [ 'shape' => 'DirectoryPassword', ],
				'DnsIps'                              => [ 'shape' => 'DnsIps', ],
			],
		],
		'SelfManagedActiveDirectoryConfigurationUpdates' => [
			'type'    => 'structure',
			'members' => [
				'UserName' => [ 'shape' => 'DirectoryUserName', ],
				'Password' => [ 'shape' => 'DirectoryPassword', ],
				'DnsIps'   => [ 'shape' => 'DnsIps', ],
			],
		],
		'ServiceLimit'                                   => [
			'type' => 'string',
			'enum' => [
				'FILE_SYSTEM_COUNT',
				'TOTAL_THROUGHPUT_CAPACITY',
				'TOTAL_STORAGE',
				'TOTAL_USER_INITIATED_BACKUPS',
			],
		],
		'ServiceLimitExceeded'                           => [
			'type'      => 'structure',
			'required'  => [ 'Limit', ],
			'members'   => [
				'Limit'   => [ 'shape' => 'ServiceLimit', ],
				'Message' => [ 'shape' => 'ErrorMessage', ],
			],
			'exception' => true,
		],
		'StorageCapacity'                                => [ 'type' => 'integer', 'min' => 1, ],
		'SubnetId'                                       => [
			'type'    => 'string',
			'max'     => 24,
			'min'     => 15,
			'pattern' => '^(subnet-[0-9a-f]{8,})$',
		],
		'SubnetIds'                                      => [
			'type'   => 'list',
			'member' => [ 'shape' => 'SubnetId', ],
			'max'    => 50,
		],
		'Tag'                                            => [
			'type'    => 'structure',
			'members' => [
				'Key'   => [ 'shape' => 'TagKey', ],
				'Value' => [ 'shape' => 'TagValue', ],
			],
		],
		'TagKey'                                         => [ 'type' => 'string', 'max' => 128, 'min' => 1, ],
		'TagKeys'                                        => [
			'type'   => 'list',
			'member' => [ 'shape' => 'TagKey', ],
			'max'    => 50,
			'min'    => 1,
		],
		'TagResourceRequest'                             => [
			'type'     => 'structure',
			'required' => [ 'ResourceARN', 'Tags', ],
			'members'  => [
				'ResourceARN' => [ 'shape' => 'ResourceARN', ],
				'Tags'        => [ 'shape' => 'Tags', ],
			],
		],
		'TagResourceResponse'                            => [ 'type' => 'structure', 'members' => [], ],
		'TagValue'                                       => [ 'type' => 'string', 'max' => 256, 'min' => 0, ],
		'Tags'                                           => [
			'type'   => 'list',
			'member' => [ 'shape' => 'Tag', ],
			'max'    => 50,
			'min'    => 1,
		],
		'UnsupportedOperation'                           => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ],
			'exception' => true,
		],
		'UntagResourceRequest'                           => [
			'type'     => 'structure',
			'required' => [ 'ResourceARN', 'TagKeys', ],
			'members'  => [
				'ResourceARN' => [ 'shape' => 'ResourceARN', ],
				'TagKeys'     => [ 'shape' => 'TagKeys', ],
			],
		],
		'UntagResourceResponse'                          => [ 'type' => 'structure', 'members' => [], ],
		'UpdateFileSystemLustreConfiguration'            => [
			'type'    => 'structure',
			'members' => [ 'WeeklyMaintenanceStartTime' => [ 'shape' => 'WeeklyTime', ], ],
		],
		'UpdateFileSystemRequest'                        => [
			'type'     => 'structure',
			'required' => [ 'FileSystemId', ],
			'members'  => [
				'FileSystemId'         => [ 'shape' => 'FileSystemId', ],
				'ClientRequestToken'   => [
					'shape'            => 'ClientRequestToken',
					'idempotencyToken' => true,
				],
				'WindowsConfiguration' => [ 'shape' => 'UpdateFileSystemWindowsConfiguration', ],
				'LustreConfiguration'  => [ 'shape' => 'UpdateFileSystemLustreConfiguration', ],
			],
		],
		'UpdateFileSystemResponse'                       => [
			'type'    => 'structure',
			'members' => [ 'FileSystem' => [ 'shape' => 'FileSystem', ], ],
		],
		'UpdateFileSystemWindowsConfiguration'           => [
			'type'    => 'structure',
			'members' => [
				'WeeklyMaintenanceStartTime'              => [ 'shape' => 'WeeklyTime', ],
				'DailyAutomaticBackupStartTime'           => [ 'shape' => 'DailyTime', ],
				'AutomaticBackupRetentionDays'            => [ 'shape' => 'AutomaticBackupRetentionDays', ],
				'SelfManagedActiveDirectoryConfiguration' => [ 'shape' => 'SelfManagedActiveDirectoryConfigurationUpdates', ],
			],
		],
		'VpcId'                                          => [
			'type'    => 'string',
			'max'     => 21,
			'min'     => 12,
			'pattern' => '^(vpc-[0-9a-f]{8,})$',
		],
		'WeeklyTime'                                     => [
			'type'    => 'string',
			'max'     => 7,
			'min'     => 7,
			'pattern' => '^[1-7]:([01]\\d|2[0-3]):?([0-5]\\d)$',
		],
		'WindowsFileSystemConfiguration'                 => [
			'type'    => 'structure',
			'members' => [
				'ActiveDirectoryId'                       => [ 'shape' => 'DirectoryId', ],
				'SelfManagedActiveDirectoryConfiguration' => [ 'shape' => 'SelfManagedActiveDirectoryAttributes', ],
				'ThroughputCapacity'                      => [ 'shape' => 'MegabytesPerSecond', ],
				'MaintenanceOperationsInProgress'         => [ 'shape' => 'FileSystemMaintenanceOperations', ],
				'WeeklyMaintenanceStartTime'              => [ 'shape' => 'WeeklyTime', ],
				'DailyAutomaticBackupStartTime'           => [ 'shape' => 'DailyTime', ],
				'AutomaticBackupRetentionDays'            => [ 'shape' => 'AutomaticBackupRetentionDays', ],
				'CopyTagsToBackups'                       => [ 'shape' => 'Flag', ],
			],
		],
	],
];
