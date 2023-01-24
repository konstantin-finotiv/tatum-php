<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/SolanaApi.md#solanagetbalance
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

// Account address you want to get balance of
$arg_address = "FykfMwA9WNShzPJbbb9DNXsfgDgS3XZzWiFgrVXfWoPJ";

try {

    /**
     * GET /v3/solana/account/balance/{address}
     * 
     * @var \Tatum\Model\SolBalance $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->solana()
        ->solanaGetBalance($arg_address);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->solana()->solanaGetBalance(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->solana()->solanaGetBalance(): %s\n", 
        $exc->getMessage()
    );
}