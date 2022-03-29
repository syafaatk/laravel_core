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
                          <input type="checkbox" class="custom-control-input" data-child="U." data-parent="U.Whatsapp" id="accessUpdate['Whatsapp']" value="true" name="access['Whatsapp']">
                          <label class="custom-control-label" for="accessUpdate['Whatsapp']"> Whatsapp</label>
                        </div> 
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="U.Whatsapp" data-parent="U.Whatsapp.WhatsappLogin" id="accessUpdate['Whatsapp']['WhatsappLogin']" value="true" name="access['Whatsapp']['WhatsappLogin']">
                          <label class="custom-control-label" for="accessUpdate['Whatsapp']['WhatsappLogin']"> Whatsapp Login</label>
                        </div> 
                      </td>
                      <td class="bg-light text-center">|</td>
                      <td class="bg-light text-center">|</td>
                    </tr>
                    <tr>
                      {!! $ArrowLv1 !!}
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="U.Whatsapp" data-parent="U.Whatsapp.LogError" id="accessUpdate['Whatsapp']['LogError']" value="true" name="access['Whatsapp']['LogError']">
                          <label class="custom-control-label" for="accessUpdate['Whatsapp']['LogError']"> Log Error</label>
                        </div> 
                      </td>
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="U.Whatsapp.LogError" data-parent="U.Whatsapp.LogError.Status" id="accessUpdate['Whatsapp']['LogError']['Status']" value="true" name="access['Whatsapp']['LogError']['Status']">
                          <label class="custom-control-label" for="accessUpdate['Whatsapp']['LogError']['Status']"> Status Log Error</label>
                        </div>
                      </td>
                      <td class="bg-light text-center">|</td>
                    </tr>
                    <tr>
                      {!! $ArrowLv2 !!}
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="U.Whatsapp.LogError" data-parent="U.Whatsapp.LogError.Reload Data" id="accessUpdate['Whatsapp']['LogError']['Reload Data']" value="true" name="access['Whatsapp']['LogError']['Reload Data']">
                          <label class="custom-control-label" for="accessUpdate['Whatsapp']['LogError']['Reload Data']"> Reload Data </label>
                        </div>
                      </td>
                      <td class="bg-light text-center">|</td>
                    </tr>
                    <tr>
                      {!! $ArrowLv2 !!}
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="U.Whatsapp.LogError" data-parent="U.Whatsapp.LogError.DetailLogError" id="accessUpdate['Whatsapp']['LogError']['DetailLogError']" value="true" name="access['Whatsapp']['LogError']['DetailLogError']">
                          <label class="custom-control-label" for="accessUpdate['Whatsapp']['LogError']['DetailLogError']"> Detail Log Error </label>
                        </div>
                      </td>
                      <td class="bg-light text-center">|</td>
                    </tr>
                    <tr>
                      {!! $ArrowLv2 !!}
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="U.Whatsapp.LogError" data-parent="U.Whatsapp.LogError.Filter" id="accessUpdate['Whatsapp']['LogError']['Filter']" value="true" name="access['Whatsapp']['LogError']['Filter']">
                          <label class="custom-control-label" for="accessUpdate['Whatsapp']['LogError']['Filter']"> Filter</label>
                        </div>
                      </td>
                      <td class="bg-light text-center">|</td>
                    </tr>
                    <tr>
                      {!! $ArrowLv2 !!}
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="U.Whatsapp.LogError" data-parent="U.Whatsapp.LogError.Hapus" id="accessUpdate['Whatsapp']['LogError']['Hapus']" value="true" name="access['Whatsapp']['LogError']['Hapus']">
                          <label class="custom-control-label" for="accessUpdate['Whatsapp']['LogError']['Hapus']"> Hapus</label>
                        </div>
                      </td>
                      <td class="bg-light text-center">|</td>
                    </tr>
                    <tr>
                      {!! $ArrowLv2 !!}
                      <td>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" data-child="U.Whatsapp.LogError" data-parent="U.Whatsapp.LogError.SettingWhatsapp" id="accessUpdate['Whatsapp']['LogError']['SettingWhatsapp']" value="true" name="access['Whatsapp']['LogError']['SettingWhatsapp']">
                          <label class="custom-control-label" for="accessUpdate['Whatsapp']['LogError']['SettingWhatsapp']"> Pengtaruran Whatsapp</label>
                        </div>
                      </td>
                      <td class="bg-light text-center">|</td>
                    </tr>
                  </tbody>
                </table>