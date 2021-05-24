<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2beta1/answer_record.proto

namespace Google\Cloud\Dialogflow\V2beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [AnswerRecords.GetAnswerRecord][google.cloud.dialogflow.v2beta1.AnswerRecords.GetAnswerRecord].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2beta1.GetAnswerRecordRequest</code>
 */
class GetAnswerRecordRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the answer record to retrieve.
     * Format: `projects/<Project ID>/locations/<Location
     * ID>/answerRecords/<Answer Record Id>`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the answer record to retrieve.
     *           Format: `projects/<Project ID>/locations/<Location
     *           ID>/answerRecords/<Answer Record Id>`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2Beta1\AnswerRecord::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the answer record to retrieve.
     * Format: `projects/<Project ID>/locations/<Location
     * ID>/answerRecords/<Answer Record Id>`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the answer record to retrieve.
     * Format: `projects/<Project ID>/locations/<Location
     * ID>/answerRecords/<Answer Record Id>`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}
