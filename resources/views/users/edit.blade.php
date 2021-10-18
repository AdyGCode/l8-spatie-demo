<?php
/**
 * Filename:    edit.blade.php
 * Project:     TODO: FILL IN WITH PROJECT
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
            {{ __('Edit User') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('users.update',['user' => $user]) }}"
                          method="post">
                        @csrf
                        @method('patch')
                        @if ($errors->any())
                            <div class="border-red-900 border-2 border-solid bg-red-800
                                        text-white px-2 my-2 py-1 rounded">
                                <p class="flex-1">
                                    <i class="fas fa-exclamation-triangle mr-6 pl-2"></i>
                                    <span class="align-middle">
                                        Please correct the errors on this form.
                                    </span>
                                </p>
                            </div>
                        @endif
                        <div class="w-full py-3">
                            <label class="text-gray-600 w-full" for="username">
                                Name
                            </label>
                            <input type="text"
                                   name="name" id="username"
                                   placeholder="Enter Given and Family Names"
                                   class="@error('name') border-red-500 @enderror
                                       border-gray-300 w-full"
                                   value="{{ old('name') ?? $user->name }}">
                            @error('name')
                            <small class="text-red-500 my-2 pt-2">
                                {{ $message }}
                            </small>
                            @enderror
                        </div>
                        <div class="w-full py-3">
                            <label class=" text-gray-600 w-full" for="email">
                                eMail
                            </label>
                            <input type="text"
                                   name="email" id="email"
                                   placeholder="eMail"
                                   class="@error('email') border-red-500 @enderror
                                       border-gray-300 w-full"
                                   value="{{ old('email')??$user->email }}">
                            @error('email')
                            <small class="text-red-500 my-2 pt-2">
                                {{ $message }}
                            </small>
                            @enderror
                        </div>
                        <div class="w-full py-3">
                            <label class="text-md text-gray-600 w-full" for="password">
                                Password
                                <small class="pl-4 pt-1 text-gray-600">
                                    (Leave blank if not updating the password)
                                </small>
                            </label>
                            <input type="password"
                                   name="password" id="password"
                                   placeholder="Password"
                                   class="@error('password') border-red-500 @enderror
                                       border-gray-300 w-full">
                            @error('password')
                            <small class="text-red-500 my-2 pt-2">
                                {{ $message }}
                            </small>
                            @enderror
                        </div>
                        <div class="w-full py-3">
                            <label class="text-gray-600 w-full"
                                   for="password_confirmation">
                                Confirm Password
                            </label>
                            <input type="password"
                                   name="password_confirmation" id="password_confirmation"
                                   placeholder="Confirm Password" class="input input-bordered
                                    w-full ">
                            @error('password_confirmation')
                            <small class="text-red-500 my-2 pt-2">
                                {{ $message }}
                            </small>
                            @enderror
                        </div>
                        <div class="py-6">
                            <button class="rounded p-2 px-4 mr-4
                                           border border-green-600 text-green-800
                                           hover:bg-green-600 hover:text-white
                                           transition-all ease-in-out duration-200"
                                    type="submit">
                                Save Changes
                            </button>
                            <a class="rounded p-2 px-4 mr-4
                                      border border-amber-600 text-amber-800
                                      hover:bg-amber-500 hover:text-white
                                      transition-all ease-in-out duration-200"
                               href="{{ route('users.index') }}">
                                Cancel
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
