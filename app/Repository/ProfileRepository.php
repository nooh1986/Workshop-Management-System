<?php


namespace App\Repository;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Interfaces\ProfileRepositoryInterface;

class ProfileRepository implements ProfileRepositoryInterface 
{

    public function dashboard()
    {
        return view('dashboard');
    }


    public function profile()
    {
        return view('editprofile');
    }


    public function update($request)
    {
        try
        {
            if($request->password != '')
            {
                $user = User::findorfail($request->id);

                $data['name']  = $request->name;
                $data['email'] = $request->email;
                $data['password'] = Hash::make($request->password);

                $user->update($data);

                session()->flash('edit');
                return redirect()->route('dashboard');
            }

            else
            {
                $user = User::findorfail($request->id);

                $data['name']  = $request->name;
                $data['email'] = $request->email;
                                            
                $user->update($data);
                
                session()->flash('edit');
                return redirect()->route('dashboard');
            }
        }
        catch (\Exception $e)
        {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
    
}    