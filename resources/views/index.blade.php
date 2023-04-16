@extends('layouts.main')

@section('title', 'Home')

@section('content')
    

    <!-- hero section -->


    <section class="container position-relative " id="hero">
        <!-- text heading -->
        <div class="d-flex justify-content-center pt-5">
            <div class="text-center">
                <h1 class="text-primary font-family">DISCOVER HOW TO:</h1>
                <h2 class="text-white hero-head font-family ">REVOLUTIONIZE YOUR FAMILY'S <br> WEALTH WITH CRYPTO FAMILY </h2>
                <!-- video -->
                <div class="my-3 position-relative d-flex justify-content-center align-items-center">
                    <img src="{{ asset('assets/img/Group 1000005771.png') }}" width="80%" class="thumbnail-img" alt="" >
                    <i data-bs-toggle="modal" data-bs-target="#exampleModal" class="material-icons text-white mt-5 play-btn cr-poiter position-absolute">play_circle</i>
                </div>
                <button type="button" class="btn btn-primary fw-weight rounded-3 px-4">READ WHITEPAPER</button>
                
                <!-- video modal -->
                
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body p-0">
                            <video id="my-video" width="100%" poster="{{ asset('assets/img/Group 1000005771.png') }}" controls>
                                <source src="{{ asset('assets/img/e-project.webm') }}" type="video/webm">
                            <!-- add more source tags for other video formats if needed -->
                            </video>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
  </section>



  <!-- section 2 start -->
<section class="my-5 " id="coins-sec">
    <div class="container py-5">
        <div class="row  py-5">
            <div class="col-md-6 ">
                <h1 class="text-white  font-family lt-sp">HERE'S WHY THISE IS A GAME - CHANGER</h1>
                <p class="para-color font-size">The world of cryptocurrency is about to be turned upside down. Why? Look… You know, how most cryptocurrencies just float around in the digital realm with nothing tangible backing them up?  Well, CryptoFamily is taking a completely different approach.</p>
            </div>
            <div class="col-md-6 text-start position-relative" id="coins-sec-bg-img">
                <img src="{{ asset('assets/img/Group 1000005772.png') }}" class="position-absolute" width="350" alt="">
            </div>
        </div>
        <!-- <img src="{{ asset('assets/img/backShadow.png') }}" class="position-absolute" style="right: 0; bottom: -70px;" width="300" alt=""> -->
    </div>
</section>


<!-- section 3 -->
<section class="container" id="section-3">
    <div class="d-flex justify-content-center">
        <div class="text-center section-3-text px-5 argin-top">
            <h1 class="text-white font-family lt-sp">We're officially backing our <br>
                tokens with REAL assets like <span class="text-gold">gold.</span></h1>
            <p class="text-primary  my-4 px-5">This means that when you invest in Family Tokens, you're not just investing into some digital fairy dust; you're investing in something that has a real, physical value.</p>
            <h5 class="mt-4 text-white">How can we ensure that?</h5>
            <p class="text-primary  my-4 px-5">We have partnered with the world-leading gold mining company, to help us achieve just that!</p>
            <div>
                <button type="button" class="btn btn-outline-primary px-5 mt-4">READ WHITEPAPER</button>
            </div>
            <h3 class="text-white font-family mt-4 lt-sp2">But wait till you see THIS…</h3>
        </div>
    </div>
</section>


<!-- section 4 -->

<div id="sec-4">
    <section class="container mt-5">
        <div class="row">
            <div class="col-md-6 my-3">
                <p class="text-primary font-size my-3">So, when you join the CryptoFamily community, you won't just get access to our tokens. But you'll also gain access to an…</p>
                <h2 class="text-white font-family lt-sp2 mt-4">Offshore bank account and a debit card you can use to spend your crypto.</h2>
                <p class="text-primary font-size my-3">So, when you join the CryptoFamily community, you won't just get access to our tokens. But you'll also gain access to an…</p>
            </div>
            <div class="col-md-6 text-end my-3">
                <img src="{{ asset('assets/img/Group 1000005778.png') }}" width="350" alt="">
            </div>
            <div class="col-md-6 text-start my-3 mt-5">
                <img src="{{ asset('assets/img/Gold.png') }}" width="350" alt="">
            </div>
            <div class="col-md-6 my-3 mt-5">
                <div class="border border-start-0 d-flex align-items-center  p-3 py-2 ps-5 position-relative">
                    <img src="{{ asset('assets/img/ph_lock-key-fill.png') }}" class="position-absolute" width="55" style="left: -25px;" alt="">
                    <p class="text-white font-size my-3">Our offshore bank accounts and decentralized payment systems ensure your family's assets are protected and private.</p>
                </div>
                <p class="text-primary font-size my-4">And don’t you worry one bit… Because our cards are designed to be super easy to use! </p>
                <p class="text-primary font-size my-4">Just connect your wallet, load the card and use it! </p>
                <p class="text-primary font-size my-4">Here’s the details: </p>
            </div>
        
        </div>
        
    </section>
