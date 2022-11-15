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
                  <a href="#" class="menu-link">
                    <div data-i18n="">Resource Page</div>
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
                <li class="menu-item active">
                  <a href="programs" class="menu-link">
                    <div data-i18n="">My Programs</div>
                  </a>
                </li>
                <li class="menu-item">
                    <a href="#" class="menu-link">
                    <div data-i18n="">Link Generator</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#" class="menu-link">
                    <div data-i18n="">Email Templates</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#" class="menu-link">
                    <div data-i18n="">Banners</div>
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
                <div data-i18n="Basic">Contact Us</div>
              </a>
            </li>

            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Reports
            </li>

            <li class="menu-item">
              <a href="" class="menu-link">
              <i class='menu-icon tf-icons bx bx-receipt'></i>
                <div data-i18n="Basic">Ledger</div>
              </a>
            </li>

            <li class="menu-item">
              <a href="" class="menu-link">
                <i class='menu-icon tf-icons bx bx-current-location'></i>
                <div data-i18n="Basic">Link Tracking Stats</div>
              </a>
            </li>

            <li class="menu-item">
              <a href="" class="menu-link">
                <i class='menu-icon tf-icons bx bx-money'></i>
                <div data-i18n="Basic">Commissions Generated</div>
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
                <?php include 'includes/subs_button.php'; ?>
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
                <div class="col-12">
                  <div class="nav-align-top mb-4">
                    <ul class="nav nav-pills mb-3" role="tablist">
                      <li class="nav-item">
                        <button
                          type="button"
                          class="nav-link active"
                          role="tab"
                          data-bs-toggle="tab"
                          data-bs-target="#navs-pills-top-welcome"
                          aria-controls="navs-pills-top-welcome"
                          aria-selected="true"
                        >
                          Welcome
                        </button>
                      </li>
                      <li class="nav-item">
                        <button
                          type="button"
                          class="nav-link"
                          role="tab"
                          data-bs-toggle="tab"
                          data-bs-target="#navs-pills-top-program"
                          aria-controls="navs-pills-top-program"
                          aria-selected="false"
                        >
                          My Programs
                        </button>
                      </li>
                      <li class="nav-item">
                        <button
                          type="button"
                          class="nav-link"
                          role="tab"
                          data-bs-toggle="tab"
                          data-bs-target="#navs-pills-top-linkgenerator"
                          aria-controls="navs-pills-top-linkgenerator"
                          aria-selected="false"
                        >
                          Link Generator
                        </button>
                      </li>
                      <li class="nav-item">
                        <button
                          type="button"
                          class="nav-link"
                          role="tab"
                          data-bs-toggle="tab"
                          data-bs-target="#navs-pills-top-emailtemplates"
                          aria-controls="navs-pills-top-emailtemplates"
                          aria-selected="false"
                        >
                          Email Templates
                        </button>
                      </li>
                      <li class="nav-item">
                        <button
                          type="button"
                          class="nav-link"
                          role="tab"
                          data-bs-toggle="tab"
                          data-bs-target="#navs-pills-top-banners"
                          aria-controls="navs-pills-top-banners"
                          aria-selected="false"
                        >
                          Banners
                        </button>
                      </li>
                      
                    </ul>
                    <div class="tab-content">
                      <div class="tab-pane fade show active" id="navs-pills-top-welcome" role="tabpanel">
                        <h2 class="mb-10 text-xl">Welcome to Affiliate Tracking Center!</h2>
                            <p>This is where you'll find all the tools you need to successfully promote our products. You can use the Tracking Tools links on the left menu to check your stats and view your commissions.</p>

                            <p>The Marketing Tools give you ad copy, buttons, banners and other promotional materials so you don't have to do any thinking. Just copy and paste... and start watching the commissions pile up.</p>
                            
                            <p class="mb-0">If you have questions about our Referral Partner Program or if you run into a snag, please don't hesitate to contact us.</p>
                      </div>
                      <div class="tab-pane fade" id="navs-pills-top-program" role="tabpanel">
                        <p>
                          Programs
                        </p>
                      </div>
                      <div class="tab-pane fade" id="navs-pills-top-linkgenerator" role="tabpanel">
                          <p>The link generator allows you to generate tracking links you can use in your 
                             marketing efforts so that you receive credit for leads that are generated and orders
                             that are placed. You can quickly access any of your own tracking links by copying them
                             from the "My Sales Websites" section. If you want to create a tracking link for one of
                             your sub-referral partners, or if you want to create an Ad for tracking purposes and insert
                             the code into a tracking link, you will need to use the link generator tool at the bottom of the screen.
                          </p>
                        <!-- Basic Bootstrap Table -->
                          <div class="card">
                            <div class="table-responsive text-nowrap">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th>Name</th>
                                    <th>Code</th>
                                    <th>Website</th>
                                  </tr>
                                </thead>
                                <tbody class="table-border-bottom-0 col-12">
                                  <tr>
                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?php echo $agent['firstname'].' '.$agent['lastname']; ?></strong></td>
                                    <td><?php echo $agent['regcode']; ?></td>
                                    <td class=" input-group">
                                      <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="buttonrefcode" value="http://joinmoneymcs.com/createref.php?referral=<?php echo $agent['regcode']; ?>" id="myrefCode">
                                      <button class="btn btn-outline-secondary" type="button" id="buttonrefcode"  data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="" data-bs-original-title="<span id='myTooltip'>Copy to Clipboard</span>"><i class='bx bx-copy-alt' onclick="copyClip()" onmouseout="outFunc()"></i></button>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        <!--/ Basic Bootstrap Table -->
                      </div>
                      <div class="tab-pane fade" id="navs-pills-top-emailtemplates" role="tabpanel">
                        <p>
                          Below are emails you can use in your marketing. When you find one you want to use, 
                          select the applicable Referral Partner, redirect, and ad that you want to track and 
                          click the button to generate the email with the appropriate tracking link.
                        </p>
                        <p class="mb-0">
                          After you have generated the email, you can copy and paste it into your email client 
                          to send to your prospects.
                        </p>
                        <br>
                        <!-- Button ModalScrollable -->
                        <button
                          type="button"
                          class="btn btn-primary"
                          data-bs-toggle="modal"
                          data-bs-target="#modalScrollable"
                        >
                          Generate Email
                        </button>
                        <div class="modal fade" id="modalScrollable" tabindex="-1" aria-hidden="true">
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
                              <p>Subject: [contact first name] I want you at this webinar</p>

                              <p>Hey [INSERT CONTACT FIRST NAME],</p>
                              <p>
                                Do you own a business or have you been thinking about starting a business?
                                If so, would you be interested in getting money and building business credit for your business?
                                Give me a call today so I can talk with you more about how to get money for your business.
                              </p>
                              <p>Thank you,</p>
                              <p>[INSERT SIGNATURE]</p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                Close
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                      </div>
                      <div class="tab-pane fade" id="navs-pills-top-banners" role="tabpanel">
                        <p>
                          Banners
                        </p>
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
