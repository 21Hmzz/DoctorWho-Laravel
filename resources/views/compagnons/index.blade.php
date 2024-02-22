@extends('base')
@section('title', 'Liste des compagnons')


@section('content')
    <x-app-layout>
        <div>
            <h1 class="text-2xl font-bold text-center mt-2">Liste des compagnons</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 p-4">
                @foreach($compagnons as $compagnon)
                    <a href="{{ route('compagnons.show', $compagnon) }}"
                       class="card bg-doctor-secondary text-white flex-col flex justify-center items-center rounded hover:scale-105 hover:transition-transform cursor-pointer">
                        <img src="{{ asset('img/' . $compagnon->image_url) }}" alt="{{ $compagnon->actor }}"
                             class="w-full h-48 object-cover rounded-t object-top">
                        <h2 class="text-2xl font-bold">{{ $compagnon->name }}</h2>
                        <span>
                            {{ $compagnon->actor }}
                        </span>

                    </a>
                @endforeach
            </div>
        </div>
    </x-app-layout>
@endsection
