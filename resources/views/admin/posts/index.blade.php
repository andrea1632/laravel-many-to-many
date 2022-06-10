@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            @foreach ($posts as $post)
            <div class="col border m-1">
                <h3>{{$post->title}}</h3>
                @if($post->category)
                    <span class="badge badge-pill badge-{{$post->Category->color}} ">{{$post->Category->label}}</span>
                @else
                    - 
                @endif
                <img src="{{$post->image}}" alt="">
                <p>{{$post->description}}</p>
                <div>
                    <a href="{{route('admin.posts.show', $post->id)}}">View</a>
                </div>
                <div>
                    <a href="{{route('admin.posts.create')}}">Crea un nuovo post</a>
                </div>
                <div>
                    <a href="{{route('admin.posts.edit', $post->id)}}">Modifica Post</a>
                </div>
                <div>
                    <form action="{{route('admin.posts.destroy', $post->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Elimina Post</button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection