
<!-- View -->
<div class="modal fade" id="clientview" tabindex="-1" aria-hidden="true" data-bs-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="">Client Details</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="client_update.php" enctype="multipart/form-data">
                <input type="hidden" class="clientid" name="id">
                <div class="mb-3 row">
                  <label class="col-md-2 col-form-label">Firstname</label>
                  <div class="col-md-10">
                    <input class="form-control" type="text" name="firstname" id="clientf" readonly>
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="col-md-2 col-form-label">Lastname</label>
                  <div class="col-md-10">
                    <input class="form-control" type="text" name="lastname" id="clientl" readonly>
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="col-md-2 col-form-label">Email</label>
                  <div class="col-md-10">
                    <input class="form-control" type="text" name="email" id="cliente" readonly>
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="col-md-2 col-form-label">Contact</label>
                  <div class="col-md-10">
                    <input class="form-control" type="text" name="phonenum" id="clientp" readonly>
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="col-md-2 col-form-label">State</label>
                  <div class="col-md-10">
                    <!-- <input class="form-control" type="text" name="state" id="editclients"> -->
                    <select class="form-control" name="state" id="clients" disabled>
                        <option selected disabled>-Select-</option>
                        <option value="Alabama">Alabama</option>
                        <option value="Alaska">Alaska</option>
                        <option value="Arizona">Arizona</option>
                        <option value="Arkansas">Arkansas</option>
                        <option value="California">California</option>
                        <option value="Colorado">Colorado</option>
                        <option value="Connecticut">Connecticut</option>
                        <option value="Delaware">Delaware</option>
                        <option value="Florida">Florida</option>
                        <option value="Georgia">Georgia</option>
                        <option value="Hawaii">Hawaii</option>
                        <option value="Idaho">Idaho</option>
                        <option value="Illinois">Illinois</option>
                        <option value="Indiana">Indiana</option>
                        <option value="Iowa">Iowa</option>
                        <option value="Kansas">Kansas</option>
                        <option value="Kentucky">Kentucky</option>
                        <option value="Louisiana">Louisiana</option>
                        <option value="Maine">Maine</option>
                        <option value="Maryland">Maryland</option>
                        <option value="Massachusetts">Massachusetts</option>
                        <option value="Michigan">Michigan</option>
                        <option value="Minnesota">Minnesota</option>
                        <option value="Mississippi">Mississippi</option>
                        <option value="Missouri">Missouri</option>
                        <option value="Montana">Montana</option>
                        <option value="Nebraska">Nebraska</option>
                        <option value="Nevada">Nevada</option>
                        <option value="New Hampshire">New Hampshire</option>
                        <option value="New Jersey">New Jersey</option>
                        <option value="New Mexico">New Mexico</option>
                        <option value="New York">New York</option>
                        <option value="North Carolina">North Carolina</option>
                        <option value="North Dakota">North Dakota</option>
                        <option value="Ohio">Ohio</option>
                        <option value="Oklahoma">Oklahoma</option>
                        <option value="Oregon">Oregon</option>
                        <option value="Pennsylvania">Pennsylvania</option>
                        <option value="Rhode Island">Rhode Island</option>
                        <option value="South Carolina">South Carolina</option>
                        <option value="South Dakota">South Dakota</option>
                        <option value="Tennessee">Tennessee</option>
                        <option value="Texas">Texas</option>
                        <option value="Utah">Utah</option>
                        <option value="Vermont">Vermont</option>
                        <option value="Virginia">Virginia</option>
                        <option value="Washington">Washington</option>
                        <option value="West Virginia">West Virginia</option>
                        <option value="Wisconsin">Wisconsin</option>
                        <option value="Wyoming">Wyoming</option>   
                    </select>
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="col-md-2 col-form-label">Type</label>
                  <div class="col-md-10">
                    <!-- <input class="form-control" type="text" name="type" id="editclientt"> -->
                    <select class="form-control" name="type" id="clientt" disabled>
                        <option selected disabled>-Select-</option>
                        <option value="Business Credit Builder">Business Credit Builder</option>
                        <option value="Direct Funding">Direct Funding</option>   
                    <select>
                  </div>
                </div>
            </div>
            <!-- <div class="modal-footer">
              <button type="submit" class="btn btn-outline-success btn-md" name="client_upsave"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div> -->
        </div>
    </div>
