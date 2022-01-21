@extends('layouts.index')
@section('content')
<div class="container-fluid">
    <div class="row row-offcanvas row-offcanvas-left">
      <!--   *** PORTFOLIO ***-->
        <div class="grid row flex ">
            @forelse ($data as $item )
          <div class="col-md-9 col-lg-6 grid-item">
            <div class="box-masonry">
                 <a title="" class="box-masonry-image with-hover-overlay">
                <img  src={{$item->image}} alt="" class="img-fluid imgProject "></a>
              <div class="box-masonry-hover-text-header">
                <h4>{{$item->nom}}</h4>
                <div class="box-masonry-desription">
                  <p>{{$item->description}}</p>
                  <p>Difficulé : {{$item->difficulte}} /10</p>
                </div>
              </div>
            </div>
          </div>
          @empty
          <h2 class="text-center"> Aucune skills encore entré</h2>
          @endforelse
          <!--   *** PORTFOLIO END ***-->
        </div>
    </div>
</div>
</div>
@endsection
