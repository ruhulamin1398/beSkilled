<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>BeSkilled</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('theme/frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('theme/frontend/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('theme/frontend/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('theme/frontend/assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('theme/frontend/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('theme/frontend/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('theme/frontend/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('theme/frontend/assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('theme/frontend/assets/css/style.css')}}" rel="stylesheet">

  <link href="{{asset('theme/flexor/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('theme/admin/assets/css/libs/fontawesome-icons.css?ver=2.4.0') }}">
  @yield('css')



</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
       {{-- <i class="icofont-envelope"></i> <a href="mailto:contact@example.com">{{App\Models\additionalSetting::find(10)->key }}</a>
      <i class="icofont-phone"></i>{{App\Models\additionalSetting::find(11)->key 
      <iclass="icofont-phone"></i>App\Models\additionalSetting::find(12)->key }} 
        <i class="icofont-google-map"></i> {{App\Models\additionalSetting::find(13)->key }}
        }}--}}
      </div>
      <div class="social-links">
        {{-- <a href="{{App\Models\additionalSetting::find(14)->key }}" class="facebook"><i class="icofont-facebook"></i> </a>
        <a href="{{App\Models\additionalSetting::find(15)->key   }}" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="{{App\Models\additionalSetting::find(16)->key  }}" class="linkedin"><i class="icofont-linkedin"></i></i></a>
       --}}
      
     
          @if (Auth::check())
         <a href="{{route('login')}}"> My Account </a>
          @else
         <a href="{{route('login')}}" >Login</a>
          <a href="{{route('register')}}">Register</a>
          @endif 
  
  
        <!--</a>-->
      
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <!-- <h1 class="logo mr-auto"><a href="index.html">Medilab</a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="{{ url('/') }}" class="logo mr-auto"><img src="{{asset('images/bbs.png')}}" alt="" class="img-fluid"></a>

      @include('includes.nav')

     {{--   <a href="rout} }}e('login')}}" class="appointment-btn scrollto">
        @if (Auth::check())
        My Account
        @else
        Login
        @endif 


      </a>
--}}
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->

  @yield('hero')
  <!-- End Hero -->

  <main id="main">
    @yield('content')
    <!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('includes.footer')

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('theme/frontend/assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('theme/frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('theme/frontend/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('theme/frontend/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('theme/frontend/assets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('theme/frontend/assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('theme/frontend/assets/vendor/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('theme/frontend/assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('theme/frontend/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('theme/frontend/assets/js/main.js')}}"></script>


  @yield('js')


  <script>
    var url = 'https://wati-integration-service.clare.ai/ShopifyWidget/shopifyWidget.js?69118';
    var s = document.createElement('script');
    s.type = 'text/javascript';
    s.async = true;
    s.src = url;
    var options = {
      "enabled": true,
      "chatButtonSetting": {
        "backgroundColor": "#4dc247",
        "ctaText": "",
        "borderRadius": "25",
        "marginLeft": "0",
        "marginBottom": "50",
        "marginRight": "50",
        "position": "right"
      },
      "brandSetting": {
        "brandName": "BeSkilled",
        "brandSubTitle": "Typically replies within an Hour",
        "brandImg": "",
        "welcomeText": "Hi there!\nHow can I help you?",
        "messageText": "Hello, I have a question about ",
        "backgroundColor": "#0a5f54",
        "ctaText": "Start Chat",
        "borderRadius": "25",
        "autoShow": false,
        "phoneNumber": "+88017xxxxxxx"
      }
    };
    s.onload = function() {
      CreateWhatsappChatWidget(options);
    };
    var x = document.getElementsByTagName('script')[0];
    x.parentNode.insertBefore(s, x);
  </script>

</body>

</html>