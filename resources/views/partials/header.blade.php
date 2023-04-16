<header>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
    #loader {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 9999;
        background-color: rgba(0, 0, 0, 0.5);
    }

    .loader-content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: #fff;
        font-size: 24px;
    }
    </style>
    <h1></h1>
    <div id="loader" style="display: none;">
        <div class="loader-content">
            Loading MetaMask
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{route('home')}}">
                <img src="{{ asset('assets/img/image 202.png') }}" width="180" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link mx-2 active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#">ABOUT US</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#">FEATURES</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#">PRICING</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#">DOCS</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#">TESTIOMONIAL</a>
                    </li>

                </ul>
                <form class="d-flex">
                    <button class="btn btn-primary fw-weight  rounded-3" data-bs-toggle="modal"
                        data-bs-target="#myModal" type="button">GET STARTED</button>
                    <a href="{{route('card')}}" class="btn btn-outline-primary ms-2 fw-weight rounded-3"
                        type="button">Buy Card</a>
                </form>
            </div>
        </div>
    </nav>
</header>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="myForm" action="{{ route('submit-form') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <div class="col">
                            <label for="firstName" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="firstName" name="first_name"
                                placeholder="Enter your first name">
                        </div>
                        <div class="col">
                            <label for="lastName" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="lastName" name="last_name"
                                placeholder="Enter your last name">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Enter your email address">
                        </div>
                        <div class="col">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="tel" class="form-control" id="phone" name="phone"
                                placeholder="Enter your phone number">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="airdropAddress" class="form-label">Where do we airdrop the Family Tokens? (Metamask
                            BEP-20 address...)</label>
                        <input type="text" class="form-control" id="airdropAddress" name="airdrop_address"
                            placeholder="Enter your Metamask BEP-20 address">
                    </div>
                    <div class="mb-3">
                        <label for="tokenAmount" class="form-label">Enter the amount of Family Tokens you want to get
                            (or click number to write in manually)</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="tokenAmount" name="token_amount"
                                placeholder="Enter the amount of Family Tokens">
                        </div>
                        <p class="text-muted">1 FT = 1 USD</p>
                    </div>
                    <div class="mb-3">
                        <label for="payment_currency" class="form-label">Your preferred payment currency:</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="payment_currency" id="ethRadio"
                                value="0x2170Ed0880ac9A755fd29B2688956BD959F933F8" checked>
                            <label class="form-check-label" for="ethRadio">ETH</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="payment_currency" id="usdtRadio"
                                value="0x55d398326f99059fF775485246999027B3197955">
                            <label class="form-check-label" for="usdtRadio">USDT (ERC-20)</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="payment_currency" id="busdRadio"
                                value="0xe9e7CEA3DedcA5984780Bafc599bD69ADd087D56">
                            <label class="form-check-label" for="busdRadio">BUSD</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="payment_currency" id="bnbRadio"
                                value="0x0000000000000000000000000000000000000000">
                            <label class="form-check-label" for="bnbRadio">BNB</label>
                        </div>
                        <div class="mt-2 input-group">
                            <input type="text" class="form-control" id="currencyValue" readonly>
                            <button class="btn btn-outline-secondary" type="button" id="copyButton">Copy</button>
                        </div>
                    </div>

                    {{-- <div class="mb-3">
              <label for="paymentScreenshot" class="form-label">Please Attach Screenshot of your Payment</label>
              <div class="dropzone" name="image" id="myDropzone"></div>
              <input type="file" class="form-control" id="image" name="image">
            </div> --}}
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <div class="mb-3">
                    <div class="mt-2" id="dataA">
                        <button id="approve" class="btn btn-primary" style="display:none;">Approve</button>
                        <button id="rent" class="btn btn-primary" style="display:none;">Rent</button>

                    </div>
                </div>
            </div>
            <div id="loader" style="display:none;">Loading...</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>


<script>
// Function to copy the currency value to clipboard
function copyCurrencyValue() {
    const currencyValue = document.querySelector("#currencyValue").value;
    navigator.clipboard.writeText(currencyValue);
    document.querySelector("#copyButton").innerHTML = "Copied";
}

// Add click event listener to radio buttons
const radios = document.querySelectorAll('input[name="payment_currency"]');
radios.forEach((radio) => {
    radio.addEventListener("click", () => {
        // Update currency value based on the selected radio button
        const value = radio.value;
        document.querySelector("#currencyValue").value = value;
        document.querySelector("#copyButton").innerHTML = "Copy";
    });
});

