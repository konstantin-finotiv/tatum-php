<?php

/**
 * CreateSubscriptionPending Model
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
 * CreateSubscriptionPending Model
 */
class CreateSubscriptionPending extends AbstractModel {

    public const _D = null;
    public const TYPE_ACCOUNT_PENDING_BLOCKCHAIN_TRANSACTION = 'ACCOUNT_PENDING_BLOCKCHAIN_TRANSACTION';
    protected static $_name = "CreateSubscriptionPending";
    protected static $_definition = [
        "type" => ["type", "string", null, "getType", "setType", null, ["r" => 1, "e" => 1]], 
        "attr" => ["attr", "\Tatum\Model\CreateSubscriptionPendingAttr", null, "getAttr", "setAttr", null, ["r" => 1]]
    ];

    /**
     * CreateSubscriptionPending
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
            self::TYPE_ACCOUNT_PENDING_BLOCKCHAIN_TRANSACTION,
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
     * @return \Tatum\Model\CreateSubscriptionPendingAttr|null
     */
    public function getAttr(): ?\Tatum\Model\CreateSubscriptionPendingAttr {
        return $this->_data["attr"];
    }

    /**
     * Set attr
     * 
     * @param \Tatum\Model\CreateSubscriptionPendingAttr $attr attr
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAttr(\Tatum\Model\CreateSubscriptionPendingAttr $attr) {
        return $this->_set("attr", $attr);
    }
}
