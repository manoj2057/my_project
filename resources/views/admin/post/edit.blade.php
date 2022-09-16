@extends('includes.admin_design')
@section('content')
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Update Post</h3>
            </div>
            <div class="col-auto float-right ml-auto">
             <a href="{{ route('post.index') }}" class="btn view-btn btn-progress" style="background-color: #471be9; border: 1px solid #1a2eb9;color: #fff; margin-right: 7px;  margin-top: 7px; border-radius:10px;"  ><i class="fa fa-eye"></i> View Post</a>                         
          </div> 

            
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-9 col-sm-9 ">
                <div class="x_panel">
                    <div class="x_title">
                    <h2>Post/Edit </h2>
                        
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />

                        @include('includes._message')
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="{{route('updatePost',$post->id)}}" enctype="multipart/form-data">
                        @csrf
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Post Title <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="name" name="post_title" value="{{$post->post_title}}"  class="form-control ">
                                </div>
                            </div>
                           
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Content <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                <textarea name="content" id="content"  class="ckeditor form-control" >{{$post->content}}</textarea>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="image">Select Status <span class="required">*</span>
                                </label><br><br>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="checkbox" name="status" checked data-toggle="toggle" data-size="xs" value="1" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" @if($post->status == 1) checked @endif>
                                </div>
                            </div>

                            <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name"> Select Author <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <select name="author_id" id="author_id" class="form-control">
                                   
                                    @foreach($authors as $author)
                                    <option value="{{ $author->id }}">{{ $author->author_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="image">Select Category <span class="required">*</span>
                                </label><br><br>
                                <div class="col-md-6 col-sm-6 ">
                                <select  name="category_id[]" id="category_id"  class="form-control tags" multiple>
                                    @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ in_array($category->id, $category_post) ? 'selected' : '' }}>{{ $category->category_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Published Date <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id='datetimepicker' name="publish_date" value="{{$post->publish_date}}"  class='input-group date'>
                                </div>
                            </div>

                            
                            <div class="ln_solid"></div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 offset-md-3">
                                <button type="update" class="btn btn-success" style="background-color: purple; border: 1px solid #1a2eb9;color: #fff; margin-right: 7px;  margin-top: 7px; border-radius:10px;"  ><i class="fa fa-edit"></i>Update</button>
                                </div>
                            </div>
                            
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>

        

        

        
    </div>
</div>
@endsection
@section('js')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.tags').select2();
        });
   </script>
@endsection

