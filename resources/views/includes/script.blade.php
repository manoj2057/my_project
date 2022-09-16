<!-- jQuery -->
<script src="{{asset ('public/dashboard/vendors/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset ('public/dashboard/vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset ('public/dashboard/vendors/fastclick/lib/fastclick.js')}}"></script>
<!-- NProgress -->
<script src=" {{asset ('public/dashboard/vendors/nprogress/nprogress.js')}}"></script>
<!-- Chart.js -->
<script src="{{asset ('public/dashboard/vendors/Chart.js/dist/Chart.min.js')}}"></script>
<!-- gauge.js -->
<script src="{{asset ('public/dashboard/vendors/gauge.js/dist/gauge.min.js')}}"></script>
<!-- bootstrap-progressbar -->
<script src=" {{asset ('public/dashboard/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
<!-- iCheck -->
<script src=" {{asset ('public/dashboard/vendors/iCheck/icheck.min.js')}}"></script>
<!-- Skycons -->
<script src="{{asset ('public/dashboard/vendors/skycons/skycons.js')}}"></script>
<!-- Flot -->
<script src="{{asset ('public/dashboard/vendors/Flot/jquery.flot.js')}}"></script>
<script src="{{asset ('public/dashboard/vendors/Flot/jquery.flot.pie.js')}}"></script>
<script src="{{asset ('public/dashboard/vendors/Flot/jquery.flot.time.js')}}"></script>
<script src="{{asset ('public/dashboard/vendors/Flot/jquery.flot.stack.js')}}"></script>
<script src="{{asset ('public/dashboard/vendors/Flot/jquery.flot.resize.js')}}"></script>
<!-- Flot plugins -->
<script src="{{asset ('public/dashboard/vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
<script src="{{asset ('public/dashboard/vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
<script src="{{asset ('public/dashboard/vendors/flot.curvedlines/curvedLines.js')}}"></script>
<!-- DateJS -->
<script src="{{asset ('public/dashboard/vendors/DateJS/build/date.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset ('public/dashboard/vendors/jqvmap/dist/jquery.vmap.js')}}"></script>
<script src="{{asset ('public/dashboard/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
<script src="{{asset ('public/dashboard/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
<!-- bootstrap-daterangepicker -->
<script src="{{asset ('public/dashboard/vendors/moment/min/moment.min.js')}}"></script>
<script src="{{asset ('public/dashboard/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<script src="https://gitlab.com/sushanpaudyal/hamro-e-commerce/-/raw/master/public/adminpanel/assets/js/dataTables.bootstrap4.min.js"></script>


<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
       $('.ckeditor').ckeditor();
    });
</script>

<!-- datepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript">
 $(function() {
   $('#datetimepicker').datetimepicker();
 });
</script>

<!-- toggle switch -->
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>  



// <!-- Custom Theme Scripts -->
 <script src="{{asset ('public/dashboard/build/js/custom.min.js')}}"></script> 

@yield('js')