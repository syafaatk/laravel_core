  <!--  Modal content for the above example -->
  <div class="modal fade form-updateItem" role="dialog" aria-labelledby="addItem" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="addItem">Update Item / Barang</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>
        <div class="modal-body">
          <form action="{{ route('master.sales.item.update') }}" method="POST" class="form-horizontal ModalAjax onUpdateItem" accept-charset="utf-8">
            @csrf
            <div class="form-group row">
              <label class="col-md-3 mb-n3 col-form-label">Gudang</label>
              <div class="col-md-9 mb-n3">
                <div class="input-group">
                  <div class="input-group-append">
                    <span class="input-group-text bg-dark text-white btn waves-effect waves-light" data-toggle="modal" data-target=".form-addWarehouse" title="Tambah Brand Baru"><i class="mdi mdi-plus"></i></span>
                  </div>
                  <div class="flex-fill">
                    <select class="form-control select2_master_warehouse" id="update-master_warehouse_id" name="master_warehouse_id" required="">
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
                    <select class="form-control select2_master_brand" id="update-master_brand_id" name="master_brand_id" required="">
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
                    <select class="form-control select2_master_supplier" id="update-master_supplier_id" name="master_supplier_id" id="master_supplier_id" required="">
                      <option value="">Silahkan Pilih Supplier</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 mb-n3 col-form-label">Nama Item / Barang</label>
              <div class="col-md-9 mb-n3">
                <input type="text" class="form-control form-control-sm" id="update-master_item_name" name="master_item_name" placeholder="Nama Item / Barang" required="">
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
                    <select class="form-control select2_master_unit" id="update-master_unit_id" name="master_unit_id" id="master_unit_id" required="">
                      <option value="">Silahkan Pilih Satuan</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 mb-n3 col-form-label">Harga Modal Item / Barang</label>
              <div class="col-md-9 mb-n3">
                <input type="text" data-type="currency" class="form-control form-control-sm" id="update-master_item_price" name="master_item_price" placeholder="Harga Modal Item / Barang" required="">
              </div>
            </div>
            
            <div class="form-group row">
              <label class="col-md-3 mb-n3 col-form-label">Bottom Price</label>
              <div class="col-md-9 mb-n3">
                <input type="text" data-type="currency" class="form-control form-control-sm" id="update-master_item_bottom_price" name="master_item_bottom_price" placeholder="Bottom Price" required="">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 mb-n3 col-form-label">Publish Retail</label>
              <div class="col-md-9 mb-n3">
                <input type="text" data-type="currency" class="form-control form-control-sm" id="update-master_item_price_retail" name="master_item_price_retail" placeholder="Publish Retail" required="">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 mb-n3 col-form-label">Publish Coorporate</label>
              <div class="col-md-9 mb-n3">
                <input type="text" data-type="currency" class="form-control form-control-sm" id="update-master_item_price_coorporate" name="master_item_price_coorporate" placeholder="Publish Coorporate" required="">
              </div>
            </div>

            <div class="form-group row">
              <label class="col-md-3 mb-n3 col-form-label">Stok Item / Barang</label>
              <div class="col-md-9 mb-n3">
                <input type="number" min="0" class="form-control form-control-sm" id="update-master_item_stock" name="master_item_stock" placeholder="Stok Item / Barang" required="">
              </div>
            </div>

            <div class="form-group row">
              <label class="col-md-3 mb-n3 col-form-label">Stok Minimum Item / Barang</label>
              <div class="col-md-9 mb-n3">
                <input type="number" min="0" class="form-control form-control-sm" id="update-master_item_stock_minimum" name="master_item_stock_minimum" placeholder="Stok Minimum Item / Barang" required="">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label">Gambar Item / Barang Baru</label>
              <div class="col-md-9">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="customFile" name="master_item_file">
                  <label class="custom-file-label" for="customFile">Pilih Gambar Item / Barang Baru Jika Ingin Ganti</label>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label">Gambar Item / Barang Lama</label>
              <div class="col-md-9">
                <a href="javascript:void(0);" target="_blank">
                  <img src="" alt="" id="update-master_item_file" width="256px">
                </a>
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
  <script type="text/javascript">
    function updateItem(){
      $(".ActupdateItem").unbind();
      $('.ActupdateItem').on('click', function(event) {
        event.preventDefault();

        let id = $(this).data('unique');
        let msg = "";

        $('.onUpdateItem').attr('action',`{{ route('master.sales.item.update', ['id' => '']) }}/${id}`);

        $.getJSON(`{{ route('master.sales.item.find', ['id' => '']) }}/${id}`, function(data) { 
          msg = data.messages;

          $.each(msg, function(index, val) {
            $(`#update-${index}`).val(val).trigger('change') ;
          });

          var newOptionWarehouse = new Option(`${msg.master_warehouse_name} ( ${msg.master_warehouse_alias} )`, msg.master_warehouse_id);
          $('#update-master_warehouse_id').append(newOptionWarehouse).trigger('change');
          $('#update-master_warehouse_id').val(msg.master_warehouse_id).trigger('change');

          var newOptionBrand = new Option(`${msg.master_brand_name} ( ${msg.master_brand_alias} )`, msg.master_brand_id);
          $('#update-master_brand_id').append(newOptionBrand).trigger('change');
          $('#update-master_brand_id').val(msg.master_brand_id).trigger('change');

          var newOptionSupplier = new Option(`${msg.master_supplier_name}`, msg.master_supplier_id);
          $('#update-master_supplier_id').append(newOptionSupplier).trigger('change');
          $('#update-master_supplier_id').val(msg.master_supplier_id).trigger('change');

          var newOptionUnit = new Option(`${msg.master_unit_name} ( ${msg.master_unit_alias} )`, msg.master_unit_id);
          $('#update-master_unit_id').append(newOptionUnit).trigger('change');
          $('#update-master_unit_id').val(msg.master_unit_id).trigger('change');

          $('#update-master_item_file').attr({
            'src':`{{ asset('/5128f35c/item') }}/${msg.master_item_file}`
          });

          $('#update-master_item_file').parent('a').attr({
            'href':`{{ asset('/5128f35c/item') }}/${msg.master_item_file}`
          });
        });
      });
    }
  </script>  