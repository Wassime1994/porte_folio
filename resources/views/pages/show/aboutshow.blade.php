@extends('layouts.back')
@section('content')
<style>
    body {
        font-family: "Poppins",sans-serif;
    }

    .bg-my-color {
        background-color: #0E163B;
    }

    .text-my-color {
        color: #0E163B;
    }
</style>
<div class="bg-yellow-100 h-screen w-full flex justify-center items-center rounded">
        <div class="grid md:grid-cols-2 grid-cols-1 shadow-2xl bg-white xl:w-4/5 md:w-full md:h-4/5 h-full w-96 text-center text-sm rounded-sm">
            <!-- SVG ICON -->
            <div style="background-color: #0E163B" class="flex items-between">
                <img src={{$data->image}}  alt="">
            </div>
            <div class="bg-my-color text-white w-full h-full flex justify-center items-center px-3 text-center">
                <div class="h-full px-8 text-gray-100 lg:text-lg">
                    <img class="md:w-36 md:h-36 w-24 h-24 mx-auto"
                    src="https://cdn.dribbble.com/users/1522534/avatars/normal/767dc6a0a6f991d3d3e0d3fc378c2bcf.jpg"
                    alt="">
                    <div class="font-sans md:mb-3 mb-2">
                        <h2 class="uppercase font-medium">Domaine : {{$data->nom}}</h2>
                    </div>
                    <p class="lg:text-md text-sm">
                        Description :
                    </p>
                    <p class="mt-5 md:mb-10 mb-5 lg:text-md text-sm">
                        {{$data->description}}
                    </p>
                    <a class="transition-all duration-150 hover:bg-green-500 bg-green-400 md:px-12  sm:px-10 sm:py-3 px-8 py-2 text-center rounded-full md:text-xl text-md text-my-color font-medium"
                        href={{route('about.index')}}>
                        Revenir au Dashboard
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
