<?php
/**
 * @author Adeleye Benjamin Adesanoye <adeleye.benjamin@highbreedtech.com>
 */

if(!defined('TATUM') || !defined('TATUMIO') || !defined('TATUMPHP') || !defined('TATUMLIB')){
throw new \RuntimeException("Access Denied!");
}

interface Erc20
{
    const token_bytecore = '0x60806040526040805190810160405280601081526020017f68747470733a2f2f746174756d2e696f000000000000000000000000000000008152506008908051906020019062000051929190620005e5565b503480156200005f57600080fd5b5060405162001db138038062001db1833981018060405260c08110156200008557600080fd5b8101908080516401000000008111156200009e57600080fd5b82810190506020810184811115620000b557600080fd5b8151856001820283011164010000000082111715620000d357600080fd5b50509291906020018051640100000000811115620000f057600080fd5b828101905060208101848111156200010757600080fd5b81518560018202830111640100000000821117156200012557600080fd5b50509291906020018051906020019092919080519060200190929190805190602001909291908051906020019092919050505081868685826000908051906020019062000174929190620005e5565b5081600190805190602001906200018d929190620005e5565b5080600260006101000a81548160ff021916908360ff160217905550505050620001c63362000210640100000000026401000000009004565b600081111515620001d657600080fd5b8060078190555050600081111562000204576200020384826200027a640100000000026401000000009004565b5b50505050505062000694565b62000234816006620002ea6401000000000262001582179091906401000000009004565b8073ffffffffffffffffffffffffffffffffffffffff167f6ae172837ea30b801fbfcdd4108aa1d5bf8ff775444fd70256b44e6bf3dfc3f660405160405180910390a250565b600754620002b8826200029b620003ad640100000000026401000000009004565b620003b7640100000000026200108e179091906401000000009004565b11151515620002c657600080fd5b620002e68282620003d9640100000000026200142c176401000000009004565b5050565b600073ffffffffffffffffffffffffffffffffffffffff168173ffffffffffffffffffffffffffffffffffffffff16141515156200032757600080fd5b62000342828262000550640100000000026401000000009004565b1515156200034f57600080fd5b60018260000160008373ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff16815260200190815260200160002060006101000a81548160ff0219169083151502179055505050565b6000600554905090565b6000808284019050838110151515620003cf57600080fd5b8091505092915050565b600073ffffffffffffffffffffffffffffffffffffffff168273ffffffffffffffffffffffffffffffffffffffff16141515156200041657600080fd5b6200043b81600554620003b7640100000000026200108e179091906401000000009004565b600581905550620004a381600360008573ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff16815260200190815260200160002054620003b7640100000000026200108e179091906401000000009004565b600360008473ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff168152602001908152602001600020819055508173ffffffffffffffffffffffffffffffffffffffff16600073ffffffffffffffffffffffffffffffffffffffff167fddf252ad1be2c89b69c2b068fc378daa952ba7f163c4a11628f55a4df523b3ef836040518082815260200191505060405180910390a35050565b60008073ffffffffffffffffffffffffffffffffffffffff168273ffffffffffffffffffffffffffffffffffffffff16141515156200058e57600080fd5b8260000160008373ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff16815260200190815260200160002060009054906101000a900460ff16905092915050565b828054600181600116156101000203166002900490600052602060002090601f016020900481019282601f106200062857805160ff191683800117855562000659565b8280016001018555821562000659579182015b82811115620006585782518255916020019190600101906200063b565b5b5090506200066891906200066c565b5090565b6200069191905b808211156200068d57600081600090555060010162000673565b5090565b90565b61170d80620006a46000396000f3fe608060405234801561001057600080fd5b506004361061013e576000357c01000000000000000000000000000000000000000000000000000000009004806370a08231116100ca578063a457c2d71161008e578063a457c2d714610583578063a9059cbb146105e9578063aa271e1a1461064f578063b60b7084146106ab578063dd62ed3e1461072e5761013e565b806370a082311461040c57806379cc67901461046457806395d89b41146104b2578063983b2d561461053557806398650275146105795761013e565b8063313ce56711610111578063313ce567146102d0578063355274ea146102f4578063395093511461031257806340c10f191461037857806342966c68146103de5761013e565b806306fdde0314610143578063095ea7b3146101c657806318160ddd1461022c57806323b872dd1461024a575b600080fd5b61014b6107a6565b6040518080602001828103825283818151815260200191508051906020019080838360005b8381101561018b578082015181840152602081019050610170565b50505050905090810190601f1680156101b85780820380516001836020036101000a031916815260200191505b509250505060405180910390f35b610212600480360360408110156101dc57600080fd5b81019080803573ffffffffffffffffffffffffffffffffffffffff16906020019092919080359060200190929190505050610848565b604051808215151515815260200191505060405180910390f35b61023461085f565b6040518082815260200191505060405180910390f35b6102b66004803603606081101561026057600080fd5b81019080803573ffffffffffffffffffffffffffffffffffffffff169060200190929190803573ffffffffffffffffffffffffffffffffffffffff16906020019092919080359060200190929190505050610869565b604051808215151515815260200191505060405180910390f35b6102d861091a565b604051808260ff1660ff16815260200191505060405180910390f35b6102fc610931565b6040518082815260200191505060405180910390f35b61035e6004803603604081101561032857600080fd5b81019080803573ffffffffffffffffffffffffffffffffffffffff1690602001909291908035906020019092919050505061093b565b604051808215151515815260200191505060405180910390f35b6103c46004803603604081101561038e57600080fd5b81019080803573ffffffffffffffffffffffffffffffffffffffff169060200190929190803590602001909291905050506109e0565b604051808215151515815260200191505060405180910390f35b61040a600480360360208110156103f457600080fd5b8101908080359060200190929190505050610a0a565b005b61044e6004803603602081101561042257600080fd5b81019080803573ffffffffffffffffffffffffffffffffffffffff169060200190929190505050610a17565b6040518082815260200191505060405180910390f35b6104b06004803603604081101561047a57600080fd5b81019080803573ffffffffffffffffffffffffffffffffffffffff16906020019092919080359060200190929190505050610a60565b005b6104ba610a6e565b6040518080602001828103825283818151815260200191508051906020019080838360005b838110156104fa5780820151818401526020810190506104df565b50505050905090810190601f1680156105275780820380516001836020036101000a031916815260200191505b509250505060405180910390f35b6105776004803603602081101561054b57600080fd5b81019080803573ffffffffffffffffffffffffffffffffffffffff169060200190929190505050610b10565b005b610581610b30565b005b6105cf6004803603604081101561059957600080fd5b81019080803573ffffffffffffffffffffffffffffffffffffffff16906020019092919080359060200190929190505050610b3b565b604051808215151515815260200191505060405180910390f35b610635600480360360408110156105ff57600080fd5b81019080803573ffffffffffffffffffffffffffffffffffffffff16906020019092919080359060200190929190505050610be0565b604051808215151515815260200191505060405180910390f35b6106916004803603602081101561066557600080fd5b81019080803573ffffffffffffffffffffffffffffffffffffffff169060200190929190505050610bf7565b604051808215151515815260200191505060405180910390f35b6106b3610c14565b6040518080602001828103825283818151815260200191508051906020019080838360005b838110156106f35780820151818401526020810190506106d8565b50505050905090810190601f1680156107205780820380516001836020036101000a031916815260200191505b509250505060405180910390f35b6107906004803603604081101561074457600080fd5b81019080803573ffffffffffffffffffffffffffffffffffffffff169060200190929190803573ffffffffffffffffffffffffffffffffffffffff169060200190929190505050610cb2565b6040518082815260200191505060405180910390f35b606060008054600181600116156101000203166002900480601f01602080910402602001604051908101604052809291908181526020018280546001816001161561010002031660029004801561083e5780601f106108135761010080835404028352916020019161083e565b820191906000526020600020905b81548152906001019060200180831161082157829003601f168201915b5050505050905090565b6000610855338484610d39565b6001905092915050565b6000600554905090565b6000610876848484610e9c565b61090f843361090a85600460008a73ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff16815260200190815260200160002060003373ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff1681526020019081526020016000205461106c90919063ffffffff16565b610d39565b600190509392505050565b6000600260009054906101000a900460ff16905090565b6000600754905090565b60006109d633846109d185600460003373ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff16815260200190815260200160002060008973ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff1681526020019081526020016000205461108e90919063ffffffff16565b610d39565b6001905092915050565b60006109eb33610bf7565b15156109f657600080fd5b610a0083836110af565b6001905092915050565b610a1433826110e7565b50565b6000600360008373ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff168152602001908152602001600020549050919050565b610a6a828261123d565b5050565b606060018054600181600116156101000203166002900480601f016020809104026020016040519081016040528092919081815260200182805460018160011615610100020316600290048015610b065780601f10610adb57610100808354040283529160200191610b06565b820191906000526020600020905b815481529060010190602001808311610ae957829003601f168201915b5050505050905090565b610b1933610bf7565b1515610b2457600080fd5b610b2d816112e4565b50565b610b393361133e565b565b6000610bd63384610bd185600460003373ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff16815260200190815260200160002060008973ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff1681526020019081526020016000205461106c90919063ffffffff16565b610d39565b6001905092915050565b6000610bed338484610e9c565b6001905092915050565b6000610c0d82600661139890919063ffffffff16565b9050919050565b60088054600181600116156101000203166002900480601f016020809104026020016040519081016040528092919081815260200182805460018160011615610100020316600290048015610caa5780601f10610c7f57610100808354040283529160200191610caa565b820191906000526020600020905b815481529060010190602001808311610c8d57829003601f168201915b505050505081565b6000600460008473ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff16815260200190815260200160002060008373ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff16815260200190815260200160002054905092915050565b600073ffffffffffffffffffffffffffffffffffffffff168273ffffffffffffffffffffffffffffffffffffffff1614151515610d7557600080fd5b600073ffffffffffffffffffffffffffffffffffffffff168373ffffffffffffffffffffffffffffffffffffffff1614151515610db157600080fd5b80600460008573ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff16815260200190815260200160002060008473ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff168152602001908152602001600020819055508173ffffffffffffffffffffffffffffffffffffffff168373ffffffffffffffffffffffffffffffffffffffff167f8c5be1e5ebec7d5bd14f71427d1e84f3dd0314c0f7b2291e5b200ac8c7c3b925836040518082815260200191505060405180910390a3505050565b600073ffffffffffffffffffffffffffffffffffffffff168273ffffffffffffffffffffffffffffffffffffffff1614151515610ed857600080fd5b610f2a81600360008673ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff1681526020019081526020016000205461106c90919063ffffffff16565b600360008573ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff16815260200190815260200160002081905550610fbf81600360008573ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff1681526020019081526020016000205461108e90919063ffffffff16565b600360008473ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff168152602001908152602001600020819055508173ffffffffffffffffffffffffffffffffffffffff168373ffffffffffffffffffffffffffffffffffffffff167fddf252ad1be2c89b69c2b068fc378daa952ba7f163c4a11628f55a4df523b3ef836040518082815260200191505060405180910390a3505050565b600082821115151561107d57600080fd5b600082840390508091505092915050565b60008082840190508381101515156110a557600080fd5b8091505092915050565b6007546110cc826110be61085f565b61108e90919063ffffffff16565b111515156110d957600080fd5b6110e3828261142c565b5050565b600073ffffffffffffffffffffffffffffffffffffffff168273ffffffffffffffffffffffffffffffffffffffff161415151561112357600080fd5b6111388160055461106c90919063ffffffff16565b60058190555061119081600360008573ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff1681526020019081526020016000205461106c90919063ffffffff16565b600360008473ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff16815260200190815260200160002081905550600073ffffffffffffffffffffffffffffffffffffffff168273ffffffffffffffffffffffffffffffffffffffff167fddf252ad1be2c89b69c2b068fc378daa952ba7f163c4a11628f55a4df523b3ef836040518082815260200191505060405180910390a35050565b61124782826110e7565b6112e082336112db84600460008873ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff16815260200190815260200160002060003373ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff1681526020019081526020016000205461106c90919063ffffffff16565b610d39565b5050565b6112f881600661158290919063ffffffff16565b8073ffffffffffffffffffffffffffffffffffffffff167f6ae172837ea30b801fbfcdd4108aa1d5bf8ff775444fd70256b44e6bf3dfc3f660405160405180910390a250565b61135281600661163290919063ffffffff16565b8073ffffffffffffffffffffffffffffffffffffffff167fe94479a9f7e1952cc78f2d6baab678adc1b772d936c6583def489e524cb6669260405160405180910390a250565b60008073ffffffffffffffffffffffffffffffffffffffff168273ffffffffffffffffffffffffffffffffffffffff16141515156113d557600080fd5b8260000160008373ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff16815260200190815260200160002060009054906101000a900460ff16905092915050565b600073ffffffffffffffffffffffffffffffffffffffff168273ffffffffffffffffffffffffffffffffffffffff161415151561146857600080fd5b61147d8160055461108e90919063ffffffff16565b6005819055506114d581600360008573ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff1681526020019081526020016000205461108e90919063ffffffff16565b600360008473ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff168152602001908152602001600020819055508173ffffffffffffffffffffffffffffffffffffffff16600073ffffffffffffffffffffffffffffffffffffffff167fddf252ad1be2c89b69c2b068fc378daa952ba7f163c4a11628f55a4df523b3ef836040518082815260200191505060405180910390a35050565b600073ffffffffffffffffffffffffffffffffffffffff168173ffffffffffffffffffffffffffffffffffffffff16141515156115be57600080fd5b6115c88282611398565b1515156115d457600080fd5b60018260000160008373ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff16815260200190815260200160002060006101000a81548160ff0219169083151502179055505050565b600073ffffffffffffffffffffffffffffffffffffffff168173ffffffffffffffffffffffffffffffffffffffff161415151561166e57600080fd5b6116788282611398565b151561168357600080fd5b60008260000160008373ffffffffffffffffffffffffffffffffffffffff1673ffffffffffffffffffffffffffffffffffffffff16815260200190815260200160002060006101000a81548160ff021916908315150217905550505056fea165627a7a72305820bd0d80acdad0a158a00477c7002345806238849601fbc1885354626cddf54c990029';

