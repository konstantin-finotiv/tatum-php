---
title: BitcoinCash
parent: Local/Wallet
layout: page
---

# Local/Wallet/BitcoinCash

```php
// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

// MainNet Local/Wallet/BitcoinCash
$sdk->mainnet()->local()->wallet()->bitcoinCash();

// TestNet Local/Wallet/BitcoinCash
$sdk->testnet()->local()->wallet()->bitcoinCash();
```

Bitcoin Cash HD Wallet

Method | Description
------------- | -------------
[**generateWallet()**](#generatewallet) | Generate wallet
[**generateAddressFromXpub()**](#generateaddressfromxpub) | Generate address from xPub and index
[**generateAddressFromPrivateKey()**](#generateaddressfromprivatekey) | Generate address from xPub and index
[**generatePrivateKey()**](#generateprivatekey) | Generate private key from mnemonic and index

# `generateWallet()`

## Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->local()->wallet()->bitcoinCash()->generateWallet(
    [ string $mnemonic = null ]
): \Tatum\Model\Wallet
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$mnemonic** | `string` | 24-word mnemonic |  [optional] [default to null]

### Return type

Wallet Model ([**\Tatum\Model\Wallet**](../../../Model/Wallet))

### Description

Generate wallet

### Example

[✨ View "generateWallet.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Local/Wallet/BitcoinCash/generateWallet.php)

[Back to top](#top)


# `generateAddressFromXpub()`

## Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->local()->wallet()->bitcoinCash()->generateAddressFromXpub(
    string $xpub,
    int $index
): \Tatum\Model\GeneratedAddressBtc
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$xpub** | `string` | Extended public key | 
**$index** | `int` | Derivation index | 

### Return type

Address Model ([**\Tatum\Model\GeneratedAddressBtc**](../../../Model/GeneratedAddressBtc))

### Description

Generate address from xPub and index

### Example

[✨ View "generateAddressFromXpub.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Local/Wallet/BitcoinCash/generateAddressFromXpub.php)

[Back to top](#top)


# `generateAddressFromPrivateKey()`

## Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->local()->wallet()->bitcoinCash()->generateAddressFromPrivateKey(
    \Tatum\Model\PrivKey $privateKey
): \Tatum\Model\GeneratedAddressBtc
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$privateKey** | [**\Tatum\Model\PrivKey**](../../../Model/PrivKey) | Private Key | 

### Return type

Address Model ([**\Tatum\Model\GeneratedAddressBtc**](../../../Model/GeneratedAddressBtc))

### Description

Generate address from xPub and index

### Example

[✨ View "generateAddressFromPrivateKey.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Local/Wallet/BitcoinCash/generateAddressFromPrivateKey.php)

[Back to top](#top)


# `generatePrivateKey()`

## Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->local()->wallet()->bitcoinCash()->generatePrivateKey(
    string $mnemonic,
    int $index
): \Tatum\Model\PrivKey
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$mnemonic** | `string` | 24-word mnemonic | 
**$index** | `int` | Derivation index | 

### Return type

Private Key ([**\Tatum\Model\PrivKey**](../../../Model/PrivKey))

### Description

Generate private key from mnemonic and index

### Example

[✨ View "generatePrivateKey.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Local/Wallet/BitcoinCash/generatePrivateKey.php)

[Back to top](#top)

