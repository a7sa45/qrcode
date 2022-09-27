<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qrcode extends Model
{
    use HasFactory;

    protected $fillable = [
        'url',
        'img',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
