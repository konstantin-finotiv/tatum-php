---
title: Service utils
parent: API
layout: page
---

# Api/ServiceUtilsApi

## References

[Service utils API documentation](https://apidoc.tatum.io/tag/Service-utils/)

## Methods

Method | Description
------------- | ------------- | -------------
[**freezeApiKey()**](#freezeapikey) | Freeze API Key
[**getCredits()**](#getcredits) | Get information about your credit consumption for the last month
[**getVersion()**](#getversion) | Get API version
[**unfreezeApiKey()**](#unfreezeapikey) | Unfreeze API Key


## `freezeApiKey()`

> **PUT** `/v3/tatum/freeze`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->serviceUtils()->freezeApiKey(
)
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Description

Freeze API Key

<h4>2 credits per API call.</h4>

Freeze the API Key. It's not possible to perform sensitive operations like send ledger transaction, send off-chain transaction, send blockchain transaction, broadcast blockchain transaction, perform Order book trade or create blockage. Only read operations are permitted.

### Example

[✨ View "freezeApiKey.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/ServiceUtilsApi/freezeApiKey.php)

[[Back to top]](#top)



## `getCredits()`

> **GET** `/v3/tatum/usage`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->serviceUtils()->getCredits(
): \Tatum\Model\Consumption[]
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Tatum\Model\Consumption[]**](../Model/Consumption.md)

### Description

Get information about your credit consumption for the last month

**1 credit per API call**

 Get information about your credit consumption for the last month (used credits per day).

### Example

[✨ View "getCredits.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/ServiceUtilsApi/getCredits.php)

[[Back to top]](#top)



## `getVersion()`

> **GET** `/v3/tatum/version`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->serviceUtils()->getVersion(
): \Tatum\Model\GetVersion200Response
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Tatum\Model\GetVersion200Response**](../Model/GetVersion200Response.md)

### Description

Get API version

<h4>1 credit per API call.</h4>

Get current version of the API.

### Example

[✨ View "getVersion.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/ServiceUtilsApi/getVersion.php)

[[Back to top]](#top)



## `unfreezeApiKey()`

> **DELETE** `/v3/tatum/freeze`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->serviceUtils()->unfreezeApiKey(
)
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Description

Unfreeze API Key

<h4>2 credits per API call.</h4>

Unfreeze the API Key. It's possible to perform sensitive operations like send ledger transaction, send off-chain transaction, send blockchain transaction, broadcast blockchain transaction, perform Order book trade or create blockage again.

### Example

[✨ View "unfreezeApiKey.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/ServiceUtilsApi/unfreezeApiKey.php)

[[Back to top]](#top)

