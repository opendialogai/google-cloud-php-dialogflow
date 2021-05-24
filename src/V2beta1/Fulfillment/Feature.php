<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2beta1/fulfillment.proto

namespace Google\Cloud\Dialogflow\V2beta1\Fulfillment;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Whether fulfillment is enabled for the specific feature.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2beta1.Fulfillment.Feature</code>
 */
class Feature extends \Google\Protobuf\Internal\Message
{
    /**
     * The type of the feature that enabled for fulfillment.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.Fulfillment.Feature.Type type = 1;</code>
     */
    protected $type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $type
     *           The type of the feature that enabled for fulfillment.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2Beta1\Fulfillment::initOnce();
        parent::__construct($data);
    }

    /**
     * The type of the feature that enabled for fulfillment.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.Fulfillment.Feature.Type type = 1;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type of the feature that enabled for fulfillment.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.Fulfillment.Feature.Type type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dialogflow\V2beta1\Fulfillment\Feature\Type::class);
        $this->type = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Feature::class, \Google\Cloud\Dialogflow\V2beta1\Fulfillment_Feature::class);

