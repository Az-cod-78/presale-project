@extends('layouts.main')

@section('title', 'Card')

@section('content')

<!-- Cards section -->

<section id="buy-cards" class="container py-5">
    <div class="text-center position-relative" style="top: 0;" id="back-img">
        <div class="d-flex justify-content-center">
            <div>
                <img src="assets/img/backShadow.png" class="position-absolute cards-back-img" style="right: 30%;"
                    width="35%" alt="">
                <img src="assets/img/image 202.png" width="180" alt="">
                <h1 class="head-color font-family card-info-text mt-3 lt-sp2">CARD INFORMATION</h1>
                <h3 class="text-white font-family lt-sp">NUMBERS</h3>
            </div>
        </div>
    </div>
    <div class="row mt-5 pt-5" id="all-cards">
        <div class="col-md-4 my-3">
            <div class="buy-card text-center p-4">
                <img src="assets/img/image 203.png" width="100" alt="">
                <h5 class="text-white font-family lt-sp2 mt-3">CONNECTION CARD</h5>
                <h6 class="para-color-2">+50 additional Family Tokens</h6>
                <div class="text-start my-4">
                    <ul>
                        <li class="text-white my-1 fs-weight"><span class="para-color-2">Own swift</span> account number
                        </li>
                        <li class="text-white my-1 fs-weight"><span class="para-color-2">Offshore</span> bank account
                        </li>
                        <li class="text-white my-1 fs-weight"><span class="para-color-2">Worldwide acceptance</span> and
                            use ( also in countries where crypto <span class="para-color-2">is banned</span> )</li>
                        <li class="text-white my-1 fs-weight"><span class="para-color-2">Rechargeable </span> with
                            Metamask</li>
                        <li class="text-white my-1 fs-weight"><span class="para-color-2">5%</span> Loading fees</li>
                        <li class="text-white my-1 fs-weight"><span class="para-color-2">$80,000,-</span> Monthly
                            loading cap</li>
                        <li class="text-white my-1 fs-weight">Daily withdraw limit =<span
                                class="para-color-2">$5,000,-</span></li>
                    </ul>
                </div>
                <button type="button" class="btn btn-primary card-btn" data-bs-toggle="modal"
                    data-bs-target="#connectionCard">BUY CARD</button>
            </div>
        </div>

        <div class="col-md-4 my-3">
            <div class="buy-card text-center p-4">
                <img src="assets/img/image 205.png" width="100" alt="">
                <h5 class="text-white font-family lt-sp2 mt-3">Flourish Card</h5>
                <h6 class="para-color-2">+400 additional Family Tokens</h6>
                <div class="text-start my-4">
                    <ul>
                        <li class="text-white my-1 fs-weight"><span class="para-color-2">Own swift</span> account number
                        </li>
                        <li class="text-white my-1 fs-weight"><span class="para-color-2">Offshore</span> bank account
                        </li>
                        <li class="text-white my-1 fs-weight"><span class="para-color-2">Worldwide acceptance</span> and
                            use ( also in countries where crypto <span class="para-color-2">is banned</span> )</li>
                        <li class="text-white my-1 fs-weight"><span class="para-color-2">Rechargeable </span> with
                            Metamask</li>
                        <li class="text-white my-1 fs-weight"><span class="para-color-2">4.5%</span> Loading fees</li>
                        <li class="text-white my-1 fs-weight"><span class="para-color-2">$200,000,-</span> Monthly
                            loading cap</li>
                        <li class="text-white my-1 fs-weight">Daily withdraw limit =<span class="para-color-2"> No
                                limit</span></li>
                    </ul>
                </div>
                <button type="button" class="btn btn-primary card-btn" data-bs-toggle="modal"
                    data-bs-target="#flourishCard">BUY CARD</button>
            </div>
        </div>

        <div class="col-md-4 my-3">
            <div class="buy-card text-center p-4">
                <img src="assets/img/image 204.png" width="100" alt="">
                <h5 class="text-white font-family lt-sp2 mt-3">Pinnacle Card</h5>
                <h6 class="para-color-2">+3000 additional Family Tokens</h6>
                <div class="text-start my-4">
                    <ul>
                        <li class="text-white my-1 fs-weight"><span class="para-color-2">Own swift</span> account number
                        </li>
                        <li class="text-white my-1 fs-weight"><span class="para-color-2">Offshore</span> bank account
                        </li>
                        <li class="text-white my-1 fs-weight"><span class="para-color-2">Worldwide acceptance</span> and
                            use ( also in countries where crypto <span class="para-color-2">is banned</span> )</li>
                        <li class="text-white my-1 fs-weight"><span class="para-color-2">Rechargeable </span> with
                            Metamask</li>
                        <li class="text-white my-1 fs-weight"><span class="para-color-2">4%</span> Loading fees</li>
                        <li class="text-white my-1 fs-weight"><span class="para-color-2">No limit</span> Monthly loading
                            cap</li>
                        <li class="text-white my-1 fs-weight">Daily withdraw limit =<span
                                class="para-color-2">$5,000,-</span></li>
                    </ul>
                </div>
                <button type="button" class="btn btn-primary card-btn" data-bs-toggle="modal"
                    data-bs-target="#pinnacleCard">BUY CARD</button>
            </div>
        </div>
    </div>

    <div class="px-5 text-center mt-5">
        <h6 class="text-primary">Future perks that include <span class="para-color-2">rental services</span>, 24/7
            concierge and others | future <span class="para-color-2"> airport VIP Lounge</span> access
            | Discount for <span class="para-color-2">Private Jet</span> and <span class="para-color-2">Limousine</span>
            services</h6>
        <div class="px-5">
            <hr class="mx-5" style="background-color: #8DB5CF;">
        </div>
        <h56 class="text-primary">A new era of innovation and togetherness</h56>
    </div>
