<?php

/**
 * EstimateFeeTransferFromCustodial Model
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
 * EstimateFeeTransferFromCustodial Model
 */
class EstimateFeeTransferFromCustodial extends AbstractModel {

    public const _D = null;
    public const CHAIN_CELO = 'CELO';
    public const CHAIN_ETH = 'ETH';
    public const CHAIN_BSC = 'BSC';
    public const CHAIN_XDC = 'XDC';
    public const CHAIN_KLAY = 'KLAY';
    public const CHAIN_ONE = 'ONE';
    public const CHAIN_MATIC = 'MATIC';
    public const TYPE_TRANSFER_CUSTODIAL = 'TRANSFER_CUSTODIAL';
    public const TOKEN_TYPE_0 = 0;
    public const TOKEN_TYPE_1 = 1;
    public const TOKEN_TYPE_2 = 2;
    public const TOKEN_TYPE_3 = 3;
    protected static $_name = "EstimateFeeTransferFromCustodial";
    protected static $_definition = [
        "chain" => ["chain", "string", null, "getChain", "setChain", null, ["r" => 1, "e" => 1]], 
        "type" => ["type", "string", null, "getType", "setType", null, ["r" => 1, "e" => 1]], 
        "sender" => ["sender", "string", null, "getSender", "setSender", null, ["r" => 1, "nl" => 42, "xl" => 42]], 
        "recipient" => ["recipient", "string", null, "getRecipient", "setRecipient", null, ["r" => 1, "nl" => 42, "xl" => 42]], 
        "custodial_address" => ["custodialAddress", "string", null, "getCustodialAddress", "setCustodialAddress", null, ["r" => 1, "nl" => 42, "xl" => 42]], 
        "token_type" => ["tokenType", "float", null, "getTokenType", "setTokenType", null, ["r" => 1, "e" => 1]], 
        "amount" => ["amount", "string", null, "getAmount", "setAmount", null, ["r" => 1, "p" => "/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/"]], 
        "contract_address" => ["contractAddress", "string", null, "getContractAddress", "setContractAddress", null, ["r" => 0, "nl" => 42, "xl" => 42]]
    ];

    /**
     * EstimateFeeTransferFromCustodial
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
            self::CHAIN_ETH,
            self::CHAIN_BSC,
            self::CHAIN_XDC,
            self::CHAIN_KLAY,
            self::CHAIN_ONE,
            self::CHAIN_MATIC,
        ];
    }
    /**
     * Get allowable values
     *
     * @return string[]
     */
    public function getTypeAllowableValues(): ?array {
        return [
            self::TYPE_TRANSFER_CUSTODIAL,
        ];
    }
    /**
     * Get allowable values
     *
     * @return string[]
     */
    public function getTokenTypeAllowableValues(): ?array {
        return [
            self::TOKEN_TYPE_0,
            self::TOKEN_TYPE_1,
            self::TOKEN_TYPE_2,
            self::TOKEN_TYPE_3,
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
     * @param string $chain The blockchain to estimate the fee for
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setChain(string $chain) {
        return $this->_set("chain", $chain);
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType(): ?string {
        return $this->_data["type"];
    }

    /**
     * Set type
     * 
     * @param string $type The type of the transaction
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setType(string $type) {
        return $this->_set("type", $type);
    }

    /**
     * Get sender
     *
     * @return string
     */
    public function getSender(): ?string {
        return $this->_data["sender"];
    }

    /**
     * Set sender
     * 
     * @param string $sender The blockchain address of the sender
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSender(string $sender) {
        return $this->_set("sender", $sender);
    }

    /**
     * Get recipient
     *
     * @return string
     */
    public function getRecipient(): ?string {
        return $this->_data["recipient"];
    }

    /**
     * Set recipient
     * 
     * @param string $recipient The blockchain address of the recipient
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setRecipient(string $recipient) {
        return $this->_set("recipient", $recipient);
    }

    /**
     * Get custodial_address
     *
     * @return string
     */
    public function getCustodialAddress(): ?string {
        return $this->_data["custodial_address"];
    }

    /**
     * Set custodial_address
     * 
     * @param string $custodial_address The blockchain address of the custodial wallet contract
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setCustodialAddress(string $custodial_address) {
        return $this->_set("custodial_address", $custodial_address);
    }

    /**
     * Get token_type
     *
     * @return float
     */
    public function getTokenType(): ?float {
        return $this->_data["token_type"];
    }

    /**
     * Set token_type
     * 
     * @param float $token_type The type of the asset to transfer. Set <code>0</code> for fungible tokens (ERC-20 or equivalent), <code>1</code> for NFTs (ERC-721 or equivalent), <code>2</code> for Multi Tokens (ERC-1155 or equivalent), or <code>3</code> for native blockchain currencies.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTokenType(float $token_type) {
        return $this->_set("token_type", $token_type);
    }

    /**
     * Get amount
     *
     * @return string
     */
    public function getAmount(): ?string {
        return $this->_data["amount"];
    }

    /**
     * Set amount
     * 
     * @param string $amount <ul><li>If the asset to transfer is a fungible token, Multi Token, or a native blockchain currency, set this parameter to the amount to transfer.</li> <li>If the asset to transfer is an NFT, set this parameter to <code>1</code>.</li></ul>
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAmount(string $amount) {
        return $this->_set("amount", $amount);
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
     * @param string|null $contract_address (Only if the asset to transfer is a fungible token) The address of the smart contract of the token
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setContractAddress(?string $contract_address) {
        return $this->_set("contract_address", $contract_address);
    }
}
