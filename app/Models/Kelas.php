<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
// use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Kelas extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'tb_kelas';
    protected $primary = 'kode_kelas';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'kode_kelas',
        'kode_prodi',
        'nama_kelas',
        'created_at',
        'updated_at',
        'deleted_at'
    ];  

    public function mahasiswa(): HasMany
    {
        return $this->hasMany(Mahasiswa::class, 'kode_kelas', 'kode_kelas');
    }
}
