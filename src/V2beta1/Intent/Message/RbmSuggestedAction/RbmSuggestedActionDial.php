<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2beta1/intent.proto

namespace Google\Cloud\Dialogflow\V2beta1\Intent\Message\RbmSuggestedAction;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Opens the user's default dialer app with the specified phone number
 * but does not dial automatically.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2beta1.Intent.Message.RbmSuggestedAction.RbmSuggestedActionDial</code>
 */
class RbmSuggestedActionDial extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The phone number to fill in the default dialer app.
     * This field should be in [E.164](https://en.wikipedia.org/wiki/E.164)
     * format. An example of a correctly formatted phone number:
     * +15556767888.
     *
     * Generated from protobuf field <code>string phone_number = 1;</code>
     */
    protected $phone_number = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $phone_number
     *           Required. The phone number to fill in the default dialer app.
     *           This field should be in [E.164](https://en.wikipedia.org/wiki/E.164)
     *           format. An example of a correctly formatted phone number:
     *           +15556767888.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2Beta1\Intent::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The phone number to fill in the default dialer app.
     * This field should be in [E.164](https://en.wikipedia.org/wiki/E.164)
     * format. An example of a correctly formatted phone number:
     * +15556767888.
     *
     * Generated from protobuf field <code>string phone_number = 1;</code>
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phone_number;
    }

    /**
     * Required. The phone number to fill in the default dialer app.
     * This field should be in [E.164](https://en.wikipedia.org/wiki/E.164)
     * format. An example of a correctly formatted phone number:
     * +15556767888.
     *
     * Generated from protobuf field <code>string phone_number = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPhoneNumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->phone_number = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RbmSuggestedActionDial::class, \Google\Cloud\Dialogflow\V2beta1\Intent_Message_RbmSuggestedAction_RbmSuggestedActionDial::class);
