<?php

/**
 * TransactionFilterLedger Model
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
 * TransactionFilterLedger Model
 */
class TransactionFilterLedger extends AbstractModel {

    public const _D = null;
    public const TRANSACTION_TYPE_FAILED = 'FAILED';
    public const TRANSACTION_TYPE_DEBIT_PAYMENT = 'DEBIT_PAYMENT';
    public const TRANSACTION_TYPE_CREDIT_PAYMENT = 'CREDIT_PAYMENT';
    public const TRANSACTION_TYPE_CREDIT_DEPOSIT = 'CREDIT_DEPOSIT';
    public const TRANSACTION_TYPE_DEBIT_WITHDRAWAL = 'DEBIT_WITHDRAWAL';
    public const TRANSACTION_TYPE_CANCEL_WITHDRAWAL = 'CANCEL_WITHDRAWAL';
    public const TRANSACTION_TYPE_DEBIT_OUTGOING_PAYMENT = 'DEBIT_OUTGOING_PAYMENT';
    public const TRANSACTION_TYPE_EXCHANGE_BUY = 'EXCHANGE_BUY';
    public const TRANSACTION_TYPE_EXCHANGE_SELL = 'EXCHANGE_SELL';
    public const TRANSACTION_TYPE_DEBIT_TRANSACTION = 'DEBIT_TRANSACTION';
    public const TRANSACTION_TYPE_CREDIT_INCOMING_PAYMENT = 'CREDIT_INCOMING_PAYMENT';
    public const TRANSACTION_TYPES_FAILED = 'FAILED';
    public const TRANSACTION_TYPES_DEBIT_PAYMENT = 'DEBIT_PAYMENT';
    public const TRANSACTION_TYPES_CREDIT_PAYMENT = 'CREDIT_PAYMENT';
    public const TRANSACTION_TYPES_CREDIT_DEPOSIT = 'CREDIT_DEPOSIT';
    public const TRANSACTION_TYPES_DEBIT_WITHDRAWAL = 'DEBIT_WITHDRAWAL';
    public const TRANSACTION_TYPES_CANCEL_WITHDRAWAL = 'CANCEL_WITHDRAWAL';
    public const TRANSACTION_TYPES_DEBIT_OUTGOING_PAYMENT = 'DEBIT_OUTGOING_PAYMENT';
    public const TRANSACTION_TYPES_EXCHANGE_BUY = 'EXCHANGE_BUY';
    public const TRANSACTION_TYPES_EXCHANGE_SELL = 'EXCHANGE_SELL';
    public const TRANSACTION_TYPES_DEBIT_TRANSACTION = 'DEBIT_TRANSACTION';
    public const TRANSACTION_TYPES_CREDIT_INCOMING_PAYMENT = 'CREDIT_INCOMING_PAYMENT';
    public const OP_TYPE_PAYMENT = 'PAYMENT';
    public const OP_TYPE_WITHDRAWAL = 'WITHDRAWAL';
    public const OP_TYPE_BLOCKCHAIN_TRANSACTION = 'BLOCKCHAIN_TRANSACTION';
    public const OP_TYPE_EXCHANGE = 'EXCHANGE';
    public const OP_TYPE_FAILED = 'FAILED';
    public const OP_TYPE_DEPOSIT = 'DEPOSIT';
    public const OP_TYPE_MINT = 'MINT';
    public const OP_TYPE_REVOKE = 'REVOKE';
    protected static $_name = "TransactionFilterLedger";
    protected static $_definition = [
        "account" => ["account", "string", null, "getAccount", "setAccount", null, ["r" => 0, "nl" => 24, "xl" => 24]], 
        "counter_account" => ["counterAccount", "string", null, "getCounterAccount", "setCounterAccount", null, ["r" => 0, "nl" => 24, "xl" => 24]], 
        "currency" => ["currency", "string", null, "getCurrency", "setCurrency", null, ["r" => 0, "nl" => 1, "xl" => 50]], 
        "from" => ["from", "int", 'int64', "getFrom", "setFrom", null, ["r" => 0, "n" => [0]]], 
        "amount" => ["amount", "\Tatum\Model\TransactionFilterAmountInner[]", null, "getAmount", "setAmount", null, ["r" => 0, "c" => 1]], 
        "currencies" => ["currencies", "string[]", null, "getCurrencies", "setCurrencies", null, ["r" => 0, "c" => 1]], 
        "transaction_type" => ["transactionType", "string", null, "getTransactionType", "setTransactionType", null, ["r" => 0, "e" => 1]], 
        "transaction_types" => ["transactionTypes", "string[]", null, "getTransactionTypes", "setTransactionTypes", null, ["r" => 0, "e" => 1, "c" => 1]], 
        "op_type" => ["opType", "string", null, "getOpType", "setOpType", null, ["r" => 0, "e" => 1]], 
        "transaction_code" => ["transactionCode", "string", null, "getTransactionCode", "setTransactionCode", null, ["r" => 0, "nl" => 1, "xl" => 100]], 
        "payment_id" => ["paymentId", "string", null, "getPaymentId", "setPaymentId", null, ["r" => 0, "nl" => 1, "xl" => 100]], 
        "recipient_note" => ["recipientNote", "string", null, "getRecipientNote", "setRecipientNote", null, ["r" => 0, "nl" => 1, "xl" => 500]], 
        "sender_note" => ["senderNote", "string", null, "getSenderNote", "setSenderNote", null, ["r" => 0, "nl" => 1, "xl" => 500]], 
        "to" => ["to", "int", 'int64', "getTo", "setTo", null, ["r" => 0, "n" => [0]]]
    ];

