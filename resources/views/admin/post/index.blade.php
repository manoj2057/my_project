@extends('includes.admin_design')
@section('content')
<div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Post</h3>
        </div>
        <div class="col-auto float-right ml-auto">
             <a href="{{ route('addPost') }}" class="btn view-btn btn-progress" style="background-color: #471be9; border: 1px solid #1a2eb9;color: #fff; margin-right: 7px;  margin-top: 7px; border-radius:10px;"  ><i class="fa fa-plus"></i>Add Post</a>                         
          </div> 
        <div class="title_right">
          <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">

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
                    <th> Post Title</th>
                    <th>content</th>
                    <th>Author_id</th>
                    <th>Status</th>
                    <th>Published Date</th>
                    <th>Action</th>
                  </tr>
                </thead>
    <tbody>
      @foreach($posts as $post)                   
        <tr>
          <td>{{$loop->iteration}}</td>
          <td>{{$post->post_title}}</td>
          <td>{!! Str::limit($post->content,55) !!}</td>
          <td>{{$post->author_id}}</td>
          <td>{{$post->status}}</td>
          <td>{{$post->publish_date}}</td>
          <td><a href="{{route('editPost',$post->id)}}" data-toggle="tooltip" title="Edit" class="btn btn-sm btn-outline-primary"><i class="fa fa-edit"></i></a>
            <a href="{{route('deletePost',$post->id)}}" data-toggle="tooltip" title="Delete" class="btn btn-sm btn-outline-danger"><i class="fa fa-trash-o"></i></a>
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

<!-- <script>
  $("#my-datatable").DataTable({
    processing:true,
    serverSide:true,
    sorting:true,
    serachable:true,
    responsive:true,
    ajax:"{{route('tablePost')}}",
    columns:[
      {data: 'DT_RowIndex', name: 'DT_RowIndex'},
      {data: 'post_title', name: 'post_title'},
      {data: 'content', name:  'content'}, 
      {data: 'author_id', name: 'author_id'},
      {data: 'status', name: 'status'},
      {data: 'publish_date', name: 'publish_date'},
      {data: 'action', name: 'action', orderable:false},
    ]
  });
</script> -->
@endsection
