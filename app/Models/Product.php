<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Stock;

class Product extends Model
{
    protected $fillable = [
        'name',
        'barcode',
        'description',
    ];

    public function stock()
    {
        return $this->hasMany(Stock::class);
    }
}
