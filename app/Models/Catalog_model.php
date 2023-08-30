<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalog_model extends Model
{
protected $table = "crops";
protected $fillable =
[
    "id", "name", "dates", "description", "id_product"
];
    public function produc()
    {
        return $this->hasMany(Product::class);
    }

}

