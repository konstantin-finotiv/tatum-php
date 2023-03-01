<?php

/**
 * GenerateMarketplace_200_response Model
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
 * GenerateMarketplace_200_response Model
 */
class GenerateMarketplace200Response extends AbstractModel {

    public const _D = null;
    protected static $_name = "GenerateMarketplace_200_response";
    protected static $_definition = [
        "tx_id" => ["txId", "string", null, "getTxId", "setTxId", null, ["r" => 1]], 
        "contract_address" => ["contractAddress", "string", null, "getContractAddress", "setContractAddress", null, ["r" => 1]], 
        "fee_account" => ["feeAccount", "string", null, "getFeeAccount", "setFeeAccount", null, ["r" => 1]], 
        "treasury_account" => ["treasuryAccount", "string", null, "getTreasuryAccount", "setTreasuryAccount", null, ["r" => 1]], 
        "signature_id" => ["signatureId", "string", 'uuid', "getSignatureId", "setSignatureId", null, ["r" => 1]]
    ];

    /**
     * GenerateMarketplace200Response
     *
     * @param  array  $data  Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get tx_id
     *
     * @return string
     */
    public function getTxId(): ?string {
        return $this->_data["tx_id"];
    }

    /**
     * Set tx_id
     * 
     * @param string $tx_id The hash (ID) of the transaction
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTxId(string $tx_id) {
        return $this->_set("tx_id", $tx_id);
    }

    /**
     * Get contract_address
     *
     * @return string
     */
    public function getContractAddress(): ?string {
        return $this->_data["contract_address"];
    }

    /**
     * Set contract_address
     * 
     * @param string $contract_address The address of deployed marketplace contract
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setContractAddress(string $contract_address) {
        return $this->_set("contract_address", $contract_address);
    }

    /**
     * Get fee_account
     *
     * @return string
     */
    public function getFeeAccount(): ?string {
        return $this->_data["fee_account"];
    }

    /**
     * Set fee_account
     * 
     * @param string $fee_account The blockchain address of the fee account
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFeeAccount(string $fee_account) {
        return $this->_set("fee_account", $fee_account);
    }

    /**
     * Get treasury_account
     *
     * @return string
     */
    public function getTreasuryAccount(): ?string {
        return $this->_data["treasury_account"];
    }

    /**
     * Set treasury_account
     * 
     * @param string $treasury_account The blockchain address of the treasury account
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTreasuryAccount(string $treasury_account) {
        return $this->_set("treasury_account", $treasury_account);
    }

    /**
     * Get signature_id
     *
     * @return string
     */
    public function getSignatureId(): ?string {
        return $this->_data["signature_id"];
    }

    /**
     * Set signature_id
     * 
     * @param string $signature_id The internal Tatum ID of the prepared transaction for Key Management Sysytem (KMS) to sign<br/>This is different from the <code>signatureId</code> parameter that you provided in the request body. The <code>signatureId</code> parameter in the request body specifies the signature ID associated with the private key in KMS.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSignatureId(string $signature_id) {
        return $this->_set("signature_id", $signature_id);
    }
}
