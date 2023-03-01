<?php

/**
 * CancelSellAssetOnMarketplaceSolanaKMS Model
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
 * CancelSellAssetOnMarketplaceSolanaKMS Model
 */
class CancelSellAssetOnMarketplaceSolanaKMS extends AbstractModel {

    public const _D = null;
    public const CHAIN_SOL = 'SOL';
    protected static $_name = "CancelSellAssetOnMarketplaceSolanaKMS";
    protected static $_definition = [
        "chain" => ["chain", "string", null, "getChain", "setChain", null, ["r" => 1, "e" => 1]], 
        "contract_address" => ["contractAddress", "string", null, "getContractAddress", "setContractAddress", null, ["r" => 1, "nl" => 44, "xl" => 44]], 
        "listing_id" => ["listingId", "mixed", null, "getListingId", "setListingId", null, ["r" => 1, "nl" => 44, "xl" => 44]], 
        "from" => ["from", "mixed", null, "getFrom", "setFrom", null, ["r" => 1, "nl" => 44, "xl" => 44]], 
        "authority_signature_id" => ["authoritySignatureId", "string", 'uuid', "getAuthoritySignatureId", "setAuthoritySignatureId", null, ["r" => 0]], 
        "signature_id" => ["signatureId", "string", 'uuid', "getSignatureId", "setSignatureId", null, ["r" => 1]]
    ];

    /**
     * CancelSellAssetOnMarketplaceSolanaKMS
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
            self::CHAIN_SOL,
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
     * @param string $contract_address Blockchain address of the smart contract
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setContractAddress(string $contract_address) {
        return $this->_set("contract_address", $contract_address);
    }

    /**
     * Get listing_id
     *
     * @return mixed
     */
    public function getListingId(): ?mixed {
        return $this->_data["listing_id"];
    }

    /**
     * Set listing_id
     * 
     * @param mixed $listing_id Blockchain address of the listing
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setListingId(mixed $listing_id) {
        return $this->_set("listing_id", $listing_id);
    }

    /**
     * Get from
     *
     * @return mixed
     */
    public function getFrom(): ?mixed {
        return $this->_data["from"];
    }

    /**
     * Set from
     * 
     * @param mixed $from Blockchain address of the asset owner
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFrom(mixed $from) {
        return $this->_set("from", $from);
    }

    /**
     * Get authority_signature_id
     *
     * @return string|null
     */
    public function getAuthoritySignatureId(): ?string {
        return $this->_data["authority_signature_id"];
    }

    /**
     * Set authority_signature_id
     * 
     * @param string|null $authority_signature_id The KMS identifier of the private key used for signing transactions as authority; required if <code>requiresSignOff</code> is set to \"true\" for the marketplace
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAuthoritySignatureId(?string $authority_signature_id) {
        return $this->_set("authority_signature_id", $authority_signature_id);
    }

    /**
     * Get signature_id
     *
     * @return string
     */
    public function getSignatureId(): ?string {
        return $this->_data["signature_id"];
    }

    /**
     * Set signature_id
     * 
     * @param string $signature_id The KMS identifier of the private key of the asset owner
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSignatureId(string $signature_id) {
        return $this->_set("signature_id", $signature_id);
    }
}
