<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2beta1/knowledge_base.proto

namespace Google\Cloud\Dialogflow\V2beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [KnowledgeBases.ListKnowledgeBases][google.cloud.dialogflow.v2beta1.KnowledgeBases.ListKnowledgeBases].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2beta1.ListKnowledgeBasesRequest</code>
 */
class ListKnowledgeBasesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The project to list of knowledge bases for.
     * Format: `projects/<Project ID>/locations/<Location ID>`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * The maximum number of items to return in a single page. By
     * default 10 and at most 100.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    protected $page_size = 0;
    /**
     * The next_page_token value returned from a previous list request.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    protected $page_token = '';
    /**
     * The filter expression used to filter knowledge bases returned by the list
     * method. The expression has the following syntax:
     *   <field> <operator> <value> [AND <field> <operator> <value>] ...
     * The following fields and operators are supported:
     * * display_name with has(:) operator
     * * language_code with equals(=) operator
     * Examples:
     * * 'language_code=en-us' matches knowledge bases with en-us language code.
     * * 'display_name:articles' matches knowledge bases whose display name
     *   contains "articles".
     * * 'display_name:"Best Articles"' matches knowledge bases whose display
     *   name contains "Best Articles".
     * * 'language_code=en-gb AND display_name=articles' matches all knowledge
     *   bases whose display name contains "articles" and whose language code is
     *   "en-gb".
     * Note: An empty filter string (i.e. "") is a no-op and will result in no
     * filtering.
     * For more information about filtering, see
     * [API Filtering](https://aip.dev/160).
     *
     * Generated from protobuf field <code>string filter = 4;</code>
     */
    protected $filter = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The project to list of knowledge bases for.
     *           Format: `projects/<Project ID>/locations/<Location ID>`.
     *     @type int $page_size
     *           The maximum number of items to return in a single page. By
     *           default 10 and at most 100.
     *     @type string $page_token
     *           The next_page_token value returned from a previous list request.
     *     @type string $filter
     *           The filter expression used to filter knowledge bases returned by the list
     *           method. The expression has the following syntax:
     *             <field> <operator> <value> [AND <field> <operator> <value>] ...
     *           The following fields and operators are supported:
     *           * display_name with has(:) operator
     *           * language_code with equals(=) operator
     *           Examples:
     *           * 'language_code=en-us' matches knowledge bases with en-us language code.
     *           * 'display_name:articles' matches knowledge bases whose display name
     *             contains "articles".
     *           * 'display_name:"Best Articles"' matches knowledge bases whose display
     *             name contains "Best Articles".
     *           * 'language_code=en-gb AND display_name=articles' matches all knowledge
     *             bases whose display name contains "articles" and whose language code is
     *             "en-gb".
     *           Note: An empty filter string (i.e. "") is a no-op and will result in no
     *           filtering.
     *           For more information about filtering, see
     *           [API Filtering](https://aip.dev/160).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2Beta1\KnowledgeBase::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The project to list of knowledge bases for.
     * Format: `projects/<Project ID>/locations/<Location ID>`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The project to list of knowledge bases for.
     * Format: `projects/<Project ID>/locations/<Location ID>`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * The maximum number of items to return in a single page. By
     * default 10 and at most 100.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * The maximum number of items to return in a single page. By
     * default 10 and at most 100.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * The next_page_token value returned from a previous list request.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * The next_page_token value returned from a previous list request.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * The filter expression used to filter knowledge bases returned by the list
     * method. The expression has the following syntax:
     *   <field> <operator> <value> [AND <field> <operator> <value>] ...
     * The following fields and operators are supported:
     * * display_name with has(:) operator
     * * language_code with equals(=) operator
     * Examples:
     * * 'language_code=en-us' matches knowledge bases with en-us language code.
     * * 'display_name:articles' matches knowledge bases whose display name
     *   contains "articles".
     * * 'display_name:"Best Articles"' matches knowledge bases whose display
     *   name contains "Best Articles".
     * * 'language_code=en-gb AND display_name=articles' matches all knowledge
     *   bases whose display name contains "articles" and whose language code is
     *   "en-gb".
     * Note: An empty filter string (i.e. "") is a no-op and will result in no
     * filtering.
     * For more information about filtering, see
     * [API Filtering](https://aip.dev/160).
     *
     * Generated from protobuf field <code>string filter = 4;</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * The filter expression used to filter knowledge bases returned by the list
     * method. The expression has the following syntax:
     *   <field> <operator> <value> [AND <field> <operator> <value>] ...
     * The following fields and operators are supported:
     * * display_name with has(:) operator
     * * language_code with equals(=) operator
     * Examples:
     * * 'language_code=en-us' matches knowledge bases with en-us language code.
     * * 'display_name:articles' matches knowledge bases whose display name
     *   contains "articles".
     * * 'display_name:"Best Articles"' matches knowledge bases whose display
     *   name contains "Best Articles".
     * * 'language_code=en-gb AND display_name=articles' matches all knowledge
     *   bases whose display name contains "articles" and whose language code is
     *   "en-gb".
     * Note: An empty filter string (i.e. "") is a no-op and will result in no
     * filtering.
     * For more information about filtering, see
     * [API Filtering](https://aip.dev/160).
     *
     * Generated from protobuf field <code>string filter = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

}
