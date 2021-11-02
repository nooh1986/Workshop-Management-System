<?php


namespace App\Repository;

use App\Models\Employee;
use App\Models\OverTime;
use App\Interfaces\OverTimeRepositoryInterface;

class OverTimeRepository implements OverTimeRepositoryInterface 
{

    public function index()
    {
        $overtimes = OverTime::all();
        $employees = Employee::where('status' ,1)->pluck('id' , 'name');
        return view('over_times.index' , compact('overtimes' , 'employees'));
    }

    public function store($request)
    {
        try
        {
            $data['year']        = $request->year;
            $data['month']       = $request->month;
            $data['count']       = $request->count;
            $data['date']        = $request->date;
            $data['employee_id'] = $request->employee_id;

            OverTime::create($data);

            session()->flash('create');
            return redirect()->route('over-time.index');
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
            $overtime = OverTime::findorfail($request->id);

            $data['year']        = $request->year;
            $data['month']       = $request->month;
            $data['count']       = $request->count;
            $data['date']        = $request->date;
            $data['employee_id'] = $request->employee_id;

            $overtime->update($data);

            session()->flash('edit');
            return redirect()->route('over-time.index');
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
            OverTime::findorfail($request->id)->delete();

            session()->flash('delete');
            return redirect()->route('over-time.index');
        }
        catch (\Exception $e)
        {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
    
}    