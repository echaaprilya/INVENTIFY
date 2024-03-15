<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriModel extends Model
{
    use HasFactory;

    protected $table = 'category';
    protected $primaryKey = 'id_category';

    protected $fillable = ['kode_category', 'nama_category'];

    public function barang(){
        return $this->hasMany(BarangModel::class, 'id_barang', 'id_barang');
    }

}