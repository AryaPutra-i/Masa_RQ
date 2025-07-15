<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class prestasi extends Model
{
     protected $fillable = ['judul', 'deskripsi', 'tanggal', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
