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