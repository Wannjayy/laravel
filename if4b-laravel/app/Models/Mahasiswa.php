<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'mahasiswa';

    protected $keyType = 'string';
    public $incrementing = false;
    protected $fillable = ['id', 'npm', 'nama_mahasiswa','tanggal_lahir','kota_lahir','foto','prodi_id'];



    public function prodi(){
        return $this->belongsTo(Prodi::class, 'prodi_id');
    }
}