</div>
<!-- Edit -->
<div class="modal fade" id="clientedit" tabindex="-1" aria-hidden="true" data-bs-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="">Edit Client</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="client_update.php" enctype="multipart/form-data">
                <input type="hidden" class="clientid" name="id">
                <div class="mb-3 row">
                  <label class="col-md-2 col-form-label">Firstname</label>
                  <div class="col-md-10">
                    <input class="form-control" type="text" name="firstname" id="editclientf">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="col-md-2 col-form-label">Lastname</label>
                  <div class="col-md-10">
                    <input class="form-control" type="text" name="lastname" id="editclientl">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="col-md-2 col-form-label">Email</label>
                  <div class="col-md-10">
                    <input class="form-control" type="text" name="email" id="editcliente">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="col-md-2 col-form-label">Contact</label>
                  <div class="col-md-10">
                    <input class="form-control" type="text" name="phonenum" id="editclientp">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="col-md-2 col-form-label">State</label>
                  <div class="col-md-10">
                    <!-- <input class="form-control" type="text" name="state" id="editclients"> -->
                    <select class="form-control" name="state" id="editclients">
                        <option selected disabled>-Select-</option>
                        <option value="Alabama">Alabama</option>
                        <option value="Alaska">Alaska</option>
                        <option value="Arizona">Arizona</option>
                        <option value="Arkansas">Arkansas</option>
                        <option value="California">California</option>
                        <option value="Colorado">Colorado</option>
                        <option value="Connecticut">Connecticut</option>
                        <option value="Delaware">Delaware</option>
                        <option value="Florida">Florida</option>
                        <option value="Georgia">Georgia</option>
                        <option value="Hawaii">Hawaii</option>
                        <option value="Idaho">Idaho</option>
                        <option value="Illinois">Illinois</option>
                        <option value="Indiana">Indiana</option>
                        <option value="Iowa">Iowa</option>
                        <option value="Kansas">Kansas</option>
                        <option value="Kentucky">Kentucky</option>
                        <option value="Louisiana">Louisiana</option>
                        <option value="Maine">Maine</option>
                        <option value="Maryland">Maryland</option>
                        <option value="Massachusetts">Massachusetts</option>
                        <option value="Michigan">Michigan</option>
                        <option value="Minnesota">Minnesota</option>
                        <option value="Mississippi">Mississippi</option>
                        <option value="Missouri">Missouri</option>
                        <option value="Montana">Montana</option>
                        <option value="Nebraska">Nebraska</option>
                        <option value="Nevada">Nevada</option>
                        <option value="New Hampshire">New Hampshire</option>
                        <option value="New Jersey">New Jersey</option>
                        <option value="New Mexico">New Mexico</option>
                        <option value="New York">New York</option>
                        <option value="North Carolina">North Carolina</option>
                        <option value="North Dakota">North Dakota</option>
                        <option value="Ohio">Ohio</option>
                        <option value="Oklahoma">Oklahoma</option>
                        <option value="Oregon">Oregon</option>
                        <option value="Pennsylvania">Pennsylvania</option>
                        <option value="Rhode Island">Rhode Island</option>
                        <option value="South Carolina">South Carolina</option>
                        <option value="South Dakota">South Dakota</option>
                        <option value="Tennessee">Tennessee</option>
                        <option value="Texas">Texas</option>
                        <option value="Utah">Utah</option>
                        <option value="Vermont">Vermont</option>
                        <option value="Virginia">Virginia</option>
                        <option value="Washington">Washington</option>
                        <option value="West Virginia">West Virginia</option>
                        <option value="Wisconsin">Wisconsin</option>
                        <option value="Wyoming">Wyoming</option>   
                    </select>
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="col-md-2 col-form-label">Type</label>
                  <div class="col-md-10">
                    <!-- <input class="form-control" type="text" name="type" id="editclientt"> -->
                    <select class="form-control" name="type" id="editclientt">
                        <option selected disabled>-Select-</option>
                        <option value="Business Credit Builder">Business Credit Builder</option>
                        <option value="Direct Funding">Direct Funding</option>   
                    <select>
                  </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-outline-success btn-md" name="client_upsave"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>