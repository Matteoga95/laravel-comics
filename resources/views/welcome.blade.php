@extends('layouts.app')


@section('content')
<div class="container">
    <h1>{{$page_title}}</h1>
    <p>{{$page_intro}}</p>
</div>

<div class="container">
    <h1>Comics Books</h1>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
        @forelse($comicBooks as $comic)
        <div class="col">
            <div class="card text-center">
                <img class="card-img-top" src="{{$comic['thumb']}}" alt="">
                <div class="card-body">
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

@endsection