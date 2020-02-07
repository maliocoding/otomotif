 @extends('public.main')

@section('konten')

 <div class="shop_area">
        <div class="container">
            <div class="row">

                <div class="col-lg-9 col-md-12">
                    <!--shop wrapper start-->
                    <!--shop toolbar start-->
                    <div class="d-none d-md-block shop_banner">
                        <img src="{{url('myotto\assets\img\bg\banner.jpg')}}" alt="">
                    </div>
                    <div class="shop_title">
                        <h1>shop</h1>
                    </div>
                    <div class="shop_toolbar_wrapper">
                        <div class="shop_toolbar_btn">

                            <button data-role="grid_3" type="button" class="active btn-grid-3" data-toggle="tooltip" title="3"></button>

                            <button data-role="grid_4" type="button" class=" btn-grid-4" data-toggle="tooltip" title="4"></button>

                            <button data-role="grid_list" type="button" class="btn-list" data-toggle="tooltip" title="List"></button>
                        </div>
                       <!--  <div class=" niceselect_option">

                            <form class="select_option" action="#">
                                <select name="orderby" id="short">

                                    <option selected="" value="1">Sort by average rating</option>
                                    <option value="2">Sort by popularity</option>
                                    <option value="3">Sort by newness</option>
                                    <option value="4">Sort by price: low to high</option>
                                    <option value="5">Sort by price: high to low</option>
                                    <option value="6">Product Name: Z</option>
                                </select>
                            </form>


                        </div> -->
                        <div class="page_amount">
                            <p>Showing {{ $barang->currentPage() }} – {{$barang->perPage()}} of {{ $barang->total() }} results</p>
                        </div>
                    </div>
                    <!--shop toolbar end-->
                    <span>
                    <div class="row shop_wrapper" >

                        @foreach ($barang as $b)
                        <div class="col-lg-4 col-md-4 col-12 ">
                            <div class="single_product">
                                <div class="product_name grid_name">
                                    <h3><a href="product-details.html">{{$b->nama_barang}}</a></h3>
                                    <p class="manufacture_product"><a href="#">{{$b->nama_kategori}}</a></p>
                                </div>
                                <div class="product_thumb">
                                    <a class="primary_img" href="{{url('/produk/'.$b->id)}}"><img src="{{url('data_file/'.$b->foto1)}}" alt=""></a>
                                    <a class="secondary_img" href="{{url('/produk/'.$b->id)}}"><img src="{{url('data_file/'.$b->foto1)}}" alt=""></a>
                                 
                                    <div class="action_links">
                                     
                                    </div>
                                </div>
                                <div class="product_content grid_content">
                                    <div class="content_inner">
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product_footer d-flex align-items-center">
                                            <div class="price_box">
                                                <span class="current_price">Rp. {{number_format($b->harga,0,",",".")}}</span>
                                          
                                            </div>
                                        
                                        </div>
                                    </div>
                                </div>
                                <div class="product_content list_content">
                                    <div class="left_caption">
                                        <div class="product_name">
                                            <h3><a href="{{url('/produk/'.$b->id)}}">{{$b->nama_barang}}</a></h3>
                                        </div>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                                <li><a href="#"><i class="ion-star"></i></a></li>
                                            </ul>
                                        </div>

                                        <div class="product_desc">
                                            {!! $b->keterangan !!}
                                        </div>
                                    </div>
                                    <div class="right_caption">
                                    
                                        <div class="price_box">
                                            <span class="current_price">Rp. {{number_format($b->harga,0,",",".")}}</span>
                                        
                                        </div>
                                     
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                     
                    </div>
                     </span>
                        <br/>
    
                    
                    <div class="shop_toolbar t_bottom">
                        <div class="pagination">
                               {{ $barang->links() }}
                            

                        </div>
                    </div>
                    <!--shop toolbar end-->
                    <!--shop wrapper end-->
                </div>
                <div class="col-lg-3 col-md-12">
                    <!--sidebar widget start-->
                    <aside class="sidebar_widget">
                    <div class="d-none d-md-block widget_inner">
                        <div class="shop_sidebar_banner">
                            <a href="#"><img src="{{url('myotto\assets\img\bg\banner-side.jpg')}}" alt=""></a>
                        </div>
                    </div>

                     
                               <div class="d-none d-md-block widget_inner ">
                            <div class="widget_list widget_categories">
                                <h2>Kategori</h2>
                                <ul>
                                    @foreach($kategori as $k)
                                    <li>
                                        <a href="#">{{$k->nama_kategori}}</a>   
                                    </li>
                                   
                                    @endforeach
                                </ul>
                            </div>

                        </div>
                        
                    </aside>
                    <!--sidebar widget end-->
                </div>
            </div>
        </div>
    </div>
    @endsection