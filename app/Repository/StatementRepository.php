<?php


namespace App\Repository;

use App\Models\Cut;
use App\Models\Absence;
use App\Models\Company;
use App\Models\Payment;
use App\Models\Employee;
use App\Models\OverTime;
use App\Models\EmployeePayment;
use App\Interfaces\StatementRepositoryInterface;

class StatementRepository implements StatementRepositoryInterface 
{

    public function monthly()
    {
        return view('statements.monthly');
    }
    
    
    public function monthly_salaries($request)
    {
        $year      = $request->year;
        $month     = $request->month;
        $employees = Employee::where('status' , 1)->get();
        $totals    = 0;
        return view('statements.monthly-salaries' , compact('year' , 'month' , 'employees' , 'totals'));
    }


    public function employee()
    {
        $employees = Employee::where('status' ,1)->pluck('id' , 'name');
        return view('statements.employee' , compact('employees'));
    }


    public function employee_salaries($request)
    {
        $year      = $request->year;
        $month     = $request->month;
        $employee  = $request->employee;
        $name      = Employee::where('id' , $request->employee)->first(); 
        $employees = Employee::where('status' ,1)->pluck('id' , 'name');
        $overtimes = OverTime::where('employee_id' , $employee)->where('month' ,$month)->where('year' ,$year)->get();
        $absences = Absence::where('employee_id' , $employee)->where('month' ,$month)->where('year' ,$year)->get();
        $payments = EmployeePayment::where('employee_id' , $employee)->where('month' ,$month)->where('year' ,$year)->get();
        $total    = EmployeePayment::where('employee_id' , $employee)->where('month' ,$month)->where('year' ,$year)->sum('amount');
        return view('statements.employee-salaries' , compact('year' , 'month' , 'employee' , 'overtimes' , 'absences' , 'payments' , 'employees' , 'total' , 'name'));
    }


    public function corporate()
    {
        $companies = Company::pluck('id' , 'name');
        return view('statements.corporate' , compact('companies'));
    }


    public function corporate_account($request)
    {
        if($request->from == '' && $request->to == '')
        {
            $companies = Company::pluck('id' , 'name');
            $company   = $request->company;
            $name      = Company::where('id' , $request->company)->first(); 
            $cuts      = Cut::where('status' , 0)->where('company_id' , $company)->get();
            $cu        = Cut::where('status' , 0)->where('company_id' , $company)->sum('total');
            $payments  = Payment::where('company_id' , $company)->get();
            $pay       = Payment::where('company_id' , $company)->sum('amount');
            return view('statements.corporate-account' , compact('companies' , 'company' , 'cuts' , 'cu' , 'payments' , 'pay' ,'name'));
        }
        else
        {
            $from      = date($request->from);
            $to        = date($request->to);
            $companies = Company::pluck('id' , 'name');
            $company   = $request->company;
            $name      = Company::where('id' , $request->company)->first();
            $cuts      = Cut::where('status' , 0)->where('company_id' , $company)->whereBetween('date',[$from , $to])->get();
            $cu        = Cut::where('status' , 0)->where('company_id' , $company)->whereBetween('date',[$from , $to])->sum('total');
            $payments  = Payment::where('company_id' , $company)->whereBetween('date',[$from , $to])->get();
            $pay       = Payment::where('company_id' , $company)->whereBetween('date',[$from , $to])->sum('amount');
            return view('statements.corporate-account' , compact('companies' , 'company' , 'cuts' , 'cu' , 'payments' , 'pay' ,'from' , 'to' , 'name'));
        }        
    }
    
}    