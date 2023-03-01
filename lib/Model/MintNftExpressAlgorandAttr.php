<?php

/**
 * MintNftExpressAlgorand_attr Model
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
 * MintNftExpressAlgorand_attr Model
 */
class MintNftExpressAlgorandAttr extends AbstractModel {

    public const _D = null;
    protected static $_name = "MintNftExpressAlgorand_attr";
    protected static $_definition = [
        "asset_unit" => ["assetUnit", "string", null, "getAssetUnit", "setAssetUnit", null, ["r" => 0, "nl" => 1, "xl" => 8]], 
        "clawback" => ["clawback", "string", null, "getClawback", "setClawback", null, ["r" => 0, "nl" => 58, "xl" => 58]], 
        "manager" => ["manager", "string", null, "getManager", "setManager", null, ["r" => 0, "nl" => 58, "xl" => 58]], 
        "reserve" => ["reserve", "string", null, "getReserve", "setReserve", null, ["r" => 0, "nl" => 58, "xl" => 58]], 
        "freeze" => ["freeze", "string", null, "getFreeze", "setFreeze", null, ["r" => 0, "nl" => 58, "xl" => 58]], 
        "total" => ["total", "float", null, "getTotal", "setTotal", 1, ["r" => 0, "n" => [10]]], 
        "decimals" => ["decimals", "float", null, "getDecimals", "setDecimals", 0, ["r" => 0, "n" => [1], "x" => [15]]]
    ];

    /**
     * MintNftExpressAlgorandAttr
     *
     * @param  array  $data  Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get asset_unit
     *
     * @return string|null
     */
    public function getAssetUnit(): ?string {
        return $this->_data["asset_unit"];
    }

    /**
     * Set asset_unit
     * 
     * @param string|null $asset_unit The unit name of the NFT
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAssetUnit(?string $asset_unit) {
        return $this->_set("asset_unit", $asset_unit);
    }

    /**
     * Get clawback
     *
     * @return string|null
     */
    public function getClawback(): ?string {
        return $this->_data["clawback"];
    }

    /**
     * Set clawback
     * 
     * @param string|null $clawback The address of the clawback account that can claw back holdings of the NFT
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setClawback(?string $clawback) {
        return $this->_set("clawback", $clawback);
    }

    /**
     * Get manager
     *
     * @return string|null
     */
    public function getManager(): ?string {
        return $this->_data["manager"];
    }

    /**
     * Set manager
     * 
     * @param string|null $manager The address of the manager account that can manage the configuration of the NFT or burn it; specify this parameter if you want to be able to <a href=\"#operation/NftBurnErc721\">burn the minted NFT</a> any time later
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setManager(?string $manager) {
        return $this->_set("manager", $manager);
    }

    /**
     * Get reserve
     *
     * @return string|null
     */
    public function getReserve(): ?string {
        return $this->_data["reserve"];
    }

    /**
     * Set reserve
     * 
     * @param string|null $reserve The address of the reserve account that holds the reserve (non-minted) units of the NFT
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setReserve(?string $reserve) {
        return $this->_set("reserve", $reserve);
    }

    /**
     * Get freeze
     *
     * @return string|null
     */
    public function getFreeze(): ?string {
        return $this->_data["freeze"];
    }

    /**
     * Set freeze
     * 
     * @param string|null $freeze The address of the freeze account that is used to freeze holdings of the NFT
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFreeze(?string $freeze) {
        return $this->_set("freeze", $freeze);
    }

    /**
     * Get total
     *
     * @return float|null
     */
    public function getTotal(): ?float {
        return $this->_data["total"];
    }

    /**
     * Set total
     * 
     * @param float|null $total (For minting the NFT as a <a href=\"https://developer.algorand.org/docs/get-started/tokenization/nft/#fractional-nfts\" target=\"_blank\">fractional NFT</a>) The number of fractions that the minted NFT should be divided into<br/>The number must be a power of 10 and greater that 1, for example, 10, 100, 1000...<br/>If not set, the parameter defaults to 1, which means that one regular (not fractional) NFT will be minted.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTotal(?float $total) {
        return $this->_set("total", $total);
    }

    /**
     * Get decimals
     *
     * @return float|null
     */
    public function getDecimals(): ?float {
        return $this->_data["decimals"];
    }

    /**
     * Set decimals
     * 
     * @param float|null $decimals (For minting the NFT as a <a href=\"https://developer.algorand.org/docs/get-started/tokenization/nft/#fractional-nfts\" target=\"_blank\">fractional NFT</a>) The number of decimal places in a fraction of the minted NFT<br/>The number must be greater that 0 and equal to the logarithm in base 10 of the number of the fractions (see the <code>total</code> parameter); for example, if <code>total</code> is set to 10, <code>decimals</code> must be set to 1.<br/>If not set, the parameter defaults to 0, which means that one regular (not fractional) NFT will be minted.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setDecimals(?float $decimals) {
        return $this->_set("decimals", $decimals);
    }
}
