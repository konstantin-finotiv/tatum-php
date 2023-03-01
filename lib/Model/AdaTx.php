<?php

/**
 * AdaTx Model
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
 * AdaTx Model
 */
class AdaTx extends AbstractModel {

    public const _D = null;
    protected static $_name = "AdaTx";
    protected static $_definition = [
        "hash" => ["hash", "string", null, "getHash", "setHash", null, ["r" => 0]], 
        "fee" => ["fee", "string", null, "getFee", "setFee", null, ["r" => 0]], 
        "block" => ["block", "\Tatum\Model\AdaTxBlock", null, "getBlock", "setBlock", null, ["r" => 0]], 
        "inputs" => ["inputs", "\Tatum\Model\AdaTxInputsInner[]", null, "getInputs", "setInputs", null, ["r" => 0, "c" => 1]], 
        "outputs" => ["outputs", "\Tatum\Model\AdaUTXO[]", null, "getOutputs", "setOutputs", null, ["r" => 0, "c" => 1]]
    ];

    /**
     * AdaTx
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
     * @param string|null $hash Transaction hash.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setHash(?string $hash) {
        return $this->_set("hash", $hash);
    }

    /**
     * Get fee
     *
     * @return string|null
     */
    public function getFee(): ?string {
        return $this->_data["fee"];
    }

    /**
     * Set fee
     * 
     * @param string|null $fee Fee paid for this transaction, in ADA.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFee(?string $fee) {
        return $this->_set("fee", $fee);
    }

    /**
     * Get block
     *
     * @return \Tatum\Model\AdaTxBlock|null
     */
    public function getBlock(): ?\Tatum\Model\AdaTxBlock {
        return $this->_data["block"];
    }

    /**
     * Set block
     * 
     * @param \Tatum\Model\AdaTxBlock|null $block block
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setBlock(?\Tatum\Model\AdaTxBlock $block) {
        return $this->_set("block", $block);
    }

    /**
     * Get inputs
     *
     * @return \Tatum\Model\AdaTxInputsInner[]|null
     */
    public function getInputs(): ?array {
        return $this->_data["inputs"];
    }

    /**
     * Set inputs
     * 
     * @param \Tatum\Model\AdaTxInputsInner[]|null $inputs List of transactions, from which assets are being sent.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setInputs(?array $inputs) {
        return $this->_set("inputs", $inputs);
    }

    /**
     * Get outputs
     *
     * @return \Tatum\Model\AdaUTXO[]|null
     */
    public function getOutputs(): ?array {
        return $this->_data["outputs"];
    }

    /**
     * Set outputs
     * 
     * @param \Tatum\Model\AdaUTXO[]|null $outputs List of recipient addresses and amounts to send to each of them.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setOutputs(?array $outputs) {
        return $this->_set("outputs", $outputs);
    }
}
