<!-- Add -->
<div class="modal fade" id="addresourcemodal" data-bs-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="">Add Resources</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="resource_add.php" enctype="multipart/form-data">
                <input type="hidden" class="catid" name="id">
                <div class="mb-3 row">
                  <label class="col-md-2 col-form-label">Title</label>
                  <div class="col-md-10">
                    <input class="form-control" type="text" name="resources">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="col-md-2 col-form-label">Category</label>
                  <div class="col-md-10">
                    <select class="form-select " name="category" required>
                      <option value="0">--Select Category--</option>
                        <?php
                          $conn = $pdo->open();
                          $stmt = $conn->prepare("SELECT * FROM resource_category");
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
                    <input class="col-sm-3 form-control" type="file" name="filenames">
                  </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-outline-success btn-md" name="addresource"><i class="fa fa-check-square-o"></i> Add</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit -->
<div class="modal fade" id="editsource" data-bs-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="">Edit Resources</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="resource_edit.php" enctype="multipart/form-data">
                <input type="hidden" class="resid" name="id">
                <div class="mb-3 row">
                  <label class="col-md-2 col-form-label">Title</label>
                  <div class="col-md-10">
                    <input class="form-control" type="text" name="resources" id="editreso">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="col-md-2 col-form-label">Category</label>
                  <div class="col-md-10">
                    <select class="form-select " name="category" required id="editcats">
                      <option value="0">--Select Category--</option>
                        <?php
                          $conn = $pdo->open();
                          $stmt = $conn->prepare("SELECT * FROM resource_category");
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
                  <label class="col-md-2 col-form-label">Type</label>
                  <div class="col-md-10">
                    <select class="form-select " name="type" required id="type">
                      <option value="0">--Select File Type--</option>
                        <?php
                          $conn = $pdo->open();
                          $stmt = $conn->prepare("SELECT * FROM resources_type");
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
                    <input class="col-sm-3 form-control" type="file" name="filenames" id="editfile">
                  </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-outline-success btn-md" name="editresource"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>


<!-- Delete -->
<div class="modal fade" id="deleteresource" data-bs-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="">Deleting Resources</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="resource_delete.php">
                <input type="hidden" class="resid" name="id">
                <div class="text-center">
                    <p>Delete this Resources?</p>
                    <h3 class="resource"></h3>
                    <!-- <input type="text" class="files" > -->
                </div>
            </div>
            <div class="modal-footer">
           
              <button type="submit" class="btn btn-outline-danger btn-md" name="catdelete"><i class="fa fa-trash"></i> Delete</button>
              </form>
            </div>
        </div>
    </div>
</div>

