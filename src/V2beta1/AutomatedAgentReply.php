<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2beta1/participant.proto

namespace Google\Cloud\Dialogflow\V2beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a response from an automated agent.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2beta1.AutomatedAgentReply</code>
 */
class AutomatedAgentReply extends \Google\Protobuf\Internal\Message
{
    /**
     * Response messages from the automated agent.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2beta1.ResponseMessage response_messages = 3;</code>
     */
    private $response_messages;
    /**
     * The confidence of the match. Values range from 0.0 (completely uncertain)
     * to 1.0 (completely certain).
     * This value is for informational purpose only and is only used to help match
     * the best intent within the classification threshold. This value may change
     * for the same end-user expression at any time due to a model retraining or
     * change in implementation.
     *
     * Generated from protobuf field <code>float match_confidence = 9;</code>
     */
    protected $match_confidence = 0.0;
    /**
     * The collection of current parameters at the time of this response.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct parameters = 10;</code>
     */
    protected $parameters = null;
    /**
     * The collection of current Dialogflow CX agent session parameters at the
     * time of this response.
     * Deprecated: Use `parameters` instead.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct cx_session_parameters = 6 [deprecated = true];</code>
     * @deprecated
     */
    protected $cx_session_parameters = null;
    protected $response;
    protected $match;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dialogflow\V2beta1\DetectIntentResponse $detect_intent_response
     *           Response of the Dialogflow [Sessions.DetectIntent][google.cloud.dialogflow.v2beta1.Sessions.DetectIntent] call.
     *     @type \Google\Cloud\Dialogflow\V2beta1\ResponseMessage[]|\Google\Protobuf\Internal\RepeatedField $response_messages
     *           Response messages from the automated agent.
     *     @type string $intent
     *           Name of the intent if an intent is matched for the query.
     *           For a V2 query, the value format is `projects/<Project ID>/locations/
     *           <Location ID>/agent/intents/<Intent ID>`.
     *           For a V3 query, the value format is `projects/<Project ID>/locations/
     *           <Location ID>/agents/<Agent ID>/intents/<Intent ID>`.
     *     @type string $event
     *           Event name if an event is triggered for the query.
     *     @type float $match_confidence
     *           The confidence of the match. Values range from 0.0 (completely uncertain)
     *           to 1.0 (completely certain).
     *           This value is for informational purpose only and is only used to help match
     *           the best intent within the classification threshold. This value may change
     *           for the same end-user expression at any time due to a model retraining or
     *           change in implementation.
     *     @type \Google\Protobuf\Struct $parameters
     *           The collection of current parameters at the time of this response.
     *     @type \Google\Protobuf\Struct $cx_session_parameters
     *           The collection of current Dialogflow CX agent session parameters at the
     *           time of this response.
     *           Deprecated: Use `parameters` instead.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2Beta1\Participant::initOnce();
        parent::__construct($data);
    }

    /**
     * Response of the Dialogflow [Sessions.DetectIntent][google.cloud.dialogflow.v2beta1.Sessions.DetectIntent] call.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.DetectIntentResponse detect_intent_response = 1;</code>
     * @return \Google\Cloud\Dialogflow\V2beta1\DetectIntentResponse|null
     */
    public function getDetectIntentResponse()
    {
        return $this->readOneof(1);
    }

    public function hasDetectIntentResponse()
    {
        return $this->hasOneof(1);
    }

    /**
     * Response of the Dialogflow [Sessions.DetectIntent][google.cloud.dialogflow.v2beta1.Sessions.DetectIntent] call.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.DetectIntentResponse detect_intent_response = 1;</code>
     * @param \Google\Cloud\Dialogflow\V2beta1\DetectIntentResponse $var
     * @return $this
     */
    public function setDetectIntentResponse($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2beta1\DetectIntentResponse::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Response messages from the automated agent.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2beta1.ResponseMessage response_messages = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getResponseMessages()
    {
        return $this->response_messages;
    }

    /**
     * Response messages from the automated agent.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2beta1.ResponseMessage response_messages = 3;</code>
     * @param \Google\Cloud\Dialogflow\V2beta1\ResponseMessage[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setResponseMessages($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dialogflow\V2beta1\ResponseMessage::class);
        $this->response_messages = $arr;

        return $this;
    }

    /**
     * Name of the intent if an intent is matched for the query.
     * For a V2 query, the value format is `projects/<Project ID>/locations/
     * <Location ID>/agent/intents/<Intent ID>`.
     * For a V3 query, the value format is `projects/<Project ID>/locations/
     * <Location ID>/agents/<Agent ID>/intents/<Intent ID>`.
     *
     * Generated from protobuf field <code>string intent = 4 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getIntent()
    {
        return $this->readOneof(4);
    }

    public function hasIntent()
    {
        return $this->hasOneof(4);
    }

    /**
     * Name of the intent if an intent is matched for the query.
     * For a V2 query, the value format is `projects/<Project ID>/locations/
     * <Location ID>/agent/intents/<Intent ID>`.
     * For a V3 query, the value format is `projects/<Project ID>/locations/
     * <Location ID>/agents/<Agent ID>/intents/<Intent ID>`.
     *
     * Generated from protobuf field <code>string intent = 4 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setIntent($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Event name if an event is triggered for the query.
     *
     * Generated from protobuf field <code>string event = 5;</code>
     * @return string
     */
    public function getEvent()
    {
        return $this->readOneof(5);
    }

    public function hasEvent()
    {
        return $this->hasOneof(5);
    }

    /**
     * Event name if an event is triggered for the query.
     *
     * Generated from protobuf field <code>string event = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setEvent($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * The confidence of the match. Values range from 0.0 (completely uncertain)
     * to 1.0 (completely certain).
     * This value is for informational purpose only and is only used to help match
     * the best intent within the classification threshold. This value may change
     * for the same end-user expression at any time due to a model retraining or
     * change in implementation.
     *
     * Generated from protobuf field <code>float match_confidence = 9;</code>
     * @return float
     */
    public function getMatchConfidence()
    {
        return $this->match_confidence;
    }

    /**
     * The confidence of the match. Values range from 0.0 (completely uncertain)
     * to 1.0 (completely certain).
     * This value is for informational purpose only and is only used to help match
     * the best intent within the classification threshold. This value may change
     * for the same end-user expression at any time due to a model retraining or
     * change in implementation.
     *
     * Generated from protobuf field <code>float match_confidence = 9;</code>
     * @param float $var
     * @return $this
     */
    public function setMatchConfidence($var)
    {
        GPBUtil::checkFloat($var);
        $this->match_confidence = $var;

        return $this;
    }

    /**
     * The collection of current parameters at the time of this response.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct parameters = 10;</code>
     * @return \Google\Protobuf\Struct|null
     */
    public function getParameters()
    {
        return isset($this->parameters) ? $this->parameters : null;
    }

    public function hasParameters()
    {
        return isset($this->parameters);
    }

    public function clearParameters()
    {
        unset($this->parameters);
    }

    /**
     * The collection of current parameters at the time of this response.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct parameters = 10;</code>
     * @param \Google\Protobuf\Struct $var
     * @return $this
     */
    public function setParameters($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->parameters = $var;

        return $this;
    }

    /**
     * The collection of current Dialogflow CX agent session parameters at the
     * time of this response.
     * Deprecated: Use `parameters` instead.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct cx_session_parameters = 6 [deprecated = true];</code>
     * @return \Google\Protobuf\Struct|null
     * @deprecated
     */
    public function getCxSessionParameters()
    {
        @trigger_error('cx_session_parameters is deprecated.', E_USER_DEPRECATED);
        return isset($this->cx_session_parameters) ? $this->cx_session_parameters : null;
    }

    public function hasCxSessionParameters()
    {
        @trigger_error('cx_session_parameters is deprecated.', E_USER_DEPRECATED);
        return isset($this->cx_session_parameters);
    }

    public function clearCxSessionParameters()
    {
        @trigger_error('cx_session_parameters is deprecated.', E_USER_DEPRECATED);
        unset($this->cx_session_parameters);
    }

    /**
     * The collection of current Dialogflow CX agent session parameters at the
     * time of this response.
     * Deprecated: Use `parameters` instead.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct cx_session_parameters = 6 [deprecated = true];</code>
     * @param \Google\Protobuf\Struct $var
     * @return $this
     * @deprecated
     */
    public function setCxSessionParameters($var)
    {
        @trigger_error('cx_session_parameters is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->cx_session_parameters = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getResponse()
    {
        return $this->whichOneof("response");
    }

    /**
     * @return string
     */
    public function getMatch()
    {
        return $this->whichOneof("match");
    }

}
