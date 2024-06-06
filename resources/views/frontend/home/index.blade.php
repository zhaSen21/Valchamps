@extends('layouts.frontend.master')

@section('title')
    VALCHAMPS
@endsection

@section('content')
    <!-- header caraousel -->
    <header>
        <video autoplay muted loop width="400" height="550" class="w-100" alt="..." id="myVideo">
            <source src={{ asset('video/mainMenu.mp4') }}>
        </video>
    </header>

    <!-- start main -->
    <main>
        <div class="container">
            <!-- start section list product -->
            <section class="product">
                <div class="d-flex justify-content-between">
                    <div class="title">
                        <p>Oncoming Match</p>
                        <h2>Tickets Available</h2>
                    </div>
                </div>

                <div class="row justify-content-center" id="list-product">
                    {{-- @foreach ($data as $item)
                        <h1>OJAN</h1>
                    @endforeach --}}

                    @forelse ($data as $item)
                        <div class="col-md-12 col-10">
                            <div class="card p-3 shadow-nih rounded-20">

                                <img class="rounded-20 mb-3" height="150" src="{{ asset('img/' . $item->image) }}"
                                    alt="">
                                <div class="topic">
                                    <h3>
                                        {{ $item->title }}
                                    </h3>
                                    <div class="d-flex justify-content-between">
                                        <div class="harga">
                                            <small>Price</small>
                                            <p>Rp. {{ number_format($item->harga) }}</p>
                                        </div>

                                        <a href="{{ route('detail', $item->id) }}" class="btn btn-primary beli">
                                            <i class="fas fa-shopping-cart me-1"></i> Buy
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <h1>INI kosong</h1>
                    @endforelse
                </div>
                <div class="text-center mt-4 d-md-none d-lg-none d-xl-none">
                    <button class="btn btn-primary lihat">
                        <i class="fas fa-list me-1"></i> Show More
                    </button>
                </div>
            </section>
            <!-- end section list product -->
        </div>
    </main>
    <!-- end main -->
@endsection
