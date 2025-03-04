<?php

/**
 * SolanaListingData_nft Model
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
 * SolanaListingData_nft Model
 */
class SolanaListingDataNft extends AbstractModel {

    public const _D = null;
    protected static $_name = "SolanaListingData_nft";
    protected static $_definition = [
        "address" => ["address", "string", null, "getAddress", "setAddress", null, ["r" => 1]], 
        "data" => ["data", "\Tatum\Model\SolanaNftMetadata", null, "getData", "setData", null, ["r" => 1]]
    ];

    /**
     * SolanaListingDataNft
     *
     * @param  array  $data  Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get address
     *
     * @return string|null
     */
    public function getAddress(): ?string {
        return $this->_data["address"];
    }

    /**
     * Set address
     * 
     * @param string $address NFT Address
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAddress(string $address) {
        return $this->_set("address", $address);
    }

    /**
     * Get data
     *
     * @return \Tatum\Model\SolanaNftMetadata|null
     */
    public function getData(): ?\Tatum\Model\SolanaNftMetadata {
        return $this->_data["data"];
    }

    /**
     * Set data
     * 
     * @param \Tatum\Model\SolanaNftMetadata $data data
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setData(\Tatum\Model\SolanaNftMetadata $data) {
        return $this->_set("data", $data);
    }
}
