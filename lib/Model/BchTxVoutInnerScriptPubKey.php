<?php

/**
 * BchTx_vout_inner_scriptPubKey Model
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
 * BchTx_vout_inner_scriptPubKey Model
 */
class BchTxVoutInnerScriptPubKey extends AbstractModel {

    public const _D = null;
    protected static $_name = "BchTx_vout_inner_scriptPubKey";
    protected static $_definition = [
        "hex" => ["hex", "string", null, "getHex", "setHex", null, ["r" => 0]], 
        "asm" => ["asm", "string", null, "getAsm", "setAsm", null, ["r" => 0]], 
        "addresses" => ["addresses", "string[]", null, "getAddresses", "setAddresses", null, ["r" => 0, "c" => 1]], 
        "type" => ["type", "string", null, "getType", "setType", null, ["r" => 0]]
    ];

    /**
     * BchTxVoutInnerScriptPubKey
     *
     * @param  array  $data  Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get hex
     *
     * @return string|null
     */
    public function getHex(): ?string {
        return $this->_data["hex"];
    }

    /**
     * Set hex
     * 
     * @param string|null $hex hex
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setHex(?string $hex) {
        return $this->_set("hex", $hex);
    }

    /**
     * Get asm
     *
     * @return string|null
     */
    public function getAsm(): ?string {
        return $this->_data["asm"];
    }

    /**
     * Set asm
     * 
     * @param string|null $asm asm
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAsm(?string $asm) {
        return $this->_set("asm", $asm);
    }

    /**
     * Get addresses
     *
     * @return string[]|null
     */
    public function getAddresses(): ?array {
        return $this->_data["addresses"];
    }

    /**
     * Set addresses
     * 
     * @param string[]|null $addresses addresses
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAddresses(?array $addresses) {
        return $this->_set("addresses", $addresses);
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
     * @param string|null $type type
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setType(?string $type) {
        return $this->_set("type", $type);
    }
}
