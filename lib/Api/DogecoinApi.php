<?php

/**
 * Implementation of Dogecoin API
 *
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 *
 * NOTE: This class is auto-generated by tatum.io
 * Do not edit this file manually!
 */

namespace Tatum\Api;
!defined("TATUM-SDK") && exit();

use InvalidArgumentException as IAE;
use Tatum\Sdk\Serializer as S;

/**
 * API for Dogecoin
 */
class DogecoinApi extends AbstractApi {
    /**
     * Broadcast signed Dogecoin transaction
     *
     * @param \Tatum\Model\BroadcastKMS $broadcast_kms 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionHash
     */
    public function dogeBroadcast($broadcast_kms) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/dogecoin/broadcast";
        /** @var \Tatum\Model\TransactionHash $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", $rPath, $rPath, [], $rHeaders, [], $broadcast_kms
            ), 
            "\Tatum\Model\TransactionHash"
        );
            
        return $result;
    }
    
    /**
     * Generate Dogecoin deposit address from Extended public key
     *
     * @param string $xpub Extended public key of wallet.
     * @param float $index Derivation index of desired address to be generated.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\DogeGenerateAddress200Response
     */
    public function dogeGenerateAddress($xpub, $index) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/v3/dogecoin/address/{xpub}/{index}";
        /** @var \Tatum\Model\DogeGenerateAddress200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse($rPath, ["xpub" => $xpub, "index" => $index]), $rPath, [], $rHeaders, []
            ), 
            "\Tatum\Model\DogeGenerateAddress200Response"
        );
            
        return $result;
    }
    
    /**
     * Generate Dogecoin private key
     *
     * @param \Tatum\Model\PrivKeyRequest $priv_key_request 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\PrivKey
     */
    public function dogeGenerateAddressPrivateKey($priv_key_request) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/dogecoin/wallet/priv";
        /** @var \Tatum\Model\PrivKey $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", $rPath, $rPath, [], $rHeaders, [], $priv_key_request
            ), 
            "\Tatum\Model\PrivKey"
        );
            
        return $result;
    }
    
    /**
     * Generate Dogecoin wallet
     *
     * @param string|null $mnemonic Mnemonic to use for generation of extended public and private keys.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\Wallet
     */
    public function dogeGenerateWallet($mnemonic = null) {
        if (isset($mnemonic) && strlen($mnemonic) > 500) {
            throw new IAE('Invalid length for "$mnemonic" when calling DogecoinApi.dogeGenerateWallet, must be smaller than or equal to 500');
        }

        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/v3/dogecoin/wallet";
        /** @var \Tatum\Model\Wallet $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", $rPath, $rPath, [
                    "mnemonic" => isset($mnemonic) ? S::toQueryValue($mnemonic) : null,
                ], $rHeaders, []
            ), 
            "\Tatum\Model\Wallet"
        );
            
        return $result;
    }
    
    /**
     * Get Dogecoin Block by hash or height
     *
     * @param string $hash Block hash or height.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\DogeBlock
     */
    public function dogeGetBlock($hash) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/v3/dogecoin/block/{hash}";
        /** @var \Tatum\Model\DogeBlock $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse($rPath, ["hash" => $hash]), $rPath, [], $rHeaders, []
            ), 
            "\Tatum\Model\DogeBlock"
        );
            
        return $result;
    }
    
    /**
     * Get Dogecoin Blockchain Information
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\DogeInfo
     */
    public function dogeGetBlockChainInfo() {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/v3/dogecoin/info";
        /** @var \Tatum\Model\DogeInfo $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", $rPath, $rPath, [], $rHeaders, []
            ), 
            "\Tatum\Model\DogeInfo"
        );
            
        return $result;
    }
    
    /**
     * Get Dogecoin Block hash
     *
     * @param float $i The number of blocks preceding a particular block on a block chain.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\LtcGetBlockHash200Response
     */
    public function dogeGetBlockHash($i) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/v3/dogecoin/block/hash/{i}";
        /** @var \Tatum\Model\LtcGetBlockHash200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse($rPath, ["i" => $i]), $rPath, [], $rHeaders, []
            ), 
            "\Tatum\Model\LtcGetBlockHash200Response"
        );
            
        return $result;
    }
    
    /**
     * Get Mempool Transactions
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return string[]
     */
    public function dogeGetMempool() {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/v3/dogecoin/mempool";
        /** @var string[] $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", $rPath, $rPath, [], $rHeaders, []
            ), 
            "string[]"
        );
            
        return $result;
    }
    
    /**
     * Get Dogecoin Transaction by hash
     *
     * @param string $hash Transaction hash
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\DogeTx
     */
    public function dogeGetRawTransaction($hash) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/v3/dogecoin/transaction/{hash}";
        /** @var \Tatum\Model\DogeTx $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse($rPath, ["hash" => $hash]), $rPath, [], $rHeaders, []
            ), 
            "\Tatum\Model\DogeTx"
        );
            
        return $result;
    }
    
    /**
     * Get information about a transaction output (UTXO) in a Dogecoin transaction
     *
     * @param string $hash The transaction hash
     * @param float $index The index of the transaction output that you want to check for the UTXO
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\DogeUTXO
     */
    public function dogeGetUTXO($hash, $index) {
        if (strlen($hash) > 64) {
            throw new IAE('Invalid length for "$hash" when calling DogecoinApi.dogeGetUTXO, must be smaller than or equal to 64');
        }

        if (strlen($hash) < 64) {
            throw new IAE('Invalid length for "$hash" when calling DogecoinApi.dogeGetUTXO, must be bigger than or equal to 64');
        }

        if ($index < 0) {
            throw new IAE('Invalid value for "$index" when calling DogecoinApi.dogeGetUTXO, must be bigger than or equal to 0.');
        }

        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/v3/dogecoin/utxo/{hash}/{index}";
        /** @var \Tatum\Model\DogeUTXO $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse($rPath, ["hash" => $hash, "index" => $index]), $rPath, [], $rHeaders, []
            ), 
            "\Tatum\Model\DogeUTXO"
        );
            
        return $result;
    }
    
    /**
     * Send DOGE to Dogecoin addresses
     *
     * @param \Tatum\Model\DogeTransactionUTXO $doge_transaction_utxo 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionSigned
     */
    public function dogeTransactionUTXO($doge_transaction_utxo) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/dogecoin/transaction";
        /** @var \Tatum\Model\TransactionSigned $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", $rPath, $rPath, [], $rHeaders, [], $doge_transaction_utxo
            ), 
            "\Tatum\Model\TransactionSigned"
        );
            
        return $result;
    }
    
    /**
     * Send DOGE to Dogecoin addresses
     *
     * @param \Tatum\Model\DogeTransactionUTXOKMS $doge_transaction_utxokms 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionSigned
     */
    public function dogeTransactionUTXOKMS($doge_transaction_utxokms) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/dogecoin/transaction";
        /** @var \Tatum\Model\TransactionSigned $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", $rPath, $rPath, [], $rHeaders, [], $doge_transaction_utxokms
            ), 
            "\Tatum\Model\TransactionSigned"
        );
            
        return $result;
    }
    
}
