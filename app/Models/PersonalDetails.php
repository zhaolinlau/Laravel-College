<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalDetails extends Model
{
    public $table = 'personaldetails';

    public $fillable = ['fullname', 
                        'phone', 
                        'email', 
                        'guardianname', 
                        'guardianphone', 
                        'guardiannric', 
                        'guardianemail', 
                        'relationship'];
}
