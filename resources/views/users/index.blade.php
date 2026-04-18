@extends('layouts.dashboard')

@section('title', 'Users')

@section('content')
    <div class="bg-white rounded-lg shadow-sm">
        <div class="flex items-center justify-between p-4">
            <div class="relative w-full max-w-md">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search-icon lucide-search w-4 h-4 absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"><path d="m21 21-4.34-4.34"/><circle cx="11" cy="11" r="8"/></svg>
                <input type="text" placeholder="Search users..." class="w-full border border-gray-300 text-sm rounded-lg pl-9 pr-4 py-2 focus:outline-none focus:border-emerald-600">
            </div>

            <div>
                <a href="{{ route('users.create') }}" class="bg-emerald-600 text-white rounded-lg px-4 py-2.5 text-sm font-medium hover:bg-emerald-700 transition-colors duration-200">Add New User</a>
            </div>
        </div>

        <x-table :headers="['Name', 'Email', 'Role']" :data="$users">
            @foreach ($users as $user)
                <tr
                    onclick="window.location='{{ route('users.show', $user->id) }}'"
                    class="hover:bg-gray-50 cursor-pointer"
                >
                    <td class="px-4 py-2.5">{{ $user->name }}</td>
                    <td class="px-4 py-2.5 text-gray-500">{{ $user->email }}</td>
                    <td class="px-4 py-2.5 text-gray-500">
                        {{ $user->role?->label }}
                    </td>
                </tr>
            @endforeach
        </x-table>
    </div>
@endsection
