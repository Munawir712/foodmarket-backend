<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {!!__('Food &raquo; Create') !!}
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
                <form action="{{ route('foods.store') }}" class="w-full" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="flex  flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label for="grid-last-name" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                Name
                            </label>
                            <input type="text" id="grid-last-name" value="{{ old('name') }}" name="name" placeholder="Food Name" class="apperance-none block w-full bg-gray-200 text-gray-700 border-gray-200 rounded py-3 px-4">
                        </div>
                    </div>
                    <div class="flex  flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label for="grid-last-image" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                Image
                            </label>
                            <input type="file" id="grid-last-image"  name="picturePath" placeholder="Food Image" class="apperance-none block w-full bg-gray-200 text-gray-700 border-gray-200 rounded py-3 px-4">
                        </div>
                    </div>
                    <div class="flex  flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label for="grid-last-description" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                Description
                            </label>
                            <input type="text" id="grid-last-description" value="{{ old('description') }}" name="description" placeholder="Food description" class="apperance-none block w-full bg-gray-200 text-gray-700 border-gray-200 rounded py-3 px-4">
                        </div>
                    </div>
                    <div class="flex  flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label for="grid-last-ingredients" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                Ingredients
                            </label>
                            <input type="text" id="grid-last-ingredients"  name="ingredients" placeholder="Food Ingredients" class="apperance-none block w-full bg-gray-200 text-gray-700 border-gray-200 rounded py-3 px-4">
                            <p class="text-gray-600 text-xs italic">Dipisahkan dengan koma, contoh: Tepung, Bawang Putih, Cabai, Daun Bawang</p>
                        </div>
                    </div>
                    
                    
                    <div class="flex  flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label for="grid-last-price" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                Price
                            </label>
                            <input type="number" id="grid-last-price" value="{{ old('price') }}" name="price" placeholder="Food price" class="apperance-none block w-full bg-gray-200 text-gray-700 border-gray-200 rounded py-3 px-4">
                            
                        </div>
                    </div>

                    <div class="flex  flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label for="grid-last-rate" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                Rate
                            </label>
                            <input type="number" id="grid-last-rate" value="{{ old('rate') }}" name="rate" step="0.01" max="5" placeholder="Food rate" class="apperance-none block w-full bg-gray-200 text-gray-700 border-gray-200 rounded py-3 px-4">
                        </div>
                    </div>

                    <div class="flex  flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label for="grid-last-types" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                Types
                            </label>
                            <input type="text" id="grid-last-types" value="{{ old('types') }}" name="types" placeholder="Food Types" class="apperance-none block w-full bg-gray-200 text-gray-700 border-gray-200 rounded py-3 px-4">
                            <p class="text-gray-600 text-xs italic">Dipisahkan dengan koma, contoh: recomended,popular,new_food</p>
                        </div>
                    </div>
                    
                    <div class="flex flex-wrap -mx-3 mb-6 ">
                        <div class="w-full px-3 text-right">
                            <button type="submit" class="bg-green-500 hover:bg-green-700 text-white rounded font-bold py-2 px-4 transition-all duration-300 ">
                                Save Food
                            </button>
                        </div>
                    </div>
                </form>
                

            </div>
        </div>
    </div>
</x-app-layout>
