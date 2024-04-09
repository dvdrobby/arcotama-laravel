<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="/dashboard/assets/" data-template="vertical-menu-template-free"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

    <title>Login | Arcotama</title>

    <meta name="description" content="">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/dashboard/assets/img/favicon/favicon.ico">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="/dashboard/assets/vendor/fonts/boxicons.css">

    <!-- Core CSS -->
    <link rel="stylesheet" href="/dashboard/assets/vendor/css/core.css" class="template-customizer-core-css">
    <link rel="stylesheet" href="/dashboard/assets/vendor/css/theme-default.css" class="template-customizer-theme-css">
    <link rel="stylesheet" href="/dashboard/assets/css/demo.css">

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="/dashboard/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css">

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="/dashboard/assets/vendor/css/pages/page-auth.css">
    <!-- Helpers -->
    <script src="/dashboard/assets/vendor/js/helpers.js"></script><style type="text/css">
.layout-menu-fixed .layout-navbar-full .layout-menu,
.layout-page {
  padding-top: 0px !important;
}
.content-wrapper {
  padding-bottom: 0px !important;
}</style>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="/dashboard/assets/js/config.js"></script>
  </head>

  <body>
    <!-- Content -->

    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register -->
          <div class="card">
            <div class="card-body">
              
              <!-- /Logo -->
              <h4 class="mb-2">Welcome to Arcotama Dashboard</h4>
              <p class="mb-4">Please sign-in to your account</p>

              @if (session()->has('loginError'))
                <div class="alert alert-danger" role="alert">Login attempt failed!</div>
                  
              @endif

              <form id="formAuthentication" class="mb-3" action="/auth/login" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="username" class="form-label">Username</label>
                  <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username" autofocus required>
                </div>
                <div class="mb-3 form-password-toggle">
                  <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">Password</label>
                  </div>
                  <div class="input-group input-group-merge">
                    <input type="password" id="password" class="form-control" name="password" placeholder="············" aria-describedby="password">
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                </div>
                <div class="mb-3">
                  <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
                </div>
              </form>

            </div>
          </div>
          <!-- /Register -->
        </div>
      </div>
    </div>

    <!-- / Content -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="/dashboard/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="/dashboard/assets/vendor/libs/popper/popper.js"></script>
    <script src="/dashboard/assets/vendor/js/bootstrap.js"></script>
    <script src="/dashboard/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="/dashboard/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="/dashboard/assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async="" defer="" src="https://buttons.github.io/buttons.js"></script>
  

</body></html>