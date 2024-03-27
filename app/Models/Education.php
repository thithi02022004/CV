<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;
    protected $fillable = [
        'Education', 'Qualifications', 'Degree', 'ImageDegree', 'ImageQualifications', 'YearOfGraduation', 'Point', 'Status'
    ];
    protected $primaryKey= "EduID";
    protected $table = "my_education";
    public $timestamps = false; 
}
