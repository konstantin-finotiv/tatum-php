# Tatum - PHP SDK

## Table of Contents
- [Welcome!](#welcome)
  - [What is Tatum?](#what-is-tatum)
  - [Need help?](#need-help)
- [Installation \& Usage](#installation--usage)
  - [Requirements](#requirements)
- [Getting Started](#getting-started)
- [Documentation](#documentation)
- [Tests](#tests)
- [About](#about-this-repository)

## Welcome!

This is the official Tatum SDK for PHP version `2.0.1` based on API version `3.17.1`.

### What is Tatum?

Tatum offers a flexible framework to build, run, and scale blockchain apps fast. To learn more about the
Tatum blockchain development framework, visit [our website](https://tatum.io/framework).

The Tatum API features powerful endpoints that simplify a complex blockchain into single API requests. Code for all
supported blockchains using unified API calls.

### Need help?

To chat with other developers, get help from the Support team, and engage with the thriving Tatum community, join 
our [Discord server](https://discord.com/invite/tatum). For more information about how to work with Tatum,
review the [online documentation](https://docs.tatum.io/).

## Installation & Usage

To install the Tatum SDK, simply clone this repository and load it with a [PSR-4](https://www.php-fig.org/psr/psr-4/) autoloader.
If you're having doubts, you can use the provided `autoload.php` file.

You can also install the latest version of `Tatum PHP SDK` by issuing the following command:

```
composer require tatumio/tatum-php
```

This SDK has no external dependencies in production. This means you can use this library in any PHP project even when you don't have access to Composer.

### Requirements

Please use `PHP 7.3` or later and the PHP extensions mentioned in the [`composer.json`](/composer.json) file.

## Getting Started

Please follow the [installation procedure](#installation--usage) then create an entrypoint PHP file with the following:

```php
<?php

// Import a PSR-4 autoloader
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

try {
    /** @var $walletTestnet \Tatum\Model\Wallet */
    $walletTestnet = $sdk
        ->testnet()
        ->api()
        ->bitcoin()
        ->btcGenerateWallet();

    /** @var $walletTestnetLocal \Tatum\Model\Wallet */
    $walletTestnetLocal = $sdk
        ->testnet()
        ->local()
        ->wallet()
        ->bitcoin()
        ->generateWallet($walletTestnet->getMnemonic());

    /** @var $walletMainnet \Tatum\Model\Wallet */
    $walletMainnet = $sdk
        ->mainnet()
        ->api()
        ->bitcoin()
        ->btcGenerateWallet();

    /** @var $walletMainnetLocal \Tatum\Model\Wallet */
    $walletMainnetLocal = $sdk
        ->mainnet()
        ->local()
        ->wallet()
        ->bitcoin()
        ->generateWallet($walletMainnet->getMnemonic());

    // Get the extended public key
    var_dump("TestNet", $walletTestnet->getXpub(), $walletTestnetLocal->getXpub());
    echo PHP_EOL;
    var_dump("MainNet", $walletMainnet->getXpub(), $walletMainnetLocal->getXpub());

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling bitcoin()->btcGenerateWallet(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling bitcoin()->btcGenerateWallet(): " . $exc->getMessage() . PHP_EOL;
}
```

## Documentation

Learn more about [available methods](./docs/index.md).

## Tests

To run the unit tests, use:

```bash
composer install
vendor/bin/phpunit
```
## About this repository

This PHP SDK is automatically generated by the [Tatum SDK Generator](https://github.com/tatumio):

- API version: `3.17.1`
- Package version: [![2.0.1](https://img.shields.io/packagist/v/tatumio/tatum-php.svg?style=flat)](https://packagist.org/packages/tatumio/tatum-php)
- PHP [Versions](https://www.php.net/supported-versions.php): `7.3`, `7.4`, `8.0`, `8.1`, `8.2`
