@php
$ArrowLv1 = '<td class="bg-light text-center"><i class="mdi mdi-plus"></i><i class="mdi mdi-minus"></i><i class="mdi mdi-minus"></i><i class="mdi mdi-arrow-right"></i></td>';
$ArrowLv2 = '<td class="bg-light text-center">|</td><td class="bg-light text-center"><i class="mdi mdi-plus"></i><i class="mdi mdi-minus"></i><i class="mdi mdi-minus"></i><i class="mdi mdi-arrow-right"></i></td>';
$ArrowLv3 = '<td class="bg-light text-center">|</td><td class="bg-light text-center">|</td><td class="bg-light text-center"><i class="mdi mdi-plus"></i><i class="mdi mdi-minus"></i><i class="mdi mdi-minus"></i><i class="mdi mdi-arrow-right"></i></td>';
$NewSpace = '<td class="bg-light text-center">|</td><td class="bg-light text-center">|</td><td class="bg-light text-center">|</td><td class="bg-light text-center">|</td>';

@endphp

<!--  Modal content for the above example -->
<div class="modal fade form-editUserGroup" role="dialog" aria-labelledby="editUserGroup" aria-hidden="true" style="display: none;">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="editUserGroup">Tambah User Group</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      </div>
      <div class="modal-body">
        <form action="{{ route('master.acl.users_group.update') }}" method="POST" class="form-horizontal ModalAddGroup updateUserGroup" accept-charset="utf-8">
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
            <ul class="nav nav-tabs">
              <li class="nav-item">
                <a href="#Dashboard" data-toggle="tab" aria-expanded="false" class="nav-link active">
                  <span> > Dashboard</span>            
                </a>
              </li>
              <li class="nav-item">
                <a href="#MasterData" data-toggle="tab" aria-expanded="false" class="nav-link">
                  <span> > Master</span> 
                </a>
              </li>
            </ul>
            <div class="tab-content col-sm-12">
              <div role="tabpanel" class="tab-pane fade show active" id="Dashboard">
                @include('master.users.group.dashboard.dashboard')
              </div>

              <div role="tabpanel" class="tab-pane fade" id="MasterData">
                @include('master.users.group.master_data.index_dms')
              </div>
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
<script type="text/javascript">
  function updateUserGroup(){

    $(".ActUpdateUserGroup").unbind();
    $('.ActUpdateUserGroup').on('click', function(event) {
      event.preventDefault();
      let id = $(this).data('unique');

      let defaultUrl = "{{ route('master.acl.users_group.update', ['id' => '']) }}";

      let msg = "";
      $.getJSON(`{{ route('master.acl.users_group.find', ['id' => '']) }}/${id}`, function(data) {
        msg = data.messages;

        $('.updateUserGroup').attr('action', `${defaultUrl}/${msg.users_group_id}`);

        $('.form-editUserGroup [name="users_group_alias"]').val(msg.users_group_alias);
        $('.form-editUserGroup [name="users_group_name"]').val(msg.users_group_name);
        $('.form-editUserGroup [name="user_group_default_pages"]').val(msg.user_group_default_pages);


        var role = {
          access  : JSON.parse(msg.users_group_access),
          summary : {}
        };

        let access = role.access;

        console.log(access);

        checkAccess(access, 'access');

      });
    });
  }

  function checkAccess(access, name) {
    if (typeof access === 'object') {
      $.each(access, function(index, val) {
        $(`[name="${name}"]`).attr('checked', true);
        console.log(`[name="${name}"]`);
        if (typeof val === 'object') {
          checkAccess(val, `${name}['${index}']`);
        } else {
          $(`[name="${name}['${index}']"]`).attr('checked', true);
          console.log(`[name="${name}['${index}']"]`);
        }
      });
    } 
  }
</script>