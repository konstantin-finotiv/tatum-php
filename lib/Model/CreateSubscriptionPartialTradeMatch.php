<?php

/**
 * CreateSubscriptionPartialTradeMatch Model
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
 * CreateSubscriptionPartialTradeMatch Model
 */
class CreateSubscriptionPartialTradeMatch extends AbstractModel {

    public const _D = null;
    public const TYPE_CUSTOMER_PARTIAL_TRADE_MATCH = 'CUSTOMER_PARTIAL_TRADE_MATCH';
    protected static $_name = "CreateSubscriptionPartialTradeMatch";
    protected static $_definition = [
        "type" => ["type", "string", null, "getType", "setType", null, ["r" => 1, "e" => 1]], 
        "attr" => ["attr", "\Tatum\Model\CreateSubscriptionPartialTradeMatchAttr", null, "getAttr", "setAttr", null, ["r" => 1]]
    ];

    /**
     * CreateSubscriptionPartialTradeMatch
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
    public function getTypeAllowableValues(): ?array {
        return [
            self::TYPE_CUSTOMER_PARTIAL_TRADE_MATCH,
        ];
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
     * @param string $type Type of the subscription.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setType(string $type) {
        return $this->_set("type", $type);
    }

    /**
     * Get attr
     *
     * @return \Tatum\Model\CreateSubscriptionPartialTradeMatchAttr|null
     */
    public function getAttr(): ?\Tatum\Model\CreateSubscriptionPartialTradeMatchAttr {
        return $this->_data["attr"];
    }

    /**
     * Set attr
     * 
     * @param \Tatum\Model\CreateSubscriptionPartialTradeMatchAttr $attr attr
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAttr(\Tatum\Model\CreateSubscriptionPartialTradeMatchAttr $attr) {
        return $this->_set("attr", $attr);
    }
}
