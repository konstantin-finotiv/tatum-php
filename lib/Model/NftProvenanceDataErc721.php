<?php

/**
 * NftProvenanceDataErc721 Model
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
 * NftProvenanceDataErc721 Model
 */
class NftProvenanceDataErc721 extends AbstractModel {

    public const _D = null;
    protected static $_name = "NftProvenanceDataErc721";
    protected static $_definition = [
        "provenance_data" => ["provenanceData", "string", null, "getProvenanceData", "setProvenanceData", null, ["r" => 0]], 
        "token_price" => ["tokenPrice", "string", null, "getTokenPrice", "setTokenPrice", null, ["r" => 0]]
    ];

    /**
     * NftProvenanceDataErc721
     *
     * @param  array  $data  Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get provenance_data
     *
     * @return string|null
     */
    public function getProvenanceData(): ?string {
        return $this->_data["provenance_data"];
    }

    /**
     * Set provenance_data
     * 
     * @param string|null $provenance_data provenance_data
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setProvenanceData(?string $provenance_data) {
        return $this->_set("provenance_data", $provenance_data);
    }

    /**
     * Get token_price
     *
     * @return string|null
     */
    public function getTokenPrice(): ?string {
        return $this->_data["token_price"];
    }

    /**
     * Set token_price
     * 
     * @param string|null $token_price token_price
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTokenPrice(?string $token_price) {
        return $this->_set("token_price", $token_price);
    }
}
