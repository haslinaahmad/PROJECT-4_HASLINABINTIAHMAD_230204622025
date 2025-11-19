@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<div class="relative w-full min-h-screen bg-cover bg-center bg-no-repeat flex flex-col items-center justify-center text-center text-white"
     style="background-image: url('{{ asset('images/bg-home.jpg') }}');">

    <!-- Lapisan gelap agar teks lebih terbaca -->
    <div class="absolute inset-0 bg-black/40"></div>

    <!-- Konten utama -->
    <div class="relative z-10 px-6">
        <h2 class="text-5xl md:text-6xl font-extrabold mb-4 drop-shadow-lg">HASLINA BINTI AHMAD</h2>
        <p class="text-lg md:text-xl max-w-2xl mx-auto mb-8 text-gray-100 drop-shadow">
            TECHNICAL WRITER & IT AUDITOR
        </p>
        <a href="/projects" 
           class="bg-indigo-600 hover:bg-indigo-700 px-8 py-3 rounded-full text-white font-semibold text-lg shadow-md transition duration-300">
           VIEW PORTFOLIO
        </a>
    </div>
</div>
@endsection
