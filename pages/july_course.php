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

    <title>MoneyMCS - Comission</title>

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

            <li class="menu-item ">
              <a href="subscriptions" class="menu-link">
                <i class='menu-icon tf-icons bx bx-list-ul'></i>
                <div data-i18n="Analytics">Subscription Plans</div>
              </a>
            </li>

            <!-- Layouts -->
            <li class="menu-item open active" style="">
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
                <li class="menu-item active">
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

            <!--<li class="menu-header small text-uppercase">
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
            </li>-->
           
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
                  MoneyMCS
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
                    <div class="col-lg-12 mb-4 order-0">
                        <div class="card">
                            <div class="card accordion-item active">
                            <h2 class="accordion-header" id="headingOne">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionOne" aria-expanded="true" aria-controls="accordionOne">
                                July Courses Available
                                </button>
                            </h2>

                            <!--<div id="accordionOne" class="accordion-collapsed collapse " data-bs-parent="#accordionExample">
                                <div class="accordion-body">\
                                </div>
                            </div>-->
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <?php
                    $conn = $pdo->open();

                    try{
                        $stmt = $conn->prepare("SELECT * FROM training_resources WHERE status=:status AND category=:category");
                        $stmt->execute(['status'=>1, 'category'=> 'July Courses']);
                        foreach($stmt as $row){

                        $status = ($row['status']) ? '<span class="badge rounded-pill bg-label-success">Active</span>' : '<span class="badge bg-label-secondary">Inactive</span>';
                        echo "
                          <div class='col-lg-8 mb-4 order-0'>
                              <div class='card'>
                                <img class='d-flex mx-auto my-4' height='300' src='../images/".$row['filenames']."' alt='' />
                                <div class='card-body'>
                                  <h3 class='card-title text-primary mb-4'>".$row['course_name']."</h3>
                                  <h5 class='card-subtitle mb-2'>Objective(s):</h5>
                                  <p class='card-text'>
                                    ".$row['description']."
                                  </p>
                                </div>
                              </div>
                          </div>
                          <div class='col-sm-4'>
                              <div class='card h-80'>
                                <div class='card-body'>
                                  <h3 class='card-title mb-5'><span class='text-primary fw-semibold'>Price:</span> <span class='fw-semibold'><u>$".$row['price']."</u></span></h3>
                                  <p class='text-center mb-5'>
                                  <a href='#' class='btn btn-success'>ENROLL NOW!</a>
                                  </p>
                                  <div class='card-text'>
                                      <h5 class='fw-semibold'>Course Features</h5>
                                      <div class='divider text-start text-wrap course-features'>
                                          ".$row['features']."
                                      </div>
                                      <hr>
                                  </div>
                                </div>
                              </div>
                          </div>
                        ";
                        }
                    }
                    catch(PDOException $e){
                        echo $e->getMessage();
                    }
                    $pdo->close();
                    ?>
                <!--
                    <div class="col">
                      <div class="card h-80">
                        <div class="card-body">
                          <h3 class="card-title mb-5"><span class="text-primary fw-semibold">Price:</span> <span class="fw-semibold"><u>$299.00</u></span></h3>
                          <p class="text-center mb-5">
                          <a href="" class="btn btn-success">ENROLL NOW!</a>
                          </p>
                          <div class="card-text">
                              <h5 class="fw-semibold">Course Features</h5>
                              <div class="divider text-start course-features">
                                  <i class="bx bx-plus text-primary"></i>
                                  <span class="fw-semibold">Includes:</span> Online system training
                              </div>
                              <hr>
                              <div class="divider text-start course-features">
                                  <i class='bx bx-time text-primary'></i>
                                  3 hours (online classes)
                              </div>
                              <hr>
                              <div class="divider text-start course-features">
                                  <i class='bx bxs-certification text-primary'></i>
                                  Certification Acceptance Agent
                              </div>
                              <hr>
                              <div class="divider text-start course-features">
                                  <i class='bx bxs-book text-primary'></i>
                                  <span class="fw-semibold">Book:</span>
                              </div>
                              <hr>
                              <div class="divider text-start course-features">
                                  <i class='bx bx-world text-primary'></i>
                                  <span class="fw-semibold">Language:</span>
                              </div>
                              <hr>
                          </div>
                        </div>
                      </div>
                    </div>
                    -->
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
