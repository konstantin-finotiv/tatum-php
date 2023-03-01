<?php

/**
 * TronTx_rawData Model
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
 * TronTx_rawData Model
 * 
 * @description Raw data of the transaction.
 */
class TronTxRawData extends AbstractModel {

    public const _D = null;
    protected static $_name = "TronTx_rawData";
    protected static $_definition = [
        "contract" => ["contract", "\Tatum\Model\TronTxRawDataContractInner[]", null, "getContract", "setContract", null, ["r" => 1, "c" => 1]], 
        "ref_block_bytes" => ["ref_block_bytes", "float", null, "getRefBlockBytes", "setRefBlockBytes", null, ["r" => 0]], 
        "ref_block_hash" => ["ref_block_hash", "float", null, "getRefBlockHash", "setRefBlockHash", null, ["r" => 0]], 
        "expiration" => ["expiration", "float", null, "getExpiration", "setExpiration", null, ["r" => 1]], 
        "timestamp" => ["timestamp", "float", null, "getTimestamp", "setTimestamp", null, ["r" => 1]]
    ];

    /**
     * TronTxRawData
     *
     * @param  array  $data  Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get contract
     *
     * @return \Tatum\Model\TronTxRawDataContractInner[]
     */
    public function getContract(): ?array {
        return $this->_data["contract"];
    }

    /**
     * Set contract
     * 
     * @param \Tatum\Model\TronTxRawDataContractInner[] $contract Smart contract invocations details.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setContract(array $contract) {
        return $this->_set("contract", $contract);
    }

    /**
     * Get ref_block_bytes
     *
     * @return float|null
     */
    public function getRefBlockBytes(): ?float {
        return $this->_data["ref_block_bytes"];
    }

    /**
     * Set ref_block_bytes
     * 
     * @param float|null $ref_block_bytes The height of the transaction reference block.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setRefBlockBytes(?float $ref_block_bytes) {
        return $this->_set("ref_block_bytes", $ref_block_bytes);
    }

    /**
     * Get ref_block_hash
     *
     * @return float|null
     */
    public function getRefBlockHash(): ?float {
        return $this->_data["ref_block_hash"];
    }

    /**
     * Set ref_block_hash
     * 
     * @param float|null $ref_block_hash The hash of the transaction reference block.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setRefBlockHash(?float $ref_block_hash) {
        return $this->_set("ref_block_hash", $ref_block_hash);
    }

    /**
     * Get expiration
     *
     * @return float
     */
    public function getExpiration(): ?float {
        return $this->_data["expiration"];
    }

    /**
     * Set expiration
     * 
     * @param float $expiration Expiration of the transaction.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setExpiration(float $expiration) {
        return $this->_set("expiration", $expiration);
    }

    /**
     * Get timestamp
     *
     * @return float
     */
    public function getTimestamp(): ?float {
        return $this->_data["timestamp"];
    }

    /**
     * Set timestamp
     * 
     * @param float $timestamp Time of the transaction.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTimestamp(float $timestamp) {
        return $this->_set("timestamp", $timestamp);
    }
}
