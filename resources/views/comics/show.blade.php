@extends('app')

@section('content')
<div class="bg-light">
    <div class="container">
        <div class="row">
                <img class="img-show-section" src="{{ $comic->thumb }}" alt="">
                <div class="col-7 p-0 mt-5">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class=" text-uppercase m-0 p-0">{{ $comic->title }}</h3>
                        <span class="py-2 px-3 bg-blue fw-semibold"><a class="text-decoration-none text-white" href="{{ route('comics.edit', $comic->id) }}">Modifica</a></span>
                    </div>
                    <div class="row g-0">
                        <div class="mt-3 col-12 py-1 px-3">
                            <div class="d-flex text-light justify-content-between align-items-center">
                                <p class="m-0">U.S. Price: ${{ $comic->price }}</p>
                            </div>
                        </div>
                        <div class="col-12 mt-3">
                            <p>{{ $comic->description }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-6 mt-4">
                    <h4 class="">Talent</h4>
                    <hr class="mt-4">
                    <div class="row">
                        <div class="col-4">
                            <p>Art by:</p>
                        </div>
                        <div class="col-8">
                            <p>{{ $comic->artists }}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-4">
                            <p>Written by:</p>
                        </div>
                        <div class="col-8">
                            <p>{{ $comic->writers }}</p>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="col-6 mt-4">
                    <h4 class="">Talent</h4>
                    <hr class="mt-4">
                    <div class="row">
                        <div class="col-4">
                            <p>Series:</p>
                        </div>
                        <div class="col-8">
                            <p>{{ $comic->series }}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-4">
                            <p>U.S. Price:</p>
                        </div>
                        <div class="col-8">
                            <p>${{ $comic->price }}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-4">
                            <p>On Sale Date:</p>
                        </div>
                        <div class="col-8">
                            <p>{{ $comic->sale_date }}</p>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
@endsection
