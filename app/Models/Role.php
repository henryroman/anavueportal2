<?php

namespace App\Models;

use App\Http\Livewire\Users;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function users() {
        return $this->hasMany(User::class);
    }

    public function getDateForHumansAttribute()
    {
        if (!$this->created_at) {
            return null;
        }

        return $this->created_at->format('d M Y');
    }

}
