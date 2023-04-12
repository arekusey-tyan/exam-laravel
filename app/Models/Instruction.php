<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instruction extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'instructions';
    protected $fillable = [
        'name',
        'description',
        'filePath',
        'userId',
        'verified',
        'created_at',
        'updeted_at'
    ];

    public function user(){
        return $this->hasOne(User::class, 'id', 'userId');
    }
}