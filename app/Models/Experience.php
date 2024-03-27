<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class experience extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'ProjectName', 'Team', 'Position', 'Company', 'StartDay', 'EndDate', 'Responsibilities', 'Contribute', 'Tools', 'LinkCode', 'LinkWeb', 'Datas', 'SkillsFrontend', 'SkillsBackend','Image' 
    ];
    protected $primaryKey= "ExpID";
    protected $table = "my_experience";
    public $timestamps = false; 
}
