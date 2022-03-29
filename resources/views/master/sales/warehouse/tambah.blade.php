  <!--  Modal content for the above example -->
  <div class="modal fade form-addWarehouse" role="dialog" aria-labelledby="addWarehouse" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="addWarehouse">Tambah Gudang</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>
        <div class="modal-body">
          <form action="{{ $route->add }}" method="POST" class="form-horizontal ModalAjax" accept-charset="utf-8">
            @csrf
            <div class="form-group row">
              <label class="col-md-3 mb-n3 col-form-label">Inisial/Singkatan Gudang</label>
              <div class="col-md-9 mb-n3">
                <input type="text" class="form-control form-control-sm" maxlength="6" name="master_warehouse_alias" maxlength="6" placeholder="Inisial/Singkatan Gudang (Max 6 Karakter)" required="">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 mb-n3 col-form-label">Nama Gudang</label>
              <div class="col-md-9 mb-n3">
                <input type="text" class="form-control form-control-sm" name="master_warehouse_name" placeholder="Nama Gudang" required="">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label">Kota</label>
              <div class="col-md-9">
                <div class="input-group">
                  <div class="input-group-append">
                    <span class="input-group-text bg-dark text-white btn waves-effect waves-light" data-toggle="modal" data-target=".form-addCity" title="Tambah Kota Baru" required=""><i class="mdi mdi-plus"></i></span>
                  </div>
                  <div class="flex-fill">
                    <select class="form-control select2_master_city" name="master_city_id">
                      <option value="">Silahkan Pilih Kota</option>
                    </select>
                  </div>
                </div>
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