public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'Ingredient' => 'required|string',
            'Preparation' => 'required|string',
            'categorie' => 'required|in:salé,sucré,mixte',
        ]);

        Recette::create($request->all());

        return redirect()->route('recettes.index')
                         ->with('success', 'Recette ajoutée avec succès.');
    }