<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    use HasFactory;
    protected $table = 'prodi';

    protected $keyType = 'string';
    public $incrementing = false;
    protected $fillable = ['id', 'nama_prodi', 'fakultas_id'];


    public function fakultas(){
        return $this->belongsTo(Fakultas::class, 'fakultas_id');
    }
    
    public function mahasiswa()
    {
        return $this->hasMany(Mahasiswa::class);
    }
}
