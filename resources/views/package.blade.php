@extends('layouts.main')

@section('content')
    
<!-- Header -->
<header id="aboutHeader">
  <div class="container px-4">
    <div class="header px-5 py-4 py-lg-0">
      <div class="row h-100">
        <div class="col-lg-6">
          <div
            class="header-content text-center text-lg-start d-flex flex-column justify-content-center"
          >
            <h1 class="header-title mb-3">Packages</h1>
            <p class="header-desc mb-0">
              Kami tawarkan berbagai paket menarik dengan harga yang pas di
              kantong untuk jaminan website yang sesuai keinginan.
            </p>
          </div>
        </div>
        <div class="col-lg-6">
          <div
            class="header-illustration d-flex flex-column-reverse mt-4 mt-lg-0"
          >
            <img
              src="svg/packages-header.svg"
              class="illustration-img d-block mx-auto"
              alt=""
            />
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- Akhir Header -->

<!-- Best Selling Packages-->
<section class="packagesbestselling my-5">
  <div class="container bestselling">
    <h1 class="bestselling-title text-center mb-4">
      <img src="svg/double-star.svg" class="bestselling-star" alt="" />
      Our 3 Best Selling Packages
      <img src="svg/double-star.svg" class="bestselling-star" alt="" />
    </h1>
    <div class="bestselling-content">
      <div class="container-content px-5">
        <h2 class="content-title">
          <img src="svg/gradient-star.svg" alt="" class="content-star" />
          Event Website
          <img src="svg/gradient-star.svg" alt="" class="content-star" />
        </h2>
        <div class="row justify-content-center">
          <div class="col-md-4 col-sm-12">
            <img
              src="img/ifem.png"
              class="content-image d-block mx-auto"
              alt=""
            />
          </div>
          <div class="col-md-4 col-sm-12">
            <img
              src="img/ukm expo.png"
              class="content-image d-block mx-auto"
              alt=""
            />
          </div>
          <div class="col-md-4 col-sm-12">
            <img
              src="img/epw.png"
              class="content-image d-block mx-auto"
              alt=""
            />
          </div>
        </div>
      </div>
      <div class="container-content px-5">
        <h2 class="content-title">
          <img src="svg/gradient-star.svg" alt="" class="content-star" />
          Company Profile
          <img src="svg/gradient-star.svg" alt="" class="content-star" />
        </h2>
        <div class="row justify-content-center">
          <div class="col-md-4 col-sm-12">
            <img
              src="img/vettalk.png"
              class="content-image d-block mx-auto"
              alt=""
            />
          </div>
          <div class="col-md-4 col-sm-12">
            <img
              src="img/infaqlillah.png"
              class="content-image d-block mx-auto"
              alt=""
            />
          </div>
          <div class="col-md-4 col-sm-12">
            <img
              src="img/template3.png"
              class="content-image d-block mx-auto"
              alt=""
            />
          </div>
        </div>
      </div>
      <div class="container-content px-5">
        <h2 class="content-title">
          <img src="svg/gradient-star.svg" alt="" class="content-star" />
          Company Profile
          <img src="svg/gradient-star.svg" alt="" class="content-star" />
        </h2>
        <div class="row justify-content-center">
          <div class="col-md-4 col-sm-12">
            <img
              src="img/ifem.png"
              class="content-image d-block mx-auto"
              alt=""
            />
          </div>
          <div class="col-md-4 col-sm-12">
            <img
              src="img/ukm expo.png"
              class="content-image d-block mx-auto"
              alt=""
            />
          </div>
          <div class="col-md-4 col-sm-12">
            <img
              src="img/epw.png"
              class="content-image d-block mx-auto"
              alt=""
            />
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Akhir Best Selling Packages-->

