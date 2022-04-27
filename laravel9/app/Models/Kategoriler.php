<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategoriler extends Model
{
    use HasFactory;
    protected $table='kategoriler';
    protected $fillable=['başlık','selflink','tablo','anahtar','description','durum','sira_no','created_at','updated_at'];

    public function articlesCount()
    {
      return $this->hasMany('App\Models\Articles','kategori_id','id')->count();
      //bağlanacağımız model //bağlanacağımız sütun //bağlanacığımız id
    }


}
