<?php
/**
 * Filename:    index.blade.php
 * Project:     l8-gate-policies
 * Location:    resources\views\roles
 * Author:      Adrian Gould
 * Created:     08/09/21
 * Description:
 *     Add description here
 */
?>
<x-app-layout>
    <x-slot name="header">
        <div class="flex">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight flex-none">
                {{ __('Roles') }}
            </h2>
            <span class="flex-grow"></span>
            <a href="{{ route('roles.create') }}"
               class="rounded p-2 px-4 mr-2 flex-none
                  border border-blue-600 text-blue-800 bg-white
                  hover:bg-blue-500 hover:text-white hover:border-blue-800
                  transition-all ease-in-out duration-200">
                Add Role
            </a>
        </div>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 ">
                    @if ($message = Session::get('success'))
                        <div class="border-green-900 border-2 border-solid bg-green-800
                                        text-white px-2 my-2 py-1 rounded">
                            <p class="flex-1">
                                <i class="fas fa-smile mr-6 pl-2"></i>
                                <span class="align-middle">
                                        {{ $message }}
                                    </span>
                            </p>
                        </div>
                    @endif
                    <div class="overflow-x-auto ">
                        <table
                            class="table w-full border border-0 border-bottom border-gray-300">
                            <caption>Roles</caption>
                            <thead class="bg-gray-200 border border-gray-300 text-gray-700">
                            <tr>
                                <th class="p-2 text-left" scope="col">ID</th>
                                <th class="p-2 text-left" scope="col">Name</th>
                                <th class="p-2 text-left" scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($roles as $key=>$role)
                                <tr class="p-2 m-0 border border-gray-300
                                           hover:bg-blue-100 hover:border-blue-300
                                           transition-all duration-200 ease-in-out
                                           @if($role->user_id == auth()->user()->id)
                                    bg-gray-100 text-blue-800 font-semibold
                                    hover:bg-blue-200 hover:text-black @endif">
                                    <td class="p-2 py-3 m-0">{{ $role->id }}</td>
                                    <td class="p-2 py-3 m-0">{{ $role->name }}</td>
                                    <td class="p-2 py-3 m-0" colspan="2">
                                        <a href="{{ route('roles.show', [$role->id]) }}"
                                           class="rounded p-2 px-4 mr-4
                                           border border-green-600 text-green-800 bg-white
                                           hover:bg-green-600 hover:text-white
                                           transition-all ease-in-out duration-200">Details</a>
                                        <a href="{{ route('roles.edit', ['role'=>$role->id]) }}"
                                           class="rounded p-2 px-4 mr-4
                                      border border-amber-600 text-amber-800 bg-white
                                      hover:bg-amber-500 hover:text-white
                                      transition-all ease-in-out duration-200">Update</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot class="bg-gray-200 text-gray-700 border border-gray-300">
                            <tr>
                                <td colspan="5" class="p-2  pb-3 m-0">
                                    {{ $roles->links() }}
                                </td>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
