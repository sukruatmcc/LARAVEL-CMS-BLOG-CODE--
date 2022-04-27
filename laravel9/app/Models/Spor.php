<?php

       namespace App\Models;

       use Illuminate\Database\Eloquent\Factories\HasFactory;
       use Illuminate\Database\Eloquent\Model;

       class Spor extends Model
       {
           use HasFactory;
           protected $table="spor";
           protected $fillable=["id","başlık","selflink","kategori","metin","tablo","anahtar","description","durum","sira_no","created_at","uptadet_at"];

       }
