<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    /**
     * Definition of relations of Lot and Category models: Many-to-many
     * @return BelongsToMany
     */
    public function lots():BelongsToMany
    {
        return $this->belongsToMany(Lot::class, 'lots_categories');
    }
}
