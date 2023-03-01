<?php

/**
 * getVersion_200_response Model
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
 * getVersion_200_response Model
 */
class GetVersion200Response extends AbstractModel {

    public const _D = null;
    protected static $_name = "getVersion_200_response";
    protected static $_definition = [
        "version" => ["version", "string", null, "getVersion", "setVersion", null, ["r" => 0]], 
        "status" => ["status", "string", null, "getStatus", "setStatus", null, ["r" => 0]], 
        "testnet" => ["testnet", "bool", null, "getTestnet", "setTestnet", null, ["r" => 0]], 
        "plan_name" => ["planName", "string", null, "getPlanName", "setPlanName", null, ["r" => 0]], 
        "plan_code" => ["planCode", "string", null, "getPlanCode", "setPlanCode", null, ["r" => 0]], 
        "price" => ["price", "float", null, "getPrice", "setPrice", null, ["r" => 0]], 
        "expiration" => ["expiration", "float", null, "getExpiration", "setExpiration", null, ["r" => 0]], 
        "credit_limit" => ["creditLimit", "float", null, "getCreditLimit", "setCreditLimit", null, ["r" => 0]], 
        "usage" => ["usage", "float", null, "getUsage", "setUsage", null, ["r" => 0]], 
        "rollover_day" => ["rolloverDay", "float", null, "getRolloverDay", "setRolloverDay", null, ["r" => 0]]
    ];

    /**
     * GetVersion200Response
     *
     * @param  array  $data  Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get version
     *
     * @return string|null
     */
    public function getVersion(): ?string {
        return $this->_data["version"];
    }

    /**
     * Set version
     * 
     * @param string|null $version version
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setVersion(?string $version) {
        return $this->_set("version", $version);
    }

    /**
     * Get status
     *
     * @return string|null
     */
    public function getStatus(): ?string {
        return $this->_data["status"];
    }

    /**
     * Set status
     * 
     * @param string|null $status status
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setStatus(?string $status) {
        return $this->_set("status", $status);
    }

    /**
     * Get testnet
     *
     * @return bool|null
     */
    public function getTestnet(): ?bool {
        return $this->_data["testnet"];
    }

    /**
     * Set testnet
     * 
     * @param bool|null $testnet testnet
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTestnet(?bool $testnet) {
        return $this->_set("testnet", $testnet);
    }

    /**
     * Get plan_name
     *
     * @return string|null
     */
    public function getPlanName(): ?string {
        return $this->_data["plan_name"];
    }

    /**
     * Set plan_name
     * 
     * @param string|null $plan_name plan_name
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setPlanName(?string $plan_name) {
        return $this->_set("plan_name", $plan_name);
    }

    /**
     * Get plan_code
     *
     * @return string|null
     */
    public function getPlanCode(): ?string {
        return $this->_data["plan_code"];
    }

    /**
     * Set plan_code
     * 
     * @param string|null $plan_code plan_code
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setPlanCode(?string $plan_code) {
        return $this->_set("plan_code", $plan_code);
    }

    /**
     * Get price
     *
     * @return float|null
     */
    public function getPrice(): ?float {
        return $this->_data["price"];
    }

    /**
     * Set price
     * 
     * @param float|null $price price
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setPrice(?float $price) {
        return $this->_set("price", $price);
    }

    /**
     * Get expiration
     *
     * @return float|null
     */
    public function getExpiration(): ?float {
        return $this->_data["expiration"];
    }

    /**
     * Set expiration
     * 
     * @param float|null $expiration expiration
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setExpiration(?float $expiration) {
        return $this->_set("expiration", $expiration);
    }

    /**
     * Get credit_limit
     *
     * @return float|null
     */
    public function getCreditLimit(): ?float {
        return $this->_data["credit_limit"];
    }

    /**
     * Set credit_limit
     * 
     * @param float|null $credit_limit credit_limit
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setCreditLimit(?float $credit_limit) {
        return $this->_set("credit_limit", $credit_limit);
    }

    /**
     * Get usage
     *
     * @return float|null
     */
    public function getUsage(): ?float {
        return $this->_data["usage"];
    }

    /**
     * Set usage
     * 
     * @param float|null $usage usage
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setUsage(?float $usage) {
        return $this->_set("usage", $usage);
    }

    /**
     * Get rollover_day
     *
     * @return float|null
     */
    public function getRolloverDay(): ?float {
        return $this->_data["rollover_day"];
    }

    /**
     * Set rollover_day
     * 
     * @param float|null $rollover_day rollover_day
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setRolloverDay(?float $rollover_day) {
        return $this->_set("rollover_day", $rollover_day);
    }
}
