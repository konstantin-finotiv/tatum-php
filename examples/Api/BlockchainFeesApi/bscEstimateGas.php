<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/BlockchainFeesApi.md#bscestimategas
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

$arg_bsc_estimate_gas = (new \Tatum\Model\BscEstimateGas())
    
    // Sender address.
    ->setFrom('0xfb99f8ae9b70a0c8cd96ae665bbaf85a7e01a2ef')
    
    // Blockchain address to send assets
    ->setTo('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    
    // Amount to be sent in BSC.
    ->setAmount('100000')
    
    // (optional) Additional data that can be passed to a blockchain transaction as a data property; must be in the...
    ->setData('4d79206e6f746520746f2074686520726563697069656e74');

try {

    /**
     * POST /v3/bsc/gas
     * 
     * @var \Tatum\Model\GasEstimated $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->blockchainFees()
        ->bscEstimateGas($arg_bsc_estimate_gas);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->blockchainFees()->bscEstimateGas(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->blockchainFees()->bscEstimateGas(): %s\n", 
        $exc->getMessage()
    );
}