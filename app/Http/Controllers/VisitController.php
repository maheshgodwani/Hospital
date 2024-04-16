<?php

namespace App\Http\Controllers;

use App\Models\Visit;
use Illuminate\Http\Request;

class VisitController extends Controller
{
    
    public function store(Request $request)
    {
        Visit::create($request->all());
        return redirect()->route('hospital.show', $request->patients_id);
    }

}
