<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/GasPumpApi.md#generatecustodialwalletbatchtronkms
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_generate_custodial_wallet_batch_tron_kms = (new \Tatum\Model\GenerateCustodialWalletBatchTronKMS())
    ->setChain('TRON')
    ->setFrom('TGXh2YJhfwchMGKuzfEJ27W1VEJRKnMdy9')
    ->setSignatureId('26d3883e-4e17-48b3-a0ee-09a3e484ac83')
    ->setIndex(null)/* optional */
    ->setBatchCount(50)
    ->setOwner('TGXh2YJhfwchMGKuzfEJ27W1VEJRKnMdy9')
    ->setFeeLimit(100);

// Type of Ethereum testnet. Defaults to ethereum-sepolia.
$arg_x_testnet_type = 'ethereum-sepolia';

try {
    /** @var \Tatum\Model\TransactionSigned $response */
    $response = $sdk->mainnet()
        ->api()
        ->gasPump()
        ->generateCustodialWalletBatchTronKMS($arg_generate_custodial_wallet_batch_tron_kms, $arg_x_testnet_type);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->gasPump()->generateCustodialWalletBatchTronKMS(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->gasPump()->generateCustodialWalletBatchTronKMS(): " . $exc->getMessage() . PHP_EOL;
}