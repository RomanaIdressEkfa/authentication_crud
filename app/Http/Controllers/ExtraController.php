<?php

namespace App\Http\Controllers;

use App\Models\Extra;
use Exception;
use Illuminate\Http\Request;

class ExtraController extends Controller
{

    public function index(){
        $tables=Extra::all();
        return view('backend.products.index',compact('tables'));
    }


    public function create(){
        return view('backend.products.create');
    }


    public function store(Request $request){

        try{
            $data = $request->all();
            Extra::create($data);
            return redirect()->route('index');
        }catch(Exception $e){
            dd($e->getMessage());
        }
    }


    public function edit($id)
    {
        $table = Extra::find($id);
        return view('backend.products.edit', compact('table'));
    }


    public function update(Request $request, $id)
    {
        try{
            $data = $request->except('_token');
           Extra::where('id', $id)->update($data);
            return redirect()->route('index');

        }catch(Exception $e){
            dd($e->getMessage());
        }
    }

    public function delete($id)
    {
        $table =Extra::find($id);
        $table->delete();
        return redirect()->back();
    }

}
