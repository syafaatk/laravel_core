<div role="tabpanel" class="tab-pane fade show active" id="AccesControl">
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
          <input type="checkbox" class="custom-control-input" data-child="U." data-parent="U.DM" id="accessUpdate['Data Master']" value="true" name="access['Data Master']">
          <label class="custom-control-label" for="accessUpdate['Data Master']"> Data Master</label>
        </div>
      </td>
      <td>
        <div class="custom-control custom-switch">
          <input type="checkbox" class="custom-control-input" data-child="U.DM" data-parent="U.DM.AC" id="accessUpdate['Data Master']['Access Control']" value="true" name="access['Data Master']['Access Control']">
          <label class="custom-control-label" for="accessUpdate['Data Master']['Access Control']"> Access Control</label>
        </div>
      </td>
      <td>
        <div class="custom-control custom-switch">
          <input type="checkbox" class="custom-control-input" data-child="U.DM.AC" data-parent="U.DM.AC.U" id="accessUpdate['Data Master']['Access Control']['Users']" value="true" name="access['Data Master']['Access Control']['Users']">
          <label class="custom-control-label" for="accessUpdate['Data Master']['Access Control']['Users']"> Users</label>
        </div>
      </td>
      <td>
        <div class="custom-control custom-switch">
          <input type="checkbox" class="custom-control-input" data-child="U.DM.AC.U" data-parent="U.DM.AC.U.Tambah" id="accessUpdate['Data Master']['Access Control']['Users']['Tambah']" value="true" name="access['Data Master']['Access Control']['Users']['Tambah']">
          <label class="custom-control-label" for="accessUpdate['Data Master']['Access Control']['Users']['Tambah']"> Tambah</label>
        </div>
      </td>
    </tr>
    <tr>
      {!! $ArrowLv3 !!}
      <td>
        <div class="custom-control custom-switch">
          <input type="checkbox" class="custom-control-input" data-child="U.DM.AC.U" data-parent="U.DM.AC.U.Edit" id="accessUpdate['Data Master']['Access Control']['Users']['Edit']" value="true" name="access['Data Master']['Access Control']['Users']['Edit']">
          <label class="custom-control-label" for="accessUpdate['Data Master']['Access Control']['Users']['Edit']"> Edit</label>
        </div>
      </td>
    </tr>
    <tr>
      {!! $ArrowLv3 !!}
      <td>
        <div class="custom-control custom-switch">
          <input type="checkbox" class="custom-control-input" data-child="U.DM.AC.U" data-parent="U.DM.AC.U.Filter" id="accessUpdate['Data Master']['Access Control']['Users']['Filter']" value="true" name="access['Data Master']['Access Control']['Users']['Filter']">
          <label class="custom-control-label" for="accessUpdate['Data Master']['Access Control']['Users']['Filter']"> Filter</label>
        </div>
      </td>
    </tr>
    <tr>
      {!! $ArrowLv3 !!}
      <td>
        <div class="custom-control custom-switch">
          <input type="checkbox" class="custom-control-input" data-child="U.DM.AC.U" data-parent="U.DM.AC.U.Reload Data" id="accessUpdate['Data Master']['Access Control']['Users']['Reload Data']" value="true" name="access['Data Master']['Access Control']['Users']['Reload Data']">
          <label class="custom-control-label" for="accessUpdate['Data Master']['Access Control']['Users']['Reload Data']"> Reload Data</label>
        </div>
      </td>
    </tr>
    <tr>
      {!! $ArrowLv3 !!}
      <td>
        <div class="custom-control custom-switch">
          <input type="checkbox" class="custom-control-input" data-child="U.DM.AC.U" data-parent="U.DM.AC.U.Reset Password" id="accessUpdate['Data Master']['Access Control']['Users']['Reset Password']" value="true" name="access['Data Master']['Access Control']['Users']['Reset Password']">
          <label class="custom-control-label" for="accessUpdate['Data Master']['Access Control']['Users']['Reset Password']"> Reset Password</label>
        </div>
      </td>
    </tr>
    <tr>
      {!! $ArrowLv3 !!}
      <td>
        <div class="custom-control custom-switch">
          <input type="checkbox" class="custom-control-input" data-child="U.DM.AC.U" data-parent="U.DM.AC.U.ActiveNon Active" id="accessUpdate['Data Master']['Access Control']['Users']['Active Nonactive']" value="true" name="access['Data Master']['Access Control']['Users']['Active Nonactive']">
          <label class="custom-control-label" for="accessUpdate['Data Master']['Access Control']['Users']['Active Nonactive']"> Active Nonactive</label>
        </div>
      </td>
    </tr>

    <tr>
      {!! $ArrowLv3 !!}
      <td>
        <div class="custom-control custom-switch">
          <input type="checkbox" class="custom-control-input" data-child="U.DM.AC.U" data-parent="U.DM.AC.U.DetailSales" id="accessUpdate['Data Master']['Access Control']['Users']['Detail Sales']" value="true" name="access['Data Master']['Access Control']['Users']['Detail Sales']">
          <label class="custom-control-label" for="accessUpdate['Data Master']['Access Control']['Users']['Detail Sales']"> Detail Sales</label>
        </div>
      </td>
    </tr>
    <tr>
      {!! $ArrowLv3 !!}
      <td>
        <div class="custom-control custom-switch">
          <input type="checkbox" class="custom-control-input" data-child="U.DM.AC.U" data-parent="U.DM.AC.U.DetailEmployee" id="accessUpdate['Data Master']['Access Control']['Users']['Detail Karyawan']" value="true" name="access['Data Master']['Access Control']['Users']['Detail Karyawan']">
          <label class="custom-control-label" for="accessUpdate['Data Master']['Access Control']['Users']['Detail Karyawan']"> Detail Karyawan</label>
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
      {!! $ArrowLv1 !!}
      <td>
        <div class="custom-control custom-switch">
          <input type="checkbox" class="custom-control-input" data-child="U.DM.AC" data-parent="U.DM.AC.UG" id="accessUpdate['Data Master']['Access Control']['User Group']" value="true" name="access['Data Master']['Access Control']['User Group']">
          <label class="custom-control-label" for="accessUpdate['Data Master']['Access Control']['User Group']"> User Group</label>
        </div>
      </td>
      <td>
        <div class="custom-control custom-switch">
          <input type="checkbox" class="custom-control-input" data-child="U.DM.AC.UG" data-parent="U.DM.AC.UG.Tambah" id="accessUpdate['Data Master']['Access Control']['User Group']['Tambah']" value="true" name="access['Data Master']['Access Control']['User Group']['Tambah']">
          <label class="custom-control-label" for="accessUpdate['Data Master']['Access Control']['User Group']['Tambah']"> Tambah</label>
        </div>
      </td>
    </tr>
    <tr>
      {!! $ArrowLv3 !!}
      <td>
        <div class="custom-control custom-switch">
          <input type="checkbox" class="custom-control-input" data-child="U.DM.AC.UG" data-parent="U.DM.AC.UG.Edit" id="accessUpdate['Data Master']['Access Control']['User Group']['Edit']" value="true" name="access['Data Master']['Access Control']['User Group']['Edit']">
          <label class="custom-control-label" for="accessUpdate['Data Master']['Access Control']['User Group']['Edit']"> Edit</label>
        </div>
      </td>
    </tr>
    <tr>
      {!! $ArrowLv3 !!}
      <td>
        <div class="custom-control custom-switch">
          <input type="checkbox" class="custom-control-input" data-child="U.DM.AC.UG" data-parent="U.DM.AC.UG.Hapus" id="accessUpdate['Data Master']['Access Control']['User Group']['Hapus']" value="true" name="access['Data Master']['Access Control']['User Group']['Hapus']">
          <label class="custom-control-label" for="accessUpdate['Data Master']['Access Control']['User Group']['Hapus']"> Hapus</label>
        </div>
      </td>
    </tr>
    <tr>
      {!! $ArrowLv3 !!}
      <td>
        <div class="custom-control custom-switch">
          <input type="checkbox" class="custom-control-input" data-child="U.DM.AC.UG" data-parent="U.DM.AC.UG.Filter" id="accessUpdate['Data Master']['Access Control']['User Group']['Filter']" value="true" name="access['Data Master']['Access Control']['User Group']['Filter']">
          <label class="custom-control-label" for="accessUpdate['Data Master']['Access Control']['User Group']['Filter']"> Filter</label>
        </div>
      </td>
    </tr>
    <tr>
      {!! $ArrowLv3 !!}
      <td>
        <div class="custom-control custom-switch">
          <input type="checkbox" class="custom-control-input" data-child="U.DM.AC.UG" data-parent="U.DM.AC.UG.ReloadData" id="accessUpdate['Data Master']['Access Control']['User Group']['Reload Data']" value="true" name="access['Data Master']['Access Control']['User Group']['Reload Data']">
          <label class="custom-control-label" for="accessUpdate['Data Master']['Access Control']['User Group']['Reload Data']"> Reload Data</label>
        </div>
      </td>
    </tr>
    <tr>
      {!! $ArrowLv3 !!}
      <td>
        <div class="custom-control custom-switch">
          <input type="checkbox" class="custom-control-input" data-child="U.DM.AC.UG" data-parent="U.DM.AC.UG.ActiveNonactive" id="accessUpdate['Data Master']['Access Control']['User Group']['Active Nonactive']" value="true" name="access['Data Master']['Access Control']['User Group']['Active Nonactive']">
          <label class="custom-control-label" for="accessUpdate['Data Master']['Access Control']['User Group']['Active Nonactive']"> Active Nonactive</label>
        </div>
      </td>
    </tr>
  </tbody>
</table>
</div>