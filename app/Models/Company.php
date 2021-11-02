<?php

namespace App\Models;

use App\Models\Payment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function cuts()
    {
        return $this->hasMany(Cut::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
