<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class faq_programme extends Model
{
    use HasFactory;
    protected $fillable=['Question','Answer'];
}
