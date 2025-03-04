<?php

/**
 * SolanaBroadcastConfirm Model
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
 * SolanaBroadcastConfirm Model
 */
class SolanaBroadcastConfirm extends AbstractModel {

    public const _D = null;
    protected static $_name = "SolanaBroadcastConfirm";
    protected static $_definition = [
        "tx_data" => ["txData", "string", null, "getTxData", "setTxData", null, ["r" => 1, "nl" => 1, "xl" => 500000]], 
        "options" => ["options", "\Tatum\Model\SolanaBroadcastConfirmOptions", null, "getOptions", "setOptions", null, ["r" => 0]]
    ];

    /**
     * SolanaBroadcastConfirm
     *
     * @param  array  $data  Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get tx_data
     *
     * @return string|null
     */
    public function getTxData(): ?string {
        return $this->_data["tx_data"];
    }

    /**
     * Set tx_data
     * 
     * @param string $tx_data Raw signed transaction to be published to network.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTxData(string $tx_data) {
        return $this->_set("tx_data", $tx_data);
    }

    /**
     * Get options
     *
     * @return \Tatum\Model\SolanaBroadcastConfirmOptions|null
     */
    public function getOptions(): ?\Tatum\Model\SolanaBroadcastConfirmOptions {
        return $this->_data["options"];
    }

    /**
     * Set options
     * 
     * @param \Tatum\Model\SolanaBroadcastConfirmOptions|null $options options
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setOptions(?\Tatum\Model\SolanaBroadcastConfirmOptions $options) {
        return $this->_set("options", $options);
    }
}
