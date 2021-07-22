@extends("layouts.main")

@section("content")

<div class="o-scroll" id="js-scroll" data-scroll-container>
    <div data-scroll-section="">
      <section class="viewport">
        <div id="scroll-container" class="scroll-container">
          <header class="navbar-top navbar navbar-a navbar-expand-lg">
            <nav class="container-fluid px-0">
              <div class="collapse navbar-collapse order-lg-1">
                <div class="navbar-menu-wrapper">
                  <div class="nav-body">
                    <ul class="navbar-nav nav-menu-top">
                      <li class="nav-item" data-section-anchor="about">
                        <a class="nav-link" aria-current="page" href="{{ url('/?locale=es') }}">es</a>
                      </li>
                      <li class="nav-item ml-0" data-section-anchor="projects">
                        <a class="nav-link" aria-current="page" href="{{ url('/') }}">EN</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </nav>
          </header>
          <div class="nav-dot-menu"></div>
          <div class="cover-page">
            <div class="cover-bg bg-black"></div>
          </div>
          <main class="page-main sections-scroll scroll-anim " id="mainpage">
            <section id="banner" class="section section-a back-banner"
              style="background-image: url('assets/images/banner.jpg');">

              <div class="s-hero" id="home">
                <div class="s-hero__scene">
                  <div class="c-scene">
                    <div class="c-scene__container">
                      <div class="o-container">
                        <div class="c-header" id="header">
                          <div class="c-header_heading" data-scroll data-scroll-speed="-8" data-scroll-position="top"
                            data-scroll-target="#header" data-scroll-repeat></div>
                          <h1 class="p8" data-scroll>
                            <span class="c-header_title_line text-center logo">
                              <span data-scroll data-scroll-speed="3" data-scroll-position="top">
                                <img src="assets/images/logo.png" alt="" />
                              </span>
                            </span>
                          </h1>
                          <div class="banner-ilu0 home-swiper-container">
                            <div class="swiper-wrapper">
                              <div class="swiper-slide home-1">{{ __("messages.banner1") }}</div>
                              <div class="swiper-slide home-1">{{ __("messages.banner2") }}</div>
                              <div class="swiper-slide home-1">{{ __("messages.banner3") }}</div>
                              <div class="swiper-slide home-1">{{ __("messages.banner4") }}</div>
                              <div class="swiper-slide home-1">{{ __("messages.banner5") }}</div>
                              <div class="swiper-slide home-1">{{ __("messages.banner6") }}
                              </div>
                              <div class="swiper-slide home-1">{{ __("messages.banner7") }}</div>
                            </div>
                          </div>

                          <a  data-toggle="modal" data-target=".videoo" id="play-video" class="video-play-button" href="#">
                            <span></span>
                          </a>
                          
                          
                          <!---<div id="video-overlay" class="video-overlay">
                            <a class="video-overlay-close">&times;</a>
                          </div>--->
                          <div class="c-header_title o-h1" data-scroll>
                            <span class="c-header_title_line -version u-white cards-banner_grids">
                              <!-------------card servicio 1 ---------------->
                              <a href="#menu1" data-scroll-to class="icon-expand menu1 " data-scroll>
                                <span class="o-h1 animate__animated animate__backInDown" data-scroll
                                  data-scroll-speed="5" data-scroll-position="top" data-scroll-delay="0.03">
                                  <div class="card-banner card-body_main ">
                                    <div class="wrapper " style="
                                          background: url(assets/images/img/Home/1.png)center/cover no-repeat; ">
                                      <div class="data">
                                        <div class="content">
                                          <span class="author">{{ __("messages.assetVisualization") }}</span>

                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                </span></a>
                              <!-------------card servicio 2---------------->
                              <a href="#menu2" data-scroll-to class="menu2 icon-expand" data-scroll>
                                <span class="o-h1 animate__animated animate__backInUp" data-scroll data-scroll-speed="5"
                                  data-scroll-position="top" data-scroll-delay="0.04">
                                  <div class="card-banner card-body_main">
                                    <div class="wrapper" style="
                                        background: url(assets/images/img/Home/3.jpg)
                                          center/cover no-repeat;
                                      ">
                                      <div class="data">
                                        <div class="content">
                                          <span class="author">{{ __('messages.smartTwins') }}</span>

                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </span></a>
                              <!-------------card servicio 3---------------->
                              <a href="#menu3" data-scroll-to class="menu-open-button menu3 icon-expand" data-scroll>
                                <span class="o-h1 animate__animated animate__backInRight animated" data-scroll
                                  data-scroll data-scroll-speed="5" data-scroll-position="top" data-scroll-delay="0.05">
                                  <div class="card-banner card-body_main">
                                    <div class="wrapper" style="
                                        background: url(assets/images/img/Home/2.png)
                                          center/cover no-repeat;
                                      ">

                                      <div class="data">
                                        <div class="content">
                                          <span class="author">{{ __('messages.smartManagement') }}</span>

                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </span>
                              </a>
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <!-- End of hero section -->
            <!--------------------Menu content------------------------>
            <section id="menu1" class="section section-a  main-content_navegation main1 " style="
            background: url()center/cover no-repeat; ">
              <a class="btn-volver" data-scroll-to href="#home">&times; {{ __("messages.backServices") }}</a>
              <div class="menu-grid">
                <div class="menu-grid_item">
                  <div class="content-services">
                    <div class="section-title title-anim  section-title-nav">
                      <h2 class="text text-stroke text-lg rellax services-txt" data-rellax-horizontal
                        data-rellax-speed="-4" data-rellax-percentage="0.5">
                        <!--<img class="img_navs" src="assets/images/iconos/database2.svg" alt="">-->
                        {{ __("messages.assetVisualization") }}
                      </h2>
                    </div>
                    <p class="ttile-navegation">{{ __("messages.saveMoney") }}<span class="moreviews" data-toggle="modal" data-target="#card1">{{ __("messages.viewMore") }}</span>
                    </p>

                    <!-------------------------------------sliders--------------------------------------------->
                    <div class="row">
                      <div class="demo-gallery">
                        <a href="assets/images/img/Services/asset/Imagen3.jpg" data-size="1600x1600"
                          data-med="assets/images/img/Services/asset/Imagen3.jpg" data-med-size="1024x1024"
                          data-author="Folkert Gorter" class="demo-gallery__img--main">
                          <img src="assets/images/img/Services/asset/Imagen3.jpg" alt="" />
                        </a>
                        <a href="assets/images/img/Services/asset/Imagen4.png" data-size="1600x1068"
                          data-med="assets/images/img/Services/asset/Imagen4.png" data-med-size="1024x683"
                          data-author="Samuel Rohl">
                          <img src="assets/images/img/Services/asset/Imagen4.png" alt="" />
                        </a>
                        <a href="assets/images/img/Services/asset/Imagen5.png" data-size="1600x1067"
                          data-med="assets/images/img/Services/asset/Imagen5.png" data-med-size="1024x683"
                          data-author="Ales Krivec">
                          <img src="assets/images/img/Services/asset/Imagen5.png" alt="" />
                        </a>
                        <a href="assets/images/img/Services/asset/Imagen6.png" data-size="1600x1067"
                          data-med="assets/images/img/Services/asset/Imagen6.png" data-med-size="1024x683"
                          data-author="Michael Hull">
                          <img src="assets/images/img/Services/asset/Imagen6.png" alt="" />
                        </a>
                        <a href="assets/images/img/Services/asset/Imagen7.png" data-size="1600x1067"
                          data-med="assets/images/img/Services/asset/Imagen7.png" data-med-size="1024x683"
                          data-author="Michael Hull">
                          <img src="assets/images/img/Services/asset/Imagen7.png" alt="" />
                        </a>
                        <a href="assets/images/img/Services/asset/Imagen9.jpg" data-size="1600x1067"
                          data-med="assets/images/img/Services/asset/Imagen9.jpg" data-med-size="1024x683"
                          data-author="Michael Hull">
                          <img src="assets/images/img/Services/asset/Imagen9.jpg" alt="" />
                        </a>
                      </div>
                    </div>
                    <!---------------------------------------------------------------------------------->
                  </div>
                </div>
                <div class="menu-grid_item">
                  <div class="main-custom ">
                    <div class="section-navegation">
                      <div class="demo-box">
                        <img class="icon-demo" src="assets/images/iconos/scanner.svg" alt="">
                        {{ __("messages.terrestrialScanning") }}
                      </div>
                      <p>{{ __("messages.asBuilt") }}.. <span class="btn-minicard moreviews"
                          data-toggle="modal" data-target="#card-mini">{{ __("messages.viewMore") }}</span></p>

                    </div>
                    <div class="section-navegation">
                      <div class="demo-box">
                        <img class="icon-demo" src="assets/images/iconos/around-the-world.svg" alt="">
                        {{ __("messages.aerialScanning") }}
                      </div>
                      <p>{{ __("messages.groundScanning") }}<span class="btn-minicard moreviews" data-toggle="modal"
                          data-target="#card-mini2">{{ __("messages.viewMore") }}</span></p>

                    </div>
                    <div class="section-navegation">

                      <div class="demo-box">
                        <img class="icon-demo" src="assets/images/iconos/database.svg" alt="">
                        {{ __("messages.assetVisualization") }}
                      </div>
                      <p>{{ __("messages.digitalTwinsExploit") }} <span class="btn-minicard moreviews" data-toggle="modal"
                          data-target="#card-mini3">{{ __("messages.viewMore") }}</span> </p>

                    </div>
                  </div>
                </div>
              </div>
            </section>

            <section id="menu2" class="section section-a  main-content_navegation main2 " style="
            background: url()center/cover no-repeat; ">
              <a class="btn-volver" data-scroll-to href="#home">&times; {{ __("messages.backServices") }}</a>
              <div class="menu-grid">
                <div class="menu-grid_item">
                  <div class="content-services">
                    <div class="section-title title-anim  section-title-nav">
                      <h2 class="text text-stroke text-lg rellax services-txt" data-rellax-horizontal
                        data-rellax-speed="-4" data-rellax-percentage="0.5">
                        <!--<img class="img_navs" src="assets/images/iconos/database2.svg" alt="">-->
                        {{ __("messages.smartTwins") }}
                      </h2>
                    </div>

                    <p class="ttile-navegation">{{ __("messages.binnopsDevelops") }}
                      <span class="moreviews" data-toggle="modal" data-target="#card2">{{ __("messages.viewMore") }}</span>
                    </p>
                    <!-------------------------------------sliders--------------------------------------------->
                    <div class="row">
                      <div class="demo-gallery">
                        <a href="assets/images/img/Services/Smart DigitalTwins/Imagen11.png" data-size="1600x1600"
                          data-med="assets/images/img/Services/Smart DigitalTwins/Imagen11.png"
                          data-med-size="1024x1024" data-author="Folkert Gorter" class="demo-gallery__img--main">
                          <img src="assets/images/img/Services/Smart DigitalTwins/Imagen11.png" alt="" />
                        </a>
                        <a href="assets/images/img/Services/Smart DigitalTwins/Imagen12.jpg" data-size="1600x1068"
                          data-med="assets/images/img/Services/Smart DigitalTwins/Imagen12.jpg" data-med-size="1024x683"
                          data-author="Samuel Rohl">
                          <img src="assets/images/img/Services/Smart DigitalTwins/Imagen12.jpg" alt="" />
                        </a>
                        <a href="assets/images/img/Services/Smart DigitalTwins/Imagen13.jpg" data-size="1600x1067"
                          data-med="assets/images/img/Services/Smart DigitalTwins/Imagen13.jpg" data-med-size="1024x683"
                          data-author="Ales Krivec">
                          <img src="assets/images/img/Services/Smart DigitalTwins/Imagen13.jpg" alt="" />
                        </a>
                        <a href="assets/images/img/Services/Smart DigitalTwins/Imagen14.gif" data-size="1600x1067"
                          data-med="assets/images/img/Services/Smart DigitalTwins/Imagen14.gif" data-med-size="1024x683"
                          data-author="Michael Hull">
                          <img src="assets/images/img/Services/Smart DigitalTwins/Imagen14.gif" alt="" />
                        </a>
                        <a href="assets/images/img/Services/Smart DigitalTwins/Imagen15.jpg" data-size="1600x1067"
                          data-med="assets/images/img/Services/Smart DigitalTwins/Imagen15.jpg" data-med-size="1024x683"
                          data-author="Michael Hull">
                          <img src="assets/images/img/Services/Smart DigitalTwins/Imagen15.jpg" alt="" />
                        </a>
                        <a href="assets/images/img/Services/Smart DigitalTwins/Imagen16.png" data-size="1600x1067"
                          data-med="assets/images/img/Services/Smart DigitalTwins/Imagen16.png" data-med-size="1024x683"
                          data-author="Michael Hull">
                          <img src="assets/images/img/Services/Smart DigitalTwins/Imagen16.png" alt="" />
                        </a>
                      </div>
                    </div>
                    <!---------------------------------------------------------------------------------->
                  </div>
                </div>
                <div class="menu-grid_item">
                  <div class="main-custom ">
                    <div class="section-navegation section-navegation-height">

                      <div class="demo-box">
                        <img class="icon-demo" src="assets/images/iconos/scanner.svg" alt="">
                        The Digital Hub
                      </div>
                      <p>{{ __("messages.afterCapturing") }}<span
                          class="btn-minicard moreviews" data-toggle="modal" data-target="#card-mini4">{{ __("messages.viewMore") }}</span>
                      </p>

                    </div>
                    <div class="section-navegation section-navegation-height section-navegation-height-modif">

                      <div class="demo-box">
                        <img class="icon-demo" src="assets/images/iconos/drone.svg" alt="">
                        {{ __("messages.digitalApplications") }}
                      </div>
                      <p class="content__items-modal">{{ __("messages.binnopsPlatform") }}<br> <span data-toggle="modal" data-target="#engineering">{{ __("messages.enginneringTitle") }},</span><span
                          data-toggle="modal" data-target="#revamps">{{ __("messages.revamps") }},</span><span data-toggle="modal"
                          data-target="#maintenace">{{ __("messages.maintenance") }},</span><span data-toggle="modal"
                          data-target="#reliabulity">{{ __("messages.reliability") }},</span> <span>&</span> <span data-toggle="modal"
                          data-target="#operations">{{ __("messages.operations") }}.</span></p>

                    </div>
                  </div>
                </div>
              </div>
            </section>

            <section id="menu3" class="section section-a  main-content_navegation main3 " style="
            background: url()center/cover no-repeat; ">
              <a class="btn-volver" data-scroll-to href="#home">&times; {{ __("messages.backServices") }}</a>
              <div class="menu-grid">
                <div class="menu-grid_item">
                  <div class="content-services">
                    <div class="section-title title-anim  section-title-nav">
                      <h2 class="text text-stroke text-lg rellax services-txt" data-rellax-horizontal
                        data-rellax-speed="-4" data-rellax-percentage="0.5">
                        <!--<img class="img_navs" src="assets/images/iconos/database2.svg" alt="">-->
                        Smart Data
                      </h2>
                    </div>

                    <p class="ttile-navegation">{{ __("messages.oneKey") }}
                      <span class="moreviews" data-toggle="modal" data-target="#card3">{{ __("messages.viewMore") }}</span>
                    </p>
                    <div class="row">
                      <div class="demo-gallery">
                        <a href="assets/images/img/Services/SmartDigital/Imagen19.png" data-size="1600x1600"
                          data-med="assets/images/img/Services/SmartDigital/Imagen19.png" data-med-size="1024x1024"
                          data-author="Folkert Gorter" class="demo-gallery__img--main">
                          <img src="assets/images/img/Services/SmartDigital/Imagen19.png" alt="" />
                        </a>
                        <a href="assets/images/img/Services/SmartDigital/Imagen20.png" data-size="1600x1068"
                          data-med="assets/images/img/Services/SmartDigital/Imagen20.png" data-med-size="1024x683"
                          data-author="Samuel Rohl">
                          <img src="assets/images/img/Services/SmartDigital/Imagen20.png" alt="" />
                        </a>
                        <a href="assets/images/img/Services/SmartDigital/Imagen21.jpg" data-size="1600x1067"
                          data-med="assets/images/img/Services/SmartDigital/Imagen21.jpg" data-med-size="1024x683"
                          data-author="Ales Krivec">
                          <img src="assets/images/img/Services/SmartDigital/Imagen21.jpg" alt="" />
                        </a>
                        <a href="assets/images/img/Services/SmartDigital/Imagen22.jpg" data-size="1600x1067"
                          data-med="assets/images/img/Services/SmartDigital/Imagen22.jpg" data-med-size="1024x683"
                          data-author="Michael Hull">
                          <img src="assets/images/img/Services/SmartDigital/Imagen22.jpg" alt="" />
                        </a>
                        <a href="assets/images/img/Services/SmartDigital/Imagen23.png" data-size="1600x1067"
                          data-med="assets/images/img/Services/SmartDigital/Imagen23.png" data-med-size="1024x683"
                          data-author="Michael Hull">
                          <img src="assets/images/img/Services/SmartDigital/Imagen23.png" alt="" />
                        </a>
                        <a href="assets/images/img/Services/SmartDigital/Imagen24.png" data-size="1600x1067"
                          data-med="assets/images/img/Services/SmartDigital/Imagen24.png" data-med-size="1024x683"
                          data-author="Michael Hull">
                          <img src="assets/images/img/Services/SmartDigital/Imagen24.png" alt="" />
                        </a>
                      </div>
                    </div>
                    <!-------------------------------------sliders--------------------------------------------->

                    <!---------------------------------------------------------------------------------->
                  </div>
                </div>
                <div class="menu-grid_item">
                  <div class="main-custom ">
                    <div class="section-navegation">

                      <div class="demo-box">
                        <img class="icon-demo" src="assets/images/iconos/scanner.svg" alt="">
                        {{ __("messages.iot") }}
                      </div>
                      <p>{{ __("messages.binoopsDigital") }}<span class="btn-minicard moreviews" data-toggle="modal"
                          data-target="#card-mini5">{{ __("messages.viewMore") }}</span></p>
                      <!---<div class="demo-gallery swiper-miniaturas">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide">
                            <a href="assets/images/1.png" data-size="1600x1600" data-med="assets/images/1.png"
                              data-med-size="1024x1024" data-author="Folkert Gorter" class="demo-gallery__img--main ">
                              <img src="assets/images/1.png" alt="" />
                            </a>
                          </div>
                          <div class="swiper-slide">
                            <a href="assets/images/1.png" data-size="1600x1600" data-med="assets/images/1.png"
                              data-med-size="1024x1024" data-author="Folkert Gorter" class="demo-gallery__img--main ">
                              <img src="assets/images/1.png" alt="" />
                            </a>
                          </div>
                          <div class="swiper-slide">
                            <a href="assets/images/1.png" data-size="1600x1600" data-med="assets/images/1.png"
                              data-med-size="1024x1024" data-author="Folkert Gorter" class="demo-gallery__img--main ">
                              <img src="assets/images/1.png" alt="" />
                            </a>
                          </div>
                          <div class="swiper-slide">
                            <a href="assets/images/1.png" data-size="1600x1600" data-med="assets/images/1.png"
                              data-med-size="1024x1024" data-author="Folkert Gorter" class="demo-gallery__img--main ">
                              <img src="assets/images/1.png" alt="" />
                            </a>
                          </div>

                        </div>


                      </div>-->
                    </div>
                    <div class="section-navegation">

                      <div class="demo-box">
                        <img class="icon-demo" src="assets/images/iconos/drone.svg" alt="">
                        {{ __("messages.rpa") }}
                      </div>
                      <p>{{ __("messages.integrateRobotized") }} </p>
                    </div>
                    <div class="section-navegation">
                      <div class="demo-box">
                        <img class="icon-demo" src="assets/images/iconos/around-the-world.svg" alt="">
                        {{ __("messages.iot") }}
                      </div>
                      <p>{{ __("messages.binnopsDigital") }}<span class="btn-minicard moreviews" data-toggle="modal"
                          data-target="#card-mini6">{{ __("messages.viewMore") }}</span></p>
                    </div>
                    <div class="section-navegation">

                      <div class="demo-box">
                        <img class="icon-demo" src="assets/images/iconos/database.svg" alt="">
                        {{ __("messages.rpa") }}
                      </div>
                      <p>{{ __("messages.integrateRobotizedProcess") }}<span class="btn-minicard moreviews"
                          data-toggle="modal" data-target="#card-mini7">{{ __("messages.viewMore") }}</span></p>
                    </div>
                    <div class="section-navegation">

                      <div class="demo-box">
                        <img class="icon-demo" src="assets/images/iconos/database.svg" alt="">
                        Data Analytics
                      </div>
                      <p>{{ __("messages.dataAnalyticRequired") }}  <span class="btn-minicard moreviews"
                          data-toggle="modal" data-target="#card-mini8">{{ __("messages.viewMore") }}</span></p>
                    </div>
                    <div class="section-navegation">

                      <div class="demo-box">
                        <img class="icon-demo" src="assets/images/iconos/database.svg" alt="">
                        {{ __("messages.ia") }}
                      </div>
                      <p>{{ __("messages.diagnosticAnalytics") }} <span class="btn-minicard moreviews"
                          data-toggle="modal" data-target="#card-mini9">{{ __('messages.viewMore') }}</span></p>
                    </div>
                    <div class="section-navegation">

                      <div class="demo-box">
                        <img class="icon-demo" src="assets/images/iconos/database.svg" alt="">
                       {{ __("messages.cibersecurity") }}
                      </div>
                      <p>{{ __("messages.peopleCibersecurity") }}<span class="btn-minicard moreviews"
                          data-toggle="modal" data-target="#card-mini10">{{ __("messages.viewMore") }}</span></p>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <!--------------------Menu content------------------------>
            <!--<section id="about" class="section section-a pt-5 pb-5 ">
              <div class="section-title title-anim overflow-hidden">
                <h2 class="text text-stroke text-lg rellax txt-whites" data-rellax-horizontal data-scroll-speed="5"
                  data-scroll-position="top" data-scroll-delay="0.05">
                  About
                </h2>
              </div>
              
              <div class="">
            
                <div class="section-content container content-width anim p30">
                  <div class="row">
                    <div class="col-12 col-lg-12 text-left">
                  
                      <div class="title-desc xl-text-size">
                        <p class="anim-1 inline-text p-blue " data-anim-visible="by-letter">
                          Lorem ipsum dolor sit amet consectetur adipisicing e
                          , <strong>focused</strong> in Lorem ipsum dolor sit
                          amet consectetur
                          <span class="text-primary">lorem</span> consectetur
                          adipisicing
                        </p>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
           
            </section>--->

            <section id="business" class="section section-a with-overflow section-white_content " >
              <div class="section-title title-left text-vert z-top"></div>
              <!-- Begin of section body -->
              <div class="section-body section-white pb-12 section-bg">
                <!-- content -->
                <div class="section-content container content-width anim">
                  <div class="row mb-4">
                    <div class="col-12 col-lg-7 text-left">
                      <!-- title and description -->
                      <div class="title-desc">
                        <h2 class="display-3 anim-1 mb-4 title-blue">{{ __("messages.businessModel") }}</h2>
                      </div>
                    </div>
                    <div class="col-lg-5 text-right">
                      <a class="btn btn-outline-b btn-white text-spaced text-uppercase title-blue" href="#about">
                        <span class="text">{{ __("messages.businessModel") }}</span>
                      </a>
                    </div>
                    <div class="col-md-12">
                      <p class="anim-2 title-blue">
                        Value Proposition. Our Digital Hub introduces a fundamental and significant change (a
                        breakthrough) in the way people perform work.

                        Because the industry workforce is aging, the capture, documentation and transfer of their
                        know-how using asset virtualization is essential. Future plant workers will greatly benefit from
                        this knowledge and thrive in a more modern 3D virtual model environment. <span class="viewmore">
                        {{ __("messages.viewMore") }}</span>
                      </p>

                      <div class="viewmore-p">
                        <p class="title-blue">{{ __("messages.plantOwners") }}</p>
                      </div>
                      <!-----  --->
                    </div>
                  </div>
                </div>

                <div class="pricing-table-wrapper">
                  <ul class="pricing-table">
                    <li class="pricing-table__item">
                      <h3 class="pricing-table__title">{{ __("messages.byProjects") }}</h3>
                      <p class="pricing-table__description">
                      <p class="pricing-table__tagline">{{ __("messages.binnopsOffers") }}</p>
                      <span class="pricing-table__price"></span>
                      </p>
                      <!-------------------------------------sliders--------------------------------------------->
                      <div class="row">
                        <div class="demo-gallery mt-0 galley-one">
                          <a href="assets/images/img/BusinessModel/1.png" data-size="1600x1600"
                            data-med="assets/images/img/BusinessModel/1.png" data-med-size="1024x1024"
                            data-author="Folkert Gorter" class="demo-gallery__img--main">
                            <img src="assets/images/img/BusinessModel/1.png" alt="" />
                          </a>

                        </div>
                      </div>
                      <!---------------------------------------------------------------------------------->
                    </li>
                    <li class="pricing-table__item pricing-table__item--popular item-card_size">
                      <h3 class="pricing-table__title">{{ __("messages.daas") }}</h3>
                      <p class="pricing-table__description">
                        <span class="span-style">{{ __("messages.dataasservice") }} </span>
                        <span class="pricing-table__tagline mb-0 pb-0 mt-1">
                          {{ __("messages.sellingData") }}
                        </span>
                        <span class="pricing-table__price"></span>
                      </p>
                      <!-------------------------------------sliders--------------------------------------------->
                      <div class="row mt-5">
                        <div class="demo-gallery mt-0" style="    grid-template-columns: 1fr 1fr;">
                          <a href="https://assets.justinmind.com/wp-content/uploads/2017/08/login-forms-web-prototyping-ux-design.png"
                            data-size="1600x1600"
                            data-med="https://assets.justinmind.com/wp-content/uploads/2017/08/login-forms-web-prototyping-ux-design.png"
                            data-med-size="1024x1024" data-author="Folkert Gorter" class="demo-gallery__img--main">
                            <img
                              src="https://assets.justinmind.com/wp-content/uploads/2017/08/login-forms-web-prototyping-ux-design.png"
                              alt="" />
                          </a>
                          <a href="assets/images/img/BusinessModel/Imagen27.png" data-size="1600x1600"
                            data-med="assets/images/img/BusinessModel/Imagen27.png" data-med-size="1024x1024"
                            data-author="Folkert Gorter" class="demo-gallery__img--main">
                            <img src="assets/images/img/BusinessModel/Imagen27.png" alt="" />
                          </a>

                        </div>
                      </div>
                      <!---------------------------------------------------------------------------------->
                    </li>
                  </ul>
                </div>
              </div>
              <!-- End of section body -->
            </section>

            <section id="aourroadmap" class="section section-a with-overflow section-white_content">
              <div class="section-title title-left text-vert z-top"></div>
              <!-- Begin of section body -->
              <div class="section-body section-white pb-12 m-1">
                <!-- content -->
                <div class="section-content container content-width anim">
                  <div class="row mb-4">
                    <div class="col-12 col-lg-9 text-left">
                      <!-- title and description -->
                      <div class="title-desc">
                        <h2 class="display-3 anim-1 mb-4 title-blue" style="font-size: 3rem !important;">{{ __("messages.transformationRoadMap") }}</h2>
                      </div>
                    </div>

                  </div>
                </div>
                <div class="timeline-lg">
                  <div id="time-1" class="timeline_body">
                    <div class="timeline_title">
                      <h3>{{ __("messages.dataCapture") }} </h3>
                    </div>
                    <div class="timeline_elements">
                      <div class="timeline_img">
                        <img src="assets/images/img/RoadMap/DataCapture/Imagen28.png" alt="">
                      </div>
                      <div class="timeline_icon">
                        <img src="assets/images/icons/touch.svg" alt="">
                      </div>
                    </div>
                  </div>
                  <div id="time-2" class="timeline_body">
                    <div class="timeline_title">
                      <h3>{{ __("messages.digitalTwin") }} </h3>
                    </div>
                    <div class="timeline_elements">
                      <div class="timeline_img">
                        <img src="assets/images/img/RoadMap/DigitalTwin/Imagen29.jpg" alt="">
                      </div>
                      <div class="timeline_icon">
                        <img src="assets/images/icons/digital.svg" alt="">
                      </div>
                    </div>
                  </div>

                  <div id="time-3" class="timeline_body">
                    <div class="timeline_title">
                      <h3>{{ __("messages.realTimeCapture") }} </h3>

                    </div>
                    <div class="timeline_elements">
                      <div class="timeline_img">
                        <img src="assets/images/img/RoadMap/RealTimeDataCapture/Imagen30.png" alt="">
                      </div>
                      <div class="timeline_icon">
                        <img src="assets/images/icons/data.svg" alt="">
                      </div>
                    </div>
                  </div>

                  <div id="time-4" class="timeline_body">
                    <div class="timeline_title">
                      <h3>{{ __("messages.dataAnalytics") }} </h3>
                    </div>
                    <div class="timeline_elements">
                      <div class="timeline_img">
                        <img src="assets/images/img/RoadMap/DataAnalytics/Imagen33.png" alt="">
                      </div>
                      <div class="timeline_icon">
                        <img src="assets/images/icons/database.svg" alt="">
                      </div>
                    </div>
                  </div>

                  <div id="time-5" class="timeline_body">
                    <div class="timeline_title">
                      <h3>{{ __("messages.iaTitle") }}
                      </h3>
                    </div>
                    <div class="timeline_elements">
                      <div class="timeline_img">
                        <img src="assets/images/img/RoadMap/ArtificialIntelligence/Imagen35.png" alt="">
                      </div>
                      <div class="timeline_icon">
                        <img src="assets/images/icons/puzzle.svg" alt="">
                      </div>
                    </div>
                  </div>
                </div>

              </div>
              <!-- End of section body -->
            </section>
            <section id="experience" class="section section-a pt-5 section-bg pb-5 ">
              <div class="section-body p-0">
                <!-- content -->
                <div class="section-content container content-width anim">
                  <div class="row mb-4">
                    <div class="col-12 col-lg-12 text-left">
                      <!-- title and description -->
                      <div class="title-desc">
                        <h2 class="display-3 anim-1 mb-4 title-blue text-center">{{ __("messages.experienceTitle") }}</h2>
                        <p class="anim-2 title-blue">
                          {{ __("messages.experienceDescription") }} <span
                            class="viewmore2">
                            <strong>{{ __("messages.viewMore") }}</strong></span>
                        </p>

                        <div class="viewmore-p2">
                          <p class="title-blue"> {{ __("messages.experienceDescription2") }} </p>
                        </div>
                        <!-----  --->

                      </div>
                    </div>

                  </div>
                </div>
                <div class="section-content content-full px-0 anim experience-main ">
                  <div class="swiper-container parent-slider container">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="item-content ">
                              <span>Barrancabermeja, Colombia</span>
                              <h3 class="title">{{ __("messages.ecoPetrolRefineryTitle") }}
                              </h3>
                              <div class="btns-group">
                                <p>{{ __("messages.ecoPetrolRefineryDescription") }}
                                </p>
                              </div>
                              <div class="row">
                                <div class="demo-gallery">
                                  <a href="assets/images/experiencia/images/Imagen 1.JPG" data-size="1600x1600"
                                    data-med="assets/images/experiencia/images/Imagen 1.JPG" data-med-size="1024x1024"
                                    data-author="Folkert Gorter" class="demo-gallery__img--main">
                                    <img src="assets/images/experiencia/images/Imagen 1.JPG" alt="" />
                                  </a>
                                  <a href="assets/images/experiencia/images/Imagen5.jpg" data-size="1600x1600"
                                    data-med="assets/images/experiencia/images/Imagen5.jpg" data-med-size="1024x1024"
                                    data-author="Folkert Gorter" class="demo-gallery__img--main">
                                    <img src="assets/images/experiencia/images/Imagen5.jpg" alt="" />
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>

                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="item-content ">
                              <span>Alberta, Canada
                              </span>
                              <h3 class="title">{{ __("messages.suncorMackayTitle") }}
                              </h3>

                              <div class="btns-group">
                                <p>{{ __("messages.suncorMackayDescription") }}
                                </p>
                              </div>
                              <div class="row">
                                <div class="demo-gallery">
                                  <a href="assets/images/experiencia/images/Imagen 3.JPG" data-size="1600x1600"
                                    data-med="assets/images/experiencia/images/Imagen 3.JPG" data-med-size="1024x1024"
                                    data-author="Folkert Gorter" class="demo-gallery__img--main">
                                    <img src="assets/images/experiencia/images/Imagen 3.JPG" alt="" />
                                  </a>
                                  <a href="assets/images/experiencia/images/Imagen1.jpg" data-size="1600x1600"
                                    data-med="assets/images/experiencia/images/Imagen1.jpg" data-med-size="1024x1024"
                                    data-author="Folkert Gorter" class="demo-gallery__img--main">
                                    <img src="assets/images/experiencia/images/Imagen1.jpg" alt="" />
                                  </a>

                                </div>
                              </div>
                            </div>
                          </div>

                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="item-content ">
                              <span>Bogotá, Colombia</span>
                              <h3 class="title">{{ __("messages.embassyTitle") }}
                              </h3>
                              <div class="btns-group">
                                <p>{{ __("messages.embassyDescription") }}
                                </p>

                              </div>
                              <div class="row">
                                <div class="demo-gallery ">
                                  <a href="assets/images/experiencia/Imagen2.png" data-size="1600x1600"
                                    data-med="assets/images/experiencia/Imagen2.png" data-med-size="1024x1024"
                                    data-author="Folkert Gorter" class="demo-gallery__img--main">
                                    <img class="logo-expe" src="assets/images/experiencia/Imagen2.png" alt="" />
                                  </a>
                                  <a href="assets/images/experiencia/Imagen6.jpg" data-size="1600x1600"
                                    data-med="assets/images/experiencia/Imagen6.jpg" data-med-size="1024x1024"
                                    data-author="Folkert Gorter" class="demo-gallery__img--main">
                                    <img src="assets/images/experiencia/Imagen6.jpg" alt="" />
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>

                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="item-content ">
                              <span>Barrancabermeja, Colombia
                              </span>
                              <h3 class="title">{{ __("messages.ecoPetrolRefineryTitle2") }}</h3>

                              <div class="btns-group">
                                <p>{{ __("messages.ecoPetrolRefineryDescription2") }}
                                </p>

                              </div>
                              <div class="row">
                                <div class="demo-gallery">
                                  <a href="assets/images/experiencia/images/Imagen4.png" data-size="1600x1600"
                                    data-med="assets/images/experiencia/images/Imagen4.png" data-med-size="1024x1024"
                                    data-author="Folkert Gorter" class="demo-gallery__img--main">
                                    <img src="assets/images/experiencia/images/Imagen4.png" alt="" />
                                  </a>
                                  <a href="assets/images/experiencia/images/Imagen 10.JPG" data-size="1600x1600"
                                    data-med="assets/images/experiencia/images/Imagen 10.JPG" data-med-size="1024x1024"
                                    data-author="Folkert Gorter" class="demo-gallery__img--main">
                                    <img src="assets/images/experiencia/images/Imagen 10.JPG" alt="" />
                                  </a>

                                </div>
                              </div>
                            </div>
                          </div>

                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="item-content ">
                              <span>Cartagena, Colombia.</span>
                              <h3 class="title">{{ __("messages.ecoPetrolCrudeUnitTitle") }} </h3>

                              <div class="btns-group">
                                <p>{{ __("messages.ecoPetrolCrudeUnitDescription") }}

                                </p>

                              </div>
                              <div class="row">
                                <div class="demo-gallery">
                                  <a href="assets/images/experiencia/images/Imagen 18.JPG" data-size="1600x1600"
                                    data-med="assets/images/experiencia/images/Imagen 18.JPG" data-med-size="1024x1024"
                                    data-author="Folkert Gorter" class="demo-gallery__img--main">
                                    <img src="assets/images/experiencia/images/Imagen 18.JPG" />
                                  </a>
                                  <a href="assets/images/experiencia/images/Imagen5.jpg" data-size="1600x1600"
                                    data-med="assets/images/experiencia/images/Imagen5.jpg" data-med-size="1024x1024"
                                    data-author="Folkert Gorter" class="demo-gallery__img--main">
                                    <img src="assets/images/experiencia/images/Imagen5.jpg" />
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>

                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="item-content ">
                              <span>Cartagena, Colombia. </span>
                              <h3 class="title">{{ __("messages.reficarPlantTitle") }}</h3>
                              <div class="btns-group">
                                <p>{{ __("messages.reficarPlantDescription") }}
                                </p>
                              </div>
                              <div class="row">
                                <div class="demo-gallery ">
                                  <a href="assets/images/experiencia/images/Imagen 27.jpeg" data-size="1600x1600"
                                    data-med="assets/images/experiencia/images/Imagen 27.jpeg" data-med-size="1024x1024"
                                    data-author="Folkert Gorter" class="demo-gallery__img--main">
                                    <img src="assets/images/experiencia/images/Imagen 27.jpeg" />
                                  </a>
                                  <a href="assets/images/experiencia/images/Imagen 25.jpeg" data-size="1600x1600"
                                    data-med="assets/images/experiencia/images/Imagen 25.jpeg" data-med-size="1024x1024"
                                    data-author="Folkert Gorter" class="demo-gallery__img--main">
                                    <img src="assets/images/experiencia/images/Imagen 25.jpeg" />
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>

                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="item-content ">
                              <span>Angola, Africa</span>
                              <h3 class="title">{{ __("messages.takulaComplexTitle") }}
                              </h3>

                              <div class="btns-group">
                                <p>{{ __("messages.takulaComplexDescription") }}</p>

                              </div>
                              <div class="row">
                                <div class="demo-gallery">
                                  <a href="assets/images/experiencia/images/Imagen 15.JPG" data-size="1600x1600"
                                    data-med="assets/images/experiencia/images/Imagen 15.JPG" data-med-size="1024x1024"
                                    data-author="Folkert Gorter" class="demo-gallery__img--main">
                                    <img src="assets/images/experiencia/images/Imagen 15.JPG" alt="" />
                                  </a>
                                  <a href="assets/images/experiencia/images/Imagen8.jpg" data-size="1600x1600"
                                    data-med="assets/images/experiencia/images/Imagen8.jpg" data-med-size="1024x1024"
                                    data-author="Folkert Gorter" class="demo-gallery__img--main">
                                    <img src="assets/images/experiencia/images/Imagen8.jpg" />
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>

                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="item-content ">
                              <span>Puerto Gaitan, Colombia</span>
                              <h3 class="title">{{ __("messages.processingFacilityTitle") }}</h3>
                              <div class="btns-group">
                                <p>{{ __("messages.processingFacilityDescription") }}</p>

                              </div>
                              <div class="row">
                                <div class="demo-gallery">
                                  <a href="assets/images/experiencia/images/Imagen9.jpg" data-size="1600x1600"
                                    data-med="assets/images/experiencia/images/Imagen9.jpg" data-med-size="1024x1024"
                                    data-author="Folkert Gorter" class="demo-gallery__img--main">
                                    <img src="assets/images/experiencia/images/Imagen9.jpg" />
                                  </a>
                                  <a href="assets/images/experiencia/images/Imagen 23.JPG" data-size="1600x1600"
                                    data-med="assets/images/experiencia/images/Imagen 23.JPG" data-med-size="1024x1024"
                                    data-author="Folkert Gorter" class="demo-gallery__img--main">
                                    <img src="assets/images/experiencia/images/Imagen 23.JPG" />
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>

                        </div>

                      </div>
                      <div class="swiper-slide">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="item-content ">
                              <span>Cajicá, Colombia.</span>
                              <h3 class="title">{{ __("messages.processPlantTitle") }}
                              </h3>

                              <div class="btns-group">
                                <p>{{ __("messages.processPlantDescription1") }}

                                </p>
                                <p>
                                  {{ __("messages.processPlantDescription2") }}</p>

                              </div>
                              <div class="row">
                                <div class="demo-gallery ">
                                  <a href="assets/images/experiencia/Imagen1.jpg" data-size="1600x1600"
                                    data-med="assets/images/experiencia/Imagen1.jpg" data-med-size="1024x1024"
                                    data-author="Folkert Gorter" class="demo-gallery__img--main">
                                    <img src="assets/images/experiencia/Imagen1.jpg" alt="" />
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>

                        </div>
                      </div>
                      <!--<div class="swiper-slide">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="item-content ">
                              <span>Brinsa SA
                              </span>
                              <h3 class="title">Análisis de capacidad de los salmueroductos
                              </h3>
                              <div class="items-exp">
                                <span> <i class="fa fa-map-marker" aria-hidden="true"></i>
                                  Cajicá, Colombia
                                </span>
                                <span><i class="fa fa-clock-o" aria-hidden="true"></i>
                                  6 meses
                                </span>
                              </div>
                              <div class="btns-group">
                                <p>Georreferenciación superficial de la línea en campo para verificación de ubicación
                                  y recorrido de los salmueroductos
                                  <br> <br> Inspección con radar de penetración (GPR), desarrollo de simulación
                                  hidráulica de los salmueroductos mediante el uso de planos Asbuilt <br> <br>
                                  Verificación de esfuerzos, análisis de golpe de ariete y surges permitidos en tiempo
                                  y presión teniendo en cuenta las condiciones de operación de la tubería.
                                </p>
                
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="swiper-container child-slider demo-gallery">
                              <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                  <a href="assets/images/1.png" data-size="1600x1600" data-med="assets/images/1.png"
                                    data-med-size="1024x1024" data-author="Folkert Gorter"
                                    class="demo-gallery__img--main">
                                    <img src="assets/images/1.png" alt="" />
                                  </a>
                
                                </div>
                
                              </div>
                          
                            </div>
                          </div>
                        </div>
                      </div>-->
                      <div class="swiper-slide">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="item-content ">
                              <span>Houston, Texas</span>
                              <h3 class="title">{{ __("messages.pipeRacksTitle") }}</h3>

                              <div class="btns-group">
                                <p>{{ __("messages.pipeRacksDescription") }}
                                </p>

                              </div>
                              <div class="row">
                                <div class="demo-gallery">
                                  <a href="assets/images/experiencia/images/Imagen 12.JPG" data-size="1600x1600"
                                    data-med="assets/images/experiencia/images/Imagen 12.JPG" data-med-size="1024x1024"
                                    data-author="Folkert Gorter" class="demo-gallery__img--main">
                                    <img src="assets/images/experiencia/images/Imagen 12.JPG" alt="" />
                                  </a>
                                  <a href="assets/images/experiencia/images/Imagen11.jpg" data-size="1600x1600"
                                    data-med="assets/images/experiencia/images/Imagen11.jpg" data-med-size="1024x1024"
                                    data-author="Folkert Gorter" class="demo-gallery__img--main">
                                    <img src="assets/images/experiencia/images/Imagen11.jpg" alt="" />
                                  </a>

                                </div>
                              </div>
                            </div>
                          </div>

                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="item-content ">
                              <span>Cartagena Refinery</span>
                              <h3 class="title">{{ __("messages.steamGenerationTitle") }}</h3>

                              <div class="btns-group">
                                <p>{{ __("messages.steamGenerationDescription") }}
                                </p>

                              </div>
                              <div class="row">
                                <div class="demo-gallery">
                                  <a href="assets/images/experiencia/images/Imagen 20.JPG" data-size="1600x1600"
                                    data-med="assets/images/experiencia/images/Imagen 20.JPG" data-med-size="1024x1024"
                                    data-author="Folkert Gorter" class="demo-gallery__img--main">
                                    <img src="assets/images/experiencia/images/Imagen 20.JPG" />
                                  </a>
                                  <a href="assets/images/experiencia/images/Imagen12.jpg" data-size="1600x1600"
                                    data-med="assets/images/experiencia/images/Imagen12.jpg" data-med-size="1024x1024"
                                    data-author="Folkert Gorter" class="demo-gallery__img--main">
                                    <img src="assets/images/experiencia/images/Imagen12.jpg" />
                                  </a>

                                </div>
                              </div>
                            </div>
                          </div>

                        </div>
                      </div>

                      <!---<div class="swiper-slide">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="item-content ">
                              <span>Acuren Industrial Services
                              </span>
                              <h3 class="title">Análisis de tanques en Mesh Conversion & Polyworks Software </h3>
                              <div class="items-exp">
                                <span> <i class="fa fa-map-marker" aria-hidden="true"></i>
                                  Alberta, Canadá
                                </span>
                                <span><i class="fa fa-clock-o" aria-hidden="true"></i>
                                  En ejecución
                                </span>
                              </div>
                              <div class="btns-group">
                                <p>Servicios técnicos relacionados con el registro de datos escaneo y análisis de
                                  tanques de almacenamiento de petróleo, utilizando Mesh Conversion & Polyworks
                                  Software.
                
                                </p>
                
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="swiper-container child-slider demo-gallery">
                              <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                  <a href="assets/images/experiencia/Imagentanque.png" data-size="1600x1600"
                                    data-med="assets/images/experiencia/Imagentanque.png" data-med-size="1024x1024"
                                    data-author="Folkert Gorter" class="demo-gallery__img--main">
                                    <img src="assets/images/experiencia/Imagentanque.png" alt="" />
                                  </a>
                
                                </div>
                                <div class="swiper-slide">
                                  <a href="assets/images/experiencia/Imagentanque2.png" data-size="1600x1600"
                                    data-med="assets/images/experiencia/Imagentanque2.png" data-med-size="1024x1024"
                                    data-author="Folkert Gorter" class="demo-gallery__img--main">
                                    <img src="assets/images/experiencia/Imagentanque2.png" alt="" />
                                  </a>
                
                
                                </div>
                                <div class="swiper-slide">
                                  <a href="assets/images/experiencia/Imagentanque3.png" data-size="1600x1600"
                                    data-med="assets/images/experiencia/Imagentanque3.png" data-med-size="1024x1024"
                                    data-author="Folkert Gorter" class="demo-gallery__img--main">
                                    <img src="assets/images/experiencia/Imagentanque3.png" alt="" />
                                  </a>
                
                                </div>
                                <div class="swiper-slide">
                                  <a href="assets/images/experiencia/Imagentanque4.png" data-size="1600x1600"
                                    data-med="assets/images/experiencia/Imagentanque4.png" data-med-size="1024x1024"
                                    data-author="Folkert Gorter" class="demo-gallery__img--main">
                                    <img src="assets/images/experiencia/Imagentanque4.png" alt="" />
                                  </a>
                
                                </div>
                              </div>
                              <div class="swiper-pagination swiper-pagination-child"></div>
                              <div class="swiper-button-prev"></div>
                              <div class="swiper-button-next"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="item-content ">
                              <span>Shell
                
                              </span>
                              <h3 class="title">Modelación 3D refinería Shell Deer Park
                              </h3>
                              <div class="items-exp">
                                <span> <i class="fa fa-map-marker" aria-hidden="true"></i>
                                  Houston, Texas
                                </span>
                                <span><i class="fa fa-clock-o" aria-hidden="true"></i>
                                  En ejecución
                                </span>
                              </div>
                              <div class="btns-group">
                                <p>Servicio de Modelación 3D de 42.000 metros lineales de racks de líneas de proceso
                                  para la refinería de Shell Deer Park en Texas
                                </p>
                
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="swiper-container child-slider demo-gallery">
                              <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                  <a href="assets/images/experiencia/images/Imagen 17.JPG" data-size="1600x1600"
                                    data-med="assets/images/experiencia/images/Imagen 17.JPG" data-med-size="1024x1024"
                                    data-author="Folkert Gorter" class="demo-gallery__img--main">
                                    <img src="assets/images/experiencia/images/Imagen 17.JPG" />
                                  </a>
                
                                </div>
                              </div>
                              <div class="swiper-pagination swiper-pagination-child"></div>
                              <div class="swiper-button-prev"></div>
                              <div class="swiper-button-next"></div>
                
                
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="item-content ">
                              <span>Ecopetrol
                              </span>
                              <h3 class="title">Verificación de condiciones As Built refinería Cartagena – Bloque R
                
                              </h3>
                              <div class="items-exp">
                                <span> <i class="fa fa-map-marker" aria-hidden="true"></i>
                                  Cartagena
                
                                </span>
                                <span><i class="fa fa-clock-o" aria-hidden="true"></i>
                                  1 meses
                
                                </span>
                              </div>
                              <div class="btns-group">
                                <p>Servicio de Inspección de Campo, medición y verificación de condiciones As Built de
                                  la planta de Crudo Bloque R de la Refinería de Cartagena
                
                                </p>
                
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="swiper-container child-slider demo-gallery">
                              <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                  <a href="assets/images/experiencia/images/Imagen 20.JPG" data-size="1600x1600"
                                    data-med="assets/images/experiencia/images/Imagen 20.JPG" data-med-size="1024x1024"
                                    data-author="Folkert Gorter" class="demo-gallery__img--main">
                                    <img src="assets/images/experiencia/images/Imagen 20.JPG" />
                                  </a>
                
                                </div>
                                <div class="swiper-slide">
                                  <a href="assets/images/experiencia/images/Imagen 21.JPG" data-size="1600x1600"
                                    data-med="assets/images/experiencia/images/Imagen 21.JPG" data-med-size="1024x1024"
                                    data-author="Folkert Gorter" class="demo-gallery__img--main">
                                    <img src="assets/images/experiencia/images/Imagen 21.JPG" />
                                  </a>
                
                                </div>
                
                              </div>
                              <div class="swiper-pagination swiper-pagination-child"></div>
                              <div class="swiper-button-prev"></div>
                              <div class="swiper-button-next"></div>
                            </div>
                          </div>
                        </div>
                      </div>--->
                    </div>
                    <!-- next / prev arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <!-- !next / prev arrows -->

                    <!-- pagination dots -->
                    <div class="swiper-pagination"></div>
                  </div>

                </div>
              </div>
              <!-- End of section body -->
            </section>
            <section id="blog" class="section section-a section-white">
              <div class="section-body p-0">

                <div class="section-content container content-width anim">
                  <div class="row mb-4">
                    <div class="col-12 col-lg-7 text-left">
                      <!-- title and description -->
                      <div class="title-desc">
                        <h2 class="display-3 anim-1 mb-4 title-blue" style="">Blog</h2>

                      </div>
                    </div>
                    <div class="col-lg-5 text-right">
                      <a class="btn btn-outline-b btn-white text-spaced text-uppercase title-blue" href="#about">
                        <span class="text">blog</span>
                      </a>
                    </div>
                  </div>

                  <div class="item-list row row-cols-1 row-cols-md-2 g-5">
                    <div class="col">

                      <a class="item item-feature-c" href="single.html">
                        <div class="item-img anim-hover">
                          <img class="fit" src="assets/images/img/Home/3.jpg" alt="team member" />
                        </div>
                        <div class="icon">
                          <span class="icon-text">01</span>
                        </div>
                        <div class="item-body">
                          <h4 class=" title-blue">Look to New Technologies as Project Economics Shift</h4>
                          <span class="btn btn-overline-a  title-blue"> Learn more </span>
                        </div>
                      </a>
                    </div>

                  </div>

                </div>
              </div>

            </section>
            <section class="section section-a section-white section-bg p-2">
              <div class="section-content container content-width anim">
                <!------ <div class="row mb-4">
                  <div class="col-12 col-lg-7 text-left">
              
                    <div class="title-desc">
                      <h2 class="display-3 anim-1 mb-4 title-blue">Partners</h2>
                    </div>
                  </div>
                  <div class="col-lg-5 text-right">
                    <a class="btn btn-outline-b btn-white text-spaced text-uppercase title-blue" href="#about">
                      <span class="text">Partners</span>
                    </a>
                  </div>
                </div>--->
              </div>
              <div class="container swiper-partners">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <img src="assets/images/partners/azlogica.png" alt="" />
                  </div>
                  <div class="swiper-slide">
                    <img src="assets/images/partners/Calyx.png" alt="" />
                  </div>
                  <div class="swiper-slide">
                    <img src="assets/images/partners/guane.png" alt="" />
                  </div>
                  <div class="swiper-slide">
                    <img src="assets/images/partners/hub_consulting.jpg" alt="" />
                  </div>
                  <div class="swiper-slide">
                    <img src="assets/images/partners/lumon.png" alt="" />
                  </div>
                  <div class="swiper-slide">
                    <img src="assets/images/partners/volrod.jpg" alt="" />
                  </div>
                </div>
              </div>
            </section>
            <!---<section class="pre-footer section section-a mt-0" style="background-image: url('assets/images/card4.jpg');">
              <div class="row">
                <div class="col-md-12 flex-contact">
                  <h2 class="display-3 anim-1 mb-4">{{ __("messages.contactUs") }}</h2>
                  <p>{{ __("messages.reach") }}
                  </p>
                </div>
              </div>
            </section>--->
            <div class="c-fixed_wrapper is-inview fix-sect mt-0" data-scroll="" data-scroll-call="dynamicBackground"
              data-scroll-repeat="" style="background-color: rgb(201, 212, 211);">
              <div class="c-fixed_target" id="fixed-target"></div>
              <div class="c-fixed is-inview pre-footer" data-scroll="" data-scroll-sticky="" data-scroll-target="#fixed-target"
                style="background-image: url('assets/images/card2.jpg'); ">
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
              <div class="section-body section-contact pt-0" style="padding-top: 4rem;" itemscope itemtype="https://schema.org/Organization">
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
                            <select class="form-select" aria-label="Default select example">
                              <option class="col">{{ __("messages.usOffice") }}</option>
                              <option class="usa">{{ __("messages.colombiaOffice") }}</option>
                            </select>
                            <div id="info-col">
                              <p class="direction">{{ __("messages.address") }}</p>

                              <div class="d-flex align-items-center">

                                <a class="email email-main btn-inline" href="mailto: contact@binnops.com"
                                  itemprop="email">
                                  contact@binnops.com</a>
                                <!---<button class="btn-fab btn-white ml-3" data-toggle="modal" data-target="#messageModal">
                                  <span class="icon"><i class="ion-md-mail"></i></span>
                                </button>--->
                              </div>
                              <div class="d-flex align-items-center">
                                <a class="contact-main btn-inline url-phone phone" href="tel:+1 713 429 1912"
                                  itemprop="phone">
                                  +1 713 429 1912</a>
                              </div>
                            </div>
                            <div id="info-usa">

                            </div>


                          </div>
                        </div>
                        <div class="col-md-5">
                          <form id="form-message" class="form-a form-message form-message" method="post"
                            action="ajaxserver/serverfile.php">
                            <div class="mb-3">
                              <label for="name-message" class="form-label">{{ __("messages.name") }}</label>
                              <input type="text" class="form-control form-control-a" id="name-message"
                                placeholder="Firstname Lastname" required />
                            </div>
                            <div class="mb-3">
                              <label for="email-message" class="form-label">{{ __("messages.email") }}</label>
                              <input type="email" class="form-control form-control-a" id="email-message"
                                placeholder="your@email.com" required />
                            </div>
                            <div class="mb-3">
                              <label for="message-message" class="form-label">{{ __("messages.message") }}</label>
                              <textarea class="form-control form-control-b" id="message-message"
                                placeholder="Hello, your message" required></textarea>
                            </div>
                            <div class="mt-4">
                              <button class="btn btn-solid btn-white rounded-pill">
                                <span class="text">{{ __("messages.sendMessage") }}</span>
                              </button>
                            </div>
                          </form>
                        </div>
                        <div class="certifications">
                          <img src="assets/images/certifications/Logo_for_client_1110011 (1).png" alt="">
                          <img src="assets/images/certifications/Logo_for_client_1110012.png" alt="">
                          <img src="assets/images/certifications/Logo_for_client_1110013_2018.png" alt="">
                          <img src="assets/images/certifications/Logo_for_client_1110074.png" alt="">
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

  <nav class="container-fluid px-0">
    <button class="navbar-toggler menux" type="button" data-toggle="collapse" data-target="#navbarMenuCollapse"
      aria-controls="navbarMenuCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="icon icon-menu icon-menu-c">
        <img src="assets/images/icon.png" alt="">
        <!--<span class="bars">
          <span class="bar1"></span>
          <span class="bar2"></span>
        </span>-->
      </span>
    </button>

    <div class="collapse navbar-collapse order-lg-1" id="navbarMenuCollapse">
      <div class="navbar-menu-wrapper">
        <div class="nav-body">
          <div class="nav-fullscreen-lg">
            <ul class="navbar-nav nav">
              <li class="nav-item">
                <a class="nav-link" data-scroll-to aria-current="page" data-scroll href="#home"> {{ __("messages.home")  }}</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-scroll-to data-scroll href="#products">{{ __("messages.products")  }}
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-scroll-to data-scroll href="#business">{{ __("messages.businessModel") }}</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-scroll-to data-scroll href="#exprience">{{ __("messages.experienceTitle") }}
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-scroll-to data-scroll href="#aourroadmap">{{ __("messages.transformationRoadMap") }}
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-scroll-to data-scroll href="#blog">Blog
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-scroll-to data-scroll href="#contact">{{ __("messages.contact") }}
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="pswp__bg"></div>
    <div class="pswp__scroll-wrap">
      <div class="pswp__container">
        <div class="pswp__item"></div>
        <div class="pswp__item"></div>
        <div class="pswp__item"></div>
      </div>
      <div class="pswp__ui pswp__ui--hidden">
        <div class="pswp__top-bar">
          <div class="pswp__counter"></div>
          <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
          <button class="pswp__button pswp__button--share" title="Share"></button>
          <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
          <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
          <div class="pswp__preloader">
            <div class="pswp__preloader__icn">
              <div class="pswp__preloader__cut">
                <div class="pswp__preloader__donut"></div>
              </div>
            </div>
          </div>
        </div>
        <!-- <div class="pswp__loading-indicator"><div class="pswp__loading-indicator__line"></div></div> -->
        <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
          <div class="pswp__share-tooltip">
            <!-- <a href="#" class="pswp__share--facebook"></a>
            <a href="#" class="pswp__share--twitter"></a>
            <a href="#" class="pswp__share--pinterest"></a>
            <a href="#" download class="pswp__share--download"></a> -->
          </div>
        </div>
        <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
        <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
        <div class="pswp__caption">
          <div class="pswp__caption__center">
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="card1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
      <div class="modal-content modal_cards-styles">
        <button type="button" class="close text-right mr-3 mt-2" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="modal-body">
          <h3 class="titles-modals">{{ __("messages.assetVisualization") }}</h3>
          <p> {{ __("messages.assetVisualization2") }} </p>
        </div>

      </div>
    </div>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="card2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
      <div class="modal-content modal_cards-styles">
        <button type="button" class="close text-right mr-3 mt-2" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="modal-body">
          <h3 class="titles-modals">{{ __("messages.smartTwins") }}</h3>
          <p>{{ __("messages.smarTwinsDescription1") }}</p>
          <p> {{ __("messages.smarTwinsDescription2") }} </p>
        </div>

      </div>
    </div>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="card3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
      <div class="modal-content modal_cards-styles">
        <button type="button" class="close text-right mr-3 mt-2" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="modal-body">
          <h3 class="titles-modals">Smart Data Management</h3>
          <p>{{ __("messages.smartDataDescription1") }}
          </p>
          <p>{{ __("messages.smartDataDescription2") }}</p>

        </div>

      </div>
    </div>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="card3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
      <div class="modal-content">
        <button type="button" class="close text-right mr-3 mt-2" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="modal-body">
          <h3 class="titles-modals">Digital Data</h3>
          <p> {{ __("messages.digitalDataDescription") }} </p>
        </div>

      </div>
    </div>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="card-mini" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
      <div class="modal-content modal_cards-styles">
        <button type="button" class="close text-right mr-3 mt-2" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="modal-body">
          <h3 class="titles-modals">{{ __("messages.terrestrialScanning") }}</h3>
          <p>{{ __("messages.terrestrialScanningDescription1") }} </p>
          <p> {{ __("messages.terrestrialScanningDescription2") }} </p>
        </div>

      </div>
    </div>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="card-mini2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
      <div class="modal-content modal_cards-styles">
        <button type="button" class="close text-right mr-3 mt-2" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="modal-body">
          <h3 class="titles-modals"> {{ __("messages.aerialScannig") }}</h3>

          <p>{{ __("messages.aerialScanningDescription") }} </p>
        </div>

      </div>
    </div>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="card-mini3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
      <div class="modal-content modal_cards-styles">
        <button type="button" class="close text-right mr-3 mt-2" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="modal-body">
          <h3 class="titles-modals">{{ __("messages.assetVisualization") }}</h3>

          <p>{{ __("messages.aerialScanningDescription") }}</p>
        </div>

      </div>
    </div>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="card-mini4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
      <div class="modal-content modal_cards-styles">
        <button type="button" class="close text-right mr-3 mt-2" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="modal-body">
          <h3 class="titles-modals">The Digital Hub</h3>

          <p>{{ __("messages.digitalHubDescription1") }}
          </p>

          <p> {{ __("messages.digitalHubDescription2") }}</p>
          <p> {{ __("messages.digitalHubDescription3") }}</p>
        </div>

      </div>
    </div>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="card-mini5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
      <div class="modal-content modal_cards-styles">
        <button type="button" class="close text-right mr-3 mt-2" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="modal-body">
          <h3 class="titles-modals">{{ __("messages.iot") }}</h3>

          <p>{{ __("messages.iotDescription1") }}
          </p>

          <p> {{ __("messages.iotDescription2") }}</p>

        </div>

      </div>
    </div>
  </div>
   <!-- Modal -->
  <div class="modal fade" id="card-mini6" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
      <div class="modal-content modal_cards-styles">
        <button type="button" class="close text-right mr-3 mt-2" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="modal-body">
          <h3 class="titles-modals">{{ __("messages.iot") }}</h3>

          <p>{{ __("messages.iotDescription1") }}


          </p>

          <p> {{ __("messages.iotDescription2") }}
          </p>

        </div>

      </div>
    </div>
  </div>
   <!-- Modal -->
  <div class="modal fade" id="card-mini7" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
      <div class="modal-content modal_cards-styles">
        <button type="button" class="close text-right mr-3 mt-2" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="modal-body">
          <h3 class="titles-modals">{{ __("messages.rpa") }}:</h3>

          <p>{{ __("messages.rpaDescription1") }}
          </p>

          <p> {{ __("messages.rpaDescription2") }}
          </p>

        </div>

      </div>
    </div>
  </div>
   <!-- Modal -->
  <div class="modal fade" id="card-mini8" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
    <div class="modal-content modal_cards-styles">
      <button type="button" class="close text-right mr-3 mt-2" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      <div class="modal-body">
        <h3 class="titles-modals">{{ __("messages.dataAnalytics") }}</h3>

        <p> {{ __("messages.dataAnalyticsDescription1") }}
        </p>

        <p> {{ __("messages.dataAnalyticsDescription2") }}
        </p>

      </div>

    </div>
  </div>