<!-- All Packages -->
<section id="allpackages" class="my-5">
  <div class="container allpackage">
    <h1 class="allpackage-title text-center mb-3">
      <img src="svg/Vector.svg" alt="" class="allpackage-vector" />
      All Packages
      <img src="svg/Vector.svg" alt="" class="allpackage-vector" />
    </h1>
    <div class="allpackage-content d-flex justify-content-center">
      <div class="allpackage-package text-center">
        <h2 class="package-name">Personal Branding</h2>
        <small class="package-start mt-1 mb-2 d-block">start from</small>
        <div class="package-price">
          <span class="price-small">Rp</span>
          <span class="price-bigger">1.200</span>
          <span class="price-small">k</span>
        </div>
        <p class="package-description">
          Cocok buat kamu yang ingin melakukan branding personal maupun
          profil perusahaan.
        </p>
        <ul class="package-list text-start my-3">
          <li class="my-2">Landing Page</li>
          <li class="my-2">Personal Website</li>
          <li class="my-2">Company Profile</li>
        </ul>
        <a href="#" class="d-block package-button mt-4">Order Now</a>
      </div>
      <div class="allpackage-package text-center">
        <h2 class="package-name">Bussiness Package</h2>
        <small class="package-start mt-1 mb-2 d-block">start from</small>
        <div class="package-price">
          <span class="price-small">Rp</span>
          <span class="price-bigger">3.400</span>
          <span class="price-small">k</span>
        </div>
        <p class="package-description">
          Kamu yang lagi mengembangkan bisnis atau UMKM bisa banget pakai
          paket ini!
        </p>
        <ul class="package-list text-start my-3">
          <li class="my-2">Bussiness Website</li>
          <li class="my-2">Commercial Website</li>
        </ul>
        <a href="#" class="d-block package-button mt-4">Order Now</a>
      </div>
      <div class="allpackage-package text-center">
        <h2 class="package-name">Enterprise Package</h2>
        <small class="package-start mt-1 mb-2 d-block">start from</small>
        <div class="package-price">
          <span class="price-small">Rp</span>
          <span class="price-bigger">5.200</span>
          <span class="price-small">k</span>
        </div>
        <p class="package-description">
          Paket ini bakal bantu kamu untuk menjangkau audiens lebih banyak
          dan lebih luas.
        </p>
        <ul class="package-list text-start my-3">
          <li class="my-2">Event Website</li>
          <li class="my-2">Marketplace Website</li>
        </ul>
        <a href="#" class="d-block package-button mt-4">Order Now</a>
      </div>
      <div class="allpackage-package text-center">
        <h2 class="package-name">EduSmart Package</h2>
        <small class="package-start mt-1 mb-2 d-block">start from</small>
        <div class="package-price">
          <span class="price-small">Rp</span>
          <span class="price-bigger">5.500</span>
          <span class="price-small">k</span>
        </div>
        <p class="package-description">
          Paket khusus untuk platform pendidikan yang lebih praktis dan
          mudah diakses.
        </p>
        <ul class="package-list text-start my-3">
          <li class="my-2">Quiz Platform</li>
          <li class="my-2">Classroom Website</li>
        </ul>
        <a href="#" class="d-block package-button mt-4">Order Now</a>
      </div>
    </div>
  </div>
</section>
<!-- Akhir All Packages -->