    /**
     * TransactionFilterLedger
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
    public function getTransactionTypeAllowableValues(): ?array {
        return [
            self::TRANSACTION_TYPE_FAILED,
            self::TRANSACTION_TYPE_DEBIT_PAYMENT,
            self::TRANSACTION_TYPE_CREDIT_PAYMENT,
            self::TRANSACTION_TYPE_CREDIT_DEPOSIT,
            self::TRANSACTION_TYPE_DEBIT_WITHDRAWAL,
            self::TRANSACTION_TYPE_CANCEL_WITHDRAWAL,
            self::TRANSACTION_TYPE_DEBIT_OUTGOING_PAYMENT,
            self::TRANSACTION_TYPE_EXCHANGE_BUY,
            self::TRANSACTION_TYPE_EXCHANGE_SELL,
            self::TRANSACTION_TYPE_DEBIT_TRANSACTION,
            self::TRANSACTION_TYPE_CREDIT_INCOMING_PAYMENT,
        ];
    }

    /**
     * Get allowable values
     *
     * @return array|null
     */
    public function getTransactionTypesAllowableValues(): ?array {
        return [
            self::TRANSACTION_TYPES_FAILED,
            self::TRANSACTION_TYPES_DEBIT_PAYMENT,
            self::TRANSACTION_TYPES_CREDIT_PAYMENT,
            self::TRANSACTION_TYPES_CREDIT_DEPOSIT,
            self::TRANSACTION_TYPES_DEBIT_WITHDRAWAL,
            self::TRANSACTION_TYPES_CANCEL_WITHDRAWAL,
            self::TRANSACTION_TYPES_DEBIT_OUTGOING_PAYMENT,
            self::TRANSACTION_TYPES_EXCHANGE_BUY,
            self::TRANSACTION_TYPES_EXCHANGE_SELL,
            self::TRANSACTION_TYPES_DEBIT_TRANSACTION,
            self::TRANSACTION_TYPES_CREDIT_INCOMING_PAYMENT,
        ];
    }

    /**
     * Get allowable values
     *
     * @return array|null
     */
    public function getOpTypeAllowableValues(): ?array {
        return [
            self::OP_TYPE_PAYMENT,
            self::OP_TYPE_WITHDRAWAL,
            self::OP_TYPE_BLOCKCHAIN_TRANSACTION,
            self::OP_TYPE_EXCHANGE,
            self::OP_TYPE_FAILED,
            self::OP_TYPE_DEPOSIT,
            self::OP_TYPE_MINT,
            self::OP_TYPE_REVOKE,
        ];
    }

    /**
     * Get account
     *
     * @return string|null
     */
    public function getAccount(): ?string {
        return $this->_data["account"];
    }

    /**
     * Set account
     * 
     * @param string|null $account Source account - source of transaction(s).
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAccount(?string $account) {
        return $this->_set("account", $account);
    }

    /**
     * Get counter_account
     *
     * @return string|null
     */
    public function getCounterAccount(): ?string {
        return $this->_data["counter_account"];
    }

