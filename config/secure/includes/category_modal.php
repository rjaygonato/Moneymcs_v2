<!-- Add -->
<div class="modal fade" id="addcatmodal" data-bs-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="">Add Category</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="cat_add.php">
                <input type="hidden" class="catid" name="id">
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Category Name</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control"  name="category" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-outline-success btn-md" name="addcat"><i class="fa fa-check-square-o"></i> Add</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit -->
<div class="modal fade" id="edit" data-bs-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="">Editing Category</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="cat_edit.php">
                <input type="hidden" class="catid" name="id">
                <div class="form-group">
                    <label for="edit_category" class="col-sm-3 control-label">Category Name</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_cat" name="category" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-outline-success btn-md" name="editcat"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete" data-bs-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="">Deleting Category</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="category_delete.php">
                <input type="hidden" class="catid" name="id">
                <div class="text-center">
                    <p>Delete this Category?</p>
                    <h3 class="bold category"></h3>
                </div>
            </div>
            <div class="modal-footer">
           
              <button type="submit" class="btn btn-outline-danger btn-md" name="catdelete"><i class="fa fa-trash"></i> Delete</button>
              </form>
            </div>
        </div>
    </div>
</div>
<!-- Activate -->



     