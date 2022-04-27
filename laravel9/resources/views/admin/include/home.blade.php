@extends("admin.tema")
@section("master")
@section('title') Laravel - Kontrol Panel @endsection
@section("css")
<link rel="stylesheet" href="{{ asset('admin') }}/plugins/chartist/css/chartist.min.css">
<link rel="stylesheet" href="{{ asset('admin') }}/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
@endsection
<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            @if(session('hata'))
            <div class="alert alert-danger">{{ session('hata') }}</div>
          @endif

            
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
@endsection
@section("js")
<script src="{{ asset('admin') }}/plugins/chartist/js/chartist.min.js"></script>
    <script src="{{ asset('admin') }}/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>
    <script src="{{ asset('admin') }}/js/dashboard/dashboard-1.js"></script>
@endsection