</div>



<!-- section 5 table -->
<section class="container " id="sec-table">
    <div class="table-responsive">
        <table class="border border-secondary  table">
            <thead class="border border-secondary bg-dark">
                <tr>
                    <th style="min-width: 250px;" class="border-end border-secondary text-center">
                        <img src="{{ asset('assets/img/image 202.png') }}" width="200" alt="">
                    </th>
                    <th style="min-width: 280px;" class="border-end border-secondary text-center">
                        <!-- <div class="text-center"> -->
                            <img src="{{ asset('assets/img/image 203.png') }}" width="100" alt="">
                            <p class="text-white p-0 mt-1 m-0">Connection (Black Plastic)</p>
                        <!-- </div> -->
                    </th>
                    <th style="min-width: 280px;" class="text-center border-end border-secondary">
                        <img src="{{ asset('assets/img/image 205.png') }}" width="100" alt="">
                        <p class="text-white p-0 m-0 mt-1">Flourish (Gold Metal)</p>
                    </th>
                    <th style="min-width: 280px;" class="text-center border-end border-secondary">
                        <img src="{{ asset('assets/img/image 204.png') }}" width="100" alt="">
                        <p class="text-white p-0 m-0 mt-1">Pinnacle (Black Metal)</p>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-white text-center fw-weight ">
                    <td class="border border-secondary text-start p-3">Card Issuance Fee (USD)</td>
                    <td class="border border-secondary p-3">$490</td>
                    <td class="border border-secondary p-3">$2,000</td>
                    <td class="border border-secondary p-3">$10,000</td>
                </tr>
                <tr class="text-white text-center fw-weight ">
                    <td class="border border-secondary text-start p-3">Card Replacement Fee (USD)</td>
                    <td class="border border-secondary p-3">$490</td>
                    <td class="border border-secondary p-3">$2,000</td>
                    <td class="border border-secondary p-3">$10,000</td>
                </tr>
                <tr class="text-white text-center fw-weight ">
                    <td class="border border-secondary text-start p-3">Card Loading Fee (%)</td>
                    <td class="border border-secondary p-3">$490</td>
                    <td class="border border-secondary p-3">$2,000</td>
                    <td class="border border-secondary p-3">$10,000</td>
                </tr>
                <tr class="text-white text-center fw-weight ">
                    <td class="border border-secondary text-start p-3">Loading Cap</td>
                    <td class="border border-secondary p-3">$490</td>
                    <td class="border border-secondary p-3">$2,000</td>
                    <td class="border border-secondary p-3">$10,000</td>
                </tr>
                <tr class="text-white text-center fw-weight ">
                    <td class="border border-secondary text-start p-3">Daily Limit</td>
                    <td class="border border-secondary p-3">$490</td>
                    <td class="border border-secondary p-3">$2,000</td>
                    <td class="border border-secondary p-3">$10,000</td>
                </tr>
                <tr class="text-white text-center bg-dark fw-weight ">
                    <td class="border border-secondary text-start p-3">Cards Available</td>
                    <td class="border border-secondary p-3">$490</td>
                    <td class="border border-secondary p-3">$2,000</td>
                    <td class="border border-secondary p-3">$10,000</td>
                </tr>
                <tr>
                    <td>
                        <small class="fw-weight text-white">Include for any tiers of cards :</small>
                    </td>
                    <td>
                        <div class="text-white">
                            <i class="material-icons-outlined fs-6">check_circle</i>
                            <small class="text-white-50">$100 annual renewal fee for 1st year</small>
                        </div>
                    </td>
                    <td>
                        <div class="text-white">
                            <i class="material-icons-outlined fs-6">check_circle</i>
                            <small class="text-white-50">$100 annual renewal fee for 1st year</small>
                        </div>
                    </td>
                    <td>
                        <div class="text-white">
                            <i class="material-icons-outlined fs-6">check_circle</i>
                            <small class="text-white-50">$100 annual renewal fee for 1st year</small>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="text-center px-5 mt-5">
        <p class="text-white ">For this first initial launch, we will ONLY BE releasing 50,000 Crypto Family cards in total.
            So make sure you buy enough <span class="text-primary">FamilyTokens</span> in the pre-sale to secure yourself one of these!</p>
        <h3 class="text-white font-family my-4 lt-sp2">And, lucky for you, that’s not ALL!
        </h3>        
        <p class="text-white ">So, we know you're always on the lookout for innovative ways to boost
            your income and achieve financial success. (I mean, who doesn’t?)</p>
    </div>
