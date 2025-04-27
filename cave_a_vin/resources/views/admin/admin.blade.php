@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold text-purple-800">Administration des Vins</h1>
            <a href="{{ route('vin.store') }}"
                class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded">
                Ajouter un nouveau vin
            </a>
        </div>

        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif

        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <table class="min-w-full bg-white">
                <thead class="bg-purple-700 text-white">
                    <tr>
                        <th class="py-3 px-4 text-left">Image</th>
                        <th class="py-3 px-4 text-left">Nom</th>
                        <th class="py-3 px-4 text-left">Prix</th>
                        <th class="py-3 px-4 text-left">Déscription</th>
                        <th class="py-3 px-4 text-left">Quantité</th>
                        <th class="py-3 px-4 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach ($vins as $vin)
                        <tr>
                            <td class="py-2 px-4">
                                @if ($vin->image_path)
                                    <img src="{{ asset('storage/' . $vin->image_path) }}" alt="{{ $vin->nom }}"
                                        class="h-16 w-16 object-cover rounded">
                                @else
                                    <div class="h-16 w-16 bg-gray-200 flex items-center justify-center rounded">
                                        <span class="text-gray-500">No image</span>
                                    </div>
                                @endif
                            </td>
                            <td class="py-2 px-4">{{ $vin->nom }}</td>
                            <td class="py-2 px-4">{{ number_format($vin->prix, 2) }} FCFA</td>
                            <td class="py-2 px-4">{{ $vin->description }}</td>
                            <td class="py-2 px-4">{{ $vin->quantite }}</td>
                            <td class="py-2 px-4 flex space-x-2">
                                <a href="{{ route('vin.edit', $vin->id) }}"
                                    class="bg-blue-500 hover:bg-blue-600 text-white py-1 px-3 rounded text-sm">
                                    Modifier
                                </a>
                                <form action="{{ route('vin.destroy', $vin->id) }}" method="POST"
                                    onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce vin?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="bg-red-500 hover:bg-red-600 text-white py-1 px-3 rounded text-sm">
                                        Supprimer
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-4">
            {{ $vins->links() }}
        </div>
    </div>
@endsection
