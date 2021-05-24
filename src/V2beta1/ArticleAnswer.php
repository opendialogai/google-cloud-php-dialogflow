<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2beta1/participant.proto

namespace Google\Cloud\Dialogflow\V2beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents article answer.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2beta1.ArticleAnswer</code>
 */
class ArticleAnswer extends \Google\Protobuf\Internal\Message
{
    /**
     * The article title.
     *
     * Generated from protobuf field <code>string title = 1;</code>
     */
    protected $title = '';
    /**
     * The article URI.
     *
     * Generated from protobuf field <code>string uri = 2;</code>
     */
    protected $uri = '';
    /**
     * Output only. Article snippets.
     *
     * Generated from protobuf field <code>repeated string snippets = 3;</code>
     */
    private $snippets;
    /**
     * A map that contains metadata about the answer and the
     * document from which it originates.
     *
     * Generated from protobuf field <code>map<string, string> metadata = 5;</code>
     */
    private $metadata;
    /**
     * The name of answer record, in the format of
     * "projects/<Project ID>/locations/<Location ID>/answerRecords/<Answer Record
     * ID>"
     *
     * Generated from protobuf field <code>string answer_record = 6;</code>
     */
    protected $answer_record = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $title
     *           The article title.
     *     @type string $uri
     *           The article URI.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $snippets
     *           Output only. Article snippets.
     *     @type array|\Google\Protobuf\Internal\MapField $metadata
     *           A map that contains metadata about the answer and the
     *           document from which it originates.
     *     @type string $answer_record
     *           The name of answer record, in the format of
     *           "projects/<Project ID>/locations/<Location ID>/answerRecords/<Answer Record
     *           ID>"
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2Beta1\Participant::initOnce();
        parent::__construct($data);
    }

    /**
     * The article title.
     *
     * Generated from protobuf field <code>string title = 1;</code>
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * The article title.
     *
     * Generated from protobuf field <code>string title = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->title = $var;

        return $this;
    }

    /**
     * The article URI.
     *
     * Generated from protobuf field <code>string uri = 2;</code>
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * The article URI.
     *
     * Generated from protobuf field <code>string uri = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->uri = $var;

        return $this;
    }

    /**
     * Output only. Article snippets.
     *
     * Generated from protobuf field <code>repeated string snippets = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSnippets()
    {
        return $this->snippets;
    }

    /**
     * Output only. Article snippets.
     *
     * Generated from protobuf field <code>repeated string snippets = 3;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSnippets($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->snippets = $arr;

        return $this;
    }

    /**
     * A map that contains metadata about the answer and the
     * document from which it originates.
     *
     * Generated from protobuf field <code>map<string, string> metadata = 5;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * A map that contains metadata about the answer and the
     * document from which it originates.
     *
     * Generated from protobuf field <code>map<string, string> metadata = 5;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setMetadata($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->metadata = $arr;

        return $this;
    }

    /**
     * The name of answer record, in the format of
     * "projects/<Project ID>/locations/<Location ID>/answerRecords/<Answer Record
     * ID>"
     *
     * Generated from protobuf field <code>string answer_record = 6;</code>
     * @return string
     */
    public function getAnswerRecord()
    {
        return $this->answer_record;
    }

    /**
     * The name of answer record, in the format of
     * "projects/<Project ID>/locations/<Location ID>/answerRecords/<Answer Record
     * ID>"
     *
     * Generated from protobuf field <code>string answer_record = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setAnswerRecord($var)
    {
        GPBUtil::checkString($var, True);
        $this->answer_record = $var;

        return $this;
    }

}
