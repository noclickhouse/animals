<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequest;
use App\Models\Animal;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    protected Animal $animal;

    public function __construct(Animal $animal)
    {
        $this->animal = $animal;
    }

    public function index()
    {
        return view('animals', [
            'animals' => Animal::all()
        ]);
    }

    public function show(int $id)
    {
        return view('animal', [
            'animal' => Animal::find($id)
        ]);
    }

    public function store(Request $request)
    {
        Animal::create([
            'kind' => $request->kind,
            'name' => $request->name,
            'age' => $request->age,
            'description' => $request->description,
        ]);
        
        return redirect("/animals");
    }

    public function destroy(int $id)
    {
        Animal::destroy($id);
        
        return redirect("/animals");
    }
}
