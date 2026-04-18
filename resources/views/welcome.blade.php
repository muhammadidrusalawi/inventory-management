@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
    <div class="flex h-screen items-center justify-center">
        @if (Route::has('login'))
            <nav class="flex items-center justify-end gap-4">
                @auth
                    <a
                        href="{{ url('/dashboard') }}"
                        class="bg-emerald-600 text-white px-4 py-2 text-sm font-medium rounded-lg hover:bg-emerald-700 transition-colors duration-200"
                    >
                        Dashboard
                    </a>
                @else
                    <a
                        href="{{ route('login') }}"
                        class="bg-emerald-600 text-white px-4 py-2 text-sm font-medium rounded-lg hover:bg-emerald-700 transition-colors duration-200"
                    >
                        Log in
                    </a>

                    @if (Route::has('register'))
                        <a
                            href="{{ route('register') }}"
                            class="bg-emerald-600 text-white px-4 py-2 text-sm font-medium rounded-lg hover:bg-emerald-700 transition-colors duration-200">
                            Register
                        </a>
                    @endif
                @endauth
            </nav>
        @endif
    </div>
@endsection
