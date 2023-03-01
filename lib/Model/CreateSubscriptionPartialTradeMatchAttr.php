<?php

/**
 * CreateSubscriptionPartialTradeMatch_attr Model
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
 * CreateSubscriptionPartialTradeMatch_attr Model
 * 
 * @description Additional attributes based on the subscription type.
 */
class CreateSubscriptionPartialTradeMatchAttr extends AbstractModel {

    public const _D = null;
    protected static $_name = "CreateSubscriptionPartialTradeMatch_attr";
    protected static $_definition = [
        "id" => ["id", "string", null, "getId", "setId", null, ["r" => 1, "nl" => 24, "xl" => 24]], 
        "url" => ["url", "string", null, "getUrl", "setUrl", null, ["r" => 1, "xl" => 500]]
    ];

    /**
     * CreateSubscriptionPartialTradeMatchAttr
     *
     * @param  array  $data  Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get id
     *
     * @return string
     */
    public function getId(): ?string {
        return $this->_data["id"];
    }

    /**
     * Set id
     * 
     * @param string $id ID of the customer, on which the webhook will be applied, when on any of his accounts trade will be matched and closed.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setId(string $id) {
        return $this->_set("id", $id);
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl(): ?string {
        return $this->_data["url"];
    }

    /**
     * Set url
     * 
     * @param string $url URL of the endpoint, where HTTP POST request will be sent, when on any of his accounts trade will be matched and closed.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setUrl(string $url) {
        return $this->_set("url", $url);
    }
}
