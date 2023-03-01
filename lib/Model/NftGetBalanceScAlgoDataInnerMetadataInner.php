<?php

/**
 * NftGetBalanceScAlgo_data_inner_metadata_inner Model
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
 * NftGetBalanceScAlgo_data_inner_metadata_inner Model
 */
class NftGetBalanceScAlgoDataInnerMetadataInner extends AbstractModel {

    public const _D = null;
    protected static $_name = "NftGetBalanceScAlgo_data_inner_metadata_inner";
    protected static $_definition = [
        "url" => ["url", "string", null, "getUrl", "setUrl", null, ["r" => 0]]
    ];

    /**
     * NftGetBalanceScAlgoDataInnerMetadataInner
     *
     * @param  array  $data  Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get url
     *
     * @return string|null
     */
    public function getUrl(): ?string {
        return $this->_data["url"];
    }

    /**
     * Set url
     * 
     * @param string|null $url The URL pointing to the NFT metadata; may not be present
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setUrl(?string $url) {
        return $this->_set("url", $url);
    }
}
