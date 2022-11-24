<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Companies;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
        $daplo = Employee::with('companies')->get();
        $dacom = Companies::all();
        return view('employee.index', compact('daplo', 'dacom'), [
            "title" => "Employee Data"
        ]);
    }
    public function add(){
        $dacom = Companies::all();
        return view('employee.add', compact('dacom'), [
            "title" => "Add Data Employee"
        ]); 
    }

    public function create(Request $req){
        $validated = $req->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'gender' => 'required',
            'hobbies' => 'required',
        ]);
        $daplo = $req->all();
        if(!empty($req->input('hobbies'))){
            $daplo['hobbies'] = join(',',$req->input('hobbies'));
        }else{
            $companies = ' ';
        }
        Employee::create($daplo);
        return redirect()->route('employeedata')->with('success' , 'Data added successfully');
        }
        public function edit(Request $req, $id){
            $daplo = Employee::find($id);
            $dacom = Companies::all();
            $daplo['hobbies'] = explode(',',$daplo['hobbies']);
            return view('employee.edit', compact('daplo', 'dacom'), [
                "title" => "Edit Data Employee"
            ]);
        }
    
        public function update(Request $req, $id){
            $daplo = $req->all();
        if(!empty($req->input('hobbies'))){
            $daplo['hobbies'] = join(',',$req->input('hobbies'));
        }else{
            $companies = '';
        }
            $daplo1 = Employee::find($id);
            $daplo1->update($daplo);
             return redirect('/employee/data')->with('success', 'Data edited successfully');
        }
        
        public function delete($id){
            $daplo = Employee::find($id);
            $daplo->delete();
            return redirect('/employee/data')->with('success', 'Data deleted successfully');
        }
}
