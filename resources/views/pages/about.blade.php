@extends('layouts.index')
@section('content')
<div id="all">
    <div class="container-fluid">
      <div class="row row-offcanvas row-offcanvas-left">
        <!--   *** DETAIL ***-->
        <div class="col-md-8 col-lg-9 content-column white-background">
          <div class="small-navbar d-flex d-md-none">
            <button type="button" data-toggle="offcanvas" class="btn btn-outline-primary"> <i class="fa fa-align-left mr-2"></i>Menu</button>
            <h1 class="small-navbar-heading"> <a href="index.html">Creative </a></h1>
          </div>
          <div class="row">
            <div class="col-xl-10">
              <div class="content-column-content">
                  <h1>Me concernant .. </h1>
                  @forelse ($data as $item )

                  <h1>{{$item->titre}}</h1>
                  <p class="lead">{{$item->description}}</p>
                  <div class="row">

                      <div class="col-md-12">
                          <p><img src={{$item->image}} alt="This is me" class="image img-fluid border border-dark rounded-top" ></p>

                        </div>
                    </div>
                </div>
                @empty
                <h1> Rien à afficher ici</h1>
                @endforelse
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
