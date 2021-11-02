<?php

namespace App\Interfaces;


interface OverTimeRepositoryInterface
{
    public function index();

    public function store($request);

    public function update($request);

    public function destroy($request);
}