<?php

return [
    'interfaces' => [
        'google.cloud.dialogflow.v2beta1.Intents' => [
            'BatchDeleteIntents' => [
                'method' => 'post',
                'uriTemplate' => '/v2beta1/{parent=projects/*/agent}/intents:batchDelete',
                'body' => '*',
                'additionalBindings' => [
                    [
                        'method' => 'post',
                        'uriTemplate' => '/v2beta1/{parent=projects/*/locations/*/agent}/intents:batchDelete',
                        'body' => '*',
                    ],
                ],
                'placeholders' => [
                    'parent' => [
                        'getters' => [
                            'getParent',
                        ],
                    ],
                ],
            ],
            'BatchUpdateIntents' => [
                'method' => 'post',
                'uriTemplate' => '/v2beta1/{parent=projects/*/agent}/intents:batchUpdate',
                'body' => '*',
                'additionalBindings' => [
                    [
                        'method' => 'post',
                        'uriTemplate' => '/v2beta1/{parent=projects/*/locations/*/agent}/intents:batchUpdate',
                        'body' => '*',
                    ],
                ],
                'placeholders' => [
                    'parent' => [
                        'getters' => [
                            'getParent',
                        ],
                    ],
                ],
            ],
            'CreateIntent' => [
                'method' => 'post',
                'uriTemplate' => '/v2beta1/{parent=projects/*/agent}/intents',
                'body' => 'intent',
                'additionalBindings' => [
                    [
                        'method' => 'post',
                        'uriTemplate' => '/v2beta1/{parent=projects/*/locations/*/agent}/intents',
                        'body' => 'intent',
                    ],
                ],
                'placeholders' => [
                    'parent' => [
                        'getters' => [
                            'getParent',
                        ],
                    ],
                ],
            ],
            'DeleteIntent' => [
                'method' => 'delete',
                'uriTemplate' => '/v2beta1/{name=projects/*/agent/intents/*}',
                'additionalBindings' => [
                    [
                        'method' => 'delete',
                        'uriTemplate' => '/v2beta1/{name=projects/*/locations/*/agent/intents/*}',
                    ],
                ],
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'GetIntent' => [
                'method' => 'get',
                'uriTemplate' => '/v2beta1/{name=projects/*/agent/intents/*}',
                'additionalBindings' => [
                    [
                        'method' => 'get',
                        'uriTemplate' => '/v2beta1/{name=projects/*/locations/*/agent/intents/*}',
                    ],
                ],
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'ListIntents' => [
                'method' => 'get',
                'uriTemplate' => '/v2beta1/{parent=projects/*/agent}/intents',
                'additionalBindings' => [
                    [
                        'method' => 'get',
                        'uriTemplate' => '/v2beta1/{parent=projects/*/locations/*/agent}/intents',
                    ],
                    [
                        'method' => 'get',
                        'uriTemplate' => '/v2beta1/{parent=projects/*/agent/environments/*}/intents',
                    ],
                    [
                        'method' => 'get',
                        'uriTemplate' => '/v2beta1/{parent=projects/*/locations/*/agent/environments/*}/intents',
                    ],
                ],
                'placeholders' => [
                    'parent' => [
                        'getters' => [
                            'getParent',
                        ],
                    ],
                ],
            ],
            'UpdateIntent' => [
                'method' => 'patch',
                'uriTemplate' => '/v2beta1/{intent.name=projects/*/agent/intents/*}',
                'body' => 'intent',
                'additionalBindings' => [
                    [
                        'method' => 'patch',
                        'uriTemplate' => '/v2beta1/{intent.name=projects/*/locations/*/agent/intents/*}',
                        'body' => 'intent',
                    ],
                ],
                'placeholders' => [
                    'intent.name' => [
                        'getters' => [
                            'getIntent',
                            'getName',
                        ],
                    ],
                ],
            ],
        ],
        'google.longrunning.Operations' => [
            'CancelOperation' => [
                'method' => 'post',
                'uriTemplate' => '/v2beta1/{name=projects/*/operations/*}:cancel',
                'additionalBindings' => [
                    [
                        'method' => 'post',
                        'uriTemplate' => '/v2beta1/{name=projects/*/locations/*/operations/*}:cancel',
                    ],
                ],
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'GetOperation' => [
                'method' => 'get',
                'uriTemplate' => '/v2beta1/{name=projects/*/operations/*}',
                'additionalBindings' => [
                    [
                        'method' => 'get',
                        'uriTemplate' => '/v2beta1/{name=projects/*/locations/*/operations/*}',
                    ],
                ],
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'ListOperations' => [
                'method' => 'get',
                'uriTemplate' => '/v2beta1/{name=projects/*}/operations',
                'additionalBindings' => [
                    [
                        'method' => 'get',
                        'uriTemplate' => '/v2beta1/{name=projects/*/locations/*}/operations',
                    ],
                ],
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
        ],
    ],
];
