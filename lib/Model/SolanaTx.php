<?php

/**
 * SolanaTx Model
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
 * SolanaTx Model
 */
class SolanaTx extends AbstractModel {

    public const _D = null;
    protected static $_name = "SolanaTx";
    protected static $_definition = [
        "block_time" => ["blockTime", "float", null, "getBlockTime", "setBlockTime", null, ["r" => 0]], 
        "meta" => ["meta", "\Tatum\Model\SolanaTxMeta", null, "getMeta", "setMeta", null, ["r" => 0]], 
        "transaction" => ["transaction", "\Tatum\Model\SolanaTxTransaction", null, "getTransaction", "setTransaction", null, ["r" => 0]], 
        "slot" => ["slot", "float", null, "getSlot", "setSlot", null, ["r" => 0]]
    ];

    /**
     * SolanaTx
     *
     * @param  array  $data  Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get block_time
     *
     * @return float|null
     */
    public function getBlockTime(): ?float {
        return $this->_data["block_time"];
    }

    /**
     * Set block_time
     * 
     * @param float|null $block_time block_time
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setBlockTime(?float $block_time) {
        return $this->_set("block_time", $block_time);
    }

    /**
     * Get meta
     *
     * @return \Tatum\Model\SolanaTxMeta|null
     */
    public function getMeta(): ?\Tatum\Model\SolanaTxMeta {
        return $this->_data["meta"];
    }

    /**
     * Set meta
     * 
     * @param \Tatum\Model\SolanaTxMeta|null $meta meta
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setMeta(?\Tatum\Model\SolanaTxMeta $meta) {
        return $this->_set("meta", $meta);
    }

    /**
     * Get transaction
     *
     * @return \Tatum\Model\SolanaTxTransaction|null
     */
    public function getTransaction(): ?\Tatum\Model\SolanaTxTransaction {
        return $this->_data["transaction"];
    }

    /**
     * Set transaction
     * 
     * @param \Tatum\Model\SolanaTxTransaction|null $transaction transaction
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTransaction(?\Tatum\Model\SolanaTxTransaction $transaction) {
        return $this->_set("transaction", $transaction);
    }

    /**
     * Get slot
     *
     * @return float|null
     */
    public function getSlot(): ?float {
        return $this->_data["slot"];
    }

    /**
     * Set slot
     * 
     * @param float|null $slot slot
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSlot(?float $slot) {
        return $this->_set("slot", $slot);
    }
}
