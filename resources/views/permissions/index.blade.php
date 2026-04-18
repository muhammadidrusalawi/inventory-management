@extends('layouts.dashboard')

@section('title', 'Permissions')

@section('content')
    <div class="bg-white rounded-lg shadow-sm">
        <div class="min-w-full overflow-x-auto">
            <x-table :headers="['Key', 'Group', 'Label', 'Description']" :data="$permissions">
                @foreach ($permissions as $permission)
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-2.5">{{ $permission->key }}</td>
                        <td class="px-4 py-2.5 text-gray-500">{{ $permission->group }}</td>
                        <td class="px-4 py-2.5 text-gray-500">{{ $permission->label }}</td>
                        <td class="px-4 py-2.5 text-gray-500">{{ $permission->description }}</td>
                    </tr>
                @endforeach
            </x-table>
        </div>
    </div>
@endsection
