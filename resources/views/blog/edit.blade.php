@extends('layouts.app')

@section('content')
<div class="bg-local grid-columns-1 m-auto text-center" style="background-image:url('https://wallpapercave.com/wp/wp4754114.jpg')">
<div class="w-2/5 m-auto text-center pt-10">
    <div class="py-15">
        <h1 class="text-4xl bg-yellow-500 rounded-lg py-10 text-gray-200 uppercase font-bold">
            Edite o Post
        </h1>
    </div>
</div>

@if ($errors->any())
    <div class="w-4/5 m-auto">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="w-1/5 mb-4 text-gray-50 bg-red-700 rounded-2xl py-4">
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
@endif

<div class="w-4/5 m-auto pt-20">
    <form action="/blog/{{ $post->slug }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <input type="text" name="title" value="{{ $post->title }}"class="bg-gray-200 block border-b-2 w-full h-20 text-4xl outline-none">
        <textarea name="description" placeholder="Descrição..." class="py-20 bg-gray-100 block border-b-2 w-full h-60 text-xl outline-none">{{ $post->description }}</textarea>
        <br> 
        <button type="submit" class="uppercase mt-15 bg-green-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl pb-15">
            Atualizar o Post
        </button>
        <br>
        <br>
    </form>
</div>

@endsection