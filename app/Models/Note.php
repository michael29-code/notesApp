<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Note extends Model
{
    use HasFactory;

    protected $table = 'notes';
    protected $fillable = ['title','body','idKategori','image'];
    protected $primaryKey = 'id'; 

    public function kategori(): BelongsTo
    {
        return $this->belongsTo(Kategori::class,'idKategori');
    }
}
