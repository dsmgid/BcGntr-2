<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Harga;

class Barang extends Model
{
    use HasFactory;
    protected $table = 'barang';
    public function harga()
    {
        return $this->hasMany(Harga::class, 'barang_id');
    }
}
