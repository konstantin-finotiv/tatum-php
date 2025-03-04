<?php

/**
 * BchTx Model
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
 * BchTx Model
 */
class BchTx extends AbstractModel {

    public const _D = null;
    protected static $_name = "BchTx";
    protected static $_definition = [
        "txid" => ["txid", "string", null, "getTxid", "setTxid", null, ["r" => 0]], 
        "version" => ["version", "float", null, "getVersion", "setVersion", null, ["r" => 0]], 
        "locktime" => ["locktime", "float", null, "getLocktime", "setLocktime", null, ["r" => 0]], 
        "vin" => ["vin", "\Tatum\Model\BchTxVinInner[]", null, "getVin", "setVin", null, ["r" => 0, "c" => 1]], 
        "vout" => ["vout", "\Tatum\Model\BchTxVoutInner[]", null, "getVout", "setVout", null, ["r" => 0, "c" => 1]]
    ];

    /**
     * BchTx
     *
     * @param  array  $data  Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get txid
     *
     * @return string|null
     */
    public function getTxid(): ?string {
        return $this->_data["txid"];
    }

    /**
     * Set txid
     * 
     * @param string|null $txid txid
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTxid(?string $txid) {
        return $this->_set("txid", $txid);
    }

    /**
     * Get version
     *
     * @return float|null
     */
    public function getVersion(): ?float {
        return $this->_data["version"];
    }

    /**
     * Set version
     * 
     * @param float|null $version version
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setVersion(?float $version) {
        return $this->_set("version", $version);
    }

    /**
     * Get locktime
     *
     * @return float|null
     */
    public function getLocktime(): ?float {
        return $this->_data["locktime"];
    }

    /**
     * Set locktime
     * 
     * @param float|null $locktime locktime
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setLocktime(?float $locktime) {
        return $this->_set("locktime", $locktime);
    }

    /**
     * Get vin
     *
     * @return \Tatum\Model\BchTxVinInner[]|null
     */
    public function getVin(): ?array {
        return $this->_data["vin"];
    }

    /**
     * Set vin
     * 
     * @param \Tatum\Model\BchTxVinInner[]|null $vin vin
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setVin(?array $vin) {
        return $this->_set("vin", $vin);
    }

    /**
     * Get vout
     *
     * @return \Tatum\Model\BchTxVoutInner[]|null
     */
    public function getVout(): ?array {
        return $this->_data["vout"];
    }

    /**
     * Set vout
     * 
     * @param \Tatum\Model\BchTxVoutInner[]|null $vout vout
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setVout(?array $vout) {
        return $this->_set("vout", $vout);
    }
}
