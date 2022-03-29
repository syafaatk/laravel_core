  <!--  Modal content for the above example -->
  <div class="modal fade form-addProvince" role="dialog" aria-labelledby="addProvince" aria-hidden="true" style="display: none;">
    <div class="modal-dialog ">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="addProvince">Tambah Province</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>
        <div class="modal-body">
          <form action="{{ route('master.crud.province.add') }}" method="POST" class="form-horizontal ModalAjax" accept-charset="utf-8">
            @csrf
            <div class="form-group row">
              <label class="col-md-3 col-form-label">Nama Province</label>
              <div class="col-md-9">
                <input type="text" class="form-control form-control-sm" name="name_province" placeholder="Nama Provinsi" required="">
              </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 col-form-label">Tahun Berdiri</label>
                <div class="col-md-9">
                  <input type="number" class="form-control form-control-sm" name="since" maxlength="4" placeholder="Format Angka (Max 4 Karakter)" required="">
                </div>
              </div>
            <hr>
            <div class="form-group row">
              <label class="col-md-3 col-form-label"></label>
              <div class="col-md-9">
                <button type="button" class="btn btn-secondary BtnCloseModal" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-success"><i class="mdi mdi-plus-box-outline"></i> Simpan</button>
              </div>
            </div>
          </form>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->