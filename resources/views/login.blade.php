@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-gradient-to-br from-red-700 via-red-800 to-red-900 flex justify-center items-center px-4">
       
        <div class="max-w-sm w-full p-6 bg-red-100 shadow-lg rounded-lg border border-red-800">
            <h2 class="text-center text-2xl font-semibold text-red-800 mb-6">Login</h2>
            <form action="{{ route('login.submit') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="username" class="block text-red-700">Username</label>
                    <input type="text" name="username" id="username" class="w-full px-4 py-2 border border-red-600 rounded-lg" required>
                </div>
                <div class="mb-6">
                    <label for="password" class="block text-red-700">Password</label>
                    <input type="password" name="password" id="password" class="w-full px-4 py-2 border border-red-600 rounded-lg" required>
                </div>
                <button type="submit" class="w-full py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600">Login</button>
            </form>
        </div>
    </div>
@endsection
