
<!-- Small Modal -->
<div class="modal fade" id="profileModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel2">Update Profile</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <form action="profile_update" method="POST" enctype="multipart/form-data">
            <div class="modal-body">
                <div class="input-group">
                    <input type="file" class="form-control" id="photo" name="photo">
                    <!-- <button class="btn btn-outline-primary" type="button" id="inputGroupFileAddon04">Button</button> -->
                </div><br>
                <div class="input-group input-group-merge">
                    <span class="input-group-text">Firstname:</span>
                    <input type="text" class="form-control"  name="firstname" value="<?php echo $agent['firstname']; ?>" aria-label="">
                </div><br>
                <div class="input-group input-group-merge">
                    <span class="input-group-text">Lastname:</span>
                    <input type="text" class="form-control" id="" name="lastname" value="<?php echo $agent['lastname']; ?>" aria-label="">
                </div><br>
                <div class="input-group input-group-merge">
                    <span class="input-group-text">Email:</span>
                    <input type="text" class="form-control" id="" name="email" value="<?php echo $agent['email']; ?>" aria-label="">
                </div><br>
                <div class="input-group input-group-merge">
                    <span class="input-group-text">Password:</span>
                    <input type="password" class="form-control" id="" name="password" value="" aria-label="">
                </div><hr>
                <h5> Enter current password to verify </h5>
                <div class="input-group input-group-merge">
                    <span class="input-group-text">Current Password:</span>
                    <input type="password" class="form-control" id="" name="curr_password" value="" aria-label="">
                </div>
                <br><br>
                <div class="mb-3">
                    <button class="btn btn-success d-grid w-100" name="update" type="submit">Save Changes</button>
                </div>
            </div>
          </form>
          
        </div>
      </div>
    </div>