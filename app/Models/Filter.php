<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filter extends Model
{
    use HasFactory;
    protected $table = 'filter';
    protected $fillable = ['filter'];
        // Relasi ke Filter
        public function dokumentasi()
        {
            return $this->hasMany(Dokumentasi::class);
        }
}
