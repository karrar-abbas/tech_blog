<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller as BaseController;
use Symfony\Component\HttpFoundation\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function index(Request $resqust){
     

        $post=Post::all();
        return view('main',compact('post'));
        //validate method for required
    }
    public function category($category){

        if ($category ==1) {
            $c='Laravel';
        }
        if ($category==2) {
            $c='Flutter';
        }     
        $post= Post::where('category',$c)->get();
        return view('main',compact('post'));
    }

    public function create(Request $request){

        $imageName=time().'_'.$request->image->extension();
        $request->image->move(public_path('images'),$imageName);


        $post=new Post();
        $post->title=$request->get(key:'title');
        $post->body=$request->get(key:'body');
        $post->category=$request->get(key:'category');
        $post->image=$imageName;
        $post->save();
        return redirect('dashboard');
    }
    public function delete($id){

        $post= Post::find($id); 
        $post->delete();
        return redirect()->back();
    }


    // }
    public function read($id){
        $post= Post::find($id);
        /* if(!$post){
            return response()->json(['status'=>'not found'],status:Response::HTTP_NOT_FOUND);
        } */
        return view('read-post',compact('post'));
    }
    public function posts_list(Request $resqust){

        $post=Post::all();
      
        return view('posts_list',compact('post'));

    }
}
