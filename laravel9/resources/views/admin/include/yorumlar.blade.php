@extends("admin.tema")
@section("master")
@section("css")
<link href="{{ asset('admin') }}/plugins/tables/css/datatable/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection

<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid"> 
                <div class="row">
                    <div class="col-md-12">
                    @if(session('basarili'))
                <div class="alert alert-success">{{ session('basarili') }}</div>
              @endif
              @if(session('hata'))
                <div class="alert alert-danger">{{ session('hata') }}</div>
              @endif
                    <a href="{{ route('yorum') }}" class="btn btn-primary" style="float:right">Yeni Yorum Ekle</a>
                </div>
                <br><br>
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Yorum Listesi</h4>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                        <tr>
                                            <th>Sıra</th>
                                            <th>Kullanıcı Adı</th>
                                            <th>Yorum</th>
                                            <th>Tarih</th>
                                            <th>İşlemler</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     @if ($veriler)
                                        @foreach ($veriler as $bilgiler )                                              
                                        <tr><td>{{ $loop->iteration }}</td><!--bu sıra numarası için özel bir kod. iteration=sayaç görevi görür.-->
                                            <td>{{ $bilgiler->kullanici_adi }}</td>
                                            <td>{{ mb_substr(strip_tags($bilgiler->yorum),0,10,'UTF-8')}}... </td><!--htmlde taglardan temizleme kodu-->
                                            <td>{{ $bilgiler->created_at }}</td>
                                            <td>
                                                <a href="{{ route('goster') }}" class="btn btn-success">Oku</a>
                                                <a href="{{ route('yorum_sil',$bilgiler->id) }}" class="btn btn-danger">Sil</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                     @endif 
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Sıra</th>
                                            <th>Kullanıcı Adı</th>
                                            <th>Yorum</th>
                                            <th>Tarih</th>
                                            <th>İşlemler</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                    
                            </div>
                        </div>
                    </div>
               
        <!--**********************************
            Content body end
        ***********************************-->


@endsection
@section("js")
    <script src="{{ asset('admin') }}/plugins/tables/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('admin') }}/plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="{{ asset('admin') }}/plugins/tables/js/datatable-init/datatable-basic.min.js"></script>
@endsection

