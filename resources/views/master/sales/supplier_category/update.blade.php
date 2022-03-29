  <!--  Modal content for the above example -->
  <div class="modal fade form-updateSupplierCategory" role="dialog" aria-labelledby="addSupplierCategory" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="addSupplierCategory">Update Kategori Supplier</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>
        <div class="modal-body">
          <form action="{{ route('master.sales.supplier_category.update') }}" method="POST" class="form-horizontal ModalAjax onUpdateSupplierCategory" accept-charset="utf-8">
            @csrf
            <div class="form-group row">
              <label class="col-md-3 mb-n3 col-form-label">Inisial/Singkatan Kategori Supplier</label>
              <div class="col-md-9 mb-n3">
                <input type="text" class="form-control form-control-sm" maxlength="6" id="update-master_supplier_category_alias" name="master_supplier_category_alias" placeholder="Inisial/Singkatan Kategori Supplier (Max 6 Karakter)" required="">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label">Nama Kategori Supplier</label>
              <div class="col-md-9">
                <input type="text" class="form-control form-control-sm" id="update-master_supplier_category_name" name="master_supplier_category_name" placeholder="Nama Kategori Supplier" required="">
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
    function updateSupplierCategory(){
      $(".ActupdateSupplierCategory").unbind();
      $('.ActupdateSupplierCategory').on('click', function(event) {
        event.preventDefault();

        let id = $(this).data('unique');
        let msg = "";

        $('.onUpdateSupplierCategory').attr('action',`{{ route('master.sales.supplier_category.update', ['id' => '']) }}/${id}`);

        $.getJSON(`{{ route('master.sales.supplier_category.find', ['id' => '']) }}/${id}`, function(data) { 
          msg = data.messages;

          $.each(msg, function(index, val) {
            $(`#update-${index}`).val(val).trigger('change') ;
          });

        });
      });
    }
  </script>  