@extends('layout.base')



@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <h1>{{ $comic->title }}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <img class="fluid-img" src=" {{$comic->photo }}" alt="{{$comic->title}}">
            </div>
            <div class="col">
                <div>{{ $comic->author }}</div>
                <div><h2>{{  $comic->price }} €</h2>
                    <div>{{ $comic->description }}</div>
                </div>
            </div>
        </div>
    </div>
@endsection