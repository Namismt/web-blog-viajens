@extends('layouts.app')
@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    Quais os melhores lugares do mundo para se viajar?
                </h1>
                <a href="/blog" class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                    Aprenda mais sobre
                </a>
            </div>
        </div>
    </div>
        <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto pt-15 py-20 border-b border-gray-200">
            <div>
            <img src="https://www.melhoresdestinos.com.br/wp-content/uploads/2020/09/mochileiro-na-praia.jpg" width="400" alt="">
            </div>
                <div class=" m-auto sm:m-auto text left w-4/5 block">
            <h2 class="text-4xl font-bold text-gray-600">
                Gostaria de saber o que é necessario para fazer um mochilão?
            </h2>
            <p class="py-8 text-gray-500 text-s">
                Nami é a responsavel por essa elaboração de website/blog
            </p>
            <p class="font-extrabold text-gray-600 text-s pb-9">
                Quem nao gostaria de poder simplesmente pegar suas coisas e sair por ai viajando pelo mundo, descobrindo e explorando livremente?
            </p>
                <a href="/blog" class="uppercase bg-yellow-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                    Descubra mais sobre
                </a>
                </div>
            </div>

    <div class="sm:grid grid-cols-1 w-4/5 m-auto">
            <div class="text-center p-15 bg-yellow-800 bg-opacity-75 rounded-lg py-10 text-gray-200">
                <h2 class="text-2xl pb-5 text-l font-bold uppercase">
                        Um pouco sobre mim...
                </h2>
                <span class="font-extrabold block text-2xl py-2">
                        Uma universitária graduando em Licenciatura em História
                </span>
                <span class="font-extrabold block text-2xl py-2">
                        Que tem um técnico em Informática
                </span>
                <span class="font-extrabold block text-2xl py-2">
                        Que gosta muito de programar
                </span>
                <span class="font-extrabold block text-2xl py-2">
                       E sempre gosto de aprendender novas coisas
                </span>
            </div>
    </div>
                <div class="text-center py-20">
                    <h2 class="text-4xl font-bold py-10">
                        Post Mais Recente
                    </h2>
                        <p class="m-auto w-4/5 text-gray-600 text-2xl">
                            Curiosidades sobre ilhas e lugares que voce nem sabia que existia.
                        </p>
                </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class="m-600 pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                    Viagens
                </span>

                <h3 class="text-xl font-bold py-10">
                    A ilha de Papua Nova Guiné possui vulcões em erupção a beira da praia, alguns estão adormecidos e são possiveis de fazer um tour.
                </h3>
                <a href="/blog"
                    class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                    Leia mais sobre
                </a>
        </div>
    </div>
                <div>
                <img src="http://www.destination360.com/australia-south-pacific/papua-new-guinea/images/s/papua-new-guinea.jpg" width="600" height="600" alt="">
                </div>
</div>
@endsection