</section>




<!-- faqs -->

<section class="container text-center " id="card-page-faq">
    <h1 class="text-white font-family lt-sp2">FREQUENTLY ASKED QUESTIONS</h1>

    <div class="mt-5 text-start">
        <div class="accordion" id="accordionExample">


            <div class="accordion-item  my-3">
                <h2 class="accordion-header" id="headingThree">
                    <div class="d-flex justify-content-between accordion-button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <div class="w-50">
                            <span class="text-primary">How much does it cost to get a Crypto Family card?</span>
                        </div>
                        <div class="text-end w-50">
                            <i class="material-icons text-primary">expand_circle_down</i>
                        </div>
                    </div>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse " aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body text-white-50 font-size">
                        Crypto Family Cards are a collection of physical cards featuring various cryptocurrency designs.
                        Each card has a unique QR code that links to a cryptocurrency wallet address.
                    </div>
                </div>
            </div>

            <div class="accordion-item active-accordian my-3">
                <h2 class="" id="headingOne">
                    <div class="d-flex justify-content-between accordion-button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <div class="w-50">
                            <span class="text-primary">How do i get my Crypto Family Card?</span>
                        </div>
                        <div class="text-end w-50">
                            <i class="material-icons text-primary">expand_circle_down</i>
                        </div>
                    </div>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body text-white-50 font-size">
                        You will need to make sure you have your Family tokens ready, then place an order through the
                        presale page and purchase the cards using your Family Tokens. Once purchased, you will get a
                        voucher code and u can claim your card in our dashboard.
                    </div>
                </div>
            </div>


            <div class="accordion-item  my-3">
                <h2 class="accordion-header" id="headingTwo">
                    <div class="d-flex justify-content-between accordion-button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <div class="w-50">
                            <span class="text-primary">How do i keep my funds safe?</span>
                        </div>
                        <div class="text-end w-50">
                            <i class="material-icons text-primary">expand_circle_down</i>
                        </div>
                    </div>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse " aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body text-white-50 font-size">
                        Keeping your cryptocurrency funds safe is crucial. Here are some best practices to help you
                        protect your assets:
                    </div>
                </div>
            </div>


            <div class="accordion-item my-3">
                <h2 class="" id="headingFour">
                    <div class="d-flex justify-content-between accordion-button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                        <div class="w-50">
                            <span class="text-primary">What is the minimum load up amount?</span>
                        </div>
                        <div class="text-end w-50">
                            <i class="material-icons text-primary">expand_circle_down</i>
                        </div>
                    </div>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse " aria-labelledby="headingFour"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body text-white-50 font-size">
                        The minimum load up amount is the smallest amount of money that you can add to your payment card
                        or digital wallet. The minimum load up amount varies depending on the specific card or wallet
                        and the issuer's policies.
                    </div>
                </div>
            </div>


            <div class="accordion-item my-3">
                <h2 class="" id="headingFive">
                    <div class="d-flex justify-content-between accordion-button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFour">
                        <div class="w-50">
                            <span class="text-primary">What is the Maximum amount i can spend?</span>
                        </div>
                        <div class="text-end w-50">
                            <i class="material-icons text-primary">expand_circle_down</i>
                        </div>
                    </div>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse " aria-labelledby="headingFive"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body text-white-50 font-size">
                        The maximum amount you can spend varies depending on the specific payment card or digital wallet
                        and the issuer's policies. Generally, the maximum amount you can spend is determined by the
                        available balance on your card or wallet.
                    </div>
                </div>
            </div>


            <div class="accordion-item my-3">
                <h2 class="" id="headingSix">
                    <div class="d-flex justify-content-between accordion-button" data-bs-toggle="collapse"
                        data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                        <div class="w-50">
                            <span class="text-primary">What is the loading fees?</span>
                        </div>
                        <div class="text-end w-50">
                            <i class="material-icons text-primary">expand_circle_down</i>
                        </div>
                    </div>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse " aria-labelledby="headingSix"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body text-white-50 font-size">
                        A loading fee is a fee that is charged when you add funds to your payment card or digital
                        wallet. The loading fee varies depending on the specific card or wallet and the issuer's
                        policies. </div>
                </div>
            </div>


            <div class="accordion-item my-3">
                <h2 class="" id="headingSeven">
                    <div class="d-flex justify-content-between accordion-button" data-bs-toggle="collapse"
                        data-bs-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                        <div class="w-50">
                            <span class="text-primary">What do i do if i lose my card?</span>
                        </div>
                        <div class="text-end w-50">
                            <i class="material-icons text-primary">expand_circle_down</i>
                        </div>
                    </div>
                </h2>
                <div id="collapseSeven" class="accordion-collapse collapse " aria-labelledby="headingSeven"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body text-white-50 font-size">
                        If you lose your payment card or digital wallet, it's important to take action immediately to
                        protect your funds and prevent unauthorized charges. Here are some steps to take: </div>
                </div>
            </div>


            <!-- <div class="accordion-item my-3">
                    <h2 class="" id="heading8">
                      <div class="d-flex justify-content-between accordion-button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="true" aria-controls="collapse8">
                          <div class="w-50">
                              <span class="text-primary">What do i do if i lose my card?</span>
                          </div>
                          <div class="text-end w-50">
                              <i class="material-icons text-primary">expand_circle_down</i>
                          </div>
                      </div>
                    </h2>
                    <div id="collapse8" class="accordion-collapse collapse " aria-labelledby="heading8" data-bs-parent="#accordionExample">
                      <div class="accordion-body text-white-50 font-size">
                        If you lose your payment card or digital wallet, it's important to take action immediately to protect your funds and prevent unauthorized charges. Here are some steps to take:                          </div>
                    </div>
                  </div>


                  <div class="accordion-item my-3">
                    <h2 class="" id="heading9">
                      <div class="d-flex justify-content-between accordion-button" data-bs-toggle="collapse" data-bs-target="#collapse9" aria-expanded="true" aria-controls="collapse9">
                          <div class="w-50">
                              <span class="text-primary">What do i do if i lose my card?</span>
                          </div>
                          <div class="text-end w-50">
                              <i class="material-icons text-primary">expand_circle_down</i>
                          </div>
                      </div>
                    </h2>
                    <div id="collapse9" class="accordion-collapse collapse " aria-labelledby="heading9" data-bs-parent="#accordionExample">
                      <div class="accordion-body text-white-50 font-size">
                        If you lose your payment card or digital wallet, it's important to take action immediately to protect your funds and prevent unauthorized charges. Here are some steps to take:                          </div>
                    </div>
                  </div>


                  <div class="accordion-item my-3">
                    <h2 class="" id="heading10">
                      <div class="d-flex justify-content-between accordion-button" data-bs-toggle="collapse" data-bs-target="#collapse10" aria-expanded="true" aria-controls="collapse10">
                          <div class="w-50">
                              <span class="text-primary">What do i do if i lose my card?</span>
                          </div>
                          <div class="text-end w-50">
                              <i class="material-icons text-primary">expand_circle_down</i>
                          </div>
                      </div>
                    </h2>
                    <div id="collapse10" class="accordion-collapse collapse " aria-labelledby="heading10" data-bs-parent="#accordionExample">
                      <div class="accordion-body text-white-50 font-size">
                        If you lose your payment card or digital wallet, it's important to take action immediately to protect your funds and prevent unauthorized charges. Here are some steps to take:                          </div>
                    </div>
                  </div> -->



        </div>
    </div>

