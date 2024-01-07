<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
            <ul class="d-flex justify-content-around py-3">
            <li>
                        <a href="{{url('post_page')}}" class="btn btn-primary">Add Post</a>
                    </li>
                    <li>
                        <a href="{{url('show_post')}}" class="btn btn-primary">Show Post</a>
                    </li> 

              <li>
              <a href="{{url('/')}}" class="btn btn-primary">All post</a>
              </li>  
            </ul>
        </h2>
    </x-slot>

    <div class="page-content">
        <h1 class="text-center h1 text-primary">Update post</h1>
        <form action="{{url('update_post',$post->id)}}" method="POST" enctype="multipart/form-data">
           @csrf
                    <div class="justify-content-center">
                        <div class="row">
                            <label class="col-12 text-center" for="">Post Title</label>
                        </div>
                        <div class="row mx-auto px-5">
                            <input class="col-12" type="text" name="title" value="{{$post->title}}">
                        </div>

                    <div class="row">
                        <label class="col-12 text-center" for="">Post Description</label>
                    </div>
                    <div class="row mx-auto px-5">
                        <textarea class="col-12" name="description" >{{$post->description}}</textarea>
                    </div>
                    <div  class=" text-center">
                        <label>Image</label>
                        <div class=" text-center">
                            <img class="mx-auto d-block" style="max-width: 200px; max-heigth: 100px" src="/postimage/{{$post->image}}" alt="">
                    </div>
                    <div class=" text-center">>
                        <label for="">Update Image</label>

                        <input type="file" name="image">
                    </div>
                    <div class="mx-auto text-center">

                        <input type="submit" style="background-color:blue;" value="Update" class="btn btn-primary">
                    </div>
        </form>
    </div>
</x-app-layout>
