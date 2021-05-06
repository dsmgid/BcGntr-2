<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Barang;
class Harga extends Model
{
    use HasFactory;
    protected $table = 'harga';
    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }
}
