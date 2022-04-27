<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kategoriler;
use App\Models\Articles;
use App\Models\Pages;
use App\Models\Contact;


class HomePage extends Controller
{
  function __construct()
  {
      return view()->share('pages',Pages::get());
  }
    public function index()
    {
      $articles=Articles::orderBy('created_at','DESC')->paginate(1);//articles verilerini sayfaya çekme
      $articles->withPath(url('sayfa'));
      $pages=Pages::orderBy('created_at','ASC')->get();
      $kategori=Kategoriler::get();//kategori verilerini sayfaya çeke
        return view('front.homepage',compact('kategori','articles','pages'));
    }

    public function single($slug)
    {
      $articles=Articles::orderBy('created_at','DESC')->get();
      $articles=Articles::whereSlug($slug)->get();
      $kategori=Kategoriler::get();//kategori verilerini sayfaya çekme
      return view('front.single',compact('kategori','articles'));
    }

    public function kategori($id)
    {
      $kategori=Kategoriler::whereId($id)->get() ?? abort(404);
      $kategori=Kategoriler::inRandomOrder()->get();
      $articles=Articles::where('kategori_id',$id)->get();//zorlandığımız kısım
      return view('front.category',compact('kategori','articles'));
    }

    public function pages($slug)
    {
      $pages=Pages::whereSlug($slug)->get() ?? abort(404);
      return view('front.pages',compact('pages'));
    }

    public function contact()
    {
      return view('front.contact');
    }

    public function contactPost(Request $request)
    {
      $request->validate([
          'başlık'=>'required|string',
          'kategori'=>'required',
          'anahtar'=>'required',
          'description'=>'required',
      ]);
      $ad=$request->ad;
      $email=$request->email;;
      $image=$request->image;
      $telefon=$request->telefon;
      $mesaj=$request->mesaj;
      Contact::create([
          'ad'=>$ad,
          'email'=>$email,
          'image'=>$image,
          'telefon'=>$telefon,
          'mesaj'=>$mesaj,

      ]);
      return redirect()->back();

      //print_r($request->post());
    }


}
