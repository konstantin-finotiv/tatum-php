<?php

/**
 * ApproveNftSpendingCeloKMS Model
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
 * ApproveNftSpendingCeloKMS Model
 */
class ApproveNftSpendingCeloKMS extends AbstractModel {

    public const _D = null;
    public const CHAIN_CELO = 'CELO';
    protected static $_name = "ApproveNftSpendingCeloKMS";
    protected static $_definition = [
        "chain" => ["chain", "string", null, "getChain", "setChain", null, ["r" => 1, "e" => 1]], 
        "spender" => ["spender", "string", null, "getSpender", "setSpender", null, ["r" => 1, "nl" => 42, "xl" => 42]], 
        "is_erc721" => ["isErc721", "bool", null, "getIsErc721", "setIsErc721", null, ["r" => 1]], 
        "token_id" => ["tokenId", "string", null, "getTokenId", "setTokenId", null, ["r" => 1, "xl" => 256]], 
        "contract_address" => ["contractAddress", "string", null, "getContractAddress", "setContractAddress", null, ["r" => 1, "nl" => 42, "xl" => 42]], 
        "signature_id" => ["signatureId", "string", 'uuid', "getSignatureId", "setSignatureId", null, ["r" => 1]], 
        "index" => ["index", "float", null, "getIndex", "setIndex", null, ["r" => 0, "n" => [0]]], 
        "fee_currency" => ["feeCurrency", "string", null, "getFeeCurrency", "setFeeCurrency", null, ["r" => 1]], 
        "nonce" => ["nonce", "float", null, "getNonce", "setNonce", null, ["r" => 0]], 
        "fee" => ["fee", "\Tatum\Model\CustomFee", null, "getFee", "setFee", null, ["r" => 0]]
    ];

    /**
     * ApproveNftSpendingCeloKMS
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
    public function getChainAllowableValues(): ?array {
        return [
            self::CHAIN_CELO,
        ];
    }

    /**
     * Get chain
     *
     * @return string|null
     */
    public function getChain(): ?string {
        return $this->_data["chain"];
    }

    /**
     * Set chain
     * 
     * @param string $chain The blockchain to work with
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setChain(string $chain) {
        return $this->_set("chain", $chain);
    }

    /**
     * Get spender
     *
     * @return string|null
     */
    public function getSpender(): ?string {
        return $this->_data["spender"];
    }

    /**
     * Set spender
     * 
     * @param string $spender The blockchain address of the auction/marketplace smart contract
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSpender(string $spender) {
        return $this->_set("spender", $spender);
    }

    /**
     * Get is_erc721
     *
     * @return bool|null
     */
    public function getIsErc721(): ?bool {
        return $this->_data["is_erc721"];
    }

    /**
     * Set is_erc721
     * 
     * @param bool $is_erc721 Set to \"true\" if the asset is an NFT; set to \"false\" is the asset is a Multi Token
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setIsErc721(bool $is_erc721) {
        return $this->_set("is_erc721", $is_erc721);
    }

    /**
     * Get token_id
     *
     * @return string|null
     */
    public function getTokenId(): ?string {
        return $this->_data["token_id"];
    }

    /**
     * Set token_id
     * 
     * @param string $token_id The ID of the asset (NFT or Multi Token)
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTokenId(string $token_id) {
        return $this->_set("token_id", $token_id);
    }

    /**
     * Get contract_address
     *
     * @return string|null
     */
    public function getContractAddress(): ?string {
        return $this->_data["contract_address"];
    }

    /**
     * Set contract_address
     * 
     * @param string $contract_address The blockchain address of the smart contract from which the asset (NFT or Multi Token) was minted
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setContractAddress(string $contract_address) {
        return $this->_set("contract_address", $contract_address);
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
     * @param string $signature_id The KMS identifier of the private key of the blockchain address from which the fee will be deducted
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSignatureId(string $signature_id) {
        return $this->_set("signature_id", $signature_id);
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
     * @param float|null $index (Only if the signature ID is mnemonic-based) The index of the address from which the fee will be deducted that was generated from the mnemonic
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setIndex(?float $index) {
        return $this->_set("index", $index);
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
     * @param string $fee_currency The currency in which the transaction fee will be paid - CELO - CUSD - CEUR
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFeeCurrency(string $fee_currency) {
        return $this->_set("fee_currency", $fee_currency);
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
     * @param float|null $nonce The nonce to be set to the transaction; if not present, the last known nonce will be used
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setNonce(?float $nonce) {
        return $this->_set("nonce", $nonce);
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
}
