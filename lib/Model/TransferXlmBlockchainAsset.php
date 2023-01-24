<?php

/**
 * TransferXlmBlockchainAsset Model
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
 * TransferXlmBlockchainAsset Model
 */
class TransferXlmBlockchainAsset extends AbstractModel {

    public const _D = null;
    protected static $_name = "TransferXlmBlockchainAsset";
    protected static $_definition = [
        "from_account" => ["fromAccount", "string", null, "getFromAccount", "setFromAccount", null, ["r" => 1, "nl" => 56, "xl" => 56]], 
        "to" => ["to", "string", null, "getTo", "setTo", null, ["r" => 1, "nl" => 56, "xl" => 56]], 
        "amount" => ["amount", "string", null, "getAmount", "setAmount", null, ["r" => 1, "p" => "/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/"]], 
        "from_secret" => ["fromSecret", "string", null, "getFromSecret", "setFromSecret", null, ["r" => 1, "nl" => 56, "xl" => 56]], 
        "initialize" => ["initialize", "bool", null, "getInitialize", "setInitialize", false, ["r" => 0]], 
        "token" => ["token", "string", null, "getToken", "setToken", null, ["r" => 1, "p" => "/^[a-zA-Z0-9]{1,12}$/", "nl" => 1, "xl" => 12]], 
        "issuer_account" => ["issuerAccount", "string", null, "getIssuerAccount", "setIssuerAccount", null, ["r" => 1, "nl" => 56, "xl" => 56]], 
        "message" => ["message", "string", null, "getMessage", "setMessage", null, ["r" => 0, "p" => "/^[ -~]{0,64}$/", "xl" => 64]]
    ];

    /**
     * TransferXlmBlockchainAsset
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get from_account
     *
     * @return string
     */
    public function getFromAccount(): string {
        return $this->_data["from_account"];
    }

    /**
     * Set from_account
     * 
     * @param string $from_account Blockchain account to send assets from
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFromAccount(string $from_account) {
        return $this->_set("from_account", $from_account);
    }

    /**
     * Get to
     *
     * @return string
     */
    public function getTo(): string {
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
     * @return string
     */
    public function getAmount(): string {
        return $this->_data["amount"];
    }

    /**
     * Set amount
     * 
     * @param string $amount Amount to be sent, in XLM.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAmount(string $amount) {
        return $this->_set("amount", $amount);
    }

    /**
     * Get from_secret
     *
     * @return string
     */
    public function getFromSecret(): string {
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
     * Get initialize
     *
     * @return bool|null
     */
    public function getInitialize(): ?bool {
        return $this->_data["initialize"];
    }

    /**
     * Set initialize
     * 
     * @param bool|null $initialize Set to true, if the destination address is not yet initialized and should be funded for the first time.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setInitialize(?bool $initialize) {
        return $this->_set("initialize", $initialize);
    }

    /**
     * Get token
     *
     * @return string
     */
    public function getToken(): string {
        return $this->_data["token"];
    }

    /**
     * Set token
     * 
     * @param string $token Asset name. If not defined, transaction is being sent in native XLM asset.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setToken(string $token) {
        return $this->_set("token", $token);
    }

    /**
     * Get issuer_account
     *
     * @return string
     */
    public function getIssuerAccount(): string {
        return $this->_data["issuer_account"];
    }

    /**
     * Set issuer_account
     * 
     * @param string $issuer_account Blockchain address of the issuer of the assets to send, if not native XLM asset.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setIssuerAccount(string $issuer_account) {
        return $this->_set("issuer_account", $issuer_account);
    }

    /**
     * Get message
     *
     * @return string|null
     */
    public function getMessage(): ?string {
        return $this->_data["message"];
    }

    /**
     * Set message
     * 
     * @param string|null $message Short message to recipient. It can be either 28 characters long ASCII text, 64 characters long HEX string or uint64 number.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setMessage(?string $message) {
        return $this->_set("message", $message);
    }
}
