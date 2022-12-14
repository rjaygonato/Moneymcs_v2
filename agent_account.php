<?php 
  include 'includes/session.php';
?>

<?php
	if(!isset($_SESSION['free_user'])){
		header('location: index');
	}
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
  data-assets-path="./assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>MoneyMCS - Agent Account</title>

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

    <link rel="stylesheet" href="./assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Date Picker -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />
    <!--Date Picker -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery/1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    

    <!-- Helpers -->
    <script src="./assets/vendor/js/helpers.js"></script>
    <script src="./assets/js/config.js"></script>
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
                <img aria-hidden="true" class="object-contain w-full h-full" src="./assets/img/earnmoney.png" width="50">
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
              <a href="agent_account" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Home</div>
              </a>
            </li>

            <li class="menu-item ">
              <a href="agent_subscription" class="menu-link">
                <i class='menu-icon tf-icons bx bx-list-check'></i>
                <div data-i18n="Analytics">Subscription Plans</div>
              </a>
            </li>

            <li class="menu-item ">
              <a href="agent_linkgen" class="menu-link">
                <i class='menu-icon tf-icons bx bx-link'></i>
                <div data-i18n="Analytics">Link Generator</div>
              </a>
            </li>

            <!-- <li class="menu-item ">
              <a href="agent_report" class="menu-link">
                <i class='menu-icon tf-icons bx bxs-book-content'></i>
                <div data-i18n="Analytics">Reports</div>
              </a>
            </li> -->
            <li class="menu-item" style="">
              <a href="javascript:void(0)" class="menu-link menu-toggle">
              <i class='menu-icon tf-icons bx bxs-book-content'></i>
                <div data-i18n="">Reports </div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="agent_ledger" class="menu-link">
                    <div data-i18n="">Ledger</div>
                  </a>
                </li>
                <li class="menu-item">
                    <a href="agent_linktracks" class="menu-link">
                    <div data-i18n="">Link Tracking Stats</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="agent_commgen" class="menu-link">
                    <div data-i18n="">Commissions Generated</div>
                    </a>
                </li>
              </ul>
            </li>
            <li>
              <div class="dropdown-divider"></div>
            </li>
            <li class="menu-item ">
              <a href="logout" class="menu-link">
                <!-- <i class='menu-icon tf-icons bx bx-link'></i> -->
                <i class="bx bx-power-off me-2"></i>
                <div data-i18n="Analytics">Logout</div>
              </a>
            </li>


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
                  Money MCS - Free Account
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
                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                        <img src="<?php echo (!empty($free_user['photo'])) ? './images/'.$free_user['photo'] : './images/default.png'; ?>" class="w-px-40 h-auto rounded-circle">
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                                <img src="<?php echo (!empty($free_user['photo'])) ? './images/'.$free_user['photo'] : './images/default.png'; ?>" class="w-px-40 h-auto rounded-circle">
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block"><?php echo $free_user['firstname'].' '.$free_user['lastname']; ?></span>
                            <small class="text-muted"><?php echo $free_user['level']; ?></small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <!-- <li>
                      <a class="dropdown-item" href="agent_profile">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">Profile</span>
                      </a>
                    </li> -->
                    <!-- <li>
                      <div class="dropdown-divider"></div>
                    </li> -->
                    <!-- <li>
                      <a class="dropdown-item" href="logout.php">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li> -->
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
              <div class="alert alert-dark alert-dismissible" role="alert"> <i class='bx bxs-error-circle' ></i> Check out our awesome subscription plans | 
                <a href="agent_subscription">View Available Plans</a>  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div> 
              <div class="row">
                <div class="col-lg-4 mb-4 order-0">
                  <div class="card">
                    <div class="d-flex row">
                      <div class="col-sm-8">
                        <div class="card-body">
                          <h5 class="card-title text-primary">Link usage last 30 days</h5>
                          <p class="mb-2">
                            <h5>0</h5>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 mb-4 order-0">
                  <div class="card">
                    <div class="d-flex row">
                      <div class="col-sm-9">
                        <div class="card-body">
                          <h5 class="card-title text-primary">Commission last 30 days</h5>
                          <p class="mb-2">
                            <h5>0</h5>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 order-1">
                  <div class="row">
                  <div class="col-lg-6 col-md-12 col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <h5 class="card-title text-primary">Clients</h5>
                          <p class="mb-2">
                            <h5>
                            <?php
                              $conn = $pdo->open();
                                try{
                                  $sql = "SELECT count(*) FROM `clients`   "; 
                                  $result = $conn->prepare($sql); 
                                  $result->execute([]); 
                                  $number_of_rows = $result->fetchColumn(); 
                                  echo "<h3 style='color: #137204; '>$number_of_rows</h3>"  ;
                                
                                }
                                catch(PDOException $e){
                                  echo $e->getMessage();
                                }
                                $pdo->close();
                              ?>
                            </h5>
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <h5 class="card-title text-primary">Downlines</h5>
                          <p class="mb-2">
                            <h5>
                            <?php
                              $conn = $pdo->open();
                                try{
                                  $sql = "SELECT count(*) FROM `refer_user` WHERE refid=:user_id "; 
                                  $result = $conn->prepare($sql); 
                                  $result->execute(['user_id'=>$free_user['id']]); 
                                  $number_of_rows = $result->fetchColumn(); 
                                  echo "<h3 style='color: #137204; '>$number_of_rows</h3>"  ;
                                
                                }
                                catch(PDOException $e){
                                  echo $e->getMessage();
                                }
                                $pdo->close();
                              ?>
                            </h5>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 mb-4 order-0">
                  <div class="card">
                    <h5 class="card-header text-primary">Recent Downlines</h5>
                    <div class="table-responsive ">
                      <table id="" class="table">
                        <thead>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Date Signed up</th> 
                          <th>Referral Link</th> 
                        </thead>
                        <tbody>
                        <?php
                            $conn = $pdo->open();

                            try{
                              $stmt = $conn->prepare("SELECT * FROM refer_user WHERE status=:status AND refid=:user_id ORDER BY date_added DESC");
                              $stmt->execute(['status'=>1,'user_id'=>$free_user['id']]);
                              foreach($stmt as $row){

                                $status = ($row['status']) ? '<span class="badge rounded-pill bg-label-success">Active</span>' : '<span class="badge bg-label-secondary">Inactive</span>';
                                echo "
                                  <tr>
                                    <td>".$row['firstname']."".$row['firstname']."</td>
                                    <td>".$row['email']."</td>
                                    <td>".date('F d, Y', strtotime($row["date_added"]))."</td>
                                    <td id='referralLink'>".$row['reflink']."</td>
                                  </tr>
                                ";
                              }
                            }
                            catch(PDOException $e){
                              echo $e->getMessage();
                            }
                            $pdo->close();
                          ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 mb-4 order-0">
                  <div class="card">
                    <h5 class="card-header text-primary">Recent Clients</h5>
                    <div class="table-responsive ">
                      <table id="" class="table">
                        <thead>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Date Added</th> 
                         
                        </thead>
                        <tbody>
                        <?php
                            $conn = $pdo->open();

                            try{
                              $stmt = $conn->prepare("SELECT * FROM clients WHERE status=:status ORDER BY date_join DESC");
                              $stmt->execute(['status'=>1]);
                              foreach($stmt as $row){

                                $status = ($row['status']) ? '<span class="badge rounded-pill bg-label-success">Active</span>' : '<span class="badge bg-label-secondary">Inactive</span>';
                                echo "
                                  <tr>
                                    <td>".$row['firstname']."".$row['firstname']."</td>
                                    <td>".$row['email']."</td>
                                    <td>".date('F d, Y', strtotime($row["date_join"]))."</td>
                                    
                                  </tr>
                                ";
                              }
                            }
                            catch(PDOException $e){
                              echo $e->getMessage();
                            }
                            $pdo->close();
                          ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <?php include './pages/includes/google_translate.php'; ?>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  <!-- ??
                  <script>
                    document.write(new Date().getFullYear());
                  </script> -->
                  <!-- , made with ?????? by -->
                  <!-- <a href="#" target="_blank" class="footer-link fw-bolder"></a> -->
                </div>
                <?php include './pages/includes/custom_footer.php'; ?>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
    </div>
    <!-- / Layout wrapper -->
    <?php include './pages/includes/footer_links.php'; ?>
    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="./assets/vendor/libs/jquery/jquery.js"></script>
    <script src="./assets/vendor/libs/popper/popper.js"></script>
    <script src="./assets/vendor/js/bootstrap.js"></script>
    <script src="./assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="./assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="./assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="./assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="./assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <?php include 'includes/light_datascript.php'; ?>
  </body>
</html>
                            