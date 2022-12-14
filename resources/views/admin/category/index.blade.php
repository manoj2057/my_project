@extends('includes.admin_design')
@section('content')
<div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Categories</h3>
        </div>

        <div class="title_right">
          <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <div class="col-auto float-right ml-auto">
             <a href="{{ route('addCategory') }}" class="btn add-btn btn-danger" style="background-color: #471be9; border: 1px solid #1a2eb9;color: #fff; margin-right: 7px;  margin-top: 7px; border-radius:10px;"  ><i class="fa fa-plus"></i> Add Category</a>                         
          </div>
        </div>
      </div>

      <div class="clearfix"></div>

      <div class="row">
        <div class="col-md-12 col-sm-12 ">
          <div class="x_panel">
            
            <div class="x_content">
                <div class="row">
                    <div class="col-sm-12">
                      <div class="card-box table-responsive">
              
              <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                <thead>
                  <tr>
                    <th>S.N</th>
                    <th>CategoryName</th>
                    <th>Slug</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>


                <tbody>
                    @foreach($categories as $category)

                    
                  <tr>
                  <td>{{$loop->iteration}}</td>
                    <td>{{$category->category_name}}</td>
                    <td>{{$category->slug}}</td>
                    <td>{{$category->status}}</td>
                    <td><a href="{{route('editCategory',$category->id)}}" data-toggle="tooltip" title="Edit" class="btn btn-sm btn-outline-primary"><i class="fa fa-edit"></i></a>
                        <a href="{{route('deleteCategory',$category->id)}}" data-toggle="tooltip" title="Delete" class="btn btn-sm btn-outline-danger"><i class="fa fa-trash-o"></i></a>
                    </td>
                    

                  </tr>
                  @endforeach
                  
                  
                  
                </tbody>
              </table>
            </div>
            </div>
        </div>
      </div>
    </div>
</div>      
        
       
@endsection

@section('js')
<script src="{{asset('public/dashboard/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('public/dashboard/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('public/dashboard/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('public/dashboard/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
<script src="{{asset('public/dashboard/vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
<script src="{{asset('public/dashboard/vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('public/dashboard/vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('public/dashboard/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
<script src="{{asset('public/dashboard/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
<script src="{{asset('public/dashboard/vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('public/dashboard/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
<script src="{{asset('public/dashboard/vendors/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>
<script src="{{asset('public/dashboard/vendors/jszip/dist/jszip.min.js')}}"></script>
<script src="{{asset('public/dashboard/vendors/pdfmake/build/pdfmake.min.js')}}"></script>
<script src="{{asset('public/dashboard/vendors/pdfmake/build/vfs_fonts.js')}}"></script>
@endsection

