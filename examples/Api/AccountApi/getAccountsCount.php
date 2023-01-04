<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/Account#operation/getAccountsCount
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/AccountApi.md#getaccountscount
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Max number of items per page is 50.
$arg_page_size = 20;

// Page number
$arg_page = 0;

// Direction of sorting. Can be asc or desc
$arg_sort = 'sort_example';

// Sort by
$arg_sort_by = '_id';

// Filter only active or non active accounts
$arg_active = true;

// Filter only accounts with non zero balances
$arg_only_non_zero_balance = true;

// Filter only frozen or non frozen accounts
$arg_frozen = true;

// Filter by currency
$arg_currency = 'BTC';

// Filter by account number
$arg_account_number = 'AC_1011_B';

try {
    /** @var \Tatum\Model\EntitiesCount $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->account()
        ->getAccountsCount($arg_page_size, $arg_page, $arg_sort, $arg_sort_by, $arg_active, $arg_only_non_zero_balance, $arg_frozen, $arg_currency, $arg_account_number);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->account()->getAccountsCount(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->account()->getAccountsCount(): " . $exc->getMessage() . PHP_EOL;
}