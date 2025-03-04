<?php

/**
 * EgldBlock Model
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
 * EgldBlock Model
 */
class EgldBlock extends AbstractModel {

    public const _D = null;
    protected static $_name = "EgldBlock";
    protected static $_definition = [
        "nonce" => ["nonce", "float", null, "getNonce", "setNonce", null, ["r" => 0]], 
        "round" => ["round", "float", null, "getRound", "setRound", null, ["r" => 0]], 
        "hash" => ["hash", "string", null, "getHash", "setHash", null, ["r" => 0]], 
        "prev_block_hash" => ["prevBlockHash", "string", null, "getPrevBlockHash", "setPrevBlockHash", null, ["r" => 0]], 
        "epoch" => ["epoch", "float", null, "getEpoch", "setEpoch", null, ["r" => 0]], 
        "num_txs" => ["numTxs", "float", null, "getNumTxs", "setNumTxs", null, ["r" => 0]], 
        "shard_blocks" => ["shardBlocks", "\Tatum\Model\EgldShardBlock[]", null, "getShardBlocks", "setShardBlocks", null, ["r" => 0, "c" => 1]], 
        "transactions" => ["transactions", "\Tatum\Model\EgldTx[]", null, "getTransactions", "setTransactions", null, ["r" => 0, "c" => 1]]
    ];

    /**
     * EgldBlock
     *
     * @param  array  $data  Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get nonce
     *
     * @return float|null
     */
    public function getNonce(): ?float {
        return $this->_data["nonce"];
    }

    /**
     * Set nonce
     * 
     * @param float|null $nonce The block height.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setNonce(?float $nonce) {
        return $this->_set("nonce", $nonce);
    }

    /**
     * Get round
     *
     * @return float|null
     */
    public function getRound(): ?float {
        return $this->_data["round"];
    }

    /**
     * Set round
     * 
     * @param float|null $round The round number.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setRound(?float $round) {
        return $this->_set("round", $round);
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
     * @param string|null $hash Hash of the block.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setHash(?string $hash) {
        return $this->_set("hash", $hash);
    }

    /**
     * Get prev_block_hash
     *
     * @return string|null
     */
    public function getPrevBlockHash(): ?string {
        return $this->_data["prev_block_hash"];
    }

    /**
     * Set prev_block_hash
     * 
     * @param string|null $prev_block_hash Hash of the previous block.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setPrevBlockHash(?string $prev_block_hash) {
        return $this->_set("prev_block_hash", $prev_block_hash);
    }

    /**
     * Get epoch
     *
     * @return float|null
     */
    public function getEpoch(): ?float {
        return $this->_data["epoch"];
    }

    /**
     * Set epoch
     * 
     * @param float|null $epoch An epoch is a sequence of consecutive rounds during which the configuration of the network does not change (currently aprox. 24 hrs in length).
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setEpoch(?float $epoch) {
        return $this->_set("epoch", $epoch);
    }

    /**
     * Get num_txs
     *
     * @return float|null
     */
    public function getNumTxs(): ?float {
        return $this->_data["num_txs"];
    }

    /**
     * Set num_txs
     * 
     * @param float|null $num_txs Number of transactions in current block.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setNumTxs(?float $num_txs) {
        return $this->_set("num_txs", $num_txs);
    }

    /**
     * Get shard_blocks
     *
     * @return \Tatum\Model\EgldShardBlock[]|null
     */
    public function getShardBlocks(): ?array {
        return $this->_data["shard_blocks"];
    }

    /**
     * Set shard_blocks
     * 
     * @param \Tatum\Model\EgldShardBlock[]|null $shard_blocks Array of shard blocks
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setShardBlocks(?array $shard_blocks) {
        return $this->_set("shard_blocks", $shard_blocks);
    }

    /**
     * Get transactions
     *
     * @return \Tatum\Model\EgldTx[]|null
     */
    public function getTransactions(): ?array {
        return $this->_data["transactions"];
    }

    /**
     * Set transactions
     * 
     * @param \Tatum\Model\EgldTx[]|null $transactions Array of transactions.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTransactions(?array $transactions) {
        return $this->_set("transactions", $transactions);
    }
}
