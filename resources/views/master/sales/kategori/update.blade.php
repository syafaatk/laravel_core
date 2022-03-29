  <!--  Modal content for the above example -->
  <div class="modal fade form-updateBrand" role="dialog" aria-labelledby="addBrand" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="addBrand">Update Kategori</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>
        <div class="modal-body">
          <form action="{{ route('master.sales.kategori.update') }}" method="POST" class="form-horizontal ModalAjax onUpdateBrand" accept-charset="utf-8">
            @csrf
            <div class="form-group row">
              <label class="col-md-3 mb-n3 col-form-label">Inisial/Singkatan Brand/Merk</label>
              <div class="col-md-9 mb-n3">
                <input type="text" class="form-control form-control-sm" maxlength="6" id="update-master_brand_alias" name="master_brand_alias" placeholder="Inisial/Singkatan Brand/Merk (Max 6 Karakter)" required="">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label">Nama Kategori</label>
              <div class="col-md-9">
                <input type="text" class="form-control form-control-sm" id="update-master_brand_name" name="master_brand_name" placeholder="Nama Kategori" required="">
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
    function updateBrand(){
      $(".ActupdateBrand").unbind();
      $('.ActupdateBrand').on('click', function(event) {
        event.preventDefault();

        let id = $(this).data('unique');
        let msg = "";

        $('.onUpdateBrand').attr('action',`{{ route('master.sales.kategori.update', ['id' => '']) }}/${id}`);

        $.getJSON(`{{ route('master.sales.kategori.find', ['id' => '']) }}/${id}`, function(data) { 
          msg = data.messages;

          $.each(msg, function(index, val) {
            $(`#update-${index}`).val(val).trigger('change') ;
          });

        });
      });
    }
  </script>