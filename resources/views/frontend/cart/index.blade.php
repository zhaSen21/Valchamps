@extends('layouts.frontend.master')

@section('title')
    Keranjang Belanja Anda
@endsection

@section('content')
    <main>
        <section class="cart">
            <div class="container">
                @foreach ($data as $key => $item)
                    <div class="card p-3 shadow-sm rounded mt-3">
                        <div class="row">
                            <div>
                                <div class="d-flex">
                                    <img class="me-3"
                                        src="{{ asset('img/' . $item->product->image) }}"
                                        height="130" alt="">
                                </div>
                                <div class="mt-3 mb-5 title">
                                    <h3>{{ $item->product->title }}</h3>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="d-flex action">
                                    <button class="btn btn-primary me-2"><i class="fas fa-minus"></i></button>
                                    <input type="number" value="{{ $item->jumlah }}" class="form-control text-center" readonly
                                        disabled>
                                    <button class="btn btn-primary ms-2"><i class="fas fa-plus"></i></button>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="d-flex justify-content-between">
                                    <h3 class="harga">Rp. {{ number_format($item->product->harga) }}</h3>
                                    <button class="btn btn-primary hapus"><i class="fas fa-trash"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </main>
@endsection
