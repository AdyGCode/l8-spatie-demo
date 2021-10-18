<?php
/**
 * Filename:    delete.blade.php
 * Project:     l8-project name TODO:
 * Location:    resources\views\users
 * Author:      Adrian Gould
 * Created:     08/09/21
 * Description:
 *     Add description here
 */
?>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Delete User') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <dl class="grid grid-cols-6 gap-2">
                        <dt class="col-span-1">ID</dt>
                        <dd class="col-span-5">{{ $user->id }}</dd>
                        <dt class="col-span-1">Name</dt>
                        <dd class="col-span-5">{{ $user->name }}</dd>
                        <dt class="col-span-1">Added</dt>
                        <dd class="col-span-5">{{ $user->created_at }}</dd>
                        <dt class="col-span-1">Last Logged In</dt>
                        <dd class="col-span-5">{{ '-' }}</dd>
                        <dt class="col-span-1">Actions</dt>
                        <dd class="col-span-5">
                            <form
                                action="{{ route('users.destroy',['user'=>$user]) }}"
                                method="post">
                                @csrf
                                @method('delete')
                                <a href="{{ route('users.index', ['user'=>$user]) }}"
                                   class="rounded p-2 px-4 mr-4
                                           border border-green-600 text-green-800
                                           hover:bg-green-600 hover:text-white
                                           transition-all ease-in-out duration-200">Cancel
                                    Delete</a>
                                <button
                                    class="border border-red-600 rounded p-1.5 px-4 mr-4
                                           text-red-800
                                           hover:bg-red-800 hover:text-white
                                           ease-in-out transition-all duration-200"
                                    type="submit">
                                    Confirm
                                </button>
                            </form>
                        </dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
    </x-guest-layout>
