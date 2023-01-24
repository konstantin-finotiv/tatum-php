<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/BitcoinApi.md#btcgetbalanceofaddress
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

// The blockchain address to get the balance for
$arg_address = "2MsM67NLa71fHvTUBqNENW15P68nHB2vVXb";

try {

    /**
     * GET /v3/bitcoin/address/balance/{address}
     * 
     * @var \Tatum\Model\BtcBasedBalance $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->bitcoin()
        ->btcGetBalanceOfAddress($arg_address);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->bitcoin()->btcGetBalanceOfAddress(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->bitcoin()->btcGetBalanceOfAddress(): %s\n", 
        $exc->getMessage()
    );
}