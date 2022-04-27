<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table='contact';
    protected $fillable=['ad','email','image','telefon','message','created_at','updated_at'];
    use HasFactory;
}
