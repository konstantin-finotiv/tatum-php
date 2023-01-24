<?php

/**
 * FlowEvent_payload_value Model
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
 * FlowEvent_payload_value Model
 */
class FlowEventPayloadValue extends AbstractModel {

    public const _D = null;
    protected static $_name = "FlowEvent_payload_value";
    protected static $_definition = [
        "id" => ["id", "string", null, "getId", "setId", null, ["r" => 0]], 
        "fields" => ["fields", "\Tatum\Model\FlowEventPayloadValueFieldsInner[]", null, "getFields", "setFields", null, ["r" => 0, "c" => 1]]
    ];

    /**
     * FlowEventPayloadValue
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get id
     *
     * @return string|null
     */
    public function getId(): ?string {
        return $this->_data["id"];
    }

    /**
     * Set id
     * 
     * @param string|null $id Event type
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setId(?string $id) {
        return $this->_set("id", $id);
    }

    /**
     * Get fields
     *
     * @return \Tatum\Model\FlowEventPayloadValueFieldsInner[]|null
     */
    public function getFields(): ?array {
        return $this->_data["fields"];
    }

    /**
     * Set fields
     * 
     * @param \Tatum\Model\FlowEventPayloadValueFieldsInner[]|null $fields fields
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFields(?array $fields) {
        return $this->_set("fields", $fields);
    }
}
