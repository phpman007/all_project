<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@All Project</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset("public/assets/vendor/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.32.4/sweetalert2.min.css" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link href="{{asset("public/assets/vendor/fontawesome-free/css/all.min.css")}}" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href="{{asset('public/css/lightbox.css')}}" rel="stylesheet" type="text/css">
    <script src="{{asset('public/js/lightbox.js')}}"></script>
      <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{asset("public/assets/css/clean-blog.min.css")}}" rel="stylesheet">
    <link href="{{asset("public/assets/css/style.css")}}" rel="stylesheet" type="text/css">
    <style media="screen">

    </style>
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="index.html">@All Project</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/') }}">หน้าแรก</a>
            </li>

            @if (!Auth::check())
              <li class="nav-item">
                <a class="nav-link" href="{{ url('suggestion') }}">ข้อเสนอแนะ</a>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/') }}">เข้าสู่ระบบ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('register') }}">ลงทะเบียน</a>
            </li>
          @else
          {{-- <li class="nav-item">
            <a class="nav-link" href="{{ url('report-data') }}">รายการ</a>
          </li> --}}
          <li class="nav-item">
            <a class="nav-link" href="{{ url('report-data') }}">ข้อมูล xxxxxxxxxxxx</a>
          </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('profile') }}">ข้อมูลส่วนตัว</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('suggestion') }}">ข้อเสนอแนะ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('logout') }}">ออกจากระบบ</a>
              </li>
          @endif
            {{-- <li class="nav-item">
              <a class="nav-link" href="contact.html">ติดต่อเรา</a>
            </li> --}}
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('{{asset("public/assets/img/home-bg.jpg")}}')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>Text Field</h1>
              <span class="subheading">Detail Text Field</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      @include('alert::bootstrap')
      @yield('content')
    </div>

    <hr>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <ul class="list-inline text-center">
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
            </ul>
            <p class="copyright text-muted">Copyright &copy; @all project 2018</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
    <script src="{{asset("public/assets/vendor/jquery/jquery.min.js")}}"></script>
    <script src="{{asset("public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js")}}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.32.4/sweetalert2.all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>
    <script src="{{asset('public/js/lightbox.js')}}"></script>
    <!-- Custom scripts for this template -->
    <script src="{{asset("public/assets/js/clean-blog.min.js")}}"></script>

    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>

    <!-- include summernote css/js -->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js"></script>
    <script src='{{asset('public/js/tinymce.min.js')}}'></script>
    <script>
    $(function() {
      $('#datepicker1').datepicker({ format: 'dd/mm/yyyy'});

      $('#datepicker2').datepicker({ format: 'dd/mm/yyyy'});
    });
    </script>
    <script type="text/javascript">
    $(function(){
        // $('#summernote').summernote({height:400})
        tinymce.init({
          selector: '#summernote'
        });
    })
    </script>
  </body>

</html>
