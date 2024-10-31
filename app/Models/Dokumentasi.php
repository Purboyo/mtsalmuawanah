<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokumentasi extends Model
{
    use HasFactory;
    protected $table = 'dokumentasi';
    protected $fillable = ['nama', 'image', 'filter_id'];
    // Relasi ke Filter
    public function filter()
    {
        return $this->belongsTo(Filter::class);
    }
}
