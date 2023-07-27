<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paslon extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomor_urut',
        'nama_paslon',
        'foto',
        'informasi_paslon'
    ];

    public function vote()
    {
        return $this->belongsTo(vote::class, 'result', 'id');
    }

    
}
