@extends('layouts.app')
@section('content')
<!-- Start Content-->
<div class="container-fluid">
	<div class="row">
		<div class="col-12" id="AllDataTables">
			<div class="card">
				<div class="card-body LoadingPages">
					<div class="float-right mt-n2" id="PenjualanRetail">
						<div class="spinner-grow ml-auto" role="status" aria-hidden="true"></div>
					</div>
					<h4 class="mt-0 header-title"><strong>... ... ... ... ... ... ... ... ... ...</strong><hr></h4>
					<div class="col-12 text-center p-3">
						<div class="spinner-border text-primary" role="status">
							<span class="sr-only">Loading...</span>
						</div>
					</div>
				</div>
				<div class="card-body RealPages" style="display: none;">
					<div class="float-right mt-n2" id="PenjualanRetail">
						@if (isValidRole($Role,'Tambah'))
						<a href="javascript:void(0)" class="btn btn-sm btn-info" data-toggle="modal" data-target=".form-addUserGroup">
							<i class="mdi mdi-plus-box-outline"></i> Tambah User Group Baru
						</a>
						@endif
						@if (isValidRole($Role,'Reload Data'))
						<a class="btn btn-danger btn-sm dropdown-toggle ReloadDataSelling" href="javascript:void(0)">
							<i class="fas fa-redo-alt mr-1"></i> Reload Data
						</a>
						@endif
					</div>
					<h4 class="mt-0 header-title">Semua Data User Group<hr></h4>
					<p class="text-muted font-14 mb-2"></p>
					<ul class="nav nav-tabs">
						<li class="nav-item">
							@if (!empty($Role))
							<a href="#master_users" data-toggle="tab" aria-expanded="false" class="nav-link active">
								<span> > Data User Group</span>            
							</a>
							@endif
						</li>

					</ul>

					<div class="tab-content">
						@if (!empty($Role))
						<div role="tabpanel" class="tab-pane fade show active" id="master_users">
							<div class="table-responsive mt-3 mb-1">
								<table id="datatable_users" class="table table-sm table-striped table-bordered text-nowrap" width="100%"></table>
							</div>
						</div>
						@endif
					</div>
				</div>
			</div>
		</div><!-- end col -->
	</div><!-- end col -->
</div> <!-- end row -->
</div> <!-- container -->

@if (isValidRole($Role,'Tambah'))
@include('master.users.group.tambah');
@endif

@if (isValidRole($Role,'Edit'))
@include('master.users.group.update');
@endif
@endsection

@section('javascript')

