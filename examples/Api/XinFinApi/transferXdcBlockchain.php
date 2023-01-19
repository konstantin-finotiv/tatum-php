<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/XinFinApi.md#transferxdcblockchain
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk(); /* <<< Set your API keys here */

$arg_transfer_xdc_blockchain = (new \Tatum\Model\TransferXdcBlockchain())
    
    // (optional) Additional data that can be passed to a blockchain transaction as a data property; must be in the...
    ->setData('4d79206e6f746520746f2074686520726563697069656e74')
    
    // Currency of the transfer.
    ->setCurrency('XDC')
    
    // (optional) Nonce to be set to XDC transaction. If not present, last known nonce will be used.
    ->setNonce(null)
    
    // Blockchain address to send assets
    ->setTo('xdc687422eEA2cB73B5d3e242bA5456b782919AFc85')
    
    // (optional) 
    ->setFee(null)
    
    // Amount to be sent.
    ->setAmount('100000')
    
    // Private key of sender address. Private key, or signature Id must be present.
    ->setFromPrivateKey('0x05e150c73f1920ec14caa1e0b6aa09940899678051a78542840c2668ce5080c2');

try {

    /** @var \Tatum\Model\TransactionSigned $response */
    $response = $sdk->mainnet()
        ->api()
        ->xinFin()
        ->transferXdcBlockchain($arg_transfer_xdc_blockchain);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->xinFin()->transferXdcBlockchain(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->xinFin()->transferXdcBlockchain(): %s\n", 
        $exc->getMessage()
    );
}