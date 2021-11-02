<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ExpenseRequest;
use App\Interfaces\ExpenseRepositoryInterface;

class ExpenseController extends Controller
{
    
    private $Expense;

    public function __construct(ExpenseRepositoryInterface $Expense)
    {
        $this->Expense = $Expense;
    }


    public function index()
    {
        return $this->Expense->index();
    }

    
    public function store(ExpenseRequest $request)
    {
        return $this->Expense->store($request);
    }

    
    public function update(ExpenseRequest $request)
    {
        return $this->Expense->update($request);
    }

    
    public function destroy(Request $request)
    {
        return $this->Expense->destroy($request);
    }
}
