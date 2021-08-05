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
  <link rel="mask-icon" href="{{ url('assets/images/favicons/safari-pinned-tab.svg') }}" color="#000000" />
  <!--<link rel="stylesheet" href="{{ url('assets/styles/main.css') }}" />-->
  <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}" />
  <link rel="stylesheet" href="{{ url('js/swiper-bundle.css') }}" />
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <link rel="stylesheet" href="{{ url('js/vegas.min.css') }}" />
  <link rel="stylesheet" href="{{ url('assets/styles/custom.css') }}" />
  <link rel="stylesheet" type="text/css" href="{{ url('assets/styles/demo.css') }}" />
  <link rel="stylesheet" type="text/css" href="{{ url('assets/styles/component.css') }}" />
  <link rel="stylesheet" href="{{ url('assets/styles/test.css') }}" />
  <!-------------cositas menu------------------>
  <link rel="stylesheet" href="{{ url('css/main.css') }}" />
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;900&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.3/photoswipe.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.3/default-skin/default-skin.min.css">
  <style>
    .idioma-xs {

      padding-right: 6rem;
      background: #fff;
      margin-right: 0;
    }

    .idioma-xs a {
      color: #14162d;
    }

    @media (max-width: 768px) {
      .pb-12 {
        padding-bottom: 0rem !important;
      }

      .logo img {
        width: 200px;
        margin: 0rem 0;
      }

      .idioma-xs {
        padding-right: 0;
      }
    }
  </style>
</head>

