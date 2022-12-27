<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fundraise extends Model
{
    use HasFactory;
    protected $fillable = [
        'target','title','id_konten','deskripsi','id_users','id_qurban','hrgqurban','nama','gambar_fdn','artikel','end_date','terkumpul','kutama'
    ];

    public function getRouteKeyName(){
        return 'deskripsi';
    }

    protected $primaryKey = 'id_fundraise';
    public $incrementing = false;
}
