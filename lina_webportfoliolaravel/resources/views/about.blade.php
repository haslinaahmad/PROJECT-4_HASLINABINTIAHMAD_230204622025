@extends('layouts.app')

@section('title', 'Tentang Saya')

@section('content')
<div class="relative bg-cover bg-center bg-fixed min-h-screen flex items-center justify-center"
     style="background-image: url('{{ asset('images/bg-about.jpg') }}');">

    <div class="overlay rounded-xl shadow-lg p-10 max-w-4xl mx-auto text-center bg-black/60 backdrop-blur-md">
        
        <img src="{{ asset('images/about.jpg') }}" 
             alt="Foto Profil" 
             class="w-48 h-56 mx-auto mb-6 shadow-2xl object-cover rounded-lg border-4 border-indigo-200 hover:scale-105 transition-transform duration-300">

        <h2 class="text-3xl font-bold text-white mb-6 drop-shadow-md">HASLINA BINTI AHMAD</h2>

        <p class="text-white text-lg md:text-xl leading-relaxed text-justify">
            I am a fifth-semester undergraduate student in the Applied Electrical Engineering program, concentrating in Software Engineering, at Makassar State University, with a strong interest in software development, object-oriented system design, and network implementation.
            I previously completed an internship at CV. Dika Prima Solutions, where I was involved in software installation, basic network troubleshooting, and administration. This experience strengthened my technical skills and fostered a disciplined and responsible work ethic.
            During my studies, I also actively worked on projects such as a Python-based OOP vehicle washing system, a computer network simulation using Cisco Packet Tracer, and a Figma-based Smart Farming interface design.
            With this combination of internship experience and involvement in various projects, I am ready to learn more in-depth in a professional work environment and contribute to future internship programs with enthusiasm and responsibility.
        </p>
    </div>
</div>
@endsection
