<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2beta1/environment.proto

namespace Google\Cloud\Dialogflow\V2beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [Environments.CreateEnvironment][google.cloud.dialogflow.v2beta1.Environments.CreateEnvironment].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2beta1.CreateEnvironmentRequest</code>
 */
class CreateEnvironmentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The agent to create an environment for.
     * Supported formats:
     * - `projects/<Project Number / ID>/agent`
     * - `projects/<Project Number / ID>/locations/<Location ID>/agent`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The environment to create.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.Environment environment = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $environment = null;
    /**
     * Required. The unique id of the new environment.
     *
     * Generated from protobuf field <code>string environment_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $environment_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The agent to create an environment for.
     *           Supported formats:
     *           - `projects/<Project Number / ID>/agent`
     *           - `projects/<Project Number / ID>/locations/<Location ID>/agent`
     *     @type \Google\Cloud\Dialogflow\V2beta1\Environment $environment
     *           Required. The environment to create.
     *     @type string $environment_id
     *           Required. The unique id of the new environment.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2Beta1\Environment::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The agent to create an environment for.
     * Supported formats:
     * - `projects/<Project Number / ID>/agent`
     * - `projects/<Project Number / ID>/locations/<Location ID>/agent`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The agent to create an environment for.
     * Supported formats:
     * - `projects/<Project Number / ID>/agent`
     * - `projects/<Project Number / ID>/locations/<Location ID>/agent`
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
     * Required. The environment to create.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.Environment environment = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Dialogflow\V2beta1\Environment|null
     */
    public function getEnvironment()
    {
        return isset($this->environment) ? $this->environment : null;
    }

    public function hasEnvironment()
    {
        return isset($this->environment);
    }

    public function clearEnvironment()
    {
        unset($this->environment);
    }

    /**
     * Required. The environment to create.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.Environment environment = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dialogflow\V2beta1\Environment $var
     * @return $this
     */
    public function setEnvironment($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2beta1\Environment::class);
        $this->environment = $var;

        return $this;
    }

    /**
     * Required. The unique id of the new environment.
     *
     * Generated from protobuf field <code>string environment_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getEnvironmentId()
    {
        return $this->environment_id;
    }

    /**
     * Required. The unique id of the new environment.
     *
     * Generated from protobuf field <code>string environment_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setEnvironmentId($var)
    {
        GPBUtil::checkString($var, True);
        $this->environment_id = $var;

        return $this;
    }

}

