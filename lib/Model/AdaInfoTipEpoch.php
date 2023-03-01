<?php

/**
 * AdaInfo_tip_epoch Model
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
 * AdaInfo_tip_epoch Model
 */
class AdaInfoTipEpoch extends AbstractModel {

    public const _D = null;
    protected static $_name = "AdaInfo_tip_epoch";
    protected static $_definition = [
        "number" => ["number", "float", null, "getNumber", "setNumber", null, ["r" => 0]]
    ];

    /**
     * AdaInfoTipEpoch
     *
     * @param  array  $data  Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get number
     *
     * @return float|null
     */
    public function getNumber(): ?float {
        return $this->_data["number"];
    }

    /**
     * Set number
     * 
     * @param float|null $number Last epoch number.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setNumber(?float $number) {
        return $this->_set("number", $number);
    }
}
