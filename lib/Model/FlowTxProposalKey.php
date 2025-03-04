<?php

/**
 * FlowTx_proposalKey Model
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
 * FlowTx_proposalKey Model
 */
class FlowTxProposalKey extends AbstractModel {

    public const _D = null;
    protected static $_name = "FlowTx_proposalKey";
    protected static $_definition = [
        "address" => ["address", "string", null, "getAddress", "setAddress", null, ["r" => 0]], 
        "key_id" => ["keyId", "float", null, "getKeyId", "setKeyId", null, ["r" => 0]], 
        "sequence_number" => ["sequenceNumber", "float", null, "getSequenceNumber", "setSequenceNumber", null, ["r" => 0]]
    ];

    /**
     * FlowTxProposalKey
     *
     * @param  array  $data  Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get address
     *
     * @return string|null
     */
    public function getAddress(): ?string {
        return $this->_data["address"];
    }

    /**
     * Set address
     * 
     * @param string|null $address address
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAddress(?string $address) {
        return $this->_set("address", $address);
    }

    /**
     * Get key_id
     *
     * @return float|null
     */
    public function getKeyId(): ?float {
        return $this->_data["key_id"];
    }

    /**
     * Set key_id
     * 
     * @param float|null $key_id key_id
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setKeyId(?float $key_id) {
        return $this->_set("key_id", $key_id);
    }

    /**
     * Get sequence_number
     *
     * @return float|null
     */
    public function getSequenceNumber(): ?float {
        return $this->_data["sequence_number"];
    }

    /**
     * Set sequence_number
     * 
     * @param float|null $sequence_number sequence_number
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSequenceNumber(?float $sequence_number) {
        return $this->_set("sequence_number", $sequence_number);
    }
}
