@extends('layouts.dashboard')

@section('title', 'Roles')

@section('content')
    <div class="bg-white rounded-lg shadow-sm">
        <div class="min-w-full overflow-x-auto">
            <x-table :headers="['Key', 'Label', 'Description']" :data="$roles">
                @foreach ($roles as $role)
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-2.5">{{ $role->key }}</td>
                        <td class="px-4 py-2.5 text-gray-500">{{ $role->label }}</td>
                        <td class="px-4 py-2.5 text-gray-500">{{ $role->description }}</td>
                    </tr>
                @endforeach
            </x-table>
        </div>
    </div>
@endsection
