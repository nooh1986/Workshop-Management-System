<?php

namespace App\Interfaces;


interface EmployeeRepositoryInterface
{
    public function index();

    public function store($request);

    public function update($request);

    public function destroy($request);
}