@extends('layouts.view')

@section('content')
<div class="row">
    @foreach($products as $product)
    <div class="col-xl-3 col-sm-6">
        <div class="card text-center">
            <div class="card-body">
                <div>
                    <h4 class="mt-3">{{ $product->master_produk_name }}</h4>
                    <p class="text-muted"></p>
                    <div class="icons-xl py-3 mb-3">
                        <span><img src="{{ asset('/5128f35c/item') }}/{{ $product->master_produk_file }}" alt=""></span>
                    </div>
                    
                    <div class="plan-features text-muted mt-3">
                        {!! $product->master_produk_deskripsi !!}
                    </div>

                    <div class="mt-5">
                        <h3><sup><small>Rp</small></sup> {{ $product->master_produk_price }} </h3>
                        <div class="mt-5 mb-3">
                            <a href="{{ route('view', $product->master_kategori_id) }}" class="btn btn-primary">Beli</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection