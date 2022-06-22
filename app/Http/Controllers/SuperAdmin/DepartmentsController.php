<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentsController extends Controller
{
    public function index()
    {
        return view('SuperAdmin.Department.create');
    }

    public function create()
    {
        return view('SuperAdmin.Department.show' , ['departmentListening' => Department::all()]);
    }

    public function store(Request $request)
    {

        $department = $request->get('department');

        Validator::make($request->all(), [

            'department'              =>  ['required'],],
        [
            'department.required'     => 'Department Name is Required',

        ])->validate();

        $dapartmentData = ['departmentName' => $request->get('department'), ];

        $store =  Department::departmentStore($dapartmentData);

        if(!empty($store))
        {
            return response()->json(['success' => 'Department Has Been Created Successfully!']);
        }

    }

    public function delete($id)
    {
        $department = Department::where('user_id' , $id)->delete();
        return redirect()->back()->with('success' , 'User Has Been Deleted Successfully!');
    }

    public function edit($id)
    {
        $departmentsEdit = Department::find($id);
        return view('SuperAdmin.Department.edit' , ['departmentsEdit' => $departmentsEdit]);
    }

    public function update(Request $request , $id)
    {
        Validator::make($request->all(), [

            'department'              =>  ['required'],],
        [
            'department.required'     => 'Department Name is Required',

        ])->validate();

        $dapartmentupdate = ['departmentName' => $request->get('department'), ];

        $store =  Department::updateDepartment($dapartmentupdate , $id);

        return redirect()->back()->with('success' , 'Department Has Been Updated Successfully!');
    }

}