</section>

<!-- Modal Card 1 -->
<div class="modal fade " id="connectionCard" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Connection Card</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('submit-form') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3" hidden>
                        <label for="connectionCard" class="form-label">Card Name</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="connectionCard" name="card_name"
                                value="Connection Card" placeholder="Connection Card">
                        </div>
                    </div>
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
                        <label for="airdropAddress" class="form-label">Your Wallet Address (Metamask BEP-20
                            address...)</label>
                        <input type="text" class="form-control" id="airdropAddress" name="airdrop_address"
                            placeholder="Enter your Metamask BEP-20 address">
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
                    <div class="mb-3">
                        <label for="tokenAmount" class="form-label">Amount</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="tokenAmount" name="token_amount"
                                placeholder="Enter the amount of Family Tokens">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <div class="mb-3">
                    <div class="mt-2" id="dataA">
                        <button class="cmn--btn plan-btn mt-2" style="display: block;" id="hamza">Approve</button>
                        <button class="btn btn--base btn--smd mt-2" style="display: none; width:100% !important;"
                            id="rent">Rent</button>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal Card 2 -->
<div class="modal fade " id="flourishCard" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Flourish Card</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('submit-form') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3" hidden>
                        <label for="flourishCard" class="form-label">Card Name</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="flourishCard" name="card_name"
                                value="Flourish Card" placeholder="Flourish Card">
                        </div>
                    </div>
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
                        <label for="airdropAddress" class="form-label">Your Wallet Address (Metamask BEP-20
                            address...)</label>
                        <input type="text" class="form-control" id="airdropAddress" name="airdrop_address"
                            placeholder="Enter your Metamask BEP-20 address">
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
                    <div class="mb-3">
                        <label for="tokenAmount" class="form-label">Amount</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="tokenAmount" name="token_amount"
                                placeholder="Enter the amount of Family Tokens">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <div class="mb-3">
                    <div class="mt-2" id="dataA">
                        <button class="cmn--btn plan-btn mt-2" style="display: block;"
                            id="conntWalletApprove">Approve</button>
                        <button class="btn btn--base btn--smd mt-2" style="display: none; width:100% !important;"
                            id="rent">Rent</button>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal Card 3 -->
