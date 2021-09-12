@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <h1 class="text-5xl pt-20 font-bold">
            {{ $post->title }}
        </h1>
    </div>
</div>
<div class="w-4/5 mx-auto py-15 border-b border-gray-200">
        <div class="pt-20 py-20 px-25">
            <img src="{{ asset('images/' . $post->image_path) }}" alt="">
        </div>
    <div>
<div class="w-4/5 m-auto pt-15">
    <span class="text-gray-500 text-xl ">
        Por <span class="font-bold italic text-xl text-gray-800">{{ $post->user->name }}</span>, Postado em {{ date('jS M Y', strtotime($post->updated_at)) }}
    </span>
    <br>

    <p class="text-2xl text-gray-700 pt-8 pb-10 leading-8 font-light">
        {{ $post->description }}
    </p>
</div>

@endsection 