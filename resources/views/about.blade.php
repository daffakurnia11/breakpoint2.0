@extends('layouts.main')

@section('content')
    
<!-- About Header -->
<header id="aboutHeader">
  <div class="container px-4">
    <div class="header px-5 py-4 py-lg-0">
      <div class="row h-100">
        <div class="col-lg-6">
          <div
            class="header-content text-center text-lg-start d-flex flex-column justify-content-center"
          >
            <h1 class="header-title mb-3">About Us</h1>
            <p class="header-desc mb-0">
              Kami menyediakan layanan jasa website dengan berbagai fitur
              dan tampilan yang menarik, atraktif, dan profesional.
            </p>
          </div>
        </div>
        <div class="col-lg-6">
          <div
            class="header-illustration d-flex flex-column-reverse mt-4 mt-lg-0"
          >
            <img
              src="svg/about-header.svg"
              class="illustration-img d-block mx-auto"
              alt=""
            />
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- End of Header -->

<!-- About Description -->
<section id="aboutDesc">
  <div class="container">
    <div class="desc">
      <div class="desc-title">
        <h2 class="title-text">What we are?</h2>
      </div>
      <div class="desc-content">
        <p class="fst-italic">
          “A breakpoint is the “point” at which a website’s content and
          design will <strong class="fw-bold fst-italic">adapt</strong> in a
          certain way in order to
          <strong class="fw-bold fst-italic">provide</strong> the
          <strong class="fw-bold fst-italic"
            >best possible user experience</strong
          >.”
        </p>
        <div class="content-divider my-4"></div>
        <p>
          Breakpoint adalah penyedia layanan jasa website dengan berbagai
          fitur dan tampilan yang menarik, atraktif, dan profesional.
        </p>
      </div>
    </div>
  </div>
</section>
<!-- End of Description -->

<!-- About Workflow -->
<section id="aboutWorkflow">
  <div class="container">
    <h2 class="workflow-title text-center my-4 my-sm-5">
      <img src="svg/green-worm.svg" class="title-worm" alt="" />
      Our Workflow
      <img src="svg/green-worm.svg" class="title-worm" alt="" />
    </h2>
    <div class="workflow-step">
      <div class="row">
        <div class="col-md-6 p-0 order-1">
          <div
            class="step-content d-flex mb-md-4 px-4 pb-4 align-items-center"
          >
            <img
              src="svg/workflow-step-1.svg"
              class="step-img d-block me-5 me-md-0"
              alt=""
            />
            <p class="step-desc">
              Hubungi kami melalui kontak di bawah ini dan konsultasikan
              website yang sesuai dengan kebutuhanmu.
            </p>
            <div class="step-line"></div>
            <div class="step-dot"></div>
          </div>
        </div>
        <div class="col-md-6 p-0 order-2">
          <div
            class="step-content d-flex mb-md-4 px-4 pb-4 align-items-center"
          >
            <img
              src="svg/workflow-step-2.svg"
              class="step-img d-block me-5 me-md-0"
              alt=""
            />
            <p class="step-desc">
              Menandatangani kontrak kesepakatan kerjasama dan pembayaran DP
              agar website dapat diproses.
            </p>
            <div class="step-line"></div>
            <div class="step-dot"></div>
          </div>
        </div>
        <div class="col-md-6 p-0 order-3 order-md-4">
          <div
            class="step-content d-flex mb-md-4 px-4 pb-4 align-items-center"
          >
            <img
              src="svg/workflow-step-3.svg"
              class="step-img d-block me-5 me-md-0"
              alt=""
            />
            <p class="step-desc">
              Proses desain dan pengerjaan web hingga website dapat diakses
              sesuai dengan kebutuhanmu.
            </p>
            <div class="step-line"></div>
            <div class="step-dot"></div>
          </div>
        </div>
        <div class="col-md-6 p-0 order-4 order-md-3">
          <div
            class="step-content d-flex mb-md-4 px-4 pb-4 align-items-center"
          >
            <img
              src="svg/workflow-step-4.svg"
              class="step-img d-block me-5 me-md-0"
              alt=""
            />
            <p class="step-desc">
              Website selesai dan langsung bisa diakses di berbagai device.
            </p>
            <div class="step-line"></div>
            <div class="step-dot"></div>
            <i class="step-arrow fa-solid fa-angle-left"></i>
          </div>
        </div>
      </div>
      <div class="step-horizontal d-none d-md-block"></div>
    </div>
  </div>
