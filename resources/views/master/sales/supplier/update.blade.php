  <!--  Modal content for the above example -->
  <div class="modal fade form-updateSupplier" role="dialog" aria-labelledby="addSupplier" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="addSupplier">Update Supplier</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>
        <div class="modal-body">
          <form action="{{ route('master.sales.supplier.update') }}" method="POST" class="form-horizontal ModalAjax onUpdateSupplier" accept-charset="utf-8">
            @csrf
            <div class="form-group row">
              <label class="col-md-3 mb-n3 col-form-label">Kategori Supplier</label>
              <div class="col-md-9 mb-n3">
                <div class="input-group">
                  <div class="input-group-append">
                    <span class="input-group-text bg-dark text-white btn waves-effect waves-light" data-toggle="modal" data-target=".form-addSupplierCategory" title="Tambah Kategori Supplier Baru"><i class="mdi mdi-plus"></i></span>
                  </div>
                  <div class="flex-fill">
                    <select class="form-control select2_master_supplier_category" id="update-master_supplier_category_id" name="master_supplier_category_id" required="">
                      <option value="">Silahkan Pilih Kategori Supplier</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 mb-n3 col-form-label">Nama Supplier</label>
              <div class="col-md-9 mb-n3">
                <input type="text" class="form-control form-control-sm" id="update-master_supplier_name" name="master_supplier_name" placeholder="Nama Supplier" required="">
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
              <label class="col-md-3 mb-n3 col-form-label">Alamat Supplier</label>
              <div class="col-md-9 mb-n3">
                <textarea class="form-control form-control-sm" id="update-master_supplier_address" name="master_supplier_address" placeholder="Alamat Supplier" required=""></textarea>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 mb-n3 col-form-label">Kota</label>
              <div class="col-md-9 mb-n3">
                <div class="input-group">
                  <div class="input-group-append">
                    <span class="input-group-text bg-dark text-white btn waves-effect waves-light" data-toggle="modal" data-target=".form-addCity" title="Tambah Kota Baru" required=""><i class="mdi mdi-plus"></i></span>
                  </div>
                  <div class="flex-fill">
                    <select class="form-control select2_master_city" id="update-master_city_id" name="master_city_id">
                      <option value="">Silahkan Pilih Kota</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 mb-n3 col-form-label">No. Hp Supplier</label>
              <div class="col-md-9 mb-n3">
                <input type="text" class="form-control form-control-sm" id="update-master_supplier_phone_mobile" name="master_supplier_phone_mobile" placeholder="No Hp Supplier" required="">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 mb-n3 col-form-label">No. Kantor Supplier</label>
              <div class="col-md-9 mb-n3">
                <input type="text" class="form-control form-control-sm" id="update-master_supplier_phone_office" name="master_supplier_phone_office" placeholder="No Kantor Supplier">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 mb-n3 col-form-label">PIC Supplier</label>
              <div class="col-md-9 mb-n3">
                <input type="text" class="form-control form-control-sm" id="update-master_supplier_pic" name="master_supplier_pic" placeholder="PIC Supplier">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 mb-n3 col-form-label">Jabatan Supplier</label>
              <div class="col-md-9 mb-n3">
                <input type="text" class="form-control form-control-sm" id="update-master_supplier_section" name="master_supplier_section" placeholder="Jabatan Supplier" required="">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 mb-n3 col-form-label">Email Supplier</label>
              <div class="col-md-9 mb-n3">
                <input type="text" class="form-control form-control-sm" id="update-master_supplier_email" name="master_supplier_email" placeholder="Email Supplier">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label">Reg. Date</label>
              <div class="col-md-9">
                <div class="input-group">
                  <input type="text" id="update-master_supplier_date_of_reg" name="master_supplier_date_of_reg" class="form-control form-control-sm datepicker-here" placeholder="Tgl Terdaftar Sebagai Supplier.  [ dd/mm/yyyy ]" value="{{ date('Y-m-d') }}">
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="ti-calendar"></i></span>
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
  <script type="text/javascript">
    function updateSupplier(){
      $(".ActupdateSupplier").unbind();
      $('.ActupdateSupplier').on('click', function(event) {
        event.preventDefault();

        let id = $(this).data('unique');
        let msg = "";

        $('.onUpdateSupplier').attr('action',`{{ route('master.sales.supplier.update', ['id' => '']) }}/${id}`);

        $.getJSON(`{{ route('master.sales.supplier.find', ['id' => '']) }}/${id}`, function(data) { 
          msg = data.messages;

          $.each(msg, function(index, val) {
            $(`#update-${index}`).val(val).trigger('change') ;
          });

          var newOptionCity = new Option(`${msg.master_city_name} ( ${msg.master_city_alias} )`, msg.master_city_id);
          $('#update-master_city_id').append(newOptionCity).trigger('change');
          $('#update-master_city_id').val(msg.master_city_id).trigger('change');

          var newOptionBrand = new Option(`${msg.master_brand_name} ( ${msg.master_brand_alias} )`, msg.master_brand_id);
          $('#update-master_brand_id').append(newOptionBrand).trigger('change');
          $('#update-master_brand_id').val(msg.master_brand_id).trigger('change');

          var newOptionSupplierCategory = new Option(`${msg.master_supplier_category_name} ( ${msg.master_supplier_category_alias} )`, msg.master_supplier_category_id);
          $('#update-master_supplier_category_id').append(newOptionSupplierCategory).trigger('change');
          $('#update-master_supplier_category_id').val(msg.master_supplier_category_id).trigger('change');
        });
      });
    }
  </script>  