<!-- Website Features -->
<section id="futures">
  <div class="container futures">
    <div class="row justify-content-center">
      <div class="col-xl-3 col-lg-4 col-md-5">
        <div class="futures-title position-relative">
          <h1 class="futures-heading">Website Features</h1>
          <p class="futures-description">
            Available features that you can add on to your desired website.
          </p>
          <img src="svg/Vector.svg" alt="" class="futures-image" />
          <img src="svg/Vector.svg" alt="" class="futures-image" />
        </div>
      </div>
      <div class="col-xl-7 col-lg-8 col-md-7">
        <div class="state-container mb-4">
          <h3
            class="state-futures d-flex align-items-center"
            data-bs-toggle="collapse"
            data-bs-target="#collapseExample1"
            aria-expanded="false"
            aria-controls="collapseExample1"
          >
            <div class="futures-topbar d-flex justify-content-center align-items-center me-3">
              +
              </div>
              Basic Features
              </h3>
                <ul class="futures-list collapse" id="collapseExample1">
                  <li class="my-2">Custom Short Links</li>
                  <li class="my-2">Registration Form</li>
                  <li class="my-2">Visitor Counter</li>
                </ul>
        </div>
        <div class="state-container mb-4">
          <h3
            class="state-futures d-flex align-items-center"
            data-bs-toggle="collapse"
            data-bs-target="#collapseExample2"
            aria-expanded="false"
            aria-controls="collapseExample2"
          >
            <div class="futures-topbar d-flex justify-content-center align-items-center me-3">
              +
              </div>
              Accesibility Features
              </h3>
                <ul class="futures-list collapse" id="collapseExample2">
                  <li class="my-2">Admin Access</li>
                  <li class="my-2">User-role Access</li>
                  <li class="my-2">Multi-role Access</li>
                  <li class="my-2">Email Verification</li>
                  <li class="my-2">User Reset Password</li>
                  <li class="my-2">User Forgot Password</li>
                </ul>
        </div>
        <div class="state-container mb-4">
          <h3
            class="state-futures d-flex align-items-center"
            data-bs-toggle="collapse"
            data-bs-target="#collapseExample3"
            aria-expanded="false"
            aria-controls="collapseExample3"
          >
            <div class="futures-topbar d-flex justify-content-center align-items-center me-3">
              +
              </div>
              Content Management
              </h3>
                <ul class="futures-list collapse" id="collapseExample3">
                  <li class="my-2">Article Management</li>
                  <li class="my-2">Post Management</li>
                  <li class="my-2">Catalog Display</li>
                  <li class="my-2">Catalog Management System</li>
                </ul>
        </div>
        <div class="state-container mb-4">
          <h3
            class="state-futures d-flex align-items-center"
            data-bs-toggle="collapse"
            data-bs-target="#collapseExample4"
            aria-expanded="false"
            aria-controls="collapseExample4"
          >
            <div class="futures-topbar d-flex justify-content-center align-items-center me-3">
              +
              </div>
              Mini Classroom Features
              </h3>
                <ul class="futures-list collapse" id="collapseExample4">
                  <li class="my-2">Present Code System</li>
                  <li class="my-2">Scoring System</li>
                  <li class="my-2">Files Management System</li>
                  <li class="my-2">Schedule Management System</li>
                </ul>
        </div>
        <div class="state-container mb-4">
          <h3
            class="state-futures d-flex align-items-center"
            data-bs-toggle="collapse"
            data-bs-target="#collapseExample5"
            aria-expanded="false"
            aria-controls="collapseExample5"
          >
            <div class="futures-topbar d-flex justify-content-center align-items-center me-3">
              +
              </div>
              Internet of Things Project
              </h3>
                <ul class="futures-list collapse" id="collapseExample5">
                  <li class="my-2">Real-time Graphic Data</li>
                  <li class="my-2">Excel Data Export</li>
                </ul>
        </div>
        <div class="state-container mb-4">
          <h3
            class="state-futures d-flex align-items-center"
            data-bs-toggle="collapse"
            data-bs-target="#collapseExample6"
            aria-expanded="false"
            aria-controls="collapseExample6"
          >
            <div class="futures-topbar d-flex justify-content-center align-items-center me-3">
              +
              </div>
              Quiz and Exam Platform
              </h3>
                <ul class="futures-list collapse" id="collapseExample6">
                  <li class="my-2">Simple Quiz Platform</li>
                  <li class="my-2">Multiple Choice Platform</li>
                  <li class="my-2">Advanced Exam Platform</li>
                  <li class="my-2">Essay Exam Platform</li>
                </ul>
        </div>
        <div class="state-container mb-4">
          <h3
            class="state-futures d-flex align-items-center"
            data-bs-toggle="collapse"
            data-bs-target="#collapseExample7"
            aria-expanded="false"
            aria-controls="collapseExample7"
          >
            <div class="futures-topbar d-flex justify-content-center align-items-center me-3">
              +
              </div>
              E-Commerce Features
              </h3>
                <ul class="futures-list collapse" id="collapseExample7">
                  <li class="my-2">Shopping Chart System</li>
                  <li class="my-2">Shipping Cost Estimation</li>
                  <li class="my-2">Invoice Tracking System</li>
                  <li class="my-2">Referral Code System</li>
                </ul>
        </div>
        <div class="state-container mb-4">
          <h3
            class="state-futures d-flex align-items-center"
            data-bs-toggle="collapse"
            data-bs-target="#collapseExample1"
            aria-expanded="false"
            aria-controls="collapseExample1"
          >
            <div class="futures-topbar d-flex justify-content-center align-items-center me-3">
              +
              </div>
              Example Features
              </h3>
                <ul class="futures-list collapse" id="collapseExample1">
                  <li class="my-2"></li>
                  <li class="my-2"></li>
                  <li class="my-2"></li>
                </ul>
        </div>
      </div>
  </div>
</section>
<!-- Akhir Website Features -->

@endsection