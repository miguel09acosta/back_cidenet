<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'user_id',
        'status'
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
