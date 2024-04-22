<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StatusModel extends Model
{
    use HasFactory;

    protected $table = 'detail_status_barang';
    protected $primaryKey = 'id_detail_status';
    public $timestamps = false;

    protected $fillable = ['id_barang', 'id_user', 'status_awal', 'status_akhir', 'approval_status'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(UserModel::class, 'id_user', 'id_user');
    }

    public function barang(): BelongsTo
    {
        return $this->belongsTo(BarangModel::class, 'id_barang', 'id_barang');
    }
}