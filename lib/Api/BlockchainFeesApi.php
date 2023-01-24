<?php

/**
 * Implementation of BlockchainFees API
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
 * API for BlockchainFees
 */
class BlockchainFeesApi extends AbstractApi {
    /**
     * Estimate the fee for a BNB Smart Chain transaction
     *
     * @param \Tatum\Model\BscEstimateGas $bsc_estimate_gas 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\GasEstimated
     */
    public function bscEstimateGas($bsc_estimate_gas) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/bsc/gas";
        /** @var \Tatum\Model\GasEstimated $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", $rPath, $rPath, [], $rHeaders, [], $bsc_estimate_gas
            ), 
            "\Tatum\Model\GasEstimated"
        );
            
        return $result;
    }
    
    /**
     * Estimate the fee for a Celo transaction
     *
     * @param \Tatum\Model\CeloEstimateGas $celo_estimate_gas 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\GasEstimated
     */
    public function celoEstimateGas($celo_estimate_gas) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/celo/gas";
        /** @var \Tatum\Model\GasEstimated $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", $rPath, $rPath, [], $rHeaders, [], $celo_estimate_gas
            ), 
            "\Tatum\Model\GasEstimated"
        );
            
        return $result;
    }
    
    /**
     * Estimate the fee for an Elrond transaction
     *
     * @param \Tatum\Model\TransactionFeeEgldBlockchain $transaction_fee_egld_blockchain 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\EgldEstimateGas200Response
     */
    public function egldEstimateGas($transaction_fee_egld_blockchain) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/egld/gas";
        /** @var \Tatum\Model\EgldEstimateGas200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", $rPath, $rPath, [], $rHeaders, [], $transaction_fee_egld_blockchain
            ), 
            "\Tatum\Model\EgldEstimateGas200Response"
        );
            
        return $result;
    }
    
    /**
     * Estimate the fee for a transaction on a blockchain
     *
     * @param \Tatum\Model\EstimateFee $estimate_fee 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\EstimateFee200Response
     */
    public function estimateFee($estimate_fee) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/blockchain/estimate";
        /** @var \Tatum\Model\EstimateFee200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", $rPath, $rPath, [], $rHeaders, [], $estimate_fee
            ), 
            "\Tatum\Model\EstimateFee200Response"
        );
            
        return $result;
    }
    
    /**
     * Estimate the fee for a transaction on a blockchain
     *
     * @param \Tatum\Model\EstimateFeeBatchMintNft $estimate_fee_batch_mint_nft 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\EstimateFee200Response
     */
    public function estimateFeeBatchMintNft($estimate_fee_batch_mint_nft) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/blockchain/estimate";
        /** @var \Tatum\Model\EstimateFee200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", $rPath, $rPath, [], $rHeaders, [], $estimate_fee_batch_mint_nft
            ), 
            "\Tatum\Model\EstimateFee200Response"
        );
            
        return $result;
    }
    
    /**
     * Estimate the fee for a transaction on a blockchain
     *
     * @param \Tatum\Model\EstimateFeeDeployCustodialWallet $estimate_fee_deploy_custodial_wallet 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\EstimateFee200Response
     */
    public function estimateFeeDeployCustodialWallet($estimate_fee_deploy_custodial_wallet) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/blockchain/estimate";
        /** @var \Tatum\Model\EstimateFee200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", $rPath, $rPath, [], $rHeaders, [], $estimate_fee_deploy_custodial_wallet
            ), 
            "\Tatum\Model\EstimateFee200Response"
        );
            
        return $result;
    }
    
    /**
     * Estimate the fee for a transaction on a blockchain
     *
     * @param \Tatum\Model\EstimateFeeFromAddress $estimate_fee_from_address 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\EstimateFee200Response
     */
    public function estimateFeeFromAddress($estimate_fee_from_address) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/blockchain/estimate";
        /** @var \Tatum\Model\EstimateFee200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", $rPath, $rPath, [], $rHeaders, [], $estimate_fee_from_address
            ), 
            "\Tatum\Model\EstimateFee200Response"
        );
            
        return $result;
    }
    
    /**
     * Estimate the fee for a transaction on a blockchain
     *
     * @param \Tatum\Model\EstimateFeeFromUTXO $estimate_fee_from_utxo 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\EstimateFee200Response
     */
    public function estimateFeeFromUTXO($estimate_fee_from_utxo) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/blockchain/estimate";
        /** @var \Tatum\Model\EstimateFee200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", $rPath, $rPath, [], $rHeaders, [], $estimate_fee_from_utxo
            ), 
            "\Tatum\Model\EstimateFee200Response"
        );
            
        return $result;
    }
    
    /**
     * Estimate the fee for a transaction on a blockchain
     *
     * @param \Tatum\Model\EstimateFeeTransferFromCustodial $estimate_fee_transfer_from_custodial 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\EstimateFee200Response
     */
    public function estimateFeeTransferFromCustodial($estimate_fee_transfer_from_custodial) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/blockchain/estimate";
        /** @var \Tatum\Model\EstimateFee200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", $rPath, $rPath, [], $rHeaders, [], $estimate_fee_transfer_from_custodial
            ), 
            "\Tatum\Model\EstimateFee200Response"
        );
            
        return $result;
    }
    
    /**
     * Estimate the fee for an Ethereum transaction
     *
     * @param \Tatum\Model\EthEstimateGas $eth_estimate_gas 
     * @param string|'ethereum-sepolia' $x_testnet_type Type of Ethereum testnet. Defaults to ethereum-sepolia.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\EthGasEstimation
     */
    public function ethEstimateGas($eth_estimate_gas, $x_testnet_type = 'ethereum-sepolia') {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);
        $rHeaders = array_merge(
            [
                "x-testnet-type" => isset($x_testnet_type) ? S::toHeaderValue($x_testnet_type) : null,
            ], 
            $rHeaders
        );

