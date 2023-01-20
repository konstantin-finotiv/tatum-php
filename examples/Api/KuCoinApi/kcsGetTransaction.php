<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/KuCoinApi.md#kcsgettransaction
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

// Transaction hash
$arg_hash = "0xe6e7340394958674cdf8606936d292f565e4ecc476aaa8b258ec8a141f7c75d7";

try {

    /**
     * GET /v3/kcs/transaction/{hash}
     * 
     * @var \Tatum\Model\KcsTx $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->kuCoin()
        ->kcsGetTransaction($arg_hash);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->kuCoin()->kcsGetTransaction(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->kuCoin()->kcsGetTransaction(): %s\n", 
        $exc->getMessage()
    );
}