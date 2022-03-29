@extends('layouts.app', ['title' => "Dashbboard"])

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-xl-4">
			<div class="card">
				<div class="card-body">
					<div class="row">
						<div class="col-6">
							<h5>Selamat Datang di</h5>
							<p class="text-muted">Sistem Informasi Mini Poin Of Sales<br>Majoo</p>

							<div class="mt-4">
								<a href="#" class="btn btn-primary btn-sm">:) <i class="mdi mdi-arrow-right ml-1"></i></a>
							</div>
						</div>

						<div class="col-5 ml-auto">
							<div>
								<img src="{{ asset('assets/images/widget-img.png') }}" alt="" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end row -->

</div> <!-- container-fluid -->
@endsection
