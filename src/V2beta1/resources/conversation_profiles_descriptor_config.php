<?php

return [
    'interfaces' => [
        'google.cloud.dialogflow.v2beta1.ConversationProfiles' => [
            'ListConversationProfiles' => [
                'pageStreaming' => [
                    'requestPageTokenGetMethod' => 'getPageToken',
                    'requestPageTokenSetMethod' => 'setPageToken',
                    'requestPageSizeGetMethod' => 'getPageSize',
                    'requestPageSizeSetMethod' => 'setPageSize',
                    'responsePageTokenGetMethod' => 'getNextPageToken',
                    'resourcesGetMethod' => 'getConversationProfiles',
                ],
            ],
        ],
    ],
];
