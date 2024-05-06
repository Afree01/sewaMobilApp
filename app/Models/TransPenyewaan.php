<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransPenyewaan extends Model
{
    use HasFactory;

    protected $table = 'transaksi_penyewaan';
    protected $guarded = ['id'];
    protected $primaryKey = 'id';
    const CREATED_AT = 'insert_timestamp';
    const UPDATED_AT = 'lastupdate_timestamp';
}
