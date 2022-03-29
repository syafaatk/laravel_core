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
                            <input type="checkbox" class="custom-control-input" data-child="U.DM.MP" data-parent="U.DM.MP.G" id="accessUpdate['Data Master']['Master Penjualan']['Gudang']" value="true" name="access['Data Master']['Master Penjualan']['Gudang']">
                            <label class="custom-control-label" for="accessUpdate['Data Master']['Master Penjualan']['Gudang']"> Gudang</label>
                          </div>
                        </td>
                        <td>
                          <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" data-child="U.DM.MP.G" data-parent="U.DM.MP.G.Tambah" id="accessUpdate['Data Master']['Master Penjualan']['Gudang']['Tambah']" value="true" name="access['Data Master']['Master Penjualan']['Gudang']['Tambah']">
                            <label class="custom-control-label" for="accessUpdate['Data Master']['Master Penjualan']['Gudang']['Tambah']"> Tambah</label>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        {!! $ArrowLv3 !!}
                        <td>
                          <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" data-child="U.DM.MP.G" data-parent="U.DM.MP.G.Edit" id="accessUpdate['Data Master']['Master Penjualan']['Gudang']['Edit']" value="true" name="access['Data Master']['Master Penjualan']['Gudang']['Edit']">
                            <label class="custom-control-label" for="accessUpdate['Data Master']['Master Penjualan']['Gudang']['Edit']"> Edit</label>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        {!! $ArrowLv3 !!}
                        <td>
                          <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" data-child="U.DM.MP.G" data-parent="U.DM.MP.G.Hapus" id="accessUpdate['Data Master']['Master Penjualan']['Gudang']['Hapus']" value="true" name="access['Data Master']['Master Penjualan']['Gudang']['Hapus']">
                            <label class="custom-control-label" for="accessUpdate['Data Master']['Master Penjualan']['Gudang']['Hapus']"> Hapus</label>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        {!! $ArrowLv3 !!}
                        <td>
                          <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" data-child="U.DM.MP.G" data-parent="U.DM.MP.G.Filter" id="accessUpdate['Data Master']['Master Penjualan']['Gudang']['Filter']" value="true" name="access['Data Master']['Master Penjualan']['Gudang']['Filter']">
                            <label class="custom-control-label" for="accessUpdate['Data Master']['Master Penjualan']['Gudang']['Filter']"> Filter</label>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        {!! $ArrowLv3 !!}
                        <td>
                          <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" data-child="U.DM.MP.G" data-parent="U.DM.MP.G.ReloadData" id="accessUpdate['Data Master']['Master Penjualan']['Gudang']['Reload Data']" value="true" name="access['Data Master']['Master Penjualan']['Gudang']['Reload Data']">
                            <label class="custom-control-label" for="accessUpdate['Data Master']['Master Penjualan']['Gudang']['Reload Data']"> Reload Data</label>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        {!! $ArrowLv3 !!}
                        <td>
                          <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" data-child="U.DM.MP.G" data-parent="U.DM.MP.G.ActiveNonactive" id="accessUpdate['Data Master']['Master Penjualan']['Gudang']['Active Nonactive']" value="true" name="access['Data Master']['Master Penjualan']['Gudang']['Active Nonactive']">
                            <label class="custom-control-label" for="accessUpdate['Data Master']['Master Penjualan']['Gudang']['Active Nonactive']"> Active Nonactive</label>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="bg-light text-center">|</td>
                        {!! $ArrowLv1 !!}
                        <td>
                          <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" data-child="U.DM.MP" data-parent="U.DM.MP.B" id="accessUpdate['Data Master']['Master Penjualan']['Brand']" value="true" name="access['Data Master']['Master Penjualan']['Brand']">
                            <label class="custom-control-label" for="accessUpdate['Data Master']['Master Penjualan']['Brand']"> Brand</label>
                          </div>
                        </td>
                        <td>
                          <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" data-child="U.DM.MP.B" data-parent="U.DM.MP.B.Tambah" id="accessUpdate['Data Master']['Master Penjualan']['Brand']['Tambah']" value="true" name="access['Data Master']['Master Penjualan']['Brand']['Tambah']">
                            <label class="custom-control-label" for="accessUpdate['Data Master']['Master Penjualan']['Brand']['Tambah']"> Tambah</label>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        {!! $ArrowLv3 !!}
                        <td>
                          <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" data-child="U.DM.MP.B" data-parent="U.DM.MP.B.Edit" id="accessUpdate['Data Master']['Master Penjualan']['Brand']['Edit']" value="true" name="access['Data Master']['Master Penjualan']['Brand']['Edit']">
                            <label class="custom-control-label" for="accessUpdate['Data Master']['Master Penjualan']['Brand']['Edit']"> Edit</label>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        {!! $ArrowLv3 !!}
                        <td>
                          <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" data-child="U.DM.MP.B" data-parent="U.DM.MP.B.Hapus" id="accessUpdate['Data Master']['Master Penjualan']['Brand']['Hapus']" value="true" name="access['Data Master']['Master Penjualan']['Brand']['Hapus']">
                            <label class="custom-control-label" for="accessUpdate['Data Master']['Master Penjualan']['Brand']['Hapus']"> Hapus</label>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        {!! $ArrowLv3 !!}
                        <td>
                          <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" data-child="U.DM.MP.B" data-parent="U.DM.MP.B.Filter" id="accessUpdate['Data Master']['Master Penjualan']['Brand']['Filter']" value="true" name="access['Data Master']['Master Penjualan']['Brand']['Filter']">
                            <label class="custom-control-label" for="accessUpdate['Data Master']['Master Penjualan']['Brand']['Filter']"> Filter</label>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        {!! $ArrowLv3 !!}
                        <td>
                          <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" data-child="U.DM.MP.B" data-parent="U.DM.MP.B.ReloadData" id="accessUpdate['Data Master']['Master Penjualan']['Brand']['Reload Data']" value="true" name="access['Data Master']['Master Penjualan']['Brand']['Reload Data']">
                            <label class="custom-control-label" for="accessUpdate['Data Master']['Master Penjualan']['Brand']['Reload Data']"> Reload Data</label>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        {!! $ArrowLv3 !!}
                        <td>
                          <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" data-child="U.DM.MP.B" data-parent="U.DM.MP.B.ActiveNonactive" id="accessUpdate['Data Master']['Master Penjualan']['Brand']['Active Nonactive']" value="true" name="access['Data Master']['Master Penjualan']['Brand']['Active Nonactive']">
                            <label class="custom-control-label" for="accessUpdate['Data Master']['Master Penjualan']['Brand']['Active Nonactive']"> Active Nonactive</label>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="bg-light text-center">|</td>
                        {!! $ArrowLv1 !!}
                        <td>
                          <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" data-child="U.DM.MP" data-parent="U.DM.MP.S" id="accessUpdate['Data Master']['Master Penjualan']['Satuan']" value="true" name="access['Data Master']['Master Penjualan']['Satuan']">
                            <label class="custom-control-label" for="accessUpdate['Data Master']['Master Penjualan']['Satuan']"> Satuan</label>
                          </div>
                        </td>
                        <td>
                          <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" data-child="U.DM.MP.S" data-parent="U.DM.MP.S.Tambah" id="accessUpdate['Data Master']['Master Penjualan']['Satuan']['Tambah']" value="true" name="access['Data Master']['Master Penjualan']['Satuan']['Tambah']">
                            <label class="custom-control-label" for="accessUpdate['Data Master']['Master Penjualan']['Satuan']['Tambah']"> Tambah</label>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        {!! $ArrowLv3 !!}
                        <td>
                          <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" data-child="U.DM.MP.S" data-parent="U.DM.MP.S.Edit" id="accessUpdate['Data Master']['Master Penjualan']['Satuan']['Edit']" value="true" name="access['Data Master']['Master Penjualan']['Satuan']['Edit']">
                            <label class="custom-control-label" for="accessUpdate['Data Master']['Master Penjualan']['Satuan']['Edit']"> Edit</label>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        {!! $ArrowLv3 !!}
                        <td>
                          <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" data-child="U.DM.MP.S" data-parent="U.DM.MP.S.Hapus" id="accessUpdate['Data Master']['Master Penjualan']['Satuan']['Hapus']" value="true" name="access['Data Master']['Master Penjualan']['Satuan']['Hapus']">
                            <label class="custom-control-label" for="accessUpdate['Data Master']['Master Penjualan']['Satuan']['Hapus']"> Hapus</label>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        {!! $ArrowLv3 !!}
                        <td>
                          <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" data-child="U.DM.MP.S" data-parent="U.DM.MP.S.Filter" id="accessUpdate['Data Master']['Master Penjualan']['Satuan']['Filter']" value="true" name="access['Data Master']['Master Penjualan']['Satuan']['Filter']">
                            <label class="custom-control-label" for="accessUpdate['Data Master']['Master Penjualan']['Satuan']['Filter']"> Filter</label>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        {!! $ArrowLv3 !!}
                        <td>
                          <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" data-child="U.DM.MP.S" data-parent="U.DM.MP.S.ReloadData" id="accessUpdate['Data Master']['Master Penjualan']['Satuan']['Reload Data']" value="true" name="access['Data Master']['Master Penjualan']['Satuan']['Reload Data']">
                            <label class="custom-control-label" for="accessUpdate['Data Master']['Master Penjualan']['Satuan']['Reload Data']"> Reload Data</label>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        {!! $ArrowLv3 !!}
                        <td>
                          <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" data-child="U.DM.MP.S" data-parent="U.DM.MP.S.ActiveNonactive" id="accessUpdate['Data Master']['Master Penjualan']['Satuan']['Active Nonactive']" value="true" name="access['Data Master']['Master Penjualan']['Satuan']['Active Nonactive']">
                            <label class="custom-control-label" for="accessUpdate['Data Master']['Master Penjualan']['Satuan']['Active Nonactive']"> Active Nonactive</label>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="bg-light text-center">|</td>
                        {!! $ArrowLv1 !!}
                        <td>
                          <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" data-child="U.DM.MP" data-parent="U.DM.MP.SUP" id="accessUpdate['Data Master']['Master Penjualan']['Supplier']" value="true" name="access['Data Master']['Master Penjualan']['Supplier']">
                            <label class="custom-control-label" for="accessUpdate['Data Master']['Master Penjualan']['Supplier']"> Supplier</label>
                          </div>
                        </td>
                        <td>
                          <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" data-child="U.DM.MP.SUP" data-parent="U.DM.MP.SUP.Tambah" id="accessUpdate['Data Master']['Master Penjualan']['Supplier']['Tambah']" value="true" name="access['Data Master']['Master Penjualan']['Supplier']['Tambah']">
                            <label class="custom-control-label" for="accessUpdate['Data Master']['Master Penjualan']['Supplier']['Tambah']"> Tambah</label>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        {!! $ArrowLv3 !!}
                        <td>
                          <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" data-child="U.DM.MP.SUP" data-parent="U.DM.MP.SUP.Edit" id="accessUpdate['Data Master']['Master Penjualan']['Supplier']['Edit']" value="true" name="access['Data Master']['Master Penjualan']['Supplier']['Edit']">
                            <label class="custom-control-label" for="accessUpdate['Data Master']['Master Penjualan']['Supplier']['Edit']"> Edit</label>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        {!! $ArrowLv3 !!}
                        <td>
                          <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" data-child="U.DM.MP.SUP" data-parent="U.DM.MP.SUP.Hapus" id="accessUpdate['Data Master']['Master Penjualan']['Supplier']['Hapus']" value="true" name="access['Data Master']['Master Penjualan']['Supplier']['Hapus']">
                            <label class="custom-control-label" for="accessUpdate['Data Master']['Master Penjualan']['Supplier']['Hapus']"> Hapus</label>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        {!! $ArrowLv3 !!}
                        <td>
                          <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" data-child="U.DM.MP.SUP" data-parent="U.DM.MP.SUP.Filter" id="accessUpdate['Data Master']['Master Penjualan']['Supplier']['Filter']" value="true" name="access['Data Master']['Master Penjualan']['Supplier']['Filter']">
                            <label class="custom-control-label" for="accessUpdate['Data Master']['Master Penjualan']['Supplier']['Filter']"> Filter</label>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        {!! $ArrowLv3 !!}
                        <td>
                          <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" data-child="U.DM.MP.SUP" data-parent="U.DM.MP.SUP.ReloadData" id="accessUpdate['Data Master']['Master Penjualan']['Supplier']['Reload Data']" value="true" name="access['Data Master']['Master Penjualan']['Supplier']['Reload Data']">
                            <label class="custom-control-label" for="accessUpdate['Data Master']['Master Penjualan']['Supplier']['Reload Data']"> Reload Data</label>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        {!! $ArrowLv3 !!}
                        <td>
                          <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" data-child="U.DM.MP.SUP" data-parent="U.DM.MP.SUP.ActiveNonactive" id="accessUpdate['Data Master']['Master Penjualan']['Supplier']['Active Nonactive']" value="true" name="access['Data Master']['Master Penjualan']['Supplier']['Active Nonactive']">
                            <label class="custom-control-label" for="accessUpdate['Data Master']['Master Penjualan']['Supplier']['Active Nonactive']"> Active Nonactive</label>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="bg-light text-center">|</td>
                        {!! $ArrowLv1 !!}
                        <td>
                          <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" data-child="U.DM.MP" data-parent="U.DM.MP.KSUP" id="accessUpdate['Data Master']['Master Penjualan']['Kategori Supplier']" value="true" name="access['Data Master']['Master Penjualan']['Kategori Supplier']">
                            <label class="custom-control-label" for="accessUpdate['Data Master']['Master Penjualan']['Kategori Supplier']"> Kategori Supplier</label>
                          </div>
                        </td>
                        <td>
                          <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" data-child="U.DM.MP.KSUP" data-parent="U.DM.MP.KSUP.Tambah" id="accessUpdate['Data Master']['Master Penjualan']['Kategori Supplier']['Tambah']" value="true" name="access['Data Master']['Master Penjualan']['Kategori Supplier']['Tambah']">
                            <label class="custom-control-label" for="accessUpdate['Data Master']['Master Penjualan']['Kategori Supplier']['Tambah']"> Tambah</label>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        {!! $ArrowLv3 !!}
                        <td>
                          <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" data-child="U.DM.MP.KSUP" data-parent="U.DM.MP.KSUP.Edit" id="accessUpdate['Data Master']['Master Penjualan']['Kategori Supplier']['Edit']" value="true" name="access['Data Master']['Master Penjualan']['Kategori Supplier']['Edit']">
                            <label class="custom-control-label" for="accessUpdate['Data Master']['Master Penjualan']['Kategori Supplier']['Edit']"> Edit</label>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        {!! $ArrowLv3 !!}
                        <td>
                          <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" data-child="U.DM.MP.KSUP" data-parent="U.DM.MP.KSUP.Hapus" id="accessUpdate['Data Master']['Master Penjualan']['Kategori Supplier']['Hapus']" value="true" name="access['Data Master']['Master Penjualan']['Kategori Supplier']['Hapus']">
                            <label class="custom-control-label" for="accessUpdate['Data Master']['Master Penjualan']['Kategori Supplier']['Hapus']"> Hapus</label>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        {!! $ArrowLv3 !!}
                        <td>
                          <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" data-child="U.DM.MP.KSUP" data-parent="U.DM.MP.KSUP.Filter" id="accessUpdate['Data Master']['Master Penjualan']['Kategori Supplier']['Filter']" value="true" name="access['Data Master']['Master Penjualan']['Kategori Supplier']['Filter']">
                            <label class="custom-control-label" for="accessUpdate['Data Master']['Master Penjualan']['Kategori Supplier']['Filter']"> Filter</label>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        {!! $ArrowLv3 !!}
                        <td>
                          <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" data-child="U.DM.MP.KSUP" data-parent="U.DM.MP.KSUP.ReloadData" id="accessUpdate['Data Master']['Master Penjualan']['Kategori Supplier']['Reload Data']" value="true" name="access['Data Master']['Master Penjualan']['Kategori Supplier']['Reload Data']">
                            <label class="custom-control-label" for="accessUpdate['Data Master']['Master Penjualan']['Kategori Supplier']['Reload Data']"> Reload Data</label>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        {!! $ArrowLv3 !!}
                        <td>
                          <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" data-child="U.DM.MP.KSUP" data-parent="U.DM.MP.KSUP.ActiveNonactive" id="accessUpdate['Data Master']['Master Penjualan']['Kategori Supplier']['Active Nonactive']" value="true" name="access['Data Master']['Master Penjualan']['Kategori Supplier']['Active Nonactive']">
                            <label class="custom-control-label" for="accessUpdate['Data Master']['Master Penjualan']['Kategori Supplier']['Active Nonactive']"> Active Nonactive</label>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="bg-light text-center">|</td>
                        {!! $ArrowLv1 !!}
                        <td>
                          <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" data-child="U.DM.MP" data-parent="U.DM.MP.I" id="accessUpdate['Data Master']['Master Penjualan']['Item']" value="true" name="access['Data Master']['Master Penjualan']['Item']">
                            <label class="custom-control-label" for="accessUpdate['Data Master']['Master Penjualan']['Item']"> Item</label>
                          </div>
                        </td>
                        <td>
                          <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" data-child="U.DM.MP.I" data-parent="U.DM.MP.I.Tambah" id="accessUpdate['Data Master']['Master Penjualan']['Item']['Tambah']" value="true" name="access['Data Master']['Master Penjualan']['Item']['Tambah']">
                            <label class="custom-control-label" for="accessUpdate['Data Master']['Master Penjualan']['Item']['Tambah']"> Tambah</label>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        {!! $ArrowLv3 !!}
                        <td>
                          <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" data-child="U.DM.MP.I" data-parent="U.DM.MP.I.Edit" id="accessUpdate['Data Master']['Master Penjualan']['Item']['Edit']" value="true" name="access['Data Master']['Master Penjualan']['Item']['Edit']">
                            <label class="custom-control-label" for="accessUpdate['Data Master']['Master Penjualan']['Item']['Edit']"> Edit</label>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        {!! $ArrowLv3 !!}
                        <td>
                          <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" data-child="U.DM.MP.I" data-parent="U.DM.MP.I.Hapus" id="accessUpdate['Data Master']['Master Penjualan']['Item']['Hapus']" value="true" name="access['Data Master']['Master Penjualan']['Item']['Hapus']">
                            <label class="custom-control-label" for="accessUpdate['Data Master']['Master Penjualan']['Item']['Hapus']"> Hapus</label>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        {!! $ArrowLv3 !!}
                        <td>
                          <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" data-child="U.DM.MP.I" data-parent="U.DM.MP.I.Filter" id="accessUpdate['Data Master']['Master Penjualan']['Item']['Filter']" value="true" name="access['Data Master']['Master Penjualan']['Item']['Filter']">
                            <label class="custom-control-label" for="accessUpdate['Data Master']['Master Penjualan']['Item']['Filter']"> Filter</label>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        {!! $ArrowLv3 !!}
                        <td>
                          <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" data-child="U.DM.MP.I" data-parent="U.DM.MP.I.ReloadData" id="accessUpdate['Data Master']['Master Penjualan']['Item']['Reload Data']" value="true" name="access['Data Master']['Master Penjualan']['Item']['Reload Data']">
                            <label class="custom-control-label" for="accessUpdate['Data Master']['Master Penjualan']['Item']['Reload Data']"> Reload Data</label>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        {!! $ArrowLv3 !!}
                        <td>
                          <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" data-child="U.DM.MP.I" data-parent="U.DM.MP.I.ActiveNonactive" id="accessUpdate['Data Master']['Master Penjualan']['Item']['Active Nonactive']" value="true" name="access['Data Master']['Master Penjualan']['Item']['Active Nonactive']">
                            <label class="custom-control-label" for="accessUpdate['Data Master']['Master Penjualan']['Item']['Active Nonactive']"> Active Nonactive</label>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        {!! $ArrowLv3 !!}
                        <td>
                          <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" data-child="U.DM.MP.I" data-parent="U.DM.MP.I.ActiveNonactive" id="accessUpdate['Data Master']['Master Penjualan']['Item']['Modal']" value="true" name="access['Data Master']['Master Penjualan']['Item']['Modal']">
                            <label class="custom-control-label" for="accessUpdate['Data Master']['Master Penjualan']['Item']['Modal']"> Tampil Harga Modal</label>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>