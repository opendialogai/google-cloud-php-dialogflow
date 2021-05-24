<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2beta1/audio_config.proto

namespace Google\Cloud\Dialogflow\V2beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Hints for the speech recognizer to help with recognition in a specific
 * conversation state.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2beta1.SpeechContext</code>
 */
class SpeechContext extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. A list of strings containing words and phrases that the speech
     * recognizer should recognize with higher likelihood.
     * This list can be used to:
     * * improve accuracy for words and phrases you expect the user to say,
     *   e.g. typical commands for your Dialogflow agent
     * * add additional words to the speech recognizer vocabulary
     * * ...
     * See the [Cloud Speech
     * documentation](https://cloud.google.com/speech-to-text/quotas) for usage
     * limits.
     *
     * Generated from protobuf field <code>repeated string phrases = 1;</code>
     */
    private $phrases;
    /**
     * Optional. Boost for this context compared to other contexts:
     * * If the boost is positive, Dialogflow will increase the probability that
     *   the phrases in this context are recognized over similar sounding phrases.
     * * If the boost is unspecified or non-positive, Dialogflow will not apply
     *   any boost.
     * Dialogflow recommends that you use boosts in the range (0, 20] and that you
     * find a value that fits your use case with binary search.
     *
     * Generated from protobuf field <code>float boost = 2;</code>
     */
    protected $boost = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $phrases
     *           Optional. A list of strings containing words and phrases that the speech
     *           recognizer should recognize with higher likelihood.
     *           This list can be used to:
     *           * improve accuracy for words and phrases you expect the user to say,
     *             e.g. typical commands for your Dialogflow agent
     *           * add additional words to the speech recognizer vocabulary
     *           * ...
     *           See the [Cloud Speech
     *           documentation](https://cloud.google.com/speech-to-text/quotas) for usage
     *           limits.
     *     @type float $boost
     *           Optional. Boost for this context compared to other contexts:
     *           * If the boost is positive, Dialogflow will increase the probability that
     *             the phrases in this context are recognized over similar sounding phrases.
     *           * If the boost is unspecified or non-positive, Dialogflow will not apply
     *             any boost.
     *           Dialogflow recommends that you use boosts in the range (0, 20] and that you
     *           find a value that fits your use case with binary search.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2Beta1\AudioConfig::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. A list of strings containing words and phrases that the speech
     * recognizer should recognize with higher likelihood.
     * This list can be used to:
     * * improve accuracy for words and phrases you expect the user to say,
     *   e.g. typical commands for your Dialogflow agent
     * * add additional words to the speech recognizer vocabulary
     * * ...
     * See the [Cloud Speech
     * documentation](https://cloud.google.com/speech-to-text/quotas) for usage
     * limits.
     *
     * Generated from protobuf field <code>repeated string phrases = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPhrases()
    {
        return $this->phrases;
    }

    /**
     * Optional. A list of strings containing words and phrases that the speech
     * recognizer should recognize with higher likelihood.
     * This list can be used to:
     * * improve accuracy for words and phrases you expect the user to say,
     *   e.g. typical commands for your Dialogflow agent
     * * add additional words to the speech recognizer vocabulary
     * * ...
     * See the [Cloud Speech
     * documentation](https://cloud.google.com/speech-to-text/quotas) for usage
     * limits.
     *
     * Generated from protobuf field <code>repeated string phrases = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPhrases($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->phrases = $arr;

        return $this;
    }

    /**
     * Optional. Boost for this context compared to other contexts:
     * * If the boost is positive, Dialogflow will increase the probability that
     *   the phrases in this context are recognized over similar sounding phrases.
     * * If the boost is unspecified or non-positive, Dialogflow will not apply
     *   any boost.
     * Dialogflow recommends that you use boosts in the range (0, 20] and that you
     * find a value that fits your use case with binary search.
     *
     * Generated from protobuf field <code>float boost = 2;</code>
     * @return float
     */
    public function getBoost()
    {
        return $this->boost;
    }

    /**
     * Optional. Boost for this context compared to other contexts:
     * * If the boost is positive, Dialogflow will increase the probability that
     *   the phrases in this context are recognized over similar sounding phrases.
     * * If the boost is unspecified or non-positive, Dialogflow will not apply
     *   any boost.
     * Dialogflow recommends that you use boosts in the range (0, 20] and that you
     * find a value that fits your use case with binary search.
     *
     * Generated from protobuf field <code>float boost = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setBoost($var)
    {
        GPBUtil::checkFloat($var);
        $this->boost = $var;

        return $this;
    }

}

