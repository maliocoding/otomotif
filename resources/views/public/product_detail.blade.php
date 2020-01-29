@extends('public.main')

@section('konten')

 <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="{{url('/')}}">home</a></li>
                            <li>product details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->
 @foreach($barang as $b)
    <!--product details start-->
    <div class="product_details mt-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product-details-tab">

                       
                        <div id="img-1" class="zoomWrapper single-zoom">
                            <a href="#">
                                <img id="zoom1" src="{{url('data_file/'.$b->foto1)}}" data-zoom-image="{{url('data_file/'.$b->foto1)}}" alt="big-1">
                            </a>
                        </div>

                        <div class="single-zoom-thumb">
                            <ul class="s-tab-zoom owl-carousel single-product-active" id="gallery_01">
                                @if($b->foto2 != '')
                                <li>
                                    <a href="#" class="elevatezoom-gallery active" data-update="" data-image="{{url('data_file/'.$b->foto2)}}" data-zoom-image="{{url('data_file/'.$b->foto2)}}">
                                        <img src="{{url('data_file/'.$b->foto2)}}" alt="zo-th-1">
                                    </a>

                                </li>
                                @endif
                                 @if($b->foto3 != '')
                                <li>
                                    <a href="#" class="elevatezoom-gallery active" data-update="" data-image="{{url('data_file/'.$b->foto3)}}" data-zoom-image="{{url('data_file/'.$b->foto3)}}">
                                        <img src="{{url('data_file/'.$b->foto3)}}" alt="zo-th-1">
                                    </a>

                                </li>
                                @endif
                               @if($b->foto4 != '')
                                <li>
                                    <a href="#" class="elevatezoom-gallery active" data-update="" data-image="{{url('data_file/'.$b->foto4)}}" data-zoom-image="{{url('data_file/'.$b->foto4)}}">
                                        <img src="{{url('data_file/'.$b->foto4)}}" alt="zo-th-1">
                                    </a>

                                </li>
                                @endif
                              
                              
                              
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product_d_right">
                        <form action="#">

                            <h1>{{$b->nama_barang}}</h1>
                           <!--  <div class="product_nav">
                                <ul>
                                    <li class="prev"><a href="product-details.html"><i class="fa fa-angle-left"></i></a></li>
                                    <li class="next"><a href="variable-product.html"><i class="fa fa-angle-right"></i></a></li>
                                </ul>
                            </div> -->
                            <div class=" product_ratting">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="review"></li>
                                </ul>

                            </div>
                            <div class="price_box">
                                <span class="current_price">Rp. {{number_format($b->harga,0,",",".")}}</span>
                              <!--   <span class="old_price">$80.00</span> -->

                            </div>
                            <div class="product_desc">
                               {!! $b->keterangan !!} </p>
                            </div>
                         
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach

    @endsection