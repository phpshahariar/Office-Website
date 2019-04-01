<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Banglakings - Dashboard</title>

    {{--CDN Link--}}
    {{--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">--}}
    {{--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>--}}
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>--}}
    {{--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>--}}
    {{--CND Link end--}}

    {{--Ckeditor--}}


    <!-- Custom fonts for this template-->
    <link href="{!! asset('/backend/') !!}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="{!! asset('/backend/') !!}/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{!! asset('/backend/') !!}/css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

@include('backend.include.header')

<div id="wrapper">

    <!-- Sidebar -->
    @include('backend.include.navbar')

    <div id="content-wrapper">

        @yield('content')
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        @include('backend.include.footer')
    </div>
</div>
<!-- Bootstrap core JavaScript-->
<script src="{!! asset('/backend/') !!}/vendor/jquery/jquery.min.js"></script>
<script src="{!! asset('/backend/') !!}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="{!! asset('/backend/') !!}/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Page level plugin JavaScript-->
<script src="{!! asset('/backend/') !!}/vendor/chart.js/Chart.min.js"></script>
<script src="{!! asset('/backend/') !!}/vendor/datatables/jquery.dataTables.js"></script>
<script src="{!! asset('/backend/') !!}/vendor/datatables/dataTables.bootstrap4.js"></script>

<!-- Custom scripts for all pages-->
<script src="{!! asset('/backend/') !!}/js/sb-admin.min.js"></script>

<!-- Demo scripts for this page-->
<script src="{!! asset('/backend/') !!}/js/demo/datatables-demo.js"></script>
<script src="{!! asset('/backend/') !!}/js/demo/chart-area-demo.js"></script>

</body>

</html>
