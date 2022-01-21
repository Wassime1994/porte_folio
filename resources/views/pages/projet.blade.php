@extends('layouts.index')
<style>
    .user-pic {
        width: 150px;
        height: 150px;
        overflow: hidden;
        border-radius: 100%;
        margin: 20px auto 20px;
        border-left: 3px solid #ddd;
        border-right: 3px solid #ddd;
        border-top: 3px solid #007bff;
        border-bottom: 3px solid #007bff;
        transform: rotate(-30deg);
        transition: 0.5s;
    }
    .card-box:hover .user-pic {
        transform: rotate(0deg);
        transform: scale(1.1);
    }
    .card-box {
        padding: 15px;
        background-color: #fdfdfd;
        margin: 20px 0px;
        border-radius: 10px;
        border: 1px solid #eee;
        box-shadow: 0px 0px 8px 0px #d4d4d4;
        transition: 0.5s;
    }
    .card-box:hover {
        border: 1px solid #007bff;
    }
    .card-box p {
        color: #808080;
    }
    </style>
@section('content')
<div class="container">
    <div class="row">
        @forelse ($data as $item )
        <div class="col-md-4">
            <div class="card-box text-center">
                <div class="user-pic">
                    <img src={{$item->image}}class="img-fluid" alt="User Pic">
                </div>
                <h4>{{$item->titre}}</h4>
                <h6>{{$item->language}}</h6>
                <hr>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                <hr>
            </div>
        </div>
        @empty
        <h2>Aucunes valeurs encore entrées</h2>
        @endforelse

    </div>
</div>

@endsection
