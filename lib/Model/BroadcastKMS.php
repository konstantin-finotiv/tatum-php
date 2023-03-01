<?php

/**
 * BroadcastKMS Model
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
 * BroadcastKMS Model
 */
class BroadcastKMS extends AbstractModel {

    public const _D = null;
    protected static $_name = "BroadcastKMS";
    protected static $_definition = [
        "tx_data" => ["txData", "string", null, "getTxData", "setTxData", null, ["r" => 1, "nl" => 1, "xl" => 500000]], 
        "signature_id" => ["signatureId", "string", 'uuid', "getSignatureId", "setSignatureId", null, ["r" => 0]]
    ];

    /**
     * BroadcastKMS
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
     * @return string
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
     * @param string|null $signature_id ID of prepared payment template to sign. Required only, when broadcasting transaction signed by Tatum KMS.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSignatureId(?string $signature_id) {
        return $this->_set("signature_id", $signature_id);
    }
}
