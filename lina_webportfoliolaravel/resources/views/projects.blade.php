@extends('layouts.app')

@section('title', 'Projek Saya')

@section('content')
<h1 class="text-3xl font-bold mb-6 text-center">My Projects</h1>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 px-6">

    @foreach($projects as $project)
    <div class="bg-white shadow-lg rounded-xl p-5 border hover:shadow-2xl transition duration-300">
        
        <h3 class="font-semibold text-lg text-blue-600 mb-2">{{ $project['title'] }}</h3>

        <p class="text-gray-700 leading-relaxed">
            {{ $project['description'] }}
        </p>

    </div>
    @endforeach

</div>
@endsection
