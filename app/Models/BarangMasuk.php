<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangMasuk extends Model
{
    use HasFactory;
    protected $table = 'barangmasuk';
    protected $primaryKey = 'id_barang_masuk';
    protected $guarded = [];

    public function po()
    {
        return $this->belongsTo(Po::class, 'id_po');
    }
}
