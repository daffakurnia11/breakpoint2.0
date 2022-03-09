@extends('layouts.main')

@section('content')

  <!-- Home Header -->
  <header id="home">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-lg-6 col-xl-5 col-xxl-4">
          <div class="header-container px-3">
            <h1 class="header-tagline mb-3">Breakthrough your innovation with</h1>
            <div class="header-brand text-center">breakpoint</div>
          </div>
        </div>
        <div class="col-lg-6 col-xl-5">
          <img src="img/home-header.png" class="header-img mt-5 mt-lg-0" alt="">
        </div>
      </div>
    </div>
  </header>
  <!-- End of Header -->

  <!-- Home Talks -->
  <section id="homeTalks">
    <div class="container px-4">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="talk-container my-3 py-4 px-5">
            <h2 class="talk-question">What’s better than having your own standard platform?</h2>
            <span class="talk-question-triangle"></span>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="talk-greenline"></div>
          <div class="talk-greenline"></div>
          <div class="talk-greenline"></div>
          <div class="talk-greenline"></div>
        </div>
        <div class="col-lg-6">
          <div class="talk-greenline"></div>
          <div class="talk-greenline"></div>
        </div>
        <div class="col-lg-6">
          <div class="talk-container mb-3 mt-4 py-4 px-5">
            <h2 class="talk-answer">A platform in a “one-for-all” website</h2>
            <span class="talk-answer-triangle"></span>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End of  Talks -->

  <!-- Home Offers -->
  <section id="homeOffers">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-9 col-xl-8 order-2 order-md-1 position-relative">
          <img src="img/bp-mascot.png" class="offers-mascot" alt="">
          <h2 class="offers-title">We offer websites with ...</h2>
          <div class="offers">
            <div class="offers-content">
              <h3 class="offers-item">
                <span class="item-number">1</span>
                Easier Access
              </h3>
              <p class="offers-desc">
                No bugs, no traffic jam, high-security, high-performance
              </p>
            </div>
            <div class="state-topbar">
              <div class="topbar-button-group">
                <span class="topbar-button"></span>
                <span class="topbar-button"></span>
                <span class="topbar-button"></span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-xl-4 order-1 order-md-2">
          <img src="img/offers-illustration.png" class="offers-illustration" alt="">
        </div>
      </div>
    </div>
  </section>
  <!-- End of Offers -->

  <!-- Home Testimonial -->
  <section id="homeTestimoni">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10 px-3">
          <div class="testimoni-container">
            <h2 class="testimoni-header d-flex align-items-center">
              <img src="svg/home-testimoni-icon.svg" class="header-icon" alt="">
              What our clients said?
            </h2>
            <div class="row mt-4">
              <div class="col-xl-3 col-lg-4 col-md-5">
                <div class="client-profile d-flex flex-column justify-content-center">
                  <div class="client-logo">
                    <img src="img/logo.png" alt="" class="logo-img d-block mx-auto">
                  </div>
                  <h4 class="client-brand text-center mt-2">Breakpoint</h4>
                  <p class="client-package text-center">[Company Website]</p>
                  <a href="" class="client-website d-block mx-auto mt-2">Visit</a>
                </div>
                <h3 class="client-title mt-3">Our Clients</h3>
                <ul class="client-list">
                  <li class="list-item active d-flex align-items-center">
                    <div class="list-logo me-2">
                      <img src="img/logo.png" class="logo-img" alt="">
                    </div>
                    <p class="list-brand">Breakpoint</p>
                  </li>
                  <li class="list-item d-flex align-items-center">
                    <div class="list-logo me-2">
                      <img src="img/logo.png" class="logo-img" alt="">
                    </div>
                    <p class="list-brand">Breakpoint</p>
                  </li>
                  <li class="list-item d-flex align-items-center">
                    <div class="list-logo me-2">
                      <img src="img/logo.png" class="logo-img" alt="">
                    </div>
                    <p class="list-brand">Breakpoint</p>
                  </li>
                  <li class="list-item d-flex align-items-center">
                    <div class="list-logo me-2">
                      <img src="img/logo.png" class="logo-img" alt="">
                    </div>
                    <p class="list-brand">Breakpoint</p>
                  </li>
                  <li class="list-item d-flex align-items-center">
                    <div class="list-logo me-2">
                      <img src="img/logo.png" class="logo-img" alt="">
                    </div>
                    <p class="list-brand">Breakpoint</p>
                  </li>
                </ul>
              </div>
              <div class="col-xl-9 col-lg-8 col-md-7">
                <div class="conversation-container">
                  <div class="mb-4 d-flex flex-row-reverse align-items-center">
                    <div class="profile-logo">
                      <img src="img/logo.png" alt="" class="logo-img">
                    </div>
                    <div class="crew-bubbles mx-3 ms-lg-5">
                      <p class="crew-talks">Lorem ipsum dolor sit amet</p>
                      <span class="bubbles-triangle"></span>
                    </div>
                  </div>
                  <div class="mb-4 d-flex flex-row align-items-center">
                    <div class="profile-logo">
                      <img src="img/logo.png" alt="" class="logo-img">
                    </div>
                    <div class="client-bubbles mx-3 me-lg-5">
                      <p class="client-talks">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere expedita saepe obcaecati. Tempore exercitationem dolore incidunt cum iure quaerat suscipit unde voluptate eaque! Quaerat, voluptatem. Natus non harum, aut suscipit eligendi quasi optio eum, accusamus illum exercitationem odio dolorem ducimus!</p>
                      <span class="bubbles-triangle"></span>
                    </div>
                  </div>
                  <div class="mb-4 d-flex flex-row-reverse align-items-center">
                    <div class="profile-logo">
                      <img src="img/logo.png" alt="" class="logo-img">
                    </div>
                    <div class="crew-bubbles mx-3 ms-lg-5">
                      <p class="crew-talks">Lorem ipsum dolor sit amet</p>
                      <span class="bubbles-triangle"></span>
                    </div>
                  </div>
                  <div class="mb-4 d-flex flex-row align-items-center">
                    <div class="profile-logo">
                      <img src="img/logo.png" alt="" class="logo-img">
                    </div>
                    <div class="client-bubbles mx-3 me-lg-5">
                      <p class="client-talks">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere expedita saepe obcaecati. Tempore exercitationem dolore incidunt cum iure quaerat suscipit unde voluptate eaque! Quaerat, voluptatem. Natus non harum, aut suscipit eligendi quasi optio eum, accusamus illum exercitationem odio dolorem ducimus!</p>
                      <span class="bubbles-triangle"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End of Testimonial -->

  <!-- Home Recommended -->
  <section id="homeRecommended">
    <div class="container recommended my-5">
      <h2 class="recommended-title text-center my-2">
        <img src="svg/gradient-star.svg" class="recommended-star" alt="">
        Recommended for You
        <img src="svg/gradient-star.svg" class="recommended-star" alt="">
      </h2>
      <div class="d-flex justify-content-center flex-wrap">
        <div class="recommended-package text-center">
          <h3 class="package-name">Bussiness Package</h3>
          <small class="package-start mt-1 mb-2 d-block">start from</small>
          <div class="package-price">
            <span class="price-small">Rp</span>
            <span class="price-bigger">3.400</span>
            <span class="price-small">k</span>
          </div>
          <p class="package-desc text-start my-3">
            Kamu yang lagi mengembangkan bisnis atau UMKM bisa banget pakai paket ini!
          </p>
          <ul class="package-list text-start mx-auto">
            <li class="my-2">Business Website</li>
            <li class="my-2">Commercial Website</li>
          </ul>
          <a href="#" class="d-block package-button mt-4">Order Now</a>
        </div>
        <div class="recommended-package text-center">
          <h3 class="package-name">Enterprise Package</h3>
          <small class="package-start mt-1 mb-2 d-block">start from</small>
          <div class="package-price">
            <span class="price-small">Rp</span>
            <span class="price-bigger">5.200</span>
            <span class="price-small">k</span>
          </div>
          <p class="package-desc text-start my-3">
            Paket ini bakal bantu kamu untuk menjangkau audiens lebih banyak dan lebih luas.
          </p>
          <ul class="package-list text-start mx-auto">
            <li class="my-2">Event Website</li>
            <li class="my-2">Marketplace Website</li>
          </ul>
          <a href="#" class="d-block package-button mt-4">Order Now</a>
        </div>
      </div>
    </div>
  </section>
  <!-- End of Recommended -->

  <!-- Home See Also -->
  <section id="homeArticles" class="px-3">
    <div class="container articles">
      <h2 class="articles-title">See also :</h2>
      <ul class="articles-list mt-2">
        <li>
          <a href="">What is hosting and domain?</a>
        </li>
        <li>
          <a href="">What is a server?</a>
        </li>
      </ul>
    </div>
  </section>
  <!-- End of See Also -->

@endsection
