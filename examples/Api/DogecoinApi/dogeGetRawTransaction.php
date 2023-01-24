<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/DogecoinApi.md#dogegetrawtransaction
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

// Transaction hash
$arg_hash = "d60631d8e5c8b6eb0557b5181cf28564d771c628a08abc414e87ad7c05ff2fc2";

try {

    /**
     * GET /v3/dogecoin/transaction/{hash}
     * 
     * @var \Tatum\Model\DogeTx $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->dogecoin()
        ->dogeGetRawTransaction($arg_hash);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->dogecoin()->dogeGetRawTransaction(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->dogecoin()->dogeGetRawTransaction(): %s\n", 
        $exc->getMessage()
    );
}