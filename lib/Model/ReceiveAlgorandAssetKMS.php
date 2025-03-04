<?php

/**
 * ReceiveAlgorandAssetKMS Model
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
 * ReceiveAlgorandAssetKMS Model
 */
class ReceiveAlgorandAssetKMS extends AbstractModel {

    public const _D = null;
    protected static $_name = "ReceiveAlgorandAssetKMS";
    protected static $_definition = [
        "from" => ["from", "string", null, "getFrom", "setFrom", null, ["r" => 1, "nl" => 58, "xl" => 58]], 
        "asset_id" => ["assetId", "float", null, "getAssetId", "setAssetId", null, ["r" => 1]], 
        "signature_id" => ["signatureId", "string", 'uuid', "getSignatureId", "setSignatureId", null, ["r" => 1]]
    ];

    /**
     * ReceiveAlgorandAssetKMS
     *
     * @param  array  $data  Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
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
     * @param string $from Blockchain sender address.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFrom(string $from) {
        return $this->_set("from", $from);
    }

    /**
     * Get asset_id
     *
     * @return float|null
     */
    public function getAssetId(): ?float {
        return $this->_data["asset_id"];
    }

    /**
     * Set asset_id
     * 
     * @param float $asset_id AssetID of the asset you wanna enable for the sender.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAssetId(float $asset_id) {
        return $this->_set("asset_id", $asset_id);
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
     * @param string $signature_id Identifier of the private key associated in signing application. Private key, or signature Id must be present.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSignatureId(string $signature_id) {
        return $this->_set("signature_id", $signature_id);
    }
}
