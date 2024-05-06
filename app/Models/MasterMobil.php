<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterMobil extends Model
{
    use HasFactory;

    protected $table = 'master_mobil';
    protected $guarded = ['id'];
    protected $primaryKey = 'id';
    const CREATED_AT = 'insert_timestamp';
    const UPDATED_AT = 'lastupdate_timestamp';
}
