<!--  Modal content for the above example -->
<div class="modal fade form-addSetting" role="dialog" aria-labelledby="addSetting" aria-hidden="true" style="display: none;">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="addSetting">Pengaturan Whatsapp IT</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      </div>
      <div class="modal-body">
        <ul class="nav nav-tabs">
          <li class="nav-item">
            <a href="#FormSettings" data-toggle="tab" aria-expanded="false" class="nav-link active formSetting">
              <span> > Form Setting</span>            
            </a>
          </li>
          <li class="nav-item">
            <a href="#Qrcode" data-toggle="tab" aria-expanded="false" class="nav-link formQr">
              <span> > Login Whatsapp QR</span>            
            </a>
          </li>
          {{-- <div id="Login">

          </div> --}}
          
        </ul>
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane fade active show" id="FormSettings">
            <form action="{{ route('api.wa.saveconfigwa', ['type' => '']) }}/it" method="POST" class="form-horizontal mt-4 saveFormSetting" accept-charset="utf-8">
              @csrf
              <div class="form-group row">
                <label class="col-md-2 mb-n3 col-form-label">Host</label>
                <div class="col-md-7 mb-n3">
                  <input type="text" class="form-control form-control-sm" id="get-host" name="config_host" placeholder="Host" required="">
                </div>
                
              </div>
              <div class="form-group row">
                <label class="col-md-2 mb-n3 col-form-label">Port</label>
                <div class="col-md-7 mb-n3">
                  <input type="number" step="0.01" class="form-control form-control-sm" id="get-port" name="config_port" placeholder="Port" required="">
                </div>
                
              </div>
              <div class="form-group row">
                <label class="col-md-2 mb-n3 col-form-label">Timeout</label>
                <div class="col-md-7 mb-n3">
                  <input type="number" step="0.01" class="form-control form-control-sm" id="get-timeout" name="config_timeout" placeholder="Timeout" required="">
                </div>
                
              </div>
              <div class="form-group row">
                <label class="col-md-2 mb-n3 col-form-label">Phone</label>
                <div class="col-md-7 mb-n3">
                  <input type="number" step="0.01" class="form-control form-control-sm" id="get-phone" name="config_phone" placeholder="Phone" required="">
                </div>

              </div>
              <div class="form-group row">
                <label class="col-md-2 mb-n3 col-form-label">Status</label>
                <div class="col-md-7 mb-n3">
                  <input type="text" class="form-control form-control-sm bg-light" id="get-status" required="" readonly="">
                </div>

              </div>
              
              <hr>
              <div class="form-group row mt-2">
                <label class="col-md-2 col-form-label"></label>
                <div class="col-md-7">
                  <button type="button" class="btn btn-secondary BtnCloseModal" data-dismiss="modal">Tutup</button>
                  <button type="submit" class="btn btn-success"><i class="mdi mdi-plus-box-outline"></i> Simpan</button>
                </div>
              </div>
            </form>
          </div>
          

          <div role="tabpanel" class="tab-pane fade" id="Qrcode">
            <p id="StatusLogin" align="center"></p>
            <div id="img"></div>
            {{-- <img id="imgQrcode" src="" style="display: block; margin: auto;" /> --}}
            <hr>
            <div class="form-group row mt-2">

            </div>

          </div>


        </div>
      </div>

    </div>
  </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script>
  $(document).ready(function() {
    $("#PengaturanForm").unbind();
    $('#PengaturanForm').on('click', function(event) {
      event.preventDefault();

      $.getJSON(`{{ route('api.wa.find', ['type' => '']) }}/it`, function(data) { 
        msg = data.messages;
        $.each(msg, function(index, val) {
          var configJson = JSON.parse(msg.master_config_json);
          $(`#get-host`).val(configJson.host);
          $(`#get-port`).val(configJson.port);
          $(`#get-timeout`).val(configJson.timeout);
          $(`#get-phone`).val(configJson.phone);
          $(`#get-status`).val(configJson.status);

        });
        status = $(`#get-status`).val();
        if (status == 'Active') {
          qrCode();
          $('.formQr').trigger('click', function(){
            $(`.formQr`).show();
          });
        }else {
          $('.formQr').trigger('click', function(){
            $(`.formQr`).remove();
          });

        }
        
      });

    }); 


    $(".saveFormSetting").unbind();
    $(".saveFormSetting").submit(function(e) {
      e.preventDefault();
      setUncurrency();

      var form = $(this);
      var formData = new FormData(form[0]);
      var url = form.attr('action');
      $.ajax({
        type: "POST",
        url: `${url}`,
        data: formData,
        async: false,
        cache: false,
        contentType: false,
        enctype: 'multipart/form-data',
        processData: false,
        success: function(data)
        {
          // data = $.parseJSON(data);
          if (data.error==false) {
            Swal.fire('Sukses', data.messages ,'success').then((result) => { 
              $('.qrCode').attr({
                class: 'nav-link active qrCode'
              });

              $('#Qrcode').attr({
                class: 'tab-pane fade active show'
              });

              $('.formSetting').attr({
                class: 'nav-link formSetting'
              });

              $('#FormSettings').attr({
                class: 'tab-pane fade'
              });

              qrCode();

              $('.formQr').attr({
                class: 'nav-link formQr active'
              });
              $('.formQr').trigger('click');
              // $('#modal').show().formValidation('resetForm');
              // location.reload();
            });
          } else {
            Swal.fire('Gagal', data.messages ,'error')
          }
        },
        error: function(jqXHR, textStatus, errorThrown) {
          msg = $.parseJSON(jqXHR.responseText);

          if (msg.message=="CSRF token mismatch.") {
            $.get('/refresh-csrf').done(function(data){
              console.log("data", data);
              $('[name="_token"]').val(data.token);
              $submit.click();
            });
          } else {
            Swal.fire({
              title: 'Terjadi Kesalahan Server',
              icon: 'info',
              html: `Silahkan Hubungi Screenshoot dan Laporankan Ke Admin! <br> ${JSON.stringify(jqXHR)} <br> ${JSON.stringify(textStatus)} <br> ${JSON.stringify(errorThrown)}`,
            });

            $.post('{{ route('api.wa.sendError') }}', {
              msg: `${ JSON.stringify(msg)}`,
              status: `${ JSON.stringify(textStatus)}`,
              throw: `${ JSON.stringify(errorThrown)}`,
              form: `${ JSON.stringify(form.serializeArray())}`,
              url: `${ JSON.stringify(url)}`,
            }, function(json, textStatus) {
              console.log("json", json);
            });
          }
        },
      });
    });

    // var timeout = $(`#get-timeout`).val()+`000`;
    // console.log("timeout", timeout);
    // setInterval(function() { $("#PengaturanForm").load(location.ITef+" #Qrcode>*",""); }, timeout);

    var qrCode = function() {
      $.getJSON(`{{ route('api.wa.index', ['type' => '']) }}/it`, function(data) { 
        msg = data.messages;
        console.log("msg", msg);
        img = data.img;
        console.log("img", img);
        $(`#StatusLogin`).text(msg);
        if (msg == "Sudah Login") {
          $(`#img`).html();
        }else {
          $(`#img`).html(`<img id="imgQrcode" style="display: block; margin: auto;" />`);
          $('#imgQrcode').attr({
            src: img,
          });
        }
      });

    }

  });
</script>