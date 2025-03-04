<?php

/**
 * BnbTransaction Model
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
 * BnbTransaction Model
 */
class BnbTransaction extends AbstractModel {

    public const _D = null;
    protected static $_name = "BnbTransaction";
    protected static $_definition = [
        "tx_hash" => ["txHash", "string", null, "getTxHash", "setTxHash", null, ["r" => 0]], 
        "block_height" => ["blockHeight", "float", null, "getBlockHeight", "setBlockHeight", null, ["r" => 0]], 
        "tx_type" => ["txType", "string", null, "getTxType", "setTxType", null, ["r" => 0]], 
        "time_stamp" => ["timeStamp", "string", null, "getTimeStamp", "setTimeStamp", null, ["r" => 0]], 
        "from_addr" => ["fromAddr", "string", null, "getFromAddr", "setFromAddr", null, ["r" => 0]], 
        "to_addr" => ["toAddr", "string", null, "getToAddr", "setToAddr", null, ["r" => 0]], 
        "value" => ["value", "string", null, "getValue", "setValue", null, ["r" => 0]], 
        "tx_asset" => ["txAsset", "string", null, "getTxAsset", "setTxAsset", null, ["r" => 0]], 
        "tx_fee" => ["txFee", "string", null, "getTxFee", "setTxFee", null, ["r" => 0]], 
        "code" => ["code", "float", null, "getCode", "setCode", null, ["r" => 0]], 
        "memo" => ["memo", "string", null, "getMemo", "setMemo", null, ["r" => 0]], 
        "source" => ["source", "float", null, "getSource", "setSource", null, ["r" => 0]], 
        "sequence" => ["sequence", "float", null, "getSequence", "setSequence", null, ["r" => 0]]
    ];

    /**
     * BnbTransaction
     *
     * @param  array  $data  Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get tx_hash
     *
     * @return string|null
     */
    public function getTxHash(): ?string {
        return $this->_data["tx_hash"];
    }

    /**
     * Set tx_hash
     * 
     * @param string|null $tx_hash tx_hash
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTxHash(?string $tx_hash) {
        return $this->_set("tx_hash", $tx_hash);
    }

    /**
     * Get block_height
     *
     * @return float|null
     */
    public function getBlockHeight(): ?float {
        return $this->_data["block_height"];
    }

    /**
     * Set block_height
     * 
     * @param float|null $block_height block_height
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setBlockHeight(?float $block_height) {
        return $this->_set("block_height", $block_height);
    }

    /**
     * Get tx_type
     *
     * @return string|null
     */
    public function getTxType(): ?string {
        return $this->_data["tx_type"];
    }

    /**
     * Set tx_type
     * 
     * @param string|null $tx_type tx_type
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTxType(?string $tx_type) {
        return $this->_set("tx_type", $tx_type);
    }

    /**
     * Get time_stamp
     *
     * @return string|null
     */
    public function getTimeStamp(): ?string {
        return $this->_data["time_stamp"];
    }

    /**
     * Set time_stamp
     * 
     * @param string|null $time_stamp time_stamp
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTimeStamp(?string $time_stamp) {
        return $this->_set("time_stamp", $time_stamp);
    }

    /**
     * Get from_addr
     *
     * @return string|null
     */
    public function getFromAddr(): ?string {
        return $this->_data["from_addr"];
    }

    /**
     * Set from_addr
     * 
     * @param string|null $from_addr from_addr
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFromAddr(?string $from_addr) {
        return $this->_set("from_addr", $from_addr);
    }

    /**
     * Get to_addr
     *
     * @return string|null
     */
    public function getToAddr(): ?string {
        return $this->_data["to_addr"];
    }

    /**
     * Set to_addr
     * 
     * @param string|null $to_addr to_addr
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setToAddr(?string $to_addr) {
        return $this->_set("to_addr", $to_addr);
    }

    /**
     * Get value
     *
     * @return string|null
     */
    public function getValue(): ?string {
        return $this->_data["value"];
    }

    /**
     * Set value
     * 
     * @param string|null $value value
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setValue(?string $value) {
        return $this->_set("value", $value);
    }

    /**
     * Get tx_asset
     *
     * @return string|null
     */
    public function getTxAsset(): ?string {
        return $this->_data["tx_asset"];
    }

    /**
     * Set tx_asset
     * 
     * @param string|null $tx_asset tx_asset
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTxAsset(?string $tx_asset) {
        return $this->_set("tx_asset", $tx_asset);
    }

    /**
     * Get tx_fee
     *
     * @return string|null
     */
    public function getTxFee(): ?string {
        return $this->_data["tx_fee"];
    }

    /**
     * Set tx_fee
     * 
     * @param string|null $tx_fee tx_fee
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTxFee(?string $tx_fee) {
        return $this->_set("tx_fee", $tx_fee);
    }

    /**
     * Get code
     *
     * @return float|null
     */
    public function getCode(): ?float {
        return $this->_data["code"];
    }

    /**
     * Set code
     * 
     * @param float|null $code code
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setCode(?float $code) {
        return $this->_set("code", $code);
    }

    /**
     * Get memo
     *
     * @return string|null
     */
    public function getMemo(): ?string {
        return $this->_data["memo"];
    }

    /**
     * Set memo
     * 
     * @param string|null $memo memo
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setMemo(?string $memo) {
        return $this->_set("memo", $memo);
    }

    /**
     * Get source
     *
     * @return float|null
     */
    public function getSource(): ?float {
        return $this->_data["source"];
    }

    /**
     * Set source
     * 
     * @param float|null $source source
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSource(?float $source) {
        return $this->_set("source", $source);
    }

    /**
     * Get sequence
     *
     * @return float|null
     */
    public function getSequence(): ?float {
        return $this->_data["sequence"];
    }

    /**
     * Set sequence
     * 
     * @param float|null $sequence sequence
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSequence(?float $sequence) {
        return $this->_set("sequence", $sequence);
    }
}
