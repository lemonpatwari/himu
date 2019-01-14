  <!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Admin | @yield('title') </title>

    <!-- Bootstrap -->
    <link href="{{asset('/')}}assets/admin/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('/')}}assets/admin/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('/')}}assets/admin/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('/')}}assets/admin/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="{{asset('/')}}assets/admin/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{asset('/')}}assets/admin/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- jQuery custom content scroller -->
    <link href="{{asset('/')}}assets/admin/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('/')}}assets/admin/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="{{asset('/')}}assets/admin/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('/')}}assets/admin/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('/')}}assets/admin/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('/')}}assets/admin/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('/')}}assets/admin/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{asset('/')}}assets/admin/build/css/custom.min.css" rel="stylesheet">
    <link href="{{asset('/')}}assets/admin/style.css" rel="stylesheet">
    @yield('style')
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        @include('admin.common.sidebar.sidebar')
        @include('admin.common.navbar.navbar')
        @yield('body')
        @include('admin.common.footer.footer')
    </div>
</div>

<!-- jQuery -->
<script src="{{asset('/')}}assets/admin/vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="{{asset('/')}}assets/admin/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="{{asset('/')}}assets/admin/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="{{asset('/')}}assets/admin/vendors/nprogress/nprogress.js"></script>

<!-- Chart.js -->
<script src="{{asset('/')}}assets/admin/vendors/Chart.js/dist/Chart.min.js"></script>
<!-- gauge.js -->
<script src="{{asset('/')}}assets/admin/vendors/gauge.js/dist/gauge.min.js"></script>
<!-- bootstrap-progressbar -->
<script src="{{asset('/')}}assets/admin/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="{{asset('/')}}assets/admin/vendors/iCheck/icheck.min.js"></script>
<!-- Skycons -->
<script src="{{asset('/')}}assets/admin/vendors/skycons/skycons.js"></script>
<!-- Flot -->
<script src="{{asset('/')}}assets/admin/vendors/Flot/jquery.flot.js"></script>
<script src="{{asset('/')}}assets/admin/vendors/Flot/jquery.flot.pie.js"></script>
<script src="{{asset('/')}}assets/admin/vendors/Flot/jquery.flot.time.js"></script>
<script src="{{asset('/')}}assets/admin/vendors/Flot/jquery.flot.stack.js"></script>
<script src="{{asset('/')}}assets/admin/vendors/Flot/jquery.flot.resize.js"></script>
<!-- Flot plugins -->
<script src="{{asset('/')}}assets/admin/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
<script src="{{asset('/')}}assets/admin/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
<script src="{{asset('/')}}assets/admin/vendors/flot.curvedlines/curvedLines.js"></script>
<!-- DateJS -->
<script src="{{asset('/')}}assets/admin/vendors/DateJS/build/date.js"></script>
<!-- JQVMap -->
<script src="{{asset('/')}}assets/admin/vendors/jqvmap/dist/jquery.vmap.js"></script>
<script src="{{asset('/')}}assets/admin/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="{{asset('/')}}assets/admin/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="{{asset('/')}}assets/admin/vendors/moment/min/moment.min.js"></script>
<script src="{{asset('/')}}assets/admin/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- jQuery custom content scroller -->
<script src="{{asset('/')}}assets/admin/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>

<!-- Datatables -->
<script src="{{asset('/')}}assets/admin/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{asset('/')}}assets/admin/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="{{asset('/')}}assets/admin/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{asset('/')}}assets/admin/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script src="{{asset('/')}}assets/admin/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="{{asset('/')}}assets/admin/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="{{asset('/')}}assets/admin/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="{{asset('/')}}assets/admin/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="{{asset('/')}}assets/admin/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="{{asset('/')}}assets/admin/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{asset('/')}}assets/admin/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<script src="{{asset('/')}}assets/admin/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
<script src="{{asset('/')}}assets/admin/vendors/jszip/dist/jszip.min.js"></script>
<script src="{{asset('/')}}assets/admin/vendors/pdfmake/build/pdfmake.min.js"></script>
<script src="{{asset('/')}}assets/admin/vendors/pdfmake/build/vfs_fonts.js"></script>


<!-- Custom Theme Scripts -->
<script src="{{asset('/')}}assets/admin/build/js/custom.js"></script>

@yield('script')
<script>
    $( "#lmn" ).fadeIn( 300 ).delay( 1500 ).fadeOut( 400 );

    $( "#errors" ).fadeIn( 300 ).delay( 3500 ).fadeOut( 400 );

    $('*[required]').each(function () {
        var label = $("label[for='" + $(this).attr('id') + "']");
        var red_star = ' <span class="text-danger">*</span>'
        label.append(red_star);
    });
</script>

<script>
    $('#show').on('change',function (img) {
        var fileInput=this;
        if (fileInput.files[0]) {
            var reader=new FileReader();
            reader.onload=function (img) {
                $('#img').attr('src',img.target.result);
            };
            reader.readAsDataURL(fileInput.files[0]);
        }
    });
</script>

</body>
</html>
