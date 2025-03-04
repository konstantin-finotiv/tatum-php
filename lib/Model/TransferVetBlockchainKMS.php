<?php

/**
 * TransferVetBlockchainKMS Model
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
 * TransferVetBlockchainKMS Model
 */
class TransferVetBlockchainKMS extends AbstractModel {

    public const _D = null;
    protected static $_name = "TransferVetBlockchainKMS";
    protected static $_definition = [
        "to" => ["to", "string", null, "getTo", "setTo", null, ["r" => 1, "nl" => 1, "xl" => 100]], 
        "amount" => ["amount", "string", null, "getAmount", "setAmount", null, ["r" => 1, "p" => "/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/"]], 
        "signature_id" => ["signatureId", "string", 'uuid', "getSignatureId", "setSignatureId", null, ["r" => 1]], 
        "data" => ["data", "string", null, "getData", "setData", null, ["r" => 0, "xl" => 10000]], 
        "fee" => ["fee", "\Tatum\Model\TransferVetBlockchainFee", null, "getFee", "setFee", null, ["r" => 0]]
    ];

    /**
     * TransferVetBlockchainKMS
     *
     * @param  array  $data  Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get to
     *
     * @return string|null
     */
    public function getTo(): ?string {
        return $this->_data["to"];
    }

    /**
     * Set to
     * 
     * @param string $to Blockchain address to send assets
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTo(string $to) {
        return $this->_set("to", $to);
    }

    /**
     * Get amount
     *
     * @return string|null
     */
    public function getAmount(): ?string {
        return $this->_data["amount"];
    }

    /**
     * Set amount
     * 
     * @param string $amount Amount to be sent in VET
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAmount(string $amount) {
        return $this->_set("amount", $amount);
    }

    /**
     * Get signature_id
     *
     * @return string|null
     */
    public function getSignatureId(): ?string {
        return $this->_data["signature_id"];
    }

    /**
     * Set signature_id
     * 
     * @param string $signature_id Identifier of the private key associated in signing application. Private key, or signature Id must be present.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSignatureId(string $signature_id) {
        return $this->_set("signature_id", $signature_id);
    }

    /**
     * Get data
     *
     * @return string|null
     */
    public function getData(): ?string {
        return $this->_data["data"];
    }

    /**
     * Set data
     * 
     * @param string|null $data Additional data that can be passed to a blockchain transaction as a data property; must be in the hexadecimal format
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setData(?string $data) {
        return $this->_set("data", $data);
    }

    /**
     * Get fee
     *
     * @return \Tatum\Model\TransferVetBlockchainFee|null
     */
    public function getFee(): ?\Tatum\Model\TransferVetBlockchainFee {
        return $this->_data["fee"];
    }

    /**
     * Set fee
     * 
     * @param \Tatum\Model\TransferVetBlockchainFee|null $fee fee
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFee(?\Tatum\Model\TransferVetBlockchainFee $fee) {
        return $this->_set("fee", $fee);
    }
}
