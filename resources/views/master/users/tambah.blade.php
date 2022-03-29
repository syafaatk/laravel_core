  <!--  Modal content for the above example -->
  <div class="modal fade form-addUser" role="dialog" aria-labelledby="addUser" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="addUser">Tambah Pengguna Baru</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>
        <div class="modal-body">
          <form action="{{ route('master.acl.users.add') }}" method="POST" class="form-horizontal ModalAjax" accept-charset="utf-8">
            @csrf
            <div class="form-group row">
              <label class="col-md-2 col-form-label">Nama Pengguna</label>
              <div class="col-md-6">
                <input type="text" class="form-control" name="name" placeholder="Nama Pengguna" required="">
              </div>
            </div>
            <div class="form-group row mt-2">
              <label class="col-md-2 col-form-label">Email</label>
              <div class="col-md-6">
                <input type="email" class="form-control" name="email" placeholder="Email Pengguna" required="">
              </div>
            </div>
            <div class="form-group row mt-2">
              <label class="col-md-2 col-form-label">Password</label>
              <div class="col-md-6">
                <input type="password" class="form-control" name="password" placeholder="Password Pengguna" required="">
              </div>
            </div>

            <div class="form-group row mt-2">
              <label class="col-md-2 col-form-label">Users Group</label>
              <div class="col-md-6">
                <select class="form-control select2_users_group" name="users_group_id" required="">
                </select>
              </div>
              <div class="col-md-4 mb-1">
                <span class="font-13 text-muted">* Tipe Pengguna</span>
              </div>
            </div>
            <hr>
            <div class="form-group row">
              <label class="col-md-2 col-form-label"></label>
              <div class="col-md-6">
                <button type="button" class="btn btn-secondary BtnCloseModal" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-success"><i class="mdi mdi-plus-box-outline"></i> Simpan</button>
              </div>
            </div>
          </form>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->