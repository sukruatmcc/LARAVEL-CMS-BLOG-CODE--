<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ModulController;
use App\Http\Controllers\AdminYonetim;
use App\Http\Controllers\İletisimm;
use App\Http\Controllers\Front\HomePage;

 //Web Routes FrontEnd

Route::get('/',[HomePage::class,'index'])->name('homepage');
Route::get('/sayfa',[HomePage::class,'index']);
Route::get('/contact',[HomePage::class,'contact'])->name('contact');
Route::post('/contact/send',[HomePage::class,'contactPost'])->name('contactPost');
Route::get('/kategori/{id}',[HomePage::class,'kategori'])->name('kategori');
Route::get('/blog/{slug}',[HomePage::class,'single'])->name('single');
Route::get('/{slug}',[HomePage::class,'pages'])->name('pages');














Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->prefix("yonetim")->group(function(){//kısa yol tanımlamasıdır.Hepsinde aynı aynanda yonetim tanılaması.
    Route::get('/',[AdminYonetim::class,'index'])->name('home');
    Route::get('/moduller',[ModulController::class,'index'])->name('modul-sonuc');
    Route::post('/modul-ekle',[ModulController::class,'modulEkle'])->name('modul_ekle');
    Route::get('/liste/{modul}',[AdminYonetim::class,'liste'])->name('liste');//{modul}=$modul
    Route::get('/ekle/{modul}',[AdminYonetim::class,'ekle'])->name('ekle');
    Route::post('/ekle_post/{modul}',[AdminYonetim::class,'eklePost'])->name('eklepost');
    Route::get('/duzenle/{modul}/{id}',[AdminYonetim::class,'duzenle'])->name('duzenlee');
    Route::post('/duzenle/{modul}/{id}',[AdminYonetim::class,'duzenlePost'])->name('duzenlepost');
    Route::get('/sil/{modul}/{id}',[AdminYonetim::class,'sil'])->name('sil');
    Route::get('/durum/{modul}/{id}',[AdminYonetim::class,'durum'])->name('durum');
    Route::get('/sil/{modul}/{id}',[AdminYonetim::class,'sil'])->name('sil');
    Route::get('/ayar',[AdminYonetim::class,'ayarlar'])->name('ayar');
    Route::post('/ayarpost',[AdminYonetim::class,'ayarPost'])->name('ayarpost');
    Route::get('/yorum',[AdminYonetim::class,'yorum'])->name('yorum');//yorumeklemeformu
    Route::post('/yorum-post',[AdminYonetim::class,'yorumPost'])->name('yorumpost');//yorumeklemeformu gönderimi
    Route::get('/yorumlarınız',[AdminYonetim::class,'yorumlar'])->name('yorumlarr');//yorumlisteleme
    Route::get('/yorum-goster',[AdminYonetim::class,'goster'])->name('goster');
    Route::get('/yorumsil/{id}',[AdminYonetim::class,'yorumSil'])->name('yorum_sil');//yorumeklemeformu
    Route::get('/iletisim',[İletisimm::class,'iletisim'])->name('iletisim');
    Route::post('/iletisim-post',[İletisimm::class,'iletisimPost'])->name('iletisimpost');

});
