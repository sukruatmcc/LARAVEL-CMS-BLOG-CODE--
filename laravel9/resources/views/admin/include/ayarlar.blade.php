@extends("admin.tema")
@section("master")
@section("css")
@endsection

<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
               <div class="row">
                <div class="col-lg-12">
                    @if(session('basarili'))
                    <div class="alert alert-success">{{ session('basarili') }}</div>
                  @endif
                  @if(session('hata'))
                    <div class="alert alert-danger">{{ session('hata') }}</div>
                  @endif
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Site Ayarları</h4>
                            <p class="text-muted m-b-15 f-s-12">
                            <div class="basic-form">
                                <form action="{{ route('ayarpost')}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label>Site Başlık</label>
                                        <input type="text" class="form-control input-default"  placeholder="Başlık"  name="title" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Anahtar</label>
                                        <input type="text" class="form-control input-flat"  placeholder="keywords" name="keywords" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <input type="text" class="form-control input-flat"  placeholder="Description" name="description" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Logo</label>
                                        <input type="file" class="form-control input-flat"  placeholder="Logo Seçiniz" name="logo">
                                    </div>
                                    <div class="form-group">
                                        <label>Favicon</label>
                                        <input type="file" class="form-control input-flat"  placeholder="Favicon Seçiniz" name="favicon">
                                    </div>

                                    <div class="form-group">
                                        <label>Site Durum</label>
                                        <select  class="form-control input-default"   name="bakimmodu" required>
                                            <option>Siteyi Yayına Aç / Aktif</option>
                                            <option>Bakim Moduna Al / Pasif</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary" value="Kaydet" name="ilet">
                                    </div>


                                </form>
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
@endsection
