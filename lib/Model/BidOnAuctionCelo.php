<?php

/**
 * BidOnAuctionCelo Model
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
 * BidOnAuctionCelo Model
 */
class BidOnAuctionCelo extends AbstractModel {

    public const _D = null;
    public const CHAIN_CELO = 'CELO';
    public const FEE_CURRENCY_CELO = 'CELO';
    public const FEE_CURRENCY_CUSD = 'CUSD';
    public const FEE_CURRENCY_CEUR = 'CEUR';
    protected static $_name = "BidOnAuctionCelo";
    protected static $_definition = [
        "chain" => ["chain", "string", null, "getChain", "setChain", null, ["r" => 1, "e" => 1]], 
        "fee_currency" => ["feeCurrency", "string", null, "getFeeCurrency", "setFeeCurrency", null, ["r" => 1, "e" => 1]], 
        "contract_address" => ["contractAddress", "string", null, "getContractAddress", "setContractAddress", null, ["r" => 1, "nl" => 42, "xl" => 42]], 
        "erc20_address" => ["erc20Address", "string", null, "getErc20Address", "setErc20Address", null, ["r" => 0, "nl" => 42, "xl" => 42]], 
        "bidder" => ["bidder", "string", null, "getBidder", "setBidder", null, ["r" => 0, "nl" => 42, "xl" => 42]], 
        "id" => ["id", "string", null, "getId", "setId", null, ["r" => 1, "nl" => 1, "xl" => 200]], 
        "bid_value" => ["bidValue", "string", null, "getBidValue", "setBidValue", null, ["r" => 1, "p" => "/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/"]], 
        "from_private_key" => ["fromPrivateKey", "string", null, "getFromPrivateKey", "setFromPrivateKey", null, ["r" => 1, "nl" => 66, "xl" => 66]], 
        "nonce" => ["nonce", "float", null, "getNonce", "setNonce", null, ["r" => 0]], 
        "fee" => ["fee", "\Tatum\Model\DeployErc20Fee", null, "getFee", "setFee", null, ["r" => 0]]
    ];

    /**
     * BidOnAuctionCelo
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
     * @return string[]
     */
    public function getChainAllowableValues(): ?array {
        return [
            self::CHAIN_CELO,
        ];
    }
    /**
     * Get allowable values
     *
     * @return string[]
     */
    public function getFeeCurrencyAllowableValues(): ?array {
        return [
            self::FEE_CURRENCY_CELO,
            self::FEE_CURRENCY_CUSD,
            self::FEE_CURRENCY_CEUR,
        ];
    }

    /**
     * Get chain
     *
     * @return string
     */
    public function getChain(): ?string {
        return $this->_data["chain"];
    }

    /**
     * Set chain
     * 
     * @param string $chain Blockchain to work with.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setChain(string $chain) {
        return $this->_set("chain", $chain);
    }

    /**
     * Get fee_currency
     *
     * @return string
     */
    public function getFeeCurrency(): ?string {
        return $this->_data["fee_currency"];
    }

    /**
     * Set fee_currency
     * 
     * @param string $fee_currency The currency in which the transaction fee will be paid
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFeeCurrency(string $fee_currency) {
        return $this->_set("fee_currency", $fee_currency);
    }

    /**
     * Get contract_address
     *
     * @return string
     */
    public function getContractAddress(): ?string {
        return $this->_data["contract_address"];
    }

    /**
     * Set contract_address
     * 
     * @param string $contract_address Address of the auction smart contract.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setContractAddress(string $contract_address) {
        return $this->_set("contract_address", $contract_address);
    }

    /**
     * Get erc20_address
     *
     * @return string|null
     */
    public function getErc20Address(): ?string {
        return $this->_data["erc20_address"];
    }

    /**
     * Set erc20_address
     * 
     * @param string|null $erc20_address Optional address of the ERC20 token, which will be used as a selling currency of the NFT.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setErc20Address(?string $erc20_address) {
        return $this->_set("erc20_address", $erc20_address);
    }

    /**
     * Get bidder
     *
     * @return string|null
     */
    public function getBidder(): ?string {
        return $this->_data["bidder"];
    }

    /**
     * Set bidder
     * 
     * @param string|null $bidder In case of the ERC20 auction, it's possible to bid on behalf of someone else. This value is the address of the bidder, which should approve spending of the ERC20 tokens for the Auction contract. This could be used for a bidding from the custodial wallet address.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setBidder(?string $bidder) {
        return $this->_set("bidder", $bidder);
    }

    /**
     * Get id
     *
     * @return string
     */
    public function getId(): ?string {
        return $this->_data["id"];
    }

    /**
     * Set id
     * 
     * @param string $id ID of the auction.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setId(string $id) {
        return $this->_set("id", $id);
    }

    /**
     * Get bid_value
     *
     * @return string
     */
    public function getBidValue(): ?string {
        return $this->_data["bid_value"];
    }

    /**
     * Set bid_value
     * 
     * @param string $bid_value Amount of the assets to be bid. This must include auction fee.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setBidValue(string $bid_value) {
        return $this->_set("bid_value", $bid_value);
    }

    /**
     * Get from_private_key
     *
     * @return string
     */
    public function getFromPrivateKey(): ?string {
        return $this->_data["from_private_key"];
    }

    /**
     * Set from_private_key
     * 
     * @param string $from_private_key Private key of sender address. Private key, or signature Id must be present.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFromPrivateKey(string $from_private_key) {
        return $this->_set("from_private_key", $from_private_key);
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
     * @return \Tatum\Model\DeployErc20Fee|null
     */
    public function getFee(): ?\Tatum\Model\DeployErc20Fee {
        return $this->_data["fee"];
    }

    /**
     * Set fee
     * 
     * @param \Tatum\Model\DeployErc20Fee|null $fee fee
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFee(?\Tatum\Model\DeployErc20Fee $fee) {
        return $this->_set("fee", $fee);
    }
}
