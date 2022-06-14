@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h3>{{$post->title}}</h3>
                <img src="{{asset("storage/$post->image")}}" alt="">
                <p>{{$post->description}}</p>
                <h4>tags:</h4>
                @forelse ( $post->tags as $tag )
                <span class="badge" style=" background-color: {{ $tag->color }} " >{{ $tag->label }}</span>
                @empty
                <h3>Non ci sono tag abbinati</h3>
                @endforelse
            </div>
        </div>
    </div>
@endsection