<div class="modal fade " id="pinnacleCard" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pinnacle Card</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('submit-form') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3" hidden>
                        <label for="pinnacleCard" class="form-label">Card Name</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="pinnacleCard" name="card_name"
                                value="Pinnacle Card" placeholder="Pinnacle Card">
                        </div>
                    </div>
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
                        <label for="airdropAddress" class="form-label">Your Wallet Address (Metamask BEP-20
                            address...)</label>
                        <input type="text" class="form-control" id="airdropAddress" name="airdrop_address"
                            placeholder="Enter your Metamask BEP-20 address">
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
                    <div class="mb-3">
                        <label for="tokenAmount" class="form-label">Amount</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="tokenAmount" name="token_amount"
                                placeholder="Enter the amount of Family Tokens">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <div class="mb-3">
                    <div class="mt-2" id="dataA">
                        <button class="cmn--btn plan-btn mt-2" style="display: block;"
                            id="conntWalletApprove">Approve</button>
                        <button class="btn btn--base btn--smd mt-2" style="display: none; width:100% !important;"
                            id="rent">Rent</button>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>


{{-- <script>
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
</script> --}}

<script src="https://cdn.jsdelivr.net/npm/web3@latest/dist/web3.min.js"></script>
<!-- <script> -->
// (async function() {
// if (typeof window.ethereum === 'undefined') {
// alert("Please install MetaMask extension to use this feature.");
// document.getElementById("conntWalletApprove").disabled = true;
// document.getElementById("rent").disabled = true;
// return;
// }

