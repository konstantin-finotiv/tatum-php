# Tatum/Api/KeyManagementSystemApi

## References

[Key Management System API documentation](https://apidoc.tatum.io/tag/Key-Management-System/)

## Methods

HTTP requests are relative to https://api.tatum.io

[🔹 **completePendingSignature()**](#completependingsignature) 

> **PUT** `/v3/kms/{id}/{txId}`
> 
> Complete pending transaction to sign

[🔹 **deletePendingTransactionToSign()**](#deletependingtransactiontosign) 

> **DELETE** `/v3/kms/{id}`
> 
> Delete transaction

[🔹 **getPendingTransactionToSign()**](#getpendingtransactiontosign) 

> **GET** `/v3/kms/{id}`
> 
> Get transaction details

[🔹 **getPendingTransactionsToSign()**](#getpendingtransactionstosign) 

> **GET** `/v3/kms/pending/{chain}`
> 
> Get pending transactions to sign

[🔹 **receivePendingTransactionsToSign()**](#receivependingtransactionstosign) 

> **POST** `/v3/kms/pending/{chain}`
> 
> Get pending transactions to sign



## `completePendingSignature()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->keyManagementSystem()->completePendingSignature(
    string $id,
    string $tx_id
)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$id** | **string**  | ID of pending transaction |
 **$tx_id** | **string**  | transaction ID of blockchain transaction |

### Return type

void (empty response body)

### Description

Complete pending transaction to sign

<h4>2 credits per API call.</h4><br/> <p>Mark pending transaction to sign as a complete and update it with a transactionID from the blockchain.</p>

### Example

[✨ View "completePendingSignature.php"](../../examples/Api/KeyManagementSystemApi/completePendingSignature.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `deletePendingTransactionToSign()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->keyManagementSystem()->deletePendingTransactionToSign(
    string $id,
    [ bool $revert = true ]
)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$id** | **string**  | ID of transaction |
 **$revert** | **bool**  | Defines whether fee should be reverted to account balance as well as amount. Defaults to true. Revert true would be typically used when withdrawal was not broadcast to blockchain. False is used usually for Ethereum ERC20 based currencies. | [optional] [default to true]

### Return type

void (empty response body)

### Description

Delete transaction

<h4>2 credits per API call.</h4><br/><p>Delete transaction to be signed. When deleting offchain transaction, linked withdrawal will be cancelled automatically.</p>

### Example

[✨ View "deletePendingTransactionToSign.php"](../../examples/Api/KeyManagementSystemApi/deletePendingTransactionToSign.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `getPendingTransactionToSign()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->keyManagementSystem()->getPendingTransactionToSign(
    string $id
): \Tatum\Model\PendingTransaction
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$id** | **string**  | ID of transaction |

### Return type

[**\Tatum\Model\PendingTransaction**](../Model/PendingTransaction.md)

### Description

Get transaction details

<h4>1 credit per API call.</h4><br/><p>Get detail of transaction to be signed / that was already signed and contains transactionId.</p>

### Example

[✨ View "getPendingTransactionToSign.php"](../../examples/Api/KeyManagementSystemApi/getPendingTransactionToSign.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `getPendingTransactionsToSign()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->keyManagementSystem()->getPendingTransactionsToSign(
    string $chain,
    [ string $signatures ]
): \Tatum\Model\PendingTransaction[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain** | **string**  | Blockchain to get pending transactions for. |
 **$signatures** | **string**  | Signature IDs of the KMS which invokes this endpoint. If multiple, they should be separated by comma. | [optional]

### Return type

[**\Tatum\Model\PendingTransaction[]**](../Model/PendingTransaction.md)

### Description

Get pending transactions to sign

<p><b>1 credit per API call</b></p> <p>Get the list of pending transactions to sign and broadcast using <a href="https://github.com/tatumio/tatum-kms" target="_blank">KMS</a>.</p>

### Example

[✨ View "getPendingTransactionsToSign.php"](../../examples/Api/KeyManagementSystemApi/getPendingTransactionsToSign.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `receivePendingTransactionsToSign()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->keyManagementSystem()->receivePendingTransactionsToSign(
    string $chain,
    [ \Tatum\Model\KmsSignatureIds $kms_signature_ids ]
): \Tatum\Model\PendingTransaction[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain** | **string**  | Blockchain to get pending transactions for. |
 **$kms_signature_ids** | [**\Tatum\Model\KmsSignatureIds**](../Model/KmsSignatureIds.md) | Signature IDs of the KMS which invokes this endpoint. | [optional]

### Return type

[**\Tatum\Model\PendingTransaction[]**](../Model/PendingTransaction.md)

### Description

Get pending transactions to sign

<p><b>1 credit for every 500 signature IDs per API call</b></p> <p>Get the list of pending transactions to sign and broadcast using <a href="https://github.com/tatumio/tatum-kms" target="_blank">KMS</a>.</p> <p><b>NOTE:</b> This API works only in KMS v5.0 or later. If you use KMS older than v5.0, use <a href="#operation/GetPendingTransactionsToSign">this API</a> instead.</p>

### Example

[✨ View "receivePendingTransactionsToSign.php"](../../examples/Api/KeyManagementSystemApi/receivePendingTransactionsToSign.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)
