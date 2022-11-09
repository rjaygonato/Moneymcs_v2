<!-- Modal -->
<div class="modal fade" id="deleteClient" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteClient">Delete Client</h5>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"
          ></button>
          </div>
          
          <form id="client_delete" action="client_delete" method="POST">
          <div class="modal-body">  
            <input type="hidden" name="delete_id" id="delete_id" value="0"/>                   
            
            <p class="mb-4">Are you sure you want to delete the client <a class="fw-bold" id="clientName"></a>?</p>
            
            

          </div>
          
              <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                  Close
                </button>
                <button class="btn btn-success" name="delete" type="submit">Delete</button>
              </div>
            </div>
          </div>
          </form>
        </div>
                    
<!-- End  of Modal -->