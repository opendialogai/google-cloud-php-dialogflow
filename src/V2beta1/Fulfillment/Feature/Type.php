<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2beta1/fulfillment.proto

namespace Google\Cloud\Dialogflow\V2beta1\Fulfillment\Feature;

use UnexpectedValueException;

/**
 * The type of the feature.
 *
 * Protobuf type <code>google.cloud.dialogflow.v2beta1.Fulfillment.Feature.Type</code>
 */
class Type
{
    /**
     * Feature type not specified.
     *
     * Generated from protobuf enum <code>TYPE_UNSPECIFIED = 0;</code>
     */
    const TYPE_UNSPECIFIED = 0;
    /**
     * Fulfillment is enabled for SmallTalk.
     *
     * Generated from protobuf enum <code>SMALLTALK = 1;</code>
     */
    const SMALLTALK = 1;

    private static $valueToName = [
        self::TYPE_UNSPECIFIED => 'TYPE_UNSPECIFIED',
        self::SMALLTALK => 'SMALLTALK',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Type::class, \Google\Cloud\Dialogflow\V2beta1\Fulfillment_Feature_Type::class);

