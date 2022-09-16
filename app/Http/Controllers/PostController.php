<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;
use App\Models\Post;
use App\Models\Author;
use App\Models\Category;
use DataTables;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
       $posts=Post::latest()->get();
        return view('admin.post.index',compact('posts'));
    }
    public function addPost(){
        $categories = Category::all();
        $authors=Author::latest()->get();
        return view('admin.post.add', compact('authors','categories'));
    }
    public function storePost(Request $request){
        $data = $request->all();
        $rules = [
            'post_title' => 'required|max:255',
            'content' => 'required',
            'author_id' => 'required',
            'publish_date' => 'required',

        ];
        $customMessages = [
            'post_title.required' => 'Post Title is required',
            'content.required' => 'Content is required',
            'author_id.required' => 'Author Name is required',
            'publish_date.required' => 'Content is required',
        ];
        $this->validate($request, $rules, $customMessages);

       $post = new Post();
       $post->post_title = $data['post_title'];
       $post->content = $data['content'];
    
        if(empty($data['status'])){
           $post->status = 0;
        }
        else{
           $post->status = 1;
        }
        $post->author_id = $data['author_id'];
        $post->publish_date = $data['publish_date'];
        $categories = $data['category_id'];
        $post->save();
        $post->categories()->attach($categories);
        Session::flash('success_message', 'Post Has Been Added Successfully');
        return redirect()->back(); 
    }

    public function editpost($id){
        $authors = Author::orderBy('author_name', 'ASC')->get();
       $post= Post::findOrFail($id);
       $categories = Category::orderBy('category_name')->get();
        $category_post = $post->categories()->pluck('category_id')->toArray();

        return view('admin.post.edit',compact('post','authors','categories','category_post'));
    }
    public function updatePost(Request $request, $id){
        $data=$request->all();
       $post= Post::findOrFail($id);
       $post->post_title = $data['post_title'];
       $post->content = $data['content'];
        if (empty($data['status'])){
           $post->status = 0;
        } else {
           $post->status = 1;
        }
       $post->author_id = $data['author_id'];
       $post->publish_date = $data['publish_date'];
       $categories = $data['category_id'];
       $post->save();
       $post->categories()->sync($categories);
        Session::flash('success_message', 'Post has been updated Successfully');
        return redirect()->route('post.index');
    }
    public function deletePost($id){
       $post = Post::findOrFail($id);
       $post->delete();
        Session::flash('success_message', ' Post Has Been deleted Successfully');
    return redirect()->back();
    }

}
