# Tatum - PHP SDK

[![Total Downloads][badge-downloads]][packagist]
[![Release Version][badge-release]][packagist]
[![OpenAPI Version][badge-api]][api]
[![PHP Version][badge-php]][php]
[![Software License][badge-license]][license]

## Table of Contents
- [Welcome!](#welcome)
  - [What is Tatum?](#what-is-tatum)
  - [Need help?](#need-help)
- [Installation \& Usage](#installation--usage)
  - [Requirements](#requirements)
- [Getting Started](#getting-started)
  - [Documentation](#documentation)
  - [Examples](#examples)
  - [Tests](#tests)
  - [Configuration](#configuration)
  - [Debugging](#debugging)
    - [Enable debugging](#enable-debugging)
    - [Change output location](#change-output-location)
    - [Disable sanitizer](#disable-sanitizer)
    - [Example output](#example-output)

## Welcome!

This is the official Tatum SDK for PHP version `2.0.0` based on API version `3.17.2`.

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

This SDK requires `64-bit` `PHP 7.3` or later with the following extensions:

 * `ext-curl`
 * `ext-json`
 * `ext-gmp`
 * `ext-bcmath`
 * `ext-mbstring`

Supported PHP [Versions](https://www.php.net/supported-versions.php): `7.3`, `7.4`, `8.0`, `8.1`, `8.2`.

## Getting Started

Please follow the [installation procedure](#installation--usage) then create an entrypoint PHP file with the following:

```php
<?php

// Import a PSR-4 autoloader
require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

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
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling bitcoin()->btcGenerateWallet(): " . $exc->getMessage() . PHP_EOL;
}
```

Please note that both **api keys** are optional when creating a new instance of `\Tatum\Sdk()`.

If you don't provide an API key, a new one is generated automatically for you based on your IP address.

> Please note that some parts of the API require using your own API key with either a free or paid plan.

### Documentation

Learn more about [available methods](./docs/index.md).

### Examples

To run the examples, use:

```bash
php -f ./examples/{path-to-example-file}.php
```

For security reasons you cannot execute these files from a server request.

### Tests

To run the unit tests, use:

```bash
composer install
vendor/bin/phpunit
```

### Configuration

MainNet and TestNet operations have their own configuration object:

```php
$sdk->mainnet()->config();
$sdk->testnet()->config();
```

You can fetch the following:

  * [Debugging](#debugging) tools
  * `getApiKey()`: Your [Tatum API key](https://dashboard.tatum.io)
  * `getTempFolderPath()`: Path for storing downloaded files
  * `getUserAgent()`: Request header for API calls
  * `getHost()`: API server domain
  * `getVersions()` - array containing:
    * Operating System version
    * PHP version
    * OpenAPI specification version
    * SDK version

You can change the following:

  * [Debugging](#debugging) tools
  * `setApiKey()`: Note - set the API key for the current network type!
  * `setTempFolderPath()`

### Debugging

The debugger allows you to get detailed information on API requests made by the SDK.

#### Enable debugging

Debugging is disabled by default but you can enable it with ease:

```php
$sdk->{mainnet/testnet}()->config()->setDebug(true);
```

Notice that the debugger functionality is strictly tied to your `$sdk` instance and you can have
different debugger behaviors on the mainnet and testnet.

#### Change output location

If you have enabled debugging, additional information will be written to the specified location.

By default, the write location for the `debugger` is your standard CLI output, or `php://output`.

You can redirect the output of the debugger to any other file:

```php
$sdk->{mainnet/testnet}()->config()->setDebugFile('/path/to/file.log');
```

#### Disable sanitizer

By default, sensitive values like `x-api-key`, `private key` and `mnemonic` are partially obfuscated.
You can disable this functionality for local testing only.

**WARNING**: Never share logs that were produced with the `debug sanitizer` turned off!

```php
$sdk->{mainnet/testnet}()->config()->setDebugSanitizer(false);
```

#### Example output

<details>
<summary>👓 GET Request</summary>

```
>>>>>>>>>>>>>>>>>>>>>>>>>> Tatum API REQUEST TestNet >>>>>>>>>>>>>>>>>>>>>>>>>>>
curl -i -X GET \
  'https://api.tatum.io/v3/bitcoin/wallet?mnemonic=******&type=testnet' \
  -H 'Host: api.tatum.io' \
  -H 'Content-Type: application/json' \
  -H 'Accept: application/json' \
  -H 'x-api-key: abc******xyz_100' \
  -H 'User-Agent: Tatum_SDK_PHP_DebugMode/2.0.0' 
>>>>>>>>>>>>>>>>>>>>>>>>>> /Tatum API REQUEST TestNet >>>>>>>>>>>>>>>>>>>>>>>>>>
<<<<<<<<<<<<<<<<<<<<<<<<<< Tatum API RESPONSE TestNet <<<<<<<<<<<<<<<<<<<<<<<<<<
Status code: 200
Headers:
* Date: Fri, 06 Jan 2023 15:52:36 GMT
* Content-Type: application/json; charset=utf-8
* Content-Length: 294
* Connection: keep-alive
* x-dns-prefetch-control: off
* expect-ct: max-age=0
* x-frame-options: SAMEORIGIN
* strict-transport-security: max-age=15552000; includeSubDomains
* x-download-options: noopen
* x-content-type-options: nosniff
* x-permitted-cross-domain-policies: none
* referrer-policy: no-referrer
* x-xss-protection: 0
* access-control-allow-origin: *
* etag: W/"126-UEDy4ticGv1whUK9HiIOXgvCseY"
* x-ratelimit-persec: 5
* via: 1.1 google
* alt-svc: h3=":443"; ma=86400, h3-29=":443"; ma=86400
* CF-Cache-Status: DYNAMIC
* NEL: {"success_fraction":0,"report_to":"cf-nel","max_age":604800}
* Server: cloudflare
* CF-RAY: 78559f2ded6e0b04-AMS
Body:
{
    "mnemonic": "******",
    "xpub": "tpubDExxmbZbZ8hvcykrL66zGKsWy8p8CUmV4vUErffboQoahPr4goABNmaZnnRgmh8ePRcJ3eHuivEG87HBdsquU3FQJstbxJjKwhtjGiWrpB2"
}
<<<<<<<<<<<<<<<<<<<<<<<<< /Tatum API RESPONSE TestNet <<<<<<<<<<<<<<<<<<<<<<<<<<
```
</details>

<details>
<summary>📦 POST/PUT Request</summary>

```
>>>>>>>>>>>>>>>>>>>>>>>>>> Tatum API REQUEST TestNet >>>>>>>>>>>>>>>>>>>>>>>>>>>
curl -i -X POST \
  'https://api.tatum.io/v3/bitcoin/wallet/priv?type=testnet' \
  -H 'Host: api.tatum.io' \
  -H 'Content-Type: application/json' \
  -H 'Accept: application/json' \
  -H 'x-api-key: abc******xyz_100' \
  -H 'User-Agent: Tatum_SDK_PHP_DebugMode/2.0.0' \
  -d '{
    "index": 1,
    "mnemonic": "******"
}' 
>>>>>>>>>>>>>>>>>>>>>>>>>> /Tatum API REQUEST TestNet >>>>>>>>>>>>>>>>>>>>>>>>>>
<<<<<<<<<<<<<<<<<<<<<<<<<< Tatum API RESPONSE TestNet <<<<<<<<<<<<<<<<<<<<<<<<<<
Status code: 200
Headers:
* Date: Fri, 06 Jan 2023 15:52:38 GMT
* Content-Type: application/json; charset=utf-8
* Content-Length: 62
* Connection: keep-alive
* x-dns-prefetch-control: off
* expect-ct: max-age=0
* x-frame-options: SAMEORIGIN
* strict-transport-security: max-age=15552000; includeSubDomains
* x-download-options: noopen
* x-content-type-options: nosniff
* x-permitted-cross-domain-policies: none
* referrer-policy: no-referrer
* x-xss-protection: 0
* access-control-allow-origin: *
* etag: W/"3e-2BVRhhNfjoTw5p9h26taGsms6ig"
* x-ratelimit-persec: 5
* via: 1.1 google
* alt-svc: h3=":443"; ma=86400, h3-29=":443"; ma=86400
* CF-Cache-Status: DYNAMIC
* NEL: {"success_fraction":0,"report_to":"cf-nel","max_age":604800}
* Server: cloudflare
* CF-RAY: 78559f380aa6bba4-FRA
Body:
{
    "key": "cTPGqe6hkwVY6JNHJUZ4wSUvPo8GNMe2cDFTsFV1jSqCBMDKpfSU"
}
<<<<<<<<<<<<<<<<<<<<<<<<< /Tatum API RESPONSE TestNet <<<<<<<<<<<<<<<<<<<<<<<<<<
```
</details>

<details>
<summary>📤 File Upload</summary>

```
>>>>>>>>>>>>>>>>>>>>>>>>>> Tatum API REQUEST MainNet >>>>>>>>>>>>>>>>>>>>>>>>>>>
curl -i -X POST \
  'https://api.tatum.io/v3/ipfs' \
  -H 'Host: api.tatum.io' \
  -H 'Accept: application/json' \
  -H 'Content-Type: multipart/form-data' \
  -H 'x-api-key: abc******xyz_100' \
  -H 'User-Agent: Tatum_SDK_PHP_DebugMode/2.0.0' \
  -F file=@screen-dev-mode.png 
>>>>>>>>>>>>>>>>>>>>>>>>>> /Tatum API REQUEST MainNet >>>>>>>>>>>>>>>>>>>>>>>>>>
<<<<<<<<<<<<<<<<<<<<<<<<<< Tatum API RESPONSE MainNet <<<<<<<<<<<<<<<<<<<<<<<<<<
Status code: 201
Headers:
* Date: Fri, 06 Jan 2023 15:52:42 GMT
* Content-Type: application/json; charset=utf-8
* Content-Length: 74
* Connection: keep-alive
* x-dns-prefetch-control: off
* expect-ct: max-age=0
* x-frame-options: SAMEORIGIN
* strict-transport-security: max-age=15552000; includeSubDomains
* x-download-options: noopen
* x-content-type-options: nosniff
* x-permitted-cross-domain-policies: none
* referrer-policy: no-referrer
* x-xss-protection: 0
* access-control-allow-origin: *
* etag: W/"4a-KSwBqJVEyPOjPOyRGxy/Ms1CzHc"
* x-ratelimit-persec: 5
* via: 1.1 google
* alt-svc: h3=":443"; ma=86400, h3-29=":443"; ma=86400
* CF-Cache-Status: DYNAMIC
* NEL: {"success_fraction":0,"report_to":"cf-nel","max_age":604800}
* Server: cloudflare
* CF-RAY: 78559f42ceae23b2-LHR
Body:
{
    "ipfsHash": "bafkreihjtmd4gg5cujvhzdvg2jx7xawwjpmee74bkcf5pgpw6yu6n6nka4"
}
<<<<<<<<<<<<<<<<<<<<<<<<< /Tatum API RESPONSE MainNet <<<<<<<<<<<<<<<<<<<<<<<<<<
```
</details>

<details>
<summary>📥 File Download</summary>

```
>>>>>>>>>>>>>>>>>>>>>>>>>> Tatum API REQUEST TestNet >>>>>>>>>>>>>>>>>>>>>>>>>>>
curl -i -X GET \
  'https://api.tatum.io/v3/ipfs/bafkreihjtmd4gg5cujvhzdvg2jx7xawwjpmee74bkcf5pgpw6yu6n6nka4?type=testnet' \
  -H 'Host: api.tatum.io' \
  -H 'Content-Type: application/json' \
  -H 'Accept: application/json' \
  -H 'x-api-key: abc******xyz_100' \
  -H 'User-Agent: Tatum_SDK_PHP_DebugMode/2.0.0' 
>>>>>>>>>>>>>>>>>>>>>>>>>> /Tatum API REQUEST TestNet >>>>>>>>>>>>>>>>>>>>>>>>>>
<<<<<<<<<<<<<<<<<<<<<<<<<< Tatum API RESPONSE TestNet <<<<<<<<<<<<<<<<<<<<<<<<<<
Status code: 200
Headers:
* Date: Fri, 06 Jan 2023 15:52:48 GMT
* Transfer-Encoding: chunked
* Connection: keep-alive
* x-dns-prefetch-control: off
* expect-ct: max-age=0
* x-frame-options: SAMEORIGIN
* strict-transport-security: max-age=15552000; includeSubDomains
* x-download-options: noopen
* x-content-type-options: nosniff
* x-permitted-cross-domain-policies: none
* referrer-policy: no-referrer
* x-xss-protection: 0
* access-control-allow-origin: *
* x-ratelimit-persec: 5
* via: 1.1 google
* alt-svc: h3=":443"; ma=86400, h3-29=":443"; ma=86400
* CF-Cache-Status: MISS
* Last-Modified: Fri, 06 Jan 2023 15:52:48 GMT
* NEL: {"success_fraction":0,"report_to":"cf-nel","max_age":604800}
* Vary: Accept-Encoding
* Server: cloudflare
* CF-RAY: 78559f5688da0a5d-AMS
Body: ( binary data )
<<<<<<<<<<<<<<<<<<<<<<<<< /Tatum API RESPONSE TestNet <<<<<<<<<<<<<<<<<<<<<<<<<<
```
</details>

> ===
> 
> Providing these logs to [Tatum Support](https://discord.com/invite/tatum) can help us identify and fix issues faster.
> 
> ===

[badge-downloads]: https://img.shields.io/packagist/dt/tatumio/tatum-php.svg?style=flat&colorB=green
[badge-release]: https://img.shields.io/packagist/v/tatumio/tatum-php.svg?style=flat&label=release&color=blue
[badge-php]: https://img.shields.io/packagist/php-v/tatumio/tatum-php.svg?style=flat
[badge-license]: https://img.shields.io/packagist/l/tatumio/tatum-php.svg?style=flat&color=blue
[badge-api]: https://img.shields.io/badge/api-v3.17.2-blue

[packagist]: https://packagist.org/packages/tatumio/tatum-php
[php]: https://www.php.net/supported-versions.php
[license]: https://github.com/tatumio/tatum-php/blob/master/LICENSE.txt
[api]: https://apidoc.tatum.io