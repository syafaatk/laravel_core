<div role="tabpanel" class="tab-pane fade" id="Crud">
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
          <input type="checkbox" class="custom-control-input" data-child="U.DM" data-parent="U.DM.C" id="accessUpdate['Data Master']['Crud']" value="true" name="access['Data Master']['Crud']">
          <label class="custom-control-label" for="accessUpdate['Data Master']['Crud']"> Crud</label>
        </div>
      </td>
      <td>
        <div class="custom-control custom-switch">
          <input type="checkbox" class="custom-control-input" data-child="U.DM.C" data-parent="U.DM.C.P" id="accessUpdate['Data Master']['Crud']['Province']" value="true" name="access['Data Master']['Crud']['Province']">
          <label class="custom-control-label" for="accessUpdate['Data Master']['Crud']['Province']"> Provinsi</label>
        </div>
      </td>
      <td>
        <div class="custom-control custom-switch">
          <input type="checkbox" class="custom-control-input" data-child="U.DM.C.P" data-parent="U.DM.C.P.Tambah" id="accessUpdate['Data Master']['Crud']['Province']['Tambah']" value="true" name="access['Data Master']['Crud']['Province']['Tambah']">
          <label class="custom-control-label" for="accessUpdate['Data Master']['Crud']['Province']['Tambah']"> Tambah</label>
        </div>
      </td>
    </tr>
    <tr>
      {!! $ArrowLv3 !!}
      <td>
        <div class="custom-control custom-switch">
          <input type="checkbox" class="custom-control-input" data-child="U.DM.C.P" data-parent="U.DM.C.P.Edit" id="accessUpdate['Data Master']['Crud']['Province']['Edit']" value="true" name="access['Data Master']['Crud']['Province']['Edit']">
          <label class="custom-control-label" for="accessUpdate['Data Master']['Crud']['Province']['Edit']"> Edit</label>
        </div>
      </td>
    </tr>
    <tr>
      {!! $ArrowLv3 !!}
      <td>
        <div class="custom-control custom-switch">
          <input type="checkbox" class="custom-control-input" data-child="U.DM.C.P" data-parent="U.DM.C.P.Hapus" id="accessUpdate['Data Master']['Crud']['Province']['Hapus']" value="true" name="access['Data Master']['Crud']['Province']['Hapus']">
          <label class="custom-control-label" for="accessUpdate['Data Master']['Crud']['Province']['Hapus']"> Hapus</label>
        </div>
      </td>
    </tr>
    <tr>
      {!! $ArrowLv3 !!}
      <td>
        <div class="custom-control custom-switch">
          <input type="checkbox" class="custom-control-input" data-child="U.DM.C.P" data-parent="U.DM.C.P.Filter" id="accessUpdate['Data Master']['Crud']['Province']['Filter']" value="true" name="access['Data Master']['Crud']['Province']['Filter']">
          <label class="custom-control-label" for="accessUpdate['Data Master']['Crud']['Province']['Filter']"> Filter</label>
        </div>
      </td>
    </tr>
    <tr>
      {!! $ArrowLv3 !!}
      <td>
        <div class="custom-control custom-switch">
          <input type="checkbox" class="custom-control-input" data-child="U.DM.C.P" data-parent="U.DM.C.P.ReloadData" id="accessUpdate['Data Master']['Crud']['Province']['Reload Data']" value="true" name="access['Data Master']['Crud']['Province']['Reload Data']">
          <label class="custom-control-label" for="accessUpdate['Data Master']['Crud']['Province']['Reload Data']"> Reload Data</label>
        </div>
      </td>
    </tr>
    <tr>
      {!! $ArrowLv3 !!}
      <td>
        <div class="custom-control custom-switch">
          <input type="checkbox" class="custom-control-input" data-child="U.DM.C.P" data-parent="U.DM.C.P.ActiveNonactive" id="accessUpdate['Data Master']['Crud']['Province']['Active Nonactive']" value="true" name="access['Data Master']['Crud']['Province']['Active Nonactive']">
          <label class="custom-control-label" for="accessUpdate['Data Master']['Crud']['Province']['Active Nonactive']"> Active Nonactive</label>
        </div>
      </td>
      <tr>
  </tbody>
</table>
</div>