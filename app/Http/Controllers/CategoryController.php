<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Exception;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $tables=Category::all();
        return view('backend.categories.index',compact('tables'));
    }


    public function create(){
        return view('backend.categories.create');
    }


    public function store(Request $request){

        try{
            $data = $request->all();
            Category::create($data);
            return redirect()->route('category_index');
        }catch(Exception $e){
            dd($e->getMessage());
        }
    }


    public function edit($id)
    {
        $table =Category::find($id);
        return view('backend.categories.edit', compact('table'));
    }


    public function update(Request $request, $id)
    {
        try{
            $data = $request->except('_token');
            Category::where('id', $id)->update($data);
            return redirect()->route('category_index');

        }catch(Exception $e){
            dd($e->getMessage());
        }
    }
    
    public function delete($id)
    {
        $table =Category::find($id);
        $table->delete();
        return redirect()->back();
    }

}
