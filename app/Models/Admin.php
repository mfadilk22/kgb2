<?php

namespace App\Models;

//use App\Models\Admin;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Admin extends Authenticatable
{
    //use Notifiable;

    protected $table = 'admin';

    // protected $guarded = 'admin';

    // protected $fillable = [
    //     'nip', 'user'
    // ];

    // protected $hidden = ['password']; 
}