        // Path template
        $rPath = "/v3/ethereum/gas";
        /** @var \Tatum\Model\EthGasEstimation $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", $rPath, $rPath, [], $rHeaders, [], $eth_estimate_gas
            ), 
            "\Tatum\Model\EthGasEstimation"
        );
            
        return $result;
    }
    
    /**
     * Estimate the fee for multiple Ethereum transactions
     *
     * @param \Tatum\Model\EthEstimateGasArray $eth_estimate_gas_array 
     * @param string|'ethereum-sepolia' $x_testnet_type Type of Ethereum testnet. Defaults to ethereum-sepolia.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\EthGasEstimationBatch
     */
    public function ethEstimateGasBatch($eth_estimate_gas_array, $x_testnet_type = 'ethereum-sepolia') {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);
        $rHeaders = array_merge(
            [
                "x-testnet-type" => isset($x_testnet_type) ? S::toHeaderValue($x_testnet_type) : null,
            ], 
            $rHeaders
        );

        // Path template
        $rPath = "/v3/ethereum/gas/batch";
        /** @var \Tatum\Model\EthGasEstimationBatch $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", $rPath, $rPath, [], $rHeaders, [], $eth_estimate_gas_array
            ), 
            "\Tatum\Model\EthGasEstimationBatch"
        );
            
        return $result;
    }
    
    /**
     * Get the recommended fee/gas price for a blockchain
     *
     * @param string $chain Chain
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\BlockchainFee
     */
    public function getBlockchainFee($chain) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/v3/blockchain/fee/{chain}";
        /** @var \Tatum\Model\BlockchainFee $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse($rPath, ["chain" => $chain]), $rPath, [], $rHeaders, []
            ), 
            "\Tatum\Model\BlockchainFee"
        );
            
        return $result;
    }
    
    /**
     * Estimate the fee for a KuCoin Community Chain transaction
     *
     * @param \Tatum\Model\KcsEstimateGas $kcs_estimate_gas 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\GasEstimated
     */
    public function kcsEstimateGas($kcs_estimate_gas) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/kcs/gas";
        /** @var \Tatum\Model\GasEstimated $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", $rPath, $rPath, [], $rHeaders, [], $kcs_estimate_gas
            ), 
            "\Tatum\Model\GasEstimated"
        );
            
        return $result;
    }
    
    /**
     * Estimate the fee for a Klaytn transaction
     *
     * @param \Tatum\Model\KlaytnEstimateGas $klaytn_estimate_gas 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\KlaytnEstimateGas200Response
     */
    public function klaytnEstimateGas($klaytn_estimate_gas) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/klaytn/gas";
        /** @var \Tatum\Model\KlaytnEstimateGas200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", $rPath, $rPath, [], $rHeaders, [], $klaytn_estimate_gas
            ), 
            "\Tatum\Model\KlaytnEstimateGas200Response"
        );
            
        return $result;
    }
    
    /**
     * Estimate the fee for a Polygon transaction
     *
     * @param \Tatum\Model\PolygonEstimateGas $polygon_estimate_gas 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\GasEstimated
     */
    public function polygonEstimateGas($polygon_estimate_gas) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/polygon/gas";
        /** @var \Tatum\Model\GasEstimated $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", $rPath, $rPath, [], $rHeaders, [], $polygon_estimate_gas
            ), 
            "\Tatum\Model\GasEstimated"
        );
            
        return $result;
    }
    
    /**
     * Estimate the gas needed for a VeChain transaction
     *
     * @param \Tatum\Model\VetEstimateGas $vet_estimate_gas 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return float
     */
    public function vetEstimateGas($vet_estimate_gas) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/vet/transaction/gas";
        /** @var float $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", $rPath, $rPath, [], $rHeaders, [], $vet_estimate_gas
            ), 
            "float"
        );
            
        return $result;
    }
    
    /**
     * Estimate the fee for a XinFin transaction
     *
     * @param \Tatum\Model\XdcEstimateGas $xdc_estimate_gas 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\GasEstimated
     */
    public function xdcEstimateGas($xdc_estimate_gas) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/xdc/gas";
        /** @var \Tatum\Model\GasEstimated $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", $rPath, $rPath, [], $rHeaders, [], $xdc_estimate_gas
            ), 
            "\Tatum\Model\GasEstimated"
        );
            
        return $result;
    }
    
}