<body>
  <div class="o-scroll" id="js-scroll" data-scroll-container>
    <div data-scroll-section="">
      <section class="viewport">
        <div id="scroll-container" class="scroll-container">
          <a href="{{ url('/') }}" class="volverinicio"><i class="fa fa-arrow-left" aria-hidden="true"></i>
 Volver al inicio</a>
          <div class="idioma-xs">
            <li class="nav-item" data-section-anchor="about">
              <a class="nav-link" aria-current="page" href="{{ url('/?locale=es') }}">es</a>
            </li>
            <li class="nav-item ml-0" data-section-anchor="projects">
              <a class="nav-link" aria-current="page" href="{{ url('/') }}">EN</a>
            </li>
          </div>
          <header class="navbar-top navbar navbar-a navbar-expand-lg">

            <nav class="container-fluid px-0">
            <div class="collapse navbar-collapse order-lg-1">
              <div class="navbar-menu-wrapper">
                <div class="nav-body">
                  <!---<ul class="navbar-nav nav-menu-top">
                    <li class="nav-item" data-section-anchor="about">
                      <a class="nav-link" aria-current="page" href="{{ url('/?locale=es') }}">es</a>
                    </li>
                    <li class="nav-item ml-0" data-section-anchor="projects">
                      <a class="nav-link" aria-current="page" href="{{ url('/') }}">EN</a>
                    </li>
                  </ul>-->


                  <button class="navbar-toggler menux" type="button" data-toggle="collapse" data-target="#navbarMenuCollapse" aria-controls="navbarMenuCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon icon-menu icon-menu-c">
                      <img src="{{ url('assets/images/iso.png') }}" alt="">
                      <!--<span class="bars">
                      <span class="bar1"></span>
                      <span class="bar2"></span>
                    </span>-->
                    </span>
                    Menu
                  </button>

                  <div class="collapse navbar-collapse order-lg-1" id="navbarMenuCollapse">
                    <div class="navbar-menu-wrapper">
                      <div class="nav-body">
                        <div class="nav-fullscreen-lg">
                          <ul class="navbar-nav nav">
                            <li class="nav-item">
                              <a class="nav-link" data-scroll-to aria-current="page" data-scroll href="#home"> {{
                                __("messages.home") }}</a>
                            </li>
                            <!---<li class="nav-item">
                <a class="nav-link" data-scroll-to data-scroll href="#products">{{ __("messages.products")  }}
                </a>
              </li>-->
                            <li class="nav-item">
                              <a class="nav-link" data-scroll-to data-scroll href="#business">{{
                                __("messages.businessModel") }}</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" data-scroll-to data-scroll href="#exprience">{{
                                __("messages.experienceTitle") }}
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" data-scroll-to data-scroll href="#aourroadmap">{{
                                __("messages.transformationRoadMap") }}
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" data-scroll-to data-scroll href="#blog">Blog
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" data-scroll-to data-scroll href="#contact">{{ __("messages.contact")
                                }}
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </nav>
          </header>
          <div class="nav-dot-menu"></div>
          <div class="cover-page">
            <div class="cover-bg bg-black"></div>
          </div>
          <main class="page-main sections-scroll scroll-anim bg-blue " id="mainpage">
            <section class="section section-a ">
              <div class="c-header_heading mb-5" data-scroll data-scroll-speed="-8" data-scroll-position="top" data-scroll-repeat>
                <h1 class="pt-5 pb-12 " data-scroll>
                  <span class="c-header_title_line text-center logo">
                    <span data-scroll data-scroll-speed="3" data-scroll-position="top">
                      <img src="{{ url('assets/images/logo-blue.png') }}" alt="" />
                    </span>
                  </span>
                </h1>
              </div>
              <div class="main-blog container">
                @foreach(App\Models\Blog::all() as $blog)
                <div class="main-blog_item " data-toggle="modal" data-target=".blog-id{{ $blog->id }}" data-scroll data-scroll-speed="5" data-scroll-position="top" data-scroll-delay="0.05">
                  <div class="main-blog_txt">
                    <p>{{ $blog->title }}</p>
                    <span>{{ $blog->created_at->format('d/m/Y') }} <i class="fa fa-calendar" aria-hidden="true"></i>
                    </span>
                  </div>
                  <img src="{{ $blog->image }}" alt="">
                </div>



                @endforeach


              </div>
            </section>


            <div class="c-fixed_wrapper is-inview fix-sect mt-5" data-scroll="" data-scroll-call="dynamicBackground" data-scroll-repeat="" style="background-color: rgb(201, 212, 211);">
            <div class="c-fixed_target" id="fixed-target"></div>
            <div class="c-fixed is-inview pre-footer" data-scroll="" data-scroll-sticky="" data-scroll-target="#fixed-target" style="background-image: url('{{ url('assets/images/card2.jpg') }}'); ">
            </div>
            <div class="txt-fix">
              <div class="row ">
                <div class="col-md-12 flex-contact">
                  <h2 class="display-3 anim-1 mb-4">Contact Us</h2>
                  <p>We’ll reach you in less than 1 hour
                    if you don’t get a response
                    immediately! We take business
                    opportunities very seriously!
                  </p>
                </div>
              </div>
            </div>

          </div>
            <section id="contact" class="section section-a fullscreen-h-lg ">

              <!-- Begin of section body -->
              <div class="section-body section-contact" style="padding-top: 4rem;" itemscope itemtype="https://schema.org/Organization">
                <!-- content -->
                <div class="section-content container content-width anim">
                  <div class="row justify-content-between">
                    <div class="col-12 col-lg-12 text-left">
                      <!-- title and description -->
                      <div class="row">
                        <div class="col-md-7">
                          <div class="title-desc">
                            <!---<h2 class="display-3 anim-1 mb-4">Contact Us</h2>--->
                            <p class="anim-2">{{ __("messages.worldwideOffice") }}</p>
                            <select class="form-select" aria-label="Default select example" onchange="locationChange()" id="countrySelector">
                              <option value="us" class="col">{{ __("messages.usOffice") }}</option>
                              <option value="colombia" class="usa">{{ __("messages.colombiaOffice") }}</option>
                            </select>
                            <div id="info-col">
                              <p id="custom-address" class="direction">
                                Subsidiary of E2 SAS Colombia - 2101 City West Boulevard, Suite 100 77042 Houston Texas
                              </p>

                              <div class="d-flex align-items-center">

                                <a class="email email-main btn-inline" href="mailto: contact@binnops.com" itemprop="email">
                                  contact@binnops.com</a>
                                <!---<button class="btn-fab btn-white ml-3" data-toggle="modal" data-target="#messageModal">
                                  <span class="icon"><i class="ion-md-mail"></i></span>
                                </button>--->
                              </div>
                              <div class="d-flex align-items-center" id="custom-phone">
                                <a class="contact-main btn-inline url-phone phone" href="tel:+1 713 429 1912" itemprop="phone">
                                  +1 713 429 1912</a>
                              </div>
                            </div>
                            <div id="info-usa">

                            </div>


                          </div>
                          <div class="certifications">
                            <img src="{{ url('assets/images/certifications/Logo_for_client_1110011 (1).png') }}" alt="">
                            <img src="{{ url('assets/images/certifications/Logo_for_client_1110012.png') }}" alt="">
                            <img src="{{ url('assets/images/certifications/Logo_for_client_1110013_2018.png') }}" alt="">
                            <img src="{{ url('assets/images/certifications/Logo_for_client_1110074.png') }}" alt="">
                          </div>
                        </div>
                        <div class="col-md-5">
                          <form id="form-message" class="form-a form-message form-message" method="post">
                            <div class="mb-3">
                              <label for="name-message" class="form-label">{{ __("messages.name") }}</label>
                              <input type="text" class="form-control form-control-a" id="name-message" placeholder="Firstname Lastname" required />
                            </div>
                            <div class="mb-3">
                              <label for="email-message" class="form-label">{{ __("messages.email") }}</label>
                              <input type="email" class="form-control form-control-a" id="email-message" placeholder="your@email.com" required />
                            </div>
                            <div class="mb-3">
                              <label for="message-message" class="form-label">{{ __("messages.message") }}</label>
                              <textarea class="form-control form-control-b" id="message-message" placeholder="Hello, your message" required></textarea>
                            </div>
                            <div class="mt-4">
                              <button type="button" class="btn btn-solid btn-white rounded-pill" onclick="sendMessage()" id="buttonSendMessage">
                                <span class="text">{{ __("messages.sendMessage") }}</span>
                              </button>

                              <div class="spinner-border" role="status" id="spinner">
                                <span class="sr-only">Loading...</span>
                              </div>

                            </div>
                          </form>
                        </div>

                      </div>

                    </div>
                  </div>
                  <footer id="site-footer" class="footer-page">
                    <!-- Right content -->
                    <div class="footer-right">
                      <nav class="nav-social nav-social-a">
                        <ul>
                          <li class="nav-item">
                            <a class="nav-link btn" href="#">
                              <span class="icon">
                                <i class="ion ion-logo-instagram"></i>
                              </span>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link btn" href="#">
                              <span class="icon">
                                <i class="ion ion-logo-twitter"></i>
                              </span>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link btn" href="#">
                              <span class="icon">
                                <i class="ion ion-logo-linkedin"></i>
                              </span>
                            </a>
                          </li>
                        </ul>
                      </nav>
                    </div>
                  </footer>
                </div>
              </div>
              <!-- End of section body -->
            </section>
          </main>
        </div>
      </section>
    </div>
  </div>

  @foreach(App\Models\Blog::all() as $blog)
  <!-- Modal blog-->
  <div class="modal fade blog-modal blog-id{{ $blog->id }}" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="">
          <div class="main-blog_txt-modal">
            <p>{{ $blog->title }}</p>
            <span>{{ $blog->created_at->format("d/m/Y") }} <i class="fa fa-calendar" aria-hidden="true"></i>
            </span>
          </div>

          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <img src="{{ $blog->image }}" alt="">
          <p>{!! $blog->description !!} </p>
        </div>

      </div>
    </div>
  </div>

  @endforeach



  <!-- Modal serviicio 1 -->
  <div class="modal fade datavisualization" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">

        <div class="modal-body modal-cards">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <div>

            <div class="container">
              <div class="img-modal">
                <img src="{{ url('assets/images/iconos/database2.svg') }}" alt="">
              </div>
              <div class="text-center">
                <span class="title-modal">Data Visualization</span>
              </div>
              <p class="subtitle-modal mt-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum quidem
                aspernatur architecto, temporibus quam minus voluptate laborum quisquam rem consequatur id, animi, totam
                nostrum eaque eius ut nihil labore qui?

                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum quidem aspernatur architecto, temporibus
                quam minus voluptate laborum quisquam rem consequatur id, animi, totam nostrum eaque eius ut nihil
                labore qui?
              </p>
              <div class="row">
                <div id="carousel" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel" data-slide-to="1"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <div class="d-none d-lg-block">
                        <div class="slide-box">
                          <img src="http://imgfz.com/i/b4kMUhH.jpeg" alt="First slide">
                          <img src="http://imgfz.com/i/lykguRS.png" alt="First slide">
                          <img src="http://imgfz.com/i/o43bhMN.png" alt="First slide">
                          <img src="http://imgfz.com/i/LPH6WVY.jpeg" alt="First slide">
                        </div>
                      </div>
                      <div class="d-none d-md-block d-lg-none">
                        <div class="slide-box">
                          <img src="http://imgfz.com/i/b4kMUhH.jpeg" alt="First slide">
                          <img src="http://imgfz.com/i/lykguRS.png" alt="First slide">
                          <img src="http://imgfz.com/i/o43bhMN.png" alt="First slide">
                        </div>
                      </div>
                      <div class="d-none d-sm-block d-md-none">
                        <div class="slide-box">
                          <img src="http://imgfz.com/i/o43bhMN.png" alt="First slide">
                          <img src="http://imgfz.com/i/LPH6WVY.jpeg" alt="First slide">
                        </div>
                      </div>
                      <div class="d-block d-sm-none">
                        <img class="d-block w-100" src="https://picsum.photos/600/400/?image=0&random" alt="First slide">
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="d-none d-lg-block">
                        <div class="slide-box">
                          <img src="http://imgfz.com/i/b4kMUhH.jpeg" alt="First slide">
                          <img src="http://imgfz.com/i/lykguRS.png" alt="First slide">
                          <img src="http://imgfz.com/i/o43bhMN.png" alt="First slide">
                          <img src="http://imgfz.com/i/LPH6WVY.jpeg" alt="First slide">
                        </div>
                      </div>
                      <div class="d-none d-md-block d-lg-none">
                        <div class="slide-box">
                          <img src="http://imgfz.com/i/b4kMUhH.jpeg" alt="First slide">
                          <img src="http://imgfz.com/i/lykguRS.png" alt="First slide">
                          <img src="http://imgfz.com/i/o43bhMN.png" alt="First slide">
                          <img src="http://imgfz.com/i/LPH6WVY.jpeg" alt="First slide">
                        </div>
                      </div>
                      <div class="d-none d-sm-block d-md-none">
                        <div class="slide-box">
                          <img src="http://imgfz.com/i/o43bhMN.png" alt="First slide">
                          <img src="http://imgfz.com/i/LPH6WVY.jpeg" alt="First slide">
                        </div>
                      </div>
                      <div class="d-block d-sm-none">
                        <img class="d-block w-100" src="https://picsum.photos/600/400/?image=1&random" alt="Second slide">
                      </div>
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>




  <script src="{{ url('assets/scripts/main.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="{{ url('js/bootstrap.min.js') }}"></script>
  <script src="{{ url('js/swiper-bundle.min.js') }}"></script>

  <!-- Javascript main files -->
  <script src="{{ url('js/main.js')}}"></script>
  <script src="https://unpkg.com/tippy.js@3/dist/tippy.all.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.3/photoswipe.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.3/photoswipe-ui-default.min.js"></script>
  <script src="{{ url('assets/scripts/custom.js') }}"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  @if(isset($id))
  <script>
    $(document).ready(function() {

      var id = "{{ $id ? $id : '' }}"
      if (id) {
        $(".blog-id" + id).modal('show')
      }


    })
  </script>
  @endif

  <script>
    function locationChange() {

      let location = $("#countrySelector").val()

      if (location == "us") {

        $("#custom-address").html("Subsidiary of E2 SAS Colombia - 2101 City West Boulevard, Suite 100 77042 Houston Texas")
        $("#custom-phone").html("<a class='contact-main btn-inline url-phone phone' href='tel:+1 713 429 1912' itemprop='phone'>+1 713 429 1912</a>")

      } else if (location == "colombia") {

        $("#custom-address").html("E2 SAS Cra. 7 #156-78 of. 901 Bogotá D.C., Colombia")
        $("#custom-phone").html("<a class='contact-main btn-inline url-phone phone' href='tel:+57 1 487 0918' itemprop='phone'>+57 1 487 0918</a>")

      }

    }

    function sendMessage() {

      let email = $("#email-message").val()
      let name = $("#name-message").val()
      let message = $("#message-message").val()

      $("#buttonSendMessage").css("display", "none")
      $("#spinner").css("display", "block")

      $.post("{{ url('/send/message') }}", {
        "email": email,
        "name": name,
        "text": message,
        "_token": "{{ csrf_token() }}"
      }, function(data) {

        $("#buttonSendMessage").css("display", "block")
        $("#spinner").css("display", "none")

        $("#email-message").val("")
        $("#name-message").val("")
        $("#message-message").val("")

        swal({
          icon: "success",
          text: "{{ __('messages.emailSent') }}"
        })

      })

    }
  </script>


</body>

</html>