<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {!!__('User &raquo; Create') !!}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div>
                @if ($errors->any())
                <div class="mb-5" role="alert">
                    <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
                        There's Somenting Wrong
                    </div>
                    <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-300">
                        <p>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </p>
                    </div>

                </div>
                @endif
                <form action="{{ route('users.store') }}" class="w-full" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="flex  flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label for="grid-last-name" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                Name
                            </label>
                            <input type="text" id="grid-last-name" value="{{ old('name') }}" name="name" placeholder="User Name" class="apperance-none block w-full bg-gray-200 text-gray-700 border-gray-200 rounded py-3 px-4">
                        </div>
                    </div>
                    <div class="flex  flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label for="grid-last-email" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                Email
                            </label>
                            <input type="email" id="grid-last-email" value="{{ old('email') }}" name="email" placeholder="User Email" class="apperance-none block w-full bg-gray-200 text-gray-700 border-gray-200 rounded py-3 px-4">
                        </div>
                    </div>
                    <div class="flex  flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label for="grid-last-image" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                Image
                            </label>
                            <input type="file" id="grid-last-image"  name="profile_photo_path" placeholder="User Image" class="apperance-none block w-full bg-gray-200 text-gray-700 border-gray-200 rounded py-3 px-4">
                        </div>
                    </div>
                    <div class="flex  flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label for="grid-last-password" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                Password
                            </label>
                            <input type="password" id="grid-last-password" value="{{ old('password') }}" name="password" placeholder="User Password" class="apperance-none block w-full bg-gray-200 text-gray-700 border-gray-200 rounded py-3 px-4">
                        </div>
                    </div>
                    <div class="flex  flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label for="grid-last-password" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                Password Confirmation
                            </label>
                            <input type="password" id="grid-last-password" value="{{ old('password_confirmation') }}" name="password_confirmation" placeholder="Password Confirmation" class="apperance-none block w-full bg-gray-200 text-gray-700 border-gray-200 rounded py-3 px-4">
                        </div>
                    </div>
                    <div class="flex  flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label for="grid-last-address" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                Address
                            </label>
                            <input type="text" id="grid-last-address" value="{{ old('address') }}" name="address" placeholder="User Address" class="apperance-none block w-full bg-gray-200 text-gray-700 border-gray-200 rounded py-3 px-4">
                        </div>
                    </div>
                    <div class="flex  flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label for="grid-last-email" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                Roles
                            </label>
                            <select name="roles" id="roles" class="apperance-none block w-full bg-gray-200 text-gray-700 border-gray-200 rounded py-3 px-4">
                                <option value="USER">User</option>
                                <option value="ADMIN">Admin</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex  flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label for="grid-last-city" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                City
                            </label>
                            <input type="text" id="grid-last-city" value="{{ old('city') }}" name="city" placeholder="User City" class="apperance-none block w-full bg-gray-200 text-gray-700 border-gray-200 rounded py-3 px-4">
                        </div>
                    </div>
                    <div class="flex  flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label for="grid-last-houseNumber" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                House Number
                            </label>
                            <input type="text" id="grid-last-houseNumber" value="{{ old('houseNumber') }}" name="houseNumber" placeholder="User House Number" class="apperance-none block w-full bg-gray-200 text-gray-700 border-gray-200 rounded py-3 px-4">
                        </div>
                    </div>
                    <div class="flex  flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label for="grid-last-phoneNumber" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                Phone Number
                            </label>
                            <input type="text" id="grid-last-phoneNumber" value="{{ old('phoneNumber') }}" name="phoneNumber" placeholder="User Phone Number" class="apperance-none block w-full bg-gray-200 text-gray-700 border-gray-200 rounded py-3 px-4">
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6 ">
                        <div class="w-full px-3 text-right">
                            <button type="submit" class="bg-green-500 hover:bg-green-700 text-white rounded font-bold py-2 px-4 transition-all duration-300 ">
                                Save User
                            </button>
                        </div>
                    </div>
                </form>
                

            </div>
        </div>
    </div>
</x-app-layout>
