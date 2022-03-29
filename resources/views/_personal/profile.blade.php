@extends('layouts.app', ['title' => "Perbarui Kata Sandi"])

@section('title-box')
<div class="col-md-8">
	<h4 class="page-title mb-1">Perbarui Kata Sandi Saya</h4>
	<ol class="breadcrumb m-0">
		<li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
		<li class="breadcrumb-item active">Perbarui Kata Sandi</li>
	</ol>
</div>
<div class="col-md-4">
	<div class="float-right d-none d-md-block ml-3">
		<a class="btn btn-light btn-rounded" href="{{ route('home') }}">
			<i class="fas fa-home  mr-1"></i> Beranda
		</a>
	</div>
</div>
@endsection

@section('content')
<!-- Start Content-->
<div class="container-fluid">
	<div class="row">
		<div class="col-md-7" id="AddForm">
			<div class="card">
				<div class="card-body">
					<h4 class="mt-0 header-title">Kata Sandi & Email Google Saya</h4>
					<hr>
					<p class="text-muted font-14 mb-3 mt-3"></p>
					<form action="{{ route('profile') }}" method="POST" class="form-horizontal mb-4 mt-4 ModalAjax" accept-charset="utf-8">
						@csrf
						<div class="form-group row">
							<label class="col-md-2 mb-1 col-form-label text-md-right">Email Google</label>
							<div class="col-md-6 mb-1">
								<input type="email" name="email_google" id="email_google" class="form-control" value="{{ auth()->user()->email_google }}">
							</div>
							<div class="col-md-4 mb-1">
								<span class="font-13 text-muted">* Masukkan Email Google</span>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-2 mb-1 col-form-label text-md-right">Email Facebook</label>
							<div class="col-md-6 mb-1">
								<input type="email" name="email_facebook" id="email_facebook" class="form-control" value="{{ auth()->user()->email_facebook }}">
							</div>
							<div class="col-md-4 mb-1">
								<span class="font-13 text-muted">* Masukkan Email Facebook</span>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-md-2 mb-1 col-form-label text-md-right">Email Github</label>
							<div class="col-md-6 mb-1">
								<input type="email" name="email_github" id="email_github" class="form-control" value="{{ auth()->user()->email_github }}">
							</div>
							<div class="col-md-4 mb-1">
								<span class="font-13 text-muted">* Masukkan Email Github</span>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-md-2 mb-1 col-form-label text-md-right">Email Twitter</label>
							<div class="col-md-6 mb-1">
								<input type="email" name="email_twitter" id="email_twitter" class="form-control" value="{{ auth()->user()->email_twitter }}">
							</div>
							<div class="col-md-4 mb-1">
								<span class="font-13 text-muted">* Masukkan Email Twitter</span>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-md-2 mb-1 col-form-label text-md-right">Email LinkedIn</label>
							<div class="col-md-6 mb-1">
								<input type="email" name="email_linkedin" id="email_linkedin" class="form-control" value="{{ auth()->user()->email_linkedin }}">
							</div>
							<div class="col-md-4 mb-1">
								<span class="font-13 text-muted">* Masukkan Email LinkedIn</span>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-md-2 mb-1 col-form-label text-md-right">Password Lama</label>
							<div class="col-md-6 mb-1">
								<input type="password" name="oldPassword" id="oldPassword" class="form-control">
							</div>
							<div class="col-md-4 mb-1">
								<span class="font-13 text-muted">* Masukkan Password Lama</span>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-2 mb-1 col-form-label text-md-right">Password Baru</label>
							<div class="col-md-6 mb-1">
								<input type="password" name="newPassword" id="newPassword" class="form-control">
							</div>
							<div class="col-md-4 mb-1">
								<span class="font-13 text-muted">* Masukkan Password Baru</span>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-2 mb-1 col-form-label text-md-right">Konfirmasi Password</label>
							<div class="col-md-6 mb-1">
								<input type="password" name="confirmPassword" id="confirmPassword" class="form-control">
							</div>
							<div class="col-md-4 mb-1">
								<span class="font-13 text-muted">* Masukkan Ulang Password Baru</span>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-2 mb-1 col-form-label text-md-right"></label>
							<div class="col-md-7">
								<button type="submit" class="btn btn-sm btn-success"><i class="mdi mdi-content-save"></i> Ubah Password</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div><!-- end col -->
</div> <!-- end row -->
</div> <!-- container -->

@endsection

@section('javascript')

<script type="text/javascript">

</script>
@endsection