</section>
<!-- End of Workflow -->

<!-- Meet the Team -->
<section id="aboutTeam">
  <div class="container team">
    <h2 class="team-title">Meet The Team</h2>
    <div
      class="team-container d-flex align-items-center justify-content-center"
    >
      <div class="team-content m-5">
        <img src="img/bp-teams.jpg" class="teams-photo" alt="" />
        <div class="state-topbar">
          <div class="topbar-button-group">
            <span class="topbar-button"></span>
            <span class="topbar-button"></span>
            <span class="topbar-button"></span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End of Meet the Team -->

<!-- FAQ -->
<section id="aboutFaq">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xxl-3 col-lg-4 col-md-5">
        <h2 class="faq-title text-center text-sm-start mb-5">
          Frequently <br class="d-none d-md-block" />Asked
          <br class="d-sm-none d-md-block" />Questions
          <img src="svg/double-star.svg" class="faq-title-star" alt="" />
        </h2>
      </div>
      <div class="col-xxl-7 col-lg-8 col-md-7">
        <div class="faq-container mb-4">
          <h3
            class="faq-question d-flex align-items-center"
            data-bs-toggle="collapse"
            data-bs-target="#questionOne"
            role="button"
            aria-expanded="false"
            aria-controls="questionOne"
          >
            <div class="faq-question-indicator show d-flex justify-content-center align-items-center me-3">
              -
            </div>
            Can you explain your flow of work? I don’t quite understand.
          </h3>
          <p class="faq-answer collapse show" id="questionOne">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
            bibendum et justo a faucibus. Duis sit amet odio quis dolor
            rhoncus elementum. Praesent est mauris, finibus in sapien
            blandit, condimentum consequat odio.
          </p>
        </div>
        <div class="faq-container mb-4">
          <h3
            class="faq-question d-flex align-items-center"
            data-bs-toggle="collapse"
            data-bs-target="#questionTwo"
            role="button"
            aria-expanded="false"
            aria-controls="questionTwo"
          >
            <div
              class="faq-question-indicator d-flex justify-content-center align-items-center me-3"
            >
              +
            </div>
            Can you explain your flow of work? I don’t quite understand.
          </h3>
          <p class="faq-answer collapse" id="questionTwo">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
            bibendum et justo a faucibus. Duis sit amet odio quis dolor
            rhoncus elementum. Praesent est mauris, finibus in sapien
            blandit, condimentum consequat odio.
          </p>
        </div>
        <div class="faq-container mb-4">
          <h3
            class="faq-question d-flex align-items-center"
            data-bs-toggle="collapse"
            data-bs-target="#questionThree"
            role="button"
            aria-expanded="false"
            aria-controls="questionThree"
          >
            <div
              class="faq-question-indicator d-flex justify-content-center align-items-center me-3"
            >
              +
            </div>
            Can you explain your flow of work? I don’t quite understand.
          </h3>
          <p class="faq-answer collapse" id="questionThree">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
            bibendum et justo a faucibus. Duis sit amet odio quis dolor
            rhoncus elementum. Praesent est mauris, finibus in sapien
            blandit, condimentum consequat odio.
          </p>
        </div>
        <div class="faq-container mb-4">
          <h3
            class="faq-question d-flex align-items-center"
            data-bs-toggle="collapse"
            data-bs-target="#questionFour"
            role="button"
            aria-expanded="false"
            aria-controls="questionFour"
          >
            <div
              class="faq-question-indicator d-flex justify-content-center align-items-center me-3"
            >
              +
            </div>
            Can you explain your flow of work? I don’t quite understand.
          </h3>
          <p class="faq-answer collapse" id="questionFour">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
            bibendum et justo a faucibus. Duis sit amet odio quis dolor
            rhoncus elementum. Praesent est mauris, finibus in sapien
            blandit, condimentum consequat odio.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End of FAQ -->

@endsection