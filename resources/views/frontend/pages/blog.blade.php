@extends('frontend.layouts.app')

@section('page_title', 'Blog')

@section('container')
    <div class="container">
        
        @include('frontend.components.breadcrumb')

        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
            <!-- BEGIN CONTENT -->
            <div class="col-md-12 col-sm-12">
                <h1>Blog</h1>
                <div class="content-page">
                    <div class="row">
                        <!-- BEGIN LEFT SIDEBAR -->
                        <div class="col-md-9 col-sm-9 blog-posts">

                            @foreach ($articles as $key => $article)
                                <div class="row">
                                    <div class="col-md-4 col-sm-4">
                                        <!-- BEGIN CAROUSEL -->
                                        <div class="front-carousel">
                                            <div class="carousel slide" id="carousel{{$key}}">
                                                <!-- Carousel items -->
                                                <div class="carousel-inner">
                                                    <div class="item">
                                                        <img alt="" src="{{asset('assets/pages/img/works/img1.jpg')}}">
                                                    </div>
                                                    <div class="item">
                                                        <img alt="" src="{{asset('assets/pages/img/works/img2.jpg')}}">
                                                    </div>
                                                    <div class="item active">
                                                        <img alt="" src="{{asset('assets/pages/img/works/img3.jpg')}}">
                                                    </div>
                                                </div>
                                                <!-- Carousel nav -->
                                                <a data-slide="prev" href="#carousel{{$key}}" class="carousel-control left">
                                                    <i class="fa fa-angle-left"></i>
                                                </a>
                                                <a data-slide="next" href="#carousel{{$key}}" class="carousel-control right">
                                                    <i class="fa fa-angle-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- END CAROUSEL -->
                                    </div>
                                    <div class="col-md-8 col-sm-8">
                                        <h2><a href="/blog/{{ $article->slug }}">{{ $article->title }}</a></h2>
                                        <ul class="blog-info">
                                            <li><i class="fa fa-calendar"></i> {{ date('jS M Y', strtotime($article->created_at)) }}</li>
                                            {{-- <li><i class="fa fa-comments"></i> 17</li>
                                            <li><i class="fa fa-tags"></i> Metronic, Keenthemes, UI Design</li> --}}
                                        </ul>
                                        <p>{{ $article->text }}</p>
                                        <a href="/blog/{{ $article->slug }}" class="more">Read more <i class="icon-angle-right"></i></a>
                                    </div>
                                </div>
                                <hr class="blog-post-sep">
                            @endforeach
                            
                            <ul class="pagination">
                                <li class="active"><a href="javascript:;">Prev</a></li>
                                <li><a href="javascript:;">1</a></li>
                                <li><a href="javascript:;">2</a></li>
                                <li><a href="javascript:;">3</a></li>
                                <li><a href="javascript:;">4</a></li>
                                <li><a href="javascript:;">5</a></li>
                                <li><a href="javascript:;">Next</a></li>
                            </ul>
                        </div>
                        <!-- END LEFT SIDEBAR -->

                        @include('frontend.components.right-sidebar')
                    </div>
                </div>
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
    </div>
@endsection
