{{-- dari halaman views yang sudah dipecah --}}
@extends('layouts.app')
{{-- end --}}

{{-- isi sidebar kiri --}}
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
						@if (property_exists($Role,'Tambah'))
						<a href="javascript:void(0)" class="btn btn-sm btn-info" data-toggle="modal" data-target=".form-addProvince">
							<i class="mdi mdi-plus-box-outline"></i> Tambah Kota Baru
						</a>
						@endif
						@if (property_exists($Role,'Reload Data'))
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
							<a href="#master_province" data-toggle="tab" aria-expanded="false" class="nav-link active">
								<span>Data Provinsi</span>            
       </a>
      </li>
       <li class="nav-item">
       <a href="#" aria-expanded="false"  class="nav-link ">
       	<span> Check Data Remove</span>    
       </a>
       </li>
       @endif

					
					</ul>

					<div class="tab-content">
						@if (property_exists($Role,'Filter'))
						<div class="row mb-3 mt-3">
							<form class="col-12 form-inline text-left">
								<div class="col-md-4 mb-1 form-group form-group-custom">
									<select class="form-control select2" id="statusProvince">
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
						<div role="tabpanel" class="tab-pane fade show active" id="master_province">
							<div class="table-responsive mt-3 mb-1">
								<table id="datatable_province" class="table table-sm table-striped table-bordered text-nowrap" width="100%"></table>
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

@if (property_exists($Role,'Tambah'))
@include('master.crud.province.tambah')
@endif

@if (property_exists($Role,'Edit'))
@include('master.crud.province.update')
@endif

@endsection
{{-- end sidebar kiri --}}


@section('javascript')

<script type="text/javascript">
	$(document).ready(() => {

  // reload tabel
  var reloadAll = function(){
			@if (property_exists($Role,'Reload Data'))
			datatable_province.ajax.reload();
			@endif
		}
  // end reload tabel 

  $('.LoadingPages').hide(250);
		$('.RealPages').show(250);

		$('.ReloadDataSelling').on('click', function(event) {
			reloadAll();
		});

  // isi data di tabel sesuai dengan jumlah yang nak diproses data: nama field db atau inisasi field 
		var columns = [
		{ data : "id_province", name : "id_province", title : "No", render: function ( data, type, row, meta ) {
			return meta.row+meta.settings._iDisplayStart+1;
		}},
		{ data : "name_province", name : "name_province", title : "Nama Provinsi"},
		{ data : "since", name : "since", title : "Tahun Berdiri",},
		{ data : "created_at", name : "created_at", title : "Create At" },
		{ data : "updated_at", name : "updated_at", title : "Update At" },
 
  // tombol  aksi data di tabel 
		{ data : "id_province", name : "id_province", title : "", render: function ( data, type, row, meta ) {
			if (row.province_status=="Active") {
				return `
				@if (property_exists($Role,'Active Nonactive'))
				<button class="btn btn-sm btn-danger ActProvince" title="Non Aktifkan Akun" data-action="Non Active" data-unique="${data}"><i class="mdi mdi-cancel"></i> Nonaktifkan</button>
				@endif
				@if (property_exists($Role,'Edit'))
				<button class="btn btn-sm btn-warning ActupdateProvince" title="Perbarui Data Kota" data-unique="${data}" data-toggle="modal" data-target=".form-updateCity"><i class="fas fa-edit"></i> Update</button>
				@endif
				@if (property_exists($Role,'Hapus'))
				<button class="btn btn-sm btn-danger ActProvince" title="Hapus Data Kota" data-action="Penghapusan Data" data-unique="${data}"><i class="fas fa-trash"></i> Hapus</button>
				@endif
				`;
			} else {
				return `
				@if (property_exists($Role,'Active Nonactive'))
				<button class="btn btn-sm btn-success ActProvince" title="Aktifkan Akun" data-action="Active" data-unique="${data}"><i class="fas fa-check"></i> Aktifkan</button>
				@endif
				@if (property_exists($Role,'Edit'))
				<button class="btn btn-sm btn-warning ActupdateProvince" title="Perbarui Data Kota" data-unique="${data}" data-toggle="modal" data-target=".form-updateProvince"><i class="fas fa-edit"></i> Update</button>
				@endif
				@if (property_exists($Role,'Hapus'))
				<button class="btn btn-sm btn-danger ActProvince" title="Hapus Data Kota" data-action="Penghapusan Data" data-unique="${data}"><i class="fas fa-trash"></i> Hapus</button>
				@endif
				`;
			}

  }},
  // end tombol aksi data ditabel
		
		];


// kolom tadi dijadike tabel data utuh bentok server bentok json 
		@if (!empty($Role))
		var datatable_province= $('#datatable_province').DataTable({
			"processing" : true,
			"serverSide" : true,
			"lengthMenu" : [10, 25, 50, 100, 250, 500, 1000],
			"pageLength" : 25,
			ajax : {
				url: '{{ route('master.crud.province.datatable') }}',
				type: 'POST',
				data: (params) => {
					params._token = $('meta[name="csrf-token"]').attr('content');
     params.province_status = $('#statusProvince').val();
				}
        
			},
			"aoColumns" : columns,
			"initComplete": () => { ActProvince(); },
			"drawCallback": () => { ActProvince(); }
		});

		function ActProvince(){

			@if (property_exists($Role,'Edit'))
			if (typeof updateProvince === "function") { 
				updateProvince();
			}
			@endif

    // alert maintane 
			$('.ComingSoonAlert').on('click', function(event) {
				Swal.fire('info', "Coming Soon. Fitur Sedang Dalam Tahap Development" ,'warning');
			});

   // aksi data 
			$(".ActProvince").on('click', function(event) {
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

						@if (property_exists($Role,'Active Nonactive'))
						if (action == "Active") {
							$.getJSON(`{{ route('master.crud.province.active', ['id' => '']) }}/${id}`, function(data) {
								msg = data.messages;
							}).then(()=>{ Swal.fire(action, msg ,'success').then(function(){
        reloadAll();
       }); 
       });
						}

						if (action == "Non Active") {
							$.getJSON(`{{ route('master.crud.province.nonactive', ['id' => '']) }}/${id}`, function(data) {
								msg = data.messages;
       }).then(()=>{ Swal.fire(action, msg ,'success').then(function(){
        reloadAll();
       }); 
       });
						}
						@endif

						@if (property_exists($Role,'Hapus'))
						if (action == "Penghapusan Data") {
       $.post(`{{ route('master.crud.province.delete', ['id' => '']) }}/${id}`,{_token:$('meta[name="csrf-token"]').attr('content')}, function(data) {
								msg = data.messages;
							}).then(()=>{ Swal.fire(action, msg ,'success').then(function(){
        reloadAll();
       }); 
       });
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


	

	});
</script>
@endsection