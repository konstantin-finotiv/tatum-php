<?php

/**
 * TransferCeloBlockchainKMS Model
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
 * TransferCeloBlockchainKMS Model
 */
class TransferCeloBlockchainKMS extends AbstractModel {

    public const _D = null;
    public const CURRENCY_CELO = 'CELO';
    public const CURRENCY_CUSD = 'CUSD';
    public const CURRENCY_CEUR = 'CEUR';
    public const FEE_CURRENCY_CELO = 'CELO';
    public const FEE_CURRENCY_CUSD = 'CUSD';
    public const FEE_CURRENCY_CEUR = 'CEUR';
    protected static $_name = "TransferCeloBlockchainKMS";
    protected static $_definition = [
        "data" => ["data", "string", null, "getData", "setData", null, ["r" => 0, "xl" => 50000]], 
        "nonce" => ["nonce", "float", null, "getNonce", "setNonce", null, ["r" => 0, "n" => [0]]], 
        "currency" => ["currency", "string", null, "getCurrency", "setCurrency", null, ["r" => 1, "e" => 1]], 
        "fee" => ["fee", "\Tatum\Model\CustomFee", null, "getFee", "setFee", null, ["r" => 0]], 
        "to" => ["to", "string", null, "getTo", "setTo", null, ["r" => 1, "nl" => 42, "xl" => 42]], 
        "fee_currency" => ["feeCurrency", "string", null, "getFeeCurrency", "setFeeCurrency", null, ["r" => 1, "e" => 1]], 
        "amount" => ["amount", "string", null, "getAmount", "setAmount", null, ["r" => 1, "p" => "/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/"]], 
        "index" => ["index", "float", null, "getIndex", "setIndex", null, ["r" => 0, "n" => [0]]], 
        "signature_id" => ["signatureId", "string", 'uuid', "getSignatureId", "setSignatureId", null, ["r" => 1]]
    ];

    /**
     * TransferCeloBlockchainKMS
     *
     * @param  array  $data  Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }

    /**
     * Get allowable values
     *
     * @return array|null
     */
    public function getCurrencyAllowableValues(): ?array {
        return [
            self::CURRENCY_CELO,
            self::CURRENCY_CUSD,
            self::CURRENCY_CEUR,
        ];
    }

    /**
     * Get allowable values
     *
     * @return array|null
     */
    public function getFeeCurrencyAllowableValues(): ?array {
        return [
            self::FEE_CURRENCY_CELO,
            self::FEE_CURRENCY_CUSD,
            self::FEE_CURRENCY_CEUR,
        ];
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
     * @param float|null $nonce Nonce to be set to Celo transaction. If not present, last known nonce will be used.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setNonce(?float $nonce) {
        return $this->_set("nonce", $nonce);
    }

    /**
     * Get currency
     *
     * @return string|null
     */
    public function getCurrency(): ?string {
        return $this->_data["currency"];
    }

    /**
     * Set currency
     * 
     * @param string $currency Currency of the transaction
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setCurrency(string $currency) {
        return $this->_set("currency", $currency);
    }

    /**
     * Get fee
     *
     * @return \Tatum\Model\CustomFee|null
     */
    public function getFee(): ?\Tatum\Model\CustomFee {
        return $this->_data["fee"];
    }

    /**
     * Set fee
     * 
     * @param \Tatum\Model\CustomFee|null $fee fee
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFee(?\Tatum\Model\CustomFee $fee) {
        return $this->_set("fee", $fee);
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
     * Get fee_currency
     *
     * @return string|null
     */
    public function getFeeCurrency(): ?string {
        return $this->_data["fee_currency"];
    }

    /**
     * Set fee_currency
     * 
     * @param string $fee_currency Currency to pay for transaction gas
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFeeCurrency(string $fee_currency) {
        return $this->_set("fee_currency", $fee_currency);
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
     * @param string $amount Amount to be sent.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAmount(string $amount) {
        return $this->_set("amount", $amount);
    }

    /**
     * Get index
     *
     * @return float|null
     */
    public function getIndex(): ?float {
        return $this->_data["index"];
    }

    /**
     * Set index
     * 
     * @param float|null $index If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setIndex(?float $index) {
        return $this->_set("index", $index);
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
}
