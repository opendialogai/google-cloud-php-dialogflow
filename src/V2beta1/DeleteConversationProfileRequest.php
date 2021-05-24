<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2beta1/conversation_profile.proto

namespace Google\Cloud\Dialogflow\V2beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [ConversationProfiles.DeleteConversationProfile][google.cloud.dialogflow.v2beta1.ConversationProfiles.DeleteConversationProfile].
 * This operation fails if the conversation profile is still referenced from
 * a phone number.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2beta1.DeleteConversationProfileRequest</code>
 */
class DeleteConversationProfileRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the conversation profile to delete.
     * Format: `projects/<Project ID>/locations/<Location
     * ID>/conversationProfiles/<Conversation Profile ID>`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the conversation profile to delete.
     *           Format: `projects/<Project ID>/locations/<Location
     *           ID>/conversationProfiles/<Conversation Profile ID>`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2Beta1\ConversationProfile::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the conversation profile to delete.
     * Format: `projects/<Project ID>/locations/<Location
     * ID>/conversationProfiles/<Conversation Profile ID>`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the conversation profile to delete.
     * Format: `projects/<Project ID>/locations/<Location
     * ID>/conversationProfiles/<Conversation Profile ID>`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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

