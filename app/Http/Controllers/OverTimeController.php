<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\OverTimeRequest;
use App\Interfaces\OverTimeRepositoryInterface;

class OverTimeController extends Controller
{
    
    private $OverTime;

    public function __construct(OverTimeRepositoryInterface $OverTime)
    {
        $this->OverTime = $OverTime;
    }
    

    public function index()
    {
        return $this->OverTime->index();
    }

        
    public function store(OverTimeRequest $request)
    {
        return $this->OverTime->store($request);
    }

    
    public function update(OverTimeRequest $request)
    {
        return $this->OverTime->update($request);
    }

    
    public function destroy(Request $request)
    {
        return $this->OverTime->destroy($request);
    }
}
