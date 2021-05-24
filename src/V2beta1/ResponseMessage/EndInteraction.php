<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2beta1/participant.proto

namespace Google\Cloud\Dialogflow\V2beta1\ResponseMessage;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Indicates that interaction with the Dialogflow agent has ended.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2beta1.ResponseMessage.EndInteraction</code>
 */
class EndInteraction extends \Google\Protobuf\Internal\Message
{

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2Beta1\Participant::initOnce();
        parent::__construct($data);
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(EndInteraction::class, \Google\Cloud\Dialogflow\V2beta1\ResponseMessage_EndInteraction::class);
