@extends('layouts.index')
@section('content')
<div id="all">>
    <div class="container-fluid">

        <!--   *** DETAIL ***-->
        <div class="col-md-8 col-lg-9 content-column white-background">
          <div class="small-navbar d-flex d-md-none">
            <button type="button" data-toggle="offcanvas" class="btn btn-outline-primary"> <i class="fa fa-align-left mr-2"></i>Menu</button>
            <h1 class="small-navbar-heading"> <a href="index.html">Creative </a></h1>
          </div>
          <div class="row">
            <div class="col-lg-8">
              <div class="content-column-content">
                <h1>Me contacter ?</h1>
                <p class="lead">
                    Je suis disponible, motivé, organiséet résistant au stress, si bien
                    que je possède tous les atouts pour répondre à vos attentes sur ce poste. J'espère
                    ainsi avoir l'opportunité de vous rencontrer prochainement
                    afin de pouvoir vous démontrer ma détermination à rejoindre vos équipes
                </p>

                <form id="contact-form" method="post" action={{route('contact.store',$data->id)}} class="contact-form form m-2">
                  <div class="controls">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="name">Your firstname *</label>
                          <input type="text" name="name" id="name" required="required" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="surname">Your lastname *</label>
                          <input type="text" name="surname" id="surname" required="required" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="email">Your email *</label>
                      <input type="email" name="email" id="email" required="required" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="message">Your message for me *</label>
                      <textarea rows="4" name="message" id="message" required="required" class="form-control"></textarea>
                    </div>
                    <div>
                      <input type="submit" value="Send" class="btn btn-outline-primary">
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection
