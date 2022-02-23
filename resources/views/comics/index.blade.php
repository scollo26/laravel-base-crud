@extends('layout.base')





@section('content')
    <div class="container">
        <div class="row">
            <h1 class="h1">Admin - Comics</h1>
        </div>
        <div class="row">
            <div class="col">
                <a href="{{ route('comics.create') }}" class="btn btn-danger">Add new Comic</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table class="table table-secondary">
                    <thead>
                        <tr class="table-secondary">
                            <th>Title</th>
                            <th>Author</th>
                            <th>Price</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($comics as $comic)
                        <tr>
                            <td>{{ $comic->title }}</td>
                            <td>{{ $comic->author }}</td>
                            <td>{{ $comic->price }} €</td>
                            <td><a class="btn btn-danger" href="{{ route('comics.show', $comic) }}">View</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row ">
            <div class="col d-flex justify-content-center">
                {{ $comics->links() }}
            </div>
        </div>
    </div>
@endsection



