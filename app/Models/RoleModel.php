<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleModel extends Model
{
    use HasFactory;

    protected $table = 'role';
    protected $primaryKey = 'id_role';

    protected $fillable = ['nama_role'];

    public function user(){
        return $this->hasMany(UserModel::class, 'id_user', 'id_user');
    }
}