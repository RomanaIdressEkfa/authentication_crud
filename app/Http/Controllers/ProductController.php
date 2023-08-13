<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('backend.products.index');
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
