<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    use HasFactory;
    protected $table='articles';
    protected $fillable=['kategori_id','title','image','content','hit','slug','created_at','updated_at'];

    public function getCategory()
    {
      return $this->hasOne('App\Models\Kategoriler','id','kategori_id');
    }

}
