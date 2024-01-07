<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
              <ul class="d-flex justify-content-around">
              <li>
              <a href="{{url('create_post')}}" class="btn btn-primary">Create post</a>
              </li>  
              <li>
              <a href="{{url('my_post')}}" class="btn btn-primary">My post</a>
              </li>  

              <li>
              <a href="{{url('/')}}" class="btn btn-primary">All post</a>
              </li>  
              </ul>

            </div>
            
        </div>
    </div>
</x-app-layout>
