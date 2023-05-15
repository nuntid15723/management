<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }

    public function create()
    {
        return view('employees.create');
    }

    public function store(Request $request)
    {
        $employee = new Employee();
        $employee->employee_code = $request->input('employee_code');
        $employee->name = $request->input('name');
        $employee->start_date = $request->input('start_date');
        $employee->description = $request->input('description');

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/images');
            $employee->image = $imagePath;
        }

        $employee->save();

        return redirect()->route('employees.index')->with('success', 'Employee created successfully.');
    }

    public function show($id)
    {
        $employee = Employee::find($id);
        return view('employees.show', compact('employee'));
    }

    public function edit($id)
    {
        $employee = Employee::find($id);
        return view('employees.edit', compact('employee'));
    }

    public function update(Request $request, $id)
    {
        $employee = Employee::find($id);
        $employee->employee_code = $request->input('employee_code');
        $employee->name = $request->input('name');
        $employee->start_date = $request->input('start_date');
        $employee->description = $request->input('description');

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/images');
            $employee->image = $imagePath;
        }

        $employee->save();

        return redirect()->route('employees.index')->with('success', 'Employee updated successfully.');
    }

    public function destroy($id)
    {
        $employee = Employee::find($id);
        $employee->delete();

        return redirect()->route('employees.index')->with('success', 'Employee deleted successfully.');
    }
}
