<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kunjungan extends Model
{
    use HasFactory;

    protected $table = 'kunjungan';

    protected $fillable = [
        'nama',
        'email',
        'institusi',
        'nomor_telepon',
        'jumlah_peserta',
        'tanggal_kunjungan',
        'tujuan_kunjungan',
        'foto',
        'status'
    ];

    protected $casts = [
        'tanggal_kunjungan' => 'date',
        'jumlah_peserta' => 'integer',
    ];
    
    // Accessor untuk URL foto
    public function getFotoUrlAttribute()
    {
        return $this->foto ? asset('storage/' . $this->foto) : null;
    }
    
    //Scope untuk query yang sering digunakan
    public function scopePending($query)
    {
        return $query->where('status', 'pending');
    }
    
    public function scopeDiterima($query)
    {
        return $query->where('status', 'diterima');
    }
    
    public function scopeByTanggal($query, $fromDate, $toDate = null)
    {
        $query->where('tanggal_kunjungan', '>=', $fromDate);
        
        if ($toDate) {
            $query->where('tanggal_kunjungan', '<=', $toDate);
        }
        
        return $query;
    }
}