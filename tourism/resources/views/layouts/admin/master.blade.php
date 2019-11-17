<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="{{asset('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> -->

  <!-- CSS -->
  <link href="{{asset('assets/css/admin.css')}}" rel="stylesheet">
  <link href="{{asset('assets/css/admin5.css')}}" rel="stylesheet">
</head>

<body> 
  @include('layouts.admin.header')
        
        <section id="main">
           
            @include('layouts.admin.sidebar')

            <section id="content">
                <div class="container">
                    

                    @yield('content')


                </div>
            </section>
        </section>
        
        @include('layouts.admin.footer')

  
  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
 
  <!-- Core plugin JavaScript-->
  <script src="{{asset('assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('assets/js/sb-admin.min.js')}}"></script>

  <!-- Demo scripts for this page-->
  <script src="{{asset('assets/js/demo/datatables-demo.js')}}"></script>
  <script src="{{asset('assets/js/demo/demo/chart-area-demo.js')}}"></script>

</body>

</html>
