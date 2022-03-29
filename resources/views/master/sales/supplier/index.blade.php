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
						<a href="javascript:void(0)" class="btn btn-sm btn-info" data-toggle="modal" data-target=".form-addSupplier">
							<i class="mdi mdi-plus-box-outline"></i> Tambah Supplier Baru
						</a>
						@endif
						@if (isValidRole($Role,'Reload Data'))
						<a href="javascript:void(0)" class="btn btn-sm btn-danger ReloadDataSelling">
							<i class="fas fa-redo-alt mr-1"></i> Reload Data
						</a>
						@endif
					</div>
					<h4 class="mt-0 header-title">Semua Data Supplier<hr></h4>
					<p class="text-muted font-14 mb-2"></p>
					<ul class="nav nav-tabs">
						<li class="nav-item">
							@if (!empty($Role))
							<a href="#master_supplier" data-toggle="tab" aria-expanded="false" class="nav-link active">
								<span> > Data Supplier</span>            
							</a>
							@endif
						</li>
					</ul>

					<div class="tab-content">
						@if (isValidRole($Role,'Filter'))
						<div class="row mb-3 mt-3">
							<form class="col-12 form-inline text-left">
								<div class="col-md-2 mb-1 form-group form-group-custom">
									<select class="form-control select2" id="statusSupplier">
										<option value="All">Semua Status Status Supplier</option>
										<option value="Active">Status Aktif</option>
										<option value="Non Active">Status Non Aktif</option>
									</select>
								</div>
								<div class="col-md-3 mb-1 form-group form-group-custom">
									<select class="form-control select2_master_supplier_category" id="select2_master_supplier_category_search">
										<option value="">Silahkan Pilih Kategori Supplier</option>
									</select>
								</div>
								<div class="col-md-3 mb-1 form-group form-group-custom">
									<select class="form-control select2_master_city" id="select2_master_city_search">
										<option value="">Silahkan Pilih Kota</option>
									</select>
								</div>
								<div class="col-md-3 mb-1 form-group form-group-custom">
									<select class="form-control select2_master_brand" id="select2_master_brand_search">
										<option value="">Silahkan Pilih Brand</option>
									</select>
								</div>
								<div class="col-md-1">
									<button type="button" class="btn btn-sm btn-success btn-block ReloadDataSelling"><i class="mdi mdi-calendar-search"></i> Filter</button>
								</div>
							</form>
						</div>
						@endif
						@if (!empty($Role))
						<div role="tabpanel" class="tab-pane fade show active" id="master_supplier">
							<div class="table-responsive mt-3 mb-1">
								<table id="datatable_supplier" class="table table-sm table-striped table-bordered text-nowrap" width="100%"></table>
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
@include('master.sales.supplier.tambah')
@endif

@if (isValidRole($Role,'Edit'))
@include('master.sales.supplier.update')
@endif

