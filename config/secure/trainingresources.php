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
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>MoneyMCS</title>

    <meta name="description" content="" />
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
 
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />

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

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item ">
              <a href="cpanel" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="">Dashboard</div>
              </a>
            </li>

            <!-- Layouts -->
            <!-- <li class="menu-item">
              <a href="files" class="menu-link">
                <i class='menu-icon tf-icons bx bx-book-reader'></i>
                <div data-i18n="Basic">Resources</div>
              </a>
            </li> -->
            <li class="menu-item active open" style="">
              <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-copy"></i>
                <div data-i18n="">Resource Library</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item ">
                  <a href="categories" class="menu-link">
                    <div data-i18n="">Categories</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="resources" class="menu-link">
                    <div data-i18n="">Resources</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="banner" class="menu-link">
                    <div data-i18n="">Banner</div>
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
              <a href="accounts" class="menu-link">
              <i class='menu-icon tf-icons bx bxs-user-badge'></i>
                <div data-i18n="">Accounts</div>
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
                  MoneyMCS Control Panel
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
                        <img src="<?php echo (!empty($super['photo'])) ? '../images/'.$super['photo'] : '../images/default.png'; ?>" class="w-px-40 h-auto rounded-circle">
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <!--   <img src="<?php echo (!empty($super['photo'])) ? '../images/'.$super['photo'] : '../images/default.png'; ?>" class="w-px-40 h-auto rounded-circle"> -->
                              <img src="<?php echo (!empty($super['photo'])) ? '../images/'.$super['photo'] : '../images/default.png'; ?>" class="w-px-40 h-auto rounded-circle">
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block"><?php echo $super['firstname'].' '.$super['lastname']; ?></span>
                            <small class="text-muted"><?php echo $super['level']; ?></small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">Profile</span>
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
                  <div class="card">
                  <!-- <h5 class="card-header">Resource Categories</h5> -->
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0">Training Resources</h5>
                      <!-- <small class="text-muted float-end">Default label</small> -->
                      <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#addtrainingmodal">
                          Add New
                        </button>
                    </div>

                    <div class="table-responsive text-nowrap">
                      <table id="" class="table table-fixed table-bordered">
                        <thead>
                          <th>Course Name</th>
                          <th>Category</th>
                          <th>Description</th>
                          <th>Features</th>
                          <th>Price</th>
                          <th>Status</th>
                          <th>Actions</th>
                        </thead>
                        <tbody>
                          <?php
                            $conn = $pdo->open();

                            try{
                              $stmt = $conn->prepare("SELECT * FROM training_resources WHERE status=:status");

                              $stmt->execute(['status'=>1]);

                              foreach($stmt as $row){

                                $status = ($row['status']) ? '<span class="badge rounded-pill bg-label-success">Active</span>' : '<span class="badge bg-label-secondary">Inactive</span>';
                                echo "
                                  <tr>
                                    <td>".$row['course_name']."</td>
                                    <td>".$row['category']."</td>
                                    <td class='col-md-3'>".$row['description']."</td>
                                    <td class='col-md-3'>".$row['features']."</td>
                                    <td>".$row['price']."</td>
                                    <td>".$row['filenames']."</td>
                                    <td>".$status."</td>
                                    <td>
                                      <button class='btn btn-outline-success btn-sm editcourse' data-id='".$row['id']."'><i class='fa fa-edit'></i> Edit Course</button>
                                      <button class='btn btn-outline-danger btn-sm deletecourse' data-id='".$row['id']."'><i class='fa fa-trash'></i> Delete</button>
                                    </td>
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
                <?php include '../includes/custom_footer.php'; ?>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
        <?php include 'includes/training_resources_modal.php'; ?>
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->
  
    
  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  <script src="../assets/vendor/libs/jquery/jquery.js"></script>
  <script src="../assets/vendor/libs/popper/popper.js"></script>
  <script src="../assets/vendor/js/bootstrap.js"></script>
  <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

  <script src="../assets/vendor/js/menu.js"></script>
  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

  <!-- Main JS -->
  <script src="../assets/js/main.js"></script>

  <!-- Page JS -->
  <script src="../assets/js/dashboards-analytics.js"></script>

  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <?php include 'includes/light_datascript.php'; ?>

  <script>
    $(function(){
      $(document).on('click', '.editcourse', function(e){
        e.preventDefault();
        $('#editcourse').modal('show');
        var id = $(this).data('id');
        getRow(id);

        //console.log(id);
      });

      $(document).on('click', '.deletecourse', function(e){
        e.preventDefault();
        $('#deletecourse').modal('show');
        var id = $(this).data('id');
        getRow(id);
       // console.log(id);
      });

    });

    function getRow(id){
      $.ajax({
        type: 'POST',
        url: 'resource_row.php',
        data: {id:id},
        dataType: 'json',
        success: function(response){
          $('.resid').val(response.id);
          $('#editreso').val(response.resources);
          $('#editcats').val(response.category);
          $('#type').val(response.type);
          $('#editfile').val(response.filenames);

          $('.resource').html(response);
          //console.log(response);
        }
      });
    }
  </script>
  </body>
</html>
