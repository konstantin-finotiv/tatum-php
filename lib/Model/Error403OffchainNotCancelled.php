<?php

/**
 * Error403OffchainNotCancelled Model
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
 * Error403OffchainNotCancelled Model
 */
class Error403OffchainNotCancelled extends AbstractModel {

    public const _D = null;
    protected static $_name = "Error403OffchainNotCancelled";
    protected static $_definition = [
        "error_code" => ["errorCode", "string", null, "getErrorCode", "setErrorCode", null, ["r" => 1]], 
        "message" => ["message", "string", null, "getMessage", "setMessage", null, ["r" => 1]], 
        "status_code" => ["statusCode", "float", null, "getStatusCode", "setStatusCode", null, ["r" => 1]]
    ];

    /**
     * Error403OffchainNotCancelled
     *
     * @param  array  $data  Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get error_code
     *
     * @return string
     */
    public function getErrorCode(): ?string {
        return $this->_data["error_code"];
    }

    /**
     * Set error_code
     * 
     * @param string $error_code withdrawal.not.cancelled.transaction.failed
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setErrorCode(string $error_code) {
        return $this->_set("error_code", $error_code);
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage(): ?string {
        return $this->_data["message"];
    }

    /**
     * Set message
     * 
     * @param string $message Unable to broadcast transaction, and impossible to cancel withdrawal. ID is attached, \"${withdrawalId}\", cancel it manually.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setMessage(string $message) {
        return $this->_set("message", $message);
    }

    /**
     * Get status_code
     *
     * @return float
     */
    public function getStatusCode(): ?float {
        return $this->_data["status_code"];
    }

    /**
     * Set status_code
     * 
     * @param float $status_code 403
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setStatusCode(float $status_code) {
        return $this->_set("status_code", $status_code);
    }
}
