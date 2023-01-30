---
title: BitcoinCash
parent: Local/Transaction
layout: page
---

# Local/Transaction/BitcoinCash

```php
// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

// MainNet Local/Transaction/BitcoinCash
$sdk->mainnet()->local()->transaction()->bitcoinCash();

// TestNet Local/Transaction/BitcoinCash
$sdk->testnet()->local()->transaction()->bitcoinCash();
```

Bitcoin Cash Transaction

Method | Description
------------- | -------------
[**sign()**](#sign) | Sign transaction

# `sign()`

## Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **sign.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Local/Transaction/BitcoinCash/sign.php){: .btn .btn-green .mt-4}

## Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->local()->transaction()->bitcoinCash()->sign(
    \Tatum\Local\Transaction\Bitcoin\Transfer $transfer
): string
```

## Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$transfer** | `\Tatum\Local\Transaction\Bitcoin\Transfer` | Transfer object | 

## Return type

Signed transaction hex (`string`)

## Description

Sign transaction

[Back to top](#top){: .btn .btn-purple }

---

