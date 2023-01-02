<!-- Add -->
<div class="modal fade" id="trainingadd" tabindex="-1" aria-hidden="true" data-bs-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="">New Training</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="course_add.php" enctype="multipart/form-data">
                <!-- <input type="hidden" class="" name="user_id" value=""> -->
                <div class="mb-3 row">
                  <label class="col-md-3 col-form-label">Title *</label>
                  <div class="col-md-9">
                    <input class="form-control" type="text" name="course_name" id="" required>
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="col-md-3 col-form-label">Category *</label>
                  <div class="col-md-9">
                    <!-- <input class="form-control" type="text" name="category" id="" required> -->
                    <select class="form-control" name="category" required>
                      <option selected disabled>--Select Month--</option>
                      <option value="Free Courses">Free Courses</option>
                      <option value="Janaury">Janaury</option>
                      <option value="February">February</option>
                      <option value="March">March</option>
                      <option value="April">April</option>
                      <option value="May">May</option>
                      <option value="June">June</option>
                      <option value="July">July</option>
                      <option value="August">August</option>
                      <option value="September">September</option>
                      <option value="October">October</option>
                      <option value="November">November</option>
                      <option value="December">December</option>
                    </select> 
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="col-md-3 col-form-label">Description *</label>
                  <div class="col-md-9">
                    <!-- <input class="form-control" type="text" name="description" id="" required> -->
                    <textarea class="form-control" id="" name="description" placeholder=""
                      rows="4" required></textarea>
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="col-md-3 col-form-label">Price *</label>
                  <div class="col-md-9">
                    <input class="form-control" type="text" name="price" id="" required>
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="col-md-3 col-form-label">Features *</label>
                  <div class="col-md-9">
                    <!-- <input class="form-control" type="text" name="description" id="" required> -->
                    <textarea class="form-control" id="" name="features" placeholder=""
                      rows="4" autofocus=""></textarea>
                  </div>
                </div>
                <!-- <div class="mb-3 row">
                  <label class="col-md-3 col-form-label">File *</label>
                  <div class="col-md-9">
                    <input type="file" class="form-control" id="" name="filenames">
                  </div>
                </div> -->
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-outline-success btn-md" name="training_save"><i class="fa fa-check-square-o"></i> Save</button>
              </form>
            </div>
        </div>
    </div>
</div>
<!-- View -->

<!-- Edit -->
<div class="modal fade" id="trainingedit" tabindex="-1" aria-hidden="true" data-bs-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="">Edit Training</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="training_edit.php" enctype="multipart/form-data">
                <input type="hidden" class="resid" id="" name="id">
                <div class="mb-3 row">
                  <label class="col-md-3 col-form-label">Title *</label>
                  <div class="col-md-9">
                    <input class="form-control" type="text" name="course_name" id="edit_course" >
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="col-md-3 col-form-label">Category *</label>
                  <div class="col-md-9">
                    <!-- <input class="form-control" type="text" name="category" id="" required> -->
                    <select class="form-control" name="category" id="editcats" >
                      <option selected disabled>--Select Month--</option>
                      <option value="Free Courses">Free Courses</option>
                      <option value="Janaury">Janaury</option>
                      <option value="February">February</option>
                      <option value="March">March</option>
                      <option value="April">April</option>
                      <option value="May">May</option>
                      <option value="June">June</option>
                      <option value="July">July</option>
                      <option value="August">August</option>
                      <option value="September">September</option>
                      <option value="October">October</option>
                      <option value="November">November</option>
                      <option value="December">December</option>
                    </select> 
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="col-md-3 col-form-label">Description *</label>
                  <div class="col-md-9">
                    <!-- <input class="form-control" type="text" name="description" id="" required> -->
                    <textarea class="form-control" id="editcats" name="description" placeholder=""
                      rows="4" ></textarea>
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="col-md-3 col-form-label">Price *</label>
                  <div class="col-md-9">
                    <input class="form-control" type="text" name="price" id="edit_price" >
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="col-md-3 col-form-label">Features *</label>
                  <div class="col-md-9">
                    <!-- <input class="form-control" type="text" name="description" id="" required> -->
                    <textarea class="form-control" id="edit_feat" name="features" placeholder=""
                      rows="4" autofocus=""></textarea>
                  </div>
                </div>
                <!-- <div class="mb-3 row">
                  <label class="col-md-3 col-form-label">File *</label>
                  <div class="col-md-9">
                    <input type="file" class="form-control" id="" name="filenames">
                  </div>
                </div> -->
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-outline-success btn-md" name="training_edit"><i class="fa fa-check-square-o"></i> Save changes</button>
              </form>
            </div>
        </div>
    </div>
</div>


<!-- Delete -->
<div class="modal fade" id="deletecourse" data-bs-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="">Deleting Course</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="training_delete.php">
                <input type="hidden" class="resid" name="id">
                <div class="text-center">
                    <p>Delete this course?</p>
                    <h3 class="course_name"></h3>
                    <!-- <input type="text" class="files" > -->
                </div>
            </div>
            <div class="modal-footer">
           
              <button type="submit" class="btn btn-outline-danger btn-md" name="deletecourse"><i class="fa fa-trash"></i> Delete</button>
              </form>
            </div>
        </div>
    </div>
</div>