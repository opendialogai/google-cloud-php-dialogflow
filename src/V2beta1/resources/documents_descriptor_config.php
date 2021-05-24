<?php

return [
    'interfaces' => [
        'google.cloud.dialogflow.v2beta1.Documents' => [
            'CreateDocument' => [
                'longRunning' => [
                    'operationReturnType' => '\Google\Cloud\Dialogflow\V2beta1\Document',
                    'metadataReturnType' => '\Google\Cloud\Dialogflow\V2beta1\KnowledgeOperationMetadata',
                    'initialPollDelayMillis' => '500',
                    'pollDelayMultiplier' => '1.5',
                    'maxPollDelayMillis' => '5000',
                    'totalPollTimeoutMillis' => '300000',
                ],
            ],
            'DeleteDocument' => [
                'longRunning' => [
                    'operationReturnType' => '\Google\Protobuf\GPBEmpty',
                    'metadataReturnType' => '\Google\Cloud\Dialogflow\V2beta1\KnowledgeOperationMetadata',
                    'initialPollDelayMillis' => '500',
                    'pollDelayMultiplier' => '1.5',
                    'maxPollDelayMillis' => '5000',
                    'totalPollTimeoutMillis' => '300000',
                ],
            ],
            'ImportDocuments' => [
                'longRunning' => [
                    'operationReturnType' => '\Google\Cloud\Dialogflow\V2beta1\ImportDocumentsResponse',
                    'metadataReturnType' => '\Google\Cloud\Dialogflow\V2beta1\KnowledgeOperationMetadata',
                    'initialPollDelayMillis' => '500',
                    'pollDelayMultiplier' => '1.5',
                    'maxPollDelayMillis' => '5000',
                    'totalPollTimeoutMillis' => '300000',
                ],
            ],
            'ReloadDocument' => [
                'longRunning' => [
                    'operationReturnType' => '\Google\Cloud\Dialogflow\V2beta1\Document',
                    'metadataReturnType' => '\Google\Cloud\Dialogflow\V2beta1\KnowledgeOperationMetadata',
                    'initialPollDelayMillis' => '500',
                    'pollDelayMultiplier' => '1.5',
                    'maxPollDelayMillis' => '5000',
                    'totalPollTimeoutMillis' => '300000',
                ],
            ],
            'UpdateDocument' => [
                'longRunning' => [
                    'operationReturnType' => '\Google\Cloud\Dialogflow\V2beta1\Document',
                    'metadataReturnType' => '\Google\Cloud\Dialogflow\V2beta1\KnowledgeOperationMetadata',
                    'initialPollDelayMillis' => '500',
                    'pollDelayMultiplier' => '1.5',
                    'maxPollDelayMillis' => '5000',
                    'totalPollTimeoutMillis' => '300000',
                ],
            ],
            'ListDocuments' => [
                'pageStreaming' => [
                    'requestPageTokenGetMethod' => 'getPageToken',
                    'requestPageTokenSetMethod' => 'setPageToken',
                    'requestPageSizeGetMethod' => 'getPageSize',
                    'requestPageSizeSetMethod' => 'setPageSize',
                    'responsePageTokenGetMethod' => 'getNextPageToken',
                    'resourcesGetMethod' => 'getDocuments',
                ],
            ],
        ],
    ],
];
