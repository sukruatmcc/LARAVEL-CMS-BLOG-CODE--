<?php

       namespace App\Models;
       
       use Illuminate\Database\Eloquent\Factories\HasFactory;
       use Illuminate\Database\Eloquent\Model;
       
       class Eglence extends Model
       {   
           use HasFactory;
           protected $table="eglence";
           protected $fillable=["id","başlık","selflink","kategori","resim","metin","tablo","anahtar","description","durum","sıra_no","created_at","uptadet_at"];
           
       }