</div>
 <!-- Modal -->
<div class="modal fade" id="card-mini9" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
aria-hidden="true">
<div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
  <div class="modal-content modal_cards-styles">
    <button type="button" class="close text-right mr-3 mt-2" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    <div class="modal-body">
      <h3 class="titles-modals">{{ __("messages.ia") }} </h3>

      <p>{{ __("messages.iaDescription1") }}
      </p>

      <p> {{ __("messages.iaDescription2") }}
      </p>

    </div>

  </div>
</div>
</div>
 <!-- Modal -->
<div class="modal fade" id="card-mini10" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
aria-hidden="true">
<div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
  <div class="modal-content modal_cards-styles">
    <button type="button" class="close text-right mr-3 mt-2" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    <div class="modal-body">
      <h3 class="titles-modals">{{ __("messages.cibersecurity") }}  </h3>

      <p>
        {{ __("messages.cibersecurityDescription") }}
      </p>

  

    </div>

  </div>
</div>
</div>
  <!-- Modal -->
  <div class="modal fade" id="engineering" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
      <div class="modal-content modal_cards-styles">
        <button type="button" class="close text-right mr-3 mt-2" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="modal-body">
          <h3 class="titles-modals">{{ __("messages.enginneringTitle") }}</h3>
          <p>{{ __("messages.enginneringDescription1") }}</p>

          <p>{{ __("messages.enginneringDescription2") }} </p>

          <p>{{ __("messages.enginneringDescription3") }}</p>
          <div class="row">
            <div class="demo-gallery galley-one">
              <a href="assets/images/img/Services/Smart DigitalTwins/LinkinEngineering/Imagen36.png"
                data-size="1600x1600"
                data-med="assets/images/img/Services/Smart DigitalTwins/LinkinEngineering/Imagen36.png"
                data-med-size="1024x1024" data-author="Folkert Gorter" class="demo-gallery__img--main">
                <img src="assets/images/img/Services/Smart DigitalTwins/LinkinEngineering/Imagen36.png" alt="" />
              </a>

            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="revamps" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
      <div class="modal-content modal_cards-styles">
        <button type="button" class="close text-right mr-3 mt-2" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="modal-body">
          <h3 class="titles-modals">{{ __("messages.revamps") }}</h3>
          <p>{{ __("messages.revampsDescription") }}
          </p>

          <p> {{ __("messages.revampsDescription2") }} </p>

          <div class="row">
            <div class="demo-gallery galley-one">
              <a href="assets/images/img/Services/Smart DigitalTwins/Revamps/Imagen43.jpg" data-size="1600x1600"
                data-med="assets/images/img/Services/Smart DigitalTwins/Revamps/Imagen43.jpg" data-med-size="1024x1024"
                data-author="Folkert Gorter" class="demo-gallery__img--main">
                <img src="assets/images/img/Services/Smart DigitalTwins/Revamps/Imagen43.jpg" alt="" />
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="maintenace" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
      <div class="modal-content modal_cards-styles">
        <button type="button" class="close text-right mr-3 mt-2" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="modal-body">
          <h3 class="titles-modals">{{ __("messages.maintenance") }}</h3>
          <p>{{ __("messages.maintencanceDescription1") }}
          </p>
          <p>{{ __("messages.maintenanceDescription2") }}

          </p>
          <div class="row">
            <div class="demo-gallery">
              <a href="assets/images/img/Services/Smart DigitalTwins/Maintenance/Imagen40.png" data-size="1600x1600"
                data-med="assets/images/img/Services/Smart DigitalTwins/Maintenance/Imagen40.png"
                data-med-size="1024x1024" data-author="Folkert Gorter" class="demo-gallery__img--main">
                <img src="assets/images/img/Services/Smart DigitalTwins/Maintenance/Imagen40.png" alt="" />
              </a>
              <a href="assets/images/img/Services/Smart DigitalTwins/Maintenance/Imagen41.png" data-size="1600x1600"
                data-med="assets/images/img/Services/Smart DigitalTwins/Maintenance/Imagen41.png"
                data-med-size="1024x1024" data-author="Folkert Gorter" class="demo-gallery__img--main">
                <img src="assets/images/img/Services/Smart DigitalTwins/Maintenance/Imagen41.png" alt="" />
              </a>
              <a href="assets/images/img/Services/Smart DigitalTwins/Maintenance/Imagen42.png" data-size="1600x1600"
                data-med="assets/images/img/Services/Smart DigitalTwins/Maintenance/Imagen42.png"
                data-med-size="1024x1024" data-author="Folkert Gorter" class="demo-gallery__img--main">
                <img src="assets/images/img/Services/Smart DigitalTwins/Maintenance/Imagen42.png" alt="" />
              </a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="#reliabulity" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
      <div class="modal-content modal_cards-styles">
        <button type="button" class="close text-right mr-3 mt-2" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="modal-body">
          <h3 class="titles-modals">{{ __("messages.reliability") }}</h3>
          <p>{{ __("messages.reliabilityDescription") }}
          </p>
          <div class="row">
            <div class="demo-gallery">
              <a href="assets/images/img/Services/Smart DigitalTwins/fabrication/Imagen37.png" data-size="1600x1600"
                data-med="assets/images/img/Services/Smart DigitalTwins/fabrication/Imagen37.png"
                data-med-size="1024x1024" data-author="Folkert Gorter" class="demo-gallery__img--main">
                <img src="assets/images/img/Services/Smart DigitalTwins/fabrication/Imagen37.png" alt="" />
              </a>
              <a href="assets/images/img/Services/Smart DigitalTwins/fabrication/Imagen38.png" data-size="1600x1600"
                data-med="assets/images/img/Services/Smart DigitalTwins/fabrication/Imagen38.png"
                data-med-size="1024x1024" data-author="Folkert Gorter" class="demo-gallery__img--main">
                <img src="assets/images/img/Services/Smart DigitalTwins/fabrication/Imagen38.png" alt="" />
              </a>
              <a href="assets/images/img/Services/Smart DigitalTwins/fabrication/Imagen39.png" data-size="1600x1600"
                data-med="assets/images/img/Services/Smart DigitalTwins/fabrication/Imagen39.png"
                data-med-size="1024x1024" data-author="Folkert Gorter" class="demo-gallery__img--main">
                <img src="assets/images/img/Services/Smart DigitalTwins/fabrication/Imagen39.png" alt="" />
              </a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="#operations" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
      <div class="modal-content modal_cards-styles">
        <button type="button" class="close text-right mr-3 mt-2" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="modal-body">
          <h3 class="titles-modals">{{ __("messages.operations") }}</h3>
          <p>{{ __("messages.operationsDescription1") }}
          </p>

          <p>
            {{ __("messages.operationsDescription2") }}
          </p>
          <div class="row">
            <div class="demo-gallery">
              <a href="assets/images/img/Services/Smart DigitalTwins/Operations/Imagen44.png" data-size="1600x1600"
                data-med="assets/images/img/Services/Smart DigitalTwins/Operations/Imagen44.png"
                data-med-size="1024x1024" data-author="Folkert Gorter" class="demo-gallery__img--main">
                <img src="assets/images/img/Services/Smart DigitalTwins/Operations/Imagen44.png" alt="" />
              </a>
              <a href="assets/images/img/Services/Smart DigitalTwins/Operations/Imagen45.jpg" data-size="1600x1600"
                data-med="assets/images/img/Services/Smart DigitalTwins/Operations/Imagen45.jpg"
                data-med-size="1024x1024" data-author="Folkert Gorter" class="demo-gallery__img--main">
                <img src="assets/images/img/Services/Smart DigitalTwins/Operations/Imagen45.jpg" alt="" />
              </a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="#integrity" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
      <div class="modal-content modal_cards-styles">
        <button type="button" class="close text-right mr-3 mt-2" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="modal-body">
          <h3 class="titles-modals">Integrity</h3>
          <p>{{ __("messages.integrityDescription1") }}
          </p>

          <p>
           {{ __("messages.integrityDescription2") }}
          </p>

        </div>
      </div>
    </div>
  </div>
  <!----VIDEO----->
  <div class="modal fade" id="#videohome" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
    <div class="modal-content modal_cards-styles">
      <button type="button" class="close text-right mr-3 mt-2" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      <div class="modal-body">
      
        <p>{{ __("messages.integrityDescription1") }}
        </p>


      </div>
    </div>
  </div>
</div>


<div class="modal fade bd-example-modal-lg videoo" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    <div class="modal-content">
      <iframe width="100%" height="500" src="https://www.youtube.com/embed/ngElkyQ6Rhs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </div>
</div>

@endsection