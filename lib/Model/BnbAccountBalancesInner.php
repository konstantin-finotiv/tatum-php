<?php

/**
 * BnbAccount_balances_inner Model
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
 * BnbAccount_balances_inner Model
 */
class BnbAccountBalancesInner extends AbstractModel {

    public const _D = null;
    protected static $_name = "BnbAccount_balances_inner";
    protected static $_definition = [
        "free" => ["free", "string", null, "getFree", "setFree", null, ["r" => 0]], 
        "frozen" => ["frozen", "string", null, "getFrozen", "setFrozen", null, ["r" => 0]], 
        "locked" => ["locked", "string", null, "getLocked", "setLocked", null, ["r" => 0]], 
        "symbol" => ["symbol", "string", null, "getSymbol", "setSymbol", null, ["r" => 0]]
    ];

    /**
     * BnbAccountBalancesInner
     *
     * @param  array  $data  Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get free
     *
     * @return string|null
     */
    public function getFree(): ?string {
        return $this->_data["free"];
    }

    /**
     * Set free
     * 
     * @param string|null $free free
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFree(?string $free) {
        return $this->_set("free", $free);
    }

    /**
     * Get frozen
     *
     * @return string|null
     */
    public function getFrozen(): ?string {
        return $this->_data["frozen"];
    }

    /**
     * Set frozen
     * 
     * @param string|null $frozen frozen
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFrozen(?string $frozen) {
        return $this->_set("frozen", $frozen);
    }

    /**
     * Get locked
     *
     * @return string|null
     */
    public function getLocked(): ?string {
        return $this->_data["locked"];
    }

    /**
     * Set locked
     * 
     * @param string|null $locked locked
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setLocked(?string $locked) {
        return $this->_set("locked", $locked);
    }

    /**
     * Get symbol
     *
     * @return string|null
     */
    public function getSymbol(): ?string {
        return $this->_data["symbol"];
    }

    /**
     * Set symbol
     * 
     * @param string|null $symbol symbol
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSymbol(?string $symbol) {
        return $this->_set("symbol", $symbol);
    }
}
