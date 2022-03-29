  <!--  Modal content for the above example -->
  <div class="modal fade form-addItem" role="dialog" aria-labelledby="addItem" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="addItem">Tambah Item / Barang</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>
        <div class="modal-body">
          <form action="{{ route('master.sales.item.add') }}" method="POST" class="form-horizontal ModalAjax" accept-charset="utf-8">
            @csrf
            <div class="form-group row">
              <label class="col-md-3 mb-n3 col-form-label">Gudang</label>
              <div class="col-md-9 mb-n3">
                <div class="input-group">
                  <div class="input-group-append">
                    <span class="input-group-text bg-dark text-white btn waves-effect waves-light" data-toggle="modal" data-target=".form-addWarehouse" title="Tambah Brand Baru"><i class="mdi mdi-plus"></i></span>
                  </div>
                  <div class="flex-fill">
                    <select class="form-control select2_master_warehouse" name="master_warehouse_id" required="">
                      <option value="">Silahkan Pilih Gudang</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 mb-n3 col-form-label">Brand/Merk</label>
              <div class="col-md-9 mb-n3">
                <div class="input-group">
                  <div class="input-group-append">
                    <span class="input-group-text bg-dark text-white btn waves-effect waves-light" data-toggle="modal" data-target=".form-addBrand" title="Tambah Brand Baru"><i class="mdi mdi-plus"></i></span>
                  </div>
                  <div class="flex-fill">
                    <select class="form-control select2_master_brand" name="master_brand_id" required="">
                      <option value="">Silahkan Pilih Brand/Merk</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 mb-n3 col-form-label">Supplier</label>
              <div class="col-md-9 mb-n3">
                <div class="input-group">
                  <div class="input-group-append">
                    <span class="input-group-text bg-dark text-white btn waves-effect waves-light" data-toggle="modal" data-target=".form-addSupplier" title="Tambah Unit Baru"><i class="mdi mdi-plus"></i></span>
                  </div>
                  <div class="flex-fill">
                    <select class="form-control select2_master_supplier" name="master_supplier_id" id="master_supplier_id" required="">
                      <option value="">Silahkan Pilih Supplier</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 mb-n3 col-form-label">Detail Item / Barang</label>
              <div class="col-md-9 mb-n3">
                <input type="text" class="form-control form-control-sm" name="master_item_name" placeholder="Detil Barang/Brand/Series/Uk." required="">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 mb-n3 col-form-label">Satuan</label>
              <div class="col-md-9 mb-n3">
                <div class="input-group">
                  <div class="input-group-append">
                    <span class="input-group-text bg-dark text-white btn waves-effect waves-light" data-toggle="modal" data-target=".form-addUnit" title="Tambah Unit Baru"><i class="mdi mdi-plus"></i></span>
                  </div>
                  <div class="flex-fill">
                    <select class="form-control select2_master_unit" name="master_unit_id" id="master_unit_id" required="">
                      <option value="">Silahkan Pilih Satuan</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 mb-n3 col-form-label">Harga Modal Item / Barang</label>
              <div class="col-md-9 mb-n3">
                <input type="text" data-type="currency" class="form-control form-control-sm" name="master_item_price" placeholder="Harga Modal Item / Barang" required="">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 mb-n3 col-form-label">Bottom Price</label>
              <div class="col-md-9 mb-n3">
                <input type="text" data-type="currency" class="form-control form-control-sm" name="master_item_bottom_price" placeholder="Bottom Price" required="">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 mb-n3 col-form-label">Publish Retail</label>
              <div class="col-md-9 mb-n3">
                <input type="text" data-type="currency" class="form-control form-control-sm" name="master_item_price_retail" placeholder="Publish Retail" required="">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 mb-n3 col-form-label">Publish Coorporate</label>
              <div class="col-md-9 mb-n3">
                <input type="text" data-type="currency" class="form-control form-control-sm" name="master_item_price_coorporate" placeholder="Publish Coorporate" required="">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 mb-n3 col-form-label">Stok Item / Barang</label>
              <div class="col-md-9 mb-n3">
                <input type="number" min="0" class="form-control form-control-sm" name="master_item_stock" placeholder="Stok Item / Barang" required="">
              </div>
            </div>

            <div class="form-group row">
              <label class="col-md-3 mb-n3 col-form-label">Stok Minimum Item / Barang</label>
              <div class="col-md-9 mb-n3">
                <input type="number" min="0" class="form-control form-control-sm" name="master_item_stock_minimum" placeholder="Stok Minimum Item / Barang" required="">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label">Gambar Item / Barang</label>
              <div class="col-md-9">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="customFile" name="master_item_file">
                  <label class="custom-file-label" for="customFile">Pilih Gambar Item / Barang *Gambar Wajib Diinput</label>
                </div>
              </div>
            </div>

            <!-- <div class="form-group row">
                  <form action="#" class="dropzone">
                      <div class="fallback">
                          <input name="file" type="file" multiple="multiple">
                      </div>
                      <div class="dz-message needsclick">
                          <div class="mb-3">
                              <i class="display-4 text-muted mdi mdi-cloud-upload-outline"></i>
                          </div>
                          
                          <h4>Drop files here to upload</h4>
                      </div>
                  </form>
              </div>

              <div class="text-center mt-4">
                  <button type="button" class="btn btn-primary waves-effect waves-light">Send Files</button>
              </div>
            </div> -->
                            
            
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