</section>


<!-- section 6 -->
<section class="" id="sec-6">
    <div class="container pt-4">
        <div class="row position-relative">
            <div class="col-md-6">
                <p class="para-color font-size">That's why we're super excited to introduce our Family’s favorite feature:</p>
                <h3 class="text-white font-family my-3 lt-sp2">REWARD-producing NFT rentals!</h3>
                <p class="para-color font-size">With FamilyTokens, you will have the opportunity to rent out one (or more) Family NFTs for $24 each, which have the potential to generate a passive income of up to $2 per day. </p>
            </div>
            <div class="col-md-6"></div>
            <!-- <img src="{{ asset('assets/img/backShadow.png') }}" class="position-absolute" style="left: -350px; width: 500px; height: 500px;"  alt=""> -->

            <div class="col-md-6">
                <img src="{{ asset('assets/img/Group 1000005763.png') }}" width="100%" alt="">
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <div>
                    <h3 class="text-white font-family lt-sp2">THAT’S Right!</h3>
                    <p class="font-size para-color mb-5"> You can earn daily just by renting and leveraging these unique digital assets on our platform. Here's how it works:</p>
                    <div class="d-flex align-items-center my-4">
                        <img src="{{ asset('assets/img/Frame 1000006027.png') }}" width="40" alt="">
                        <p class="font-size para-color p-0 m-0 ms-3">Buy FamilyTokens in the pre-sale or later (but more expensive) on our CryptoFamily platform</p>
                    </div>
                    <div class="d-flex align-items-center my-4">
                        <img src="{{ asset('assets/img/Frame 1000006028.png') }}" width="40" alt="">
                        <p class="font-size para-color p-0 m-0 ms-3">Use your FamilyTokens to rent out FamilyNFTs</p>
                    </div>
                    <div class="d-flex align-items-center my-4">
                        <img src="{{ asset('assets/img/Frame 1000006029.png') }}" width="40" alt="">
                        <p class="font-size para-color p-0 m-0 ms-3">Sit back and watch as your rented NFTs generate income for YOU</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- section 7 -->

<div id="sec-7" class="w-100">
    <section class="py-5 container position-relative">
            <div class="text-center py-5 px-5">
                <p class="text-white-50">It’s simple. Here’s how it works...</p>
                <button type="button" class="mb-5 mt-4 btn btn-outline-primary px-4">READ WHITEPAPER</button>
                <p class="text-white-50 mb-4">The best part is, you don't need to be an NFT geeenius or have extensive knowledge about the crypto market. </p>
                <p class="text-white-50">Our user-friendly platform makes it simple for anyone to participate, rent NFTs, and potentially start earning. We've designed this feature with our community members in mind, ensuring a seamless and rewarding experience for all. </p>
            </div>
            <img src="{{ asset('assets/img/backShadow.png') }}"  class="sec-7-back-img position-absolute" style="right: -150px; width: 300px; bottom: -80px;"  alt="">

    </section>
</div>

<!-- section 8 -->

<section class="container" id="sec-8">
    <div class="row">
        <div class="col-md-8">
            <div class="">
                <p class="para-color font-size">And now last, but most important part… At CryptoFamily…</p>
                <h3 class="font-family lt-sp2 text-white">Our priority is helping everyday people achieve financial success.</h3>
                <p class="para-color font-size mt-4">So, when you join our CryptoFamily, you're joining a community that supports one another, constantly striving to innovate and provide top-notch financial solutions.  </p>
                <p class="para-color font-size mt-4">We're talking about real-life impact on the lives of people who are determined to secure their financial future.  </p>
            </div>
        </div>
        <div class="col-md-6"></div>
        <div class="col-md-6 text-end group-img" style="margin-top: -120px;">
            <img src="{{ asset('assets/img/Group 1000005769.png') }}" width="100%" alt="">
        </div>
    </div>
</section>


<!-- section 9 -->

<div id="sec-9">
    <section class="container py-5 px-5">
        <div class="py-5 text-center">
            <h2 class="font-family text-white lt-sp2">Why join the Family Token pre-sale?</h2>
            <p class="para-color mt-4 font-size">You see, getting in on the ground floor on the Family Token pre-sale, offers you an exclusive opportunity to be part of a groundbreaking movement in the crypto world. </p>
            <p class="para-color mt-4 font-size">By participating in the pre-sale, you'll gain early access to a crypto project that's set to redefine the industry, backed by real assets and focused on empowering individuals financially. </p>
            <p class="para-color mt-4 font-size">Not only will you enjoy the potential for long-term growth, but...</p>
            <div class="p-4 mt-5 border border-secondary ">
                <h6 class="para-color">You'll also become an integral part of a community that prioritizes innovation, collaboration, and shared success.</h6>
            </div>
        </div>
    </section>
