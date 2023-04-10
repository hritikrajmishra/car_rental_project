<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormData extends Model
{
    use HasFactory;
    protected $fillable=[
        'Name',
        'Tour',
'Email',
'Mobile',
'Country',
'Pickup',
'drop',
'Pickuplocation',
'Remarks',
    ];
}
