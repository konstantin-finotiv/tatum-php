<?php

/**
 * UpdateMarketplaceSolana Model
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
 * UpdateMarketplaceSolana Model
 */
class UpdateMarketplaceSolana extends AbstractModel {

    public const _D = null;
    public const CHAIN_SOL = 'SOL';
    protected static $_name = "UpdateMarketplaceSolana";
    protected static $_definition = [
        "chain" => ["chain", "string", null, "getChain", "setChain", null, ["r" => 1, "e" => 1]], 
        "contract_address" => ["contractAddress", "string", null, "getContractAddress", "setContractAddress", null, ["r" => 1, "nl" => 44, "xl" => 44]], 
        "marketplace_fee" => ["marketplaceFee", "float", null, "getMarketplaceFee", "setMarketplaceFee", null, ["r" => 0, "n" => [0], "x" => [10000]]], 
        "from" => ["from", "string", null, "getFrom", "setFrom", null, ["r" => 1, "nl" => 44, "xl" => 44]], 
        "treasury_withdrawal_destination" => ["treasuryWithdrawalDestination", "string", null, "getTreasuryWithdrawalDestination", "setTreasuryWithdrawalDestination", null, ["r" => 0, "nl" => 43, "xl" => 44]], 
        "fee_withdrawal_destination" => ["feeWithdrawalDestination", "string", null, "getFeeWithdrawalDestination", "setFeeWithdrawalDestination", null, ["r" => 0, "nl" => 43, "xl" => 44]], 
        "requires_sign_off" => ["requiresSignOff", "bool", null, "getRequiresSignOff", "setRequiresSignOff", null, ["r" => 0]], 
        "can_change_sale_price" => ["canChangeSalePrice", "bool", null, "getCanChangeSalePrice", "setCanChangeSalePrice", null, ["r" => 0]], 
        "from_private_key" => ["fromPrivateKey", "string", null, "getFromPrivateKey", "setFromPrivateKey", null, ["r" => 1, "nl" => 87, "xl" => 128]]
    ];

    /**
     * UpdateMarketplaceSolana
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
            self::CHAIN_SOL,
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
     * @param string $chain Blockchain to work with.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setChain(string $chain) {
        return $this->_set("chain", $chain);
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
     * @param string $contract_address Blockchain address of the smart contract
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setContractAddress(string $contract_address) {
        return $this->_set("contract_address", $contract_address);
    }

    /**
     * Get marketplace_fee
     *
     * @return float|null
     */
    public function getMarketplaceFee(): ?float {
        return $this->_data["marketplace_fee"];
    }

    /**
     * Set marketplace_fee
     * 
     * @param float|null $marketplace_fee The percentage of the amount that an NFT was sold for that will be sent to the marketplace as a fee. To set the fee to 1%, set this parameter to <code>100</code>; to set 10%, set this parameter to <code>1000</code>; to set 50%, set this parameter to <code>5000</code>, and so on.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setMarketplaceFee(?float $marketplace_fee) {
        return $this->_set("marketplace_fee", $marketplace_fee);
    }

    /**
     * Get from
     *
     * @return string|null
     */
    public function getFrom(): ?string {
        return $this->_data["from"];
    }

    /**
     * Set from
     * 
     * @param string $from The blockchain address of the marketplace authority
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFrom(string $from) {
        return $this->_set("from", $from);
    }

    /**
     * Get treasury_withdrawal_destination
     *
     * @return string|null
     */
    public function getTreasuryWithdrawalDestination(): ?string {
        return $this->_data["treasury_withdrawal_destination"];
    }

    /**
     * Set treasury_withdrawal_destination
     * 
     * @param string|null $treasury_withdrawal_destination The address that will be able to withdraw funds from the marketplace treasury account to own address
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTreasuryWithdrawalDestination(?string $treasury_withdrawal_destination) {
        return $this->_set("treasury_withdrawal_destination", $treasury_withdrawal_destination);
    }

    /**
     * Get fee_withdrawal_destination
     *
     * @return string|null
     */
    public function getFeeWithdrawalDestination(): ?string {
        return $this->_data["fee_withdrawal_destination"];
    }

    /**
     * Set fee_withdrawal_destination
     * 
     * @param string|null $fee_withdrawal_destination The address that will be able to withdraw funds from the marketplace fee account to own address
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFeeWithdrawalDestination(?string $fee_withdrawal_destination) {
        return $this->_set("fee_withdrawal_destination", $fee_withdrawal_destination);
    }

    /**
     * Get requires_sign_off
     *
     * @return bool|null
     */
    public function getRequiresSignOff(): ?bool {
        return $this->_data["requires_sign_off"];
    }

    /**
     * Set requires_sign_off
     * 
     * @param bool|null $requires_sign_off Set to \"false\" if you do not want the marketplace to sign all operations related to the listings and sales; if not set, defaults to \"true\" (the marketplace must sign all the operations)
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setRequiresSignOff(?bool $requires_sign_off) {
        return $this->_set("requires_sign_off", $requires_sign_off);
    }

    /**
     * Get can_change_sale_price
     *
     * @return bool|null
     */
    public function getCanChangeSalePrice(): ?bool {
        return $this->_data["can_change_sale_price"];
    }

    /**
     * Set can_change_sale_price
     * 
     * @param bool|null $can_change_sale_price Set to \"true\" to allow the marketplace to change the sale price that the seller intentionally set to 0; if not set, defaults to \"false\" (the marketplace cannot change the sale price)
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setCanChangeSalePrice(?bool $can_change_sale_price) {
        return $this->_set("can_change_sale_price", $can_change_sale_price);
    }

    /**
     * Get from_private_key
     *
     * @return string|null
     */
    public function getFromPrivateKey(): ?string {
        return $this->_data["from_private_key"];
    }

    /**
     * Set from_private_key
     * 
     * @param string $from_private_key The private key of the marketplace authority
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFromPrivateKey(string $from_private_key) {
        return $this->_set("from_private_key", $from_private_key);
    }
}
