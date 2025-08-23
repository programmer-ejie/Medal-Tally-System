<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CollegeTeam extends Model
{
    use HasFactory;

    protected $table = 'college_teams';

    protected $fillable = [
        'logo',
        'team_name',
        'alt_name',
        'department',
        'gold',
        'silver',
        'bronze',
    ];
}
