<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Claim extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'claims';
    protected $fillable = [
        'instructionId',
        'userId',
        'description',
        'created_at',
        'updeted_at'
    ];
}