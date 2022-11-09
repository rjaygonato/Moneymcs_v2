<!-- Add -->
<div class="modal fade" id="addresourcemodal">
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
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Resource Name</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control"  name="resources" required>
                    </div>
                </div><br>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Category</label>
                    <div class="col-sm-9">
                      <!-- <input type="text" class="form-control"  name="category"> -->
                      <select class="form-select " id="" name="category" required>
                        <option value="0">--Select category--</option>
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
                </div><br>
                <div class="form-group">
                <label for="" class="col-sm-3 control-label"></label>
                  <div class="col-sm-9">
                    <input type="file" class="col-sm-3 form-control" id="" name="filenames" required><br>
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
<div class="modal fade" id="editsource">
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
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Resource Name</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="editreso"  name="resources"  required>
                    </div>
                </div><br>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Category</label>
                    <div class="col-sm-9">
                      <!-- <input type="text" class="form-control"  name="category"> -->
                      <select class="form-select " id="editcats" name="category" required>
                        <option value="0">--Select category--</option>
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
                </div><br>
                <div class="form-group">
                <label for="" class="col-sm-3 control-label"></label>
                  <div class="col-sm-9">
                    <input type="file" class="col-sm-3 form-control" id="editfile" name="filenames" required><br>
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
<div class="modal fade" id="deleteresource">
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

