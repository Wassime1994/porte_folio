@extends('layouts.back')
@section('content')
    <!-- component -->
<div class="md:p-12 bg-indigo-100 flex flex-row w-screen h-screen">
    <form action={{route('user.update' , $data->id)}} method="POST"class="md:w-1/2-screen m-0 p-5 bg-white w-full tw-h-full shadow md:rounded-lg">
        @csrf
        @method('PUT')
      <div class="text-2xl text-indigo-900">ADD <small class="pl-2 text-gray-500">Nouveau Skill </small></div>

      <div class="flex-col flex py-3">
        <label class="pb-2 text-gray-700 font-semibold">Nom</label>
        <input value={{$data->nom}} name="nom" type="text" class="p-2 shadow rounded-lg bg-gray-100 outline-none focus:bg-gray-200" >
      </div>

      <div class="flex-col flex py-3">
        <label class="pb-2 text-gray-700 font-semibold">Description</label>
        <input value={{$data->description}} name="description" type="text" class="p-2 shadow rounded-lg bg-gray-100 outline-none focus:bg-gray-200" >
      </div>

      <div class="flex-col flex py-3">
        <label class="pb-2 text-gray-700 font-semibold">Difficulte</label>
        <input value={{$data->difficulte}} name="difficulte" type="text" class="p-2 shadow rounded-lg bg-gray-100 outline-none focus:bg-gray-200">
      </div>

      <div class="flex-col flex py-3">
        <label class="pb-2 text-gray-700 font-semibold">Image</label>
        <input value={{$data->image}} name="image" type="text" class="p-2 shadow rounded-lg bg-gray-100 outline-none focus:bg-gray-200">
      <div class="mt-2 py-10">
        <button type="submit" class="p-3 bg-indigo-400 text-white w-full hover:bg-indigo-300">Submit Form</button>
      </div>
      <div class="mt-2 pb-2">
        <button type="submit" class="py-3 bg-red-400 text-white w-full hover:bg-indigo-300">
            <a href={{route('user.dashboard')}}> Annuler</a>
        </button>
      </div>

      <div class=" my-10 transform transition cursor-pointer hover:-translate-y-2 ml-10 relative flex items-center px-6 py-4 bg-blue-600 text-white rounded mb-10 flex-col md:flex-row space-y-4 md:space-y-0">
        <!-- Dot Follwing the Left Vertical Line -->
        <div class="w-5 h-5 bg-red-600 absolute -left-10 transform -translate-x-2/4 rounded-full z-10 mt-2 md:mt-0"></div>

        <!-- Line that connecting the box with the vertical line -->
        <div class="w-10 h-1 bg-red-300 absolute -left-10 z-0"></div>

        <!-- Content that showing in the box -->
        <div class="flex-auto">
          <p>
            Il n'y a qu'un secret pour mener le monde.. c'est d'être fort .
            <br>
            Parce qu'il n'y a dans la force ni erreur, ni illusion ; c'est le vrai, mis à nu.
          </p>
          <h3> <span class="text-red-300">Napoléon Bonaparte</span>
          </h3>
        </div>
      </div>
    </form>
  </div>
@endsection
