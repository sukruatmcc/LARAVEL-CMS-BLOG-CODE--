@extends('front.layouts.master')
@section('title') @foreach($pages as $page) {{$page->title}} @endforeach @endsection
@section('bg') @foreach($pages as $page) {{$page->image}} @endforeach @endsection
@section('content')

        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                  @foreach($pages as $page)
                    <p>{{$page->content}}</p>
                    @endforeach
                </div>
            </div>
        </div>

  @endsection
