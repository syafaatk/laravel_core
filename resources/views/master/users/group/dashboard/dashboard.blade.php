<table class="table table-sm table-bordered table-striped mt-2" width="100%">
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
                          <input type="checkbox" class="custom-control-input" data-child="U." data-parent="U.Dashboard" id="accessUpdate['Dashboard']" value="true" name="access['Dashboard']">
                          <label class="custom-control-label" for="accessUpdate['Dashboard']"> Dashboard</label>
                        </div> 
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="U.Dashboard" data-parent="U.Dashboard.Grafik" id="accessUpdate['Dashboard']['Grafik']" value="true" name="access['Dashboard']['Grafik']">
                          <label class="custom-control-label" for="accessUpdate['Dashboard']['Grafik']"> Grafik</label>
                        </div> 
                      </td>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                    </tr>
                    <tr>
                      {!! $ArrowLv1 !!}
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="U.Dashboard" data-parent="U.Dashboard.SPL" id="accessUpdate['Dashboard']['SPL']" value="true" name="access['Dashboard']['SPL']">
                          <label class="custom-control-label" for="accessUpdate['Dashboard']['SPL']"> Surat Perintah Lembur</label>
                        </div> 
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="U.Dashboard.SPL" data-parent="U.Dashboard.SPL.RekapLembur" id="accessUpdate['Dashboard']['SPL']['RekapLembur']" value="true" name="access['Dashboard']['SPL']['RekapLembur']">
                          <label class="custom-control-label" for="accessUpdate['Dashboard']['SPL']['RekapLembur']"> Rekap Lembur</label>
                        </div>
                      </td>
                      <td class="bg-light text-center">|</td>
                    </tr>
                    <tr>
                      {!! $ArrowLv2 !!}
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="U.Dashboard.SPL" data-parent="U.Dashboard.SPL.Reload Data" id="accessUpdate['Dashboard']['SPL']['Reload Data']" value="true" name="access['Dashboard']['SPL']['Reload Data']">
                          <label class="custom-control-label" for="accessUpdate['Dashboard']['SPL']['Reload Data']"> Reload Data</label>
                        </div>
                      </td>
                      <td class="bg-light text-center">|</td>
                    </tr>
                    <tr>
                      {!! $ArrowLv2 !!}
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="U.Dashboard.SPL" data-parent="U.Dashboard.SPL.Tambah" id="accessUpdate['Dashboard']['SPL']['Tambah']" value="true" name="access['Dashboard']['SPL']['Tambah']">
                          <label class="custom-control-label" for="accessUpdate['Dashboard']['SPL']['Tambah']"> Tambah</label>
                        </div>
                      </td>
                      <td class="bg-light text-center">|</td>
                    </tr>
                    <tr>
                      {!! $ArrowLv2 !!}
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="U.Dashboard.SPL" data-parent="U.Dashboard.SPL.Edit" id="accessUpdate['Dashboard']['SPL']['Edit']" value="true" name="access['Dashboard']['SPL']['Edit']">
                          <label class="custom-control-label" for="accessUpdate['Dashboard']['SPL']['Edit']"> Edit</label>
                        </div>
                      </td>
                      <td class="bg-light text-center">|</td>
                    </tr>
                    <tr>
                      {!! $ArrowLv2 !!}
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="U.Dashboard.SPL" data-parent="U.Dashboard.SPL.Hapus" id="accessUpdate['Dashboard']['SPL']['Hapus']" value="true" name="access['Dashboard']['SPL']['Hapus']">
                          <label class="custom-control-label" for="accessUpdate['Dashboard']['SPL']['Hapus']"> Hapus</label>
                        </div>
                      </td>
                      <td class="bg-light text-center">|</td>
                    </tr>
                  </tbody>
                </table>