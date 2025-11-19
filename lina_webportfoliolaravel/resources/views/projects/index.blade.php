@extends('layouts.app')

@section('title', 'Projek Saya')

@section('content')
<div class="relative bg-cover bg-center bg-fixed min-h-screen py-20 pt-24"
     style="background-image: url('{{ asset('images/bg-projects.jpg') }}');">

    <div class="overlay rounded-xl max-w-6xl mx-auto text-center p-10 bg-black/50 backdrop-blur-md">
        <h2 class="text-4xl font-bold text-white mb-12">PROJECT</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 px-6 md:px-16">

            @foreach($projects as $project)
            <div class="bg-white/80 rounded-xl shadow-lg p-6 hover:shadow-2xl transition-transform duration-300 hover:-translate-y-1">
                
                <img src="{{ asset($project['image']) }}" 
                     class="rounded-lg mb-4 w-full h-48 object-cover shadow-md">

                <h3 class="font-bold text-blue-600 text-lg mb-2">
                    {{ $project['title'] }}
                </h3>

                <p class="text-gray-900 text-sm leading-relaxed">
                    {{ $project['description'] }}
                </p>

            </div>
            @endforeach

        </div>
    </div>
</div>
@endsection
