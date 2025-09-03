<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacultyTeam extends Model
{
    use HasFactory;

    protected $table = 'faculty_teams';

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
