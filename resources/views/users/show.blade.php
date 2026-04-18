@extends('layouts.dashboard')

@section('title', 'Users Detail')

@section('content')
    <div class="bg-white rounded-lg shadow-sm p-4">
        <div class="space-y-4">

            <!-- Nama -->
            <div>
                <p class="text-sm text-gray-500">Nama</p>
                <p class="font-medium">{{ $user->name }}</p>
            </div>

            <!-- Email -->
            <div>
                <p class="text-sm text-gray-500">Email</p>
                <p class="font-medium">{{ $user->email }}</p>
            </div>

            <!-- Role -->
            <div>
                <p class="text-sm text-gray-500">Role</p>
                <p class="font-medium">
                    {{ $user->role?->label ?? '-' }}
                </p>
            </div>

            <!-- Created At -->
            <div>
                <p class="text-sm text-gray-500">Dibuat</p>
                <p class="font-medium">
                    {{ $user->created_at->format('d M Y H:i') }}
                </p>
            </div>

            <div>
                <p class="text-sm text-gray-500">Terakhir di Update</p>
                <p class="font-medium">
                    {{ $user->updated_at->format('d M Y H:i') }}
                </p>
            </div>

            <div>
                <p class="text-sm text-gray-500">Permissions</p>
                <p class="font-medium">
                    {{ $user->role?->permissions->pluck('label')->implode(', ') }}
                </p>
            </div>
        </div>

        <!-- Action -->
        <div class="mt-6 flex gap-2">
            <a href="{{ route('users.index') }}"
               class="px-4 py-2 bg-gray-100 hover:bg-gray-200 rounded-lg text-sm">
                Kembali
            </a>

            <a href="{{ route('users.edit', $user->id) }}"
               class="px-4 py-2 bg-emerald-600 hover:bg-emerald-700 text-white rounded-lg text-sm">
                Edit
            </a>

            <a href="{{ route('users.edit', $user->id) }}"
               class="px-4 py-2 bg-red-500 hover:bg-red-600 text-white rounded-lg text-sm">
                Hapus
            </a>
        </div>

    </div>
@endsection
