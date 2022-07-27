<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{

    protected $table = 'apartments';
    protected $fillable = ['resident','user_id', 'building_id', 'number'];

    public function building()
    {
        return $this->BelongsTo(Building::class, 'building_id', 'id');
    }
}
