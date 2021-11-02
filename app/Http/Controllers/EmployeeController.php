<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\EmployeeRequest;
use App\Interfaces\EmployeeRepositoryInterface;

class EmployeeController extends Controller
{
        
    private $Employee;

    public function __construct(EmployeeRepositoryInterface $Employee)
    {
        $this->Employee = $Employee;
    }
    

    public function index()
    {
        return $this->Employee->index();
    }

        
    public function store(EmployeeRequest $request)
    {
        return $this->Employee->store($request);
    }

    
    public function update(EmployeeRequest $request)
    {
        return $this->Employee->update($request);
    }

    
    public function destroy(Request $request)
    {
        return $this->Employee->destroy($request);
    }
}
