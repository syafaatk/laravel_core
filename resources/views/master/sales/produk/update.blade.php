  <!--  Modal content for the above example -->
  <div class="modal fade form-updateItem" role="dialog" aria-labelledby="addItem" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="addItem">Update Produk</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>
        <div class="modal-body">
          <form action="{{ route('master.sales.produk.update') }}" method="POST" class="form-horizontal ModalAjax onUpdateItem" accept-charset="utf-8">
            @csrf
            
            <div class="form-group row">
              <label class="col-md-3 mb-n3 col-form-label">Kategori</label>
              <div class="col-md-9 mb-n3">
                <div class="input-group">
                  <div class="input-group-append">
                    <span class="input-group-text bg-dark text-white btn waves-effect waves-light" data-toggle="modal" data-target=".form-addBrand" title="Tambah Brand Baru"><i class="mdi mdi-plus"></i></span>
                  </div>
                  <div class="flex-fill">
                    <select class="form-control select2_master_kategori" id="update-master_kategori_id" name="master_kategori_id" required="">
                      <option value="">Silahkan Pilih Kategori</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 mb-n3 col-form-label">Nama Produk</label>
              <div class="col-md-9 mb-n3">
                <input type="text" class="form-control form-control-sm" id="update-master_produk_name" name="master_produk_name" placeholder="Nama Produk" required="">
              </div>
            </div>

            <div class="form-group row">
              <label class="col-md-3 mb-n3 col-form-label">Deskripsi Produk</label>
              <div class="col-md-9 mb-n3">
                <input type="text" class="form-control form-control-sm" id="update-master_produk_deskripsi" name="master_produk_deskripsi" placeholder="Deskripsi Produk" required="">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 mb-n3 col-form-label">Harga Produk</label>
              <div class="col-md-9 mb-n3">
                <input type="text" data-type="currency" class="form-control form-control-sm" id="update-master_produk_price" name="master_produk_price" placeholder="Harga Modal Produk" required="">
              </div>
            </div>
            
            <div class="form-group row">
              <label class="col-md-3 col-form-label">Gambar Produk Baru</label>
              <div class="col-md-9">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="customFile" name="master_produk_file">
                  <label class="custom-file-label" for="customFile">Pilih Gambar Produk Baru Jika Ingin Ganti</label>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label">Gambar Produk Lama</label>
              <div class="col-md-9">
                <a href="javascript:void(0);" target="_blank">
                  <img src="" alt="" id="update-master_produk_file" width="256px">
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

        $('.onUpdateItem').attr('action',`{{ route('master.sales.produk.update', ['id' => '']) }}/${id}`);

        $.getJSON(`{{ route('master.sales.produk.find', ['id' => '']) }}/${id}`, function(data) { 
          msg = data.messages;

          $.each(msg, function(index, val) {
            $(`#update-${index}`).val(val).trigger('change') ;
          });

          var newOptionBrand = new Option(`${msg.master_kategori_name} ( ${msg.master_kategori_alias} )`, msg.master_kategori_id);
          $('#update-master_kategori_id').append(newOptionBrand).trigger('change');
          $('#update-master_kategori_id').val(msg.master_kategori_id).trigger('change');

          $('#update-master_produk_file').attr({
            'src':`{{ asset('/5128f35c/item') }}/${msg.master_produk_file}`
          });

          $('#update-master_produk_file').parent('a').attr({
            'href':`{{ asset('/5128f35c/item') }}/${msg.master_produk_file}`
          });
        });
      });
    }
  </script>  