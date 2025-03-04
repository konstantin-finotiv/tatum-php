<?php

/**
 * TransferVetBlockchain_fee Model
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
 * TransferVetBlockchain_fee Model
 * 
 * @description Custom defined fee. If not present, it will be calculated automatically.
 */
class TransferVetBlockchainFee extends AbstractModel {

    public const _D = null;
    protected static $_name = "TransferVetBlockchain_fee";
    protected static $_definition = [
        "gas_limit" => ["gasLimit", "string", null, "getGasLimit", "setGasLimit", null, ["r" => 1, "p" => "/^[+]?\\d+$/"]]
    ];

    /**
     * TransferVetBlockchainFee
     *
     * @param  array  $data  Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get gas_limit
     *
     * @return string|null
     */
    public function getGasLimit(): ?string {
        return $this->_data["gas_limit"];
    }

    /**
     * Set gas_limit
     * 
     * @param string $gas_limit Gas limit for transaction.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setGasLimit(string $gas_limit) {
        return $this->_set("gas_limit", $gas_limit);
    }
}
