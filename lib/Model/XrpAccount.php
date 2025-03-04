<?php

/**
 * XrpAccount Model
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
 * XrpAccount Model
 */
class XrpAccount extends AbstractModel {

    public const _D = null;
    protected static $_name = "XrpAccount";
    protected static $_definition = [
        "account_data" => ["account_data", "\Tatum\Model\XrpAccountAccountData", null, "getAccountData", "setAccountData", null, ["r" => 0]], 
        "ledger_current_index" => ["ledger_current_index", "float", null, "getLedgerCurrentIndex", "setLedgerCurrentIndex", null, ["r" => 0]], 
        "validated" => ["validated", "bool", null, "getValidated", "setValidated", null, ["r" => 0]]
    ];

    /**
     * XrpAccount
     *
     * @param  array  $data  Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get account_data
     *
     * @return \Tatum\Model\XrpAccountAccountData|null
     */
    public function getAccountData(): ?\Tatum\Model\XrpAccountAccountData {
        return $this->_data["account_data"];
    }

    /**
     * Set account_data
     * 
     * @param \Tatum\Model\XrpAccountAccountData|null $account_data account_data
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAccountData(?\Tatum\Model\XrpAccountAccountData $account_data) {
        return $this->_set("account_data", $account_data);
    }

    /**
     * Get ledger_current_index
     *
     * @return float|null
     */
    public function getLedgerCurrentIndex(): ?float {
        return $this->_data["ledger_current_index"];
    }

    /**
     * Set ledger_current_index
     * 
     * @param float|null $ledger_current_index The Ledger Index of the current open ledger these stats describe.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setLedgerCurrentIndex(?float $ledger_current_index) {
        return $this->_set("ledger_current_index", $ledger_current_index);
    }

    /**
     * Get validated
     *
     * @return bool|null
     */
    public function getValidated(): ?bool {
        return $this->_data["validated"];
    }

    /**
     * Set validated
     * 
     * @param bool|null $validated True if this data is from a validated ledger version; if omitted or set to false, this data is not final.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setValidated(?bool $validated) {
        return $this->_set("validated", $validated);
    }
}
