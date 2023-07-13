<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    use HasFactory;

    protected $fillable = ['mahasiswa_id', 'username', 'password'];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class);
    }
}
