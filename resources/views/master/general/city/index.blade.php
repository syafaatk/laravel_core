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
						<a href="javascript:void(0)" class="btn btn-sm btn-info" data-toggle="modal" data-target=".form-addCity">
							<i class="mdi mdi-plus-box-outline"></i> Tambah Kota Baru
						</a>
						@endif
						@if (isValidRole($Role,'Reload Data'))
						<a href="javascript:void(0)" class="btn btn-sm btn-danger ReloadDataSelling">
							<i class="fas fa-redo-alt mr-1"></i> Reload Data
						</a>
						@endif
					</div>
					<h4 class="mt-0 header-title">Semua Data Kota<hr></h4>
					<p class="text-muted font-14 mb-2"></p>
					<ul class="nav nav-tabs">
						<li class="nav-item">
							@if (!empty($Role))
							<a href="#master_city" data-toggle="tab" aria-expanded="false" class="nav-link active">
								<span> > Data Kota</span>            
							</a>
							@endif
						</li>
					</ul>

					<div class="tab-content">
						@if (isValidRole($Role,'Filter'))
						<div class="row mb-3 mt-3">
							<form class="col-12 form-inline text-left">
								<div class="col-md-4 mb-1 form-group form-group-custom">
									<select class="form-control select2" id="statusCity">
										<option value="All">Semua Status Status Kota</option>
										<option value="Active">Status Aktif</option>
										<option value="Non Active">Status Non Aktif</option>
									</select>
								</div>
								<div class="col-md-2">
									<button type="button" class="btn btn-sm btn-success btn-block ReloadDataSelling"><i class="mdi mdi-calendar-search"></i> Filter Kota</button>
								</div>
							</form>
						</div>
						@endif
						@if (!empty($Role))
						<div role="tabpanel" class="tab-pane fade show active" id="master_city">
							<div class="table-responsive mt-3 mb-1">
								<table id="datatable_city" class="table table-sm table-striped table-bordered text-nowrap" width="100%"></table>
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
@include('master.general.city.tambah')
@endif

@if (isValidRole($Role,'Edit'))
@include('master.general.city.update')
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
		{ data : "master_city_id", name : "master_city_id", title : "No", render: function ( data, type, row, meta ) {
			return meta.row+meta.settings._iDisplayStart+1;
		}},
		{ data : "master_city_alias", name : "master_city_alias", title : "Inisial/Singkatan Kota"},
		{ data : "master_city_name", name : "master_city_name", title : "Nama Kota",},
		{ data : "master_city_status", name : "master_city_status", title : "Status Kota", render: function ( data, type, row, meta ) {
			return data=="Active" ? 'Aktif' : 'Non Aktif';
		}},
		{ data : "created_at", name : "created_at", title : "Create At" },
		{ data : "updated_at", name : "updated_at", title : "Update At" },
		{ data : "master_city_id", name : "master_city_id", title : "", render: function ( data, type, row, meta ) {
			if (row.master_city_status=="Active") {
				return `
				@if (isValidRole($Role,'Active Nonactive'))
				<button class="btn btn-sm btn-danger ActCity" title="Non Aktifkan Akun" data-action="Non Active" data-unique="${data}"><i class="mdi mdi-cancel"></i> Nonaktifkan</button>
				@endif
				@if (isValidRole($Role,'Edit'))
				<button class="btn btn-sm btn-warning ActupdateCity" title="Perbarui Data Kota" data-unique="${data}" data-toggle="modal" data-target=".form-updateCity"><i class="fas fa-edit"></i> Update</button>
				@endif
				@if (isValidRole($Role,'Hapus'))
				<button class="btn btn-sm btn-danger ActCity" title="Hapus Data Kota" data-action="Penghapusan Data" data-unique="${data}"><i class="fas fa-trash"></i> Hapus</button>
				@endif
				`;
			} else {
				return `
				@if (isValidRole($Role,'Active Nonactive'))
				<button class="btn btn-sm btn-success ActCity" title="Aktifkan Akun" data-action="Active" data-unique="${data}"><i class="fas fa-check"></i> Aktifkan</button>
				@endif
				@if (isValidRole($Role,'Edit'))
				<button class="btn btn-sm btn-warning ActupdateCity" title="Perbarui Data Kota" data-unique="${data}" data-toggle="modal" data-target=".form-updateCity"><i class="fas fa-edit"></i> Update</button>
				@endif
				@if (isValidRole($Role,'Hapus'))
				<button class="btn btn-sm btn-danger ActCity" title="Hapus Data Kota" data-action="Penghapusan Data" data-unique="${data}"><i class="fas fa-trash"></i> Hapus</button>
				@endif
				`;
			}

		}},
		];



		@if (!empty($Role))

		var datatable_city = $('#datatable_city').DataTable({
			"processing" : true,
			"serverSide" : true,
			"lengthMenu" : [10, 25, 50, 100, 250, 500, 1000],
			"pageLength" : 25,
			ajax : {
				url: '{{ route('master.general.city.datatable') }}',
				type: 'POST',
				data: (params) => {
					params._token = $('meta[name="csrf-token"]').attr('content');
					params.master_city_status = $('#statusCity').val();
				}
			},
			"aoColumns" : columns,
			"initComplete": () => { ActCity(); },
			"drawCallback": () => { ActCity(); }
		});

		function ActCity(){

			@if (isValidRole($Role,'Edit'))
			if (typeof updateCity === "function") { 
				updateCity();
			}
			@endif

			$('.ComingSoonAlert').on('click', function(event) {
				Swal.fire('info', "Coming Soon. Fitur Sedang Dalam Tahap Development" ,'warning');
			});

			$(".ActCity").on('click', function(event) {
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

						@if (isValidRole($Role,'Active Nonactive'))
						if (action == "Active") {
							$.getJSON(`{{ route('master.general.city.active', ['id' => '']) }}/${id}`, function(data) {
								msg = data.messages;
							}).then(()=>{ Swal.fire(action, msg ,'success'); });
						}

						if (action == "Non Active") {
							$.getJSON(`{{ route('master.general.city.nonactive', ['id' => '']) }}/${id}`, function(data) {
								msg = data.messages;
							}).then(()=>{ Swal.fire(action, msg ,'success'); });
						}
						@endif

						@if (isValidRole($Role,'Hapus'))
						if (action == "Penghapusan Data") {
							$.post(`{{ route('master.general.city.delete', ['id' => '']) }}/${id}`,{_token:$('meta[name="csrf-token"]').attr('content')}, function(data) {
								msg = data.messages;
							}).then(()=>{ Swal.fire(action, msg ,'success'); });
						}
						@endif

						reloadAll();
					} else {
						Swal.fire('Dibatalkan!', `${action} Berhasil Dibatalkan.`, 'success');
					}
				});
			});
		}

		@endif

		var reloadAll = function(){
			@if (isValidRole($Role,'Reload Data'))
			datatable_city.ajax.reload();
			@endif
		}

	});
</script>
@endsection