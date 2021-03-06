  <!--  Modal content for the above example -->
  <div class="modal fade form-addItem" role="dialog" aria-labelledby="addItem" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="addItem">Tambah Item / Barang</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>
        <div class="modal-body">
          <form action="{{ route('master.sales.produk.add') }}" method="POST" class="form-horizontal ModalAjax" accept-charset="utf-8">
            @csrf

            <div class="form-group row">
              <label class="col-md-3 mb-n3 col-form-label">Kategori</label>
              <div class="col-md-9 mb-n3">
                <div class="input-group">
                  <div class="input-group-append">
                    <span class="input-group-text bg-dark text-white btn waves-effect waves-light" data-toggle="modal" data-target=".form-addBrand" title="Tambah Kategori Baru"><i class="mdi mdi-plus"></i></span>
                  </div>
                  <div class="flex-fill">
                    <select class="form-control select2_master_kategori" name="master_kategori_id" required="">
                      <option value="">Silahkan Pilih Kategori</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 mb-n3 col-form-label">Nama Produk</label>
              <div class="col-md-9 mb-n3">
                <input type="text" class="form-control form-control-sm" name="master_produk_name" placeholder="Nama Produk" required="">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 mb-n3 col-form-label">Deskripsi Produk</label>
              <div class="col-md-9 mb-n3">
                <!-- <input type="text" class="form-control form-control-sm" name="master_produk_deskripsi" placeholder="Deskripsi Produk" required=""> -->
                <textarea name="master_produk_deskripsi" class="form-control form-control-sm" placeholder="Deskripsi Produk" required="" id="master_produk_deskripsi"></textarea>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 mb-n3 col-form-label">Harga Modal Item / Barang</label>
              <div class="col-md-9 mb-n3">
                <input type="text" data-type="currency" class="form-control form-control-sm" name="master_produk_price" placeholder="Harga Modal Item / Barang" required="">
              </div>
            </div>

            <div class="form-group row">
              <label class="col-md-3 col-form-label">Gambar Item / Barang</label>
              <div class="col-md-9">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="customFile" name="master_produk_file">
                  <label class="custom-file-label" for="customFile">Pilih Gambar Item / Barang *Gambar Wajib Diinput</label>
                </div>
              </div>
            </div>
            <div class='progress' id="progressDivId">
                <div class='progress-bar' id='progressBar'></div>
                <div class='percent' id='percent'>0%</div>
            </div>
            <div style="height: 10px;"></div>
            <div id='outputImage'></div>
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
  <script>
    $(document).ready(function() {
      $("#master_produk_deskripsi").summernote({
        height: 250,
        minHeight: null,
        maxHeight: null,
        focus: !1
      })
    });
  </script>