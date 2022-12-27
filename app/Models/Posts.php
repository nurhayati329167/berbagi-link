<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Posts extends Model
{
    use HasFactory;
    use Sluggable;
    
    protected $table = 'link';

    protected $fillable = ['id_link', 'nomor','generate_link', 'judul_link', 'email','username', 'chatot'];

    public function sluggable(): array{
        return[
            'slug' => [
                'source' => 'link', 'user'
            ]
        ];
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function getRouteKeyName(){
        return 'deskripsi';
    }

    public function datadonatur()
    {
        // return $this->hasOne('App\DataDonatur');
        return $this->belongsTo(DataDonatur::class);
    }

    protected $primaryKey = 'id_konten';

    }
