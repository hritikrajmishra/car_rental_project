<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Navbar_Two extends Model
{
    use HasFactory;
    protected $fillable=[
        'logo',
        'home_link',
        'budget_car',
        'muv_suv',
        'suv_car',
        'luxury',
        'self_drive',
        'contact',
    ];
}
