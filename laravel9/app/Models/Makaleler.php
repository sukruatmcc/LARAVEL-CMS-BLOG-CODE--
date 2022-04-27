<?php

       namespace App\Models;

       use Illuminate\Database\Eloquent\Factories\HasFactory;
       use Illuminate\Database\Eloquent\Model;

       class Makaleler extends Model
       {
           use HasFactory;
           protected $table="makaleler";
           protected $fillable=["id","başlık","selflink","kategori","metin","tablo","anahtar","description","durum","sira_no","created_at","uptadet_at"];

       }
