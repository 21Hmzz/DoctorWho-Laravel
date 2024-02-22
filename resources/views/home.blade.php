@extends('base')

@section('title', 'Doctor Who')

@section('content')
    <x-app-layout>
        <main class="w-screen bg-doctor-tertiary">
            <div class="w-full">
                <div class="bg-black w-full h-96 relative">
                    <img src="{{ asset('img/tardis-home.jpeg') }}" alt="Doctor Who" class="w-full h-full object-cover">
                </div>
                <span class="flex justify-center">
                    <h1 class="text-4xl font-bold mt-4 text-white">Bienvenue sur {{ config('app.name') }}</h1>
                </span>
                <div class="flex justify-center mt-4 text-white">
                    <p class="text-lg">Vous trouverez ici toutes les informations sur la série Doctor Who</p>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 p-4">
                <div class="card bg-doctor-secondary text-white min-h-48 flex-col flex justify-center items-center rounded hover:scale-105 hover:transition-transform cursor-pointer">
                    <h2 class="text-2xl font-bold">La liste des docteurs</h2>
                </div>
                <div class="card card bg-doctor-secondary text-white flex-col flex justify-center items-center rounded hover:scale-105 hover:transition-transform cursor-pointer">
                    <h2 class="text-2xl font-bold">La liste des compagnons</h2>
                </div>
                <div class="card card bg-doctor-secondary text-white flex-col flex justify-center items-center rounded hover:scale-105 hover:transition-transform cursor-pointer">
                    <h2 class="text-2xl font-bold">La liste des ennemis</h2>
                </div>
                <div class="card card bg-doctor-secondary text-white flex-col flex justify-center items-center rounded hover:scale-105 hover:transition-transform cursor-pointer">
                    <h2 class="text-2xl font-bold">La liste des épisodes</h2>
                </div>
            </div>
            <div class="bg-gray-200 p-4">
                <h2 class="text-2xl font-bold mt-4 text-center">Les derniers articles</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 p-4">
                    @foreach($posts as $post)
                        <div class="card bg-gray-100">
                            <img src="{{ asset('img/' . $post->title) }}" alt="{{ $post->title }}" class="w-full h-48 object-cover">
                            <div class="p-4">
                                <h3 class="text-xl font-bold">{{ $post->title }}</h3>
                                <p>{{ $post->content }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </main>
    </x-app-layout>
@endsection
