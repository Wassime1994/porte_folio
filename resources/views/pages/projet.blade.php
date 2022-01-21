@extends('layouts.index')
@section('content')
<div class="container-fluid">
    <div class="row row-offcanvas row-offcanvas-left">

      <!--   *** PORTFOLIO ***-->
      <div class="col-md-8 col-lg-9 content-column">
        <div class="small-navbar d-flex d-md-none">
          <button type="button" data-toggle="offcanvas" class="btn btn-outline-primary"> <i class="fa fa-align-left mr-2"></i>Menu</button>
          <h1 class="small-navbar-heading"> <a href="index.html">Creative </a></h1>
        </div>
        <div class="grid row flex ">
            @forelse ($data as $item )
          <div class="col-md-9 col-lg-6 grid-item">
            <div class="box-masonry">
                 <a href={{route('user.show')}} title="" class="box-masonry-image with-hover-overlay">
                <img src={{$item->image}} alt="" class="img-fluid "></a>
              <div class="box-masonry-hover-text-header"> <a href={{route('user.show')}} class="tile-link">  </a>
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
    <button >Ajouter un skill</button>
</div>
</div>
@endsection
