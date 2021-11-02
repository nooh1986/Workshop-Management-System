<?php

namespace App\Interfaces;


interface ExpenseRepositoryInterface
{
    public function index();

    public function store($request);

    public function update($request);

    public function destroy($request);
}