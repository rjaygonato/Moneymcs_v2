<!-- Modal -->
<div class="modal fade" id="editClient" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editClient">Edit Client</h5>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"
          ></button>
          </div>
          
          <form id="client_edit" action="client_edit" method="POST">
          <div class="modal-body">  
          <input type="hidden" name="update_id" id="update_id" value="0"/>                   
            <div class="row g-2 mb-3">
              <div class="col mb-0">
                <label for="firstname" class="form-label">First Name</label>
                  <input
                    type="text"
                    name="firstname"
                    id="firstnameE"
                    class="form-control"
                    placeholder="Enter Name"
             
                  />
                  </div>
                  <div class="col mb-0">
                    <label for="lastname" class="form-label">Last Name</label>
                    <input
                      type="text"
                      name="lastname"
                      id="lastnameE"
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
                      id="emailE"
                      class="form-control"
                      placeholder="Enter Email"
                      />
                    </div>
                    <div class="col mb-0">
                      <label for="phonenum" class="form-label">Phone Number</label>
                      <input
                      type="text"
                      name="phonenum"
                      id="phonenumE"
                      class="form-control"
                      placeholder="Enter Phone Number"
                      />
                    </div>
                  </div>
                  <div class="row g-2">
                    <div class="col mb-0">
                      <label for="email" class="form-label">State</label>
                      <div class="input-group">
                        <select
                          class="form-select"
                          name="state"
                          id="stateE"
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
                        id="typeE"
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
                <button class="btn btn-success" name="edit" type="submit">Edit</button>
              </div>
            </div>
          </div>
          </form>
        </div>
                    
<!-- End  of Modal -->