<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupplierModel extends Model
{
    use HasFactory;

    protected $table = 'supplier';
    protected $primaryKey = 'id_supplier';

    protected $fillable = ['nama_supplier', 'no_telepon'];

    public function barang(){
        return $this->hasMany(BarangModel::class, 'id_barang', 'id_barang');
    }

}