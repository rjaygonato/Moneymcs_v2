<!-- Modal -->
<div class="modal fade" id="addclient" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalCenterTitle">New Client</h5>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"
          ></button>
          </div>
          <form id="client_add" action="client_add" method="POST">
          <div class="modal-body">  
          <div class="row g-2 mb-3">
              <div class="col mb-0">
                <label for="company_name" class="form-label">Company Name</label>
                  <input
                    type="text"
                    id="company_name"
                    name="company_name"
                    class="form-control"
                    placeholder="Enter Company Name"
                  />
                  </div>
                </div>                  
            <div class="row g-2 mb-3">
              <div class="col mb-0">
                <label for="firstname" class="form-label">First Name</label>
                  <input
                    type="text"
                    id="firstname"
                    name="firstname"
                    class="form-control"
                    placeholder="Enter Name"
                  />
                  </div>
                  <div class="col mb-0">
                    <label for="lastname" class="form-label">Last Name</label>
                    <input
                      type="text"
                      name="lastname"
                      id="lastname"
                      class="form-control"
                      placeholder="Enter Name"
                    />
                  </div>
                </div>
                <div class="row g-2 mb-3">
                  <div class="col mb-0">
                    <label for="email" class="form-label">Email</label>
                    <input 
                      type="text"
                      name="email"
                      id="email"
                      class="form-control"
                      placeholder="Enter Email"
                      />
                    </div>
                    <div class="col mb-0">
                      <label for="phonenum" class="form-label">Phone Number</label>
                      <input
                      type="text"
                      name="phonenum"
                      id="phonenum"
                      class="form-control"
                      placeholder="Enter Phone Number"
                      />
                    </div>
                    
                  </div>
                  <div class="row g-1 mb-3">
                  <!-- <label for="paid_user"class="form-label">Paid</label> -->
                  <!-- <div class="form-check ">
                            <input
                              name="paid_user"
                              class="form-check-input"
                              type="radio"
                              value="1"
                              id="paid_yes"
                            />
                            <label class="form-check-label" for="paid_yes"> Yes </label>
                          </div>
                          <div class="form-check">
                            <input
                              name="paid_user"
                              class="form-check-input"
                              type="radio"
                              value="0"
                              id="paid_no"
                            />
                            <label class="form-check-label" for="paid_no"> No </label>
                          </div>
                  </div> -->
                  <div class="mb-3">
                        <label for="date_joined" class="col-md-2 col-form-label">Date</label>
                        <div class="col">
                          <input class="form-control" name="date_joined " type="date" value="" id="date_joined" />
                        </div>
                      </div>
                  <div class="row g-2">
                    <div class="col mb-0">
                      <label for="email" class="form-label">State</label>
                      <div class="input-group">
                        <select
                          class="form-select"
                          name="state"
                          id="state"
                          aria-label="state"
                          >
                          <option selected>Choose...</option>
                          <option value="Alabama">Alabama</option>
                          <option value="Arizona">Arizona</option>
                          <option value="Arkansas">Arkansas</option>
                        </select>
                      </div>
                    </div>
                    <div class="col mb-0">
                      <label for="type" class="form-label">Type</label>
                      <div class="input-group">
                        <select
                        class="form-select"
                        name="type"
                        id="type"
                        aria-label="type"
                        >
                        <option selected>Choose...</option>
                        <option value="Business Credit Builder">Business Credit Builder</option>
                        <option value="Direct Funding">Direct Funding</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                  Close
                </button>
                <button class="btn btn-success" name="add" type="submit">Add</button>
              </div>
            </div>
          </div>
          </form>
        </div>
                    
<!-- End  of Modal -->