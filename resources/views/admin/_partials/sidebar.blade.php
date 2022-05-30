<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="{{ route('admin.home') }}">
        <i class="ti-home menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{ route('deals.index') }}">
        <i class="ti-money menu-icon"></i>
        <span class="menu-title">Deals</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{ route('paket.index') }}">
        <i class="ti-gallery menu-icon"></i>
        <span class="menu-title">Paket Foto</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{ route('jadwal.index') }}">
        <i class="ti-gallery menu-icon"></i>
        <span class="menu-title">Jadwal Foto</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{ route('mail.index') }}">
        <i class="ti-email menu-icon"></i>
        <span class="menu-title">Mail</span>
      </a>
    </li>

    <!--           @can('posts.category',Auth::user())
          <li class="nav-item">
            <a class="nav-link" href="{{ route('tag.index') }}">
              <i class="ti-layout-list-post menu-icon"></i>
              <span class="menu-title">Tags</span>
            </a>
          </li>
          @endcan

          <li class="nav-item">
            <a class="nav-link" href="{{ route('post.index') }}">
              <i class="ti-layout-list-post menu-icon"></i>
              <span class="menu-title">Post</span>
            </a>
          </li> -->

    <li class="nav-item">
      <a class="nav-link" href="{{ route('user.index') }}">
        <i class="ti-user menu-icon"></i>
        <span class="menu-title">Users</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{ route('role.index') }}">
        <i class="ti-id-badge menu-icon"></i>
        <span class="menu-title">Roles</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{ route('kontak.index') }}">
        <i class="ti-user menu-icon"></i>
        <span class="menu-title">Kontak</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{ route('aktivitas.index') }}">
        <i class="ti-clipboard menu-icon"></i>
        <span class="menu-title">Aktivitas</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{ route('testimoni.index') }}">
        <i class="ti-clipboard menu-icon"></i>
        <span class="menu-title">Testimoni</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{ route('produk.index') }}">
        <i class="ti-shopping-cart-full menu-icon"></i>
        <span class="menu-title">Laporan</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{ route('progres.index') }}">
        <i class="ti-bar-chart menu-icon"></i>
        <span class="menu-title">Progress</span>
      </a>
    </li>
  </ul>
</nav>