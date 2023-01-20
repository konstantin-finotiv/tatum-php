<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/StellarApi.md#xlmgetaccounttx
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

// Address of XLM account.
$arg_account = "GBRPYHIL2CI3FNQ4BXLFMNDLFJUNPU2HY3ZMFSHONUCEOASW7QC7OX2H";

// Paging token from the last transaction gives you next page
$arg_pagination = "1348087155011584";

try {

    /**
     * GET /v3/xlm/account/tx/{account}
     * 
     * @var \Tatum\Model\XlmTx[] $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->stellar()
        ->xlmGetAccountTx($arg_account, $arg_pagination);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->stellar()->xlmGetAccountTx(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->stellar()->xlmGetAccountTx(): %s\n", 
        $exc->getMessage()
    );
}