// function getSelectedToken() {
// const tokenRadios = document.getElementsByName("payment_currency");
// for (let i = 0; i < tokenRadios.length; i++) { // if (tokenRadios[i].checked) { // return tokenRadios[i].value; // }
    // } // return null; // } const _web3=new Web3(window.ethereum); const abi=[{ "inputs" : [{ "internalType"
    : "address" , "name" : "account" , "type" : "address" }, { "internalType" : "address" , "name" : "minter_" , "type"
    : "address" }, { "internalType" : "uint256" , "name" : "mintingAllowedAfter_" , "type" : "uint256" }], "payable" :
    false, "stateMutability" : "nonpayable" , "type" : "constructor" }, { "anonymous" : false, "inputs" : [{ "indexed" :
    true, "internalType" : "address" , "name" : "owner" , "type" : "address" }, { "indexed" : true, "internalType"
    : "address" , "name" : "spender" , "type" : "address" }, { "indexed" : false, "internalType" : "uint256" , "name"
    : "amount" , "type" : "uint256" }], "name" : "Approval" , "type" : "event" }, { "anonymous" : false, "inputs" :
    [{ "indexed" : true, "internalType" : "address" , "name" : "delegator" , "type" : "address" }, { "indexed" :
    true, "internalType" : "address" , "name" : "fromDelegate" , "type" : "address" }, { "indexed" :
    true, "internalType" : "address" , "name" : "toDelegate" , "type" : "address" }], "name" : "DelegateChanged"
    , "type" : "event" }, { "anonymous" : false, "inputs" : [{ "indexed" : true, "internalType" : "address" , "name"
    : "delegate" , "type" : "address" }, { "indexed" : false, "internalType" : "uint256" , "name" : "previousBalance"
    , "type" : "uint256" }, { "indexed" : false, "internalType" : "uint256" , "name" : "newBalance" , "type" : "uint256"
    }], "name" : "DelegateVotesChanged" , "type" : "event" }, { "anonymous" : false, "inputs" : [{ "indexed" :
    false, "internalType" : "address" , "name" : "minter" , "type" : "address" }, { "indexed" : false, "internalType"
    : "address" , "name" : "newMinter" , "type" : "address" }], "name" : "MinterChanged" , "type" : "event" },
    { "anonymous" : false, "inputs" : [{ "indexed" : true, "internalType" : "address" , "name" : "from" , "type"
    : "address" }, { "indexed" : true, "internalType" : "address" , "name" : "to" , "type" : "address" }, { "indexed" :
    false, "internalType" : "uint256" , "name" : "amount" , "type" : "uint256" }], "name" : "Transfer" , "type"
    : "event" }, { "constant" : true, "inputs" : [], "name" : "DELEGATION_TYPEHASH" , "outputs" : [{ "internalType"
    : "bytes32" , "name" : "" , "type" : "bytes32" }], "payable" : false, "stateMutability" : "view" , "type"
    : "function" }, { "constant" : true, "inputs" : [], "name" : "DOMAIN_TYPEHASH" , "outputs" : [{ "internalType"
    : "bytes32" , "name" : "" , "type" : "bytes32" }], "payable" : false, "stateMutability" : "view" , "type"
    : "function" }, { "constant" : true, "inputs" : [], "name" : "PERMIT_TYPEHASH" , "outputs" : [{ "internalType"
    : "bytes32" , "name" : "" , "type" : "bytes32" }], "payable" : false, "stateMutability" : "view" , "type"
    : "function" }, { "constant" : true, "inputs" : [{ "internalType" : "address" , "name" : "account" , "type"
    : "address" }, { "internalType" : "address" , "name" : "spender" , "type" : "address" }], "name" : "allowance"
    , "outputs" : [{ "internalType" : "uint256" , "name" : "" , "type" : "uint256" }], "payable" :
    false, "stateMutability" : "view" , "type" : "function" }, { "constant" : false, "inputs" : [{ "internalType"
    : "address" , "name" : "spender" , "type" : "address" }, { "internalType" : "uint256" , "name" : "rawAmount"
    , "type" : "uint256" }], "name" : "approve" , "outputs" : [{ "internalType" : "bool" , "name" : "" , "type" : "bool"
    }], "payable" : false, "stateMutability" : "nonpayable" , "type" : "function" }, { "constant" : true, "inputs" :
    [{ "internalType" : "address" , "name" : "account" , "type" : "address" }], "name" : "balanceOf" , "outputs" :
    [{ "internalType" : "uint256" , "name" : "" , "type" : "uint256" }], "payable" : false, "stateMutability" : "view"
    , "type" : "function" }, { "constant" : true, "inputs" : [{ "internalType" : "address" , "name" : "" , "type"
    : "address" }, { "internalType" : "uint32" , "name" : "" , "type" : "uint32" }], "name" : "checkpoints" , "outputs"
    : [{ "internalType" : "uint32" , "name" : "fromBlock" , "type" : "uint32" }, { "internalType" : "uint96" , "name"
    : "votes" , "type" : "uint96" }], "payable" : false, "stateMutability" : "view" , "type" : "function" },
    { "constant" : true, "inputs" : [], "name" : "decimals" , "outputs" : [{ "internalType" : "uint8" , "name" : ""
    , "type" : "uint8" }], "payable" : false, "stateMutability" : "view" , "type" : "function" }, { "constant" :
    false, "inputs" : [{ "internalType" : "address" , "name" : "delegatee" , "type" : "address" }], "name" : "delegate"
    , "outputs" : [], "payable" : false, "stateMutability" : "nonpayable" , "type" : "function" }, { "constant" :
    false, "inputs" : [{ "internalType" : "address" , "name" : "delegatee" , "type" : "address" }, { "internalType"
    : "uint256" , "name" : "nonce" , "type" : "uint256" }, { "internalType" : "uint256" , "name" : "expiry" , "type"
    : "uint256" }, { "internalType" : "uint8" , "name" : "v" , "type" : "uint8" }, { "internalType" : "bytes32" , "name"
    : "r" , "type" : "bytes32" }, { "internalType" : "bytes32" , "name" : "s" , "type" : "bytes32" }], "name"
    : "delegateBySig" , "outputs" : [], "payable" : false, "stateMutability" : "nonpayable" , "type" : "function" },
    { "constant" : true, "inputs" : [{ "internalType" : "address" , "name" : "" , "type" : "address" }], "name"
    : "delegates" , "outputs" : [{ "internalType" : "address" , "name" : "" , "type" : "address" }], "payable" :
    false, "stateMutability" : "view" , "type" : "function" }, { "constant" : true, "inputs" : [{ "internalType"
    : "address" , "name" : "account" , "type" : "address" }], "name" : "getCurrentVotes" , "outputs" : [{ "internalType"
    : "uint96" , "name" : "" , "type" : "uint96" }], "payable" : false, "stateMutability" : "view" , "type" : "function"
    }, { "constant" : true, "inputs" : [{ "internalType" : "address" , "name" : "account" , "type" : "address" },
    { "internalType" : "uint256" , "name" : "blockNumber" , "type" : "uint256" }], "name" : "getPriorVotes" , "outputs"
    : [{ "internalType" : "uint96" , "name" : "" , "type" : "uint96" }], "payable" : false, "stateMutability" : "view"
    , "type" : "function" }, { "constant" : true, "inputs" : [], "name" : "minimumTimeBetweenMints" , "outputs" :
    [{ "internalType" : "uint32" , "name" : "" , "type" : "uint32" }], "payable" : false, "stateMutability" : "view"
    , "type" : "function" }, { "constant" : false, "inputs" : [{ "internalType" : "address" , "name" : "dst" , "type"
    : "address" }, { "internalType" : "uint256" , "name" : "rawAmount" , "type" : "uint256" }], "name" : "mint"
    , "outputs" : [], "payable" : false, "stateMutability" : "nonpayable" , "type" : "function" }, { "constant" :
    true, "inputs" : [], "name" : "mintCap" , "outputs" : [{ "internalType" : "uint8" , "name" : "" , "type" : "uint8"
    }], "payable" : false, "stateMutability" : "view" , "type" : "function" }, { "constant" : true, "inputs" :
    [], "name" : "minter" , "outputs" : [{ "internalType" : "address" , "name" : "" , "type" : "address" }], "payable" :
    false, "stateMutability" : "view" , "type" : "function" }, { "constant" : true, "inputs" : [], "name"
    : "mintingAllowedAfter" , "outputs" : [{ "internalType" : "uint256" , "name" : "" , "type" : "uint256" }], "payable"
    : false, "stateMutability" : "view" , "type" : "function" }, { "constant" : true, "inputs" : [], "name" : "name"
    , "outputs" : [{ "internalType" : "string" , "name" : "" , "type" : "string" }], "payable" :
    false, "stateMutability" : "view" , "type" : "function" }, { "constant" : true, "inputs" : [{ "internalType"
    : "address" , "name" : "" , "type" : "address" }], "name" : "nonces" , "outputs" : [{ "internalType" : "uint256"
    , "name" : "" , "type" : "uint256" }], "payable" : false, "stateMutability" : "view" , "type" : "function" },
    { "constant" : true, "inputs" : [{ "internalType" : "address" , "name" : "" , "type" : "address" }], "name"
    : "numCheckpoints" , "outputs" : [{ "internalType" : "uint32" , "name" : "" , "type" : "uint32" }], "payable" :
    false, "stateMutability" : "view" , "type" : "function" }, { "constant" : false, "inputs" : [{ "internalType"
    : "address" , "name" : "owner" , "type" : "address" }, { "internalType" : "address" , "name" : "spender" , "type"
    : "address" }, { "internalType" : "uint256" , "name" : "rawAmount" , "type" : "uint256" }, { "internalType"
    : "uint256" , "name" : "deadline" , "type" : "uint256" }, { "internalType" : "uint8" , "name" : "v" , "type"
    : "uint8" }, { "internalType" : "bytes32" , "name" : "r" , "type" : "bytes32" }, { "internalType" : "bytes32"
    , "name" : "s" , "type" : "bytes32" }], "name" : "permit" , "outputs" : [], "payable" : false, "stateMutability"
    : "nonpayable" , "type" : "function" }, { "constant" : false, "inputs" : [{ "internalType" : "address" , "name"
    : "minter_" , "type" : "address" }], "name" : "setMinter" , "outputs" : [], "payable" : false, "stateMutability"
    : "nonpayable" , "type" : "function" }, { "constant" : true, "inputs" : [], "name" : "symbol" , "outputs" :
    [{ "internalType" : "string" , "name" : "" , "type" : "string" }], "payable" : false, "stateMutability" : "view"
    , "type" : "function" }, { "constant" : true, "inputs" : [], "name" : "totalSupply" , "outputs" : [{ "internalType"
    : "uint256" , "name" : "" , "type" : "uint256" }], "payable" : false, "stateMutability" : "view" , "type"
    : "function" }, { "constant" : false, "inputs" : [{ "internalType" : "address" , "name" : "dst" , "type" : "address"
    }, { "internalType" : "uint256" , "name" : "rawAmount" , "type" : "uint256" }], "name" : "transfer" , "outputs" :
    [{ "internalType" : "bool" , "name" : "" , "type" : "bool" }], "payable" : false, "stateMutability" : "nonpayable"
    , "type" : "function" }, { "constant" : false, "inputs" : [{ "internalType" : "address" , "name" : "src" , "type"
    : "address" }, { "internalType" : "address" , "name" : "dst" , "type" : "address" }, { "internalType" : "uint256"
    , "name" : "rawAmount" , "type" : "uint256" }], "name" : "transferFrom" , "outputs" : [{ "internalType" : "bool"
    , "name" : "" , "type" : "bool" }], "payable" : false, "stateMutability" : "nonpayable" , "type" : "function" }];
    const contract=new _web3.eth.Contract( abi, getSelectedToken() ); const abi1=[{ "inputs" : [{ "internalType"
    : "address[]" , "name" : "_tokens" , "type" : "address[]" }], "stateMutability" : "nonpayable" , "type"
    : "constructor" }, { "anonymous" : false, "inputs" : [{ "indexed" : true, "internalType" : "address" , "name"
    : "previousOwner" , "type" : "address" }, { "indexed" : true, "internalType" : "address" , "name" : "newOwner"
    , "type" : "address" }], "name" : "OwnershipTransferred" , "type" : "event" }, { "anonymous" : false, "inputs" :
    [{ "indexed" : true, "internalType" : "address" , "name" : "sender" , "type" : "address" }, { "indexed" :
    true, "internalType" : "address" , "name" : "recipient" , "type" : "address" }, { "indexed" : true, "internalType"
    : "address" , "name" : "tokenAddress" , "type" : "address" }, { "indexed" : false, "internalType" : "uint256"
    , "name" : "amount" , "type" : "uint256" }], "name" : "TokenTransfer" , "type" : "event" }, { "inputs" :
    [{ "internalType" : "address" , "name" : "_tokenAddress" , "type" : "address" }, { "internalType" : "uint256"
    , "name" : "_amount" , "type" : "uint256" }], "name" : "CollectV2" , "outputs" : [], "stateMutability" : "payable"
    , "type" : "function" }, { "inputs" : [{ "internalType" : "address" , "name" : "_tokenAddress" , "type" : "address"
    }], "name" : "addSupportedToken" , "outputs" : [], "stateMutability" : "nonpayable" , "type" : "function" },
    { "inputs" : [{ "internalType" : "address" , "name" : "_user" , "type" : "address" }, { "internalType" : "address"
    , "name" : "_tokenAddress" , "type" : "address" }], "name" : "getBalance" , "outputs" : [{ "internalType"
    : "uint256" , "name" : "" , "type" : "uint256" }], "stateMutability" : "view" , "type" : "function" }, { "inputs" :
    [], "name" : "owner" , "outputs" : [{ "internalType" : "address" , "name" : "" , "type" : "address"
    }], "stateMutability" : "view" , "type" : "function" }, { "inputs" : [{ "internalType" : "address" , "name"
    : "_tokenAddress" , "type" : "address" }], "name" : "removeSupportedToken" , "outputs" : [], "stateMutability"
    : "nonpayable" , "type" : "function" }, { "inputs" : [], "name" : "renounceOwnership" , "outputs" :
    [], "stateMutability" : "nonpayable" , "type" : "function" }, { "inputs" : [{ "internalType" : "address" , "name"
    : "" , "type" : "address" }], "name" : "supportedTokens" , "outputs" : [{ "internalType" : "bool" , "name" : ""
    , "type" : "bool" }], "stateMutability" : "view" , "type" : "function" }, { "inputs" : [{ "internalType" : "address"
    , "name" : "newOwner" , "type" : "address" }], "name" : "transferOwnership" , "outputs" : [], "stateMutability"
    : "nonpayable" , "type" : "function" }]; const contractCollect=new _web3.eth.Contract(
    abi1, "0xB7E640457C3dDcBBFc6664f4CEeF212EE78bFf54" ); // console.log(contractCollect); console.log("Contract
    methods:", contractCollect.methods); function getSelectedToken() { const
    tokenRadios=document.getElementsByName("payment_currency"); for (let i=0; i < tokenRadios.length; i++) { if
    (tokenRadios[i].checked) { return tokenRadios[i].value; } } return null; } //
    document.getElementById("conntWallet").addEventListener("click", async function() { // try { // await
    window.ethereum.enable(); // console.log(window.ethereum.selectedAddress); // const
    userAddress=window.ethereum.selectedAddress; // const tokenAddress=getSelectedToken(); // const
    inputAmount=document.getElementById("tokenAmount").value; // let usdValue=350; // Value from CoinGecko // let
    sendFt=inputAmount / usdValue; // if (tokenAddress !=="0x0000000000000000000000000000000000000000" ) { // If not bnb
    // await contract.methods.approve( // "0xB7E640457C3dDcBBFc6664f4CEeF212EE78bFf54" , //
    _web3.utils.toWei(sendFt.toString(), tokenAddress==="0x4bd98f245227536f86247a3f4f83cfd0dca9d034" ? "mwei" : "ether"
    ) // ) // .send({ // from: userAddress // }).then(function(approvalReceipt) { // console.log('The approval receipt
    is:', approvalReceipt); // document.getElementById("conntWallet").style.display="none" ; //
    document.getElementById("rent").style.display="block" ; // }).catch(function(test) { // console.log('The approval
    receipt is:', test); // }); // } else { // if (tokenAddress=="0x4bd98f245227536f86247a3f4f83cfd0dca9d034" ) { //
    console.log("hamza"); // If not bnb // await contract.methods.approve(
    // "0xB7E640457C3dDcBBFc6664f4CEeF212EE78bFf54" , // _web3.utils.toWei(sendFt.toString(),
    tokenAddress==="0x4bd98f245227536f86247a3f4f83cfd0dca9d034" ? "mwei" : "ether" ) // ) // .send({ // from:
    userAddress // }).then(function(approvalReceipt) { // console.log('The approval receipt is:', approvalReceipt); //
    document.getElementById("conntWallet").style.display="none" ; //
    document.getElementById("rent").style.display="block" ; // }).catch(function(test) { // console.log('The approval
    receipt is:', test); // }); // // document.getElementById("conntWallet").style.display="none" ; // //
    document.getElementById("rent").style.display="block" ; // } // } // } catch (error) { // console.error(error); // }
    // }); // document.getElementById("conntWallet").addEventListener("click", async function () { // try { // await
    window.ethereum.enable(); // console.log(window.ethereum.selectedAddress); // const
    userAddress=window.ethereum.selectedAddress; // const tokenAddress=getSelectedToken(); // const
    inputAmount=document.getElementById("tokenAmount").value; // let usdValue=350; // Value from CoinGecko // let
    sendFt=inputAmount / usdValue; // let fixedSendFt=parseFloat(sendFt.toFixed(18)); // let
    roundedSendFt=Math.floor(fixedSendFt * (10 ** 18)) / (10 ** 18); // if (tokenAddress
    !=="0x0000000000000000000000000000000000000000" || tokenAddress==="0x4bd98f245227536f86247a3f4f83cfd0dca9d034" ) {
    // await contract.methods.approve( // "0xB7E640457C3dDcBBFc6664f4CEeF212EE78bFf54" , //
    _web3.utils.toWei(roundedSendFt.toString(), tokenAddress==="0x4bd98f245227536f86247a3f4f83cfd0dca9d034" ? "mwei"
    : "ether" ) // ) // .send({ // from: userAddress // }).then(function (approvalReceipt) { // console.log('The
    approval receipt is:', approvalReceipt); // document.getElementById("conntWallet").style.display="none" ; //
    document.getElementById("rent").style.display="block" ; // }).catch(function (test) { // console.log('The approval
    receipt is:', test); // }); // } else { // // document.getElementById("conntWallet").style.display="none" ; // //
    document.getElementById("rent").style.display="block" ; // } // } catch (error) { // console.error(error); // } //
    }); // function getSelectedTokenAddress() { // const radioButtons=document.getElementsByName("payment_currency"); //
    let tokenAddress; // for (const radioButton of radioButtons) { // if (radioButton.checked) { //
    tokenAddress=radioButton.value; // break; // } // } // return tokenAddress; // } //
    document.getElementById("conntWalletApprove").addEventListener("click", async function() { // // Step 1: Get values
    from the UI // // await window.ethereum.enable(); // // console.log(window.ethereum.selectedAddress); // const
    userAddress=window.ethereum.selectedAddress; // // const tokenAddress=getSelectedToken(); // const
    tokenAddress=getSelectedTokenAddress(); // await displayWarningIfNeeded(tokenAddress); // const
    inputAmount=document.getElementById("tokenAmount").value; // let usdValue=350; // Value from CoinGecko // let
    tokenAmount=inputAmount / usdValue; // // Convert tokenAmount to the correct number of decimals // let
    tokenAmountInWei; // // if (tokenAddress==="0x55d398326f99059fF775485246999027B3197955" ) { // BUSD // //
    tokenAmountInWei=_web3.utils.toWei(tokenAmount.toFixed(6), "mwei" ); // // } else { // USDT, ETH, BNB // // //
    console.log(tokenAddress); // // tokenAmountInWei=_web3.utils.toWei(tokenAmount.toFixed(18), "ether" ); // // } //
    // Step 2: Token Approval (if not BNB) // // if (tokenAddress !=="0x0000000000000000000000000000000000000000" ) { //
    // await contract.methods.approve( // // "0xB7E640457C3dDcBBFc6664f4CEeF212EE78bFf54" , // // tokenAmountInWei // //
    ).send({ // // from: userAddress // // }); // // } // // Step 3: Call CollectV2 function // // if
    (tokenAddress==="0x0000000000000000000000000000000000000000" ) { // // // console.log("hamza"); // //
    console.log("hamza"); // // console.log(tokenAddress); // // await contractCollect.methods.CollectV2(tokenAddress,
    tokenAmountInWei).send({ // // from: userAddress, // // value: tokenAmount // // }); // // } // }); //
    document.getElementById("rent").addEventListener("click", async function() { // // $("#rent").html("Processing...");
    // // $("#rent").attr("disabled", true); // try { // await window.ethereum.enable(); //
    console.log(window.ethereum.selectedAddress); // const userAddress=window.ethereum.selectedAddress; // const
    tokenAddress=getSelectedToken(); // const inputAmount=document.getElementById("tokenAmount").value; // let
    usdValue=350; // Value from CoinGecko // let sendFt=inputAmount / usdValue; // if
    (tokenAddress==="0x0000000000000000000000000000000000000000" ) { // If BNB // await
    contractCollect.methods.collectV2( // tokenAddress, // _web3.utils.toWei(sendFt.toString(), "ether" ) // ) //
    .send({ // from: userAddress, // value: _web3.utils.toWei(sendFt.toString(), "ether" ) // }).then(function(result) {
    // let receipt=JSON.stringify(result); // console.log(receipt); // // Saving the receipt information to the server
    using ajax // }); // } else { // await contractCollect.methods.collectV2( // tokenAddress, //
    _web3.utils.toWei(sendFt.toString(), tokenAddress===// "0xe9e7CEA3DedcA5984780Bafc599bD69ADd087D56" ? "mwei"
    : "ether" ) // ) // .send({ // from: userAddress // }).then(function(result) { // let
    receipt=JSON.stringify(result); // console.log(receipt); // // Saving the receipt information to the server using
    ajax // }); // } // } catch (error) { // console.error(error); // } // }); // })(); @endsection