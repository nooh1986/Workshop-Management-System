<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;
use App\Interfaces\ProfileRepositoryInterface;

class ProfileController extends Controller
{
    private $Profile;

    public function __construct(ProfileRepositoryInterface $Profile)
    {
        $this->Profile = $Profile;
    }

    public function dashboard()
    {
        return $this->Profile->dashboard();
    }

    public function profile()
    {
        return $this->Profile->profile();
    }
    
    
    public function update(ProfileRequest $request)
    {
        return $this->Profile->update($request);
    }
}
