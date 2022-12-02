<?php 
  include 'includes/session.php';
?>
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
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>MoneyMCS - Home</title>

    <meta name="description" content="" />

    <?php include 'includes/headers.php'; ?>
    

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!-- Paypal Express -->
    <!-- <script src="https://www.paypalobjects.com/api/checkout.js"></script> -->
    <!-- <script src="https://www.paypal.com/sdk/js?client-id=ASQAcFkDyzt_DJLIp2B-5fvNvKwB8RmF56Z82REWkieRIppWs7XoDGZuFJabXe1bly8X8ZncyuXDEULP" data-sdk-integration-source="button-factory"></script> -->

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>

    <style>
      @keyframes blinking {
        0% {
          background-color: #fff;
          
        }
        100% {
          background-color: #deeddb96;
        
        }
      }
      
      .breath {
      
        animation: blinking 5s infinite;
      }
    </style>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="#" class="app-brand-link">
              <span class="app-brand-logo demo">
                <img aria-hidden="true" class="object-contain w-full h-full" src="../assets/img/earnmoney.png" width="50">
              </span>
              <span class="app-brand-text demo menu-text fw-bolder ms-2">MoneyMCS</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>
          <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Main Menu</span>
          </li>
          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item active">
              <a href="home" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Home</div>
              </a>
            </li>

            <li class="menu-item ">
              <a href="subscriptions" class="menu-link">
                <i class='menu-icon tf-icons bx bx-list-ul'></i>
                <div data-i18n="Analytics">Subscription Plans</div>
              </a>
            </li>

            <!-- Layouts -->
            <!-- <li class="menu-item">
              <a href="resources" class="menu-link">
                <i class='menu-icon tf-icons bx bx-book-reader'></i>
                <div data-i18n="Basic">Resource Library</div>
              </a>
            </li> -->

            <li class="menu-item" style="">
              <a href="javascript:void(0)" class="menu-link menu-toggle">
              <i class='menu-icon tf-icons bx bx-book-reader'></i>
                <div data-i18n="">Partner Resources</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="resources" class="menu-link">
                    <div data-i18n="">Resource Library</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="resource" class="menu-link">
                    <div data-i18n="">Resource Page</div>
                  </a>
                </li>
                <!--<li class="menu-item active">
                    <a href="trainingresources" class="menu-link">
                    <div data-i18n="">Training Resources</div>
                    </a>
                </li>-->
              </ul>
            </li>

            <li class="menu-item">
              <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class='menu-icon tf-icons bx bxs-book-open'></i>
                <div data-i18n="">Training Resources</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="trainingresources" class="menu-link">
                    <div data-i18n="">Training Courses</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="traininghistory" class="menu-link">
                    <div data-i18n="">Training History</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="trainingcertificates" class="menu-link">
                    <div data-i18n="">Training Certificate(s)</div>
                  </a>
                </li>
              </ul>
            </li>

            <li class="menu-item" style="">
              <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class='menu-icon tf-icons bx bxs-user-detail'></i>
                <div data-i18n="">Commissions/Referrals </div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="programs" class="menu-link">
                    <div data-i18n="">My Programs</div>
                  </a>
                </li>
                <li class="menu-item">
                    <a href="linkgenerator" class="menu-link">
                    <div data-i18n="">Link Generator</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="emailtemplates" class="menu-link">
                    <div data-i18n="">Email Generator</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="banners" class="menu-link">
                    <div data-i18n="">Banners</div>
                    </a>
                </li>
              </ul>
            </li>

            <li class="menu-item" style="">
              <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class='menu-icon tf-icons bx bxs-file'></i>
                <div data-i18n="">Reports </div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="ledger" class="menu-link">
                    <div data-i18n="">Ledger</div>
                  </a>
                </li>
                <li class="menu-item">
                    <a href="linktrackingstats" class="menu-link">
                    <div data-i18n="">Link Tracking Stats</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="commissionsgenerated" class="menu-link">
                    <div data-i18n="">Commissions Generated</div>
                    </a>
                </li>
              </ul>
            </li>

            <li class="menu-item">
              <a href="clients" class="menu-link">
                <i class='menu-icon tf-icons bx bxs-user-rectangle'></i>
                <div data-i18n="Basic">Clients</div>
              </a>
            </li>

            <!-- <li class="menu-item">
              <a href="#" class="menu-link">
                <i class='menu-icon tf-icons bx bxs-user-plus'></i>
                <div data-i18n="Basic">Add Clients</div>
              </a>
            </li> -->

            <li class="menu-item">
              <a href="downlines" class="menu-link">
                <i class='menu-icon tf-icons bx bx-git-branch'></i>
                <div data-i18n="Basic">Downlines</div>
              </a>
            </li>

            <li class="menu-item">
              <a href="contacts" class="menu-link">
                <i class='menu-icon tf-icons bx bx-phone-outgoing'></i>
                <div data-i18n="Basic">Helpdesk</div>
              </a>
            </li>

            
            <!-- <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Reports
            </li>

            <li class="menu-item">
              <a href="ledger" class="menu-link">
              <i class='menu-icon tf-icons bx bx-receipt'></i>
                <div data-i18n="Basic">Ledger</div>
              </a>
            </li>

            <li class="menu-item">
              <a href="linktrackingstats" class="menu-link">
                <i class='menu-icon tf-icons bx bx-current-location'></i>
                <div data-i18n="Basic">Link Tracking Stats</div>
              </a>
            </li>

            <li class="menu-item">
              <a href="commissionsgenerated" class="menu-link">
                <i class='menu-icon tf-icons bx bx-money'></i>
                <div data-i18n="Basic">Commissions Generated</div>
              </a>
            </li> -->
           
          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->
         
          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  Money MCS
                  <!-- <i class="bx bx-search fs-4 lh-0"></i> -->
                  <!-- <input
                    type="text"
                    class="form-control border-0 shadow-none"
                    placeholder="Search..."
                    aria-label="Search..."
                  /> -->
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
              <?//php include 'includes/subs_button.php'; ?>
              <!-- <li class="nav-item lh-1 me-3">
                <a class="github-button" href="subscriptions" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="">Subscription Plans</a>
              </li> -->
                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                        <img src="<?php echo (!empty($agent['photo'])) ? '../images/'.$agent['photo'] : '../images/default.png'; ?>" class="w-px-40 h-auto rounded-circle">
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <!--   <img src="<?php echo (!empty($agent['photo'])) ? '../images/'.$agent['photo'] : '../images/default.png'; ?>" class="w-px-40 h-auto rounded-circle"> -->
                              <img src="<?php echo (!empty($agent['photo'])) ? '../images/'.$agent['photo'] : '../images/default.png'; ?>" class="w-px-40 h-auto rounded-circle">
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block"><?php echo $agent['firstname'].' '.$agent['lastname']; ?></span>
                            <small class="text-muted"><?php echo $agent['level']; ?></small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="profile">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">Profile</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="subscription">
                      <i class='bx bx-detail me-2'></i>
                        <span class="align-middle">Subscription History</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="payment">
                      <i class='bx bx-dollar-circle me-2'></i>
                        <span class="align-middle">Payment</span>
                      </a>
                    </li>
                    <!-- <li>
                      <a class="dropdown-item" href="transactions">
                        <i class='bx bx-folder-open'></i>
                        <span class="align-middle">Transactions</span>
                      </a>
                    </li> -->
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="../logout.php">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-lg-12 mb-4 order-0" >
                  <div class="card" >
                    <div class="d-flex  row" style="background-color: #ddebda;border-radius: 8px;">
                      <div class="col-sm-10">
                        <div class="card-body">
                          <h4 class="card-title text-primary">Congratulations <?php echo $agent['firstname']; ?>! 🎉</h4>
                          <p class="mb-4">
                            Welcome to Money MCS, You have <span class="fw-bold">7</span> commission(s) today. Check your new downline now.
                          </p>

                          <!-- <a href="javascript:;" class="btn btn-sm btn-outline-success">Downlines</a>
                          <a href="javascript:;" class="btn btn-sm btn-outline-success">Clients</a> -->
                        </div>
                      </div>
                      <div class="col-sm-2 text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                          <img
                            src="../assets/img/earnmoney.png"
                            width="120"
                            
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
               
                <!-- <div class="col-lg-4 col-md-4 order-1">
                  <div class="row">
                  <div class="col-lg-6 col-md-12 col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                            <i class='bx bxs-user-badge bx-md'></i>
                            </div>
                          </div>
                          <span class="fw-semibold d-block mb-1">Clients</span>
                          <h2 class="card-title text-nowrap mb-1">0</h2>
                          <small class="text-success fw-semibold"> &nbsp;</small>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <i class='bx bx-git-branch bx-md'></i>
                            </div>
                          </div>
                          <span class="fw-semibold d-block mb-1">Downlines</span>
                          <h2 class="card-title text-nowrap mb-1">0</h2>
                          <small class="text-success fw-semibold">&nbsp;</small>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> -->
              </div>
              <div class="row">
                <div class="col-md-6 col-xl-4">
                  <div class="card mb-3 breath">
                    <div class="card-header"><b>News</b></div>
                      <div class="card-body">
                        <h5 class="card-title ">New Training Available</h5>
                        <!-- <p class="card-text">Some quick example text to build on the card title and make up.</p> -->
                      </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-4">
                  <div class="card   mb-3">
                    <div class="card-header"><b>Clients</b></div>
                      <div class="card-body">
                        <h4 class="card-title " style="color: #137204; ">
                          <?php
                            $conn = $pdo->open();
                              try{
                                $sql = "SELECT count(*) FROM `clients` WHERE id=:user_id "; 
                                $result = $conn->prepare($sql); 
                                $result->execute(['user_id'=>$agent['id']]); 
                                $number_of_rows = $result->fetchColumn(); 
                                echo "$number_of_rows"  ;
                              
                              }
                              catch(PDOException $e){
                                echo $e->getMessage();
                              }
                              $pdo->close();
                            ?>
                        </h4>
                        <!-- <p class="card-text">Some quick example text to build on the card title and make up.</p> -->
                      </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-4">
                  <div class="card   mb-3">
                    <div class="card-header"><b>Downlines</b></div>
                      <div class="card-body">
                        <h4 class="card-title " style="color: #137204;">
                        <?php
                            $conn = $pdo->open();
                              try{
                                $sql = "SELECT count(*) FROM `refer_user` WHERE refid=:user_id "; 
                                $result = $conn->prepare($sql); 
                                $result->execute(['user_id'=>$agent['id']]); 
                                $number_of_rows = $result->fetchColumn(); 
                                echo "$number_of_rows"  ;
                              
                              }
                              catch(PDOException $e){
                                echo $e->getMessage();
                              }
                              $pdo->close();
                            ?>
                        </h4>
                        <!-- <p class="card-text">Some quick example text to build on the card title and make up.</p> -->
                      </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 col-xl-4">
                  <div class="card   mb-3">
                    <div class="card-header"><b>Link usage last 30 days</b></div>
                    <div class="card-body">
                      <h5 class="card-title ">0</h5>
                      <!-- <p class="card-text">Some quick example text to build on the card title and make up.</p> -->
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-4">
                  <div class="card   mb-3">
                    <div class="card-header"><b>Commission last 30 days</b></div>
                    <div class="card-body">
                      <h5 class="card-title ">$0.00</h5>
                      <!-- <p class="card-text">Some quick example text to build on the card title and make up.</p> -->
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-4">
                  <div class="card   mb-3">
                    <div class="card-header"><b>Register last 30 days</b></div>
                    <div class="card-body">
                      <h5 class="card-title ">0</h5>
                      <!-- <p class="card-text">Some quick example text to build on the card title and make up.</p> -->
                    </div>
                  </div>
                </div>
              </div>
              
            </div>

            <?php include 'includes/google_translate.php'; ?>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script> Money MCS
                  <!-- , made with ❤️ by -->
                  <!-- <a href="#" target="_blank" class="footer-link fw-bolder"></a> -->
                </div>
                <?php include 'includes/custom_footer.php'; ?>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->

         <?php include 'includes/subs_form.php'; ?>

      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->
  
    
    <?php include 'includes/footer_links.php'; ?>

    <?php include 'includes/payment_script.php'; ?>
  </body>
</html>
