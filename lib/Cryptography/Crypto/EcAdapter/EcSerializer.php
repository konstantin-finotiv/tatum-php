<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Crypto\EcAdapter;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Bitcoin;
use Tatum\Cryptography\Crypto\EcAdapter\Adapter\EcAdapterInterface;
use Tatum\Cryptography\Crypto\EcAdapter\Serializer\Key\PrivateKeySerializerInterface;
use Tatum\Cryptography\Crypto\EcAdapter\Serializer\Key\PublicKeySerializerInterface;
use Tatum\Cryptography\Crypto\EcAdapter\Serializer\Signature\CompactSignatureSerializerInterface;
use Tatum\Cryptography\Crypto\EcAdapter\Serializer\Signature\DerSignatureSerializerInterface;

class EcSerializer {
    const PATH_PHPECC = "Tatum\Cryptography\Crypto\EcAdapter\Impl\PhpEcc\\";
    const PATH_SECP256K1 = "Tatum\Cryptography\Crypto\EcAdapter\Impl\Secp256k1\\";

    /**
     * @var string[]
     */
    private static $serializerInterface = [
        PrivateKeySerializerInterface::class,
        PublicKeySerializerInterface::class,
        CompactSignatureSerializerInterface::class,
        DerSignatureSerializerInterface::class
    ];

    /**
     * @var string[]
     */
    private static $serializerImpl = [
        "Serializer\Key\PrivateKeySerializer",
        "Serializer\Key\PublicKeySerializer",
        "Serializer\Signature\CompactSignatureSerializer",
        "Serializer\Signature\DerSignatureSerializer"
    ];

    /**
     * @var array
     */
    private static $map = [];

    /**
     * @var bool
     */
    private static $useCache = true;

    /**
     * @var array
     */
    private static $cache = [];

    /**
     * @param string $interface
     * @return string
     */
    public static function getImplRelPath(string $interface): string {
        if (0 === count(self::$map)) {
            if (!in_array($interface, self::$serializerInterface, true)) {
                throw new \InvalidArgumentException("Interface not known");
            }

            $cInterface = count(self::$serializerInterface);
            if ($cInterface !== count(self::$serializerImpl)) {
                throw new \InvalidArgumentException("Invalid serializer interface map");
            }

            for ($i = 0; $i < $cInterface; $i++) {
                /** @var string $iface */
                $iface = self::$serializerInterface[$i];
                $ipath = self::$serializerImpl[$i];
                self::$map[$iface] = $ipath;
            }
        }

        return self::$map[$interface];
    }

    /**
     * @return array
     */
    public static function getImplPaths(): array {
        return [
            "Tatum\Cryptography\Crypto\EcAdapter\Impl\PhpEcc\Adapter\EcAdapter" =>
                "Tatum\Cryptography\Crypto\EcAdapter\Impl\PhpEcc\\",
            "Tatum\Cryptography\Crypto\EcAdapter\Impl\Secp256k1\Adapter\EcAdapter" =>
                "Tatum\Cryptography\Crypto\EcAdapter\Impl\Secp256k1\\"
        ];
    }

    /**
     * @param EcAdapterInterface $adapter
     * @return string
     */
    public static function getAdapterImplPath(EcAdapterInterface $adapter): string {
        $paths = static::getImplPaths();
        $class = get_class($adapter);
        if (!isset($paths[$class])) {
            throw new \RuntimeException("Unknown EcAdapter");
        }

        return $paths[$class];
    }

    /**
     * @param  string                                                                $interface
     * @param  bool                                                                  $useCache
     * @param  \Tatum\Cryptography\Crypto\EcAdapter\Adapter\EcAdapterInterface|null  $adapter
     *
     * @return mixed
     */
    public static function getSerializer(string $interface, $useCache = true, EcAdapterInterface $adapter = null) {
        if (null === $adapter) {
            $adapter = Bitcoin::getEcAdapter();
        }

        $key = get_class($adapter) . ":" . $interface;
        if (array_key_exists($key, self::$cache)) {
            return self::$cache[$key];
        }

        $classPath = self::getAdapterImplPath($adapter) . self::getImplRelPath($interface);
        $class = new $classPath($adapter);

        if ($useCache && self::$useCache) {
            self::$cache[$key] = $class;
        }

        return $class;
    }

    /**
     * Disables caching of serializers
     */
    public static function disableCache() {
        self::$useCache = false;
        self::$cache = [];
    }
}
