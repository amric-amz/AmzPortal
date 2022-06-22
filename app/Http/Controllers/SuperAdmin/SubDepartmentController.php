<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\SubDepartment;

class SubDepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::all();
        return view('SuperAdmin.Sub-department.create' , ['departments' => $departments]);
    }

    public function create()
    {
        $sub_departments = SubDepartment::all();
        return view('SuperAdmin.Sub-department.show' , ['sub_departments' => $sub_departments]);
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'department' => 'required', 'max:255',
            'subDepartment' => ['required', 'string', 'max:255'],
        ], [
            'department.required' => 'Department is required',
            'subDepartment.required' => 'Sub-Department is required',
        ])->validate();

        $storeSubDepartment = [

            'department_id' => $request->get('department'),
            'sub_department_name' => $request->get('subDepartment')

        ];

        $data = SubDepartment::storeSubDepartment($storeSubDepartment);

        return redirect()->back()->with('success' , 'Sub-Department Has Been Created');
    }

    public function delete($id)
    {
        $sub_department = SubDepartment::where('sub_departmentId' , $id)->delete();
        return redirect()->back()->with('success' , 'User Has Been Deleted Successfully!');
    }

    public function edit($id)
    {
        $deparments = Department::all();
        $editsubdepartment = SubDepartment::find($id);
        $department_id = $editsubdepartment->department_id;
        $unique_row_of_department = Department::where('department_id' , $department_id)->first();
        return view('SuperAdmin.Sub-department.edit' ,
                                                ['editsubdepartment' => SubDepartment::find($id),
                                                 'deparments' => $deparments,
                                                 'unique_row_of_department' => $unique_row_of_department
                                                ]);
    }

    public function update(Request $request , $id)
    {
        $validator = Validator::make($request->all(), [
            'department' => 'required', 'max:255',
            'subDepartment' => ['required', 'string', 'max:255'],
        ], [
            'department.required' => 'Department is required',
            'subDepartment.required' => 'Sub-Department is required',
        ])->validate();

        $updateSubDepartment = [

            'department_id' => $request->get('department'),
            'sub_department_name' => $request->get('subDepartment')

        ];

        $sub_department = SubDepartment::updateSubDepartment($updateSubDepartment , $id);

        return redirect()->back()->with('success' , 'Sub-Department Has Been Updated Successfully!');
    }
}
