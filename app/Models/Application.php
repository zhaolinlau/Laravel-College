<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;
    protected $fillable = ['level',
                           'nationality',
                           'campus',
                           'programme1',
                           'programme2',
                           'programme3',
                           'fullname',
                           'nric',
                           'phone',
                           'email',
                           'guardianname',
                           'guardianphone',
                           'guardiannric',
                           'guardianemail'];
}