@include('master.sales.supplier_category.tambah')
@include('master.general.city.tambah')
@include('master.sales.brand.tambah')
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
		{ data : "master_supplier_id", name : "master_supplier_id", title : "", render: function ( data, type, row, meta ) {
			let STATUS = '';
			@if (isValidRole($Role,'Active Nonactive'))
			if (row.master_supplier_status=="Active") {
				STATUS = `<button class="btn btn-sm btn-danger ActSupplier" title="Non Aktifkan Akun" data-action="Non Active" data-unique="${data}"><i class="mdi mdi-cancel"></i> Nonaktifkan</button>`;
			} else {
				STATUS = `	<button class="btn btn-sm btn-success ActSupplier" title="Aktifkan Akun" data-action="Active" data-unique="${data}"><i class="fas fa-check"></i> Aktifkan</button>`;
			}
			@endif
			return `
			${STATUS}
			@if (isValidRole($Role,'Edit'))
			<button class="btn btn-sm btn-warning ActupdateSupplier" title="Perbarui Data Supplier" data-unique="${data}" data-toggle="modal" data-target=".form-updateSupplier"><i class="fas fa-edit"></i> Update</button>
			@endif
			@if (isValidRole($Role,'Hapus'))
			<button class="btn btn-sm btn-danger ActSupplier" title="Hapus Data Supplier" data-action="Penghapusan Data" data-unique="${data}"><i class="fas fa-trash"></i> Hapus</button>
			@endif
			`;
		}},
		{ data : "master_supplier_id", name : "master_supplier_id", title : "No", render: function ( data, type, row, meta ) {
			return meta.row+meta.settings._iDisplayStart+1;
		}},
		{ data : "master_city_name", name : "master_city_name", title : "Kota",},
		{ data : "master_brand_name", name : "master_brand_name", title : "Brand/Merk",},
		{ data : "master_supplier_category_name", name : "master_supplier_category_name", title : "Kategori Supplier",},
		{ data : "master_supplier_name", name : "master_supplier_name", title : "Nama Supplier",},
		{ data : "master_supplier_phone_office", name : "master_supplier_phone_office", title : "No Kantor",},
		{ data : "master_supplier_phone_mobile", name : "master_supplier_phone_mobile", title : "No Hp",},
		{ data : "master_supplier_email", name : "master_supplier_email", title : "Email",},
		{ data : "master_supplier_section", name : "master_supplier_section", title : "PIC",},
		{ data : "master_supplier_pic", name : "master_supplier_pic", title : "Jabatan",},
		{ data : "master_supplier_address", name : "master_supplier_address", title : "Alamat Supplier"},
		{ data : "master_supplier_date_of_reg", name : "master_supplier_date_of_reg", title : "Tanggal Terdaftar",},
		{ data : "master_supplier_status", name : "master_supplier_status", title : "Status Supplier", render: function ( data, type, row, meta ) {
			return data=="Active" ? 'Aktif' : 'Non Aktif';
		}},
		{ data : "created_at", name : "created_at", title : "Create At" },
		{ data : "updated_at", name : "updated_at", title : "Update At" },
		];

		@if (!empty($Role))

		var datatable_supplier = $('#datatable_supplier').DataTable({
			"processing" : true,
			"serverSide" : true,
			"lengthMenu" : [10, 25, 50, 100, 250, 500, 1000],
			"pageLength" : 25,
			ajax : {
				url: '{{ route('master.sales.supplier.datatable') }}',
				type: 'POST',
				data: (params) => {
					params._token = $('meta[name="csrf-token"]').attr('content');
					params.master_supplier_status = $('#statusSupplier').val();
					params.master_supplier_category_id = $('#select2_master_supplier_category_search').val();
					params.master_city_id = $('#select2_master_city_search').val();
					params.master_brand_id = $('#select2_master_brand_search').val();
				}
			},
			"aoColumns" : columns,
			"initComplete": () => { ActSupplier(); },
			"drawCallback": () => { ActSupplier(); }
		});

		function ActSupplier(){

			@if (isValidRole($Role,'Edit'))
			if (typeof updateSupplier === "function") { 
				updateSupplier();
			}
			@endif

			$('.ComingSoonAlert').on('click', function(event) {
				Swal.fire('info', "Coming Soon. Fitur Sedang Dalam Tahap Development" ,'warning');
			});

			$(".ActSupplier").on('click', function(event) {
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
							$.getJSON(`{{ route('master.sales.supplier.active', ['id' => '']) }}/${id}`, function(data) {
								msg = data.messages;
							}).then(()=>{ Swal.fire(action, msg ,'success'); });
						}

						if (action == "Non Active") {
							$.getJSON(`{{ route('master.sales.supplier.nonactive', ['id' => '']) }}/${id}`, function(data) {
								msg = data.messages;
							}).then(()=>{ Swal.fire(action, msg ,'success'); });
						}
						@endif

						@if (isValidRole($Role,'Hapus'))
						if (action == "Penghapusan Data") {
							$.post(`{{ route('master.sales.supplier.delete', ['id' => '']) }}/${id}`,{_token:$('meta[name="csrf-token"]').attr('content')}, function(data) {
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
			datatable_supplier.ajax.reload();
			@endif
		}

		$('.select2_master_brand').select2({
			placeholder: "Silahkan Pilih Brand",
			allowClear: true,
			cache: true,
			ajax: {
				url: '{{ route('master.sales.brand.select2') }}',
				dataType: 'json',
			}
		});

		$('.select2_master_city').select2({
			placeholder: "Silahkan Pilih Kota",
			allowClear: true,
			cache: true,
			ajax: {
				url: '{{ route('master.general.city.select2') }}',
				dataType: 'json',
			}
		});

		$('.select2_master_supplier_category').select2({
			placeholder: "Silahkan Pilih Kategori Supplier",
			allowClear: true,
			cache: true,
			ajax: {
				url: '{{ route('master.sales.supplier_category.select2') }}',
				dataType: 'json',
			}
		});

	});
</script>
@endsection