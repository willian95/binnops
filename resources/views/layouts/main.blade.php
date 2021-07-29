<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Binnops</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="theme-color" content="#ffffff" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css  " />
  <link rel="apple-touch-icon" sizes="152x152" href="{{ url('assets/images/favicons/apple-touch-icon.png') }}" />
  <link rel="icon" type="image/png" sizes="32x32" href="{{ url('assets/images/favicons/favicon-32x32.png') }}" />
  <link rel="icon" type="image/png" sizes="16x16" href="{{ url('assets/images/favicons/favicon-16x16.png') }}" />

  <!--<link rel="stylesheet" href="{{ url('assets/styles/main.css') }}" />--->
  <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}" />
  <link rel="stylesheet" href="{{ url('js/swiper-bundle.css') }}" />
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <!---<link rel="stylesheet" href="{{ url('js/vegas.min.css') }}" />-->
  <link rel="stylesheet" href="{{ url('assets/styles/custom.css') }}" />
  <!--<link rel="stylesheet" type="text/css" href="{{ url('assets/styles/demo.css') }}" />
  <link rel="stylesheet" type="text/css" href="{{ url('assets/styles/component.css') }}" />
  <link rel="stylesheet" href="{{ url('assets/styles/test.css') }}" />-->
  <!-------------cositas menu------------------>
  <link rel="stylesheet" href="css/main.css" />
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;900&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.3/photoswipe.min.css">
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.3/default-skin/default-skin.min.css">
  <link rel="stylesheet" href="assets/styles/responsive.css">
</head>

<body>
  
    @yield("content")


  <!---<script src="assets/scripts/polyfill.min.js"></script>-->
  <script src="{{ url('assets/scripts/main.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>

  <script src="{{ url('js/bootstrap.min.js') }}"></script>
  <script src="{{ url('js/swiper-bundle.min.js') }}"></script>
  <!--<script src="{{ url('js/main.js') }}"></script>-->
  <!--<script src="https://unpkg.com/tippy.js@3/dist/tippy.all.min.js"></script>-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.3/photoswipe.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.3/photoswipe-ui-default.min.js"></script>
  <script src="{{ url('assets/scripts/custom.js') }}"></script>

  <script>
  
  $('.dropdown-toggle').dropdown()

</script>

  @stack("script")

</body>

</html>