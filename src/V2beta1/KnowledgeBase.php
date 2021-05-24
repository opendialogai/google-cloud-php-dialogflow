<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2beta1/knowledge_base.proto

namespace Google\Cloud\Dialogflow\V2beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A knowledge base represents a collection of knowledge documents that you
 * provide to Dialogflow. Your knowledge documents contain information that may
 * be useful during conversations with end-users. Some Dialogflow features use
 * knowledge bases when looking for a response to an end-user input.
 * For more information, see the [knowledge base
 * guide](https://cloud.google.com/dialogflow/docs/how/knowledge-bases).
 * Note: The `projects.agent.knowledgeBases` resource is deprecated;
 * only use `projects.knowledgeBases`.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2beta1.KnowledgeBase</code>
 */
class KnowledgeBase extends \Google\Protobuf\Internal\Message
{
    /**
     * The knowledge base resource name.
     * The name must be empty when creating a knowledge base.
     * Format: `projects/<Project ID>/locations/<Location
     * ID>/knowledgeBases/<Knowledge Base ID>`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Required. The display name of the knowledge base. The name must be 1024
     * bytes or less; otherwise, the creation request fails.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $display_name = '';
    /**
     * Language which represents the KnowledgeBase. When the KnowledgeBase is
     * created/updated, this is populated for all non en-us languages. If not
     * populated, the default language en-us applies.
     *
     * Generated from protobuf field <code>string language_code = 4;</code>
     */
    protected $language_code = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The knowledge base resource name.
     *           The name must be empty when creating a knowledge base.
     *           Format: `projects/<Project ID>/locations/<Location
     *           ID>/knowledgeBases/<Knowledge Base ID>`.
     *     @type string $display_name
     *           Required. The display name of the knowledge base. The name must be 1024
     *           bytes or less; otherwise, the creation request fails.
     *     @type string $language_code
     *           Language which represents the KnowledgeBase. When the KnowledgeBase is
     *           created/updated, this is populated for all non en-us languages. If not
     *           populated, the default language en-us applies.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2Beta1\KnowledgeBase::initOnce();
        parent::__construct($data);
    }

    /**
     * The knowledge base resource name.
     * The name must be empty when creating a knowledge base.
     * Format: `projects/<Project ID>/locations/<Location
     * ID>/knowledgeBases/<Knowledge Base ID>`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The knowledge base resource name.
     * The name must be empty when creating a knowledge base.
     * Format: `projects/<Project ID>/locations/<Location
     * ID>/knowledgeBases/<Knowledge Base ID>`.
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

    /**
     * Required. The display name of the knowledge base. The name must be 1024
     * bytes or less; otherwise, the creation request fails.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Required. The display name of the knowledge base. The name must be 1024
     * bytes or less; otherwise, the creation request fails.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Language which represents the KnowledgeBase. When the KnowledgeBase is
     * created/updated, this is populated for all non en-us languages. If not
     * populated, the default language en-us applies.
     *
     * Generated from protobuf field <code>string language_code = 4;</code>
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->language_code;
    }

    /**
     * Language which represents the KnowledgeBase. When the KnowledgeBase is
     * created/updated, this is populated for all non en-us languages. If not
     * populated, the default language en-us applies.
     *
     * Generated from protobuf field <code>string language_code = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->language_code = $var;

        return $this;
    }

}

