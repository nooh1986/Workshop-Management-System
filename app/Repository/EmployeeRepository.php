<?php

namespace App\Repository;

use App\Interfaces\EmployeeRepositoryInterface;
use App\Models\Employee;

class EmployeeRepository implements EmployeeRepositoryInterface 
{

    public function index()
    {
        $employees = Employee::all();
        return view('employees.index' , compact('employees'));
    }

    public function store($request)
    {
        try
        {
            $data['name']   = $request->name;
            $data['salary'] = $request->salary;
            $data['status'] = 1;
            $data['day']    = $request->salary / 24;
            $data['hour']   = $request->salary / 24 / 10;
            
            Employee::create($data);

            session()->flash('create');
            return redirect()->route('employee.index');
        }
        catch (\Exception $e)
        {
           return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function update($request)
    {
        try
        {
            $employee = Employee::findorfail($request->id);

            $data['name']   = $request->name;
            $data['salary'] = $request->salary;
            $data['status'] = $request->status;
            $data['day']    = $request->salary / 24;
            $data['hour']   = $request->salary / 24 / 10;

            $employee->update($data);

            session()->flash('edit');
            return redirect()->route('employee.index');
        }
        catch (\Exception $e)
        {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function destroy($request)
    {
        try
        {
            Employee::findorfail($request->id)->delete();

            session()->flash('delete');
            return redirect()->route('employee.index');
        }
        catch (\Exception $e)
        {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    
}    