<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CompanyRequest;
use App\Interfaces\CompanyRepositoryInterface;

class CompanyController extends Controller
{
    
    private $Company;

    public function __construct(CompanyRepositoryInterface $Company)
    {
        $this->Company = $Company;
    }


    public function index()
    {
        return $this->Company->index();
    }

    
    public function store(CompanyRequest $request)
    {
        return $this->Company->store($request);
    }

    
    public function update(CompanyRequest $request)
    {
        return $this->Company->update($request);
    }

    
    public function destroy(Request $request)
    {
        return $this->Company->destroy($request);
    }
}
