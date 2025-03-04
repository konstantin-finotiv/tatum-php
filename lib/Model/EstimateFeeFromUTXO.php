<?php

/**
 * EstimateFeeFromUTXO Model
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
 * EstimateFeeFromUTXO Model
 */
class EstimateFeeFromUTXO extends AbstractModel {

    public const _D = null;
    public const CHAIN_BTC = 'BTC';
    public const CHAIN_LTC = 'LTC';
    public const TYPE_TRANSFER = 'TRANSFER';
    protected static $_name = "EstimateFeeFromUTXO";
    protected static $_definition = [
        "chain" => ["chain", "string", null, "getChain", "setChain", null, ["r" => 1, "e" => 1]], 
        "type" => ["type", "string", null, "getType", "setType", null, ["r" => 1, "e" => 1]], 
        "from_utxo" => ["fromUTXO", "\Tatum\Model\EstimateFeeFromUTXOFromUTXOInner[]", null, "getFromUtxo", "setFromUtxo", null, ["r" => 1, "c" => 1]], 
        "to" => ["to", "\Tatum\Model\EstimateFeeFromAddressToInner[]", null, "getTo", "setTo", null, ["r" => 1, "c" => 1]]
    ];

    /**
     * EstimateFeeFromUTXO
     *
     * @param  array  $data  Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }

    /**
     * Get allowable values
     *
     * @return array|null
     */
    public function getChainAllowableValues(): ?array {
        return [
            self::CHAIN_BTC,
            self::CHAIN_LTC,
        ];
    }

    /**
     * Get allowable values
     *
     * @return array|null
     */
    public function getTypeAllowableValues(): ?array {
        return [
            self::TYPE_TRANSFER,
        ];
    }

    /**
     * Get chain
     *
     * @return string|null
     */
    public function getChain(): ?string {
        return $this->_data["chain"];
    }

    /**
     * Set chain
     * 
     * @param string $chain Blockchain to estimate fee for.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setChain(string $chain) {
        return $this->_set("chain", $chain);
    }

    /**
     * Get type
     *
     * @return string|null
     */
    public function getType(): ?string {
        return $this->_data["type"];
    }

    /**
     * Set type
     * 
     * @param string $type Type of transaction
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setType(string $type) {
        return $this->_set("type", $type);
    }

    /**
     * Get from_utxo
     *
     * @return array|null
     */
    public function getFromUtxo(): ?array {
        return $this->_data["from_utxo"];
    }

    /**
     * Set from_utxo
     * 
     * @param \Tatum\Model\EstimateFeeFromUTXOFromUTXOInner[] $from_utxo Array of transaction hashes, index of UTXO in it and corresponding private keys. Use this option if you want to calculate amount to send manually. Either fromUTXO or fromAddress must be present.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFromUtxo(array $from_utxo) {
        return $this->_set("from_utxo", $from_utxo);
    }

    /**
     * Get to
     *
     * @return array|null
     */
    public function getTo(): ?array {
        return $this->_data["to"];
    }

    /**
     * Set to
     * 
     * @param \Tatum\Model\EstimateFeeFromAddressToInner[] $to Array of addresses and values to send bitcoins to. Values must be set in BTC. Difference between from and to is transaction fee.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTo(array $to) {
        return $this->_set("to", $to);
    }
}
