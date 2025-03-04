<?php

/**
 * VetBlock Model
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
 * VetBlock Model
 */
class VetBlock extends AbstractModel {

    public const _D = null;
    protected static $_name = "VetBlock";
    protected static $_definition = [
        "number" => ["number", "int", 'uint32', "getNumber", "setNumber", null, ["r" => 0]], 
        "id" => ["id", "string", 'bytes32', "getId", "setId", null, ["r" => 0]], 
        "size" => ["size", "int", 'uint32', "getSize", "setSize", null, ["r" => 0]], 
        "parent_id" => ["parentID", "string", 'bytes32', "getParentId", "setParentId", null, ["r" => 0]], 
        "timestamp" => ["timestamp", "int", 'uint64', "getTimestamp", "setTimestamp", null, ["r" => 0]], 
        "gas_limit" => ["gasLimit", "int", 'uint64', "getGasLimit", "setGasLimit", null, ["r" => 0]], 
        "beneficiary" => ["beneficiary", "string", 'bytes32', "getBeneficiary", "setBeneficiary", null, ["r" => 0]], 
        "gas_used" => ["gasUsed", "int", 'uint64', "getGasUsed", "setGasUsed", null, ["r" => 0]], 
        "total_score" => ["totalScore", "int", 'uint64', "getTotalScore", "setTotalScore", null, ["r" => 0]], 
        "txs_root" => ["txsRoot", "string", 'bytes32', "getTxsRoot", "setTxsRoot", null, ["r" => 0]], 
        "txs_features" => ["txsFeatures", "int", 'uint32', "getTxsFeatures", "setTxsFeatures", null, ["r" => 0]], 
        "state_root" => ["stateRoot", "string", 'bytes32', "getStateRoot", "setStateRoot", null, ["r" => 0]], 
        "receipts_root" => ["receiptsRoot", "string", 'bytes32', "getReceiptsRoot", "setReceiptsRoot", null, ["r" => 0]], 
        "signer" => ["signer", "string", 'bytes20', "getSigner", "setSigner", null, ["r" => 0]], 
        "transactions" => ["transactions", "string[]", 'bytes32', "getTransactions", "setTransactions", null, ["r" => 0, "c" => 1]]
    ];

    /**
     * VetBlock
     *
     * @param  array  $data  Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get number
     *
     * @return int|null
     */
    public function getNumber(): ?int {
        return $this->_data["number"];
    }

    /**
     * Set number
     * 
     * @param int|null $number block number (height)
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setNumber(?int $number) {
        return $this->_set("number", $number);
    }

    /**
     * Get id
     *
     * @return string|null
     */
    public function getId(): ?string {
        return $this->_data["id"];
    }

    /**
     * Set id
     * 
     * @param string|null $id block identifier
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setId(?string $id) {
        return $this->_set("id", $id);
    }

    /**
     * Get size
     *
     * @return int|null
     */
    public function getSize(): ?int {
        return $this->_data["size"];
    }

    /**
     * Set size
     * 
     * @param int|null $size RLP encoded block size in bytes
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSize(?int $size) {
        return $this->_set("size", $size);
    }

    /**
     * Get parent_id
     *
     * @return string|null
     */
    public function getParentId(): ?string {
        return $this->_data["parent_id"];
    }

    /**
     * Set parent_id
     * 
     * @param string|null $parent_id parent block ID
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setParentId(?string $parent_id) {
        return $this->_set("parent_id", $parent_id);
    }

    /**
     * Get timestamp
     *
     * @return int|null
     */
    public function getTimestamp(): ?int {
        return $this->_data["timestamp"];
    }

    /**
     * Set timestamp
     * 
     * @param int|null $timestamp block unix timestamp
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTimestamp(?int $timestamp) {
        return $this->_set("timestamp", $timestamp);
    }

    /**
     * Get gas_limit
     *
     * @return int|null
     */
    public function getGasLimit(): ?int {
        return $this->_data["gas_limit"];
    }

    /**
     * Set gas_limit
     * 
     * @param int|null $gas_limit block gas limit (max allowed accumulative gas usage of transactions)
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setGasLimit(?int $gas_limit) {
        return $this->_set("gas_limit", $gas_limit);
    }

    /**
     * Get beneficiary
     *
     * @return string|null
     */
    public function getBeneficiary(): ?string {
        return $this->_data["beneficiary"];
    }

    /**
     * Set beneficiary
     * 
     * @param string|null $beneficiary Address of account to receive block reward
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setBeneficiary(?string $beneficiary) {
        return $this->_set("beneficiary", $beneficiary);
    }

    /**
     * Get gas_used
     *
     * @return int|null
     */
    public function getGasUsed(): ?int {
        return $this->_data["gas_used"];
    }

    /**
     * Set gas_used
     * 
     * @param int|null $gas_used accumulative gas usage of transactions
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setGasUsed(?int $gas_used) {
        return $this->_set("gas_used", $gas_used);
    }

    /**
     * Get total_score
     *
     * @return int|null
     */
    public function getTotalScore(): ?int {
        return $this->_data["total_score"];
    }

    /**
     * Set total_score
     * 
     * @param int|null $total_score sum of all ancestral blocks' score
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTotalScore(?int $total_score) {
        return $this->_set("total_score", $total_score);
    }

    /**
     * Get txs_root
     *
     * @return string|null
     */
    public function getTxsRoot(): ?string {
        return $this->_data["txs_root"];
    }

    /**
     * Set txs_root
     * 
     * @param string|null $txs_root root hash of transactions in the block
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTxsRoot(?string $txs_root) {
        return $this->_set("txs_root", $txs_root);
    }

    /**
     * Get txs_features
     *
     * @return int|null
     */
    public function getTxsFeatures(): ?int {
        return $this->_data["txs_features"];
    }

    /**
     * Set txs_features
     * 
     * @param int|null $txs_features supported txs features bitset
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTxsFeatures(?int $txs_features) {
        return $this->_set("txs_features", $txs_features);
    }

    /**
     * Get state_root
     *
     * @return string|null
     */
    public function getStateRoot(): ?string {
        return $this->_data["state_root"];
    }

    /**
     * Set state_root
     * 
     * @param string|null $state_root root hash of accounts state
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setStateRoot(?string $state_root) {
        return $this->_set("state_root", $state_root);
    }

    /**
     * Get receipts_root
     *
     * @return string|null
     */
    public function getReceiptsRoot(): ?string {
        return $this->_data["receipts_root"];
    }

    /**
     * Set receipts_root
     * 
     * @param string|null $receipts_root root hash of transaction receipts
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setReceiptsRoot(?string $receipts_root) {
        return $this->_set("receipts_root", $receipts_root);
    }

    /**
     * Get signer
     *
     * @return string|null
     */
    public function getSigner(): ?string {
        return $this->_data["signer"];
    }

    /**
     * Set signer
     * 
     * @param string|null $signer the one who signed this block
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSigner(?string $signer) {
        return $this->_set("signer", $signer);
    }

    /**
     * Get transactions
     *
     * @return string[]|null
     */
    public function getTransactions(): ?array {
        return $this->_data["transactions"];
    }

    /**
     * Set transactions
     * 
     * @param string[]|null $transactions transactions IDs
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTransactions(?array $transactions) {
        return $this->_set("transactions", $transactions);
    }
}
