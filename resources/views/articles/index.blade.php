@extends('layouts.main')

@section('container')
@include('layouts.sidebar')

<section class="static m-6 mb-36 md:ml-28 md:mr-12 md:mt-7">
    <div class="flex flex-col">
        <h1 class="text-2xl font-bold block text-pink-500 mb-2">Category</h1>

        <div class="flex flex-wrap font-semibold">
            <div class="mr-2 mb-2 py-1 px-3 border-2 border-pink-600 rounded-xl bg-pink-100 text-sm">
                Fasion
            </div>
            <div class="mr-2 mb-2 py-1 px-3 border-2 border-pink-600 rounded-xl bg-pink-100 text-sm">
                Life Style
            </div>
            <div class="mr-2 mb-2 py-1 px-3 border-2 border-pink-600 rounded-xl bg-pink-100 text-sm">
                Problem
            </div>
            <div class="mr-2 mb-2 py-1 px-3 border-2 border-pink-600 rounded-xl bg-pink-100 text-sm">
                Maps
            </div>
            <div class="mr-2 mb-2 py-1 px-3 border-2 border-pink-600 rounded-xl bg-pink-100 text-sm">
                Boyfriend
            </div>
            <div class="mr-2 mb-2 py-1 px-3 border-2 border-pink-600 rounded-xl bg-pink-100 text-sm">
                Relationship
            </div>
        </div>

        <div class="w-full mt-10 md:mt-5">
            <h1 class="text-5xl mb-3 font-semibold">Trending Articles</h1>
            <div class="shadow-lg shadow-pink-200 w-90 my-5 overflow-hidden rounded-md relative md:w-full">
                <img src="https://source.unsplash.com/random/300x100/?maps" alt="Food" class="w-full mb-2">
                <div class="p-8">
                    <!-- https://source.unsplash.com/random/500x200 -->
                    <h1 class="absolute rounded-bl-md right-0 top-0 px-6 py-1 bg-pink-100 z-50 text-lg">Maps</h1>
                    <h2 class="text-xl font-semibold text-gray-700">Judul ke-1</h2>
                    <h3 class="text-sm text-gray-700 mb-3">Nama Pengarang</h3>
                    <p class="text-base text-gray-900 mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                    <a href="#" class="text-base text-pink-400 hover:text-pink-600">Read More</a>
                </div>
            </div>
            <div class="w-full flex flex-wrap md:grid-cols-2 md:grid md:gap-8">
                <div class="shadow-lg shadow-pink-200 w-90 my-5 rounded-md relative overflow-hidden">
                    <img src="https://source.unsplash.com/random/300x150/?user" alt="Food" class="w-full mb-2">
                    <div class="p-8">
                        <h1 class="absolute right-0 top-0 px-5 py-1 bg-pink-100 z-50 text-lg rounded-bl-md">Life Style</h1>
                        <h2 class="text-xl font-semibold text-gray-700">Judul ke-2</h2>
                        <h3 class="text-sm text-gray-700 mb-3">Nama Pengarang</h3>
                        <p class="text-base text-gray-900 mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ea, totam?</p>
                        <a href="#" class="text-base text-pink-400 hover:text-pink-600">Read More</a>
                    </div>
                </div>
                <div class="shadow-lg shadow-pink-200 w-90 my-5 rounded-md relative overflow-hidden">
                    <img src="https://source.unsplash.com/random/300x150/?fasion" alt="Food" class="w-full mb-2">
                    <div class="p-8">
                        <h1 class="absolute right-0 top-0 px-5 py-1 bg-pink-100 z-50 text-lg rounded-bl-md">Fasion</h1>
                        <h2 class="text-xl font-semibold text-gray-700">Judul ke-3</h2>
                        <h3 class="text-sm text-gray-700 mb-3">Nama Pengarang</h3>
                        <p class="text-base text-gray-900 mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet.</p>
                        <a href="#" class="text-base text-pink-400 hover:text-pink-600">Read More</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full flex flex-wrap mt-10 px-5">
            <div class="w-full flex flex-wrap md:w-3/5 pr-10">
                <div class="flex flex-row items-center mb-3">
                    <div class="mr-3">
                        <h1 class="text-semibold text-2xl md:text-4xl">Apa itu <br><span class="font-bold text-pink-500">Teras Perempuan</span></h1>
                    </div>
                    <div class="text-8xl font-bold">
                        <p>?</p>
                    </div>
                </div>
                <div class="justify-center text-justify">
                    <p class="text-indent mb-4">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde reiciendis eum sit animi dignissimos, maxime sed earum odit voluptates, eligendi incidunt eaque suscipit laboriosam inventore minima, dicta blanditiis ullam? 
                    </p>
                    <p class="text-indent mb-4"> 
                        Deleniti, libero fugiat eum blanditiis aliquid quia maiores nisi consectetur esse saepe similique maxime minus nihil illo, voluptatum exercitationem voluptatibus perferendis. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero cumque voluptatum itaque, inventore nam voluptatem harum sed aliquam pariatur adipisci!
                    </p>
                </div>
            </div>
            <div class="md:w-2/5 w-full bg-cover bg-center rounded-lg shadow-md" style="background-image: url('../../image/assets/banner/woman.jpg')">
            </div>
        </div>

        <div class="w-full flex flex-col mt-10">
            <h1 class="text-4xl font-bold border-b-2 mb-4 px-5">Latest Article</h1>
            <div class="md:grid md:grid-cols-2 md:gap-2 mt-5">
                @foreach ($articles as $article)
                <div class="w-full grid grid-cols-3 place-items-center border-2 gap-6 md:gap-none md:flex md:flex-row">
                    <!-- <div class="bg-cover bg-center h-72 overflow-hidden" style="background-image: url('https://source.unsplash.com/random/100x150');"></div> -->
                    <img src="https://source.unsplash.com/random/160x210/?articles" alt="" width="100px" class="bg-cover bg-center overflow-hidden h-52 w-40 place-items-start md:w-52">
                    <div class="col-span-2 pr-4">
                        <p class="text-sm text-gray-400">{{ $article->created_at }}</p>
                        <h2 class="text-xl font-bold text-pink-500">{{ $article->title }}</h2>
                        <h3 class="text-sm text-gray-600 mb-2">Author: {{ $article->user->name }}</h3>
                        <p class="text-sm">{{ str()->of($article->body)->limit(150) }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <div class="mt-8">
            <button class="px-6 py-2 text-lg text-white text-semibold rounded-xl bg-pink-500 hover:opacity-50 ">Load More</button>
        </div>
    </div>
</section>
@endsection