<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'date',
        'kaban',
        'note',
        'completed',
        'lead_id',
        'user_id',
    ];
}
