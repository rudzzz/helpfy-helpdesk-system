<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PHPUnit\Framework\Attributes\Ticket;

class Category extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name'
    ];

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}
