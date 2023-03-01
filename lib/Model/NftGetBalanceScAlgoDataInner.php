<?php

/**
 * NftGetBalanceScAlgo_data_inner Model
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
 * NftGetBalanceScAlgo_data_inner Model
 */
class NftGetBalanceScAlgoDataInner extends AbstractModel {

    public const _D = null;
    protected static $_name = "NftGetBalanceScAlgo_data_inner";
    protected static $_definition = [
        "contract_address" => ["contractAddress", "string", null, "getContractAddress", "setContractAddress", null, ["r" => 0]], 
        "balances" => ["balances", "string[]", null, "getBalances", "setBalances", null, ["r" => 0, "c" => 1]], 
        "metadata" => ["metadata", "\Tatum\Model\NftGetBalanceScAlgoDataInnerMetadataInner[]", null, "getMetadata", "setMetadata", null, ["r" => 0, "c" => 1]]
    ];

    /**
     * NftGetBalanceScAlgoDataInner
     *
     * @param  array  $data  Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
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
     * @param string|null $contract_address The asset ID (the ID of the NFT)
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setContractAddress(?string $contract_address) {
        return $this->_set("contract_address", $contract_address);
    }

    /**
     * Get balances
     *
     * @return string[]|null
     */
    public function getBalances(): ?array {
        return $this->_data["balances"];
    }

    /**
     * Set balances
     * 
     * @param string[]|null $balances The array returning <code>1</code> to indicate that the NFT with the specified ID exists
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setBalances(?array $balances) {
        return $this->_set("balances", $balances);
    }

    /**
     * Get metadata
     *
     * @return \Tatum\Model\NftGetBalanceScAlgoDataInnerMetadataInner[]|null
     */
    public function getMetadata(): ?array {
        return $this->_data["metadata"];
    }

    /**
     * Set metadata
     * 
     * @param \Tatum\Model\NftGetBalanceScAlgoDataInnerMetadataInner[]|null $metadata metadata
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setMetadata(?array $metadata) {
        return $this->_set("metadata", $metadata);
    }
}
