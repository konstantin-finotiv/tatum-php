---
title: Malicious address
parent: API
layout: page
---

# Api/MaliciousAddressApi

[Malicious address API Reference](https://apidoc.tatum.io/tag/Malicious-address/)

```php
// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

// MainNet API Call
$sdk->mainnet()->api()->maliciousAddress();

// TestNet API Call
$sdk->testnet()->api()->maliciousAddress();
```

## Methods

Method | Description
------------- | -------------
[**checkMalicousAddress()**](#checkmalicousaddress) | Check malicous address


## `checkMalicousAddress()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **checkMalicousAddress.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/MaliciousAddressApi/checkMalicousAddress.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/v3/security/address/{address}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->maliciousAddress()->checkMalicousAddress(
    string $address
): \Tatum\Model\CheckMalicousAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**  | Blockchain Address to check |

### Return type

[**\Tatum\Model\CheckMalicousAddress200Response**](../../Model/CheckMalicousAddress200Response)

### Description

> Check malicous address

#### 1 credit per API call.

 
Check, if the blockchain address is malicous. Malicous address can contain assets from the DarkWeb, is connected to the scam projects or contains stolen funds.

 
Supported Chains: ETH, BTC, LTC

[Back to top](#top){: .btn .btn-purple }

---
