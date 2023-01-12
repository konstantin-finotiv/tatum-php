# Tatum/Api/XinFinApi

## References

[XinFin API documentation](https://apidoc.tatum.io/tag/XinFin/)

## Methods

HTTP requests are relative to https://api.tatum.io

[🔹 **callXdcReadSmartContractMethod()**](#callxdcreadsmartcontractmethod) 

> Invoke a method in a smart contract on XinFin
> 
> **POST** `/v3/xdc/smartcontract`

[🔹 **callXdcSmartContractMethod()**](#callxdcsmartcontractmethod) 

> Invoke a method in a smart contract on XinFin
> 
> **POST** `/v3/xdc/smartcontract`

[🔹 **callXdcSmartContractMethodKMS()**](#callxdcsmartcontractmethodkms) 

> Invoke a method in a smart contract on XinFin
> 
> **POST** `/v3/xdc/smartcontract`

[🔹 **transferXdcBlockchain()**](#transferxdcblockchain) 

> Send XDC / ERC20 from account to account
> 
> **POST** `/v3/xdc/transaction`

[🔹 **transferXdcBlockchainKMS()**](#transferxdcblockchainkms) 

> Send XDC / ERC20 from account to account
> 
> **POST** `/v3/xdc/transaction`

[🔹 **xdcBroadcast()**](#xdcbroadcast) 

> Broadcast signed XDC transaction
> 
> **POST** `/v3/xdc/broadcast`

[🔹 **xdcGenerateAddress()**](#xdcgenerateaddress) 

> Generate XDC account address from Extended public key
> 
> **GET** `/v3/xdc/address/{xpub}/{index}`

[🔹 **xdcGenerateAddressPrivateKey()**](#xdcgenerateaddressprivatekey) 

> Generate XDC private key
> 
> **POST** `/v3/xdc/wallet/priv`

[🔹 **xdcGenerateWallet()**](#xdcgeneratewallet) 

> Generate XDC wallet
> 
> **GET** `/v3/xdc/wallet`

[🔹 **xdcGetBalance()**](#xdcgetbalance) 

> Get XDC Account balance
> 
> **GET** `/v3/xdc/account/balance/{address}`

[🔹 **xdcGetBlock()**](#xdcgetblock) 

> Get XDC block by hash
> 
> **GET** `/v3/xdc/block/{hash}`

[🔹 **xdcGetCurrentBlock()**](#xdcgetcurrentblock) 

> Get current block number
> 
> **GET** `/v3/xdc/block/current`

[🔹 **xdcGetTransaction()**](#xdcgettransaction) 

> Get XDC Transaction
> 
> **GET** `/v3/xdc/transaction/{hash}`

[🔹 **xdcGetTransactionCount()**](#xdcgettransactioncount) 

> Get count of outgoing XDC transactions
> 
> **GET** `/v3/xdc/transaction/count/{address}`

[🔹 **xdcWeb3Driver()**](#xdcweb3driver) 

> Web3 HTTP driver
> 
> **POST** `/v3/xdc/web3/{xApiKey}`



## `callXdcReadSmartContractMethod()`

> **POST** `/v3/xdc/smartcontract`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->xinFin()->callXdcReadSmartContractMethod(
    \Tatum\Model\CallXdcReadSmartContractMethod $call_xdc_read_smart_contract_method
): \Tatum\Model\CallSmartContractMethod200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$call_xdc_read_smart_contract_method** | [**\Tatum\Model\CallXdcReadSmartContractMethod**](../Model/CallXdcReadSmartContractMethod.md) |  |

### Return type

[**\Tatum\Model\CallSmartContractMethod200Response**](../Model/CallSmartContractMethod200Response.md)

### Description

Invoke a method in a smart contract on XinFin

<p><b>2 credits per API call</b></p>
 <p>Invoke a method in an existing smart contract on XinFin.</p>
 <p>You can call a read-only or write method.</p>
 <ul> <li>For <b>read-only</b> methods, the output of the invoked method is returned.</li> <li>For <b>write</b> methods, the ID of the associated transaction is returned.</li> </ul>         <p><b>Troubleshooting a failed transaction</b>
 Tatum ensures that this API works against the blockchain (accesses the blockchain, finds the specified smart contract, and executes the specified ABI method with the provided parameters).
However, because this API can be run against any smart contract on the blockchain, Tatum cannot in any way guarantee that the method itself will be executed successfully.</p>
 <p>If you have issues with invoking the method, refer to the user documentation for this method, or contact the author of the smart contract.</p>
 <p>For more information about invoking methods in smart contracts, see <a href="https://support.tatum.io/support/solutions/articles/80001052441" target="_blank">this article</a> on our Support Portal.</p>
 <p><b>Signing a transaction</b>
 When invoking a method in a smart contract, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p>
 <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p>
 <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>


### Example

[✨ View "callXdcReadSmartContractMethod.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/XinFinApi/callXdcReadSmartContractMethod.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `callXdcSmartContractMethod()`

> **POST** `/v3/xdc/smartcontract`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->xinFin()->callXdcSmartContractMethod(
    \Tatum\Model\CallXdcSmartContractMethod $call_xdc_smart_contract_method
): \Tatum\Model\CallSmartContractMethod200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$call_xdc_smart_contract_method** | [**\Tatum\Model\CallXdcSmartContractMethod**](../Model/CallXdcSmartContractMethod.md) |  |

### Return type

[**\Tatum\Model\CallSmartContractMethod200Response**](../Model/CallSmartContractMethod200Response.md)

### Description

Invoke a method in a smart contract on XinFin

CallXdcSmartContractMethod operation

### Example

[✨ View "callXdcSmartContractMethod.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/XinFinApi/callXdcSmartContractMethod.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `callXdcSmartContractMethodKMS()`

> **POST** `/v3/xdc/smartcontract`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->xinFin()->callXdcSmartContractMethodKMS(
    \Tatum\Model\CallXdcSmartContractMethodKMS $call_xdc_smart_contract_method_kms
): \Tatum\Model\CallSmartContractMethod200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$call_xdc_smart_contract_method_kms** | [**\Tatum\Model\CallXdcSmartContractMethodKMS**](../Model/CallXdcSmartContractMethodKMS.md) |  |

### Return type

[**\Tatum\Model\CallSmartContractMethod200Response**](../Model/CallSmartContractMethod200Response.md)

### Description

Invoke a method in a smart contract on XinFin

CallXdcSmartContractMethodKMS operation

### Example

[✨ View "callXdcSmartContractMethodKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/XinFinApi/callXdcSmartContractMethodKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `transferXdcBlockchain()`

> **POST** `/v3/xdc/transaction`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->xinFin()->transferXdcBlockchain(
    \Tatum\Model\TransferXdcBlockchain $transfer_xdc_blockchain
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_xdc_blockchain** | [**\Tatum\Model\TransferXdcBlockchain**](../Model/TransferXdcBlockchain.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Send XDC / ERC20 from account to account

<p><b>2 credits per API call</b></p>
 <p>Send XDC or Tatum supported ERC20 token from account to account.

 <p><b>Signing a transaction</b></p>
 <p>When sending XDC, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p>
 <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p>
 <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>
 Alternatively, using the Tatum client library for supported languages.</p>


### Example

[✨ View "transferXdcBlockchain.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/XinFinApi/transferXdcBlockchain.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `transferXdcBlockchainKMS()`

> **POST** `/v3/xdc/transaction`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->xinFin()->transferXdcBlockchainKMS(
    \Tatum\Model\TransferXdcBlockchainKMS $transfer_xdc_blockchain_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_xdc_blockchain_kms** | [**\Tatum\Model\TransferXdcBlockchainKMS**](../Model/TransferXdcBlockchainKMS.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Send XDC / ERC20 from account to account

TransferXdcBlockchainKMS operation

### Example

[✨ View "transferXdcBlockchainKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/XinFinApi/transferXdcBlockchainKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xdcBroadcast()`

> **POST** `/v3/xdc/broadcast`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->xinFin()->xdcBroadcast(
    \Tatum\Model\BroadcastKMS $broadcast_kms
): \Tatum\Model\TransactionHash
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$broadcast_kms** | [**\Tatum\Model\BroadcastKMS**](../Model/BroadcastKMS.md) |  |

### Return type

[**\Tatum\Model\TransactionHash**](../Model/TransactionHash.md)

### Description

Broadcast signed XDC transaction

<p><b>2 credits per API call</b></p>
 <p>Broadcast signed transaction to XDC blockchain. This method is used internally from Tatum KMS or Tatum client libraries. It is possible to create custom signing mechanism and use this method only for broadcasting data to the blockchain.</p>


### Example

[✨ View "xdcBroadcast.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/XinFinApi/xdcBroadcast.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xdcGenerateAddress()`

> **GET** `/v3/xdc/address/{xpub}/{index}`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->xinFin()->xdcGenerateAddress(
    string $xpub,
    float $index
): \Tatum\Model\XdcGenerateAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$xpub** | **string**  | Extended public key of wallet. |
 **$index** | **float**  | Derivation index of desired address to be generated. |

### Return type

[**\Tatum\Model\XdcGenerateAddress200Response**](../Model/XdcGenerateAddress200Response.md)

### Description

Generate XDC account address from Extended public key

<p><b>1 credit per API call</b></p>
 <p>Generate XDC account deposit address from Extended public key. Deposit address is generated for the specific index - each extended public key can generate up to 2^31 addresses starting from index 0 until 2^31.</p>


### Example

[✨ View "xdcGenerateAddress.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/XinFinApi/xdcGenerateAddress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xdcGenerateAddressPrivateKey()`

> **POST** `/v3/xdc/wallet/priv`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->xinFin()->xdcGenerateAddressPrivateKey(
    \Tatum\Model\PrivKeyRequest $priv_key_request
): \Tatum\Model\PrivKey
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$priv_key_request** | [**\Tatum\Model\PrivKeyRequest**](../Model/PrivKeyRequest.md) |  |

### Return type

[**\Tatum\Model\PrivKey**](../Model/PrivKey.md)

### Description

Generate XDC private key

<p><b>1 credit per API call</b></p>
 <p>Generate private key of address from mnemonic for given derivation path index. Private key is generated for the specific index - each mnemonic can generate up to 2^31 private keys starting from index 0 until 2^31.</p>


### Example

[✨ View "xdcGenerateAddressPrivateKey.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/XinFinApi/xdcGenerateAddressPrivateKey.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xdcGenerateWallet()`

> **GET** `/v3/xdc/wallet`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->xinFin()->xdcGenerateWallet(
    [ string $mnemonic ]
): \Tatum\Model\Wallet
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mnemonic** | **string**  | Mnemonic to use for generation of extended public and private keys. | [optional]

### Return type

[**\Tatum\Model\Wallet**](../Model/Wallet.md)

### Description

Generate XDC wallet

<p><b>1 credit per API call</b></p>
 <p>Tatum supports BIP44 HD wallets. It is very convenient and secure, since it can generate 2^31 addresses from 1 mnemonic phrase. Mnemonic phrase consists of 24 special words in defined order and can restore access to all generated addresses and private keys. 
 Each address is identified by 3 main values: <ul><li>Private Key - your secret value, which should never be revealed</li> <li>Public Key - public address to be published</li> <li>Derivation index - index of generated address</li></ul> </p>
 <p>Tatum follows BIP44 specification and generates for XDC wallet with derivation path m'/44'/550'/0'/0. More about BIP44 HD wallets can be found here - <a target="_blank" href="https://github.com/bitcoin/bips/blob/master/bip-0044.mediawiki">https://github.com/bitcoin/bips/blob/master/bip-0044.mediawiki</a>. Generate BIP44 compatible XDC wallet.</p>


### Example

[✨ View "xdcGenerateWallet.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/XinFinApi/xdcGenerateWallet.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xdcGetBalance()`

> **GET** `/v3/xdc/account/balance/{address}`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->xinFin()->xdcGetBalance(
    string $address
): \Tatum\Model\XdcGetBalance200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**  | Account address you want to get balance of |

### Return type

[**\Tatum\Model\XdcGetBalance200Response**](../Model/XdcGetBalance200Response.md)

### Description

Get XDC Account balance

<p><b>1 credit per API call</b></p>
 <p>Get account balance in XDC. This method does not prints any balance of the ERC20 or ERC721 tokens on the account.</p>


### Example

[✨ View "xdcGetBalance.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/XinFinApi/xdcGetBalance.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xdcGetBlock()`

> **GET** `/v3/xdc/block/{hash}`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->xinFin()->xdcGetBlock(
    string $hash
): \Tatum\Model\XdcBlock
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**  | Block hash or block number |

### Return type

[**\Tatum\Model\XdcBlock**](../Model/XdcBlock.md)

### Description

Get XDC block by hash

<p><b>1 credit per API call</b></p>
 <p>Get XDC block by block hash or block number.</p>


### Example

[✨ View "xdcGetBlock.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/XinFinApi/xdcGetBlock.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xdcGetCurrentBlock()`

> **GET** `/v3/xdc/block/current`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->xinFin()->xdcGetCurrentBlock(
): float
```

### Parameters

This endpoint does not need any parameter.

### Return type

**float**

### Description

Get current block number

<p><b>1 credit per API call</b></p>
 <p>Get XDC current block number. This is the number of the latest block in the blockchain.</p>


### Example

[✨ View "xdcGetCurrentBlock.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/XinFinApi/xdcGetCurrentBlock.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xdcGetTransaction()`

> **GET** `/v3/xdc/transaction/{hash}`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->xinFin()->xdcGetTransaction(
    string $hash
): \Tatum\Model\XdcTx
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**  | Transaction hash |

### Return type

[**\Tatum\Model\XdcTx**](../Model/XdcTx.md)

### Description

Get XDC Transaction

<p><b>2 credits per API call</b></p>
 <p>Get XDC transaction by transaction hash.</p>


### Example

[✨ View "xdcGetTransaction.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/XinFinApi/xdcGetTransaction.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xdcGetTransactionCount()`

> **GET** `/v3/xdc/transaction/count/{address}`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->xinFin()->xdcGetTransactionCount(
    string $address
): float
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**  | address |

### Return type

**float**

### Description

Get count of outgoing XDC transactions

<p><b>1 credit per API call</b></p>
 <p>Get a number of outgoing XDC transactions for the address. When a transaction is sent, there can be multiple outgoing transactions, which are not yet processed by the blockchain. To distinguish between them, there is a counter called a nonce, which represents the order of the transaction in the list of outgoing transactions.</p>


### Example

[✨ View "xdcGetTransactionCount.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/XinFinApi/xdcGetTransactionCount.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xdcWeb3Driver()`

> **POST** `/v3/xdc/web3/{xApiKey}`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->xinFin()->xdcWeb3Driver(
    string $x_api_key,
    object $body
): object
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$x_api_key** | **string**  | Tatum X-API-Key used for authorization. |
 **$body** | **object**  |  |

### Return type

**object**

### Description

Web3 HTTP driver

<p><b>2 credits per API call</b></p>
 <p><b>This endpoint is deprecated. Use the <a href="https://apidoc.tatum.io/tag/Node-RPC" target="_blank">HTTP-based JSON RPC driver</a> instead.</b></p>

 <p>Use this endpoint URL as a http-based web3 driver to connect directly to the XDC node provided by Tatum. To learn more about XDC Web3, visit the <a href="https://howto.xinfin.org/" target="_blank">XDC developer's guide</a>.</p>


### Example

[✨ View "xdcWeb3Driver.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/XinFinApi/xdcWeb3Driver.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)