<script type="text/javascript">
	$(document).ready(() => {
		$('.LoadingPages').hide(250);
		$('.RealPages').show(250);

		$('.ReloadDataSelling').on('click', function(event) {
			reloadAll();
		});

		$(".ModalAddGroup").submit(function(e) {
			e.preventDefault();
			var form = $(this);
			var formData = form.serialize();
			console.log(formData);
			var url = form.attr('action');
			$.ajax({
				type: "POST",
				url: url,
				data: formData,
				success: (data) => {
					if (data.error==false) {
						Swal.fire('Sukses', data.messages ,'success');

						$('input:checkbox').attr('checked',false);
						
						form.trigger("reset");
						form.find('.BtnCloseModal').click();
						$('.ReloadDataSelling').click();
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

		$('input:checkbox').on('input', function(event) {
			var parent = $(this).data('parent');
			var child = $(this).data('child');
			
			$(`[data-child="${parent}"]`).trigger('click');
		});

		var columns = [
		{ data : "users_group_id", name : "users_group_id", title : "No", render: function ( data, type, row, meta ) {
			return meta.row+meta.settings._iDisplayStart+1;
		}},
		{ data : "users_group_alias", name : "users_group_alias", title : "Kode Group",},
		{ data : "users_group_name", name : "users_group_name", title : "Nama Group",},
		{ data : "user_group_default_pages", name : "user_group_default_pages", title : "Default URL",},
		{ data : "users_group_status", name : "users_group_status", title : "Status Group",},
		{ data : "created_at", name : "created_at", title : "Create At" },
		{ data : "updated_at", name : "updated_at", title : "Update At" },
		{ data : "users_group_id", name : "users_group_id", title : "", render: function ( data, type, row, meta ) {
			if (row.users_group_status=="Active") {
				return `
				@if (isValidRole($Role,'Active Nonactive'))
				<button class="btn btn-sm btn-danger ActUsers" title="Non Aktifkan Akun" data-action="Non Active" data-unique="${data}"><i class="mdi mdi-cancel"></i> Nonaktifkan</button>
				@endif
				@if (isValidRole($Role,'Edit'))
				<button class="btn btn-sm btn-warning ActUpdateUserGroup" title="Perbarui Data User Group" data-action="Perbarui User Group" data-unique="${data}" data-toggle="modal" data-target=".form-editUserGroup"><i class="fas fa-edit"></i> Update Akses Group</button>
				@endif
				`;
			} else {
				return `
				@if (isValidRole($Role,'Active Nonactive'))
				<button class="btn btn-sm btn-success ActUsers" title="Aktifkan Akun" data-action="Active" data-unique="${data}"><i class="fas fa-check"></i> Aktifkan</button>
				@endif
				@if (isValidRole($Role,'Edit'))
				<button class="btn btn-sm btn-warning ActUpdateUserGroup" title="Perbarui Data User Group" data-action="Perbarui User Group" data-unique="${data}" data-toggle="modal" data-target=".form-editUserGroup"><i class="fas fa-edit"></i> Update Akses Group</button>
				@endif
				`;
			}

		}},
		];

		@if (!empty($Role))

		var datatable_users = $('#datatable_users').DataTable({
			"processing" : true,
			"serverSide" : true,
			"lengthMenu" : [10, 25, 50, 100, 250, 500, 1000],
			"pageLength" : 25,
			ajax : {
				url: '{{ route('master.acl.users_group.datatable') }}',
				type: 'POST',
				data: (params) => {
					params._token = $('meta[name="csrf-token"]').attr('content');
					params.status = $('#statusUsers').val();
					params.users_group_id = $('#select2_users_group').val();
				}
			},
			"aoColumns" : columns,
			"initComplete": () => { ActUsers(); },
			"drawCallback": () => { ActUsers(); }
		});

		function ActUsers(){

			$('.ComingSoonAlert').on('click', function(event) {
				Swal.fire('info', "Coming Soon. Fitur Sedang Dalam Tahap Development" ,'warning');
			});

			updateUserGroup();

			$(".ActUsers").on('click', function(event) {
				var action = $(this).data('action');

				console.log($(this).data('ac'));

				event.preventDefault();
				Swal.fire({
					text: `Yakin Ingin Melakukan ${action} ?`,
					title: 'Kofirmasi',
					icon: "question",
					showCancelButton: true,
					confirmButtonColor: '#3085d6',
					cancelButtonColor: '#d33',
					confirmButtonText: 'Ya',
					cancelButtonText: 'Tidak, Batalkan!',
				}).then((result) => {
					if (result.value) {
						let id = $(this).data('unique');
						let msg = "";

						@if (isValidRole($Role,'Active Nonactive'))
						if (action == "Active") {
							$.getJSON(`{{ route('master.acl.users_group.active', ['id' => '']) }}/${id}`, function(data) {
								msg = data.messages;
							}).then(()=>{ Swal.fire(action, msg ,'success'); });
						}
						@endif

						@if (isValidRole($Role,'Active Nonactive'))
						if (action == "Non Active") {
							$.getJSON(`{{ route('master.acl.users_group.nonactive', ['id' => '']) }}/${id}`, function(data) {
								msg = data.messages;
							}).then(()=>{ Swal.fire(action, msg ,'success'); });
						}
						@endif

						reloadAll();
					} else {
						Swal.fire('Dibatalkan!', `${action} Berhasil Dibatalkan.`, 'success');
					}
				})
			});
		}

		@endif

		var reloadAll = function(){
			@if (isValidRole($Role,'Reload Data'))
			datatable_users.ajax.reload();
			@endif
		}
	});
</script>
@endsection