</div>



<!-- section 10 -->

<section class=" position-relative">
    <div id="sec-10">
        <div class="container">
            <div class="sale-detail-card px-5 py-4 text-center">
                <h3 class="text-white font-family lt-sp2">PRE-SALE DETAILS</h3>
                <div class="row">
                    <div class="col-md-3 my-3 text-start">
                        <p class="para-color p-0 m-0">PROJECT NAME</p>
                        <h5 class="text-primary">Crypto Family</h5>
                    </div>
                    <div class="col-md-3 my-3 text-start">
                        <p class="para-color p-0 m-0">TOKEN NAME</p>
                        <h5 class="text-primary">FAMILY TOKEN</h5>
                    </div>
                    <div class="col-md-3 my-3 text-start">
                        <p class="para-color p-0 m-0">PRE-SALE PRICE</p>
                        <h5 class="text-primary">$1</h5>
                    </div>
                    <div class="col-md-3 my-3 text-start">
                        <p class="para-color p-0 m-0">TOTAL SUPPLY</p>
                        <h5 class="text-primary">16,000,000,000 FT</h5>
                    </div>
                </div>
                <div class="withdraw-card p-2 mt-3">
                    <h6 class="" style="color: #436479;">Every 200 FT purchased = 1 ticket draw</h6>
                </div>
                <div class="time-count mt-5 p-3">
                    <p class="text-white-50">Time left until end of pre-sale</p>
                    <h5 class="text-white p-0 m-0">00 : 00 : 00 : 00</h5>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- faqs Section -->

<section class="container" id="faq">
    <h1 class="text-center text-white font-family lt-sp2">FREQUENTLY ASKED QUESTIONS</h1>
    <div class="mt-5">
        <div class="accordion" id="accordionExample">


            <div class="accordion-item  my-3">
                <h2 class="accordion-header" id="headingThree">
                  <div class="d-flex justify-content-between accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      <div class="w-50">
                          <span class="text-primary">What is CryptoFamily?</span>
                      </div>
                      <div class="text-end w-50">
                          <i class="material-icons text-primary">expand_circle_down</i>
                      </div>
                  </div>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse " aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                  <div class="accordion-body text-white-50 font-size">
                    CryptoFamily is a cryptocurrency project aimed at bringing families and individuals closer to the world of digital assets. CryptoFamily provides a range of services and tools to help individuals and families learn about and invest in cryptocurrencies, including a mobile app, educational resources, and a dedicated community.                      </div>
                </div>
              </div>

            <div class="accordion-item active-accordian my-3">
              <h2 class="" id="headingOne">
                <div class="d-flex justify-content-between accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <div class="w-50">
                        <span class="text-primary">How does CryptoFamily differ from other projects?</span>
                    </div>
                    <div class="text-end w-50">
                        <i class="material-icons text-primary">expand_circle_down</i>
                    </div>
                </div>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body text-white-50 font-size">
                    CryptoFamily stands out from other cryptocurrencies due to its focus on families and financial stability. It's backed by real-world assets like gold and provides exclusive benefits, including offshore bank accounts and a CryptoFamily card. Additionally, it offers passive income opportunities through NFT rentals.
                </div>
              </div>
            </div>


            <div class="accordion-item  my-3">
                <h2 class="accordion-header" id="headingTwo">
                  <div class="d-flex justify-content-between accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      <div class="w-50">
                          <span class="text-primary">When does the CryptoFamily pre-sale start and end?</span>
                      </div>
                      <div class="text-end w-50">
                          <i class="material-icons text-primary">expand_circle_down</i>
                      </div>
                  </div>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse " aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                  <div class="accordion-body text-white-50 font-size">
                    The specific dates and duration of the CryptoFamily pre-sale may vary and may be subject to change based on various factors, such as market conditions and demand. It's important to check CryptoFamily's official website or social media channels for the latest updates and announcements regarding the pre-sale.                      </div>
                </div>
              </div>


              <div class="accordion-item my-3">
                <h2 class="" id="headingFour">
                  <div class="d-flex justify-content-between accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                      <div class="w-50">
                          <span class="text-primary">What do i do if i lose my card?</span>
                      </div>
                      <div class="text-end w-50">
                          <i class="material-icons text-primary">expand_circle_down</i>
                      </div>
                  </div>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse " aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                  <div class="accordion-body text-white-50 font-size">
                    If you lose your payment card or digital wallet, it's important to take action immediately to protect your funds and prevent unauthorized charges. Here are some steps to take:                          </div>
                </div>
                </div>
              </div>
          </div>
    </div>
</section>

    
@endsection


