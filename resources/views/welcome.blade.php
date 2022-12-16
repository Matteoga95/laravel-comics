@extends('layouts.app')


@section('content')

<div id="jumbotron">

    <div class="container ">
        <!-- div dello span current series -->
        <div class="current-series ">
            <h2 class="px-4 pt-1">CURRENT SERIES</h2>
        </div>
    </div>

</div>


<div class=" comics bg-dark ">
    <div class=" container bg-dark p-5 d-flex flex-wrap">
        <div class="row row-cols-3 row-cols-sm-2 row-cols-md-4 g-4">
            @forelse($comicBooks as $comic)
            <div class="col">
                <div class=" text-center">
                    <img class="card-img-top" src="{{$comic['thumb']}}" alt="">
                    <div class="card-body text-white fs-5 pt-2">
                        {{$comic['title']}}
                    </div>
                </div>
            </div>
            @empty
            <div class="col">
                <p>Nothing to show yet!</p>
            </div>
            @endforelse

        </div>
    </div>
</div>

<div id="sezioni">
    <div class="container p-5 d-flex justify-content-center">
        <div class="d-flex ">
            <img class="img-fluid " src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="">
            <p class="align-self-center px-2 text-light">DIGITAL COMICS</p>
        </div>
        <div class="d-flex ">
            <img class="img-fluid " src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="">
            <p class="align-self-center px-2 text-light">DC MERCHANDISE</p>
        </div>
        <div class="d-flex ">
            <img class="img-fluid " src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="">
            <p class="align-self-center px-2 text-light">SUBSCRIPTION</p>
        </div>
        <div class="d-flex ">
            <img class="img-fluid " src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="">
            <p class="align-self-center px-2 text-light">COMIC SHOP LOCATION</p>
        </div>
        <div class="d-flex ">
            <img class="img-fluid " src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="">
            <p class="align-self-center px-2 text-light">DC POWER VISA</p>
        </div>


    </div>
</div>


@endsection