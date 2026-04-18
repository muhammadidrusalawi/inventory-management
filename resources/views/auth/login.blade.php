@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <div class="flex h-screen items-center justify-center">
        <div class="mx-auto flex w-full max-w-sm flex-col">
            <div class="mb-8 text-left tracking-tight">
                <h2 class="text-2xl font-extrabold text-gray-800">Sign in to Your Account</h2>
                <p class="text-gray-500 mt-1">
                    Access the system to manage your stock and business operations
                </p>
            </div>

            <form method="POST" action="{{ route('login') }}" class="space-y-4">
                @csrf
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                    <input
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        class="w-full border text-sm bg-gray-50 border-gray-300 px-4 py-2 rounded-lg focus:outline-none focus:border-emerald-600"
                        placeholder="Enter your email"
                    >
                    @error('email')
                        <p class="mt-1 text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                    <input
                        type="password"
                        name="password"
                        class="w-full border text-sm bg-gray-50 border-gray-300 px-4 py-2 rounded-lg focus:outline-none focus:border-emerald-600"
                        placeholder="Enter your password"
                    >
                    @error('password')
                        <p class="mt-1 text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input
                            type="checkbox"
                            id="remember"
                            class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500"
                        />
                        <label for="remember" class="ml-2 block text-sm text-gray-700">
                            Remember me
                        </label>
                    </div>
                    <div>
                        <button type="button" class="text-sm font-medium hover:underline">
                            Forgot password?
                        </button>
                    </div>
                </div>

                <button type="submit" class="flex w-full items-center justify-center rounded-lg bg-emerald-600 text-white px-4 py-2.5 text-sm font-medium hover:bg-emerald-700 transition-colors duration-200">
                    Sign in
                </button>
            </form>

            <div class="mt-10 border-t border-gray-300 pt-6">
                <p class="text-center text-xs text-gray-500">
                    By signing in, you agree to the
                    <a href="#" class="text-emerald-600 hover:text-emerald-500">
                        Privacy Policy
                    </a>
                    and
                    <a href="#" class="text-emerald-600 hover:text-emerald-500">
                        Terms of Service
                    </a>
                    of Inventorize.
                </p>
            </div>
        </div>
    </div>
@endsection