// Add click event listener to copy button to copy currency value to clipboard
const copyButton = document.querySelector("#copyButton");
copyButton.addEventListener("click", copyCurrencyValue);
</script>

<script src="https://cdn.jsdelivr.net/npm/web3@latest/dist/web3.min.js"></script>
<script>
(async function() {
    if (typeof window.ethereum === 'undefined') {
        alert("Please install MetaMask extension to use this feature.");
        document.getElementById("conntWallet").disabled = true;
        document.getElementById("rent").disabled = true;
        return;
    }

    function getSelectedToken() {
        const tokenRadios = document.getElementsByName("payment_currency");
        for (let i = 0; i < tokenRadios.length; i++) {
            if (tokenRadios[i].checked) {
                return tokenRadios[i].value;
            }
        }
        return null;
    }
    const _web3 = new Web3(window.ethereum);

    const abi = [{
        "inputs": [{
            "internalType": "address",
            "name": "account",
            "type": "address"
        }, {
            "internalType": "address",
            "name": "minter_",
            "type": "address"
        }, {
            "internalType": "uint256",
            "name": "mintingAllowedAfter_",
            "type": "uint256"
        }],
        "payable": false,
        "stateMutability": "nonpayable",
        "type": "constructor"
    }, {
        "anonymous": false,
        "inputs": [{
            "indexed": true,
            "internalType": "address",
            "name": "owner",
            "type": "address"
        }, {
            "indexed": true,
            "internalType": "address",
            "name": "spender",
            "type": "address"
        }, {
            "indexed": false,
            "internalType": "uint256",
            "name": "amount",
            "type": "uint256"
        }],
        "name": "Approval",
        "type": "event"
    }, {
        "anonymous": false,
        "inputs": [{
            "indexed": true,
            "internalType": "address",
            "name": "delegator",
            "type": "address"
        }, {
            "indexed": true,
            "internalType": "address",
            "name": "fromDelegate",
            "type": "address"
        }, {
            "indexed": true,
            "internalType": "address",
            "name": "toDelegate",
            "type": "address"
        }],
        "name": "DelegateChanged",
        "type": "event"
    }, {
        "anonymous": false,
        "inputs": [{
            "indexed": true,
            "internalType": "address",
            "name": "delegate",
            "type": "address"
        }, {
            "indexed": false,
            "internalType": "uint256",
            "name": "previousBalance",
            "type": "uint256"
        }, {
            "indexed": false,
            "internalType": "uint256",
            "name": "newBalance",
            "type": "uint256"
        }],
        "name": "DelegateVotesChanged",
        "type": "event"
    }, {
        "anonymous": false,
        "inputs": [{
            "indexed": false,
            "internalType": "address",
            "name": "minter",
            "type": "address"
        }, {
            "indexed": false,
            "internalType": "address",
            "name": "newMinter",
            "type": "address"
        }],
        "name": "MinterChanged",
        "type": "event"
    }, {
        "anonymous": false,
        "inputs": [{
            "indexed": true,
            "internalType": "address",
            "name": "from",
            "type": "address"
        }, {
            "indexed": true,
            "internalType": "address",
            "name": "to",
            "type": "address"
        }, {
            "indexed": false,
            "internalType": "uint256",
            "name": "amount",
            "type": "uint256"
        }],
        "name": "Transfer",
        "type": "event"
    }, {
        "constant": true,
        "inputs": [],
        "name": "DELEGATION_TYPEHASH",
        "outputs": [{
            "internalType": "bytes32",
            "name": "",
            "type": "bytes32"
        }],
        "payable": false,
        "stateMutability": "view",
        "type": "function"
    }, {
        "constant": true,
        "inputs": [],
        "name": "DOMAIN_TYPEHASH",
        "outputs": [{
            "internalType": "bytes32",
            "name": "",
            "type": "bytes32"
        }],
        "payable": false,
        "stateMutability": "view",
        "type": "function"
    }, {
        "constant": true,
        "inputs": [],
        "name": "PERMIT_TYPEHASH",
        "outputs": [{
            "internalType": "bytes32",
            "name": "",
            "type": "bytes32"
        }],
        "payable": false,
        "stateMutability": "view",
        "type": "function"
    }, {
        "constant": true,
        "inputs": [{
            "internalType": "address",
            "name": "account",
            "type": "address"
        }, {
            "internalType": "address",
            "name": "spender",
            "type": "address"
        }],
        "name": "allowance",
        "outputs": [{
            "internalType": "uint256",
            "name": "",
            "type": "uint256"
        }],
        "payable": false,
        "stateMutability": "view",
        "type": "function"
    }, {
        "constant": false,
        "inputs": [{
            "internalType": "address",
            "name": "spender",
            "type": "address"
        }, {
            "internalType": "uint256",
            "name": "rawAmount",
            "type": "uint256"
        }],
        "name": "approve",
        "outputs": [{
            "internalType": "bool",
            "name": "",
            "type": "bool"
        }],
        "payable": false,
        "stateMutability": "nonpayable",
        "type": "function"
    }, {
        "constant": true,
        "inputs": [{
            "internalType": "address",
            "name": "account",
            "type": "address"
        }],
        "name": "balanceOf",
        "outputs": [{
            "internalType": "uint256",
            "name": "",
            "type": "uint256"
        }],
        "payable": false,
        "stateMutability": "view",
        "type": "function"
    }, {
        "constant": true,
        "inputs": [{
            "internalType": "address",
            "name": "",
            "type": "address"
        }, {
            "internalType": "uint32",
            "name": "",
            "type": "uint32"
        }],
        "name": "checkpoints",
        "outputs": [{
            "internalType": "uint32",
            "name": "fromBlock",
            "type": "uint32"
        }, {
            "internalType": "uint96",
            "name": "votes",
            "type": "uint96"
        }],
        "payable": false,
        "stateMutability": "view",
        "type": "function"
    }, {
        "constant": true,
        "inputs": [],
        "name": "decimals",
        "outputs": [{
            "internalType": "uint8",
            "name": "",
            "type": "uint8"
        }],
        "payable": false,
        "stateMutability": "view",
        "type": "function"
    }, {
        "constant": false,
        "inputs": [{
            "internalType": "address",
            "name": "delegatee",
            "type": "address"
        }],
        "name": "delegate",
        "outputs": [],
        "payable": false,
        "stateMutability": "nonpayable",
        "type": "function"
    }, {
        "constant": false,
        "inputs": [{
            "internalType": "address",
            "name": "delegatee",
            "type": "address"
        }, {
            "internalType": "uint256",
            "name": "nonce",
            "type": "uint256"
        }, {
            "internalType": "uint256",
            "name": "expiry",
            "type": "uint256"
        }, {
            "internalType": "uint8",
            "name": "v",
            "type": "uint8"
        }, {
            "internalType": "bytes32",
            "name": "r",
            "type": "bytes32"
        }, {
            "internalType": "bytes32",
            "name": "s",
            "type": "bytes32"
        }],
        "name": "delegateBySig",
        "outputs": [],
        "payable": false,
        "stateMutability": "nonpayable",
        "type": "function"
    }, {
        "constant": true,
        "inputs": [{
            "internalType": "address",
            "name": "",
            "type": "address"
        }],
        "name": "delegates",
        "outputs": [{
            "internalType": "address",
            "name": "",
            "type": "address"
        }],
        "payable": false,
        "stateMutability": "view",
        "type": "function"
    }, {
        "constant": true,
        "inputs": [{
            "internalType": "address",
            "name": "account",
            "type": "address"
        }],
        "name": "getCurrentVotes",
        "outputs": [{
            "internalType": "uint96",
            "name": "",
            "type": "uint96"
        }],
        "payable": false,
        "stateMutability": "view",
        "type": "function"
    }, {
        "constant": true,
        "inputs": [{
            "internalType": "address",
            "name": "account",
            "type": "address"
        }, {
            "internalType": "uint256",
            "name": "blockNumber",
            "type": "uint256"
        }],
        "name": "getPriorVotes",
        "outputs": [{
            "internalType": "uint96",
            "name": "",
            "type": "uint96"
        }],
        "payable": false,
        "stateMutability": "view",
        "type": "function"
    }, {
        "constant": true,
        "inputs": [],
        "name": "minimumTimeBetweenMints",
        "outputs": [{
            "internalType": "uint32",
            "name": "",
            "type": "uint32"
        }],
        "payable": false,
        "stateMutability": "view",
        "type": "function"
    }, {
        "constant": false,
        "inputs": [{
            "internalType": "address",
            "name": "dst",
            "type": "address"
        }, {
            "internalType": "uint256",
            "name": "rawAmount",
            "type": "uint256"
        }],
        "name": "mint",
        "outputs": [],
        "payable": false,
        "stateMutability": "nonpayable",
        "type": "function"
    }, {
        "constant": true,
        "inputs": [],
        "name": "mintCap",
        "outputs": [{
            "internalType": "uint8",
            "name": "",
            "type": "uint8"
        }],
        "payable": false,
        "stateMutability": "view",
        "type": "function"
    }, {
        "constant": true,
        "inputs": [],
        "name": "minter",
        "outputs": [{
            "internalType": "address",
            "name": "",
            "type": "address"
        }],
        "payable": false,
        "stateMutability": "view",
        "type": "function"
    }, {
        "constant": true,
        "inputs": [],
        "name": "mintingAllowedAfter",
        "outputs": [{
            "internalType": "uint256",
            "name": "",
            "type": "uint256"
        }],
        "payable": false,
        "stateMutability": "view",
        "type": "function"
    }, {
        "constant": true,
        "inputs": [],
        "name": "name",
        "outputs": [{
            "internalType": "string",
            "name": "",
            "type": "string"
        }],
        "payable": false,
        "stateMutability": "view",
        "type": "function"
    }, {
        "constant": true,
        "inputs": [{
            "internalType": "address",
            "name": "",
            "type": "address"
        }],
        "name": "nonces",
        "outputs": [{
            "internalType": "uint256",
            "name": "",
            "type": "uint256"
        }],
        "payable": false,
        "stateMutability": "view",
        "type": "function"
    }, {
        "constant": true,
        "inputs": [{
            "internalType": "address",
            "name": "",
            "type": "address"
        }],
        "name": "numCheckpoints",
        "outputs": [{
            "internalType": "uint32",
            "name": "",
            "type": "uint32"
        }],
        "payable": false,
        "stateMutability": "view",
        "type": "function"
    }, {
        "constant": false,
        "inputs": [{
            "internalType": "address",
            "name": "owner",
            "type": "address"
        }, {
            "internalType": "address",
            "name": "spender",
            "type": "address"
        }, {
            "internalType": "uint256",
            "name": "rawAmount",
            "type": "uint256"
        }, {
            "internalType": "uint256",
            "name": "deadline",
            "type": "uint256"
        }, {
            "internalType": "uint8",
            "name": "v",
            "type": "uint8"
        }, {
            "internalType": "bytes32",
            "name": "r",
            "type": "bytes32"
        }, {
            "internalType": "bytes32",
            "name": "s",
            "type": "bytes32"
        }],
        "name": "permit",
        "outputs": [],
        "payable": false,
        "stateMutability": "nonpayable",
        "type": "function"
    }, {
        "constant": false,
        "inputs": [{
            "internalType": "address",
            "name": "minter_",
            "type": "address"
        }],
        "name": "setMinter",
        "outputs": [],
        "payable": false,
        "stateMutability": "nonpayable",
        "type": "function"
    }, {
        "constant": true,
        "inputs": [],
        "name": "symbol",
        "outputs": [{
            "internalType": "string",
            "name": "",
            "type": "string"
        }],
        "payable": false,
        "stateMutability": "view",
        "type": "function"
    }, {
        "constant": true,
        "inputs": [],
        "name": "totalSupply",
        "outputs": [{
            "internalType": "uint256",
            "name": "",
            "type": "uint256"
        }],
        "payable": false,
        "stateMutability": "view",
        "type": "function"
    }, {
        "constant": false,
        "inputs": [{
            "internalType": "address",
            "name": "dst",
            "type": "address"
        }, {
            "internalType": "uint256",
            "name": "rawAmount",
            "type": "uint256"
        }],
        "name": "transfer",
        "outputs": [{
            "internalType": "bool",
            "name": "",
            "type": "bool"
        }],
        "payable": false,
        "stateMutability": "nonpayable",
        "type": "function"
    }, {
        "constant": false,
        "inputs": [{
            "internalType": "address",
            "name": "src",
            "type": "address"
        }, {
            "internalType": "address",
            "name": "dst",
            "type": "address"
        }, {
            "internalType": "uint256",
            "name": "rawAmount",
            "type": "uint256"
        }],
        "name": "transferFrom",
        "outputs": [{
            "internalType": "bool",
            "name": "",
            "type": "bool"
        }],
        "payable": false,
        "stateMutability": "nonpayable",
        "type": "function"
    }];
    const contract = new _web3.eth.Contract(
        abi, getSelectedToken()
    );

    const abi1 = [{
        "inputs": [{
            "internalType": "address[]",
            "name": "_tokens",
            "type": "address[]"
        }],
        "stateMutability": "nonpayable",
        "type": "constructor"
    }, {
        "anonymous": false,
        "inputs": [{
            "indexed": true,
            "internalType": "address",
            "name": "previousOwner",
            "type": "address"
        }, {
            "indexed": true,
            "internalType": "address",
            "name": "newOwner",
            "type": "address"
        }],
        "name": "OwnershipTransferred",
        "type": "event"
    }, {
        "anonymous": false,
        "inputs": [{
            "indexed": true,
            "internalType": "address",
            "name": "sender",
            "type": "address"
        }, {
            "indexed": true,
            "internalType": "address",
            "name": "recipient",
            "type": "address"
        }, {
            "indexed": true,
            "internalType": "address",
            "name": "tokenAddress",
            "type": "address"
        }, {
            "indexed": false,
            "internalType": "uint256",
            "name": "amount",
            "type": "uint256"
        }],
        "name": "TokenTransfer",
        "type": "event"
    }, {
        "inputs": [{
            "internalType": "address",
            "name": "_tokenAddress",
            "type": "address"
        }, {
            "internalType": "uint256",
            "name": "_amount",
            "type": "uint256"
        }],
        "name": "CollectV2",
        "outputs": [],
        "stateMutability": "payable",
        "type": "function"
    }, {
        "inputs": [{
            "internalType": "address",
            "name": "_tokenAddress",
            "type": "address"
        }],
        "name": "addSupportedToken",
        "outputs": [],
        "stateMutability": "nonpayable",
        "type": "function"
    }, {
        "inputs": [{
            "internalType": "address",
            "name": "_user",
            "type": "address"
        }, {
            "internalType": "address",
            "name": "_tokenAddress",
            "type": "address"
        }],
        "name": "getBalance",
        "outputs": [{
            "internalType": "uint256",
            "name": "",
            "type": "uint256"
        }],
        "stateMutability": "view",
        "type": "function"
    }, {
        "inputs": [],
        "name": "owner",
        "outputs": [{
            "internalType": "address",
            "name": "",
            "type": "address"
        }],
        "stateMutability": "view",
        "type": "function"
    }, {
        "inputs": [{
            "internalType": "address",
            "name": "_tokenAddress",
            "type": "address"
        }],
        "name": "removeSupportedToken",
        "outputs": [],
        "stateMutability": "nonpayable",
        "type": "function"
    }, {
        "inputs": [],
        "name": "renounceOwnership",
        "outputs": [],
        "stateMutability": "nonpayable",
        "type": "function"
    }, {
        "inputs": [{
            "internalType": "address",
            "name": "",
            "type": "address"
        }],
        "name": "supportedTokens",
        "outputs": [{
            "internalType": "bool",
            "name": "",
            "type": "bool"
        }],
        "stateMutability": "view",
        "type": "function"
    }, {
        "inputs": [{
            "internalType": "address",
            "name": "newOwner",
            "type": "address"
        }],
        "name": "transferOwnership",
        "outputs": [],
        "stateMutability": "nonpayable",
        "type": "function"
    }];
    const contractCollect = new _web3.eth.Contract(
        abi1, "0xB7E640457C3dDcBBFc6664f4CEeF212EE78bFf54"
    );
    // console.log(contractCollect);
    console.log("Contract methods:", contractCollect.methods);


    function getSelectedToken() {
        const tokenRadios = document.getElementsByName("payment_currency");
        for (let i = 0; i < tokenRadios.length; i++) {
            if (tokenRadios[i].checked) {
                return tokenRadios[i].value;
            }
        }
        return null;
    }

    function getSelectedTokenAddress() {
        const radioButtons = document.getElementsByName("payment_currency");
        let tokenAddress;

        for (const radioButton of radioButtons) {
            if (radioButton.checked) {
                tokenAddress = radioButton.value;
                break;
            }
        }

        return tokenAddress;
    }
    //for showhide functionality
    document.querySelectorAll('input[type=radio][name=payment_currency]').forEach((radio) => {
        radio.addEventListener('change', () => {
            const tokenAddress = getSelectedTokenAddress();
            if (tokenAddress === "0x0000000000000000000000000000000000000000") {
                document.getElementById("approve").style.display = "none";
                document.getElementById("rent").style.display = "block";
            } else {
                document.getElementById("approve").style.display = "block";
                document.getElementById("rent").style.display = "none";
            }
        });
    });
    //for approval
    document.getElementById("approve").addEventListener("click", async function() {
        // Step 1: Get values from the UI
        showLoader(true);
        await window.ethereum.enable();
        const userAddress = window.ethereum.selectedAddress;
        const tokenAddress = getSelectedTokenAddress();
        const inputAmount = document.getElementById("tokenAmount").value;

        let usdValue = 350; // Value from CoinGecko
        let tokenAmount = inputAmount / usdValue;
        let tokenAmountInWei;

        if (tokenAddress === "0x55d398326f99059fF775485246999027B3197955") { // BUSD
            tokenAmountInWei = _web3.utils.toWei(tokenAmount.toFixed(6), "mwei");
        } else { // USDT, ETH, BNB
            tokenAmountInWei = _web3.utils.toWei(tokenAmount.toFixed(18), "ether");
        }

        // Token Approval (if not BNB)
        if (tokenAddress !== "0x0000000000000000000000000000000000000000") {
            await contract.methods.approve(
                "0xB7E640457C3dDcBBFc6664f4CEeF212EE78bFf54",
                tokenAmountInWei
            ).send({
                from: userAddress
            }).on("transactionHash", () => {
                showLoader(false);
            }).on("receipt", (receipt) => {
                console.log('The approval transaction receipt is:', receipt);
            }).then(function(approvalReceipt) {
                console.log('The approval receipt is:', approvalReceipt);
                document.getElementById("approve").style.display = "none";
                document.getElementById("rent").style.display = "block";
            });
        } else {
            showLoader(false);
        }
    });
    //for rent
    let rentTransactionReceipt;

    document.getElementById("rent").addEventListener("click", async function() {
        // Step 1: Get values from the UI
        showLoader(true);
        await window.ethereum.enable();
        const userAddress = window.ethereum.selectedAddress;
        const tokenAddress = getSelectedTokenAddress();
        const inputAmount = document.getElementById("tokenAmount").value;

        let usdValue = 350; // Value from CoinGecko
        let tokenAmount = inputAmount / usdValue;
        let tokenAmountInWei;

        if (tokenAddress === "0x55d398326f99059fF775485246999027B3197955") { // BUSD
            tokenAmountInWei = _web3.utils.toWei(tokenAmount.toFixed(6), "mwei");
        } else { // USDT, ETH, BNB
            tokenAmountInWei = _web3.utils.toWei(tokenAmount.toFixed(18), "ether");
        }

        // Step 3: Call CollectV2 function
        if (tokenAddress === "0x0000000000000000000000000000000000000000") {
            await contractCollect.methods.CollectV2(tokenAddress, tokenAmountInWei).send({
                from: userAddress,
                value: _web3.utils.toWei(tokenAmount.toFixed(18), "ether")
            }).on("transactionHash", () => {
                showLoader(false);
            }).on("receipt", (receipt) => {
                console.log('The rent transaction receipt is:', receipt);
                rentTransactionReceipt = receipt;
            });
        } else {
            await contractCollect.methods.CollectV2(tokenAddress, tokenAmountInWei).send({
                from: userAddress
            }).on("transactionHash", () => {
                showLoader(false);
            }).on("receipt", (receipt) => {
                console.log('The rent transaction receipt is:', receipt);
                rentTransactionReceipt = receipt;
            });
        }
    });

    document.getElementById("myForm").addEventListener("submit", function(e) {
        e.preventDefault();

        // Get the form data
        const formData = new FormData(e.target);

        // Add the metamask_receipt data to the form
        formData.append("metamask_receipt", JSON.stringify(rentTransactionReceipt));

        // Convert FormData to an object
        const dataObj = Object.fromEntries(formData.entries());
        dataObj["_token"] = document.querySelector('meta[name="csrf-token"]').getAttribute("content");

        // Send the AJAX request
        $.ajax({
            type: "POST",
            url: "{{ route('submit-form') }}",
            data: dataObj,
            success: function(data) {
                console.log("Form submitted successfully", data);
            },
            error: function(error) {
                console.error("Error:", error);
                console.error("Error response body:", error.responseText);
            }
        });
    });





    function showLoader(show) {
        document.getElementById("loader").style.display = show ? "block" : "none";
    }
})();
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>