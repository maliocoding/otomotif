<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>RBA VARIASI | Aksesoris - Variasi - Kaca Film - Cover Jok - Audio</title>
    <meta name="description" content="Toko aksesoris mobil,variasi, cover jok, audio, pemasangan kaca film, dll di Bandung dan Kabupaten Bandung, Jl. Kopo No.538, Margasuka, Kec. Babakan Ciparay, Kota Bandung, Jawa Barat 40225, telp: 0821-1784-1712  ">
    <meta name="keywords" content="rbavariasi, rba variasi, aksesoris mobil, variasi, car accessories, kaca film, bandung">
    <meta name="author" content="maliocoding">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="STGcKmtuPwDjy18BPGf7uHGdeo1vFefxZzeQUnF0xEQ" />
    <!-- Favicon -->
   
    @include('public.css')

    <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-157838483-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-157838483-1');
        </script>


</head>

<body>

    <!-- Main Wrapper Start -->
    <!--header area start-->
    <header class="header_area">
        <!--header top start-->
        <div class="header_top">
            <div class="container">
                <div class="top_inner">
              
                </div>
            </div>
        </div>
        <!--header top start-->
        <!--header middel start-->
        <div class="header_middle">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-6">
                        <div class="logo">
                            <a href="{{url('/')}}"><img src="{{asset('myotto\assets\img\logo\logo.png')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-6">
                        <div class="middel_right">
                            <div class="search-container">
                                <form action="{{url('/cari')}}" method="GET">
                                    <div class="search_box">
                                        <input placeholder="Cari produk"  type="text" name="cari" type="text" value="{{ old('cari') }}">
                                        <button type="submit"><i class="ion-ios-search-strong"></i></button>
                                    </div>
                                </form>
                            </div>
                            <div class="middel_right_info">
<!-- 
                                <div class="header_wishlist">
                                    <a href="wishlist.html"><span class="lnr lnr-heart"></span> Wish list </a>
                                    <span class="wishlist_quantity">3</span>
                                </div> -->
                              
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--header middel end-->
        <!--header bottom satrt-->
        <div class="header_bottom mb-0 sticky-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="main_menu header_position">
                            <nav>
                                <ul>
                                    <li><a href="{{url('/')}}">home</i></a></li>
                                   
                                    <li id="kontak"><a href="#"> Contact Us</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--header bottom end-->

    </header>
    <!--header area end-->


    <!--Offcanvas menu area start-->
    <div class="off_canvars_overlay"></div>
    <div class="Offcanvas_menu canvas_padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="canvas_open">
                        <span>MENU</span>
                        <a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                    </div>
                    <div class="Offcanvas_menu_wrapper">

                        <div class="canvas_close">
                            <a href="#"><i class="ion-android-close"></i></a>
                        </div>


                      
                        <div class="search-container">
                             <form action="{{url('/cari')}}" method="GET">
                                <div class="search_box">
                                     <input placeholder="Cari produk"  type="text" name="cari" type="text" value="{{ old('cari') }}">
                                        <button type="submit"><i class="ion-ios-search-strong"></i></button>
                                </div>
                            </form>
                        </div>
                        <div id="menu" class="text-left ">
                            <ul class="offcanvas_main_menu">
                               <li><a href="{{url('/home')}}">home</i></a></li>
                                   
                                <li><a href="{{url('/kontak')}}"> Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--Offcanvas menu area end-->

    <!--breadcrumbs area start-->
  <!--   <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.html">home</a></li>
                            <li>Camera & Video </li>
                            <li>shop right sidebar</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!--breadcrumbs area end-->

    <!--shop  area start-->
      @yield('konten')
    <!--shop  area end-->

    <!--call to action start-->
    <section class="call_to_action">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="call_action_inner">
                        <div class="call_text">
                            <h3>Bisa juga pesan melalui lapak kami di <span>OLX</span></h3>
                        
                        </div>
                        <div class="discover_now">
                            <a href="#">discover now</a>
                        </div>
                      <!--   <div class="link_follow">
                            <ul>
                                <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                                <li><a href="#"><i class="ion-social-youtube"></i></a></li>
                            </ul>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--call to action end-->
    <!--footer area start-->
    <footer class="footer_widgets" id="contac">
        <div class="container">
            <div class="footer_top">
                <div class="row">
                    <div class="col-lg-12 col-md-6">
                        <div class="widgets_container contact_us">
                            <div class="footer_logo">
                                <a href="#"><img src="{{asset('myotto\assets\img\logo\logo.png')}}" alt=""></a>
                            </div>
                            <div class="footer_contact">
                                <p>We are a team of designers and developers that
                                    create high quality Magento, Prestashop, Opencart...</p>
                                <p><span>Alamat Kami</span> Jl. Kopo No.538, Margasuka, Kec. Babakan Ciparay, Kota Bandung, Jawa Barat 40225 <strong>(Sebelah Geprek Bensu)</strong></p>
                                <p><span>Kontak Kami</span>Telp: <a href="tel:0821-1784-1712">0821-1784-1712</a></p>
                            </div>
                        </div>
                        <div class="map-responsive">
                         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1980.2310367770533!2d107.58229165800903!3d-6.9546932987438606!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e90e74af88eb%3A0xe2c913561cf85704!2sRBA%20Variasi!5e0!3m2!1sid!2sid!4v1580818382163!5m2!1sid!2sid" width="1200" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                         </div>
                    </div>
                    </div>
                    
                   
                   
                </div>
            </div>
            <div class="footer_bottom">
                <div class="row">
                    <div class="col-lg-12 col-md-6">
                        <div class="copyright_area" align="middle">
                            <p>Copyright &copy; 2020 <a href="http://amaljulio.com" target="_blank">maliocoding</a> All Right Reserved.</p>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </footer>


<!-- JS
============================================ -->
 @include('public.javascript')

<script type="text/javascript">
    $("#kontak").click(function() {
    $('html, body').animate({
        scrollTop: $("#contac").offset().top
    }, 2000);
});

</script>
</body>

</html>