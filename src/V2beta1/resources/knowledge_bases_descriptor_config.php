<?php

return [
    'interfaces' => [
        'google.cloud.dialogflow.v2beta1.KnowledgeBases' => [
            'ListKnowledgeBases' => [
                'pageStreaming' => [
                    'requestPageTokenGetMethod' => 'getPageToken',
                    'requestPageTokenSetMethod' => 'setPageToken',
                    'requestPageSizeGetMethod' => 'getPageSize',
                    'requestPageSizeSetMethod' => 'setPageSize',
                    'responsePageTokenGetMethod' => 'getNextPageToken',
                    'resourcesGetMethod' => 'getKnowledgeBases',
                ],
            ],
        ],
    ],
];
