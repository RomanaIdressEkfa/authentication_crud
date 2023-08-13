<?php

namespace App\Http\Controllers;

use App\Models\Tables;
use Illuminate\Http\Request;

class TablesController extends Controller
{
    public function index(){
        // $tables=Tables::all();
        $tables=Tables::all();

        return view('backend.products.index',compact('tables'));
    }
    public function create(){
        return view('backend.products.create');
    }
    public function store(){
        return view('backend.products.index');
    }
    public function edit(){
        return view('backend.products.edit');
    }
}
