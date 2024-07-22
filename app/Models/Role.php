<?php


// app/Models/Role.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Permission\Models\Role as SpatieRole;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Role extends SpatieRole
{
    use HasFactory;

    protected $guarded = [];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }

    public function getDateForHumansAttribute()
    {
        if (!$this->created_at) {
            return null;
        }

        return $this->created_at->format('d M Y');
    }
}
