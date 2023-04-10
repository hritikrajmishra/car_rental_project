<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Navbar_one extends Model
{
    use HasFactory;

    protected $fillable=[
        'title',
'fav_icon',
'mobile',
'email',
'about_us',
'fb',
'insta',
'tweeter',
'ldn',
'pintrest',
'yt',
    ];
}