    /**
     * Set counter_account
     * 
     * @param string|null $counter_account Counter account - transaction(s) destination account.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setCounterAccount(?string $counter_account) {
        return $this->_set("counter_account", $counter_account);
    }

    /**
     * Get currency
     *
     * @return string|null
     */
    public function getCurrency(): ?string {
        return $this->_data["currency"];
    }

    /**
     * Set currency
     * 
     * @param string|null $currency Currency of the transactions.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setCurrency(?string $currency) {
        return $this->_set("currency", $currency);
    }

    /**
     * Get from
     *
     * @return int|null
     */
    public function getFrom(): ?int {
        return $this->_data["from"];
    }

    /**
     * Set from
     * 
     * @param int|null $from Starting date to search for transactions from in UTC millis. If not present, search all history.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFrom(?int $from) {
        return $this->_set("from", $from);
    }

    /**
     * Get amount
     *
     * @return \Tatum\Model\TransactionFilterAmountInner[]|null
     */
    public function getAmount(): ?array {
        return $this->_data["amount"];
    }

    /**
     * Set amount
     * 
     * @param \Tatum\Model\TransactionFilterAmountInner[]|null $amount Amount of the transaction. AND is used between filter options.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAmount(?array $amount) {
        return $this->_set("amount", $amount);
    }

    /**
     * Get currencies
     *
     * @return string[]|null
     */
    public function getCurrencies(): ?array {
        return $this->_data["currencies"];
    }

    /**
     * Set currencies
     * 
     * @param string[]|null $currencies List of currencies of the transactions.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setCurrencies(?array $currencies) {
        return $this->_set("currencies", $currencies);
    }

    /**
     * Get transaction_type
     *
     * @return string|null
     */
    public function getTransactionType(): ?string {
        return $this->_data["transaction_type"];
    }

    /**
     * Set transaction_type
     * 
     * @param string|null $transaction_type Type of payment
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTransactionType(?string $transaction_type) {
        return $this->_set("transaction_type", $transaction_type);
    }

    /**
     * Get transaction_types
     *
     * @return string[]|null
     */
    public function getTransactionTypes(): ?array {
        return $this->_data["transaction_types"];
    }

    /**
     * Set transaction_types
     * 
     * @param string[]|null $transaction_types Types of payment
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTransactionTypes(?array $transaction_types) {
        return $this->_set("transaction_types", $transaction_types);
    }

    /**
     * Get op_type
     *
     * @return string|null
     */
    public function getOpType(): ?string {
        return $this->_data["op_type"];
    }

    /**
     * Set op_type
     * 
     * @param string|null $op_type Type of operation.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setOpType(?string $op_type) {
        return $this->_set("op_type", $op_type);
    }

    /**
     * Get transaction_code
     *
     * @return string|null
     */
    public function getTransactionCode(): ?string {
        return $this->_data["transaction_code"];
    }

    /**
     * Set transaction_code
     * 
     * @param string|null $transaction_code For bookkeeping to distinct transaction purpose.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTransactionCode(?string $transaction_code) {
        return $this->_set("transaction_code", $transaction_code);
    }

    /**
     * Get payment_id
     *
     * @return string|null
     */
    public function getPaymentId(): ?string {
        return $this->_data["payment_id"];
    }

    /**
     * Set payment_id
     * 
     * @param string|null $payment_id Payment ID defined in payment order by sender.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setPaymentId(?string $payment_id) {
        return $this->_set("payment_id", $payment_id);
    }

    /**
     * Get recipient_note
     *
     * @return string|null
     */
    public function getRecipientNote(): ?string {
        return $this->_data["recipient_note"];
    }

    /**
     * Set recipient_note
     * 
     * @param string|null $recipient_note Recipient note defined in payment order by sender.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setRecipientNote(?string $recipient_note) {
        return $this->_set("recipient_note", $recipient_note);
    }

    /**
     * Get sender_note
     *
     * @return string|null
     */
    public function getSenderNote(): ?string {
        return $this->_data["sender_note"];
    }

    /**
     * Set sender_note
     * 
     * @param string|null $sender_note Sender note defined in payment order by sender.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSenderNote(?string $sender_note) {
        return $this->_set("sender_note", $sender_note);
    }

    /**
     * Get to
     *
     * @return int|null
     */
    public function getTo(): ?int {
        return $this->_data["to"];
    }

    /**
     * Set to
     * 
     * @param int|null $to Date until to search for transactions in UTC millis. If not present, search up till now.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTo(?int $to) {
        return $this->_set("to", $to);
    }
}
