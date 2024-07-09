<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function items()
    {
        return $this->belongsToMany(Item::class);
    }

    public function getDateForHumansAttribute()
    {
        return $this->created_at->format('d M Y');
    }
}
