@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<h2 class="text-2xl font-bold mb-4">Contact Me</h2>

<form action="{{ route('contact.send') }}" method="POST" class="space-y-3">
    @csrf

    <input type="text" name="name" class="p-2 border w-full" placeholder="Your Name" required>

    <input type="email" name="email" class="p-2 border w-full" placeholder="Email" required>

    <textarea name="message" class="p-2 border w-full" placeholder="Message" required></textarea>

    <button class="bg-blue-600 text-white px-4 py-2 rounded">Send</button>
</form>
@endsection
