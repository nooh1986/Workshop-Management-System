<?php


namespace App\Repository;

use App\Interfaces\CutRepositoryInterface;
use App\Models\Company;
use App\Models\Cut;

class CutRepository implements CutRepositoryInterface 
{

    public function index()
    {
        $cuts = Cut::all();
        return view('cuts.index' , compact('cuts'));
    }

    public function create()
    {
        $companies = Company::pluck('id' , 'name');
        return view('cuts.create' , compact('companies'));
    }

    public function store($request)
    {
        try
        {
            $data['code']       = $request->code;
            $data['date']       = $request->date;
            $data['company_id'] = $request->company_id;
            $data['count']      = $request->count;
            $data['cost']       = $request->cost;
            $data['status']     = 1;
            $data['total']      = $request->count * $request->cost;

            Cut::create($data);

            session()->flash('create');
            return redirect()->route('cut.index');
        }
        catch (\Exception $e)
        {
           return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function show($id)
    {
        $cut = Cut::findorfail($id);
        return view('cuts.show' , compact('cut'));
    }

    public function edit($id)
    {
        $cut = Cut::findorfail($id);
        $companies = Company::pluck('id' , 'name');
        return view('cuts.edit' , compact('companies' , 'cut'));
    }

    public function update($request)
    {
        try
        {
            $cut = Cut::findorfail($request->id);

            $data['code']       = $request->code;
            $data['date']       = $request->date;
            $data['company_id'] = $request->company_id;
            $data['count']      = $request->count;
            $data['cost']       = $request->cost;
            $data['total']      = $request->count * $request->cost;

            $cut->update($data);

            session()->flash('edit');
            return redirect()->route('cut.index');
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
            Cut::findorfail($request->id)->delete();

            session()->flash('delete');
            return redirect()->route('cut.index');
        }
        catch (\Exception $e)
        {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function end($request)
    {
        try
        {
            $cut = Cut::findorfail($request->id);

            $data['date_end']  = $request->date_end;
            $data['count_end'] = $request->count_end;
            $data['status']    = 0;

            $cut->update($data);

            session()->flash('edit');
            return redirect()->route('cut.index');
        }
        catch (\Exception $e)
        {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}    