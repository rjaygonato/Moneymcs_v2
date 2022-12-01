<!-- View -->

<!-- Modal -->
<div class="modal fade" id="addpayment_method" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalCenterTitle">New Payment Method</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
          <form id="" action="payment_add" method="POST">
          <div class="modal-body">  
          <div class="row ">
            <div class="col-lg-6">
                <div class="divider">
                  <div class="divider-text">Billing Information</div>
                </div>
                <div class="row g-2 mb-3">
                  <div class="mb-3 row">
                    <label class="col-md-3 col-form-label">Firstname</label>
                    <div class="col-md-8">
                      <input class="form-control" type="text" name="firstname" id="" >
                    </div>
                  </div>
                </div>  
                <div class="row g-2 mb-3">
                  <div class="mb-3 row">
                    <label class="col-md-3 col-form-label">Lastname</label>
                    <div class="col-md-8">
                      <input class="form-control" type="text" name="lastname" id="" >
                    </div>
                  </div>
                </div> 
                <div class="row g-2 mb-3">
                  <div class="mb-3 row">
                    <label class="col-md-3 col-form-label">Phone Number</label>
                    <div class="col-md-8">
                      <input class="form-control" type="text" name="contact" id="" >
                    </div>
                  </div>
                </div>
                <div class="row g-2 mb-3">
                  <div class="mb-3 row">
                    <label class="col-md-3 col-form-label">Country/Region</label>
                    <div class="col-md-8">
                      <input class="form-control" type="text" name="country" id="" >
                    </div>
                  </div>
                </div>  
                <div class="row g-2 mb-3">
                  <div class="mb-3 row">
                    <label class="col-md-3 col-form-label">Address</label>
                    <div class="col-md-8">
                      <input class="form-control" type="text" name="address" id="" >
                    </div>
                  </div>
                </div> 
                <div class="row g-2 mb-3">
                  <div class="mb-3 row">
                    <label class="col-md-3 col-form-label">Postal Code</label>
                    <div class="col-md-8">
                      <input class="form-control" type="text" name="postal" id="" >
                    </div>
                  </div>
                </div>  
                <div class="row g-2 mb-3">
                  <div class="mb-3 row">
                    <label class="col-md-3 col-form-label">Province</label>
                    <div class="col-md-8">
                      <input class="form-control" type="text" name="province" id="" >
                    </div>
                  </div>
                </div>  
                <div class="row g-2 mb-3">
                  <div class="mb-3 row">
                    <label class="col-md-3 col-form-label">City</label>
                    <div class="col-md-8">
                      <input class="form-control" type="text" name="city" id="" >
                    </div>
                  </div>
                </div>    
                <div class="row g-2 mb-3">
                  <div class="mb-3 row">
                    <label class="col-md-3 col-form-label">Organization</label>
                    <div class="col-md-8">
                      <input class="form-control" type="text" name="organization" id="" >
                    </div>
                  </div>
                </div>   
                <div class="row g-2 mb-3">
                  <div class="mb-3 row">
                    <label class="col-md-3 col-form-label">Tax Id</label>
                    <div class="col-md-8">
                      <input class="form-control" type="text" name="tax_id" id="" >
                    </div>
                  </div>
                </div>   
              </div> 

              <div class="col-lg-6">
                <div class="divider">
                  <div class="divider-text">Card information</div>
                </div>
                <div class="row g-2 mb-3">
                  <div class="mb-3 row">
                    <label class="col-md-3 col-form-label">Card Number</label>
                    <div class="col-md-8">
                      <input class="form-control" type="text" name="card_num" id="" >
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label class="col-md-3 col-form-label">Expiration Date</label>
                    <div class="col-md-8">
                      <input class="form-control" placeholder="Month" type="text" name="exp_date_month" id="" >
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label class="col-md-3 col-form-label">&nbsp;</label>
                    <div class="col-md-8">
                      <input class="form-control" placeholder="Year" type="text" name="exp_date_year" id="" >
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label class="col-md-3 col-form-label">Security Code</label>
                    <div class="col-md-8">
                      <input class="form-control" type="text" name="sec_code" id="" >
                    </div>
                  </div>
                </div> 
              </div> 
          </div>
              
            <div class="row ">
              <div class="modal-footer">
                <button class="btn btn-success" name="add_paymentmethod" type="submit">Save</button>
              </div>
            </div>
          </div>
          </form>
        </div>
                    
<!-- End  of Modal -->