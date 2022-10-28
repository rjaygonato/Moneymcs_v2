
<!-- Small Modal -->
<div class="modal fade" id="smallModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel2">Subscription</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <!-- <center><img src="../assets/img/logolarge.png" width="100" alt=""></center> -->
            Select Subscribe Plan<br>
              <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                <option value="99">$ 99 Monthly Membership - Basic</option>
                <!-- <option value="1,188">$ 1,188 Yearly Membership</option> -->
              </select><br>
              <div id="smart-button-container">
                <div style="text-align: center;">
                  <div id="paypal-button-container"></div>
                </div>
              </div><hr>
              <h5> Become a referral agent today! </h5>
            <h6>
              Start receiving commissions by inviting other agents to become a part of the affiliate program and by delivering potential clients to us!</h6>

              <form id="myForm" action="subs" method="POST">
                <input type="hidden" name="usersid" id="user" value="<?php echo $admin['id']; ?>" />
                <input type="hidden" id="transactid" name="trans_id" />
                <input type="hidden" name="date" />
                <!-- <input type="hidden" name="subs_name" value="" /> -->
                <!-- <input style="" type="submit" name="autosave"> -->
                <button style="display: none" name="autosave" type="submit">Sign in</button>
              </form>
          </div>
          
        </div>
      </div>
    </div>