  <!--  Modal content for the above example -->
  <div class="modal fade form-updateUnit" role="dialog" aria-labelledby="addUnit" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="addUnit">Update Satuan</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>
        <div class="modal-body">
          <form action="{{ $route->update }}" method="POST" class="form-horizontal ModalAjax onUpdateUnit" accept-charset="utf-8">
            @csrf
            <div class="form-group row">
              <label class="col-md-3 mb-n3 col-form-label">Inisial/Singkatan Satuan</label>
              <div class="col-md-9 mb-n3">
                <input type="text" class="form-control form-control-sm" maxlength="6" id="update-master_unit_alias" name="master_unit_alias" placeholder="Inisial/Singkatan Satuan (Max 6 Karakter)" required="">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label">Nama Satuan</label>
              <div class="col-md-9">
                <input type="text" class="form-control form-control-sm" id="update-master_unit_name" name="master_unit_name" placeholder="Nama Satuan" required="">
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
    function updateUnit(){
      $(".ActupdateUnit").unbind();
      $('.ActupdateUnit').on('click', function(event) {
        event.preventDefault();

        let id = $(this).data('unique');
        let msg = "";

        $('.onUpdateUnit').attr('action',`{{ $route->update }}/${id}`);

        $.getJSON(`{{ $route->find }}/${id}`, function(data) { 
          msg = data.messages;

          $.each(msg, function(index, val) {
            $(`#update-${index}`).val(val).trigger('change') ;
          });

        });
      });
    }
  </script>  