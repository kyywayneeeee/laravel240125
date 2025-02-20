<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\court_type;

class court_typeController extends Controller
{
    public function index()
    {
        return view('MasterProject');
    }
    public function store(){
        return view('MasterProject');
    }
}
