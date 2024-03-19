<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreanimalRequest;
use App\Http\Requests\UpdateanimalRequest;
use App\Models\Animal;

class AnimalController extends Controller
{

    public function index()
    {
        return Animal::all();
    }

    
    public function create()
    {
  
    }

    
    public function store(StoreanimalRequest $request)
    {

    }
    public function show(animal $animal)
    {

    }

 
    public function edit(animal $animal)
    {

    }

  
    public function update(UpdateanimalRequest $request, animal $animal)
    {

    }

    public function destroy(animal $animal)
    {
  
    }
}
