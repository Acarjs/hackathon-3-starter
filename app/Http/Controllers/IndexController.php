<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $animals = [];

        if (isset($search)) {
            $animals = Animal::query()
                ->with('owner', 'image')
                ->where('name', 'like', '%' . $search . '%')
                ->orderBy('name')
                ->limit(20)
                ->get();
        }



    
        return view('index',compact('animals'));
    }

    
}
