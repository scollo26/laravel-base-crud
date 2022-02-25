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
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table class="table table-secondary mt-4">
                    <thead>
                        <tr class="table-secondary">
                            <th>Title</th>
                            <th>Author</th>
                            <th>Price</th>
                            <th colspan="3">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($comics as $comic)
                        <tr>
                            <td>{{ $comic->title }}</td>
                            <td>{{ $comic->author }}</td>
                            <td>{{ $comic->price }} €</td>
                            <td colspan="2"><a class="btn btn-danger" href="{{ route('comics.show', $comic->id) }}">View</a>
                            <a class="btn btn-danger" href="{{ route('comics.edit', $comic->id) }}" > Edit</a>
                            </td>
                            <td>
                                {{-- bottone Delete con mini Form --}}
                                <form action="{{ route('comics.destroy', $comic->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input class="btn btn-danger" type="submit" value="Delete">
                                </form>
                            </td>
                            
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



