<?php include 'includes/session.php'; ?>
<!DOCTYPE html>

<!-- =========================================================
* MoneyMCS
==============================================================
* 
* Created by: 
* 
* 
=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="./assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>MoneyMCS - Sign up</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="./assets/img/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="./assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="./assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="./assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="./assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="./assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="./assets/vendor/css/pages/page-auth.css" />
    <!-- Helpers -->
    <script src="./assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="./assets/js/config.js"></script>
  </head>

  <body>
    <!-- Content -->

    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center">
                <a href="index" class="app-brand-link gap-2">
                  <img aria-hidden="true" class="object-contain w-full h-full" src="./assets/img/earnmoney.png" width="100">
                  <!-- <span class="app-brand-text demo text-body fw-bolder">MoneyMCS</span> -->
                </a>
              </div>
              <!-- /Logo -->
              <h4 class="mb-2">New Agent Registration</h4>
              <p class="mb-4">Please sign-up form below</p>
              <?php
                if(isset($_SESSION['error'])){
                    echo "
                    <div class='alert alert-danger' role='alert'><i class='bx bx-error-circle'></i> ".$_SESSION['error']." </div>
                    ";
                    unset($_SESSION['error']);
                }
                if(isset($_SESSION['success'])){
                    echo "
                   
                    <div class='alert alert-success' role='alert'><i class='bx bx-check-circle'></i> ".$_SESSION['success']." </div>
                    ";
                    unset($_SESSION['success']);
                }
                ?>
              <form id="formAuthentication" class="mb-3" action="createaccount" method="POST">

                <div class="mb-3">
                  <label for="email" class="form-label">Firstname</label>
                  <input
                    type="text"
                    class="form-control"
                    name="firstname"
                    placeholder="" autocomplete="false"
                    autofocus="true"  
                  />
                </div>

                <div class="mb-3">
                  <label for="email" class="form-label">Lastname</label>
                  <input
                    type="text"
                    class="form-control"
                    name="lastname"
                    placeholder="" autocomplete="false"
                  />
                </div>

                <!-- <div class="mb-3">
                  <label for="email" class="form-label">Middle</label>
                  <input
                    type="text"
                    class="form-control"
                    id=""
                    name=""
                    placeholder="" autocomplete="false"
                    autofocus="true"  
                  />
                </div> -->

                <div class="mb-3">
                  <label for="email" class="form-label">Email or Username</label>
                  <input
                    type="text"
                    class="form-control"
                    id="email"
                    name="email"
                    placeholder="" autocomplete="false"
                  />
                </div>

                <div class="mb-3 form-password-toggle">
                  <div class="d-flex justify-content-between">
                    <label class="form-label" for="password" autocomplete="chrome-off">Password</label>
                  </div>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      id="password"
                      class="form-control"
                      name="password"
                      placeholder=""
                      aria-describedby="password" 
                    />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                </div>

                <div class="mb-3 form-password-toggle">
                  <div class="d-flex justify-content-between">
                    <label class="form-label" for="password" autocomplete="chrome-off">Confirmed Password</label>
                  </div>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      id="password"
                      class="form-control"
                      name="repassword"
                      aria-describedby="password" 
                    />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                </div>
                <div class="form-group">
                  <label for="">Verification Code</label>
                  <?php
                    $str = str_shuffle('ABCDEFGHJKMNPQRSTWXYZ');
                    $_SESSION['captcha_code'] = substr($str, 0, 6); 
                  ?>
                  <img src="captcha" alt="" class="w-100">
                  <input type="text" name="captcha" placeholder="Please type the verification code" class="form-control mt-3 no_border" required>
                </div>
                <br>
                <?php
                  $token = uniqid();
                  $_SESSION['token'] = $token;
                  $csrf_token = md5($token);
                ?>
                <input type="hidden" name="token" value="<?php echo $csrf_token; ?>" />
                <div class="mb-3">
                  <button class="btn btn-success d-grid w-100" name="create" type="submit">Create Account</button>
                </div>
              </form>

              <p class="text-center">
                <span>I already have an account</span>
                <a href="index">
                  <span>Sign in</span>
                </a>
              </p>
            </div>
          </div>
          <!-- /Register -->
        </div>
      </div>
    </div>
    <!-- / Content -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="./assets/vendor/libs/jquery/jquery.js"></script>
    <script src="./assets/vendor/libs/popper/popper.js"></script>
    <script src="./assets/vendor/js/bootstrap.js"></script>
    <script src="./assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="./assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="./assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
