<?php


namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;


class PersonaController extends Controller
{
    public function getAllPersonas()
    {
        $personas = Persona::paginate();
        return response()->json($personas->items());
    }

}
