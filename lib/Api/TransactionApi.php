<?php

/**
 * Implementation of Transaction API
 *
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 *
 * NOTE: This class is auto-generated by tatum.io
 * Do not edit this file manually!
 */

namespace Tatum\Api;
!defined("TATUM-SDK") && exit();

use InvalidArgumentException as IAE;
use Tatum\Sdk\Serializer as S;

/**
 * API for Transaction
 */
class TransactionApi extends AbstractApi {
    /**
     * Find transactions within the ledger.
     *
     * @param \Tatum\Model\TransactionFilterLedger $transaction_filter_ledger 
     * @param float|null $page_size Max number of items per page is 50. Either count or pageSize is accepted.
     * @param float|null $offset Offset to obtain the next page of data.
     * @param bool|null $count Get the total transaction count based on the filter. Either count or pageSize is accepted.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\GetTransactionsByAccountId200Response
     */
    public function getTransactions($transaction_filter_ledger, $page_size = null, $offset = null, $count = null) {
        if (isset($page_size) && $page_size > 50) {
            throw new IAE('Invalid value for "$page_size" when calling TransactionApi.getTransactions, must be smaller than or equal to 50');
        }

        if (isset($page_size) && $page_size < 1) {
            throw new IAE('Invalid value for "$page_size" when calling TransactionApi.getTransactions, must be bigger than or equal to 1.');
        }

        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/ledger/transaction/ledger";
        /** @var \Tatum\Model\GetTransactionsByAccountId200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", $rPath, $rPath, [
                    "pageSize" => isset($page_size) ? S::toQueryValue($page_size) : null,
                    "offset" => isset($offset) ? S::toQueryValue($offset) : null,
                    "count" => isset($count) ? S::toQueryValue($count) : null,
                ], $rHeaders, [], $transaction_filter_ledger
            ), 
            "\Tatum\Model\GetTransactionsByAccountId200Response"
        );
            
        return $result;
    }
    
    /**
     * Find transactions for account.
     *
     * @param \Tatum\Model\TransactionFilter $transaction_filter 
     * @param float|null $page_size Max number of items per page is 50. Either count or pageSize is accepted.
     * @param float|null $offset Offset to obtain the next page of data.
     * @param bool|null $count Get the total transaction count based on the filter. Either count or pageSize is accepted.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\GetTransactionsByAccountId200Response
     */
    public function getTransactionsByAccountId($transaction_filter, $page_size = null, $offset = null, $count = null) {
        if (isset($page_size) && $page_size > 50) {
            throw new IAE('Invalid value for "$page_size" when calling TransactionApi.getTransactionsByAccountId, must be smaller than or equal to 50');
        }

        if (isset($page_size) && $page_size < 1) {
            throw new IAE('Invalid value for "$page_size" when calling TransactionApi.getTransactionsByAccountId, must be bigger than or equal to 1.');
        }

        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/ledger/transaction/account";
        /** @var \Tatum\Model\GetTransactionsByAccountId200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", $rPath, $rPath, [
                    "pageSize" => isset($page_size) ? S::toQueryValue($page_size) : null,
                    "offset" => isset($offset) ? S::toQueryValue($offset) : null,
                    "count" => isset($count) ? S::toQueryValue($count) : null,
                ], $rHeaders, [], $transaction_filter
            ), 
            "\Tatum\Model\GetTransactionsByAccountId200Response"
        );
            
        return $result;
    }
    
    /**
     * Find transactions for a customer across all of the customer's accounts.
     *
     * @param \Tatum\Model\TransactionFilterCustomer $transaction_filter_customer 
     * @param float|null $page_size Max number of items per page is 50. Either count or pageSize is accepted.
     * @param float|null $offset Offset to obtain the next page of data.
     * @param bool|null $count Get total transaction count based on the filter. Either count or pageSize is accepted.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\GetTransactionsByAccountId200Response
     */
    public function getTransactionsByCustomerId($transaction_filter_customer, $page_size = null, $offset = null, $count = null) {
        if (isset($page_size) && $page_size > 50) {
            throw new IAE('Invalid value for "$page_size" when calling TransactionApi.getTransactionsByCustomerId, must be smaller than or equal to 50');
        }

        if (isset($page_size) && $page_size < 1) {
            throw new IAE('Invalid value for "$page_size" when calling TransactionApi.getTransactionsByCustomerId, must be bigger than or equal to 1.');
        }

        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/ledger/transaction/customer";
        /** @var \Tatum\Model\GetTransactionsByAccountId200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", $rPath, $rPath, [
                    "pageSize" => isset($page_size) ? S::toQueryValue($page_size) : null,
                    "offset" => isset($offset) ? S::toQueryValue($offset) : null,
                    "count" => isset($count) ? S::toQueryValue($count) : null,
                ], $rHeaders, [], $transaction_filter_customer
            ), 
            "\Tatum\Model\GetTransactionsByAccountId200Response"
        );
            
        return $result;
    }
    
    /**
     * Find transactions with a given reference across all accounts.
     *
     * @param string $reference 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\Transaction[]
     */
    public function getTransactionsByReference($reference) {
        if (strlen($reference) > 100) {
            throw new IAE('Invalid length for "$reference" when calling TransactionApi.getTransactionsByReference, must be smaller than or equal to 100');
        }

        if (strlen($reference) < 20) {
            throw new IAE('Invalid length for "$reference" when calling TransactionApi.getTransactionsByReference, must be bigger than or equal to 20');
        }

        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/v3/ledger/transaction/reference/{reference}";
        /** @var \Tatum\Model\Transaction[] $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse($rPath, ["reference" => $reference]), $rPath, [], $rHeaders, []
            ), 
            "\Tatum\Model\Transaction[]"
        );
            
        return $result;
    }
    
    /**
     * Send payment
     *
     * @param \Tatum\Model\CreateTransaction $create_transaction 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionResult
     */
    public function sendTransaction($create_transaction) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/ledger/transaction";
        /** @var \Tatum\Model\TransactionResult $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", $rPath, $rPath, [], $rHeaders, [], $create_transaction
            ), 
            "\Tatum\Model\TransactionResult"
        );
            
        return $result;
    }
    
    /**
     * Send payment in batch
     *
     * @param \Tatum\Model\BatchCreateTransaction $batch_create_transaction 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return string[]
     */
    public function sendTransactionBatch($batch_create_transaction) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/ledger/transaction/batch";
        /** @var string[] $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", $rPath, $rPath, [], $rHeaders, [], $batch_create_transaction
            ), 
            "string[]"
        );
            
        return $result;
    }
    
}
