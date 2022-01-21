@extends('layouts.back')
@section('content')

<!-- component -->
<div>
    <div x-data="{ sidebarOpen: false }" class="flex h-screen bg-gray-200">
        <div :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false" class="fixed z-20 inset-0 bg-black opacity-50 transition-opacity lg:hidden"></div>
        <div class="flex-1 flex flex-col overflow-hidden">
            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
      <div class="container mx-auto px-6 py-8">
          <h3 class="text-gray-700 text-3xl font-medium">
              <a href={{route('user.create')}} class="bg-red-200 p-2">ADD SKILL </a>
          </h3>
          <div class="flex flex-col mt-8">
              <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                  <div
                      class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                      <table class="min-w-full">
                          <thead>
                              <tr>
                                  <th
                                      class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                      Matière</th>
                                  <th
                                      class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                     Description</th>
                                  <th
                                      class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                      Assimilé</th>
                                  <th
                                      class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                      Difficulté</th>
                                  <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
                              </tr>
                            </thead>
                          <tbody class="bg-white">
                              <tr>
                                  @forelse ($data as $item )
                                  <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                      <div class="flex items-center">
                                          {{-- IMAGES --}}
                                                    <div class="flex-shrink-0 h-10 w-10">
                                                        <img class="h-10 w-10 rounded-full"
                                                            src={{$item->image}}
                                                            alt="">
                                                    </div>
                                        {{--NOM --}}
                                                    <div class="ml-4">
                                                        <div class="text-sm leading-5 font-medium text-gray-900">{{$item->nom}}
                                                        </div>
                                                     </div>
                                    </td>
                                    {{-- DESRIPTION --}}
                                            <td class=" py-4 whitespace-no-wrap border-b border-gray-200">
                                                <div class="text-sm leading-5 text-gray-900">{{$item->description}}
                                                </div>
                                            </td>
                                    {{-- ASSIMILIE --}}
                                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                <span
                                                 class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                                            </td>

                                            {{-- DIFFICULTE --}}
                                              <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">
                                                {{$item->difficulte}} /10</td>
                                            {{-- BOUTTON EDIT --}}
                                            <td>
                                                <div class="flex">
                                                    <button class=" mx-3 bg-green-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                                        <a href={{route('user.show',$item->id)}}>Show</a>
                                                    </button>
                                                    <button class="mx-3 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                                        Edit
                                                      </button>
                                                      <form action={{route('user.destroy',$item->id)}}>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="mx-3 bg-red-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">
                                                          Delete
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </td>
                                </tr>
                                            @empty
                                <h2> Aucun skills ajouté pour l'instant</h2>
                                @endforelse

                        </tbody>
                    </table>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</div>


@endsection