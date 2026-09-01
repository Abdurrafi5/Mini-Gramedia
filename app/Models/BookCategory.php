<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable(['name'])]
class BookCategory extends Model
{
    // Kata jamak menggunakan s / es karena bookcategories berperan sebagai many pada relasi one to many
    public function books(): HasMany {
        return $this->hasMany(Book::class);
    }
}
