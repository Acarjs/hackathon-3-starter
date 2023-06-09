<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;
use Illuminate\Validation\Rule;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('search');

        $animals = Animal::where('name', 'LIKE', "%{$search}%")->get();

        return view('index', compact('animals'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email'
        ]);

        Animal::create($validatedData);

        return redirect()->route('admin.index')->with('success', 'Created');
    }

    public function show($id)
    {
        $animal = Animal::findOrFail($id);

        return view('admin.show', compact('animal'));
    }

    public function edit($id)
    {
        $animal = Animal::findOrFail($id);

        return view('admin.edit', compact('animal'));
    }

    public function update(Request $request, $id)
    {
        $animal = Animal::findOrFail($id);

        $validatedData = $request->validate([
            'name' => 'required',
            'email' => ['required', 'email']
        ]);

        $animal->update($validatedData);

        return redirect()->route('admin.index')->with('success', 'Updated');
    }

    public function destroy($id)
    {
        $animal = Animal::findOrFail($id);
        $animal->delete();

        return redirect()->route('admin.index')->with('success', 'Deleted');
    }
}
