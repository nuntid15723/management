<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Employee;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departments = Department::all();
        $employee = Employee::all();
        return view('departments.index', compact('departments'));
    }

    public function create()
    {
        $employee = Employee::all();
        return view('departments.create',compact('employee'));
    }

    public function store(Request $request)
    {
        $department = new Department();
        $department->employee_code = $request->input('employee_code');
        $department->department = $request->input('department');
        $department->position = $request->input('position');
        $department->others = $request->input('others');
        $department->save();

        return redirect()->route('departments.index')->with('success', 'Department created successfully.');
    }

    public function show($id)
    {
        $department = Department::find($id);
        return view('departments.show', compact('department'));
    }

    public function edit($id)
    {
        $department = Department::find($id);
        return view('departments.edit', compact('department'));
    }

    public function update(Request $request, $id)
    {
        $department = Department::find($id);
        $department->employee_code = $request->input('employee_code');
        $department->department = $request->input('department');
        $department->position = $request->input('position');
        $department->others = $request->input('others');
        $department->save();

        return redirect()->route('departments.index')->with('success', 'Department updated successfully.');
    }

    public function destroy($id)
    {
        $department = Department::find($id);
        $department->delete();

        return redirect()->route('departments.index')->with('success', 'Department deleted successfully.');
    }
}
