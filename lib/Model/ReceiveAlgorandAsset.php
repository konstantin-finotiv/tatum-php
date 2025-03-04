<?php

/**
 * ReceiveAlgorandAsset Model
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
 * ReceiveAlgorandAsset Model
 */
class ReceiveAlgorandAsset extends AbstractModel {

    public const _D = null;
    protected static $_name = "ReceiveAlgorandAsset";
    protected static $_definition = [
        "asset_id" => ["assetId", "float", null, "getAssetId", "setAssetId", null, ["r" => 1]], 
        "from_private_key" => ["fromPrivateKey", "string", null, "getFromPrivateKey", "setFromPrivateKey", null, ["r" => 1]]
    ];

    /**
     * ReceiveAlgorandAsset
     *
     * @param  array  $data  Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
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
     * @param string $from_private_key Private key of sender address. Private key, or signature Id must be present.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFromPrivateKey(string $from_private_key) {
        return $this->_set("from_private_key", $from_private_key);
    }
}
