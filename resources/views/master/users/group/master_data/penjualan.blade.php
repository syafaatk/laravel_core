<div role="tabpanel" class="tab-pane fade" id="Penjualan">
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
                        {!! $ArrowLv1 !!}
                        <td>
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" data-child="U.DM" data-parent="U.DM.MP" id="accessUpdate['Data Master']['Master Penjualan']" value="true" name="access['Data Master']['Master Penjualan']">
                                <label class="custom-control-label" for="accessUpdate['Data Master']['Master Penjualan']"> Master Penjualan</label>
                            </div>
                        </td>
                        <td>
                          <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" data-child="U.DM.MP" data-parent="U.DM.MP.KSUP" id="accessUpdate['Data Master']['Master Penjualan']['Kategori']" value="true" name="access['Data Master']['Master Penjualan']['Kategori']">
                            <label class="custom-control-label" for="accessUpdate['Data Master']['Master Penjualan']['Kategori']"> Kategori</label>
                          </div>
                        </td>
                        <td>
                          <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" data-child="U.DM.MP.KSUP" data-parent="U.DM.MP.KSUP.Tambah" id="accessUpdate['Data Master']['Master Penjualan']['Kategori']['Tambah']" value="true" name="access['Data Master']['Master Penjualan']['Kategori']['Tambah']">
                            <label class="custom-control-label" for="accessUpdate['Data Master']['Master Penjualan']['Kategori']['Tambah']"> Tambah</label>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        {!! $ArrowLv3 !!}
                        <td>
                          <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" data-child="U.DM.MP.KSUP" data-parent="U.DM.MP.KSUP.Edit" id="accessUpdate['Data Master']['Master Penjualan']['Kategori']['Edit']" value="true" name="access['Data Master']['Master Penjualan']['Kategori']['Edit']">
                            <label class="custom-control-label" for="accessUpdate['Data Master']['Master Penjualan']['Kategori']['Edit']"> Edit</label>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        {!! $ArrowLv3 !!}
                        <td>
                          <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" data-child="U.DM.MP.KSUP" data-parent="U.DM.MP.KSUP.Hapus" id="accessUpdate['Data Master']['Master Penjualan']['Kategori']['Hapus']" value="true" name="access['Data Master']['Master Penjualan']['Kategori']['Hapus']">
                            <label class="custom-control-label" for="accessUpdate['Data Master']['Master Penjualan']['Kategori']['Hapus']"> Hapus</label>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        {!! $ArrowLv3 !!}
                        <td>
                          <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" data-child="U.DM.MP.KSUP" data-parent="U.DM.MP.KSUP.Filter" id="accessUpdate['Data Master']['Master Penjualan']['Kategori']['Filter']" value="true" name="access['Data Master']['Master Penjualan']['Kategori']['Filter']">
                            <label class="custom-control-label" for="accessUpdate['Data Master']['Master Penjualan']['Kategori']['Filter']"> Filter</label>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        {!! $ArrowLv3 !!}
                        <td>
                          <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" data-child="U.DM.MP.KSUP" data-parent="U.DM.MP.KSUP.ReloadData" id="accessUpdate['Data Master']['Master Penjualan']['Kategori']['Reload Data']" value="true" name="access['Data Master']['Master Penjualan']['Kategori']['Reload Data']">
                            <label class="custom-control-label" for="accessUpdate['Data Master']['Master Penjualan']['Kategori']['Reload Data']"> Reload Data</label>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        {!! $ArrowLv3 !!}
                        <td>
                          <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" data-child="U.DM.MP.KSUP" data-parent="U.DM.MP.KSUP.ActiveNonactive" id="accessUpdate['Data Master']['Master Penjualan']['Kategori']['Active Nonactive']" value="true" name="access['Data Master']['Master Penjualan']['Kategori']['Active Nonactive']">
                            <label class="custom-control-label" for="accessUpdate['Data Master']['Master Penjualan']['Kategori']['Active Nonactive']"> Active Nonactive</label>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="bg-light text-center">|</td>
                        {!! $ArrowLv1 !!}
                        <td>
                          <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" data-child="U.DM.MP" data-parent="U.DM.MP.I" id="accessUpdate['Data Master']['Master Penjualan']['Produk']" value="true" name="access['Data Master']['Master Penjualan']['Produk']">
                            <label class="custom-control-label" for="accessUpdate['Data Master']['Master Penjualan']['Produk']"> Produk</label>
                          </div>
                        </td>
                        <td>
                          <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" data-child="U.DM.MP.I" data-parent="U.DM.MP.I.Tambah" id="accessUpdate['Data Master']['Master Penjualan']['Produk']['Tambah']" value="true" name="access['Data Master']['Master Penjualan']['Produk']['Tambah']">
                            <label class="custom-control-label" for="accessUpdate['Data Master']['Master Penjualan']['Produk']['Tambah']"> Tambah</label>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        {!! $ArrowLv3 !!}
                        <td>
                          <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" data-child="U.DM.MP.I" data-parent="U.DM.MP.I.Edit" id="accessUpdate['Data Master']['Master Penjualan']['Produk']['Edit']" value="true" name="access['Data Master']['Master Penjualan']['Produk']['Edit']">
                            <label class="custom-control-label" for="accessUpdate['Data Master']['Master Penjualan']['Produk']['Edit']"> Edit</label>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        {!! $ArrowLv3 !!}
                        <td>
                          <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" data-child="U.DM.MP.I" data-parent="U.DM.MP.I.Hapus" id="accessUpdate['Data Master']['Master Penjualan']['Produk']['Hapus']" value="true" name="access['Data Master']['Master Penjualan']['Produk']['Hapus']">
                            <label class="custom-control-label" for="accessUpdate['Data Master']['Master Penjualan']['Produk']['Hapus']"> Hapus</label>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        {!! $ArrowLv3 !!}
                        <td>
                          <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" data-child="U.DM.MP.I" data-parent="U.DM.MP.I.Filter" id="accessUpdate['Data Master']['Master Penjualan']['Produk']['Filter']" value="true" name="access['Data Master']['Master Penjualan']['Produk']['Filter']">
                            <label class="custom-control-label" for="accessUpdate['Data Master']['Master Penjualan']['Produk']['Filter']"> Filter</label>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        {!! $ArrowLv3 !!}
                        <td>
                          <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" data-child="U.DM.MP.I" data-parent="U.DM.MP.I.ReloadData" id="accessUpdate['Data Master']['Master Penjualan']['Produk']['Reload Data']" value="true" name="access['Data Master']['Master Penjualan']['Produk']['Reload Data']">
                            <label class="custom-control-label" for="accessUpdate['Data Master']['Master Penjualan']['Produk']['Reload Data']"> Reload Data</label>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        {!! $ArrowLv3 !!}
                        <td>
                          <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" data-child="U.DM.MP.I" data-parent="U.DM.MP.I.ActiveNonactive" id="accessUpdate['Data Master']['Master Penjualan']['Produk']['Active Nonactive']" value="true" name="access['Data Master']['Master Penjualan']['Produk']['Active Nonactive']">
                            <label class="custom-control-label" for="accessUpdate['Data Master']['Master Penjualan']['Produk']['Active Nonactive']"> Active Nonactive</label>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        {!! $ArrowLv3 !!}
                        <td>
                          <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" data-child="U.DM.MP.I" data-parent="U.DM.MP.I.ActiveNonactive" id="accessUpdate['Data Master']['Master Penjualan']['Produk']['Modal']" value="true" name="access['Data Master']['Master Penjualan']['Produk']['Modal']">
                            <label class="custom-control-label" for="accessUpdate['Data Master']['Master Penjualan']['Produk']['Modal']"> Tampil Harga Modal</label>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>