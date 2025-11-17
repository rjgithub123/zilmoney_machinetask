<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Employees;
use App\Models\Language;
use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;

class EmployeesController extends Controller
{

    public function index()
    {
        $employees=Employees::with('languages')->get();

        return view('employees.index', compact('employees'));

    }

    public function create()
    {
        $languages=Language::get();

        return view('employees.create',compact('languages'));
    }
    

    public function store(StoreEmployeeRequest $request)
    {

        $employees=Employees::create($request->validated());
        $employees->languages()->sync($request->languages);
        return redirect()->route('employees.index');
    }

    public function edit($id)
    {
        $employee=Employees::with('languages')->findOrFail($id);
        $languages=Language::get();
        return view('employees.edit', compact('employee','languages'));
    }

    public function update(UpdateEmployeeRequest $request)
    {
        dd("jdhf");
        $employees=Employees::update($request->validated());
        $employees->languages()->sync($request->languages);

        return redirect()->route('employees.index');
    }

    public function destroy($id)
    {
        $employee=Employees::findOrFail($id);
        $employee->languages()->detach();
        $employee->delete();

        return redirect()->route('employees.index');
    }


}
