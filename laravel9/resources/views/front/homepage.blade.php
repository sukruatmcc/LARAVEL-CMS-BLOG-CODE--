@extends('front.layouts.master')
@section('title') Anasayfa  @endsection
@section('content')

        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-8 mx-auto">
                  @foreach($articles as $article)
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href="{{route('single',$article->slug)}}">
                            <h2 class="post-title">{{$article->title}}</h2>
                            <img src={{$article->image}}>
                            <h3 class="post-subtitle">{!! \Illuminate\Support\Str::limit($article->content,150) !!}</h3>
                        </a>
                    <p class="post-meta">Kategori : <a href="#">{{$article->getCategory->başlık}}</a>
                      <!--Burası kategorilere ait paylaşımları getirir. Mesela Kategori:Hizmetler gibi-->
                      <span  style="float:right;">{{$article->created_at->diffForHumans()}}</span>
                      <!--diffForHumans paylaşımın üzerinde ne kadar zaman geldiğini açıklar-->
                    </p>
                      </div>
                      @if(!$loop->last)<!--Sonuncuysa hr atmasın-->
                      <hr>
                      @endif
                   @endforeach
                  {{$articles->links("pagination::bootstrap-5")}}
                </div>
@include('front.widget.categoryWidget')
            </div>
        </div>

  @endsection
