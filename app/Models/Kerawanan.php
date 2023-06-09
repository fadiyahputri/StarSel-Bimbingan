<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Murid;
use App\Models\Walas;

class Kerawanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'walas_id',
        'gurubk_id',
        'murid_id',
        'kerawanan_id',
        'kesimpulan',
        'created_at',
        'updated_at',
    ];

    protected $table = 'peta_kerawanan';
    
    public function murids()
    {
        return $this->hasMany(Murid::class, 'user_id', 'murid_id');
    }
    public function walas()
    {
        return $this->hasMany(Walas::class, 'user_id', 'walas_id');
    }

    public function jeniskerawanan()
    {
        return $this->belongsTo(jeniskerawanan::class, 'kerawanan_id','id');
    }
    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'id');
    }
    public function gurus()
    {
        return $this->hasMany(Gurubk::class,'user_id');
    }
}
