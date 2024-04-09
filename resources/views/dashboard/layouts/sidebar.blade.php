<!-- Menu -->

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
      <a href="index.html" class="app-brand-link">
        <span class="app-brand-text demo menu-text fw-bolder ms-2">ARCOTAMA</span>
      </a>

      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
        <i class="bx bx-chevron-left bx-sm align-middle"></i>
      </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
      <!-- Dashboard -->
      <li class="menu-item {{Request::is('dashboard') ? 'active' : '' }}">
        <a href="{{url('/dashboard')}}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-home-circle"></i>
          <div data-i18n="Analytics">Dashboard</div>
        </a>
      </li>

      <!-- Layouts -->
      <li class="menu-item {{Request::is('dashboard/settings*') ? 'active' : '' }}">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-layout"></i>
          <div data-i18n="Layouts">Contact Profile</div>
        </a>

        <ul class="menu-sub">
          <li class="menu-item">
            <a href="/dashboard/client/create" class="menu-link">
              <div data-i18n="Without menu">Add Client</div>
            </a>
          <li class="menu-item">
            <a href="/dashboard/about/1/edit" class="menu-link">
              <div data-i18n="Without menu">Edit About</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="/dashboard/social/1/edit" class="menu-link">
              <div data-i18n="Without navbar">Edit Social Link</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="/dashboard/map/1/edit" class="menu-link">
              <div data-i18n="Container">Edit Maps Link</div>
            </a>
          </li>
        </ul>
      </li>

      <li class="menu-header small text-uppercase">
        <span class="menu-header-text">Blog</span>
      </li>
      <li class="menu-item {{Request::is('dashboard/post*') ? 'active' : '' }}">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-dock-top"></i>
          <div data-i18n="Account Settings">Blog Settings</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="{{ url('dashboard/posts/create') }}" class="menu-link">
              <div data-i18n="Account">Add New Post</div>
            </a>
          </li>
        </ul>
      </li>
      
    </ul>
  </aside>
  <!-- / Menu -->