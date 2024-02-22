@extends('base')
@section('title', 'Liste des docteurs')


@section('content')
    <x-app-layout>
        <div>
            <h1 class="text-2xl font-bold text-center mt-2">Liste des docteurs</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 p-4">
                @foreach($doctors as $doctor)
                    <a href="{{ route('doctors.show', $doctor->id) }}"
                       class="card bg-doctor-secondary text-white flex-col flex justify-center items-center rounded hover:scale-105 hover:transition-transform cursor-pointer">
                        <img src="{{ asset('img/' . $doctor->image_url) }}" alt="{{ $doctor->actor }}"
                             class="w-full h-48 object-cover rounded-t object-top">
                        <h2 class="text-2xl font-bold">{{ $doctor->actor }}</h2>
                        <span>
                            {{ $doctor->doctor }}
                        </span>
                        <span>
                            {{ $doctor->seasons }} saisons
                        </span>
                    </a>
                @endforeach
            </div>
        </div>
    </x-app-layout>
@endsection
