<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="page-content">
            <h1 class="text-center h1 text-primary">All Post</h1>
            <table class="table">
                <tr>
                    <th>Post title</th>
                    <th>Description</th>
                    <th>Post by</th>
                    <th>Post Status</th>
                    <th>User Type</th>
                    <th>Image</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
@foreach ($post as $post )
                    
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->description }}</td>
                    <td>{{ $post->name }}</td>
                    <td>{{ $post->post_status }}</td>
                    <td>{{ $post->usertype }}</td>
                    <td>
                    <img style="max-width: 100px;max-height: 100px;" src="postimage/{{$post->image }}" alt=""> 
                    </td>
                    <td>
                        <a href="{{url('delete_post', $post->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure to delete this?')">
                            Delete Post
                        </a>
                    </td>
                    <td>
                        <a href="{{url('edit_page', $post->id)}}" class="btn btn-success">
                            Edit
                        </a>
                    </td>
                </tr>
@endforeach
            </table>
        </div>
    </div>
</x-app-layout>
