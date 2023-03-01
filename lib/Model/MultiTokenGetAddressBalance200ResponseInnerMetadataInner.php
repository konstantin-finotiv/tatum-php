<?php

/**
 * MultiTokenGetAddressBalance_200_response_inner_metadata_inner Model
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
 * MultiTokenGetAddressBalance_200_response_inner_metadata_inner Model
 */
class MultiTokenGetAddressBalance200ResponseInnerMetadataInner extends AbstractModel {

    public const _D = null;
    protected static $_name = "MultiTokenGetAddressBalance_200_response_inner_metadata_inner";
    protected static $_definition = [
        "token_id" => ["tokenId", "string", null, "getTokenId", "setTokenId", null, ["r" => 0]], 
        "url" => ["url", "string", null, "getUrl", "setUrl", null, ["r" => 0]], 
        "metadata" => ["metadata", "object", null, "getMetadata", "setMetadata", null, ["r" => 0]]
    ];

    /**
     * MultiTokenGetAddressBalance200ResponseInnerMetadataInner
     *
     * @param  array  $data  Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
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
     * @param string|null $token_id The ID of the Multi Token owned by this address
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTokenId(?string $token_id) {
        return $this->_set("token_id", $token_id);
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
     * @param string|null $url The URL pointing to the Multi Token metadata; the URL may not be present, and if it is not returned, you can get it by calling the Multi Token Contract.uri() method
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setUrl(?string $url) {
        return $this->_set("url", $url);
    }

    /**
     * Get metadata
     *
     * @return object|null
     */
    public function getMetadata(): ?object {
        return $this->_data["metadata"];
    }

    /**
     * Set metadata
     * 
     * @param object|null $metadata The metadata scheme obtained from the metadata URL; the scheme may not be present, and if it is not returned, you can get it using the <a href=\"#operation/MultiTokenGetMetadata\">Multi Token metadata API</a>
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setMetadata(?object $metadata) {
        return $this->_set("metadata", $metadata);
    }
}
