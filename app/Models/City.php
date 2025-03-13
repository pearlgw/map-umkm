<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class City extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function umkms(): HasMany
    {
        return $this->hasMany(DataUmkm::class, 'city_id', 'id');
    }
}
