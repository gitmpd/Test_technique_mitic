<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tache;
class TacheController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $taches = Tache::all();
        return view('taches.index', compact('taches'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('taches.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'titre' => 'required|unique:taches',
            'description' => 'nullable',
            'etat' => 'nullable|boolean',
        ],[
            'titre.required' => 'Le champ titre est obligatoire.',
            'titre.unique' => 'Le titre de la ferme existe déjà.',
        ]);

        // Par défaut, la tâche est non complétée
        $completed = $request->has('etat') ? 1 : 0;

        Tache::create([
            'titre' => $request->titre,
            'description' => $request->description ?? 'indefinie',
            'etat' => $completed,
        ]);

        return redirect()->route('taches.index')->with('success', 'Tâche créée avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $tache = Tache::findOrFail($id);
        return view('taches.show', compact('tache'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tache $tache)
    {
        return view('taches.edit', compact('tache'));
    }
    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, Tache $tache)
{
    // Valider les données envoyées dans la requête
    $validatedData = $request->validate([
        'titre' => 'required',
        'description' => 'nullable',
        'etat' => 'nullable|boolean', // Peut être null mais doit être booléen si présent
    ], [
        'titre.required' => 'Le champ titre est obligatoire.',
        'etat.boolean' => 'L\'état doit être 0 (Non complétée) ou 1 (Complétée).',
    ]);

    $tache->titre = $validatedData['titre'];
    $tache->description = $validatedData['description'];
    $tache->etat = $validatedData['etat'];
    $tache->save();

    // Rediriger l'utilisateur avec un message de succès
    return redirect()->route('taches.index')->with('success', 'Tâche mise à jour avec succès');
}


    /**
     * Remove the specified resource from storage.
     */
    public function deleteSelectedF(Request $request)
        {
            $cultureIds = $request->input('culture_ids');
            // Supprimez les taches sélectionnées
            Tache::whereIn('id', $cultureIds)->delete();
            return redirect()->route('taches.index')->with('danger','Suppression effectué avec succès.');
        }
}
