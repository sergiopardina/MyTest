<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Lot extends Model
{
    use HasFactory;

    protected $table = 'lots';

    /**
     * Definition of relations of Lot and Category models: Many-to-many
     * @return BelongsToMany
     */
    public function categories():BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }
}
