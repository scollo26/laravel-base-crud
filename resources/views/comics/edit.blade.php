@extends('layout.base')



@section('content')
    <div class="container">
        <div class="row  justify-content-center">
            <div class="col-5 ">
                <form action="{{ route('comics.update', $comic->id) }}" method="post">
                    @csrf
                    @method('PATCH')
                        <div class="mb-3">
                            <label for="title" class="form-label">title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{$comic->title}}">
                            @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="author" class="form-label">author</label>
                            <input type="text" class="form-control" id="author" name="author" value="{{$comic->author}}">
                            @error('author')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">description</label>
                            <textarea class="form-control" id="description" name="description" rows="3" >{{$comic->description}}</textarea>
                            @error('description')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="genre" class="form-label">genre</label>
                            <input type="text" class="form-control" id="genre" name="genre" value="{{$comic->genre}}">
                            @error('genre')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="photo" class="form-label">photo</label>
                            <input type="text" class="form-control" id="photo" name="photo" value="{{$comic->photo}}">
                            @error('photo')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">price</label>
                            <input type="number" step="0.01" class="form-control" id="price" name="price" value="{{$comic->price}}">
                            @error('price')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    
                        <button type="submit" class="btn btn-danger" value="save">Save</button>
                        <a  class="btn btn-danger"  aria-current="page" href="{{ route('comics.index') }}">Back</a>
                    </form>

            </div>
            
        </div>
    </div>

@endsection