<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2beta1/validation_result.proto

namespace Google\Cloud\Dialogflow\V2beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents the output of agent validation.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2beta1.ValidationResult</code>
 */
class ValidationResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Contains all validation errors.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2beta1.ValidationError validation_errors = 1;</code>
     */
    private $validation_errors;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dialogflow\V2beta1\ValidationError[]|\Google\Protobuf\Internal\RepeatedField $validation_errors
     *           Contains all validation errors.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2Beta1\ValidationResult::initOnce();
        parent::__construct($data);
    }

    /**
     * Contains all validation errors.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2beta1.ValidationError validation_errors = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getValidationErrors()
    {
        return $this->validation_errors;
    }

    /**
     * Contains all validation errors.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2beta1.ValidationError validation_errors = 1;</code>
     * @param \Google\Cloud\Dialogflow\V2beta1\ValidationError[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setValidationErrors($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dialogflow\V2beta1\ValidationError::class);
        $this->validation_errors = $arr;

        return $this;
    }

}
