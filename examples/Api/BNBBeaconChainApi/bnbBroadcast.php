<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/BNBBeaconChainApi.md#bnbbroadcast
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_broadcast = (new \Tatum\Model\Broadcast())
    
    // Raw signed transaction to be published to network.
    ->setTxData('62BD544D1B9031EFC330A3E855CC3A0D51CA5131455C1AB3BCAC6D243F65460D')
    
    // (optional) Identifier of KMS pending transaction ID to be completed with the broadcast.
    ->setSignatureId('5e68c66581f2ee32bc354087');

try {
    /** @var \Tatum\Model\TransactionHash $response */
    $response = $sdk->mainnet()
        ->api()
        ->bNBBeaconChain()
        ->bnbBroadcast($arg_broadcast);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->bNBBeaconChain()->bnbBroadcast(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->bNBBeaconChain()->bnbBroadcast(): " . $exc->getMessage() . PHP_EOL;
}