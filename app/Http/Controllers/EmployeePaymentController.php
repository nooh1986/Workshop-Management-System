<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EmployeePaymentRequest;
use App\Interfaces\EmployeePaymentRepositoryInterface;

class EmployeePaymentController extends Controller
{
    
    private $EmployeePayment;

    public function __construct(EmployeePaymentRepositoryInterface $EmployeePayment)
    {
        $this->EmployeePayment = $EmployeePayment;
    }

    public function index()
    {
        return $this->EmployeePayment->index();
    }

            
    public function store(EmployeePaymentRequest $request)
    {
        return $this->EmployeePayment->store($request);
    }

    public function update(EmployeePaymentRequest $request)
    {
        return $this->EmployeePayment->update($request);
    }
    
    public function destroy(Request $request)
    {
        return $this->EmployeePayment->destroy($request);
    }
}
