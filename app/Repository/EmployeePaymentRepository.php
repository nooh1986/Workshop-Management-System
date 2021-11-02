<?php


namespace App\Repository;

use App\Models\Employee;
use App\Models\EmployeePayment;
use App\Interfaces\EmployeePaymentRepositoryInterface;

class EmployeePaymentRepository implements EmployeePaymentRepositoryInterface 
{

    public function index()
    {
        $employees = Employee::where('status' ,1)->pluck('id' , 'name');
        $payments = EmployeePayment::all();
        return view('employee_payments.index' , compact('payments' , 'employees'));
    }

    public function store($request)
    {
        try
        {
            $data['year']          = $request->year;
            $data['month']         = $request->month;
            $data['employee_id']   = $request->employee_id;
            $data['amount']        = $request->amount;
            $data['date']          = $request->date;

            EmployeePayment::create($data);

            session()->flash('create');
            return redirect()->route('employee-payment.index');
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
            $payment = EmployeePayment::findorfail($request->id);

            $data['year']          = $request->year;
            $data['month']         = $request->month;
            $data['employee_id']   = $request->employee_id;
            $data['amount']        = $request->amount;
            $data['date']          = $request->date;

            $payment->update($data);

            session()->flash('edit');
            return redirect()->route('employee-payment.index');
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
            EmployeePayment::findorfail($request->id)->delete();

            session()->flash('delete');
            return redirect()->route('employee-payment.index');
        }
        catch (\Exception $e)
        {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    
}    