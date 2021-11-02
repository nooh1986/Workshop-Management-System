<?php

namespace App\Interfaces;


interface EmployeePaymentRepositoryInterface
{
    public function index();

    public function store($request);

    public function update($request);

    public function destroy($request);

}