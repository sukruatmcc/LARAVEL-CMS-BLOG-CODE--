@isset($kategori)
<!--Kategori verilerini sayfada çekme işlemi-->
<div class="col-md-3">
<div class="card">
    <div class="card-header">
           Kategoriler
    </div>
        <div class="list-group">
        @foreach($kategori as $category)
        <li class="list-group-item @if(Request::segment(2)==$category->id) active @endif"><!--segment link olayı gibi önemli birdaha bak!-->
            <a href="{{route('kategori',$category->id)}}" class="list-group-item">{{$category->başlık}}<!--Burası kategorileri listeler-->
              <span class="badge bg-danger"  style="float:right">{{$category->articlesCount()}}</span></a>
        </li>
            @endforeach()
          </div>

    </div>
</div>
@endisset
