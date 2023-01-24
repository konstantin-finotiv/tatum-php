<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/MarketplaceApi.md#getmarketplacelistings
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
$arg_chain = "CELO";

// Contract address
$arg_contract_address = "0xe6e7340394958674cdf8606936d292f565e4ecc4";

// The type of listings to return
$arg_type = "INITIATED";

try {

    /**
     * GET /v3/blockchain/marketplace/listing/{chain}/{contractAddress}/{type}
     * 
     * @var string[] $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->marketplace()
        ->getMarketplaceListings($arg_chain, $arg_contract_address, $arg_type);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->marketplace()->getMarketplaceListings(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->marketplace()->getMarketplaceListings(): %s\n", 
        $exc->getMessage()
    );
}