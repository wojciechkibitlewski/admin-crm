<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;

    protected $fillable = [
        'prefix',
        'title',
        'note',
        'noteForClient',
        'leadValue',
        'advanceValue',
        'source_id',
        'type_id',
        'executionDate',
        'executionTime',
        'user_id',
        'client_id'
    ];
}
