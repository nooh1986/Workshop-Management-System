<?php

namespace App\Models;

use App\Models\Time;
use App\Models\Work;
use App\Models\Absence;
use App\Models\OverTime;
use App\Models\EmployeePayment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employee extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function times()
    {
        return $this->hasMany(Time::class);
    }

    public function works()
    {
        return $this->hasMany(Work::class);
    }

    public function payments()
    {
        return $this->hasMany(EmployeePayment::class);
    }

    public function overtimes()
    {
        return $this->hasMany(OverTime::class);
    }

    public function absences()
    {
        return $this->hasMany(Absence::class);
    }
}
