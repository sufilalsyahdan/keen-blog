@extends('frontend.layouts.app')

@section('page_title', 'Blogasd')

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
                        <div class="col-md-9 col-sm-9 blog-item">
                            <div class="blog-item-img">
                                <!-- BEGIN CAROUSEL -->
                                <div class="front-carousel">
                                    <div id="myCarousel" class="carousel slide">
                                        <!-- Carousel items -->
                                        <div class="carousel-inner">
                                            <div class="item">
                                                <img src="{{asset('assets/pages/img/posts/img1.jpg')}}" alt="">
                                            </div>
                                            <div class="item active">
                                                <img src="{{asset('assets/pages/img/posts/img3.jpg')}}" alt="">
                                            </div>
                                        </div>
                                        <!-- Carousel nav -->
                                        <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                        <a class="carousel-control right" href="#myCarousel" data-slide="next">
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- END CAROUSEL -->
                            </div>
                            <h2><a href="javascript:;">{{ $blog->title}}</a></h2>
                            {{ $blog->text }}
                            <ul class="blog-info">
                                <li><i class="fa fa-user"></i> By {{ $blog->author }}</li>
                                <li><i class="fa fa-calendar"></i> {{ date('jS M Y', strtotime($blog->created_at)) }}</li>
                                {{-- <li><i class="fa fa-comments"></i> 17</li>
                                <li><i class="fa fa-tags"></i> Metronic, Keenthemes, UI Design</li> --}}
                            </ul>

                            <!-- BEGIN COMMENTS -->

                                {{-- <h2>Comments</h2>
                                <div class="comments">
                                    <div class="media">
                                        <a href="javascript:;" class="pull-left">
                                            <img src="{{asset('assets/pages/img/people/img1-small.jpg')}}" alt=""
                                                class="media-object">
                                        </a>
                                        <div class="media-body">
                                            <h4 class="media-heading">Media heading <span>5 hours ago / <a
                                                        href="javascript:;">Reply</a></span></h4>
                                            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus
                                                commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet
                                                risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                                            <!-- Nested media object -->
                                            <div class="media">
                                                <a href="javascript:;" class="pull-left">
                                                    <img src="{{asset('assets/pages/img/people/img2-small.jpg')}}" alt=""
                                                        class="media-object">
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading">Media heading <span>17 hours ago / <a
                                                                href="javascript:;">Reply</a></span></h4>
                                                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus
                                                        ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa
                                                        justo sit amet risus. Etiam porta sem malesuada magna mollis euismod.
                                                        Donec sed odio dui. </p>
                                                </div>
                                            </div>
                                            <!--end media-->
                                            <div class="media">
                                                <a href="javascript:;" class="pull-left">
                                                    <img src="{{asset('assets/pages/img/people/img3-small.jpg')}}" alt=""
                                                        class="media-object">
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading">Media heading <span>2 days ago / <a
                                                                href="javascript:;">Reply</a></span></h4>
                                                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus
                                                        ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa
                                                        justo sit amet risus. Etiam porta sem malesuada magna mollis euismod.
                                                        Donec sed odio dui. </p>
                                                </div>
                                            </div>
                                            <!--end media-->
                                        </div>
                                    </div>
                                    <!--end media-->
                                    <div class="media">
                                        <a href="javascript:;" class="pull-left">
                                            <img src="{{asset('assets/pages/img/people/img4-small.jpg')}}" alt=""
                                                class="media-object">
                                        </a>
                                        <div class="media-body">
                                            <h4 class="media-heading">Media heading <span>July 25,2013 / <a
                                                        href="javascript:;">Reply</a></span></h4>
                                            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus
                                                commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet
                                                risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                                        </div>
                                    </div>
                                    <!--end media-->
                                </div>

                                <div class="post-comment padding-top-40">
                                    <h3>Leave a Comment</h3>
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" type="text">
                                        </div>

                                        <div class="form-group">
                                            <label>Email <span class="color-red">*</span></label>
                                            <input class="form-control" type="text">
                                        </div>

                                        <div class="form-group">
                                            <label>Message</label>
                                            <textarea class="form-control" rows="8"></textarea>
                                        </div>
                                        <p><button class="btn btn-primary" type="submit">Post a Comment</button></p>
                                    </form>
                                </div> --}}
                            <!-- END COMMENTS -->

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
