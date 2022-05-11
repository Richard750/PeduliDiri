<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;

class perjalanan extends Model
{
    use HasFactory;

    protected $table = 'perjalanans';
    
    protected $fillable = [
        'id_user',
        'jam',
        'tanggal',
        'lokasi',
        'suhu',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