    const token_abi = [
        [
            'constant' => true,
            'inputs' => [],
            'name' => 'name',
            'outputs' => [
                [
                    'name' => '',
                    'type' => 'string',
                ],
            ],
            'payable' => false,
            'stateMutability' => 'view',
            'type' => 'function',
        ],
        [
            'constant' => false,
            'inputs' => [
                [
                    'name' => 'spender',
                    'type' => 'address',
                ],
                [
                    'name' => 'value',
                    'type' => 'uint256',
                ],
            ],
            'name' => 'approve',
            'outputs' => [
                [
                    'name' => '',
                    'type' => 'bool',
                ],
            ],
            'payable' => false,
            'stateMutability' => 'nonpayable',
            'type' => 'function',
        ],
        [
            'constant' => true,
            'inputs' => [],
            'name' => 'totalSupply',
            'outputs' => [
                [
                    'name' => '',
                    'type' => 'uint256',
                ],
            ],
            'payable' => false,
            'stateMutability' => 'view',
            'type' => 'function',
        ],
        [
            'constant' => false,
            'inputs' => [
                [
                    'name' => 'from',
                    'type' => 'address',
                ],
                [
                    'name' => 'to',
                    'type' => 'address',
                ],
                [
                    'name' => 'value',
                    'type' => 'uint256',
                ],
            ],
            'name' => 'transferFrom',
            'outputs' => [
                [
                    'name' => '',
                    'type' => 'bool',
                ],
            ],
            'payable' => false,
            'stateMutability' => 'nonpayable',
            'type' => 'function',
        ],
        [
            'constant' => true,
            'inputs' => [],
            'name' => 'decimals',
            'outputs' => [
                [
                    'name' => '',
                    'type' => 'uint8',
                ],
            ],
            'payable' => false,
            'stateMutability' => 'view',
            'type' => 'function',
        ],
        [
            'constant' => true,
            'inputs' => [],
            'name' => 'cap',
            'outputs' => [
                [
                    'name' => '',
                    'type' => 'uint256',
                ],
            ],
            'payable' => false,
            'stateMutability' => 'view',
            'type' => 'function',
        ],
        [
            'constant' => false,
            'inputs' => [
                [
                    'name' => 'spender',
                    'type' => 'address',
                ],
                [
                    'name' => 'addedValue',
                    'type' => 'uint256',
                ],
            ],
            'name' => 'increaseAllowance',
            'outputs' => [
                [
                    'name' => '',
                    'type' => 'bool',
                ],
            ],
            'payable' => false,
            'stateMutability' => 'nonpayable',
            'type' => 'function',
        ],
        [
            'constant' => false,
            'inputs' => [
                [
                    'name' => 'to',
                    'type' => 'address',
                ],
                [
                    'name' => 'value',
                    'type' => 'uint256',
                ],
            ],
            'name' => 'mint',
            'outputs' => [
                [
                    'name' => '',
                    'type' => 'bool',
                ],
            ],
            'payable' => false,
            'stateMutability' => 'nonpayable',
            'type' => 'function',
        ],
        [
            'constant' => false,
            'inputs' => [
                [
                    'name' => 'value',
                    'type' => 'uint256',
                ],
            ],
            'name' => 'burn',
            'outputs' => [],
            'payable' => false,
            'stateMutability' => 'nonpayable',
            'type' => 'function',
        ],
        [
            'constant' => true,
            'inputs' => [
                [
                    'name' => 'owner',
                    'type' => 'address',
                ],
            ],
            'name' => 'balanceOf',
            'outputs' => [
                [
                    'name' => '',
                    'type' => 'uint256',
                ],
            ],
            'payable' => false,
            'stateMutability' => 'view',
            'type' => 'function',
        ],
        [
            'constant' => false,
            'inputs' => [
                [
                    'name' => 'from',
                    'type' => 'address',
                ],
                [
                    'name' => 'value',
                    'type' => 'uint256',
                ],
            ],
            'name' => 'burnFrom',
            'outputs' => [],
            'payable' => false,
            'stateMutability' => 'nonpayable',
            'type' => 'function',
        ],
        [
            'constant' => true,
            'inputs' => [],
            'name' => 'symbol',
            'outputs' => [
                [
                    'name' => '',
                    'type' => 'string',
                ],
            ],
            'payable' => false,
            'stateMutability' => 'view',
            'type' => 'function',
        ],
        [
            'constant' => false,
            'inputs' => [
                [
                    'name' => 'account',
                    'type' => 'address',
                ],
            ],
            'name' => 'addMinter',
            'outputs' => [],
            'payable' => false,
            'stateMutability' => 'nonpayable',
            'type' => 'function',
        ],
        [
            'constant' => false,
            'inputs' => [],
            'name' => 'renounceMinter',
            'outputs' => [],
            'payable' => false,
            'stateMutability' => 'nonpayable',
            'type' => 'function',
        ],
        [
            'constant' => false,
            'inputs' => [
                [
                    'name' => 'spender',
                    'type' => 'address',
                ],
                [
                    'name' => 'subtractedValue',
                    'type' => 'uint256',
                ],
            ],
            'name' => 'decreaseAllowance',
            'outputs' => [
                [
                    'name' => '',
                    'type' => 'bool',
                ],
            ],
            'payable' => false,
            'stateMutability' => 'nonpayable',
            'type' => 'function',
        ],
        [
            'constant' => false,
            'inputs' => [
                [
                    'name' => 'to',
                    'type' => 'address',
                ],
                [
                    'name' => 'value',
                    'type' => 'uint256',
                ],
            ],
            'name' => 'transfer',
            'outputs' => [
                [
                    'name' => '',
                    'type' => 'bool',
                ],
            ],
            'payable' => false,
            'stateMutability' => 'nonpayable',
            'type' => 'function',
        ],
        [
            'constant' => true,
            'inputs' => [
                [
                    'name' => 'account',
                    'type' => 'address',
                ],
            ],
            'name' => 'isMinter',
            'outputs' => [
                [
                    'name' => '',
                    'type' => 'bool',
                ],
            ],
            'payable' => false,
            'stateMutability' => 'view',
            'type' => 'function',
        ],
        [
            'constant' => true,
            'inputs' => [],
            'name' => 'builtOn',
            'outputs' => [
                [
                    'name' => '',
                    'type' => 'string',
                ],
            ],
            'payable' => false,
            'stateMutability' => 'view',
            'type' => 'function',
        ],
        [
            'constant' => true,
            'inputs' => [
                [
                    'name' => 'owner',
                    'type' => 'address',
                ],
                [
                    'name' => 'spender',
                    'type' => 'address',
                ],
            ],
            'name' => 'allowance',
            'outputs' => [
                [
                    'name' => '',
                    'type' => 'uint256',
                ],
            ],
            'payable' => false,
            'stateMutability' => 'view',
            'type' => 'function',
        ],
        [
            'inputs' => [
                [
                    'name' => 'name',
                    'type' => 'string',
                ],
                [
                    'name' => 'symbol',
                    'type' => 'string',
                ],
                [
                    'name' => 'receiver',
                    'type' => 'address',
                ],
                [
                    'name' => 'decimals',
                    'type' => 'uint8',
                ],
                [
                    'name' => 'cap',
                    'type' => 'uint256',
                ],
                [
                    'name' => 'initialBalance',
                    'type' => 'uint256',
                ],
            ],
            'payable' => false,
            'stateMutability' => 'nonpayable',
            'type' => 'constructor',
        ],
        [
            'anonymous' => false,
            'inputs' => [
                [
                    'indexed' => true,
                    'name' => 'account',
                    'type' => 'address',
                ],
            ],
            'name' => 'MinterAdded',
            'type' => 'event',
        ],
        [
            'anonymous' => false,
            'inputs' => [
                [
                    'indexed' => true,
                    'name' => 'account',
                    'type' => 'address',
                ],
            ],
            'name' => 'MinterRemoved',
            'type' => 'event',
        ],
        [
            'anonymous' => false,
            'inputs' => [
                [
                    'indexed' => true,
                    'name' => 'from',
                    'type' => 'address',
                ],
                [
                    'indexed' => true,
                    'name' => 'to',
                    'type' => 'address',
                ],
                [
                    'indexed' => false,
                    'name' => 'value',
                    'type' => 'uint256',
                ],
            ],
            'name' => 'Transfer',
            'type' => 'event',
        ],
        [
            'anonymous' => false,
            'inputs' => [
                [
                    'indexed' => true,
                    'name' => 'owner',
                    'type' => 'address',
                ],
                [
                    'indexed' => true,
                    'name' => 'spender',
                    'type' => 'address',
                ],
                [
                    'indexed' => false,
                    'name' => 'value',
                    'type' => 'uint256',
                ],
            ],
            'name' => 'Approval',
            'type' => 'event',
        ],
    ];
}