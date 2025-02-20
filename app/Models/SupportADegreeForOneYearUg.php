<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SupportADegreeForOneYearUg extends Model
{
    protected $table = 'support_a_degree_for_one_year_ug';

    // Specify the fillable fields for mass assignment
    protected $fillable = [
        'program',
        'degree',
        'fee',
    ];
}
