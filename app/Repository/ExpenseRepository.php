<?php


namespace App\Repository;

use App\Interfaces\ExpenseRepositoryInterface;
use App\Models\Expense;

class ExpenseRepository implements ExpenseRepositoryInterface 
{

    public function index()
    {
        $expenses = Expense::all();
        return view('expenses.index' , compact('expenses'));
    }

    public function store($request)
    {
        try
        {
            $data['date']   = $request->date;
            $data['amount'] = $request->amount;
            $data['to']     = $request->to;
            
            Expense::create($data);

            session()->flash('create');
            return redirect()->route('expense.index');
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
            $expense = Expense::findorfail($request->id);

            $data['date']   = $request->date;
            $data['amount'] = $request->amount;
            $data['to']     = $request->to;

            $expense->update($data);

            session()->flash('edit');
            return redirect()->route('expense.index');
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
            Expense::findorfail($request->id)->delete();

            session()->flash('delete');
            return redirect()->route('expense.index');
        }
        catch (\Exception $e)
        {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
    
}    