<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Ecc\Util;
!defined("TATUM-SDK") && exit();

class BinaryString {
    /**
     * Multi-byte-safe string length calculation
     *
     * @param string $str
     * @return int
     */
    public static function length(string $str): int {
        // Premature optimization: cache the function_exists() result
        static $exists = null;
        if ($exists === null) {
            $exists = function_exists("mb_strlen");
        }

        // If it exists, we need to make sure we're using 8bit mode
        if ($exists) {
            return mb_strlen($str, "8bit");
        }
        return strlen($str);
    }

    /**
     * Multi-byte-safe substring calculation
     *
     * @param  string    $str
     * @param  int       $start
     * @param  int|null  $length  (optional)
     *
     * @return string
     */
    public static function substring(string $str, int $start = 0, int $length = null): string {
        // Premature optimization: cache the function_exists() result
        static $exists = null;
        if ($exists === null) {
            $exists = function_exists("mb_substr");
        }

        // If it exists, we need to make sure we're using 8bit mode
        if ($exists) {
            return mb_substr($str, $start, $length, "8bit");
        } elseif ($length !== null) {
            return substr($str, $start, $length);
        }
        return substr($str, $start);
    }

    /**
     * Equivalent to hash_equals() in PHP 5.6
     *
     * @param string $knownString
     * @param string $userString
     *
     * @return bool
     */
    public static function constantTimeCompare(string $knownString, string $userString): bool {
        return hash_equals($knownString, $userString);
    }
}
