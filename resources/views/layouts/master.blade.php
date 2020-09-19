<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Artikel Islam</title>

  <!-- Bootstrap core CSS -->
  <link href="{{asset('content/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{asset('content/css/small-business.css')}}" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  @include('layouts/includes/navbar')

  <!-- Page Content -->
  <div class="container">

    <!-- Heading Row -->
    <div class="row align-items-center my-5">
      <div class="col-lg-7">
        <img class="img-fluid rounded mb-4 mb-lg-0" src="{{asset('image/Artikel.jpg')}}" alt="">
      </div>
      <!-- /.col-lg-8 -->
      <div class="col-lg-5">
        <h3 class="font-weight-light text-center">Selamat Datang di Web Artikel Islam</h3>
        <p>Ini Adalah Web Artikel Islam</p>
        <a class="btn btn-primary" href="#">Call to Action!</a>
      </div>
      <!-- /.col-md-4 -->
    </div>
    <!-- /.row -->

    <!-- Call to Action Well -->
    <div class="card text-white bg-secondary my-5 py-4 text-center">
      <div class="card-body">
        <p class="text-white m-0">This call to action card is a great place to showcase some important information or display a clever tagline!</p>
      </div>
    </div>

    <!-- Content Row -->
    <div class="row">
        @yield('column-content')
    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('content/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('content/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>
