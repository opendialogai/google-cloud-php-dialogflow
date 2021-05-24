<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2beta1/environment.proto

namespace Google\Cloud\Dialogflow\V2beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [Environments.GetEnvironmentHistory][google.cloud.dialogflow.v2beta1.Environments.GetEnvironmentHistory].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2beta1.GetEnvironmentHistoryRequest</code>
 */
class GetEnvironmentHistoryRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the environment to retrieve history for.
     * Supported formats:
     * - `projects/<Project Number / ID>/agent/environments/<Environment ID>`
     * - `projects/<Project Number / ID>/locations/<Location
     *   ID>/agent/environments/<Environment ID>`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Optional. The maximum number of items to return in a single page. By default 100 and
     * at most 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_size = 0;
    /**
     * Optional. The next_page_token value returned from a previous list request.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The name of the environment to retrieve history for.
     *           Supported formats:
     *           - `projects/<Project Number / ID>/agent/environments/<Environment ID>`
     *           - `projects/<Project Number / ID>/locations/<Location
     *             ID>/agent/environments/<Environment ID>`
     *     @type int $page_size
     *           Optional. The maximum number of items to return in a single page. By default 100 and
     *           at most 1000.
     *     @type string $page_token
     *           Optional. The next_page_token value returned from a previous list request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2Beta1\Environment::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the environment to retrieve history for.
     * Supported formats:
     * - `projects/<Project Number / ID>/agent/environments/<Environment ID>`
     * - `projects/<Project Number / ID>/locations/<Location
     *   ID>/agent/environments/<Environment ID>`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The name of the environment to retrieve history for.
     * Supported formats:
     * - `projects/<Project Number / ID>/agent/environments/<Environment ID>`
     * - `projects/<Project Number / ID>/locations/<Location
     *   ID>/agent/environments/<Environment ID>`
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
     * Optional. The maximum number of items to return in a single page. By default 100 and
     * at most 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. The maximum number of items to return in a single page. By default 100 and
     * at most 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * Optional. The next_page_token value returned from a previous list request.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. The next_page_token value returned from a previous list request.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}

