@extends('includes.admin_design')
@section('content')
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Add Category</h3>
            </div>
            <div class="col-auto float-right ml-auto">
             <a href="{{ route('category.index') }}" class="btn view-btn btn-progress" style="background-color: #471be9; border: 1px solid #1a2eb9;color: #fff; margin-right: 7px;  margin-top: 7px; border-radius:10px;"  ><i class="fa fa-eye"></i> View Category</a>                         
          </div>   
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-9 col-sm-9 ">
                <div class="x_panel">
                    <div class="x_title">
                    <h2>Category/Add </h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />

                        @include('includes._message')
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="{{route('storeCategory')}}" enctype="multipart/form-data">
                        @csrf
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="title"> Category Name <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="name" name="category_name" value="{{old('category_name')}}"  class="form-control ">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="image">Select Status <span class="required">*</span>
                                </label><br><br>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="checkbox" name="status" checked data-toggle="toggle" data-size="xs" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive">
                                     
                                </div>
                            </div>
                            
                            
                            
                            <div class="ln_solid"></div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 offset-md-3">
                                <button type="update" class="btn btn-success" style="background-color: purple; border: 1px solid #1a2eb9;color: #fff; margin-right: 7px;  margin-top: 7px; border-radius:10px;"  ><i class="fa fa-plus"></i>Add</button>
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
