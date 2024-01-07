<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


<x-app-layout>
<x-slot name="header">
        <ul class="d-flex justify-content-around pb-5">
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
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            
                
              <div class="row p-3  justify-content-center">
                @foreach ($data as $data)
                    <div class="col-5 col-md-4 col-xl-3">
                        <div class="text-center">
                            <img  class="mx-auto d-block" style="max-width:200px" src="/postimage/{{$data->image}}" alt="" class="services_img">
                        </div>
                        <h4 class="text-center pb-2">{{ $data->title }}</h4>
                        <p class="text-start pb-2">{{ $data->description }}</p>
                        <p>Post by <b>{{ $data->name }}</b></p>
                        <div class="text-center">
                        <a href="{{url('my_post_del',$data->id)}}" class="btn btn-danger" onclick="return confirm(' Are you sure you want to delete this?')">Delete</a>
                        <a href="{{url('update_my_post',$data->id)}}" class="btn btn-primary">Update</a>
                        
                        </div>
      
                    </div>
                @endforeach
                
            </div>
            </div>
        </div>
    </div>
</x-app-layout>
