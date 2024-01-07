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


    <div class="col-md-12">
        <div class="text-center">
            <img class="mx-auto d-block" style="padding: 20px; max-width:30vw align-self-center" src="/postimage/{{$post->image}}" alt="" class="services_img">
        </div>
        <h4 class="align-self-center text-center"> {{ $post->title }}</h4>
        <h4 class="align-self-center text-center"> {{ $post->description }}</h4>
        <p>Post by <b>{{ $post->name }}</b></p>
        <livewire:comments :model="$post"/>
        <!-- <div class="btn btn-primary">
            <a href="{{url('post_details',$post->id)}}">Read More</a>
        </div> -->
    </div>

</x-app-layout>
