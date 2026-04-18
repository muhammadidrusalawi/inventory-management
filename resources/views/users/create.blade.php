@extends('layouts.dashboard')

@section('title', 'Create New User')

@section('content')
    <div class="bg-white rounded-lg shadow-sm p-4">
        <form class="grid grid-cols-2 gap-4">
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                <input type="text" name="name" id="name" class="w-full border text-sm border-gray-300 px-4 py-2 rounded-lg focus:outline-none focus:border-emerald-600">
            </div>
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                <input type="email" name="email" id="email" class="w-full border text-sm border-gray-300 px-4 py-2 rounded-lg focus:outline-none focus:border-emerald-600">
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                <input type="password" name="password" id="password" class="w-full border text-sm border-gray-300 px-4 py-2 rounded-lg focus:outline-none focus:border-emerald-600">
            </div>
            <div>
                <label for="role_id" class="block text-sm font-medium text-gray-700 mb-1">Select Role</label>
                <select name="role_id" id="role_id" class="w-full border text-sm border-gray-300 px-4 py-2 rounded-lg">
                    <option value="">Select Role</option>
                    @foreach ($roles as $role)
                        <option value="{{ $role->id }}">{{ $role->label }}</option>
                    @endforeach
                </select>
            </div>

            @php
                $groupedPermissions = $permissions->groupBy('group');
            @endphp

            <div class="col-span-2">
                <label for="permissions" class="block text-sm font-medium text-gray-700 mb-1">Select Permissions</label>
                <div class="grid grid-cols-4 gap-4">
                    @foreach ($groupedPermissions as $groupName => $groupPermissions)
                        <fieldset>
                            <legend class="block text-sm font-semibold mb-1">{{ ucfirst($groupName) }}</legend>
                            <div class="space-y-2">
                                @foreach ($groupPermissions as $permission)
                                    <div class="flex items-center gap-2">
                                        <input type="checkbox"
                                               name="permissions[]"
                                               id="permission_{{ $permission->id }}"
                                               value="{{ $permission->id }}">
                                        <label for="permission_{{ $permission->id }}"
                                               class="text-sm text-gray-600">
                                            {{ $permission->label }}
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        </fieldset>
                    @endforeach
                </div>
            </div>

            <div class="col-span-2 flex gap-2 justify-end">
                <a href="{{ route('users.index') }}" class="bg-gray-600 text-white px-4 py-2 text-sm font-medium rounded-lg hover:bg-gray-700">Back to List</a>
                <button type="submit" class="bg-emerald-600 text-white px-4 py-2 text-sm font-medium rounded-lg hover:bg-emerald-700">Save</button>
            </div>
        </form>
    </div>
@endsection
