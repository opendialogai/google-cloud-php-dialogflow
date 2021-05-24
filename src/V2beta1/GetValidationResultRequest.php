<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2beta1/agent.proto

namespace Google\Cloud\Dialogflow\V2beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [Agents.GetValidationResult][google.cloud.dialogflow.v2beta1.Agents.GetValidationResult].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2beta1.GetValidationResultRequest</code>
 */
class GetValidationResultRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The project that the agent is associated with.
     * Format: `projects/<Project ID>` or
     *         `projects/<Project ID>/locations/<Location ID>`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Optional. The language for which you want a validation result. If not
     * specified, the agent's default language is used. [Many
     * languages](https://cloud.google.com/dialogflow/docs/reference/language)
     * are supported. Note: languages must be enabled in the agent before they can
     * be used.
     *
     * Generated from protobuf field <code>string language_code = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $language_code = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The project that the agent is associated with.
     *           Format: `projects/<Project ID>` or
     *                   `projects/<Project ID>/locations/<Location ID>`.
     *     @type string $language_code
     *           Optional. The language for which you want a validation result. If not
     *           specified, the agent's default language is used. [Many
     *           languages](https://cloud.google.com/dialogflow/docs/reference/language)
     *           are supported. Note: languages must be enabled in the agent before they can
     *           be used.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2Beta1\Agent::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The project that the agent is associated with.
     * Format: `projects/<Project ID>` or
     *         `projects/<Project ID>/locations/<Location ID>`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The project that the agent is associated with.
     * Format: `projects/<Project ID>` or
     *         `projects/<Project ID>/locations/<Location ID>`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Optional. The language for which you want a validation result. If not
     * specified, the agent's default language is used. [Many
     * languages](https://cloud.google.com/dialogflow/docs/reference/language)
     * are supported. Note: languages must be enabled in the agent before they can
     * be used.
     *
     * Generated from protobuf field <code>string language_code = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->language_code;
    }

    /**
     * Optional. The language for which you want a validation result. If not
     * specified, the agent's default language is used. [Many
     * languages](https://cloud.google.com/dialogflow/docs/reference/language)
     * are supported. Note: languages must be enabled in the agent before they can
     * be used.
     *
     * Generated from protobuf field <code>string language_code = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->language_code = $var;

        return $this;
    }

}

