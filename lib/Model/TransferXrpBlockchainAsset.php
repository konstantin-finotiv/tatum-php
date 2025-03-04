<?php

/**
 * TransferXrpBlockchainAsset Model
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
 * TransferXrpBlockchainAsset Model
 */
class TransferXrpBlockchainAsset extends AbstractModel {

    public const _D = null;
    protected static $_name = "TransferXrpBlockchainAsset";
    protected static $_definition = [
        "from_account" => ["fromAccount", "string", null, "getFromAccount", "setFromAccount", null, ["r" => 1, "nl" => 33, "xl" => 34]], 
        "to" => ["to", "string", null, "getTo", "setTo", null, ["r" => 1, "nl" => 33, "xl" => 34]], 
        "amount" => ["amount", "string", null, "getAmount", "setAmount", null, ["r" => 1, "p" => "/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/"]], 
        "from_secret" => ["fromSecret", "string", null, "getFromSecret", "setFromSecret", null, ["r" => 1, "nl" => 29, "xl" => 29]], 
        "fee" => ["fee", "string", null, "getFee", "setFee", null, ["r" => 0, "p" => "/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/"]], 
        "source_tag" => ["sourceTag", "int", null, "getSourceTag", "setSourceTag", null, ["r" => 0]], 
        "destination_tag" => ["destinationTag", "int", null, "getDestinationTag", "setDestinationTag", null, ["r" => 0]], 
        "issuer_account" => ["issuerAccount", "string", null, "getIssuerAccount", "setIssuerAccount", null, ["r" => 1, "nl" => 33, "xl" => 34]], 
        "token" => ["token", "string", null, "getToken", "setToken", null, ["r" => 1, "p" => "/^[A-F0-9]{40}$/", "nl" => 40, "xl" => 40]]
    ];

    /**
     * TransferXrpBlockchainAsset
     *
     * @param  array  $data  Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get from_account
     *
     * @return string|null
     */
    public function getFromAccount(): ?string {
        return $this->_data["from_account"];
    }

    /**
     * Set from_account
     * 
     * @param string $from_account XRP account address. Must be the one used for generating deposit tags.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFromAccount(string $from_account) {
        return $this->_set("from_account", $from_account);
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
     * @param string $amount Amount to be sent, in XRP.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAmount(string $amount) {
        return $this->_set("amount", $amount);
    }

    /**
     * Get from_secret
     *
     * @return string|null
     */
    public function getFromSecret(): ?string {
        return $this->_data["from_secret"];
    }

    /**
     * Set from_secret
     * 
     * @param string $from_secret Secret for account. Secret, or signature Id must be present.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFromSecret(string $from_secret) {
        return $this->_set("from_secret", $from_secret);
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
     * @param string|null $fee Fee to be paid, in XRP. If omitted, current fee will be calculated.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFee(?string $fee) {
        return $this->_set("fee", $fee);
    }

    /**
     * Get source_tag
     *
     * @return int|null
     */
    public function getSourceTag(): ?int {
        return $this->_data["source_tag"];
    }

    /**
     * Set source_tag
     * 
     * @param int|null $source_tag Source tag of sender account, if any.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSourceTag(?int $source_tag) {
        return $this->_set("source_tag", $source_tag);
    }

    /**
     * Get destination_tag
     *
     * @return int|null
     */
    public function getDestinationTag(): ?int {
        return $this->_data["destination_tag"];
    }

    /**
     * Set destination_tag
     * 
     * @param int|null $destination_tag Destination tag of recipient account, if any.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setDestinationTag(?int $destination_tag) {
        return $this->_set("destination_tag", $destination_tag);
    }

    /**
     * Get issuer_account
     *
     * @return string|null
     */
    public function getIssuerAccount(): ?string {
        return $this->_data["issuer_account"];
    }

    /**
     * Set issuer_account
     * 
     * @param string $issuer_account Blockchain address of the issuer of the assets to create trust line for.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setIssuerAccount(string $issuer_account) {
        return $this->_set("issuer_account", $issuer_account);
    }

    /**
     * Get token
     *
     * @return string|null
     */
    public function getToken(): ?string {
        return $this->_data["token"];
    }

    /**
     * Set token
     * 
     * @param string $token Asset name. Must be 160bit HEX string, e.g. SHA1.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setToken(string $token) {
        return $this->_set("token", $token);
    }
}
