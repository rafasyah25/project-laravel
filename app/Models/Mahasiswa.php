<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Mahasiswa extends Authenticatable
{
    use HasFactory, SoftDeletes;

    protected $table = 'tb_mahasiswa';
    protected $primaryKey = 'nim';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'nim',
        'kode_kelas',
        'nama_mahasiswa',
        'email',
        'jk',
        'alamat',
        'password',
        'username',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function kelas(): BelongsTo {
        return $this->belongsTo(kelas::class, 'kode_kelas', 'kode_kelas');
    }
}
