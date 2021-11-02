<?php

namespace App\Interfaces;


interface ProfileRepositoryInterface
{
    public function dashboard();
    
    public function profile();

    public function update($request);
}