<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/CustomerApi.md#disablecustomer
 * @license MIT
 * @author  Mark Jivko
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

// Customer internal ID
$arg_id = 'id_example';

try {

    /**
     * PUT /v3/ledger/customer/{id}/disable
     */
    $sdk->mainnet()
        ->api()
        ->customer()
        ->disableCustomer($arg_id);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->customer()->disableCustomer(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->customer()->disableCustomer(): %s\n", 
        $exc->getMessage()
    );
}