<?php

namespace App\Http\Controllers;

use App\Models\Companies;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    public function index(){
        $dacom = Companies::all();
        return view('companies.index', compact('dacom'), [
            "title" => "Companies Data"
        ]);
    }
    public function add(){
        $dacom = Companies::all();
        return view('companies.add', [
            "title" => "Add Data Companies"
        ]);
    }
    public function create(Request $req){
        $validated = $req->validate([
            'name' => 'required',
            'email' => 'required',
            'logo' => 'required|file|dimensions:min_width=100,min_height=100',
            'web' => 'required',
        ]);
        $dacom = Companies::create($req->all());
        if($req->hasFile('logo')){
         $req->file('logo')->move('logo/', $req->file('logo')->getClientOriginalName());
         $dacom->logo = $req->file('logo')->getClientOriginalName();
         $dacom->save();
        }
        return redirect('/companies/data')->with('success', 'Data added successfully');
    }
    public function edit(Request $req, $id){
        $dacom = Companies::find($id);
        return view('companies.edit', compact('dacom'), [
            "title" => "Edit Data Companies"
        ]);
    }
    public function update(Request $req, $id){
        $dacom = Companies::find($id);
        $dacom->update($req->all());
        if($req->hasFile('logo')){
         $req->file('logo')->move('logo/', $req->file('logo')->getClientOriginalName());
         $dacom->logo = $req->file('logo')->getClientOriginalName();
         $dacom->save();
        }
         return redirect('/companies/data')->with('success', 'Data edited successfully');
    }

    public function delete($id){
        $dacom = Companies::find($id);
        $dacom->delete();
        return redirect('/companies/data')->with('success', 'Data deleted successfully');
    }
}
