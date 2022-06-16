@extends('admin._partials.app')

@section('main-content')
<div class="container-xl">
  <div class="page-header d-print-none">
    <div class="row align-items-center">
      <div class="col">
        <h2 class="page-title">
          Dashboard
        </h2>
      </div>
      <div class="col-auto ms-auto d-print-none">
      </div>
    </div>
  </div>
</div>
<div class="page-body">
  <div class="container-xl">
    <div class="row row-deck row-cards">
      <div class="col-sm-6 col-lg-3">
        <div class="card">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <div class="header">Reservasi Foto</div>
              <div class="ms-auto lh-1">
                <div class="dropdown">
                  <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Last 7 days</a>
                  <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item active" href="#" id="7">Last 7 days</a>
                    <a class="dropdown-item" href="#" id="15">Last 30 days</a>
                    <a class="dropdown-item" href="#" id="30">Last 3 months</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="h1 mb-3" id="reservasi">5</div>
            <div class="d-flex mb-2">
              <div>Conversion rate</div>
              <div class="ms-auto">
                <span class="text-green d-inline-flex align-items-center lh-1">
                  7%
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <polyline points="3 17 9 11 13 15 21 7" />
                    <polyline points="14 7 21 7 21 14" />
                  </svg>
                </span>
              </div>
            </div>
            <div class="progress progress-sm">
              <div class="progress-bar bg-blue" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                <span class="visually-hidden">75% Complete</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3">
        <div class="card">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <div class="header">Pelanggan</div>
              <div class="ms-auto lh-1">
                <div class="dropdown">
                  <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pekerjaan</a>
                  <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item active" href="#" id="mahasiswa">Mahasiswa</a>
                    <a class="dropdown-item" href="#" id="remaja">PNS</a>
                    <!-- <a class="dropdown-item" href="#" id="dewasa">Dewasa</a> -->
                  </div>
                </div>
              </div>
            </div>
            <div class="d-flex align-items-baseline">
              <p class="h1 mb-0 me-2" id="value">10</p>
              <div class="me-auto">
                <span class="text-green d-inline-flex align-items-center lh-1">
                  8%
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <polyline points="3 17 9 11 13 15 21 7" />
                    <polyline points="14 7 21 7 21 14" />
                  </svg>
                </span>
              </div>
            </div>
          </div>
          <div id="chart-revenue-bg" class="chart-sm"></div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3">
        <div class="card">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <div class="header">Paket Foto</div>
              <div class="ms-auto lh-1">
                <div class="dropdown">
                </div>
              </div>
            </div>
            <div class="d-flex align-items-baseline">
              <div class="h1 mb-3 me-2">8</div>
              <div class="me-auto">
                <span class="text-yellow d-inline-flex align-items-center lh-1">
                  0%

                  <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <line x1="5" y1="12" x2="19" y2="12" />
                  </svg>
                </span>
              </div>
            </div>
            <div id="chart-new-clients" class="chart-sm"></div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3">
        <div class="card">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <div class="subheader">Promosi Berkala</div>
              <div class="ms-auto lh-1">
                <div class="dropdown">
                  <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">WhatsApp</a>
                  <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item active" href="#" id="wa">WhatsApp</a>
                    <!-- <a class="dropdown-item" href="#" id="instagram">Instagram</a> -->
                    <a class="dropdown-item" href="#" id="email">E-Mail</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="d-flex align-items-baseline">
              <div class="h1 mb-3 me-2" id="promosi">5</div>
              <div class="me-auto">
                <span class="text-green d-inline-flex align-items-center lh-1"> 4%

                  <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <polyline points="3 17 9 11 13 15 21 7" />
                    <polyline points="14 7 21 7 21 14" />
                  </svg>
                </span>
              </div>
            </div>
            <div id="chart-active-users" class="chart-sm"></div>
          </div>
        </div>
      </div>
      <!-- <div class="col-12">
        <div class="row row-cards">
          <div class="col-sm-6 col-lg-3">
            <div class="card card-sm">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col-auto">
                    <span class="bg-blue text-white avatar">
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <desc>Download more icon variants from https://tabler-icons.io/i/currency-dollar</desc>
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M16.7 8a3 3 0 0 0 -2.7 -2h-4a3 3 0 0 0 0 6h4a3 3 0 0 1 0 6h-4a3 3 0 0 1 -2.7 -2"></path>
                        <path d="M12 3v3m0 12v3"></path>
                      </svg>
                    </span>
                  </div>
                  <div class="col">
                    <div class="font-weight-medium">
                      15 Order
                    </div>
                    <div class="text-muted">
                      12 waiting payments
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="card card-sm">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col-auto">
                    <span class="bg-green text-white avatar">
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <desc>Download more icon variants from https://tabler-icons.io/i/shopping-cart</desc>
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <circle cx="6" cy="19" r="2"></circle>
                        <circle cx="17" cy="19" r="2"></circle>
                        <path d="M17 17h-11v-14h-2"></path>
                        <path d="M6 5l14 1l-1 7h-13"></path>
                      </svg>
                    </span>
                  </div>
                  <div class="col">
                    <div class="font-weight-medium">
                      78 Orders
                    </div>
                    <div class="text-muted">
                      32 shipped
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="card card-sm">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col-auto">
                    <span class="bg-twitter text-white avatar">
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <desc>Download more icon variants from https://tabler-icons.io/i/brand-twitter</desc>
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c-.002 -.249 1.51 -2.772 1.818 -4.013z"></path>
                      </svg>
                    </span>
                  </div>
                  <div class="col">
                    <div class="font-weight-medium">
                      623 Shares
                    </div>
                    <div class="text-muted">
                      16 today
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="card card-sm">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col-auto">
                    <span class="bg-facebook text-white avatar">
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <desc>Download more icon variants from https://tabler-icons.io/i/brand-facebook</desc>
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3"></path>
                      </svg>
                    </span>
                  </div>
                  <div class="col">
                    <div class="font-weight-medium">
                      132 Likes
                    </div>
                    <div class="text-muted">
                      21 today
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> -->
    </div>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#mahasiswa').click(function() {
      $('#value').text("10");
    });
    $('#remaja').click(function() {
      $('#value').text("5");
    });
    $('#dewasa').click(function() {
      $('#value').text("15");
    });
    $('#7').click(function() {
      $('#reservasi').text("5");
    });
    $('#15').click(function() {
      $('#reservasi').text("15");
    });
    $('#30').click(function() {
      $('#reservasi').text("30");
    });
    $('#wa').click(function() {
      $('#promosi').text("8");
    });
    $('#instagram').click(function() {
      $('#promosi').text("9");
    });
    $('#email').click(function() {
      $('#promosi').text("10");
    });
  });
</script>
@endsection