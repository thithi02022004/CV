<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infomation extends Model
{
    use HasFactory;
    protected $fillable = [
        'FullName', 'Target', 'Image', 'DateOfBirth', 'PlaceOfBirth', 'Nation', 'Gender', 'MarialStatus', 'Nationality', 'ContactEmail', 'ContactPhone', 'Hobbies'
    ];
    protected $primaryKey= "MyID";
    protected $table = "my_infomation";
    public $timestamps = false; 
}
