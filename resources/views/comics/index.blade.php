@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 h-300 position-relative">
                <img src="{{ Vite::asset('resources/images/jumbotron.jpg')}}" alt="" class="jumbotron">
                <div class="content d-flex justify-content-between p-abs">
                    <span class="text-white py-2 px-3 bg-blue fw-semibold">CURRENT SERIES</span>
                    <span class="py-2 px-3 bg-blue fw-semibold"><a class="text-decoration-none text-white" href="{{ route('comics.create') }}">AGGIUNGI FUMETTO</a></span>
                </div>
            </div>
            <div class="row bg-black">
                <div class="content d-flex flex-wrap py-3"> 
                    @foreach ($comics as $comic)
                    <div class="col-2 p-3">
                            <a class="text-decoration-none" href="{{ route('comics.show', ['comic' => $comic->id]) }}">
                                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}" class="img-card">
                                <h6 class="text-white text-uppercase mt-2">{{ $comic['series'] }}</h6>
                            </a>
                        </div>
                    @endforeach
                    <div class="col-12 text-center mb-2">
                        <span class="text-white py-2 px-5 bg-blue">LOAD MORE</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 bg-blue">
                    <div class="content justify-content-center py-4">
                        <ul class="d-flex align-items-center list-unstyled m-0 p-0">
                            @foreach ($exploreDC as $item)
                            <li class="mx-3 d-flex align-items-center">
                                <img src="{{ Vite::asset($item['img'])}}" alt="" class="img-fluid icon me-2">
                                <a href="#" class="text-decoration-none text-white">{{ $item['name'] }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection