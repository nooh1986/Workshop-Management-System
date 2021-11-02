<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AbsenceRequest;
use App\Interfaces\AbsenceRepositoryInterface;

class AbsenceController extends Controller
{
    
    private $Absence;

    public function __construct(AbsenceRepositoryInterface $Absence)
    {
        $this->Absence = $Absence;
    }
    

    public function index()
    {
        return $this->Absence->index();
    }

        
    public function store(AbsenceRequest $request)
    {
        return $this->Absence->store($request);
    }

    
    public function update(AbsenceRequest $request)
    {
        return $this->Absence->update($request);
    }

    
    public function destroy(Request $request)
    {
        return $this->Absence->destroy($request);
    }
}
