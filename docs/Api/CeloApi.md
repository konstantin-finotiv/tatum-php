---
title: Celo
parent: API
layout: page
---

# Api/CeloApi

[Celo API Reference](https://apidoc.tatum.io/tag/Celo/)

```php
// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

// MainNet API Call
$sdk->mainnet()->api()->celo();

// TestNet API Call
$sdk->testnet()->api()->celo();
```

## Methods

Method | Description
------------- | -------------
[**callCeloReadSmartContractMethod()**](#callceloreadsmartcontractmethod) | Invoke a method in a smart contract on Celo
[**callCeloSmartContractMethod()**](#callcelosmartcontractmethod) | Invoke a method in a smart contract on Celo
[**callCeloSmartContractMethodKMS()**](#callcelosmartcontractmethodkms) | Invoke a method in a smart contract on Celo
[**celoBroadcast()**](#celobroadcast) | Broadcast signed Celo transaction
[**celoGenerateAddress()**](#celogenerateaddress) | Generate Celo account address from Extended public key
[**celoGenerateAddressPrivateKey()**](#celogenerateaddressprivatekey) | Generate Celo private key
[**celoGenerateWallet()**](#celogeneratewallet) | Generate Celo wallet
[**celoGetBalance()**](#celogetbalance) | Get Celo Account balance
[**celoGetBlock()**](#celogetblock) | Get Celo block by hash
[**celoGetCurrentBlock()**](#celogetcurrentblock) | Get current block number
[**celoGetTransaction()**](#celogettransaction) | Get Celo Transaction
[**celoGetTransactionByAddress()**](#celogettransactionbyaddress) | Get Celo transactions by address
[**celoGetTransactionCount()**](#celogettransactioncount) | Get count of outgoing Celo transactions
[**transferCeloBlockchain()**](#transferceloblockchain) | Send Celo / ERC20 from account to account
[**transferCeloBlockchainKMS()**](#transferceloblockchainkms) | Send Celo / ERC20 from account to account


## `callCeloReadSmartContractMethod()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **callCeloReadSmartContractMethod.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/CeloApi/callCeloReadSmartContractMethod.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/celo/smartcontract`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->celo()->callCeloReadSmartContractMethod(
    \Tatum\Model\CallCeloReadSmartContractMethod $call_celo_read_smart_contract_method
): \Tatum\Model\CallSmartContractMethod200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$call_celo_read_smart_contract_method** | [**\Tatum\Model\CallCeloReadSmartContractMethod**](../../Model/CallCeloReadSmartContractMethod) |  |

### Return type

[**\Tatum\Model\CallSmartContractMethod200Response**](../../Model/CallSmartContractMethod200Response)

### Description

> Invoke a method in a smart contract on Celo

**2 credits per API call**

Invoke a method in an existing smart contract on Celo.

You can call a read-only or write method.

* For **read-only** methods, the output of the invoked method is returned.
* For **write** methods, the ID of the associated transaction is returned.

**Troubleshooting a failed transaction** Tatum ensures that this API works against the blockchain (accesses the blockchain, finds the specified smart contract, and executes the specified ABI method with the provided parameters). However, because this API can be run against any smart contract on the blockchain, Tatum cannot in any way guarantee that the method itself will be executed successfully.

If you have issues with invoking the method, refer to the user documentation for this method, or contact the author of the smart contract.

For more information about invoking methods in smart contracts, see [this article](https://support.tatum.io/support/solutions/articles/80001052441) on our Support Portal.

**Signing a transaction** When invoking a method in a smart contract, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum [Key Management System (KMS)](https://github.com/tatumio/tatum-kms) and provide the signature ID instead of the private key in the API. Alternatively, you can use the [Tatum JavaScript client](https://github.com/tatumio/tatum-js).

[Back to top](#top){: .btn .btn-purple }

---


## `callCeloSmartContractMethod()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **callCeloSmartContractMethod.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/CeloApi/callCeloSmartContractMethod.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/celo/smartcontract`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->celo()->callCeloSmartContractMethod(
    \Tatum\Model\CallCeloSmartContractMethod $call_celo_smart_contract_method
): \Tatum\Model\CallSmartContractMethod200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$call_celo_smart_contract_method** | [**\Tatum\Model\CallCeloSmartContractMethod**](../../Model/CallCeloSmartContractMethod) |  |

### Return type

[**\Tatum\Model\CallSmartContractMethod200Response**](../../Model/CallSmartContractMethod200Response)

### Description

> Invoke a method in a smart contract on Celo



[Back to top](#top){: .btn .btn-purple }

---


## `callCeloSmartContractMethodKMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **callCeloSmartContractMethodKMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/CeloApi/callCeloSmartContractMethodKMS.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/celo/smartcontract`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->celo()->callCeloSmartContractMethodKMS(
    \Tatum\Model\CallCeloSmartContractMethodKMS $call_celo_smart_contract_method_kms
): \Tatum\Model\CallSmartContractMethod200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$call_celo_smart_contract_method_kms** | [**\Tatum\Model\CallCeloSmartContractMethodKMS**](../../Model/CallCeloSmartContractMethodKMS) |  |

### Return type

[**\Tatum\Model\CallSmartContractMethod200Response**](../../Model/CallSmartContractMethod200Response)

### Description

> Invoke a method in a smart contract on Celo



[Back to top](#top){: .btn .btn-purple }

---


## `celoBroadcast()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **celoBroadcast.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/CeloApi/celoBroadcast.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/celo/broadcast`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->celo()->celoBroadcast(
    \Tatum\Model\BroadcastKMS $broadcast_kms
): \Tatum\Model\TransactionHash
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$broadcast_kms** | [**\Tatum\Model\BroadcastKMS**](../../Model/BroadcastKMS) |  |

### Return type

[**\Tatum\Model\TransactionHash**](../../Model/TransactionHash)

### Description

> Broadcast signed Celo transaction

**2 credits per API call**

Broadcast signed transaction to Celo blockchain. This method is used internally from Tatum KMS or Tatum client libraries. It is possible to create custom signing mechanism and use this method only for broadcasting data to the blockchain.

[Back to top](#top){: .btn .btn-purple }

---


## `celoGenerateAddress()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **celoGenerateAddress.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/CeloApi/celoGenerateAddress.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/v3/celo/address/{xpub}/{index}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->celo()->celoGenerateAddress(
    string $xpub,
    float $index
): \Tatum\Model\CeloGenerateAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$xpub** | **string**  | Extended public key of wallet. |
 **$index** | **float**  | Derivation index of desired address to be generated. |

### Return type

[**\Tatum\Model\CeloGenerateAddress200Response**](../../Model/CeloGenerateAddress200Response)

### Description

> Generate Celo account address from Extended public key

**1 credit per API call**

Generate Celo account deposit address from Extended public key. Deposit address is generated for the specific index - each extended public key can generate up to 2^31 addresses starting from index 0 until 2^31.

[Back to top](#top){: .btn .btn-purple }

---


## `celoGenerateAddressPrivateKey()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **celoGenerateAddressPrivateKey.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/CeloApi/celoGenerateAddressPrivateKey.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/celo/wallet/priv`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->celo()->celoGenerateAddressPrivateKey(
    \Tatum\Model\PrivKeyRequest $priv_key_request
): \Tatum\Model\PrivKey
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$priv_key_request** | [**\Tatum\Model\PrivKeyRequest**](../../Model/PrivKeyRequest) |  |

### Return type

[**\Tatum\Model\PrivKey**](../../Model/PrivKey)

### Description

> Generate Celo private key

**1 credit per API call**

Generate private key of address from mnemonic for given derivation path index. Private key is generated for the specific index - each mnemonic can generate up to 2^31 private keys starting from index 0 until 2^31.

[Back to top](#top){: .btn .btn-purple }

---


## `celoGenerateWallet()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **celoGenerateWallet.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/CeloApi/celoGenerateWallet.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/v3/celo/wallet`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->celo()->celoGenerateWallet(
    [ string $mnemonic ]
): \Tatum\Model\Wallet
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mnemonic** | **string**  | Mnemonic to use for generation of extended public and private keys. | [optional]

### Return type

[**\Tatum\Model\Wallet**](../../Model/Wallet)

### Description

> Generate Celo wallet

**1 credit per API call**

Tatum supports BIP44 HD wallets. It is very convenient and secure, since it can generate 2^31 addresses from 1 mnemonic phrase. Mnemonic phrase consists of 24 special words in defined order and can restore access to all generated addresses and private keys. Each address is identified by 3 main values:
* Private Key - your secret value, which should never be revealed
* Public Key - public address to be published
* Derivation index - index of generated address

Tatum follows BIP44 specification and generates for Celo wallet with derivation path m'/44'/52752'/0'/0\. More about BIP44 HD wallets can be found here - [https://github.com/bitcoin/bips/blob/master/bip-0044.mediawiki](https://github.com/bitcoin/bips/blob/master/bip-0044.mediawiki). Generate BIP44 compatible Celo wallet.

[Back to top](#top){: .btn .btn-purple }

---


## `celoGetBalance()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **celoGetBalance.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/CeloApi/celoGetBalance.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/v3/celo/account/balance/{address}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->celo()->celoGetBalance(
    string $address
): \Tatum\Model\CeloGetBalance200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**  | Account address you want to get balance of |

### Return type

[**\Tatum\Model\CeloGetBalance200Response**](../../Model/CeloGetBalance200Response)

### Description

> Get Celo Account balance

**1 credit per API call**

Get Celo account balance in ETH. This method does not prints any balance of the ERC20 or ERC721 tokens on the account.

[Back to top](#top){: .btn .btn-purple }

---


## `celoGetBlock()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **celoGetBlock.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/CeloApi/celoGetBlock.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/v3/celo/block/{hash}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->celo()->celoGetBlock(
    string $hash
): \Tatum\Model\CeloBlock
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**  | Block hash or block number |

### Return type

[**\Tatum\Model\CeloBlock**](../../Model/CeloBlock)

### Description

> Get Celo block by hash

**1 credit per API call**

Get Celo block by block hash or block number.

[Back to top](#top){: .btn .btn-purple }

---


## `celoGetCurrentBlock()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **celoGetCurrentBlock.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/CeloApi/celoGetCurrentBlock.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/v3/celo/block/current`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->celo()->celoGetCurrentBlock(): float
```

### Parameters

This endpoint does not need any parameter.

### Return type

**float**

### Description

> Get current block number

**1 credit per API call**

Get Celo current block number. This is the number of the latest block in the blockchain.

[Back to top](#top){: .btn .btn-purple }

---


## `celoGetTransaction()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **celoGetTransaction.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/CeloApi/celoGetTransaction.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/v3/celo/transaction/{hash}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->celo()->celoGetTransaction(
    string $hash
): \Tatum\Model\CeloTx
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**  | Transaction hash |

### Return type

[**\Tatum\Model\CeloTx**](../../Model/CeloTx)

### Description

> Get Celo Transaction

**2 credits per API call**

Get Celo transaction by transaction hash.

[Back to top](#top){: .btn .btn-purple }

---


## `celoGetTransactionByAddress()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **celoGetTransactionByAddress.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/CeloApi/celoGetTransactionByAddress.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/v3/celo/account/transaction/{address}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->celo()->celoGetTransactionByAddress(
    string $address,
    float $page_size,
    [ float $offset, ]
    [ float $from, ]
    [ float $to, ]
    [ string $sort = 'DESC' ]
): \Tatum\Model\CeloTx[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**  | Account address you want to get balance of |
 **$page_size** | **float**  | Max number of items per page is 50. |
 **$offset** | **float**  | Offset to obtain next page of the data. | [optional]
 **$from** | **float**  | Transactions from this block onwards will be included. | [optional]
 **$to** | **float**  | Transactions up to this block will be included. | [optional]
 **$sort** | **string**  | Sorting of the data. ASC - oldest first, DESC - newest first. | [optional] [default to &#39;DESC&#39;]

### Return type

[**\Tatum\Model\CeloTx[]**](../../Model/CeloTx)

### Description

> Get Celo transactions by address

**1 credit per API call**

Get Celo transactions by address. This includes incoming and outgoing transactions for the address.

[Back to top](#top){: .btn .btn-purple }

---


## `celoGetTransactionCount()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **celoGetTransactionCount.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/CeloApi/celoGetTransactionCount.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/v3/celo/transaction/count/{address}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->celo()->celoGetTransactionCount(
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

> Get count of outgoing Celo transactions

**1 credit per API call**

Get a number of outgoing Celo transactions for the address. When a transaction is sent, there can be multiple outgoing transactions, which are not yet processed by the blockchain. To distinguish between them, there is a counter called a nonce, which represents the order of the transaction in the list of outgoing transactions.

[Back to top](#top){: .btn .btn-purple }

---


## `transferCeloBlockchain()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **transferCeloBlockchain.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/CeloApi/transferCeloBlockchain.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/celo/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->celo()->transferCeloBlockchain(
    \Tatum\Model\TransferCeloBlockchain $transfer_celo_blockchain
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_celo_blockchain** | [**\Tatum\Model\TransferCeloBlockchain**](../../Model/TransferCeloBlockchain) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Send Celo / ERC20 from account to account

**2 credits per API call**

Send Celo, cUSD or Tatum supported ERC20 token from account to account.

**Signing a transaction**

When sending CELO, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum [Key Management System (KMS)](https://github.com/tatumio/tatum-kms) and provide the signature ID instead of the private key in the API. Alternatively, you can use the [Tatum JavaScript client](https://github.com/tatumio/tatum-js).

[Back to top](#top){: .btn .btn-purple }

---


## `transferCeloBlockchainKMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **transferCeloBlockchainKMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/CeloApi/transferCeloBlockchainKMS.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/celo/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->celo()->transferCeloBlockchainKMS(
    \Tatum\Model\TransferCeloBlockchainKMS $transfer_celo_blockchain_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_celo_blockchain_kms** | [**\Tatum\Model\TransferCeloBlockchainKMS**](../../Model/TransferCeloBlockchainKMS) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Send Celo / ERC20 from account to account



[Back to top](#top){: .btn .btn-purple }

---
