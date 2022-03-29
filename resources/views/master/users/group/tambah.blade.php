  <!--  Modal content for the above example -->
  <div class="modal fade form-addUserGroup" role="dialog" aria-labelledby="addUserGroup" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="addUserGroup">Tambah User Group</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>
        <div class="modal-body">
          <form action="{{ route('master.acl.users_group.add') }}" method="POST" class="form-horizontal ModalAddGroup" accept-charset="utf-8">
            @csrf
            <div class="form-group row">
              <label class="col-md-2 mt-n2 col-form-label">Inisial/Singkatan User Group</label>
              <div class="col-md-10 mt-n2">
                <input type="text" class="form-control form-control-sm" maxlength="6" name="users_group_alias" placeholder="Inisial/Singkatan User Group (Max 6 Karakter)" required="">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-2 mt-n2 col-form-label">Nama User Group</label>
              <div class="col-md-10 mt-n2">
                <input type="text" class="form-control form-control-sm" name="users_group_name" placeholder="Nama User Group" required="">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-2 mt-n2 col-form-label">Default URL</label>
              <div class="col-md-10 mt-n2">
                <input type="text" class="form-control form-control-sm" name="user_group_default_pages" placeholder="Default URL" required="">
              </div>
            </div>
            <hr><h5> Hak Akses </h5><hr>
            <div class="form-group row">
              <div class="table-responsive">
                <table class="table table-sm table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Akses</th>
                      <th>Sub Akses</th>
                      <th>Tindakan</th>
                      <th>Sub Tindakan</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="T." data-parent="T.Dashboard" id="access['Dashboard']" value="true" name="access[Dashboard]">
                          <label class="custom-control-label" for="access['Dashboard']"> Dashboard</label>
                        </div> 
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="T.Dashboard" data-parent="T.Grafik" id="access['Dashboard']['Grafik']" value="true" name="access[Dashboard]['Grafik']">
                          <label class="custom-control-label" for="access['Dashboard']['Grafik']"> Grafik</label>
                        </div> 
                      </td>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                    </tr>
                    <tr>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                    </tr>
                    {{-- komen --}}
                    <tr>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="T." data-parent="T.Penjualan" id="access['Penjualan']" value="true" name="access['Penjualan']">
                          <label class="custom-control-label" for="access['Penjualan']"> Penjualan</label>
                        </div> 
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="T.Penjualan" data-parent="T.P.Coorporate" id="access['Penjualan']['Coorporate']" value="true" name="access['Penjualan']['Coorporate']">
                          <label class="custom-control-label" for="access['Penjualan']['Coorporate']"> Coorporate</label>
                        </div> 
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="T.P.Coorporate" data-parent="T.P.C.Tambah" id="access['Penjualan']['Coorporate']['Tambah']" value="true" name="access['Penjualan']['Coorporate']['Tambah']">
                          <label class="custom-control-label" for="access['Penjualan']['Coorporate']['Tambah']"> Tambah</label>
                        </div> 
                      </td>
                      <td class="bg-light text-center">|</td>
                    </tr>
                    <tr>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                    </tr>
                    <tr>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">
                        <i class="mdi mdi-plus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-arrow-right"></i>
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="T.P.Coorporate" data-parent="T.P.C.Filter Penjualan" id="access['Penjualan']['Coorporate']['Filter Penjualan']" value="true" name="access['Penjualan']['Coorporate']['Filter Penjualan']">
                          <label class="custom-control-label" for="access['Penjualan']['Coorporate']['Filter Penjualan']"> Filter Penjualan</label>
                        </div> 
                      </td>
                      <td class="bg-light text-center">|</td>
                    </tr>
                    <tr>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                    </tr>
                    <tr>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">
                        <i class="mdi mdi-plus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-arrow-right"></i>
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="T.P.Coorporate" data-parent="T.P.C.Filter Penjualan" id="access['Penjualan']['Coorporate']['Reload Data']" value="true" name="access['Penjualan']['Coorporate']['Reload Data']">
                          <label class="custom-control-label" for="access['Penjualan']['Coorporate']['Reload Data']"> Reload Data</label>
                        </div> 
                      </td>
                      <td class="bg-light text-center">|</td>
                    </tr>
                    <tr>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                    </tr>
                    <tr>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">
                        <i class="mdi mdi-plus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-arrow-right"></i>
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="T.P.Coorporate" data-parent="T.P.C.Pengaturan" id="access['Penjualan']['Coorporate']['Pengaturan']" value="true" name="access['Penjualan']['Coorporate']['Pengaturan']">
                          <label class="custom-control-label" for="access['Penjualan']['Coorporate']['Pengaturan']"> Pengaturan</label>
                        </div> 
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="T.P.C.Pengaturan" data-parent="T.P.C.Pengaturan.Tax" id="access['Penjualan']['Coorporate']['Pengaturan']['Tax']" value="true" name="access['Penjualan']['Coorporate']['Pengaturan']['Tax']">
                          <label class="custom-control-label" for="access['Penjualan']['Coorporate']['Pengaturan']['Tax']"> Tax</label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">
                        <i class="mdi mdi-plus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-arrow-right"></i>
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="T.P.C.Pengaturan" data-parent="T.P.C.Pengaturan.Printout" id="access['Penjualan']['Coorporate']['Pengaturan']['Printout']" value="true" name="access['Penjualan']['Coorporate']['Pengaturan']['Printout']">
                          <label class="custom-control-label" for="access['Penjualan']['Coorporate']['Pengaturan']['Printout']"> Printout</label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                    </tr>
                    <tr>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">
                        <i class="mdi mdi-plus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-arrow-right"></i>
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="T.P.Coorporate" data-parent="T.P.C.Penawaran" id="access['Penjualan']['Coorporate']['Penawaran']" value="true" name="access['Penjualan']['Coorporate']['Penawaran']">
                          <label class="custom-control-label" for="access['Penjualan']['Coorporate']['Penawaran']"> Tab Penawaran</label>
                        </div>
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="T.P.C.Penawaran" data-parent="T.P.C.Penawaran.Approved" id="access['Penjualan']['Coorporate']['Penawaran']['Approved']" value="true" name="access['Penjualan']['Coorporate']['Penawaran']['Approved']">
                          <label class="custom-control-label" for="access['Penjualan']['Coorporate']['Penawaran']['Approved']"> Approved</label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">
                        <i class="mdi mdi-plus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-arrow-right"></i>
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="T.P.C.Penawaran" data-parent="T.P.C.Penawaran.Rejected" id="access['Penjualan']['Coorporate']['Penawaran']['Rejected']" value="true" name="access['Penjualan']['Coorporate']['Penawaran']['Rejected']">
                          <label class="custom-control-label" for="access['Penjualan']['Coorporate']['Penawaran']['Rejected']"> Rejected</label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">
                        <i class="mdi mdi-plus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-arrow-right"></i>
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="T.P.C.Penawaran" data-parent="T.P.C.Penawaran.Edit" id="access['Penjualan']['Coorporate']['Penawaran']['Edit']" value="true" name="access['Penjualan']['Coorporate']['Penawaran']['Edit']">
                          <label class="custom-control-label" for="access['Penjualan']['Coorporate']['Penawaran']['Edit']"> Edit</label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">
                        <i class="mdi mdi-plus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-arrow-right"></i>
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="T.P.C.Penawaran" data-parent="T.P.C.Penawaran.Details" id="access['Penjualan']['Coorporate']['Penawaran']['Details']" value="true" name="access['Penjualan']['Coorporate']['Penawaran']['Details']">
                          <label class="custom-control-label" for="access['Penjualan']['Coorporate']['Penawaran']['Details']"> Details</label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                    </tr>
                    <tr>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">
                        <i class="mdi mdi-plus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-arrow-right"></i>
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="T.P.Coorporate" data-parent="T.P.C.Progress" id="access['Penjualan']['Coorporate']['Progress']" value="true" name="access['Penjualan']['Coorporate']['Progress']">
                          <label class="custom-control-label" for="access['Penjualan']['Coorporate']['Progress']"> Tab Progress</label>
                        </div>
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="T.P.C.Progress" data-parent="T.P.C.Progress.BySales" id="access['Penjualan']['Coorporate']['Progress']['BySales']" value="true" name="access['Penjualan']['Coorporate']['Progress']['BySales']">
                          <label class="custom-control-label" for="access['Penjualan']['Coorporate']['Progress']['BySales']"> BySales</label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">
                        <i class="mdi mdi-plus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-arrow-right"></i>
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="T.P.C.Progress" data-parent="T.P.C.Progress.ByAccounting" id="access['Penjualan']['Coorporate']['Progress']['ByAccounting']" value="true" name="access['Penjualan']['Coorporate']['Progress']['ByAccounting']">
                          <label class="custom-control-label" for="access['Penjualan']['Coorporate']['Progress']['ByAccounting']"> ByAccounting</label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">
                        <i class="mdi mdi-plus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-arrow-right"></i>
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="T.P.C.Progress" data-parent="T.P.C.Progress.Rejected" id="access['Penjualan']['Coorporate']['Progress']['Rejected']" value="true" name="access['Penjualan']['Coorporate']['Progress']['Rejected']">
                          <label class="custom-control-label" for="access['Penjualan']['Coorporate']['Progress']['Rejected']"> Rejected</label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">
                        <i class="mdi mdi-plus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-arrow-right"></i>
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="T.P.C.Progress" data-parent="T.P.C.Progress.Edit" id="access['Penjualan']['Coorporate']['Progress']['Edit']" value="true" name="access['Penjualan']['Coorporate']['Progress']['Edit']">
                          <label class="custom-control-label" for="access['Penjualan']['Coorporate']['Progress']['Edit']"> Edit</label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">
                        <i class="mdi mdi-plus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-arrow-right"></i>
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="T.P.C.Progress" data-parent="T.P.C.Progress.Details" id="access['Penjualan']['Coorporate']['Progress']['Details']" value="true" name="access['Penjualan']['Coorporate']['Progress']['Details']">
                          <label class="custom-control-label" for="access['Penjualan']['Coorporate']['Progress']['Details']"> Details</label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                    </tr>
                    <tr>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">
                        <i class="mdi mdi-plus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-arrow-right"></i>
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="T.P.Coorporate" data-parent="T.P.C.Piutang" id="access['Penjualan']['Coorporate']['Piutang']" value="true" name="access['Penjualan']['Coorporate']['Piutang']">
                          <label class="custom-control-label" for="access['Penjualan']['Coorporate']['Piutang']"> Tab Piutang</label>
                        </div>
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="T.P.C.Piutang" data-parent="T.P.C.Piutang.ByAccounting" id="access['Penjualan']['Coorporate']['Piutang']['ByAccounting']" value="true" name="access['Penjualan']['Coorporate']['Piutang']['ByAccounting']">
                          <label class="custom-control-label" for="access['Penjualan']['Coorporate']['Piutang']['ByAccounting']"> ByAccounting</label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">
                        <i class="mdi mdi-plus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-arrow-right"></i>
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="T.P.C.Piutang" data-parent="T.P.C.Piutang.Lunas" id="access['Penjualan']['Coorporate']['Piutang']['Lunas']" value="true" name="access['Penjualan']['Coorporate']['Piutang']['Lunas']">
                          <label class="custom-control-label" for="access['Penjualan']['Coorporate']['Piutang']['Lunas']"> Lunas</label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">
                        <i class="mdi mdi-plus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-arrow-right"></i>
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="T.P.C.Piutang" data-parent="T.P.C.Piutang.Progress" id="access['Penjualan']['Coorporate']['Piutang']['Progress']" value="true" name="access['Penjualan']['Coorporate']['Piutang']['Progress']">
                          <label class="custom-control-label" for="access['Penjualan']['Coorporate']['Piutang']['Progress']"> Progress</label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">
                        <i class="mdi mdi-plus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-arrow-right"></i>
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="T.P.C.Piutang" data-parent="T.P.C.Piutang.TakTerbayar" id="access['Penjualan']['Coorporate']['Piutang']['PiutangTakTerbayar']" value="true" name="access['Penjualan']['Coorporate']['Piutang']['PiutangTakTerbayar']">
                          <label class="custom-control-label" for="access['Penjualan']['Coorporate']['Piutang']['PiutangTakTerbayar']"> PiutangTakTerbayar</label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">
                        <i class="mdi mdi-plus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-arrow-right"></i>
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="T.P.C.Piutang" data-parent="T.P.C.Piutang.Details" id="access['Penjualan']['Coorporate']['Piutang']['Details']" value="true" name="access['Penjualan']['Coorporate']['Piutang']['Details']">
                          <label class="custom-control-label" for="access['Penjualan']['Coorporate']['Piutang']['Details']"> Details</label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                    </tr>
                    <tr>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">
                        <i class="mdi mdi-plus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-arrow-right"></i>
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="T.P.Coorporate" data-parent="T.P.C.BO" id="access['Penjualan']['Coorporate']['Batal Order']" value="true" name="access['Penjualan']['Coorporate']['Batal Order']">
                          <label class="custom-control-label" for="access['Penjualan']['Coorporate']['Batal Order']"> Tab Batal Order</label>
                        </div>
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="T.P.C.BO" data-parent="T.P.C.BO.Batal OrderPenawaran" id="access['Penjualan']['Coorporate']['Batal Order']['Penawaran']" value="true" name="access['Penjualan']['Coorporate']['Batal Order']['Penawaran']">
                          <label class="custom-control-label" for="access['Penjualan']['Coorporate']['Batal Order']['Penawaran']"> Penawaran</label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">
                        <i class="mdi mdi-plus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-arrow-right"></i>
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="T.P.C.BO" data-parent="T.P.C.BO.Details" id="access['Penjualan']['Coorporate']['Batal Order']['Details']" value="true" name="access['Penjualan']['Coorporate']['Batal Order']['Details']">
                          <label class="custom-control-label" for="access['Penjualan']['Coorporate']['Batal Order']['Details']"> Details</label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                    </tr>
                    <tr>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">
                        <i class="mdi mdi-plus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-arrow-right"></i>
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="T.P.Coorporate" data-parent="T.P.C.P.PTT" id="access['Penjualan']['Coorporate']['Piutang Tak Terbayar']" value="true" name="access['Penjualan']['Coorporate']['Piutang Tak Terbayar']">
                          <label class="custom-control-label" for="access['Penjualan']['Coorporate']['Piutang Tak Terbayar']"> Tab Piutang Tak Terbayar</label>
                        </div>
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="T.P.C.P.PTT" data-parent="T.P.C.P.PTT.Details" id="access['Penjualan']['Coorporate']['Piutang Tak Terbayar']['Details']" value="true" name="access['Penjualan']['Coorporate']['Piutang Tak Terbayar']['Details']">
                          <label class="custom-control-label" for="access['Penjualan']['Coorporate']['Piutang Tak Terbayar']['Details']"> Details</label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                    </tr>
                    <tr>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">
                        <i class="mdi mdi-plus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-arrow-right"></i>
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="T.P.Coorporate" data-parent="T.P.C.L" id="access['Penjualan']['Coorporate']['Lunas']" value="true" name="access['Penjualan']['Coorporate']['Lunas']">
                          <label class="custom-control-label" for="access['Penjualan']['Coorporate']['Lunas']"> Tab Lunas</label>
                        </div>
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="T.P.C.L" data-parent="T.P.C.L.Details" id="access['Penjualan']['Coorporate']['Lunas']['Details']" value="true" name="access['Penjualan']['Coorporate']['Lunas']['Details']">
                          <label class="custom-control-label" for="access['Penjualan']['Coorporate']['Lunas']['Details']"> Details</label>
                        </div>
                      </td>
                    </tr>
                    {{-- komen --}}
                    <tr>
                      <td class="bg-light text-center">
                        <i class="mdi mdi-plus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-arrow-right"></i>
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="T.Penjualan" data-parent="T.P.Retail" id="access['Penjualan']['Retail']" value="true" name="access['Penjualan']['Retail']">
                          <label class="custom-control-label" for="access['Penjualan']['Retail']"> Retail</label>
                        </div> 
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="T.P.Retail" data-parent="T.P.R.Tambah" id="access['Penjualan']['Retail']['Tambah']" value="true" name="access['Penjualan']['Retail']['Tambah']">
                          <label class="custom-control-label" for="access['Penjualan']['Retail']['Tambah']"> Tambah</label>
                        </div> 
                      </td>
                      <td class="bg-light text-center">|</td>
                    </tr>
                    <tr>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                    </tr>
                    <tr>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">
                        <i class="mdi mdi-plus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-arrow-right"></i>
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="T.P.Retail" data-parent="T.P.R.Filter Penjualan" id="access['Penjualan']['Retail']['Filter Penjualan']" value="true" name="access['Penjualan']['Retail']['Filter Penjualan']">
                          <label class="custom-control-label" for="access['Penjualan']['Retail']['Filter Penjualan']"> Filter Penjualan</label>
                        </div> 
                      </td>
                      <td class="bg-light text-center">|</td>
                    </tr>
                    <tr>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                    </tr>
                    <tr>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">
                        <i class="mdi mdi-plus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-arrow-right"></i>
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="T.P.Retail" data-parent="T.P.R.Filter Penjualan" id="access['Penjualan']['Retail']['Reload Data']" value="true" name="access['Penjualan']['Retail']['Reload Data']">
                          <label class="custom-control-label" for="access['Penjualan']['Retail']['Reload Data']"> Reload Data</label>
                        </div> 
                      </td>
                      <td class="bg-light text-center">|</td>
                    </tr>
                    <tr>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                    </tr>
                    <tr>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">
                        <i class="mdi mdi-plus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-arrow-right"></i>
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="T.P.Retail" data-parent="T.P.R.Pengaturan" id="access['Penjualan']['Retail']['Pengaturan']" value="true" name="access['Penjualan']['Retail']['Pengaturan']">
                          <label class="custom-control-label" for="access['Penjualan']['Retail']['Pengaturan']"> Pengaturan</label>
                        </div> 
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="T.P.R.Pengaturan" data-parent="T.P.R.Pengaturan.Tax" id="access['Penjualan']['Retail']['Pengaturan']['Tax']" value="true" name="access['Penjualan']['Retail']['Pengaturan']['Tax']">
                          <label class="custom-control-label" for="access['Penjualan']['Retail']['Pengaturan']['Tax']"> Tax</label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">
                        <i class="mdi mdi-plus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-arrow-right"></i>
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="T.P.R.Pengaturan" data-parent="T.P.R.Pengaturan.Printout" id="access['Penjualan']['Retail']['Pengaturan']['Printout']" value="true" name="access['Penjualan']['Retail']['Pengaturan']['Printout']">
                          <label class="custom-control-label" for="access['Penjualan']['Retail']['Pengaturan']['Printout']"> Printout</label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                    </tr>
                    <tr>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">
                        <i class="mdi mdi-plus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-arrow-right"></i>
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="T.P.Retail" data-parent="T.P.R.Penawaran" id="access['Penjualan']['Retail']['Penawaran']" value="true" name="access['Penjualan']['Retail']['Penawaran']">
                          <label class="custom-control-label" for="access['Penjualan']['Retail']['Penawaran']"> Tab Penawaran</label>
                        </div>
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="T.P.R.Penawaran" data-parent="T.P.R.Penawaran.Approved" id="access['Penjualan']['Retail']['Penawaran']['Approved']" value="true" name="access['Penjualan']['Retail']['Penawaran']['Approved']">
                          <label class="custom-control-label" for="access['Penjualan']['Retail']['Penawaran']['Approved']"> Approved</label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">
                        <i class="mdi mdi-plus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-arrow-right"></i>
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="T.P.R.Penawaran" data-parent="T.P.R.Penawaran.Rejected" id="access['Penjualan']['Retail']['Penawaran']['Rejected']" value="true" name="access['Penjualan']['Retail']['Penawaran']['Rejected']">
                          <label class="custom-control-label" for="access['Penjualan']['Retail']['Penawaran']['Rejected']"> Rejected</label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">
                        <i class="mdi mdi-plus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-arrow-right"></i>
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="T.P.R.Penawaran" data-parent="T.P.R.Penawaran.Edit" id="access['Penjualan']['Retail']['Penawaran']['Edit']" value="true" name="access['Penjualan']['Retail']['Penawaran']['Edit']">
                          <label class="custom-control-label" for="access['Penjualan']['Retail']['Penawaran']['Edit']"> Edit</label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">
                        <i class="mdi mdi-plus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-arrow-right"></i>
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="T.P.R.Penawaran" data-parent="T.P.R.Penawaran.Details" id="access['Penjualan']['Retail']['Penawaran']['Details']" value="true" name="access['Penjualan']['Retail']['Penawaran']['Details']">
                          <label class="custom-control-label" for="access['Penjualan']['Retail']['Penawaran']['Details']"> Details</label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                    </tr>
                    <tr>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">
                        <i class="mdi mdi-plus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-arrow-right"></i>
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="T.P.Retail" data-parent="T.P.R.Progress" id="access['Penjualan']['Retail']['Progress']" value="true" name="access['Penjualan']['Retail']['Progress']">
                          <label class="custom-control-label" for="access['Penjualan']['Retail']['Progress']"> Tab Progress</label>
                        </div>
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="T.P.R.Progress" data-parent="T.P.R.Progress.BySales" id="access['Penjualan']['Retail']['Progress']['BySales']" value="true" name="access['Penjualan']['Retail']['Progress']['BySales']">
                          <label class="custom-control-label" for="access['Penjualan']['Retail']['Progress']['BySales']"> BySales</label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">
                        <i class="mdi mdi-plus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-arrow-right"></i>
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="T.P.R.Progress" data-parent="T.P.R.Progress.ByAccounting" id="access['Penjualan']['Retail']['Progress']['ByAccounting']" value="true" name="access['Penjualan']['Retail']['Progress']['ByAccounting']">
                          <label class="custom-control-label" for="access['Penjualan']['Retail']['Progress']['ByAccounting']"> ByAccounting</label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">
                        <i class="mdi mdi-plus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-arrow-right"></i>
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="T.P.R.Progress" data-parent="T.P.R.Progress.Rejected" id="access['Penjualan']['Retail']['Progress']['Rejected']" value="true" name="access['Penjualan']['Retail']['Progress']['Rejected']">
                          <label class="custom-control-label" for="access['Penjualan']['Retail']['Progress']['Rejected']"> Rejected</label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">
                        <i class="mdi mdi-plus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-arrow-right"></i>
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="T.P.R.Progress" data-parent="T.P.R.Progress.Edit" id="access['Penjualan']['Retail']['Progress']['Edit']" value="true" name="access['Penjualan']['Retail']['Progress']['Edit']">
                          <label class="custom-control-label" for="access['Penjualan']['Retail']['Progress']['Edit']"> Edit</label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">
                        <i class="mdi mdi-plus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-arrow-right"></i>
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="T.P.R.Progress" data-parent="T.P.R.Progress.Details" id="access['Penjualan']['Retail']['Progress']['Details']" value="true" name="access['Penjualan']['Retail']['Progress']['Details']">
                          <label class="custom-control-label" for="access['Penjualan']['Retail']['Progress']['Details']"> Details</label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                    </tr>
                    <tr>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">
                        <i class="mdi mdi-plus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-arrow-right"></i>
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="T.P.Retail" data-parent="T.P.R.Piutang" id="access['Penjualan']['Retail']['Piutang']" value="true" name="access['Penjualan']['Retail']['Piutang']">
                          <label class="custom-control-label" for="access['Penjualan']['Retail']['Piutang']"> Tab Piutang</label>
                        </div>
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="T.P.R.Piutang" data-parent="T.P.R.Piutang.ByAccounting" id="access['Penjualan']['Retail']['Piutang']['ByAccounting']" value="true" name="access['Penjualan']['Retail']['Piutang']['ByAccounting']">
                          <label class="custom-control-label" for="access['Penjualan']['Retail']['Piutang']['ByAccounting']"> ByAccounting</label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">
                        <i class="mdi mdi-plus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-arrow-right"></i>
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="T.P.R.Piutang" data-parent="T.P.R.Piutang.Lunas" id="access['Penjualan']['Retail']['Piutang']['Lunas']" value="true" name="access['Penjualan']['Retail']['Piutang']['Lunas']">
                          <label class="custom-control-label" for="access['Penjualan']['Retail']['Piutang']['Lunas']"> Lunas</label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">
                        <i class="mdi mdi-plus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-arrow-right"></i>
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="T.P.R.Piutang" data-parent="T.P.R.Piutang.Progress" id="access['Penjualan']['Retail']['Piutang']['Progress']" value="true" name="access['Penjualan']['Retail']['Piutang']['Progress']">
                          <label class="custom-control-label" for="access['Penjualan']['Retail']['Piutang']['Progress']"> Progress</label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">
                        <i class="mdi mdi-plus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-arrow-right"></i>
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="T.P.R.Piutang" data-parent="T.P.R.Piutang.TakTerbayar" id="access['Penjualan']['Retail']['Piutang']['PiutangTakTerbayar']" value="true" name="access['Penjualan']['Retail']['Piutang']['PiutangTakTerbayar']">
                          <label class="custom-control-label" for="access['Penjualan']['Retail']['Piutang']['PiutangTakTerbayar']"> PiutangTakTerbayar</label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">
                        <i class="mdi mdi-plus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-arrow-right"></i>
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="T.P.R.Piutang" data-parent="T.P.R.Piutang.Details" id="access['Penjualan']['Retail']['Piutang']['Details']" value="true" name="access['Penjualan']['Retail']['Piutang']['Details']">
                          <label class="custom-control-label" for="access['Penjualan']['Retail']['Piutang']['Details']"> Details</label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                    </tr>
                    <tr>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">
                        <i class="mdi mdi-plus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-arrow-right"></i>
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="T.P.Retail" data-parent="T.P.R.BO" id="access['Penjualan']['Retail']['Batal Order']" value="true" name="access['Penjualan']['Retail']['Batal Order']">
                          <label class="custom-control-label" for="access['Penjualan']['Retail']['Batal Order']"> Tab Batal Order</label>
                        </div>
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="T.P.R.BO" data-parent="T.P.R.BO.Batal OrderPenawaran" id="access['Penjualan']['Retail']['Batal Order']['Penawaran']" value="true" name="access['Penjualan']['Retail']['Batal Order']['Penawaran']">
                          <label class="custom-control-label" for="access['Penjualan']['Retail']['Batal Order']['Penawaran']"> Penawaran</label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">
                        <i class="mdi mdi-plus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-arrow-right"></i>
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="T.P.R.BO" data-parent="T.P.R.BO.Details" id="access['Penjualan']['Retail']['Batal Order']['Details']" value="true" name="access['Penjualan']['Retail']['Batal Order']['Details']">
                          <label class="custom-control-label" for="access['Penjualan']['Retail']['Batal Order']['Details']"> Details</label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                    </tr>
                    <tr>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">
                        <i class="mdi mdi-plus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-arrow-right"></i>
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="T.P.Retail" data-parent="T.P.R.P.PTT" id="access['Penjualan']['Retail']['Piutang Tak Terbayar']" value="true" name="access['Penjualan']['Retail']['Piutang Tak Terbayar']">
                          <label class="custom-control-label" for="access['Penjualan']['Retail']['Piutang Tak Terbayar']"> Tab Piutang Tak Terbayar</label>
                        </div>
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="T.P.R.P.PTT" data-parent="T.P.R.P.PTT.Details" id="access['Penjualan']['Retail']['Piutang Tak Terbayar']['Details']" value="true" name="access['Penjualan']['Retail']['Piutang Tak Terbayar']['Details']">
                          <label class="custom-control-label" for="access['Penjualan']['Retail']['Piutang Tak Terbayar']['Details']"> Details</label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                    </tr>
                    <tr>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">
                        <i class="mdi mdi-plus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-arrow-right"></i>
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="T.P.Retail" data-parent="T.P.R.L" id="access['Penjualan']['Retail']['Lunas']" value="true" name="access['Penjualan']['Retail']['Lunas']">
                          <label class="custom-control-label" for="access['Penjualan']['Retail']['Lunas']"> Tab Lunas</label>
                        </div>
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="T.P.R.L" data-parent="T.P.R.L.Details" id="access['Penjualan']['Retail']['Lunas']['Details']" value="true" name="access['Penjualan']['Retail']['Lunas']['Details']">
                          <label class="custom-control-label" for="access['Penjualan']['Retail']['Lunas']['Details']"> Details</label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                    </tr>
                    <tr>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="T." data-parent="T.DM" id="access['Data Master']" value="true" name="access['Data Master']">
                          <label class="custom-control-label" for="access['Data Master']"> Data Master</label>
                        </div>
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="T.DM" data-parent="T.DM.AC" id="access['Data Master']['Access Control']" value="true" name="access['Data Master']['Access Control']">
                          <label class="custom-control-label" for="access['Data Master']['Access Control']"> Access Control</label>
                        </div>
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="T.DM.AC" data-parent="T.DM.AC.U" id="access['Data Master']['Access Control']['Users']" value="true" name="access['Data Master']['Access Control']['Users']">
                          <label class="custom-control-label" for="access['Data Master']['Access Control']['Users']"> Users</label>
                        </div>
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="T.DM.AC.U" data-parent="T.DM.AC.U.Tambah" id="access['Data Master']['Access Control']['Users']['Tambah']" value="true" name="access['Data Master']['Access Control']['Users']['Tambah']">
                          <label class="custom-control-label" for="access['Data Master']['Access Control']['Users']['Tambah']"> Tambah</label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">
                        <i class="mdi mdi-plus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-arrow-right"></i>
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="T.DM.AC.U" data-parent="T.DM.AC.U.Edit" id="access['Data Master']['Access Control']['Users']['Edit']" value="true" name="access['Data Master']['Access Control']['Users']['Edit']">
                          <label class="custom-control-label" for="access['Data Master']['Access Control']['Users']['Edit']"> Edit</label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">
                        <i class="mdi mdi-plus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-arrow-right"></i>
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="T.DM.AC.U" data-parent="T.DM.AC.U.Filter" id="access['Data Master']['Access Control']['Users']['Filter']" value="true" name="access['Data Master']['Access Control']['Users']['Filter']">
                          <label class="custom-control-label" for="access['Data Master']['Access Control']['Users']['Filter']"> Filter</label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">
                        <i class="mdi mdi-plus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-arrow-right"></i>
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="T.DM.AC.U" data-parent="T.DM.AC.U.Reload Data" id="access['Data Master']['Access Control']['Users']['Reload Data']" value="true" name="access['Data Master']['Access Control']['Users']['Reload Data']">
                          <label class="custom-control-label" for="access['Data Master']['Access Control']['Users']['Reload Data']"> Reload Data</label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">
                        <i class="mdi mdi-plus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-arrow-right"></i>
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="T.DM.AC.U" data-parent="T.DM.AC.U.Reset Password" id="access['Data Master']['Access Control']['Users']['Reset Password']" value="true" name="access['Data Master']['Access Control']['Users']['Reset Password']">
                          <label class="custom-control-label" for="access['Data Master']['Access Control']['Users']['Reset Password']"> Reset Password</label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">
                        <i class="mdi mdi-plus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-arrow-right"></i>
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="T.DM.AC.U" data-parent="T.DM.AC.U.ActiveNon Active" id="access['Data Master']['Access Control']['Users']['Active Nonactive']" value="true" name="access['Data Master']['Access Control']['Users']['Active Nonactive']">
                          <label class="custom-control-label" for="access['Data Master']['Access Control']['Users']['Active Nonactive']"> Active Nonactive</label>
                        </div>
                      </td>
                    </tr>
                    
                    <tr>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">
                        <i class="mdi mdi-plus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-arrow-right"></i>
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="T.DM.AC.U" data-parent="T.DM.AC.U.DetailSales" id="access['Data Master']['Access Control']['Users']['Detail Sales']" value="true" name="access['Data Master']['Access Control']['Users']['Detail Sales']">
                          <label class="custom-control-label" for="access['Data Master']['Access Control']['Users']['Detail Sales']"> Detail Sales</label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">
                        <i class="mdi mdi-plus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-arrow-right"></i>
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="T.DM.AC.U" data-parent="T.DM.AC.U.DetailEmployee" id="access['Data Master']['Access Control']['Users']['Detail Karyawan']" value="true" name="access['Data Master']['Access Control']['Users']['Detail Karyawan']">
                          <label class="custom-control-label" for="access['Data Master']['Access Control']['Users']['Detail Karyawan']"> Detail Karyawan</label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                    </tr>
                    <tr>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">
                        <i class="mdi mdi-plus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-arrow-right"></i>
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="T.DM.AC" data-parent="T.DM.AC.UG" id="access['Data Master']['Access Control']['User Group']" value="true" name="access['Data Master']['Access Control']['User Group']">
                          <label class="custom-control-label" for="access['Data Master']['Access Control']['User Group']"> User Group</label>
                        </div>
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="T.DM.AC.UG" data-parent="T.DM.AC.UG.Tambah" id="access['Data Master']['Access Control']['User Group']['Tambah']" value="true" name="access['Data Master']['Access Control']['User Group']['Tambah']">
                          <label class="custom-control-label" for="access['Data Master']['Access Control']['User Group']['Tambah']"> Tambah</label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">
                        <i class="mdi mdi-plus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-arrow-right"></i>
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="T.DM.AC.UG" data-parent="T.DM.AC.UG.Edit" id="access['Data Master']['Access Control']['User Group']['Edit']" value="true" name="access['Data Master']['Access Control']['User Group']['Edit']">
                          <label class="custom-control-label" for="access['Data Master']['Access Control']['User Group']['Edit']"> Edit</label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">
                        <i class="mdi mdi-plus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-arrow-right"></i>
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="T.DM.AC.UG" data-parent="T.DM.AC.UG.Hapus" id="access['Data Master']['Access Control']['User Group']['Hapus']" value="true" name="access['Data Master']['Access Control']['User Group']['Hapus']">
                          <label class="custom-control-label" for="access['Data Master']['Access Control']['User Group']['Hapus']"> Hapus</label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">
                        <i class="mdi mdi-plus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-arrow-right"></i>
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="T.DM.AC.UG" data-parent="T.DM.AC.UG.Filter" id="access['Data Master']['Access Control']['User Group']['Filter']" value="true" name="access['Data Master']['Access Control']['User Group']['Filter']">
                          <label class="custom-control-label" for="access['Data Master']['Access Control']['User Group']['Filter']"> Filter</label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">
                        <i class="mdi mdi-plus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-arrow-right"></i>
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="T.DM.AC.UG" data-parent="T.DM.AC.UG.ReloadData" id="access['Data Master']['Access Control']['User Group']['Reload Data']" value="true" name="access['Data Master']['Access Control']['User Group']['Reload Data']">
                          <label class="custom-control-label" for="access['Data Master']['Access Control']['User Group']['Reload Data']"> Reload Data</label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">
                        <i class="mdi mdi-plus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-minus"></i>
                        <i class="mdi mdi-arrow-right"></i>
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="T.DM.AC.UG" data-parent="T.DM.AC.UG.ActiveNonactive" id="access['Data Master']['Access Control']['User Group']['Active Nonactive']" value="true" name="access['Data Master']['Access Control']['User Group']['Active Nonactive']">
                          <label class="custom-control-label" for="access['Data Master']['Access Control']['User Group']['Active Nonactive']"> Active Nonactive</label>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <hr>
            <div class="form-group row">
              <label class="col-md-2 col-form-label"></label>
              <div class="col-md-6">
                <button type="button" class="btn btn-secondary BtnCloseModal" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-success"><i class="mdi mdi-plus-box-outline"></i> Simpan</button>
              </div>
            </div>
          </form>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->