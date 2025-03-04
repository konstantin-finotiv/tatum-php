<?php

/**
 * FlowCustomTransactionPK_args_inner Model
 *
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 * @link      https://tatum.io/
 *
 * NOTE: This class is auto-generated by tatum.io
 * Do not edit this file manually!
 */

namespace Tatum\Model;
!defined("TATUM-SDK") && exit();

/**
 * FlowCustomTransactionPK_args_inner Model
 */
class FlowCustomTransactionPKArgsInner extends AbstractModel {

    public const _D = null;
    public const TYPE_IDENTITY = 'Identity';
    public const TYPE_U_INT = 'UInt';
    public const TYPE_INT = 'Int';
    public const TYPE_U_INT8 = 'UInt8';
    public const TYPE_INT8 = 'Int8';
    public const TYPE_U_INT16 = 'UInt16';
    public const TYPE_INT16 = 'Int16';
    public const TYPE_U_INT32 = 'UInt32';
    public const TYPE_INT32 = 'Int32';
    public const TYPE_U_INT64 = 'UInt64';
    public const TYPE_INT64 = 'Int64';
    public const TYPE_U_INT128 = 'UInt128';
    public const TYPE_INT128 = 'Int128';
    public const TYPE_U_INT256 = 'UInt256';
    public const TYPE_INT256 = 'Int256';
    public const TYPE_WORD8 = 'Word8';
    public const TYPE_WORD16 = 'Word16';
    public const TYPE_WORD32 = 'Word32';
    public const TYPE_WORD64 = 'Word64';
    public const TYPE_U_FIX64 = 'UFix64';
    public const TYPE_FIX64 = 'Fix64';
    public const TYPE_STRING = 'String';
    public const TYPE_CHARACTER = 'Character';
    public const TYPE_BOOL = 'Bool';
    public const TYPE_ADDRESS = 'Address';
    public const TYPE_VOID = 'Void';
    public const TYPE_OPTIONAL = 'Optional';
    public const TYPE_REFERENCE = 'Reference';
    public const TYPE__ARRAY = 'Array';
    public const TYPE_DICTIONARY = 'Dictionary';
    public const TYPE_EVENT = 'Event';
    public const TYPE_RESOURCE = 'Resource';
    public const TYPE_STRUCT = 'Struct';
    public const SUB_TYPE_IDENTITY = 'Identity';
    public const SUB_TYPE_U_INT = 'UInt';
    public const SUB_TYPE_INT = 'Int';
    public const SUB_TYPE_U_INT8 = 'UInt8';
    public const SUB_TYPE_INT8 = 'Int8';
    public const SUB_TYPE_U_INT16 = 'UInt16';
    public const SUB_TYPE_INT16 = 'Int16';
    public const SUB_TYPE_U_INT32 = 'UInt32';
    public const SUB_TYPE_INT32 = 'Int32';
    public const SUB_TYPE_U_INT64 = 'UInt64';
    public const SUB_TYPE_INT64 = 'Int64';
    public const SUB_TYPE_U_INT128 = 'UInt128';
    public const SUB_TYPE_INT128 = 'Int128';
    public const SUB_TYPE_U_INT256 = 'UInt256';
    public const SUB_TYPE_INT256 = 'Int256';
    public const SUB_TYPE_WORD8 = 'Word8';
    public const SUB_TYPE_WORD16 = 'Word16';
    public const SUB_TYPE_WORD32 = 'Word32';
    public const SUB_TYPE_WORD64 = 'Word64';
    public const SUB_TYPE_U_FIX64 = 'UFix64';
    public const SUB_TYPE_FIX64 = 'Fix64';
    public const SUB_TYPE_STRING = 'String';
    public const SUB_TYPE_CHARACTER = 'Character';
    public const SUB_TYPE_BOOL = 'Bool';
    public const SUB_TYPE_ADDRESS = 'Address';
    public const SUB_TYPE_VOID = 'Void';
    public const SUB_TYPE_OPTIONAL = 'Optional';
    public const SUB_TYPE_REFERENCE = 'Reference';
    public const SUB_TYPE__ARRAY = 'Array';
    public const SUB_TYPE_DICTIONARY = 'Dictionary';
    public const SUB_TYPE_EVENT = 'Event';
    public const SUB_TYPE_RESOURCE = 'Resource';
    public const SUB_TYPE_STRUCT = 'Struct';
    protected static $_name = "FlowCustomTransactionPK_args_inner";
    protected static $_definition = [
        "value" => ["value", "\Tatum\Model\FlowCustomTransactionPKArgsInnerValue", null, "getValue", "setValue", null, ["r" => 1]], 
        "type" => ["type", "string", null, "getType", "setType", null, ["r" => 1, "e" => 1, "xl" => 38]], 
        "sub_type" => ["subType", "string", null, "getSubType", "setSubType", null, ["r" => 0, "e" => 1, "xl" => 38]]
    ];

