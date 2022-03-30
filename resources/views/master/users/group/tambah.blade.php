  <!--  Modal content for the above example -->
  <div class="modal fade form-addUserGroup" role="dialog" aria-labelledby="addUserGroup" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="addUserGroup">Tambah User Group</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>
        <div class="modal-body">
          <form action="{{ route('master.acl.users_group.add') }}" method="POST" class="form-horizontal ModalAddGroup" accept-charset="utf-8">
            @csrf
            <div class="form-group row">
              <label class="col-md-2 mt-n2 col-form-label">Inisial/Singkatan User Group</label>
              <div class="col-md-10 mt-n2">
                <input type="text" class="form-control form-control-sm" maxlength="6" name="users_group_alias" placeholder="Inisial/Singkatan User Group (Max 6 Karakter)" required="">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-2 mt-n2 col-form-label">Nama User Group</label>
              <div class="col-md-10 mt-n2">
                <input type="text" class="form-control form-control-sm" name="users_group_name" placeholder="Nama User Group" required="">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-2 mt-n2 col-form-label">Default URL</label>
              <div class="col-md-10 mt-n2">
                <input type="text" class="form-control form-control-sm" name="user_group_default_pages" placeholder="Default URL" required="">
              </div>
            </div>
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