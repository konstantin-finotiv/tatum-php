<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/TronApi.md#trongetaccount
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

// Account address.
$arg_address = "TGDqQAP5bduoPKVgdbk7fGyW4DwEt3RRn8";

try {

    /**
     * GET /v3/tron/account/{address}
     * 
     * @var \Tatum\Model\TronAccount $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->tron()
        ->tronGetAccount($arg_address);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->tron()->tronGetAccount(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->tron()->tronGetAccount(): %s\n", 
        $exc->getMessage()
    );
}