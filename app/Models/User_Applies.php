<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserApply extends Model
{
    use HasFactory;

    public $table = 'user_applies';

    protected $fillable = ['level',  
                        'nationality', 
                        'nric',
                        'campus',  
                        'levelofstudy', 
                        'programme1',
                        'faculty1',  
                        'programme2',
                        'faculty2', 
                        'programme3',
                        'faculty3',  
                        'fullname', 
                        'phone',
                        'email',
                        'guardianname', 
                        'guardianphone',
                        'guardiannric',  
                        'guardianemail'];
}
