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
						<a href="javascript:void(0)" class="btn btn-sm btn-info" data-toggle="modal" data-target=".form-addUser">
							<i class="mdi mdi-plus-box-outline"></i> Tambah Pengguna Baru
						</a>
						@endif
						@if (isValidRole($Role,'Reload Data'))
						<a class="btn btn-danger btn-sm dropdown-toggle ReloadDataSelling" href="javascript:void(0)">
							<i class="fas fa-redo-alt mr-1"></i> Reload Data
						</a>
						@endif
					</div>
					<h4 class="mt-0 header-title">Semua Data Pengguna<hr></h4>
					<p class="text-muted font-14 mb-2"></p>
					<ul class="nav nav-tabs">
						<li class="nav-item">
							@if (!empty($Role))
							<a href="#master_users" data-toggle="tab" aria-expanded="false" class="nav-link active">
								<span> > Data Pengguna</span>            
							</a>
							@endif
						</li>
						
					</ul>

					<div class="tab-content">
						@if (isValidRole($Role,'Filter'))
						<div class="row mb-3 mt-3">
							<form class="col-12 form-inline">
								<div class="col-5">
									<select class="form-control select2" id="statusUsers">
										<option value="All">Semua Status Status Pengguna</option>
										<option value="active">Status Aktif</option>
										<option value="nonactive">Status Non Aktif</option>
									</select>
								</div>
								<div class="col-5">
									<select class="form-control select2_users_group" id="select2_users_group">
										<option value="">Silahkan Pilih Tipe Akses</option>
									</select>
								</div>
								<div class="col-2">
									<button type="button" class="btn btn-success btn-block ReloadDataSelling"><i class="mdi mdi-calendar-search"></i> Filter Pengguna</button>
								</div>
							</form>
						</div>
						@endif
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
@include('master.users.tambah')
@endif

@if (isValidRole($Role,'Edit'))
@include('master.users.update')
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

		var columns = [
		{ data : "id", name : "id", title : "", render: function ( data, type, row, meta ) {
			if (row.status=="active") {
				return `
				@if (isValidRole($Role,'Reset Password'))
				<button class="btn btn-sm btn-info ActUsers" title="Reset Password" data-action="Reset Password" data-unique="${data}"><i class="mdi mdi-replay"></i> Reset Password</button>
				@endif
				@if (isValidRole($Role,'Active Nonactive'))
				<button class="btn btn-sm btn-danger ActUsers" title="Non Aktifkan Akun" data-action="Non Active" data-unique="${data}"><i class="mdi mdi-cancel"></i> Nonaktifkan</button>
				@endif
				@if (isValidRole($Role,'Edit'))
				<button class="btn btn-sm btn-warning ActUpdateUser" title="Perbarui Data Pengguna" data-action="Details" data-unique="${data}" data-toggle="modal" data-target=".form-updateUser"><i class="fas fa-edit"></i> Update</button>
				@endif
				`;
			} else {
				return `
				@if (isValidRole($Role,'Reset Password'))
				<button class="btn btn-sm btn-info ActUsers" title="Reset Password" data-action="Reset Password" data-unique="${data}"><i class="mdi mdi-replay"></i> Reset Password</button>
				@endif
				@if (isValidRole($Role,'Active Nonactive'))
				<button class="btn btn-sm btn-success ActUsers" title="Aktifkan Akun" data-action="Active" data-unique="${data}"><i class="fas fa-check"></i> Aktifkan</button>
				@endif
				@if (isValidRole($Role,'Edit'))
				<button class="btn btn-sm btn-warning ActUpdateUser" title="Perbarui Data Pengguna" data-action="Details" data-unique="${data}" data-toggle="modal" data-target=".form-updateUser"><i class="fas fa-edit"></i> Update</button>
				@endif
				`;
			}

		}},
		{ data : "id", name : "id", title : "No", render: function ( data, type, row, meta ) {
			return meta.row+meta.settings._iDisplayStart+1;
		}},
		{ data : "name", name : "name", title : "Nama Pengguna",},
		{ data : "email", name : "email", title : "Email",},
		{ data : "users_group_name", name : "users_group_name", title : "Group" },
		{ data : "status", name : "status", title : "Status Pengguna", render: function ( data, type, row, meta ) {
			return data=="Active" ? 'Aktif' : 'Non Aktif';
		}},
		{ data : "created_at", name : "created_at", title : "Create At" },
		{ data : "updated_at", name : "updated_at", title : "Update At" },
		];

		@if (!empty($Role))

		var datatable_users = $('#datatable_users').DataTable({
			"processing" : true,
			"serverSide" : true,
			"lengthMenu" : [10, 25, 50, 100, 250, 500, 1000],
			"pageLength" : 25,
			ajax : {
				url: '{{ route('master.acl.users.datatable') }}',
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

			@if (isValidRole($Role,'Edit'))
			updateUser();
			@endif

			$('.ComingSoonAlert').on('click', function(event) {
				Swal.fire('info', "Coming Soon. Fitur Sedang Dalam Tahap Development" ,'warning');
			});

			$(".ActUsers").on('click', function(event) {
				var action = $(this).data('action');
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
						@if (isValidRole($Role,'Reset Password'))
						if (action == "Reset Password") {
							$.getJSON(`{{ route('master.acl.users.reset_password', ['id' => '']) }}/${id}`, function(data) {
								msg = data.messages;
							}).then(()=>{ Swal.fire(action, msg ,'success'); });
						}
						@endif
						@if (isValidRole($Role,'Active Nonactive'))
						if (action == "Active") {
							$.getJSON(`{{ route('master.acl.users.active', ['id' => '']) }}/${id}`, function(data) {
								msg = data.messages;
							}).then(()=>{ Swal.fire(action, msg ,'success'); });
						}

						if (action == "Non Active") {
							$.getJSON(`{{ route('master.acl.users.nonactive', ['id' => '']) }}/${id}`, function(data) {
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

		$('.select2_users_group').select2({
			placeholder: "Silahkan Pilih Group Akses",
			allowClear: true,
			ajax: {
				url: '{{ route('master.acl.users_group.select2') }}',
				dataType: 'json',
			}
		});
	});
</script>
@endsection