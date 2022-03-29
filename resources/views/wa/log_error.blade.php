@php
$akses = json_decode(auth()->user()->akses->users_group_access);

$LogError = null;

if (property_exists($akses,'Whatsapp')) {

	$Whatsapp = $akses->{'Whatsapp'};
	if (property_exists($Whatsapp,'LogError')) {

		$LogError = $Whatsapp->{'LogError'};
	}
}

if ($LogError!=null) { redirect('/'); }

@endphp
@extends('layouts.app', ['title' => "Log Error"])

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
						@if (property_exists($LogError,'SettingWhatsapp'))
						<a href="javascript:void(0)" class="btn btn-sm btn-warning" data-toggle="modal" data-target=".form-addSetting" id="PengaturanForm">
							<i class="mdi mdi-plus-box-outline"></i> Pengaturan Whatsapp
						</a>
						@endif
						@if (property_exists($LogError,'Reload Data'))
						<a href="javascript:void(0)" class="btn btn-sm btn-danger ReloadDataSelling">
							<i class="fas fa-redo-alt mr-1"></i> Reload Data
						</a>
						@endif
					</div>
					<h4 class="mt-0 header-title">Semua Data Log Error<hr></h4>
					<p class="text-muted font-14 mb-2"></p>
					<ul class="nav nav-tabs">
						<li class="nav-item">
							@if (!empty($LogError))
							<a href="#it_log_error" data-toggle="tab" aria-expanded="false" class="nav-link active">
								<span> > Data Log Error</span>            
							</a>
							@endif
						</li>
					</ul>

					<div class="tab-content">
						@if (property_exists($LogError,'Filter'))
						<div class="row mb-3 mt-3">
							<form class="col-12 form-inline text-left">
								<div class="col-md-4 mb-1 form-group form-group-custom">
									<select class="form-control select2" id="statusLogError">
										<option value="All">Semua Status</option>
										<option value="Fixed">Status Fixed</option>
										<option value="Not Fixed">Status Not Fixed</option>
									</select>
								</div>
								<div class="col-md-2">
									<button type="button" class="btn btn-sm btn-success btn-block ReloadDataSelling"><i class="mdi mdi-calendar-search"></i> Filter</button>
								</div>
							</form>
						</div>
						@endif
						@if (!empty($LogError))
						<div role="tabpanel" class="tab-pane fade show active" id="it_log_error">
							<div class="table-responsive mt-3 mb-1">
								<table id="datatable_it_log_error" class="table table-sm table-striped table-bordered text-nowrap" width="100%"></table>
							</div>
						</div>
						@endif

					</div>
				</div>
			</div><!-- end col -->
		</div><!-- end col -->
	</div> <!-- end row -->
</div> <!-- container -->

@if (property_exists($LogError,'DetailLogError'))
@include('wa.detail_log')
@endif
@if (property_exists($LogError,'SettingWhatsapp'))
@include('wa.settingwait')
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
		{ data : "it_log_error_id", name : "it_log_error_id", title : "No", render: function ( data, type, row, meta ) {
			return meta.row+meta.settings._iDisplayStart+1;
		}},
		{ data : "users_name", name : "users_name", title : "Nama User Input",},
		{ data : "it_log_error_message", name : "it_log_error_message", title : "Message",},
		{ data : "it_log_error_exception", name : "it_log_error_exception", title : "Exception",},
		{ data : "it_log_error_file", name : "it_log_error_file", title : "File",},
		{ data : "it_log_error_line", name : "it_log_error_line", title : "Line",},
		{ data : "it_log_error_status", name : "it_log_error_status", title : "Status",},

		{ data : "created_at", name : "created_at", title : "Create At" },
		{ data : "updated_at", name : "updated_at", title : "Update At" },
		{ data : "it_log_error_id", name : "it_log_error_id", title : "", render: function ( data, type, row, meta ) {
			if (row.it_log_error_status=="Fixed") {
				return `
				@if (property_exists($LogError,'DetailLogError'))
				<button class="btn btn-sm btn-warning ActDetailLogError" title="Detail Data Trace" data-unique="${data}" data-toggle="modal" data-target=".form-detailLogError"><i class="fas fa-eye"></i> Detail</button>
				@endif
				@if (property_exists($LogError,'Status'))
				<button class="btn btn-sm btn-danger ActLogError" title="Not Fixed" data-action="Not Fixed" data-unique="${data}"><i class="mdi mdi-cancel"></i> Not Fixed</button>
				@endif
				@if (property_exists($LogError,'Hapus'))
				<button class="btn btn-sm btn-danger ActLogError" title="Hapus Data Log Error" data-action="Penghapusan Data" data-unique="${data}"><i class="fas fa-trash"></i> Hapus</button>
				@endif
				`;
			} else {
				return `
				@if (property_exists($LogError,'DetailLogError'))
				<button class="btn btn-sm btn-warning ActDetailLogError" title="Detail Data Trace" data-unique="${data}" data-toggle="modal" data-target=".form-detailLogError"><i class="fas fa-eye"></i> Detail</button>
				@endif
				@if (property_exists($LogError,'Status'))
				<button class="btn btn-sm btn-success ActLogError" title="Fixed" data-action="Fixed" data-unique="${data}"><i class="fas fa-check"></i> Fixed</button>
				@endif
				`;
			}

		}},
		];

		@if (!empty($LogError))

		var datatable_it_log_error = $('#datatable_it_log_error').DataTable({
			"processing" : true,
			"serverSide" : true,
			"lengthMenu" : [10, 25, 50, 100, 250, 500, 1000],
			"pageLength" : 25,
			ajax : {
				url: '{{ route('api.wa.log_error.datatable') }}',
				type: 'POST',
				data: (params) => {
					params._token = $('meta[name="csrf-token"]').attr('content');
					params.it_log_error_status = $('#statusLogError').val();
				}
			},
			"aoColumns" : columns,
			"initComplete": () => { ActLogError(); },
			"drawCallback": () => { ActLogError(); }
		});

		function ActLogError(){
			@if (property_exists($LogError,'DetailLogError'))
			if (typeof detailLogError === "function") { 
				detailLogError();
			}
			@endif

			$('.ComingSoonAlert').on('click', function(event) {
				Swal.fire('info', "Coming Soon. Fitur Sedang Dalam Tahap Development" ,'warning');
			});

			$(".ActLogError").on('click', function(event) {
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

						@if (property_exists($LogError,'Status'))
						if (action == "Fixed") {
							$.getJSON(`{{ route('api.wa.log_error.fixed', ['id' => '']) }}/${id}`, function(data) {
								msg = data.messages;
							}).then(()=>{ Swal.fire(action, msg ,'success'); reloadAll(); });
						}

						if (action == "Not Fixed") {
							$.getJSON(`{{ route('api.wa.log_error.notfixed', ['id' => '']) }}/${id}`, function(data) {
								msg = data.messages;
							}).then(()=>{ Swal.fire(action, msg ,'success'); reloadAll(); });
						}
						@endif

						@if (property_exists($LogError,'Hapus'))
						if (action == "Penghapusan Data") {
							$.post(`{{ route('api.wa.log_error.delete', ['id' => '']) }}/${id}`,{_token:$('meta[name="csrf-token"]').attr('content')}, function(data) {
								msg = data.messages;
							}).then(()=>{ Swal.fire(action, msg ,'success'); reloadAll(); });
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
			@if (property_exists($LogError,'Reload Data'))
			datatable_it_log_error.ajax.reload();
			@endif
		}

	});
</script>
@endsection