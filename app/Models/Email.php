<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    use HasFactory;
    protected $fillable = [
        'FullName', 'Email', 'Company', 'Content'
    ];
    protected $primaryKey= "ContactID ";
    protected $table = "my_mail";
    public $timestamps = false; 
}
