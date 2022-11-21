
<!---monthly--->
<div class="modal fade" id="notSubs" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel2">Pay with Paypal</h5>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      <div class="modal-body">
        <!-- <center><img src="../assets/img/earnmoney.png" width="100" alt=""></center> -->
        
          <!-- <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
            <option value="99"></option>
            
              <option value="1,188">$ 1,188 Yearly Membership</option> 
          </select> -->Standard Monthly Membership 
          <!-- $<input class="form-control" type="text"  name="" /> -->

          <div class="input-group input-group-merge">
            <span class="input-group-text">$</span>
            <input type="text" class="form-control" id="t_amount" name="total" placeholder="100" value="99.00" aria-label="Amount (to the nearest dollar)">
            <!-- <span class="input-group-text">.00</span> -->
          </div>
          
          <br>
          <div id="smart-button-container">
            <div style="text-align: center;">
              <div id="paypal-button-container"></div>
            </div>
          </div><hr>
          <!-- <h5> Become a referral agent today! </h5> -->
        <!-- <h6>
          Start receiving commissions by inviting other agents to become a part of the affiliate program and by delivering potential clients to us!</h6> -->

          <form id="myForm" action="subs" method="POST">
            <input type="hidden" id="sub_type" name="subs_name" value="Standard Monthly Subscription"/>
            <input type="hidden" name="usersid" id="user" value="<?php echo $agent['id']; ?>" />
            <input type="hidden" id="transactid" name="trans_id" />
            <input type="hidden" name="date" />
            <input type="hidden" name="totalp" id="totalp" />
            <!-- <input style="" type="submit" name="autosave"> -->
            <button style="display: none" name="autosave" type="submit">Sign in</button>
          </form>
      </div>
      
    </div>
  </div>
</div>


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
        <!-- <center><img src="../assets/img/earnmoney.png" width="100" alt=""></center> -->
        
          <!-- <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
            <option value="99"></option>
            
              <option value="1,188">$ 1,188 Yearly Membership</option> 
          </select> --> Monthly Membership - Basic
          <!-- $<input class="form-control" type="text"  name="" /> -->

          <div class="input-group input-group-merge">
            <span class="input-group-text">$</span>
            <input type="text" class="form-control" id="t_amount" name="total" placeholder="100" value="99.00" aria-label="Amount (to the nearest dollar)">
            <!-- <span class="input-group-text">.00</span> -->
          </div>
          
          <br>
          <div id="smart-button-container">
            <div style="text-align: center;">
              <div id="paypal-button-container"></div>
            </div>
          </div><hr>
          <h5> Become a referral agent today! </h5>
        <h6>
          Start receiving commissions by inviting other agents to become a part of the affiliate program and by delivering potential clients to us!</h6>

          <form id="myForm" action="subs" method="POST">
            <input type="hidden" name="usersid" id="user" value="<?php echo $agent['id']; ?>" />
            <input type="hidden" id="transactid" name="trans_id" />
            <input type="hidden" name="date" />
            <input type="hidden" name="totalp" id="totalp" />
            <!-- <input style="" type="submit" name="autosave"> -->
            <button style="display: none" name="autosave" type="submit">Sign in</button>
          </form>
      </div>
      
    </div>
  </div>
</div>

<!---yearly--->

<div class="modal fade" id="yearsubs" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel2">Pay with Paypal</h5>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      <div class="modal-body">
        <!-- <center><img src="../assets/img/earnmoney.png" width="100" alt=""></center> -->
        
          <!-- <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
            <option value="99"></option>
            
              <option value="1,188">$ 1,188 Yearly Membership</option> 
          </select> --> Standard Yearly Membership
          <!-- $<input class="form-control" type="text"  name="" /> -->

          <div class="input-group input-group-merge">
            <span class="input-group-text">$</span>
            <input type="text" class="form-control" id="t_amounty" name="total" placeholder="100" value="1000.00" aria-label="Amount (to the nearest dollar)">
            <!-- <span class="input-group-text">.00</span> -->
          </div>
          
          <br>
          <div id="smart-button-container">
            <div style="text-align: center;">
              <div id="paypal-button-containeryear"></div>
            </div>
          </div><hr>
          <!-- <h5> Become a referral agent today! </h5> -->
        <!-- <h6>
          Start receiving commissions by inviting other agents to become a part of the affiliate program and by delivering potential clients to us!</h6> -->

          <form id="myForm" action="subs" method="POST">
            <input type="hidden" id="suby_type" name="subs_name" value="Standard Yearly Subscription"/>
            <input type="hidden" name="usersid" id="user" value="<?php echo $agent['id']; ?>" />
            <input type="hidden" id="transactid" name="trans_id" />
            <input type="hidden" name="date" />
            <input type="hidden" name="totalp" id="totalp" />

            <!-- <input style="" type="submit" name="autosave"> -->
            <button style="display: none" name="autosave" type="submit">Sign in</button>
          </form>
      </div>
      
    </div>
  </div>
</div>