    /**
     * FlowCustomTransactionPKArgsInner
     *
     * @param  array  $data  Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }

    /**
     * Get allowable values
     *
     * @return array|null
     */
    public function getTypeAllowableValues(): ?array {
        return [
            self::TYPE_IDENTITY,
            self::TYPE_U_INT,
            self::TYPE_INT,
            self::TYPE_U_INT8,
            self::TYPE_INT8,
            self::TYPE_U_INT16,
            self::TYPE_INT16,
            self::TYPE_U_INT32,
            self::TYPE_INT32,
            self::TYPE_U_INT64,
            self::TYPE_INT64,
            self::TYPE_U_INT128,
            self::TYPE_INT128,
            self::TYPE_U_INT256,
            self::TYPE_INT256,
            self::TYPE_WORD8,
            self::TYPE_WORD16,
            self::TYPE_WORD32,
            self::TYPE_WORD64,
            self::TYPE_U_FIX64,
            self::TYPE_FIX64,
            self::TYPE_STRING,
            self::TYPE_CHARACTER,
            self::TYPE_BOOL,
            self::TYPE_ADDRESS,
            self::TYPE_VOID,
            self::TYPE_OPTIONAL,
            self::TYPE_REFERENCE,
            self::TYPE__ARRAY,
            self::TYPE_DICTIONARY,
            self::TYPE_EVENT,
            self::TYPE_RESOURCE,
            self::TYPE_STRUCT,
        ];
    }

    /**
     * Get allowable values
     *
     * @return array|null
     */
    public function getSubTypeAllowableValues(): ?array {
        return [
            self::SUB_TYPE_IDENTITY,
            self::SUB_TYPE_U_INT,
            self::SUB_TYPE_INT,
            self::SUB_TYPE_U_INT8,
            self::SUB_TYPE_INT8,
            self::SUB_TYPE_U_INT16,
            self::SUB_TYPE_INT16,
            self::SUB_TYPE_U_INT32,
            self::SUB_TYPE_INT32,
            self::SUB_TYPE_U_INT64,
            self::SUB_TYPE_INT64,
            self::SUB_TYPE_U_INT128,
            self::SUB_TYPE_INT128,
            self::SUB_TYPE_U_INT256,
            self::SUB_TYPE_INT256,
            self::SUB_TYPE_WORD8,
            self::SUB_TYPE_WORD16,
            self::SUB_TYPE_WORD32,
            self::SUB_TYPE_WORD64,
            self::SUB_TYPE_U_FIX64,
            self::SUB_TYPE_FIX64,
            self::SUB_TYPE_STRING,
            self::SUB_TYPE_CHARACTER,
            self::SUB_TYPE_BOOL,
            self::SUB_TYPE_ADDRESS,
            self::SUB_TYPE_VOID,
            self::SUB_TYPE_OPTIONAL,
            self::SUB_TYPE_REFERENCE,
            self::SUB_TYPE__ARRAY,
            self::SUB_TYPE_DICTIONARY,
            self::SUB_TYPE_EVENT,
            self::SUB_TYPE_RESOURCE,
            self::SUB_TYPE_STRUCT,
        ];
    }

    /**
     * Get value
     *
     * @return \Tatum\Model\FlowCustomTransactionPKArgsInnerValue|null
     */
    public function getValue(): ?\Tatum\Model\FlowCustomTransactionPKArgsInnerValue {
        return $this->_data["value"];
    }

    /**
     * Set value
     * 
     * @param \Tatum\Model\FlowCustomTransactionPKArgsInnerValue $value value
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setValue(\Tatum\Model\FlowCustomTransactionPKArgsInnerValue $value) {
        return $this->_set("value", $value);
    }

    /**
     * Get type
     *
     * @return string|null
     */
    public function getType(): ?string {
        return $this->_data["type"];
    }

    /**
     * Set type
     * 
     * @param string $type Type of the argument
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setType(string $type) {
        return $this->_set("type", $type);
    }

    /**
     * Get sub_type
     *
     * @return string|null
     */
    public function getSubType(): ?string {
        return $this->_data["sub_type"];
    }

    /**
     * Set sub_type
     * 
     * @param string|null $sub_type Type of the argument
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSubType(?string $sub_type) {
        return $this->_set("sub_type", $sub_type);
    }
}
