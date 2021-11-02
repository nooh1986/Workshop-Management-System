<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PaymentRequest;
use App\Interfaces\PaymentRepositoryInterface;

class PaymentController extends Controller
{
    
    private $Payment;

    public function __construct(PaymentRepositoryInterface $Payment)
    {
        $this->Payment = $Payment;
    }

    public function index()
    {
        return $this->Payment->index();
    }

    
    public function store(PaymentRequest $request)
    {
        return $this->Payment->store($request);
    }

   
    public function update(PaymentRequest $request)
    {
        return $this->Payment->update($request);
    }

    
    public function destroy(Request $request)
    {
        return $this->Payment->destroy($request);
    }
}
