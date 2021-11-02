<?php


namespace App\Repository;

use App\Models\Absence;
use App\Models\Employee;
use App\Interfaces\AbsenceRepositoryInterface;

class AbsenceRepository implements AbsenceRepositoryInterface 
{

    public function index()
    {
        $absences = Absence::all();
        $employees = Employee::where('status' ,1)->pluck('id' , 'name');
        return view('absences.index' , compact('absences' , 'employees'));
    }

    public function store($request)
    {
        try
        {
            $data['year']        = $request->year;
            $data['month']       = $request->month;
            $data['count']       = $request->count;
            $data['type']        = $request->type;
            $data['date']        = $request->date;
            $data['employee_id'] = $request->employee_id;

            Absence::create($data);

            session()->flash('create');
            return redirect()->route('absence.index');
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
            $overtime = Absence::findorfail($request->id);

            $data['year']        = $request->year;
            $data['month']       = $request->month;
            $data['count']       = $request->count;
            $data['type']        = $request->type;
            $data['date']        = $request->date;
            $data['employee_id'] = $request->employee_id;

            $overtime->update($data);

            session()->flash('edit');
            return redirect()->route('absence.index');
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
            Absence::findorfail($request->id)->delete();

            session()->flash('delete');
            return redirect()->route('absence.index');
        }
        catch (\Exception $e)
        {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    
}    