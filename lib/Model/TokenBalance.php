<?php

/**
 * TokenBalance Model
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
 * TokenBalance Model
 */
class TokenBalance extends AbstractModel {

    public const _D = null;
    protected static $_name = "TokenBalance";
    protected static $_definition = [
        "account_index" => ["accountIndex", "float", null, "getAccountIndex", "setAccountIndex", null, ["r" => 0]], 
        "mint" => ["mint", "string", null, "getMint", "setMint", null, ["r" => 0]], 
        "owner" => ["owner", "string", null, "getOwner", "setOwner", null, ["r" => 0]], 
        "program_id" => ["programId", "string", null, "getProgramId", "setProgramId", null, ["r" => 0]], 
        "ui_token_amount" => ["uiTokenAmount", "\Tatum\Model\UiTokenAmount", null, "getUiTokenAmount", "setUiTokenAmount", null, ["r" => 0]]
    ];

    /**
     * TokenBalance
     *
     * @param  array  $data  Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get account_index
     *
     * @return float|null
     */
    public function getAccountIndex(): ?float {
        return $this->_data["account_index"];
    }

    /**
     * Set account_index
     * 
     * @param float|null $account_index Index of the account in which the token balance is provided for.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAccountIndex(?float $account_index) {
        return $this->_set("account_index", $account_index);
    }

    /**
     * Get mint
     *
     * @return string|null
     */
    public function getMint(): ?string {
        return $this->_data["mint"];
    }

    /**
     * Set mint
     * 
     * @param string|null $mint Pubkey of the token's mint.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setMint(?string $mint) {
        return $this->_set("mint", $mint);
    }

    /**
     * Get owner
     *
     * @return string|null
     */
    public function getOwner(): ?string {
        return $this->_data["owner"];
    }

    /**
     * Set owner
     * 
     * @param string|null $owner Pubkey of token balance's owner.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setOwner(?string $owner) {
        return $this->_set("owner", $owner);
    }

    /**
     * Get program_id
     *
     * @return string|null
     */
    public function getProgramId(): ?string {
        return $this->_data["program_id"];
    }

    /**
     * Set program_id
     * 
     * @param string|null $program_id Pubkey of the Token program that owns the account.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setProgramId(?string $program_id) {
        return $this->_set("program_id", $program_id);
    }

    /**
     * Get ui_token_amount
     *
     * @return \Tatum\Model\UiTokenAmount|null
     */
    public function getUiTokenAmount(): ?\Tatum\Model\UiTokenAmount {
        return $this->_data["ui_token_amount"];
    }

    /**
     * Set ui_token_amount
     * 
     * @param \Tatum\Model\UiTokenAmount|null $ui_token_amount ui_token_amount
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setUiTokenAmount(?\Tatum\Model\UiTokenAmount $ui_token_amount) {
        return $this->_set("ui_token_amount", $ui_token_amount);
    }
}
