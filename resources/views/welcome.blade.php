<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <!-- Styles -->

    </head>
    <body class="antialiased">
    <div class="min-h-screen bg-gray-100 text-align-center">

        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                    <div class="row">
                    <a href="{{ url('/home') }}" class="col-12 btn btn-info font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>

                    </div>
                    @else
                    <div class="row">
                    <a href="{{ route('login') }}" class="col-6 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 btn btn-primary">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="col-6 ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 btn btn-success" >Register</a>
                        @endif
                    </div>

                    @endauth
                </div>
            @endif
            <div class="row">
                <h1 style="font-size:5vh" class="text-center col-12">WELCOME TO OUR BLOG
                </h1>
                <br>
                <h2 style="font-size:3vh" class="text-center col-12">If you want to post a blog, just log in in your dashboard. You are not a member yet, just register now.
                </h2>
            </div>
            

            <div class="row">
                <h1 class="text-center pb-2">You must be logged in to see the blog details</h1>
            </div>
            <div class="row p-3  justify-content-center">
                @foreach ($post as $post)
                    <div class="col-5 col-md-4 col-xl-3">
                        <div>
                            <img class="mx-auto d-block" style="max-width:200px" src="/postimage/{{$post->image}}" alt="" class="services_img">
                        </div>
                        <h4 class="text-center pb-2">{{ $post->title }}</h4>
                        <p>Post by <b>{{ $post->name }}</b></p>

                        <div class="mx-auto d-block text-center pb-3">
                            <a href="{{url('post_details',$post->id)}}">Read More</a>
                        </div>
                    </div>
                @endforeach

            </div>
            

        </div>
    </body>
</html>
