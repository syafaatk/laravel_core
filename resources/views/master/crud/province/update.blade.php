  <!--  Modal content for the above example -->
  <div class="modal fade form-updateProvince" role="dialog" aria-labelledby="addCity" aria-hidden="true" style="display: none;">
    <div class="modal-dialog ">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="addCity">Update Provinsi</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>
        <div class="modal-body">
          <form action="{{ route('master.crud.province.update') }}" method="POST" class="form-horizontal ModalAjax onupdateProvince" accept-charset="utf-8">
            @csrf
            <div class="form-group row">
              <label class="col-md-3 mb-n3 col-form-label">Nama Provinsi</label>
              <div class="col-md-9 mb-n3">
                <input type="text" class="form-control form-control-sm" id="update-name_province" name="name_province"  placeholder="Nama Provinsi " required="">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label">Tahun Berdiri</label>
              <div class="col-md-9">
                <input type="text" class="form-control form-control-sm" id="update-since" name="since" placeholder="Tahun Berdiri" required="">
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
    function updateProvince(){
      //matike proses 
      $(".ActupdateProvince").unbind();

      // jalanke proses ubah data  
      $('.ActupdateProvince').on('click', function(event) {
        event.preventDefault();

        //data id yang dikirim
        let id = $(this).data('unique');
        let msg = "";

        // proses ubah data database nyo
        $('.onupdateProvince').attr('action',`{{ route('master.crud.province.update', ['id' => '']) }}/${id}`);
        // namun sebelumnyo ngerem data lamo dari id 
        $.getJSON(`{{ route('master.crud.province.find', ['id' => '']) }}/${id}`, function(data) { 
          msg = data.messages;

          $.each(msg, function(index, val) {
            $(`#update-${index}`).val(val).trigger('change') ;
          });

        });
      });
    }
  </script>