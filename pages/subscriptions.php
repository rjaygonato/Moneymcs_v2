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

    <title>MoneyMCS - Subscription Plans</title>

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
      .isDisabled {
        color: currentColor;
        cursor: not-allowed;
        opacity: 0.5;
        text-decoration: none;
        color: white;
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
            <li class="menu-item ">
              <a href="home" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Home</div>
              </a>
            </li>

            <li class="menu-item active">
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
                <li class="menu-item">
                    <a href="trainingresources" class="menu-link">
                    <div data-i18n="">Training Resources</div>
                    </a>
                </li>
              </ul>
            </li>

            <li class="menu-item">
              <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class='menu-icon tf-icons bx bxs-user-detail'></i>
                <div data-i18n="">Commissions/Referrals</div>
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
                <i class='menu-icon tf-icons bx bxs-user-detail'></i>
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
                <div class="col-lg-5 ">
                  <h5 class="card-title text-primary">Subscription Plans</h5>
                  <p class="card-text">We bring you the best pricing plan for you</p>
                </div>
                <div class="col-lg-7 ">
                  <div class=" text-end p-3">
                  

                  <?php
                    $conn = $pdo->open();
                    try{
                      $stmt = $conn->prepare("SELECT * FROM subscriptions WHERE user_id=:user LIMIT 1");
                      $stmt->execute(['user'=>$agent['id']]);
                      foreach($stmt as $row){
                        echo "
                        <p id='hasSubs'>Subscription: <b>".$row['subs_name']."</b></p>
                        ";
                      }
                    }
                    catch(PDOException $e){
                      echo $e->getMessage();
                    }
                    $pdo->close();
                  ?>
                    <!--<figure class="p-3 mb-0">
                      <blockquote class="block quote">
                        <p>You are already Subscribed to a Monthly Subscription Plan</p>
                      </blockquote>
                       <figcaption class=" mb-0 text-muted">
                       Date:  <cite title="Source Title">Nov 18, 2022</cite>
                      </figcaption>
                    </figure> -->
                  </div>
                </div>
                  <div class="col-lg-12 mb-4 order-0">
                    <section class="pricing ">
                      <div class="container">
                        <div class="row">
                          <!-- Plus Tier -->
                          <div class="col-lg-3">
                            <div class="card mb-5 mb-lg-0">
                              <div class="card-body">
                                <h5 class="card-title text-muted text-uppercase text-center">Affiliate Starter</h5>
                                <h6 class="card-price text-center"><span class="period"> FREE </span></h6>
                                <hr>
                                <ul class="fa-ul">
                                  <li><span class="fa-li"><i class="fas fa-check"></i></span>For affiliate agents</li>
                                </ul>
                                <br><br><br><br><br><br>
                                <br>
                                <div class="d-grid">
                                <!-- <a href="#" class="btn btn-success text-uppercase" disabled>Select</a> -->
                                <!-- <button type="button" class="btn btn-success" disabled="">Disabled</button> -->
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-3">
                            <div class="card mb-5 mb-lg-0"><center class="btn-success">MOST POPULAR</center>
                              <div class="card-body border border-success">
                                <h5 class="card-title text-muted text-uppercase text-center"><b>Standard</b></h5>
                                <h6 class="card-price text-center">$99.00<span class="period"> / Month</span></h6>
                                <h6 class="card-price text-center"><del>$1,188.00<span class="period"> / Year *</span></del></h6>
                                <h6 class="card-price text-center"><b>$1,000.00<span class="period"> / Year</b></span></h6>
                                <hr>
                                <ul class="fa-ul">
                                  <li><span class="fa-li"><i class="fas fa-check"></i></span>For affiliate agents with portal access / higher referral commission</li>
                                </ul>
                                <div class="d-grid">
                                <a href="subscriptions_standard" class="sub_button btn btn-success text-uppercase"   >Select</a>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- Pro Tier -->
                          <div class="col-lg-3">
                            <div class="card">
                              <div class="card-body">
                                <h5 class="card-title text-muted text-uppercase text-center">Plus</h5>
                                <h6 class="card-price text-center">$299.00<span class="period"> / Month</span></h6>
                                <hr>
                                <ul class="fa-ul">
                                  <li><span class="fa-li"><i class="fas fa-check"></i></span> For affiliate agents with services ( Bookkeeping and Tax Services)</li>
                                  <br><br><br>
                                </ul>
                                <div class="d-grid">
                                <a href="subscriptions_plus" class="sub_button btn btn-success text-uppercase" >Select</a>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-3">
                            <div class="card mb-5 mb-lg-0">
                              <div class="card-body">
                                <h5 class="card-title text-muted text-uppercase text-center">Pro</h5>
                                <h6 class="card-price text-center">$599.00<span class="period"> / Month</span></h6>
                                <hr>
                                <ul class="fa-ul">
                                  <li><span class="fa-li"><i class="fas fa-check"></i></span>  For affiliate agents with services ( Bookkeeping , Personal credit repair and Tax Services)</li>
                                  <br>
                                </ul>
                                <div class="d-grid">
                                  <a href="subscriptions_pro" class="sub_button btn btn-success text-uppercase" >Select</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </section><br>
                      <center><p>For more options, Please contact us for pricing | <a href="contacts" class="btn btn-success btn-sm">Contact us</a></p></center>
                    <hr>
                  </div>
                </div>
                
            </div>

            <?php include 'includes/google_translate.php'; ?>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  <!-- ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script> -->
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
          <?php include 'includes/subscription_status.php'; ?>
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

    <script src="includes/jquery-1.9.1.min.js"></script>
    <script type="text/javascript">
      $( document ).ready(function() {
        if($("#hasSubs").length){
              //console.log( "visible!" );
              $('.sub_button').addClass('isDisabled');
              $('.sub_button').css('display', 'none');
        } else{
              //console.log( "hidden!" );
            // $('.sub_button').removeClass('isDisabled');
        }
      });
    </script> 
  </body>
</html>
