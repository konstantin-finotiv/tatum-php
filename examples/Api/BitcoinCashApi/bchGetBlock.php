<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/BitcoinCashApi.md#bchgetblock
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

// Block hash or height
$arg_hash = "00000000000000cfb22714715f09b3721f89819a325f7f4d39b2c22a061d1be8";

try {

    /**
     * GET /v3/bcash/block/{hash}
     * 
     * @var \Tatum\Model\BchBlock $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->bitcoinCash()
        ->bchGetBlock($arg_hash);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->bitcoinCash()->bchGetBlock(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->bitcoinCash()->bchGetBlock(): %s\n", 
        $exc->getMessage()
    );
}