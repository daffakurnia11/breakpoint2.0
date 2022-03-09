@extends('admin.layouts.main')

@section('content')
    
  <!--breadcrumb-->
  <div class="page-breadcrumb d-flex align-items-center flex-column flex-md-row mb-3">
    <div class="breadcrumb-title pe-3 border-0">Welcome, {{ auth()->user()->name }}</div>
    <div class="ms-md-auto me-md-0 mx-auto ps-3">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 p-0">
          <li class="breadcrumb-item active" aria-current="page"><i class="bx bx-home-alt"></i> Dashboard</li>
        </ol>
      </nav>
    </div>
  </div>
  <!--end breadcrumb-->

  <h6 class="mb-0 text-uppercase">Overview</h6>
  <hr>
  <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-3">
    <div class="col">
      <div class="card radius-10">
        <div class="card-body">
          <div class="d-flex align-items-center">
            <div class="">
              <p class="mb-1">Short Links</p>
              <h4 class="mb-0 text-primary">{{ $links }}</h4>
            </div>
            <div class="ms-auto fs-2 text-primary">
              <i class="bi bi-link-45deg"></i>
            </div>
          </div>
          <div class="border-top my-2"></div>
          <small class="mb-0">
            @if ($link_inc > 0)
              <span class="text-success">+{{ $link_inc }} dari kemarin</span>
            @else
              <span class="text-warning">{{ $link_inc }}</span>
            @endif
          </small>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card radius-10">
        <div class="card-body">
          <div class="d-flex align-items-center">
            <div class="">
              <p class="mb-1">Visitor</p>
              <h4 class="mb-0 text-danger">{{ $visitors }}</h4>
            </div>
            <div class="ms-auto fs-2 text-danger">
              <i class="bi bi-person-plus-fill"></i>
            </div>
          </div>
          <div class="border-top my-2"></div>
          <small class="mb-0">
            @if ($visitor_inc > 0)
              <span class="text-success">+{{ $visitor_inc }} dari kemarin</span>
            @else
              <span class="text-warning">{{ $visitor_inc }}</span>
            @endif
          </small>
        </div>
      </div>
    </div>
  </div>

  {{-- WEBSITE VISITOR --}}
  <h6 class="mb-0 mt-3 text-uppercase">Web Visitor</h6>
  <hr/>
  <div class="row">
    {{-- Visitor Chart --}}
    <div class="col-12 col-xl-8">
      <div class="card">
        <div class="card-body">
          <div id="visitorChart"></div>
        </div>
      </div>
    </div>
    {{-- Visitor Counter --}}
    <div class="col-12 col-xl-4 d-flex">
      <div class="card radius-10 w-100 overflow-hidden">
        <div class="card-body">
          <p>Visitor Counter</p>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <div class="d-flex align-items-center gap-2">
                <div>March 2022</div>
                <div class="ms-auto" id="MarCounter"></div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="d-flex align-items-center gap-2">
                <div>April 2022</div>
                <div class="ms-auto" id="AprCounter"></div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="d-flex align-items-center gap-2">
                <div>May 2022</div>
                <div class="ms-auto" id="MayCounter"></div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="d-flex align-items-center gap-2">
                <div>June 2022</div>
                <div class="ms-auto" id="JunCounter"></div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="d-flex align-items-center gap-2">
                <div>July 2022</div>
                <div class="ms-auto" id="JulCounter"></div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="d-flex align-items-center gap-2">
                <div>August 2022</div>
                <div class="ms-auto" id="AugCounter"></div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="d-flex align-items-center gap-2">
                <div>September 2022</div>
                <div class="ms-auto" id="SepCounter"></div>
              </div>
            <li class="list-group-item">
              <div class="d-flex align-items-center gap-2">
                <div>October 2022</div>
                <div class="ms-auto" id="OctCounter"></div>
              </div>
            <li class="list-group-item">
              <div class="d-flex align-items-center gap-2">
                <div>November 2022</div>
                <div class="ms-auto" id="NovCounter"></div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="d-flex align-items-center gap-2">
                 <div>December 2022</div>
                 <div class="ms-auto" id="DecCounter"></div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="d-flex align-items-center gap-2">
                <div>January 2023</div>
                <div class="ms-auto" id="JanCounter"></div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="d-flex align-items-center gap-2">
                <div>February 2023</div>
                <div class="ms-auto" id="FebCounter"></div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

@endsection