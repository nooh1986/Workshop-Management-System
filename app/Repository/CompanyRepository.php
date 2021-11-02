<?php


namespace App\Repository;

use App\Models\Company;
use App\Interfaces\CompanyRepositoryInterface;


class CompanyRepository implements CompanyRepositoryInterface 
{

    public function index()
    {
        $companies = Company::all();
        return view('companies.index' , compact('companies'));
    }

    public function store($request)
    {
        try
        {
            $data['name'] = $request->name;
            
            Company::create($data);

            session()->flash('create');
            return redirect()->route('company.index');
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
            $company = Company::findorfail($request->id);

            $data['name'] = $request->name;
           
            $company->update($data);

            session()->flash('edit');
            return redirect()->route('company.index');
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
            Company::findorfail($request->id)->delete();

            session()->flash('delete');
            return redirect()->route('company.index');
        }
        catch (\Exception $e)
        {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    
}    