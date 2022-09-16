<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content = "{{csrf_token()}}">
  <link rel="icon" href="{{asset ('public/dashboard/images/favicon.ico')}}" type="image/ico"  />

  <title>Admin Dashboard - {{ config('app.name', 'Laravel') }}</title>

  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<!-- datepicker-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">
  
  
  <!--ckeditor -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <!-- toggle switch -->
  <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
  <!-- Bootstrap -->
  <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
  <link href="{{asset ('public/dashboard/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="{{asset ('public/dashboard/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <!-- NProgress -->
  <link href="{{asset ('public/dashboard/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
  <!-- iCheck -->
  <link href="{{asset ('public/dashboard/.../vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">

  <!-- bootstrap-progressbar -->
  <link href="{{asset ('public/dashboard/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
  <!-- JQVMap -->
  <link href="{{asset ('public/dashboard/vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet"/>
  <!-- bootstrap-daterangepicker -->
  <link href="{{asset ('public/dashboard/vendors/bootstrap-daterangepicker/daterangepicker.css')}}"rel="stylesheet">
   <!-- Datatables -->
   <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
   <link href="{{asset('public/dashboard/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
   <link href="{{asset('public/dashboard/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
   <link href="{{asset('public/dashboard/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
   <link href="{{asset('public/dashboard/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
   <link href="{{asset('public/dashboard/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href=" {{asset ('public/dashboard/build/css/custom.min.css')}}" rel="stylesheet">
</head>