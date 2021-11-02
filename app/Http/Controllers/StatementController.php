<?php

namespace App\Http\Controllers;

use App\Http\Requests\SalaryRequest;
use App\Http\Requests\MonthlyRequest;
use App\Http\Requests\CorporateRequest;
use App\Interfaces\StatementRepositoryInterface;

class StatementController extends Controller
{
    private $Statement;

    public function __construct(StatementRepositoryInterface $Statement)
    {
        $this->Statement = $Statement;
    }
    
    
    public function monthly()
    {
        return $this->Statement->monthly();
    }
    
    
    public function monthly_salaries(MonthlyRequest $request)
    {
        return $this->Statement->monthly_salaries($request);
    }


    public function employee()
    {
        return $this->Statement->employee();
    }


    public function employee_salaries(SalaryRequest $request)
    {
        return $this->Statement->employee_salaries($request);
    }

    public function corporate()
    {
        return $this->Statement->corporate();
    }


    public function corporate_account(CorporateRequest $request)
    {
        return $this->Statement->corporate_account($request);
    }
}




                