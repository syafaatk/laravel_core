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
						<a href="javascript:void(0)" class="btn btn-sm btn-info" data-toggle="modal" data-target=".form-addUnit">
							<i class="mdi mdi-plus-box-outline"></i> Tambah Satuan (EOM) Baru
						</a>
						@endif
						@if (isValidRole($Role,'Reload Data'))
						<a href="javascript:void(0)" class="btn btn-sm btn-danger ReloadDataSelling">
							<i class="fas fa-redo-alt mr-1"></i> Reload Data
						</a>
						@endif
					</div>
					<h4 class="mt-0 header-title">Semua Data Satuan (EOM)<hr></h4>
					<p class="text-muted font-14 mb-2"></p>
					<ul class="nav nav-tabs">
						<li class="nav-item">
							@if (!empty($Role))
							<a href="#master_unit" data-toggle="tab" aria-expanded="false" class="nav-link active">
								<span> > Data Satuan (EOM)</span>            
							</a>
							@endif
						</li>
					</ul>

					<div class="tab-content">
						@if (isValidRole($Role,'Filter'))
						<div class="row mb-3 mt-3">
							<form class="col-12 form-inline text-left">
								<div class="col-md-4 mb-1 form-group form-group-custom">
									<select class="form-control select2" id="statusUnit">
										<option value="All">Semua Status Status Satuan (EOM)</option>
										<option value="Active">Status Aktif</option>
										<option value="Non Active">Status Non Aktif</option>
									</select>
								</div>
								<div class="col-md-2">
									<button type="button" class="btn btn-sm btn-success btn-block ReloadDataSelling"><i class="mdi mdi-calendar-search"></i> Filter Satuan (EOM)</button>
								</div>
							</form>
						</div>
						@endif
						@if (!empty($Role))
						<div role="tabpanel" class="tab-pane fade show active" id="master_unit">
							<div class="table-responsive mt-3 mb-1">
								<table id="datatable_unit" class="table table-sm table-striped table-bordered text-nowrap" width="100%"></table>
							</div>
						</div>
						@endif
					</div>
				</div>
			</div>
		</div><!-- end col -->
	</div><!-- end col -->
</div> <!-- container -->

@if (isValidRole($Role,'Tambah'))
@include('master.sales.unit.tambah')
@endif

@if (isValidRole($Role,'Edit'))
@include('master.sales.unit.update')
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
		{ data : "master_unit_id", name : "master_unit_id", title : "No", render: function ( data, type, row, meta ) {
			return meta.row+meta.settings._iDisplayStart+1;
		}},
		{ data : "master_unit_alias", name : "master_unit_alias", title : "Inisial/Singkatan Satuan (EOM)"},
		{ data : "master_unit_name", name : "master_unit_name", title : "Nama Satuan (EOM)",},
		{ data : "master_unit_status", name : "master_unit_status", title : "Status Satuan (EOM)", render: function ( data, type, row, meta ) {
			return data=="Active" ? 'Aktif' : 'Non Aktif';
		}},
		{ data : "created_at", name : "created_at", title : "Create At" },
		{ data : "updated_at", name : "updated_at", title : "Update At" },
		{ data : "master_unit_id", name : "master_unit_id", title : "", render: function ( data, type, row, meta ) {

			let STATUS = '';
			@if (isValidRole($Role,'Active Nonactive'))
			if (row.master_unit_status=="Active") {
				STATUS = `<button class="btn btn-sm btn-danger ActUnit" title="Non Aktifkan Akun" data-action="Non Active" data-unique="${data}"><i class="mdi mdi-cancel"></i> Nonaktifkan</button>`;
			} else {
				STATUS = `	<button class="btn btn-sm btn-success ActUnit" title="Aktifkan Akun" data-action="Active" data-unique="${data}"><i class="fas fa-check"></i> Aktifkan</button>`;
			}
			@endif
			return `
			${STATUS}
			@if (isValidRole($Role,'Edit'))
			<button class="btn btn-sm btn-warning ActupdateUnit" title="Perbarui Data Unit" data-unique="${data}" data-toggle="modal" data-target=".form-updateUnit"><i class="fas fa-edit"></i> Update</button>
			@endif
			@if (isValidRole($Role,'Hapus'))
			<button class="btn btn-sm btn-danger ActUnit" title="Hapus Data Unit" data-action="Penghapusan Data" data-unique="${data}"><i class="fas fa-trash"></i> Hapus</button>
			@endif
			`;
		}},
		];

		@if (!empty($Role))

		var datatable_unit = $('#datatable_unit').DataTable({
			"processing" : true,
			"serverSide" : true,
			"lengthMenu" : [10, 25, 50, 100, 250, 500, 1000],
			"pageLength" : 25,
			ajax : {
				url: '{{ $route->datatable }}',
				type: 'POST',
				data: (params) => {
					params._token = $('meta[name="csrf-token"]').attr('content');
					params.master_unit_status = $('#statusUnit').val();
				}
			},
			"aoColumns" : columns,
			"initComplete": () => { ActUnit(); },
			"drawCallback": () => { ActUnit(); }
		});

		function ActUnit(){

			@if (isValidRole($Role,'Edit'))
			if (typeof updateUnit === "function") { 
				updateUnit();
			}
			@endif

			$('.ComingSoonAlert').on('click', function(event) {
				Swal.fire('info', "Coming Soon. Fitur Sedang Dalam Tahap Development" ,'warning');
			});

			$(".ActUnit").on('click', function(event) {
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
							$.getJSON(`{{ $route->active }}/${id}`, function(data) {
								msg = data.messages;
							}).then(()=>{ Swal.fire(action, msg ,'success'); });
						}

						if (action == "Non Active") {
							$.getJSON(`{{ $route->nonactive }}/${id}`, function(data) {
								msg = data.messages;
							}).then(()=>{ Swal.fire(action, msg ,'success'); });
						}
						@endif

						@if (isValidRole($Role,'Hapus'))
						if (action == "Penghapusan Data") {
							$.post(`{{ $route->delete }}/${id}`,{_token:$('meta[name="csrf-token"]').attr('content')}, function(data) {
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
			datatable_unit.ajax.reload();
			@endif
		}

	});
</script>
@endsection