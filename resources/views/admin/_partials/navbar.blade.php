<header class="navbar navbar-expand-md navbar-light d-print-none">
  <div class="container-xl">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
      <a href="#">
        {{-- <img src="{{ asset('tabler-main/demo/static/1.svg') }}" width="110" height="32" alt="Tabler"
        class="navbar-brand-image"> --}}
        Sinemaku
      </a>
    </h1>
    <div class="navbar-nav flex-row order-md-last">
      <div class="d-none d-md-flex">
        <a href="?theme=dark" class="nav-link px-0 hide-theme-dark" title="Enable dark mode" data-bs-toggle="tooltip" data-bs-placement="bottom">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" />
          </svg>
        </a>
        <a href="?theme=light" class="nav-link px-0 hide-theme-light" title="Enable light mode" data-bs-toggle="tooltip" data-bs-placement="bottom">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <circle cx="12" cy="12" r="4" />
            <path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" />
          </svg>
        </a>
        <!-- <div class="nav-item dropdown d-none d-md-flex me-3">
          <a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1" aria-label="Show notifications">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
              <path d="M9 17v1a3 3 0 0 0 6 0v-1" />
            </svg>
            <span class="badge bg-red"></span>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-end dropdown-menu-card">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Last updates</h3>
              </div>
              <div class="list-group list-group-flush list-group-hoverable">
                <div class="list-group-item">
                  <div class="row align-items-center">
                    <div class="col-auto"><span class="status-dot status-dot-animated bg-red d-block"></span></div>
                    <div class="col text-truncate">
                      <a href="#" class="text-body d-block">Example 1</a>
                      <div class="d-block text-muted text-truncate mt-n1">
                        Change deprecated html tags to text decoration classes (#29604)
                      </div>
                    </div>
                    <div class="col-auto">
                      <a href="#" class="list-group-item-actions">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                          <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="list-group-item">
                  <div class="row align-items-center">
                    <div class="col-auto"><span class="status-dot d-block"></span></div>
                    <div class="col text-truncate">
                      <a href="#" class="text-body d-block">Example 2</a>
                      <div class="d-block text-muted text-truncate mt-n1">
                        justify-content:between ⇒ justify-content:space-between (#29734)
                      </div>
                    </div>
                    <div class="col-auto">
                      <a href="#" class="list-group-item-actions show">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-yellow" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                          <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="list-group-item">
                  <div class="row align-items-center">
                    <div class="col-auto"><span class="status-dot d-block"></span></div>
                    <div class="col text-truncate">
                      <a href="#" class="text-body d-block">Example 3</a>
                      <div class="d-block text-muted text-truncate mt-n1">
                        Update change-version.js (#29736)
                      </div>
                    </div>
                    <div class="col-auto">
                      <a href="#" class="list-group-item-actions">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                          <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="list-group-item">
                  <div class="row align-items-center">
                    <div class="col-auto"><span class="status-dot status-dot-animated bg-green d-block"></span></div>
                    <div class="col text-truncate">
                      <a href="#" class="text-body d-block">Example 4</a>
                      <div class="d-block text-muted text-truncate mt-n1">
                        Regenerate package-lock.json (#29730)
                      </div>
                    </div>
                    <div class="col-auto">
                      <a href="#" class="list-group-item-actions">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                          <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> -->
      </div>
      <div class="nav-item dropdown">
        <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
          <span class="avatar avatar-sm" style="background-image: url({{ asset('tabler-main/demo/static/avatars/071m.jpg') }})"></span>
          <div class="d-none d-xl-block ps-2">
            <div>{{ Auth::user()->name }}</div>
            <div class="mt-1 small text-muted">{{ auth()->user()->name }}</div>
          </div>
        </a>
        <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
          <!-- <a href="#" class="dropdown-item">Set status</a>
          <a href="#" class="dropdown-item">Profile & account</a>
          <a href="#" class="dropdown-item">Feedback</a>
          <div class="dropdown-divider"></div> -->
          <!-- <a href="#" class="dropdown-item">Settings</a> -->
          <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
            <i class="ti-power-off text-primary"></i>
            Logout
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
          </form>
        </div>
      </div>
    </div>
  </div>
</header>
<div class="navbar-expand-md">
  <div class="collapse navbar-collapse" id="navbar-menu">
    <div class="navbar navbar-light">
      <div class="container-xl">
        <ul class="navbar-nav">
          <li class="nav-item {{ request()->routeIs('admin.home') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.home') }}">
              <span class="nav-link-icon d-md-none d-lg-inline-block">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <polyline points="5 12 3 12 12 3 21 12 19 12" />
                  <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                  <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                </svg>
              </span>
              <span class="nav-link-title">
                Dashboard
              </span>
            </a>
          </li>
          @can('pakets.view', Auth::user())
          <li class="nav-item {{ request()->routeIs('paket*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('paket.index') }}">
              <span class="nav-link-icon d-md-none d-lg-inline-block">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-receipt" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                  <path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16l-3 -2l-2 2l-2 -2l-2 2l-2 -2l-3 2m4 -14h6m-6 4h6m-2 4h2">
                  </path>
                </svg>
              </span>
              <span class="nav-link-title">
                Paket Foto
              </span>
            </a>
          </li>
          @endcan
          @can('reservasis.view', Auth::user())
          <li class="nav-item dropdown {{ request()->routeIs('reservasi*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('reservasi.index') }}">
              <span class="nav-link-icon d-md-none d-lg-inline-block">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <polyline points="12 3 20 7.5 20 16.5 12 21 4 16.5 4 7.5 12 3" />
                  <line x1="12" y1="12" x2="20" y2="7.5" />
                  <line x1="12" y1="12" x2="12" y2="21" />
                  <line x1="12" y1="12" x2="4" y2="7.5" />
                  <line x1="16" y1="5.25" x2="8" y2="9.75" />
                </svg>
              </span>
              <span class="nav-link-title">
                Reservasi
              </span>
            </a>
          </li>
          @endcan
          @can('galeris.view', Auth::user())
          <li class="nav-item {{ request()->routeIs('galeri*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('galeri.index') }}">
              <span class="nav-link-icon d-md-none d-lg-inline-block">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-slideshow" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                  <line x1="15" y1="6" x2="15.01" y2="6"></line>
                  <rect x="3" y="3" width="18" height="14" rx="3"></rect>
                  <path d="M3 13l4 -4a3 5 0 0 1 3 0l4 4"></path>
                  <path d="M13 12l2 -2a3 5 0 0 1 3 0l3 3"></path>
                  <line x1="8" y1="21" x2="8.01" y2="21"></line>
                  <line x1="12" y1="21" x2="12.01" y2="21"></line>
                  <line x1="16" y1="21" x2="16.01" y2="21"></line>
                </svg>
              </span>
              <span class="nav-link-title">
                Galeri
              </span>
            </a>
          </li>
          @endcan
          @can('pelanggans.view', Auth::user())
          <li class="nav-item {{ request()->routeIs('pelanggan*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('pelanggan.index') }}">
              <span class="nav-link-icon d-md-none d-lg-inline-block">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                  <circle cx="9" cy="7" r="4"></circle>
                  <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                  <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                  <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
                </svg>
              </span>
              <span class="nav-link-title">
                Pelanggan
              </span>
            </a>
          </li>
          @endcan
          @can('promos.view', Auth::user())
          <li class="nav-item dropdown {{ request()->routeIs('promo*') ? 'active' : '' }}">
            <a class="nav-link dropdown-toggle" href="{{ route('promo.index') }}" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">
              <span class="nav-link-icon d-md-none d-lg-inline-block">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-heart-handshake" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                  <path d="M19.5 13.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572"></path>
                  <path d="M12 7l-3.293 3.293a1 1 0 0 0 0 1.414l.543 .543c.69 .69 1.81 .69 2.5 0l1 -1a3.182 3.182 0 0 1 4.5 0l2.25 2.25">
                  </path>
                  <path d="M12.5 16.5l2 2"></path>
                  <path d="M15 14l2 2"></path>
                </svg>
              </span>
              <span class="nav-link-title">
                Promosi
              </span>
              <a>
                <div class="dropdown-menu">
                  <div class="dropdown-menu-columns">
                    <div class="dropdown-menu-column">
                      <a class="dropdown-item" href="{{ route('kirim-wa.index') }}">
                        WhatsApp
                      </a>
                      <a class="dropdown-item" href="{{ route('promo.index') }}">
                        Email
                      </a>
                      <a class="dropdown-item" href="#">
                        Instagram
                      </a>
                    </div>
                  </div>
                </div>
              </a>
          </li>
          @endcan
          @can('testimonis.view', Auth::user())
          <li class="nav-item dropdown {{ request()->routeIs('testimoni*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('testimoni.index') }}">
              <span class="nav-link-icon d-md-none d-lg-inline-block">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                  <circle cx="9" cy="7" r="4"></circle>
                  <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                  <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                  <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
                </svg>
              </span>
              <span class="nav-link-title">
                Testimoni
              </span>
            </a>
          </li>
          @endcan
          @can('laporans.view', Auth::user())
          <li class="nav-item {{ request()->routeIs('produk*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('laporan.index') }}">
              <span class="nav-link-icon d-md-none d-lg-inline-block">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-analytics" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                  <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                  <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"></path>
                  <line x1="9" y1="17" x2="9" y2="12"></line>
                  <line x1="12" y1="17" x2="12" y2="16"></line>
                  <line x1="15" y1="17" x2="15" y2="14"></line>
                </svg>
              </span>
              <span class="nav-link-title">
                Laporan
              </span>
            </a>
          </li>
          @endcan
          @can('users.view', Auth::user())
          <li class="nav-item">
            <a class="nav-link" href="{{ route('user.index') }}">
              <span class="nav-link-icon d-md-none d-lg-inline-block">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <desc>Download more icon variants from https://tabler-icons.io/i/user</desc>
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                  <circle cx="12" cy="7" r="4"></circle>
                  <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                </svg>
              </span>
              <span class="menu-title">Users</span>
            </a>
          </li>
          @endcan
          @can('roles.view', Auth::user())
          <li class="nav-item">
            <a class="nav-link" href="{{ route('role.index') }}">
              <i class="ti-id-badge menu-icon"></i>
              <span class="menu-title">Roles</span>
            </a>
          </li>
          @endcan
          @can('permissions.view', Auth::user())
          <li class="nav-item">
            <a class="nav-link" href="{{ route('permission.index') }}"><i class="fa fa-circle-o"></i> Permissions</a>
          </li>
          @endcan
        </ul>
      </div>
    </div>
  </div>
</div>
{{-- <div class="container-scroller">

  <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
      <a class="navbar-brand brand-logo mr-5" href="{{ route('admin.home') }}"><img src="{{ asset('admin2/images/sinema.png') }}" class="mr-2" alt="logo" /></a>
<a class="navbar-brand brand-logo-mini" href="{{ route('admin.home') }}"><img src="{{ asset('admin2/images/sinema-mini.png') }}" alt="logo" /></a>
</div>
<div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
  <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
    <span class="ti-view-list"></span>
  </button>
  <ul class="navbar-nav mr-lg-2">
    <li class="nav-item nav-search d-none d-lg-block">
      <div class="input-group">
        <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
          <span class="input-group-text" id="search">
            <i class="ti-search"></i>
          </span>
        </div>
        <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
      </div>
    </li>
  </ul>
  <ul class="navbar-nav navbar-nav-right">
    <li class="nav-item dropdown mr-1">
      <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-toggle="dropdown">
        <i class="ti-email mx-0"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="messageDropdown">
        <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
        <a class="dropdown-item">
          <div class="item-thumbnail">
            <img src="images/faces/face4.jpg" alt="image" class="profile-pic">
          </div>
          <div class="item-content flex-grow">
            <h6 class="ellipsis font-weight-normal">David Grey
            </h6>
            <p class="font-weight-light small-text text-muted mb-0">
              The meeting is cancelled
            </p>
          </div>
        </a>
        <a class="dropdown-item">
          <div class="item-thumbnail">
            <img src="images/faces/face2.jpg" alt="image" class="profile-pic">
          </div>
          <div class="item-content flex-grow">
            <h6 class="ellipsis font-weight-normal">Tim Cook
            </h6>
            <p class="font-weight-light small-text text-muted mb-0">
              New product launch
            </p>
          </div>
        </a>
        <a class="dropdown-item">
          <div class="item-thumbnail">
            <img src="images/faces/face3.jpg" alt="image" class="profile-pic">
          </div>
          <div class="item-content flex-grow">
            <h6 class="ellipsis font-weight-normal"> Johnson
            </h6>
            <p class="font-weight-light small-text text-muted mb-0">
              Upcoming board meeting
            </p>
          </div>
        </a>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
        <i class="ti-bell mx-0"></i>
        <span class="count"></span>
      </a>
      <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="notificationDropdown">
        <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
        <a class="dropdown-item">
          <div class="item-thumbnail">
            <div class="item-icon bg-success">
              <i class="ti-info-alt mx-0"></i>
            </div>
          </div>
          <div class="item-content">
            <h6 class="font-weight-normal">Application Error</h6>
            <p class="font-weight-light small-text mb-0 text-muted">
              Just now
            </p>
          </div>
        </a>
        <a class="dropdown-item">
          <div class="item-thumbnail">
            <div class="item-icon bg-warning">
              <i class="ti-settings mx-0"></i>
            </div>
          </div>
          <div class="item-content">
            <h6 class="font-weight-normal">Settings</h6>
            <p class="font-weight-light small-text mb-0 text-muted">
              Private message
            </p>
          </div>
        </a>
        <a class="dropdown-item">
          <div class="item-thumbnail">
            <div class="item-icon bg-info">
              <i class="ti-user mx-0"></i>
            </div>
          </div>
          <div class="item-content">
            <h6 class="font-weight-normal">New user registration</h6>
            <p class="font-weight-light small-text mb-0 text-muted">
              2 days ago
            </p>
          </div>
        </a>
      </div>
    </li>
    <li class="nav-item nav-profile dropdown">
      <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
        <img src="{{ asset('admin2/images/faces/face28.jpg') }}" alt="profile" />
      </a>
      <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
        <a class="dropdown-item">
          <i class="ti-settings text-primary"></i>
          {{ Auth::user()->name }}
        </a>
        <a class="dropdown-item">
          <i class="ti-settings text-primary"></i>
          Settings
        </a>
        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
          <i class="ti-power-off text-primary"></i>
          Logout
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          {{ csrf_field() }}
        </form>
      </div>
    </li>
  </ul>
  <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
    <span class="ti-view-list"></span>
  </button>
</div>
</nav>

</div> --}}