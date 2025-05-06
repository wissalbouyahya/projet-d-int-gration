public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'Ingredient' => 'required|string',
            'Preparation' => 'required|string',
            'categorie' => 'required|in:salé,sucré,mixte',
        ]);

        $recette = Recette::findOrFail($id);
        $recette->update($request->all());

        return redirect()->route('recettes.index')
                         ->with('success', 'Recette mise à jour avec succès.');
    }