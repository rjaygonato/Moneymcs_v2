<!-- Modal -->
<div class="modal fade" id="clientModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalCenterTitle">Add Client</h5>
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
                <label for="firstname" class="form-label">First Name</label>
                  <input
                    type="text"
                    id="firstname"
                    class="form-control"
                    placeholder="Enter Name"
                  />
                  </div>
                  <div class="col mb-0">
                    <label for="lastname" class="form-label">Last Name</label>
                    <input
                      type="text"
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
                      id="email"
                      class="form-control"
                      placeholder="Enter Email"
                      />
                    </div>
                    <div class="col mb-0">
                      <label for="phonenum" class="form-label">Phone Number</label>
                      <input
                      type="text"
                      id="phonenum"
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
                          id="state"
                          aria-label="state"
                          >
                          <option selected>Choose...</option>
                          <option value="1">Alabama</option>
                          <option value="2">Arizona</option>
                          <option value="3">Arkansas</option>
                        </select>
                      </div>
                    </div>
                    <div class="col mb-0">
                      <label for="type" class="form-label">Type</label>
                      <div class="input-group">
                        <select
                        class="form-select"
                        id="type"
                        aria-label="type"
                        >
                        <option selected>Choose...</option>
                        <option value="1">Business Credit Builder</option>
                        <option value="2">Direct Funding</option>
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