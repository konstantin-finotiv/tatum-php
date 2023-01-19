<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/FungibleTokensERC20OrCompatibleApi.md#chaindeployalgoerc20
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk(); /* <<< Set your API keys here */

$arg_chain_deploy_algo_erc20 = (new \Tatum\Model\ChainDeployAlgoErc20())
    
    // The blockchain to work with
    ->setChain('ALGO')
    
    // Symbol of the ERC20 token
    ->setSymbol('ERC_SYMBOL')
    
    // Name of the ERC20 token
    ->setName('MyERC20')
    
    // (optional) Max supply of ERC20 token.
    ->setTotalCap('10000000')
    
    // Initial supply of ERC20 token. If totalCap is not defined, this will be the total cap.
    ->setSupply('10000000')
    
    // Number of decimal points
    ->setDigits(18)
    
    // Address on Ethereum blockchain, where all created ERC20 tokens will be transferred.
    ->setAddress('52NRXAHUDA5RKC7Q6YYJHBINGTJB7NXLUVY3CSKOBLLNLTKCN2NGPRGTN0')
    
    // Private key of Ethereum account address, from which the fee for the deployment of ERC20 will be p...
    ->setFromPrivateKey('GDNQECUM2JDPTA4KXNSXHQBAYL56FDZ73NXCQ2OLB32PN2G5BLNO5GY3QD2BQOYVBPYPMMETQUGTJUQ7W3V2K4NRJFHAVVWVZVBG5G2')
    
    // (optional) The nonce to be set to the transaction; if not present, the last known nonce will be used
    ->setNonce(null)
    
    // The transaction fee in ALGO
    ->setFee('0.001');

// Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored.
$arg_x_testnet_type = 'ethereum-sepolia';

try {

    /** @var \Tatum\Model\TransactionSigned $response */
    $response = $sdk->mainnet()
        ->api()
        ->fungibleTokensERC20OrCompatible()
        ->chainDeployAlgoErc20($arg_chain_deploy_algo_erc20, $arg_x_testnet_type);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->fungibleTokensERC20OrCompatible()->chainDeployAlgoErc20(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->fungibleTokensERC20OrCompatible()->chainDeployAlgoErc20(): %s\n", 
        $exc->getMessage()
    );
}