<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function post_page()
    {
        return view('admin.post_page');
    }

    public function add_post(Request $request)
    {
        $user=Auth()->user();

        $user_id = $user->id;
        $name = $user->name;
        $usertype = $user->usertype;

        $post=new Post;

        $post->title = $request-> title;

        $post->description = $request-> description;
        
        $post->user_id = $user_id;
        $post->name = $name;
        $post->usertype = $usertype;

        $post->post_status = 'active';

/////////imagine
        $image=$request->image;
        if($image){
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('postimage',$imagename);
    
            $post->image = $imagename;
        }
//////////final imagine
        
        
        $post->save();


        return redirect()->back()->with('message','Post added auccessfully');
    }

    public function show_post()
    {
        $post = Post::all();



        return view('admin.show_post',compact('post'));
    }

    public function delete_post($id)
    {
        $post = Post::find($id);

        $post->delete();

        return redirect()->back();
    }

    public function edit_page($id)
    {
        $post = Post::find($id);

        return view('admin.edit_page',compact('post'));
    }

    public function update_post(Request $request,$id)
    {
      $post = Post::find($id);
      $post->title=$request->title;
        
      $post->description=$request->description;  
      
      $image=$request->image;

        if($image){
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('postimage',$imagename);
    
            $post->image = $imagename;
        }

        
      $post->save();

      return redirect()->back();
    }
}
