<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <header>

    </header>

    <main>
        @extends('layouts.app')

        @section('content')
            <div class="container mx-auto px-4 py-8">
                <div class="max-w-2xl mx-auto">
                    <div class="flex items-center mb-6">
                        <a href="{{ route('admin.index') }}" class="text-purple-600 hover:text-purple-800 mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                            </svg>
                        </a>
                        <h1 class="text-3xl font-bold text-purple-800">Modifier le vin</h1>
                    </div>

                    @if ($errors->any())
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4"
                            role="alert">
                            <ul class="list-disc pl-5">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="bg-white shadow-md rounded-lg p-6">
                        <form action="{{ route('admin.update', $vin->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="mb-4">
                                <label for="nom" class="block text-gray-700 font-bold mb-2">Nom du vin</label>
                                <input type="text" name="nom" id="nom" value="{{ old('nom', $vin->nom) }}"
                                    required
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-purple-500">
                            </div>

                            <div class="mb-4">
                                <label for="description" class="block text-gray-700 font-bold mb-2">Description</label>
                                <textarea name="description" id="description" rows="4" required
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-purple-500">{{ old('description', $vin->description) }}</textarea>
                            </div>

                            <div class="grid grid-cols-2 gap-4">
                                <div class="mb-4">
                                    <label for="prix" class="block text-gray-700 font-bold mb-2">Prix (€)</label>
                                    <input type="number" name="prix" id="prix"
                                        value="{{ old('prix', $vin->prix) }}" step="0.01" min="0" required
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-purple-500">
                                </div>

                                <div class="mb-4">
                                    <label for="quantite" class="block text-gray-700 font-bold mb-2">Quantité en
                                        stock</label>
                                    <input type="number" name="quantite" id="quantite"
                                        value="{{ old('quantite', $vin->quantite) }}" min="0" required
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-purple-500">
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="image" class="block text-gray-700 font-bold mb-2">Image</label>
                                <div class="flex items-center space-x-4">
                                    @if ($vin->image_path)
                                        <img src="{{ asset('storage/' . $vin->image_path) }}" alt="{{ $vin->nom }}"
                                            class="h-20 w-20 object-cover rounded">
                                    @endif
                                    <input type="file" name="image" id="image" accept="image/*"
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-purple-500">
                                </div>
                                <p class="text-sm text-gray-500 mt-1">Laissez vide pour conserver l'image actuelle</p>
                            </div>

                            <div class="flex justify-end">
                                <button type="submit"
                                    class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded">
                                    Enregistrer les modifications
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endsection


    </main>

    <footer>


    </footer>

</body>

</html>
