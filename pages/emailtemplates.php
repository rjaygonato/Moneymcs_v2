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

            <li class="menu-item open active">
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
                <li class="menu-item active">
                    <a href="emailtemplates" class="menu-link">
                    <div data-i18n="">Email Templates</div>
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
                  <div class="col-lg-12 mb-4 order-0">
                    <div class="card">
                      <div class="card accordion-item active">
                        <h2 class="accordion-header" id="headingOne">
                          <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionOne" aria-expanded="true" aria-controls="accordionOne">
                            Email Templates
                          </button>
                        </h2>

                        <div id="accordionOne" class="accordion-collapsed collapse " data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            Below are emails you can use in your marketing. When you find one you want to use, 
                            select the applicable Referral Partner, redirect, and ad that you want to track and 
                            click the button to generate the email with the appropriate tracking link.</p>
                            <p class="card-text">After you have generated the email, you can copy and paste it into your email client 
                            to send to your prospects.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12 mb-4 order-0">
                    <div class="card">
                      <div class="d-flex align-items-end">
                        <div class="col-sm-12">
                          <div class="card-body">
                            <h5 class="card-title text-primary">Templates</h5>
                            <div class="table-responsive text-nowrap">
                              <table id="" class="table table-borderless">
                                <thead>
                                  <th>Type</th>
                                  <th>Sender</th>
                                  <th>Receiver</th>
                                  <th>Link</th>
                                </thead>
                                <tbody>
                                <form class="" method="" action="#">
                                    <tr>
                                        <td>
                                        <select class="form-=select" name="">
                                            <option value="0">--Select Category--</option>
                                            <option value="Engaging Template">Engaging Template</option>
                                        </select>
                                        </td>
                                        <td><?php echo $agent['firstname'].' '.$agent['lastname']; ?></td>
                                        <td>
                                        <select class="form-=select" name="">
                                            <option value="0">--Select Client--</option>
                                            <?php
                                              $conn = $pdo->open();
                                              $stmt = $conn->prepare("SELECT * FROM clients WHERE status =:status");
                                              $stmt->execute(['status'=>1]);
                                              foreach($stmt as $crow){
                                                echo "
                                                  <option value='".$crow['email']."'>".$crow['email']."</option>
                                                ";
                                              }
                                              $pdo->close();
                                            ?>
                                        </select>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalScrollable">Generate Email</button>
                                        </td>
                                    </tr>
                                </form>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="modalScrollable" tabindex="-1" aria-hidden="true" data-bs-backdrop="static">
                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalScrollableTitle">Email Template</h5>
                                <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"
                                ></button>
                            </div>
                            <div class="modal-body">
                                <p>Subject: Light at the end of the tunnel</p>
                                <form>
                                <textarea rows="30" class="form-control" scalable=no>You’re receiving this email because you requested information about business funding and business credit.
                                
Dear [name]:
In our experience, many companies and business owners struggle to get the money they need and want to grow and become successful.

Maybe you’ve tried to get a business loan or business credit from a bank. Banks are notoriously difficult when it comes to business lending.

Fortunately, there are thousands of lenders out there that want and need to lend to small businesses.

Two things need to happen. First … you must set up your business correctly so you’re attractive to lenders. Second, you need access to the lenders we just mentioned.

If you want these two things to happen, simply reply to this email or call us right now at (702) 930-3131.

We’ll have a confidential conversation about your goals. And we’ll show you how to get the funding and credit you need and want.


To your success …


[INSERT SIGNATURE]
                                </textarea>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-success" data-bs-dismiss="modal">
                                Send Email
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Modal-->
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
     <!--<?php include 'includes/light_datascript.php'; ?>-->
  </body>
</html>
