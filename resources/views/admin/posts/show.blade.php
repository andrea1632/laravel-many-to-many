@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h3>{{$post->title}}</h3>
                <img src="{{$post->image}}" alt="">
                <p>{{$post->description}}</p>
            </div>
        </div>
    </div>
@endsection