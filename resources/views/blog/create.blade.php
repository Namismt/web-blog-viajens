@extends('layouts.app')

@section('content')
<div class="bg-local grid-columns-1 m-auto text-center" style="background-image:url('https://wallpapercave.com/wp/wp4754114.jpg')">
<div class="w-2/5 m-auto text-center pt-10">
    <div class="py-15">
        <h1 class="text-4xl bg-purple-600 rounded-lg py-10 text-gray-200 uppercase font-bold">
            Crie um Post
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

<div class="w-4/5 m-auto pt-20 rounded-2xl">
    <form 
        action="/blog"
        method="POST"
        enctype="multipart/form-data">
        @csrf

        <input type="text" name="title" placeholder="Titulo..."class="bg-gray-200 block rounded-r-2xl w-full h-20 text-3xl outline-none">

        <textarea name="description" placeholder="Descrição..." class="py-20 bg-gray-300-rounded-2xl block rounded-r-2xl w-full h-60 text-xl outline-none"></textarea>
        <br>
        <div class="bg-purple-500 pt-15 w-4/6 text-l">
            <label class="flex items-stretch px-2 py-2 bg-rounded-2xlg shadow-lg tracking-wide uppercase border border-blue cursor-pointer m-auto">
                <span class="mt-2 leading-normal m-auto bg-gray-500-rounded shadow-s">
                    Selecione uma imagem
                </span>
            </label>
            <input type="file" name="image" class="form-control-file">
        </div>
        <br>
        <br>

        <button type="submit" class="uppercase mt-15 bg-green-500 text-gray-100 text-lg font-extrabold py-5 px-8 pt-5 rounded-3xl">
            Enviar o Post
        </button>
        <br>
        <br>
        <br>
    </form>
</div>
</div>
@endsection