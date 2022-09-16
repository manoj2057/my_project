<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;
use App\Models\Author;
use DataTables;

class AuthorController extends Controller
{
    public function index(){
        $authors=Author::latest()->get();
        return view('admin.author.index',compact('authors'));
    }
    public function addAuthor(){
        return view('admin.author.add');
    }
    public function storeAuthor(Request $request){
        $data=$request->all();
        $validateData=$request->validate([
            'author_name'=> 'required',
          
            

        ]);
        $author = new Author();
        $author->author_name = $data['author_name'];
        if(empty($data['status'])){
            $author->status = 0;
        }
        else{
            $author->status = 1;
        }
        $author->save();
        Session::flash('success_message', 'author Has Been Added Successfully');
        return redirect()->back(); 
    }
    public function editAuthor($id){
        $author= author::findOrFail($id);
        return view('admin.author.edit',compact('author'));
    }
    public function updateAuthor(Request $request, $id){
        $data=$request->all();
        $author= Author::findOrFail($id);
        $author->author_name = $data['author_name'];
        if (empty($data['status'])){
            $author->status = 0;
        } else {
            $author->status = 1;
        }

        $author->save();
        Session::flash('success_message', 'author has been updated Successfully');
        return redirect()->back(); 
    }

    public function delete($id){
        $author = Author::findOrFail($id);
        $author->delete();
        Session::flash('success_message', ' author Has Been deleted Successfully');
    return redirect()->back();
    }

    public function dataTable(){
        $model = Author::all();
        return DataTables::of($model)
           ->addColumn('action', function($model){
               return view('admin.author._actions', [
                    'model'=> $model,
                    'url_edit' =>route('editAuthor',$model->id),
                    'url_delete' =>route('deleteAuthor',$model->id)
               ]);
               
           })
           ->addIndexColumn()
           ->rawColumns(['actions'])
                ->make(true);
    }

}
