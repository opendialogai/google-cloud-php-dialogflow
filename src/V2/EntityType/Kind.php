<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/entity_type.proto

namespace Google\Cloud\Dialogflow\V2\EntityType;

/**
 * Represents kinds of entities.
 *
 * Protobuf type <code>google.cloud.dialogflow.v2.EntityType.Kind</code>
 */
class Kind
{
    /**
     * Not specified. This value should be never used.
     *
     * Generated from protobuf enum <code>KIND_UNSPECIFIED = 0;</code>
     */
    const KIND_UNSPECIFIED = 0;
    /**
     * Map entity types allow mapping of a group of synonyms to a canonical
     * value.
     *
     * Generated from protobuf enum <code>KIND_MAP = 1;</code>
     */
    const KIND_MAP = 1;
    /**
     * List entity types contain a set of entries that do not map to canonical
     * values. However, list entity types can contain references to other entity
     * types (with or without aliases).
     *
     * Generated from protobuf enum <code>KIND_LIST = 2;</code>
     */
    const KIND_LIST = 2;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Kind::class, \Google\Cloud\Dialogflow\V2\EntityType_Kind::class);
