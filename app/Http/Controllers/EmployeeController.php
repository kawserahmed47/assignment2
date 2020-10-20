<?php

namespace App\Http\Controllers;
use App\Employee;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
        $data = array();
        $data['employees']= Employee::all();
        return view('employee.index',$data);

    }

    public function create(){
        return view('employee.create');
    }

    public function store(Request $request){

        $validatedData = $request->validate([
            'name' => 'required',
            'gender' => 'required',
            'department' => 'required|min:3',
            'city' => 'required|min:3',
        ]);

            if($validatedData){
                $slug = Str::slug($request->name);
                $query = Employee::where('slug', $slug)->first();

                if($query){
                    Session::flash('error', 'This Name Already Inserted In Database!!!');
                    return redirect()->back();
                }else{
                    $data = new Employee();
                    $data->slug= $slug;
                    $data->name= $request->name;
                    $data->gender= $request->gender;
                    $data->department= $request->department;
                    $data->city= $request->city;
                    $data->save();

                    Session::flash('success', 'Employee Inserted Successfully!');
                    return redirect()->route('showEmployee');

                }
                
            
            }

       




    }

    public function show($slug){
        $data = array();
        $data['employee']= Employee::where('slug',$slug)->first();
        return view('employee.show',$data);
    }

    public function edit($slug){
        $data = array();
        $data['employee']= Employee::where('slug',$slug)->first();
        return view('employee.edit',$data);
    }

    public function update(Request $request){
        $validatedData = $request->validate([
            'name' => 'required',
            'gender' => 'required',
            'department' => 'required|min:3',
            'city' => 'required|min:3',
        ]);

        if($validatedData){
            $data = Employee::where('slug',$request->slug)->first();
            
            $data->name= $request->name;
            $data->gender= $request->gender;
            $data->department= $request->department;
            $data->city= $request->city;
            $data->save();

            Session::flash('success', 'Employee Updated Successfully!');
            return redirect()->route('showEmployee');


        }


    }

    public function destroy($slug){
        $deletedRows = Employee::where('slug', $slug)->delete();
        if($deletedRows){
            Session::flash('success', 'Employee Deleted Successfully!');
            return redirect()->route('showEmployee');
        }

    }
}
