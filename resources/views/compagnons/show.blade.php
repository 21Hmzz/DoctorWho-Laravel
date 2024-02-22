@extends('base')
@section('title', $compagnon->name.' - Doctor Who')


@section('content')
    <x-app-layout>
        <div class="w-full">
            <h1 class="text-2xl font-bold text-center mt-2">{{ $compagnon->name }}</h1>
            <a href="{{ route('compagnons.index') }}" class="text-blue-500 px-2">Retour à la liste</a>
            <div class="w-full flex flex-row gap-1 py-4 px-2">
                <div class="w-1/2 bg-pink-400 flex flex-row items-center">
                    <div>
                        <img src="{{ asset('img/' . $compagnon->image_url) }}" alt="{{ $compagnon->actor }}" class="w-48 object-cover min-h-72 ">
                    </div>
                    <div class="flex flex-col ml-4">
                        <span>{{ $compagnon->actor }}</span>
                    </div>
                </div>
                <div class="w-1/2 bg-pink-800">
                    <h2 class="text-2xl font-bold text-center">Épisodes</h2>
                </div>
            </div>
        </div>
    </x-app-layout>
@endsection
