@extends('front.layouts.master')
@section('title') @foreach($articles as $article) {{$article->title}} @endforeach @endsection
@section('bg') @foreach($articles as $article) {{$article->image}} @endforeach @endsection
@section('content')

        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-9 col-xl-7">
              @foreach($articles as $article)
                <p>{!!$article->content!!}</p><!--Güzel görünüm için ünlem kullan-->
                @endforeach
            </div>
            @include('front.widget.categoryWidget')
        </div>



  @endsection
