<?php
/**
 * Filename:    show.blade.php
 * Project:     l8-spatie-demo
 * Location:    ${DIR_PATH}
 * Author:      Adrian Gould <adrian.gould@nmtafe.wa.edu.au>
 * Created:     18/10/21
 * Description:
 *      Short description of the purpose of this file
 *      with each line being no more than 72 characters...
 */

?>
<x-app-layout>
    <x-slot name="header">
        <div class="flex">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Role Details') }}
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
            <em class="text-red-800">TODO: Delete button</em>
        @if (\Session::has('success'))
                <div class="alert alert-success">
                    <p>{{ \Session::get('success') }}</p>
                </div>
            @endif

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <dl class="grid grid-cols-6 gap-2">
                        <dt class="col-span-1">ID</dt>
                        <dd class="col-span-5">{{ $role->id }}</dd>
                        <dt class="col-span-1">Name</dt>
                        <dd class="col-span-5">{{ $role->name }}</dd>
                        <dt class="col-span-1">Added</dt>
                        <dd class="col-span-5">
                            @if($role->created_at)
                                @displayDate($role->created_at)
                            @else
                                -
                            @endif
                        </dd>
                        <dt class="col-span-1">Permissions</dt>
                        <dd class="col-span-5 leading-loose align-middle ml-0">
                            @if(!empty($rolePermissions))
                                @foreach($rolePermissions as $permission)
                                    <span class="m-1 ml-3 rounded bg-trueGray-600 text-trueGray-50 text-sm p-2 py-0 mr-0.5 whitespace-nowrap ">
                                        <i class="fa fa-check -ml-4 mr-1 bg-green-500 rounded p-1.5 rounded-full"></i>
                                        {{ $permission->name }}
                                    </span>
                                @endforeach
                            @endif
                        </dd>
                    </dl>

                    @can('role-create')
                        <span class="float-right my-4 mt-8 py-1 ">
                        <a class="rounded p-1 px-4 flex-none text-sm
                  border border-blue-600 text-blue-800 bg-white
                  hover:bg-blue-500 hover:text-white hover:border-blue-800
                  transition-all ease-in-out duration-200" href="{{ route('roles.index') }}">Back</a>
                    </span>
                    @endcan
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
