<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2beta1/intent.proto

namespace Google\Cloud\Dialogflow\V2beta1\Intent\Message;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Column properties for [TableCard][google.cloud.dialogflow.v2beta1.Intent.Message.TableCard].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2beta1.Intent.Message.ColumnProperties</code>
 */
class ColumnProperties extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Column heading.
     *
     * Generated from protobuf field <code>string header = 1;</code>
     */
    protected $header = '';
    /**
     * Optional. Defines text alignment for all cells in this column.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.Intent.Message.ColumnProperties.HorizontalAlignment horizontal_alignment = 2;</code>
     */
    protected $horizontal_alignment = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $header
     *           Required. Column heading.
     *     @type int $horizontal_alignment
     *           Optional. Defines text alignment for all cells in this column.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2Beta1\Intent::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Column heading.
     *
     * Generated from protobuf field <code>string header = 1;</code>
     * @return string
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Required. Column heading.
     *
     * Generated from protobuf field <code>string header = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setHeader($var)
    {
        GPBUtil::checkString($var, True);
        $this->header = $var;

        return $this;
    }

    /**
     * Optional. Defines text alignment for all cells in this column.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.Intent.Message.ColumnProperties.HorizontalAlignment horizontal_alignment = 2;</code>
     * @return int
     */
    public function getHorizontalAlignment()
    {
        return $this->horizontal_alignment;
    }

    /**
     * Optional. Defines text alignment for all cells in this column.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.Intent.Message.ColumnProperties.HorizontalAlignment horizontal_alignment = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setHorizontalAlignment($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dialogflow\V2beta1\Intent\Message\ColumnProperties\HorizontalAlignment::class);
        $this->horizontal_alignment = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ColumnProperties::class, \Google\Cloud\Dialogflow\V2beta1\Intent_Message_ColumnProperties::class);

