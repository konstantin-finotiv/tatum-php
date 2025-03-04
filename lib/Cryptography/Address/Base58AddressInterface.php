<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Address;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Network\NetworkInterface;

interface Base58AddressInterface extends AddressInterface {
    /**
     * @param  \Tatum\Cryptography\Network\NetworkInterface|null  $network
     *
     * @return string
     */
    public function getPrefixByte(NetworkInterface $network = null): string;
}
