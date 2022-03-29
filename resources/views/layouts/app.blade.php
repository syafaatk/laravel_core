<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>{{ config('app.name', 'Sistem Core Khoirusy Syafaat') }}</title>
	{{-- CSRF Token --}}
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="{{ config('app.name', 'Sistem Core Khoirusy Syafaat') }}"/>
	<meta name="author" content="Khoirusy Syafaat"/>
	{{-- App favicon --}}
	<link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
	<link rel="manifest" href="/manifest.json">
	{{-- datepicker --}}
	<link href="{{ asset('assets/libs/air-datepicker/css/datepicker.min.css') }}" rel="stylesheet" type="text/css" />
	{{-- DataTables --}}
	<link href="{{ asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
	{{--  Responsive datatable examples --}}
	<link href="{{ asset('assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
	{{-- Picker.JS --}}
	<link href="{{ asset('assets/libs/pickerjs/dist/picker.min.css') }}" rel="stylesheet" type="text/css"/>
	{{-- Plugins css --}}
	<link href="{{ asset('assets/libs/dropzone/min/dropzone.min.css') }}" rel="stylesheet" type="text/css" />
	{{-- Select2 --}}
	<link href="{{ asset('assets/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css"/>
	{{-- Sweet Alert--}}
	<link href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css"/>
	{{-- Bootstrap Css --}}
	<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
	{{-- Icons Css --}}
	<link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css"/>
	{{-- App Css--}}
	<link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css"/>
	{{-- JAVASCRIPT --}}
	<script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
	<script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

	@yield('javascript_head')
	
	<style type="text/css" media="screen">
		/* Chrome, Safari, Edge, Opera */
		input::-webkit-outer-spin-button,
		input::-webkit-inner-spin-button {
			-webkit-appearance: none;
			margin: 0;
		}
		/* Firefox */
		input[type=number] {
			-moz-appearance: textfield;
		}

		.btn-oversmall {
			font-size: .625rem;
			padding: 0.3rem 0.55rem;
		}
		.autocomplete-suggestions { border: 1px solid #999; background: #FFF; overflow: auto; }
		.autocomplete-suggestion { padding: 2px 5px; white-space: nowrap; overflow: hidden; }
		.autocomplete-selected { background: #F0F0F0; }
		.autocomplete-suggestions strong { font-weight: normal; color: #3399FF; }
		.autocomplete-group { padding: 2px 5px; }
		.autocomplete-group strong { display: block; border-bottom: 1px solid #000; }

	</style>
</head>

<body data-topbar="colored" data-keep-enlarged="true" {{-- class="vertical-collpsed" --}}>

	{{-- Begin page --}}
	<div id="layout-wrapper" >

		<header id="page-topbar" style="box-shadow: 1px 2px 4px rgba(0,0,0,.3) !important; background-color: {{ env('HEADER_COLOR', "#3051d3") }};">
			<div class="navbar-header">
				<div class="d-flex">
					{{-- LOGO --}}
					<div class="navbar-brand-box" style="background-color: {{ env('HEADER_COLOR', "#3051d3") }};">
						<div class="row">
							<div class="col-12">
								<a href="{{ route('home') }}" class="logo logo-dark">
									<span class="logo-lg text-left">
										<button type="button" class="btn btn-sm rounded-sm px-3 font-size-20 vertical-menu-btn header-item waves-effect text-white ml-n3" id="">
											<i class="mdi mdi-keyboard-backspace" id="changeIconToogleMenu"></i> <span class="font-size-16">Minimize Menu</span> 
										</button>
									</span>
									<span class="logo-sm">
										<button type="button" class="btn btn-sm font-size-20 vertical-menu-btn header-item waves-effect text-white ml-n2" id="">
											<i class="mdi mdi-keyboard-tab" id="changeIconToogleMenu"></i> 
										</button>
									</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

		{{-- ========== Left Sidebar Start ========== --}}
		<div class="vertical-menu mt-n5 mt-sm-0">

			<div data-simplebar class="h-100">

				{{--- Sidemenu --}}
				<div id="sidebar-menu">
					{{-- Left Menu Start --}}
					<ul class="metismenu list-unstyled" id="side-menu">
						<li class="menu-title">{{ auth()->user()->akses->users_group_name }}</li>
						@if (isValidRole($akses,'Dashboard'))
						<li>
							<a href="{{ route('default_home') }}" class="waves-effect">
								<div class="d-inline-block icons-sm mr-1"><i class="uim uim-airplay"></i></div>
								<span>Dashboard</span>
							</a>
						</li>
						@endif

						@if ($master = isValidRole($akses, 'Data Master'))
						<li class="menu-title">Data Master</li>
						@if ($acl = isValidRole($master, 'Access Control'))
						<li>
							<a href="javascript:void(0);" class="has-arrow waves-effect">
								<div class="d-inline-block icons-sm mr-1"><i class="uim uim-window-grid"></i></div>
								<span>Access Control</span>
							</a>
							<ul class="sub-menu" aria-expanded="false">
								@if (isValidRole($acl, 'Users'))
								<li><a href="{{ route('master.acl.users.index') }}">Users</a></li>
								@endif
								@if (isValidRole($acl, 'User Group'))
								<li><a href="{{ route('master.acl.users_group.index') }}">User Group</a></li>
								@endif
							</ul>
						</li>
						@endif

						@if ($sales = isValidRole($master, 'Master Penjualan'))
						<li>
							<a href="javascript:void(0);" class="has-arrow waves-effect">
								<div class="d-inline-block icons-sm mr-1"><i class="uim uim-window-grid"></i></div>
								<span>Master Penjualan</span>
							</a>
							<ul class="sub-menu" aria-expanded="false">
								@if (isValidRole($sales, 'Produk'))
								<li><a href="{{ route('master.sales.produk.index') }}">Produk / Barang</a></li>
								@endif
								@if (isValidRole($sales, 'Kategori'))
								<li><a href="{{ route('master.sales.kategori.index') }}">Kategori</a></li>
								@endif
							</ul>
						</li>
      @endif
      @if ($crud = isValidRole($master,['Crud']))
						<li>
							<a href="javascript:void(0);" class="has-arrow waves-effect">
								<div class="d-inline-block icons-sm mr-1"><i class="uim uim-window-grid"></i></div>
								<span>Crud</span>
							</a>
							<ul class="sub-menu" aria-expanded="false">
								@if ($province = isValidRole($crud,['Province']))
								<li><a href="{{ route('master.crud.province.index') }}">Provinsi</a></li>
                @endif
                @if ($province = isValidRole($crud,['Country']))
								<li><a href="{{ route('master.crud.country.index') }}">Country</a></li>
								@endif
							</ul>
						</li>
						@endif


						@endif

						<li>
							<a href="{{ route('profile') }}" class="waves-effect">
								<div class="d-inline-block icons-sm mr-1"><i class="uim uim-lock"></i></div>
								<span>Ubah Kata Sandi</span>
							</a>
						</li>
						<li>
							<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="waves-effect">
								<div class="d-inline-block icons-sm mr-1"><i class="uim uim-exit"></i></div>
								<span>Logout</span>
							</a>
						</li>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
							@csrf
						</form>

					</ul>

				</div>
				{{-- Sidebar --}}
			</div>
		</div>
		{{-- Left Sidebar End --}}

		{{-- ============================================================== --}}
		{{-- Start right Content here --}}
		{{-- ============================================================== --}}
		<div class="main-content">
			<div class="page-content">
				<div class="page-content-wrapper">
					@yield('content')
				</div>

				{{-- end page-content-wrapper --}}
				<div class="container">
					<nav class="navbar navbar-expand-lg fixed-bottom navbar-light bg-white d-block d-sm-none" style="box-shadow: 0px 2px 6px rgba(0,0,0,.9) !important;">
						<div class="row">
							<div class="col-2 text-center">
								<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="waves-effect mb-n1 mt-1">
									<div class="d-inline-block text-center">
										<i class="fas fa-sign-out-alt" style="font-size: 20pt"></i><br>
										<span style="font-size: 10pt">Keluar</span>
									</div>
								</a>
							</div>
							<div class="col-2 text-center">
								<a href="{{ route('profile') }}" class="waves-effect mb-n1 mt-1">
									<div class="d-inline-block icons-lg text-center">
										<i class="fas fa-key" style="font-size: 20pt"></i><br>
										<span style="font-size: 10pt">Sandi</span>
									</div>
								</a>
							</div>
							<div class="col-4 text-center">
								@if (isValidRole($akses,['Data Master', 'Master Penjualan', 'Gudang']))
								<a href="{{ route('master.sales.warehouse.index') }}" class="waves-effect mb-n1 mt-1">
									<div class="d-inline-block icons-lg text-center">
										<i class="fas fa-people-carry" style="font-size: 20pt"></i><br>
										<span style="font-size: 10pt">Gudang</span>
									</div>
								</a>
								@endif
							</div>
							<div class="col-2 text-center">
								@if (isValidRole($akses,['Data Master', 'Master Penjualan', 'Item']))
								<a href="{{ route('master.sales.unit.index') }}" class="waves-effect mb-n1 mt-1">
									<div class="d-inline-block icons-lg text-center">
										<i class="fab fa-wpforms" style="font-size: 20pt"></i><br>
										<span style="font-size: 10pt">Barang</span>
									</div>
								</a>
								@endif
							</div>
							<div class="col-2 text-center">
								<a href="javascript:void(0);" class="waves-effect vertical-menu-btn mb-n1 mt-1">
									<div class="d-inline-block icons-lg text-center">
										<i class="fas fa-th-list" style="font-size: 20pt"></i><br>
										<span style="font-size: 10pt">Menu</span>
									</div>
								</a>
							</div>
						</div>
					</nav>
				</div>
			</div>

			{{-- End Page-content --}}
			<footer class="footer">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-6 mb-n3">
							2020 © {{ config('app.name', 'CV Imarah Promosindo') }}.
						</div>
						<div class="col-sm-6">
							<div class="text-right footer-links d-none d-lg-block d-md-block">
								<a class="mr-2" href="{{ asset('manual/Manual-Book-Aplikasi.docx') }}" target="_blank">Manual Book</a>
								<a class="mr-2" href="javascript:void(0);" id="enableNotifications">🔔 Enable Notification</a>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>
		{{-- end main content--}}

	</div>
	{{-- END layout-wrapper --}}
	<script src="{{ asset('assets/libs/metismenu/metisMenu.min.js') }}"></script>
	<script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
	<script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>

	<script src="{{ asset('/assets/libs/push-notification/push.min.js') }}"></script>

	<script src="{{ asset('assets/js/monochrome-bundle.js') }}"></script>
	{{-- datepicker --}}
	<script src="{{ asset('assets/libs/air-datepicker/js/datepicker.min.js') }}"></script>
	{{-- Picker.JS --}}
	<script src="{{ asset('assets/libs/pickerjs/dist/picker.min.js') }}"></script>
	{{-- Autocomplete Ajax --}}
	<script src="{{ asset('assets/libs/autocomplete-ajax/jquery.autocomplete.min.js') }}"></script>
	<script src="{{ asset('assets/libs/jquery-knob/jquery.knob.min.js') }}"></script> 
	{{-- Required datatable js --}}
	<script src="{{ asset('assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
	{{-- Responsive examples --}}
	<script src="{{ asset('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
	<script src="{{ asset('assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>
	{{-- Select2 js --}}
	<script src="{{ asset('assets/libs/select2/select2.min.js') }}"></script>
	{{-- Sweet Alerts js --}}
	<script src="{{ asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
	<script src="{{ asset('assets/js/app.js?v=0.0.1') }}"></script>
	{{-- dropzone js --}}
	<script src="{{ asset('assets/libs/dropzone/min/dropzone.min.js') }}"></script>
	<script src="{{ asset('app-sw.js') }}"></script>

	<script type="text/javascript">
		$(".ModalAjax").unbind();
		$(".ModalAjax").submit(function(e) {
			e.preventDefault();
			setUncurrency();
			
			var form      = $(this);
			var formData  = new FormData(form[0]);
			var url       = form.attr('action');
			
			var $submit   = $(this).find(':submit'); 
			var $oldHtml  = $submit.html();
			var $oldClass = $submit.attr('class');

			$submit.html('<i class="spinner-border spinner-border-sm"></i> Loading');
			$submit.attr('class', 'btn btn-info disabled');
			$submit.attr('disabled',true);

			$.ajax({
				type: "POST",
				url: url,
				data: formData,
				async: false,
				cache: false,
				contentType: false,
				enctype: 'multipart/form-data',
				processData: false,
				success: (data) => {

					if (data.error==false) {
						if (data.trigger!="" && data.trigger!=null) {
							var msg = data.data;
							var newOption = new Option(`${msg.text}`, msg.id);
							$(`[name='${data.trigger}']`).append(newOption).trigger('change');
							$(`[name='${data.trigger}']`).val(msg.id).trigger('change');
						}

						Swal.fire('Sukses', data.messages ,'success');

						form.trigger("reset").trigger('change');
						form.find('.BtnCloseModal').click();
						form.find('select').val('').trigger('change');

						$('.ReloadDataSelling').click();

					} else {
						listAlertHtml = "";

						if (typeof data.messages === 'object') {
							$.each(data.messages, function(KeyAlert, dataAlert) {
								$.each(dataAlert, function(KeyList, listAlert) {
									listAlertHtml += `${listAlert} <br>`;
								});
							});
						} else {
							listAlertHtml = data.messages;
						}

						Swal.fire({
							title: 'Gagal',
							icon: 'warning',
							html: listAlertHtml,
						}).then(function(){
							$('body').attr('style','padding-right: 0px;'); }, function(){ $('body').attr('style','padding-right: 0px;'); 
						});
					}
					$submit.html('<i class="mdi mdi-plus-box-outline"></i> Simpan');
					$submit.attr('class','btn btn-success');
					$submit.attr('disabled',false);	
				},
				error: function(jqXHR, textStatus, errorThrown) {
					msg = $.parseJSON(jqXHR.responseText);

					if (msg.message=="CSRF token mismatch.") {
						$.get('/refresh-csrf').done(function(data){
							$('[name="_token"]').val(data.token);
							$submit.click();
						});
					} else {
						Swal.fire({
							title: 'Terjadi Kesalahan Server',
							icon: 'info',
							html: `Silahkan Hubungi Screenshoot dan Laporankan Ke Admin! <br> ${JSON.stringify(jqXHR)} <br> ${JSON.stringify(textStatus)} <br> ${JSON.stringify(errorThrown)}`,
						});
					}

					$submit.html('<i class="mdi mdi-plus-box-outline"></i> Simpan');
					$submit.attr('class','btn btn-success');
					$submit.attr('disabled',false);
				},
			});
		});
	</script>

	@yield('javascript')
</body>
</html>
