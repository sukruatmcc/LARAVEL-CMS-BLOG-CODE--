<?php

       namespace App\Models;

       use Illuminate\Database\Eloquent\Factories\HasFactory;
       use Illuminate\Database\Eloquent\Model;

       class Kurumsal extends Model
       {
           use HasFactory;
           protected $table="kurumsal";
           protected $fillable=["id","başlık","selflink","kategori","metin","tablo","anahtar","description","durum","sira_no","created_at","uptadet_at"];

       }
