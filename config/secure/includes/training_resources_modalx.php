<!-- Add -->
<div class="modal fade" id="addtrainingmodal" data-bs-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="">Add Training Course</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="training_add.php" enctype="multipart/form-data">
                <input type="hidden" class="catid" name="id">
                <div class="mb-3 row">
                  <label class="col-md-2 col-form-label">Title</label>
                  <div class="col-md-10">
                    <input class="form-control" type="text" required name="course_name">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="col-md-2 col-form-label">Category</label>
                  <div class="col-md-10">
                    <select class="form-select " name="category" required>
                      <option value="0">--Select Category--</option>
                        <?php
                          $conn = $pdo->open();
                          $stmt = $conn->prepare("SELECT * FROM training_category");
                          $stmt->execute();
                          foreach($stmt as $crow){
                            echo "
                              <option value='".$crow['category']."'>".$crow['category']."</option>
                            ";
                          }
                          $pdo->close();
                        ?>
                    </select>
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="col-md-2 col-form-label">Language</label>
                  <div class="col-md-10">
                    <select class="form-select " name="language" required>
                      <option value="0">--Select Language--</option>
                        <?php
                          $conn = $pdo->open();
                          $stmt = $conn->prepare("SELECT * FROM language_type");
                          $stmt->execute();
                          foreach($stmt as $crow){
                            echo "
                              <option value='".$crow['language']."'>".$crow['language']."</option>
                            ";
                          }
                          $pdo->close();
                        ?>
                    </select>
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="col-md-2 col-form-label">Start Date</label>
                  <div class="col-md-10">
                      <input class="form-control" name="start_date" type="date" value="" id="" />
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="col-md-2 col-form-label">End Date</label>
                  <div class="col-md-10">
                    <input class="form-control" name="end_date" type="date" value="" id="" />
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="col-md-2 col-form-label">Price</label>
                  <div class="col-md-10">
                    <input class="form-control" type="text" required name="price">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="col-md-2 col-form-label">Description</label>
                  <div class="col-md-10">
                    <textarea class="form-control" aria-label="Description" name="description"></textarea>
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="col-md-2 col-form-label">Features</label>
                  <div class="col-md-10">
                    <textarea class="form-control" aria-label="Features" name="features"></textarea>
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="col-md-2 col-form-label">Type</label>
                  <div class="col-md-10">
                    <select class="form-select " name="type" required>
                      <option value="0">--Select File Type--</option>
                        <?php
                          $conn = $pdo->open();
                          $stmt = $conn->prepare("SELECT * FROM resources_type");
                          $stmt->execute();
                          foreach($stmt as $crow){
                            echo "
                              <option value='".$crow['type']."'>".$crow['type']."</option>
                            ";
                          }
                          $pdo->close();
                        ?>
                      </select>
                    <!-- <input class="form-control" type="text" name="resources"> -->
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="col-md-2 col-form-label">File</label>
                  <div class="col-md-10">
                    <input class="col-sm-3 form-control" required type="file" name="filenames">
                  </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-outline-success btn-md" name="addcourse"><i class="fa fa-check-square-o"></i> Add</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit -->
<div class="modal fade" id="editcourse" data-bs-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="">Edit Course</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="training_edit.php" enctype="multipart/form-data">
                <input type="hidden" class="resid" name="id">
                <div class="mb-3 row">
                  <label class="col-md-2 col-form-label">Title</label>
                  <div class="col-md-10">
                    <input class="form-control" type="text" name="course_name" id="edit_course">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="col-md-2 col-form-label">Category</label>
                  <div class="col-md-10">
                    <select class="form-select " name="category" required id="editcats">
                      <option value="0">--Select Category--</option>
                        <?php
                          $conn = $pdo->open();
                          $stmt = $conn->prepare("SELECT * FROM training_category");
                          $stmt->execute();
                          foreach($stmt as $crow){
                            echo "
                              <option selected value='".$crow['category']."'>".$crow['category']."</option>
                            ";
                          }
                          $pdo->close();
                        ?>
                    </select>
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="col-md-2 col-form-label">Language</label>
                  <div class="col-md-10">
                    <select class="form-select " name="language" id="editlang" required>
                      <option value="0">--Select Language--</option>
                        <?php
                          $conn = $pdo->open();
                          $stmt = $conn->prepare("SELECT * FROM language_type");
                          $stmt->execute();
                          foreach($stmt as $crow){
                            echo "
                              <option value='".$crow['language']."'>".$crow['language']."</option>
                            ";
                          }
                          $pdo->close();
                        ?>
                    </select>
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="col-md-2 col-form-label">Start Date</label>
                  <div class="col-md-10">
                      <input class="form-control" name="start_date" type="date" value="" id="editSdate" />
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="col-md-2 col-form-label">End Date</label>
                  <div class="col-md-10">
                    <input class="form-control" name="end_date" type="date" value="" id="editEdate" />
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="col-md-2 col-form-label">Price</label>
                  <div class="col-md-10">
                    <input class="form-control" type="text" required name="price" id="edit_price">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="col-md-2 col-form-label">Description</label>
                  <div class="col-md-10">
                    <textarea class="form-control" aria-label="Description" name="description" id="edit_desc"></textarea>
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="col-md-2 col-form-label">Features</label>
                  <div class="col-md-10">
                    <textarea class="form-control" aria-label="Features" name="features" id="edit_feat"></textarea>
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="col-md-2 col-form-label">Type</label>
                  <div class="col-md-10">
                    <select class="form-select " name="type" required id="type">
                      <option value="0">--Select File Type--</option>
                        <?php
                          $conn = $pdo->open();
                          $stmt = $conn->prepare("SELECT * FROM resources_type WHERE type = '.JPEG or .JPG' OR type = '.PNG'");
                          $stmt->execute();
                          foreach($stmt as $trow){
                            echo "
                              <option value='".$trow['type']."'>".$trow['type']."</option>
                            ";
                          }
                          $pdo->close();
                        ?>
                      </select>
                    <!-- <input class="form-control" type="text" name="resources"> -->
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="col-md-2 col-form-label">File</label>
                  <div class="col-md-10">
                    <input class="col-sm-3 form-control" required type="file" name="filenames" id="editfile">
                  </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-outline-success btn-md" name="edittraining"><i class="fa fa-check-square-o"></i> Update</button>
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

