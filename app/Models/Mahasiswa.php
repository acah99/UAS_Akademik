<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    public $primaryKey = 'id_mahasiswa';
    protected $fillable = ['nama', 'nim', 'jurusan', 'semester'];

    public function login()
    {
        return $this->hasOne(Login::class);
    }
}
