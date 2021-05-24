<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2beta1/participant.proto

namespace Google\Cloud\Dialogflow\V2beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The message in the response that indicates the parameters of DTMF.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2beta1.DtmfParameters</code>
 */
class DtmfParameters extends \Google\Protobuf\Internal\Message
{
    /**
     * Indicates whether DTMF input can be handled in the next request.
     *
     * Generated from protobuf field <code>bool accepts_dtmf_input = 1;</code>
     */
    protected $accepts_dtmf_input = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $accepts_dtmf_input
     *           Indicates whether DTMF input can be handled in the next request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2Beta1\Participant::initOnce();
        parent::__construct($data);
    }

    /**
     * Indicates whether DTMF input can be handled in the next request.
     *
     * Generated from protobuf field <code>bool accepts_dtmf_input = 1;</code>
     * @return bool
     */
    public function getAcceptsDtmfInput()
    {
        return $this->accepts_dtmf_input;
    }

    /**
     * Indicates whether DTMF input can be handled in the next request.
     *
     * Generated from protobuf field <code>bool accepts_dtmf_input = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setAcceptsDtmfInput($var)
    {
        GPBUtil::checkBool($var);
        $this->accepts_dtmf_input = $var;

        return $this;
    }

}
