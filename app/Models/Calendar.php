<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Calendar;

class Calendar extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'executionDate',
        'executionTime',
        'user_id',
        'lead_id',
        'todo_id',
    ];
}
