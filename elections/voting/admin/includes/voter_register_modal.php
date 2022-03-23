<!-- Add -->
<div class="modal fade" id="addnew">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><b>Register New</b></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" method="POST" action="voter_register_add.php">
          <div class="form-group">
            <label for="province" class="col-sm-3 control-label">Province</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="province" name="province" required>
            </div>
          </div>

          <div class="form-group">
            <label for="name" class="col-sm-3 control-label">name</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="name" name="name" required>
            </div>
          </div>

          <div class="form-group">
            <label for="university" class="col-sm-3 control-label">University</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="university" name="university" required>
            </div>
          </div>

          <div class="form-group">
            <label for="china" class="col-sm-3 control-label">china</label>
            <div class="col-sm-9">
              <select name="china" id="china">
                <option value="NULL">NULL</option>
                <option value="YES">YES</option>
                <option value="NO">NO</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label for="grad" class="col-sm-3 control-label">grad</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="grad" name="grad" required>
            </div>
          </div>

          <div class="form-group">
            <label for="contact" class="col-sm-3 control-label">contact</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="contact" name="contact">
            </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i
                class="fa fa-close"></i> Close</button>
            <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Save</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
</div>

<!-- Edit -->
<div class="modal fade" id="edit">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><b>Edit Voter</b></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" method="POST" action="voter_register_edit.php">
          <input type="hidden" class="id" name="id">
          <div class="form-group">
            <label for="province" class="col-sm-3 control-label">Province</label>

            <div class="col-sm-9">
              <input type="text" class="form-control" id="edit_province" name="province" required>
            </div>
          </div>
          <div class="form-group">
            <label for="name" class="col-sm-3 control-label">name</label>

            <div class="col-sm-9">
              <input type="text" class="form-control" id="edit_name" name="name" required>
            </div>
          </div>
          <div class="form-group">
            <label for="name" class="col-sm-3 control-label">Univeristy</label>

            <div class="col-sm-9">
              <input type="text" class="form-control" id="edit_university" name="university" required>
            </div>
          </div>
          <div class="form-group">
            <label for="china" class="col-sm-3 control-label">china</label>
            <div class="col-sm-9">
              <select name="china" id="edit_china">
                <option value="NULL">NULL</option>
                <option value="YES">YES</option>
                <option value="NO">NO</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="grad" class="col-sm-3 control-label">grad</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="edit_grad" name="grad" required>
            </div>
          </div>
          <div class="form-group">
            <label for="contact" class="col-sm-3 control-label">contact</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="edit_contact" name="contact">
            </div>
          </div>
          <div class="form-group">
            <label for="contact" class="col-sm-3 control-label">Email</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="edit_email" name="email">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i
                class="fa fa-close"></i> Close</button>
            <button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i>
              Update</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><b>Deleting...</b></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" method="POST" action="voter_register_delete.php">
          <input type="hidden" class="id" name="id">
          <div class="text-center">
            <p>DELETE VOTER</p>
            <h2 class="bold fullname"></h2>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i
            class="fa fa-close"></i> Close</button>
        <button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i> Delete</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Update Photo -->
<div class="modal fade" id="edit_photo">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><b><span class="fullname"></span></b></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" method="POST" action="voters_photo.php" enctype="multipart/form-data">
          <input type="hidden" class="id" name="id">
          <div class="form-group">
            <label for="photo" class="col-sm-3 control-label">Photo</label>

            <div class="col-sm-9">
              <input type="file" id="photo" name="photo" required>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i
            class="fa fa-close"></i> Close</button>
        <button type="submit" class="btn btn-success btn-flat" name="upload"><i class="fa fa-check-square-o"></i>
          Update</button>
        </form>
      </div>
    </div>
  </div>
</div>