<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DistribusiModel extends Model
{
    use HasFactory;

    protected $table = 'detail_distribusi_barang';
    protected $primaryKey = 'id_distribusi';
    public $timestamps = false;

    protected $fillable = ['NUP', 'id_ruang', 'id_detail_status'];

    public function ruang(): BelongsTo{
        return $this->belongsTo(RuangModel::class, 'id_ruang', 'id_ruang');
    }

    public function status(): BelongsTo{
        return $this->belongsTo(StatusModel::class, 'id_detail_status', 'id_detail_status');
    }
}