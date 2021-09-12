@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto">
    <div class="py-15 border-b border-gray-200">
        <br>
        <br>
        <h1 class="text-5xl upppercase font-bold text-center">
            Blog Posts
        </h1>
        @if (Auth::check())
            <div class="pt-25 w-4/5 m-auto pb-25">
                <a href="/blog/create" type="button" id="sidebarCollapse" class="bg-green-600 uppercase bg-transparent text-gray-100 text-1xl font-extrabold py-3 px-5 rounded-3xl">
                    Criar Post
                </a>
            </div>
        @endif
    </div>
</div>


@if (session()->has('message'))
    <div class="w-4/5 m-auto mt-10 pl-2 text-center">
        <p class="w-2/6 mb-4 text-gray-50 bg-green-500 rounded-2xl py-4">
            {{ session()->get('message') }}
        </p>
    </div>
@endif

@foreach ($posts as $post)
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div class="pt-20">
            <img src="{{ asset('images/' . $post->image_path) }}" alt="">
        </div>
        <div>
            <h2 class="text-gray-700 font-bold text-3xl pb-4 pt-10">
                {{ $post->title }}
            </h2>

            <span class="text-gray-500">
                Por <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, Criado em {{ date('jS M Y', strtotime($post->updated_at)) }}
            </span>

            <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
                {{ $post->description }}
            </p>

            <a href="/blog/{{ $post->slug }}" class="uppercase bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
                Continue Lendo
            </a>

            @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
                <span class="float-right">
                    <a 
                        href="/blog/{{ $post->slug }}/edit"
                        class="text-gray-700 italic hover:text-gray-900 pb-1 border-b-2">
                        Editar
                    </a>
                </span>

                <span class="float-right">
                     <form 
                        action="/blog/{{ $post->slug }}"
                        method="POST">
                        @csrf
                        @method('delete')

                        <button
                            class="text-red-500 pr-3"
                            type="submit">
                            Delete
                        </button>

                    </form>
                </span>
            @endif
        </div>
    </div>    
@endforeach

@endsection