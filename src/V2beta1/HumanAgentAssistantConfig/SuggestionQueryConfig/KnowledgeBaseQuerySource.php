<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2beta1/conversation_profile.proto

namespace Google\Cloud\Dialogflow\V2beta1\HumanAgentAssistantConfig\SuggestionQueryConfig;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Knowledge base source settings.
 * Supported features: ARTICLE_SUGGESTION, FAQ.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2beta1.HumanAgentAssistantConfig.SuggestionQueryConfig.KnowledgeBaseQuerySource</code>
 */
class KnowledgeBaseQuerySource extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Knowledge bases to query. Format:
     * `projects/<Project ID>/locations/<Location
     * ID>/knowledgeBases/<Knowledge Base ID>`. Currently, only one knowledge
     * base is supported.
     *
     * Generated from protobuf field <code>repeated string knowledge_bases = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $knowledge_bases;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $knowledge_bases
     *           Required. Knowledge bases to query. Format:
     *           `projects/<Project ID>/locations/<Location
     *           ID>/knowledgeBases/<Knowledge Base ID>`. Currently, only one knowledge
     *           base is supported.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2Beta1\ConversationProfile::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Knowledge bases to query. Format:
     * `projects/<Project ID>/locations/<Location
     * ID>/knowledgeBases/<Knowledge Base ID>`. Currently, only one knowledge
     * base is supported.
     *
     * Generated from protobuf field <code>repeated string knowledge_bases = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getKnowledgeBases()
    {
        return $this->knowledge_bases;
    }

    /**
     * Required. Knowledge bases to query. Format:
     * `projects/<Project ID>/locations/<Location
     * ID>/knowledgeBases/<Knowledge Base ID>`. Currently, only one knowledge
     * base is supported.
     *
     * Generated from protobuf field <code>repeated string knowledge_bases = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setKnowledgeBases($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->knowledge_bases = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(KnowledgeBaseQuerySource::class, \Google\Cloud\Dialogflow\V2beta1\HumanAgentAssistantConfig_SuggestionQueryConfig_KnowledgeBaseQuerySource::class);

