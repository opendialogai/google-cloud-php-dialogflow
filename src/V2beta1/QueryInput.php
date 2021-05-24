<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2beta1/session.proto

namespace Google\Cloud\Dialogflow\V2beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents the query input. It can contain either:
 * 1.  An audio config which
 *     instructs the speech recognizer how to process the speech audio.
 * 2.  A conversational query in the form of text.
 * 3.  An event that specifies which intent to trigger.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2beta1.QueryInput</code>
 */
class QueryInput extends \Google\Protobuf\Internal\Message
{
    protected $input;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dialogflow\V2beta1\InputAudioConfig $audio_config
     *           Instructs the speech recognizer how to process the speech audio.
     *     @type \Google\Cloud\Dialogflow\V2beta1\TextInput $text
     *           The natural language text to be processed.
     *     @type \Google\Cloud\Dialogflow\V2beta1\EventInput $event
     *           The event to be processed.
     *     @type \Google\Cloud\Dialogflow\V2beta1\TelephonyDtmfEvents $dtmf
     *           The DTMF digits used to invoke intent and fill in parameter value.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2Beta1\Session::initOnce();
        parent::__construct($data);
    }

    /**
     * Instructs the speech recognizer how to process the speech audio.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.InputAudioConfig audio_config = 1;</code>
     * @return \Google\Cloud\Dialogflow\V2beta1\InputAudioConfig|null
     */
    public function getAudioConfig()
    {
        return $this->readOneof(1);
    }

    public function hasAudioConfig()
    {
        return $this->hasOneof(1);
    }

    /**
     * Instructs the speech recognizer how to process the speech audio.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.InputAudioConfig audio_config = 1;</code>
     * @param \Google\Cloud\Dialogflow\V2beta1\InputAudioConfig $var
     * @return $this
     */
    public function setAudioConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2beta1\InputAudioConfig::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * The natural language text to be processed.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.TextInput text = 2;</code>
     * @return \Google\Cloud\Dialogflow\V2beta1\TextInput|null
     */
    public function getText()
    {
        return $this->readOneof(2);
    }

    public function hasText()
    {
        return $this->hasOneof(2);
    }

    /**
     * The natural language text to be processed.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.TextInput text = 2;</code>
     * @param \Google\Cloud\Dialogflow\V2beta1\TextInput $var
     * @return $this
     */
    public function setText($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2beta1\TextInput::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * The event to be processed.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.EventInput event = 3;</code>
     * @return \Google\Cloud\Dialogflow\V2beta1\EventInput|null
     */
    public function getEvent()
    {
        return $this->readOneof(3);
    }

    public function hasEvent()
    {
        return $this->hasOneof(3);
    }

    /**
     * The event to be processed.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.EventInput event = 3;</code>
     * @param \Google\Cloud\Dialogflow\V2beta1\EventInput $var
     * @return $this
     */
    public function setEvent($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2beta1\EventInput::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * The DTMF digits used to invoke intent and fill in parameter value.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.TelephonyDtmfEvents dtmf = 4;</code>
     * @return \Google\Cloud\Dialogflow\V2beta1\TelephonyDtmfEvents|null
     */
    public function getDtmf()
    {
        return $this->readOneof(4);
    }

    public function hasDtmf()
    {
        return $this->hasOneof(4);
    }

    /**
     * The DTMF digits used to invoke intent and fill in parameter value.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.TelephonyDtmfEvents dtmf = 4;</code>
     * @param \Google\Cloud\Dialogflow\V2beta1\TelephonyDtmfEvents $var
     * @return $this
     */
    public function setDtmf($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2beta1\TelephonyDtmfEvents::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getInput()
    {
        return $this->whichOneof("input");
    }

}
