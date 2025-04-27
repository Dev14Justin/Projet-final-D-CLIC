<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Vin;
use Illuminate\Http\Request;

class Adminvincontroller extends Controller
{
    /**
     * Affiche la liste des vins pour l'administration
     */

    public function index()
    {
        $vins = Vin::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.admin', compact('vins'));
    }

    /**
     * Affiche le formulaire d'édition d'un vin
     */
    public function edit($id)
    {
        $vin = Vin::findOrFail($id);
        return view('edit', compact('vin'));
    }

    /**
     * Mettre à jour un vin dans la base de données
     */
    public function update(Request $request, $id)
    {
        $vin = Vin::findOrFail($id);
        
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'description' => 'required|string',
            'prix' => 'required|numeric|min:0',
            'quantite' => 'required|integer|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        
        $vin->nom = $validated['nom'];
        $vin->description = $validated['description'];
        $vin->prix = $validated['prix'];
        $vin->quantite = $validated['quantite'];
        
        // Traitement de l'image si une nouvelle est téléchargée
        if ($request->hasFile('image')) {
            // Supprimer l'ancienne image si elle existe
            if ($vin->image_path) {
                Storage::disk('public')->delete($vin->image_path);
            }
            // Enregistrer la nouvelle image
            $path = $request->file('image')->store('image_store', 'public');
            $vin->image_path = $path;
        }
        
        $vin->save();
        
        return redirect()->route('admin.vin.edit')->with('success', 'Le vin a été mis à jour avec succès.');
    }

    /**
     * Supprimer un vin de la collection
     */
    public function destroy($id)
    {
        $vin = Vin::findOrFail($id);
        
        // Supprimer l'image associée
        if ($vin->image_path) {
            Storage::disk('public')->delete($vin->image_path);
        }
        
        $vin->delete();
        
        return redirect()->route('admin.admin.index')->with('success', 'Le vin a été supprimé avec succès.');
    }

}
