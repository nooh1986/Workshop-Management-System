<?php


namespace App\Repository;

use App\Models\Company;
use App\Models\Payment;
use App\Interfaces\PaymentRepositoryInterface;

class PaymentRepository implements PaymentRepositoryInterface 
{

    public function index()
    {
        $companies = Company::all();
        $payments = Payment::all();
        return view('payments.index' , compact('companies' , 'payments'));
    }

    public function store($request)
    {
        try
        {
            $data['company_id'] = $request->company_id;
            $data['date']       = $request->date;
            $data['amount']     = $request->amount;
                        
            Payment::create($data);

            session()->flash('create');
            return redirect()->route('payment.index');
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
            $payment = Payment::findorfail($request->id);

            $data['company_id'] = $request->company_id;
            $data['date']       = $request->date;
            $data['amount']     = $request->amount;

            $payment->update($data);

            session()->flash('edit');
            return redirect()->route('payment.index');
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
            Payment::findorfail($request->id)->delete();

            session()->flash('delete');
            return redirect()->route('payment.index');
        }
        catch (\Exception $e)
        {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

}    