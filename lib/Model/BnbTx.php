<?php

/**
 * BnbTx Model
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
 * BnbTx Model
 */
class BnbTx extends AbstractModel {

    public const _D = null;
    protected static $_name = "BnbTx";
    protected static $_definition = [
        "code" => ["code", "float", null, "getCode", "setCode", null, ["r" => 0]], 
        "hash" => ["hash", "string", null, "getHash", "setHash", null, ["r" => 0]], 
        "height" => ["height", "string", null, "getHeight", "setHeight", null, ["r" => 0]], 
        "log" => ["log", "string", null, "getLog", "setLog", null, ["r" => 0]], 
        "ok" => ["ok", "bool", null, "getOk", "setOk", null, ["r" => 0]], 
        "tx" => ["tx", "\Tatum\Model\BnbTxTx", null, "getTx", "setTx", null, ["r" => 0]]
    ];

    /**
     * BnbTx
     *
     * @param  array  $data  Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get code
     *
     * @return float|null
     */
    public function getCode(): ?float {
        return $this->_data["code"];
    }

    /**
     * Set code
     * 
     * @param float|null $code code
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setCode(?float $code) {
        return $this->_set("code", $code);
    }

    /**
     * Get hash
     *
     * @return string|null
     */
    public function getHash(): ?string {
        return $this->_data["hash"];
    }

    /**
     * Set hash
     * 
     * @param string|null $hash hash
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setHash(?string $hash) {
        return $this->_set("hash", $hash);
    }

    /**
     * Get height
     *
     * @return string|null
     */
    public function getHeight(): ?string {
        return $this->_data["height"];
    }

    /**
     * Set height
     * 
     * @param string|null $height height
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setHeight(?string $height) {
        return $this->_set("height", $height);
    }

    /**
     * Get log
     *
     * @return string|null
     */
    public function getLog(): ?string {
        return $this->_data["log"];
    }

    /**
     * Set log
     * 
     * @param string|null $log log
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setLog(?string $log) {
        return $this->_set("log", $log);
    }

    /**
     * Get ok
     *
     * @return bool|null
     */
    public function getOk(): ?bool {
        return $this->_data["ok"];
    }

    /**
     * Set ok
     * 
     * @param bool|null $ok ok
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setOk(?bool $ok) {
        return $this->_set("ok", $ok);
    }

    /**
     * Get tx
     *
     * @return \Tatum\Model\BnbTxTx|null
     */
    public function getTx(): ?\Tatum\Model\BnbTxTx {
        return $this->_data["tx"];
    }

    /**
     * Set tx
     * 
     * @param \Tatum\Model\BnbTxTx|null $tx tx
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTx(?\Tatum\Model\BnbTxTx $tx) {
        return $this->_set("tx", $tx);
    }
}
