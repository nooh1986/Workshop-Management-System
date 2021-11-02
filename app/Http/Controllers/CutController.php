<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\CutRepositoryInterface;
use App\Http\Requests\CutRequest;

class CutController extends Controller
{
    
    private $Cut;

    public function __construct(CutRepositoryInterface $Cut)
    {
        $this->Cut = $Cut;
    }


    public function index()
    {
        return $this->Cut->index();
    }

    
    public function create()
    {
        return $this->Cut->create();
    }

    
    public function store(CutRequest $request)
    {
        return $this->Cut->store($request);
    }

    
    public function show($id)
    {
        return $this->Cut->show($id);
    }

    
    public function edit($id)
    {
        return $this->Cut->edit($id);
    }

    
    public function update(CutRequest $request)
    {
        return $this->Cut->update($request);
    }

    
    public function destroy(Request $request)
    {
        return $this->Cut->destroy($request);
    }


    public function end(Request $request)
    {
        return $this->Cut->end($request);
    }
}
