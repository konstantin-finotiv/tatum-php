<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/AuctionApi.md#getauction
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

// Blockchain to work with
$arg_chain = 'chain_example';

// Contract address
$arg_contract_address = "0xe6e7340394958674cdf8606936d292f565e4ecc4";

// Auction ID
$arg_id = "123456";

try {

    /**
     * GET /v3/blockchain/auction/{chain}/{contractAddress}/{id}
     * 
     * @var \Tatum\Model\GetAuction200Response $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->auction()
        ->getAuction($arg_chain, $arg_contract_address, $arg_id);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->auction()->getAuction(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->auction()->getAuction(): %s\n", 
        $exc->getMessage()
    );
}