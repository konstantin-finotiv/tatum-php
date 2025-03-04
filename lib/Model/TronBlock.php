<?php

/**
 * TronBlock Model
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
 * TronBlock Model
 */
class TronBlock extends AbstractModel {

    public const _D = null;
    protected static $_name = "TronBlock";
    protected static $_definition = [
        "hash" => ["hash", "string", null, "getHash", "setHash", null, ["r" => 0]], 
        "block_number" => ["blockNumber", "float", null, "getBlockNumber", "setBlockNumber", null, ["r" => 0]], 
        "timestamp" => ["timestamp", "float", null, "getTimestamp", "setTimestamp", null, ["r" => 0]], 
        "parent_hash" => ["parentHash", "string", null, "getParentHash", "setParentHash", null, ["r" => 0]], 
        "witness_address" => ["witnessAddress", "string", null, "getWitnessAddress", "setWitnessAddress", null, ["r" => 0]], 
        "witness_signature" => ["witnessSignature", "string", null, "getWitnessSignature", "setWitnessSignature", null, ["r" => 0]], 
        "transactions" => ["transactions", "\Tatum\Model\TronTx[]", null, "getTransactions", "setTransactions", null, ["r" => 0, "c" => 1]]
    ];

    /**
     * TronBlock
     *
     * @param  array  $data  Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get hash
     *
     * @return string|null
     */
    public function getHash(): ?string {
        return $this->_data["hash"];
    }

    /**
     * Set hash
     * 
     * @param string|null $hash Block hash
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setHash(?string $hash) {
        return $this->_set("hash", $hash);
    }

    /**
     * Get block_number
     *
     * @return float|null
     */
    public function getBlockNumber(): ?float {
        return $this->_data["block_number"];
    }

    /**
     * Set block_number
     * 
     * @param float|null $block_number Block number.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setBlockNumber(?float $block_number) {
        return $this->_set("block_number", $block_number);
    }

    /**
     * Get timestamp
     *
     * @return float|null
     */
    public function getTimestamp(): ?float {
        return $this->_data["timestamp"];
    }

    /**
     * Set timestamp
     * 
     * @param float|null $timestamp Time of the block in UTC millis.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTimestamp(?float $timestamp) {
        return $this->_set("timestamp", $timestamp);
    }

    /**
     * Get parent_hash
     *
     * @return string|null
     */
    public function getParentHash(): ?string {
        return $this->_data["parent_hash"];
    }

    /**
     * Set parent_hash
     * 
     * @param string|null $parent_hash Hash of the parent block.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setParentHash(?string $parent_hash) {
        return $this->_set("parent_hash", $parent_hash);
    }

    /**
     * Get witness_address
     *
     * @return string|null
     */
    public function getWitnessAddress(): ?string {
        return $this->_data["witness_address"];
    }

    /**
     * Set witness_address
     * 
     * @param string|null $witness_address Witness address.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setWitnessAddress(?string $witness_address) {
        return $this->_set("witness_address", $witness_address);
    }

    /**
     * Get witness_signature
     *
     * @return string|null
     */
    public function getWitnessSignature(): ?string {
        return $this->_data["witness_signature"];
    }

    /**
     * Set witness_signature
     * 
     * @param string|null $witness_signature Witness signature.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setWitnessSignature(?string $witness_signature) {
        return $this->_set("witness_signature", $witness_signature);
    }

    /**
     * Get transactions
     *
     * @return \Tatum\Model\TronTx[]|null
     */
    public function getTransactions(): ?array {
        return $this->_data["transactions"];
    }

    /**
     * Set transactions
     * 
     * @param \Tatum\Model\TronTx[]|null $transactions Transactions that occurs in this block.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTransactions(?array $transactions) {
        return $this->_set("transactions", $transactions);
    }
}
