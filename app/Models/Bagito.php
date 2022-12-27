<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bagito extends Model
{
    use HasFactory;
    protected $table = 'bagito';
    protected $primaryKey = 'id_to';
    protected $fillable = ['judul_to', 'link_to','generate'];
}
