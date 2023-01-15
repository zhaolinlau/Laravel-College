<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BasicDetails extends Model
{
    public $table = 'basicdetails';

    public $fillable = ['type',  
                        'application', 
                        'nationality', 
                        'nric'];
}
