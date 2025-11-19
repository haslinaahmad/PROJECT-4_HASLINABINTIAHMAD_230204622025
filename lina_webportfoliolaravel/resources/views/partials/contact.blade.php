@extends('layouts.app')

@section('content')
<form action="{{ route('contact.send') }}" method="POST" class="space-y-3">
    @csrf

    <input type="text" name="name" class="p-2 border w-full" placeholder="Your Name">

    <input type="email" name="email" class="p-2 border w-full" placeholder="Email">

    <textarea name="message" class="p-2 border w-full" placeholder="Message"></textarea>

    <button class="bg-blue-600 text-white px-4 py-2 rounded">Send</button>
</form>
@endsection
