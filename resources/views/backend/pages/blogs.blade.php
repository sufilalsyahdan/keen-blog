@extends('layouts.app')

@section('title', 'List of Blogs')

@section('container')
<div class="container">
    <ul class="breadcrumb">
        <li><a href="index.html">Home</a></li>
        <li><a href="javascript:;">Blog</a></li>
        <li class="active">Blog Page</li>
    </ul>
    <!-- BEGIN SIDEBAR & CONTENT -->
    <div class="row margin-bottom-40">
        <!-- BEGIN CONTENT -->
        <div class="col-md-12 col-sm-12">
        <h1>Blog Page</h1>
        <div class="content-page">
            <div class="row">
            <!-- BEGIN LEFT SIDEBAR -->            
            <div class="col-md-9 col-sm-9 blog-posts">
                <div class="row">
                <div class="col-md-4 col-sm-4">
                    <!-- BEGIN CAROUSEL -->            
                    <div class="front-carousel">
                    <div class="carousel slide" id="myCarousel">
                        <!-- Carousel items -->
                        <div class="carousel-inner">
                        <div class="item">
                            <img alt="" src="./assets/pages/img/works/img1.jpg">
                        </div>
                        <div class="item">
                            <img alt="" src="./assets/pages/img/works/img2.jpg">
                        </div>
                        <div class="item active">
                            <img alt="" src="./assets/pages/img/works/img3.jpg">
                        </div>
                        </div>
                        <!-- Carousel nav -->
                        <a data-slide="prev" href="#myCarousel" class="carousel-control left">
                        <i class="fa fa-angle-left"></i>
                        </a>
                        <a data-slide="next" href="#myCarousel" class="carousel-control right">
                        <i class="fa fa-angle-right"></i>
                        </a>
                    </div>                
                    </div>
                    <!-- END CAROUSEL -->             
                </div>
                <div class="col-md-8 col-sm-8">
                    <h2><a href="blog-item.html">Corrupti quos dolores etquas</a></h2>
                    <ul class="blog-info">
                    <li><i class="fa fa-calendar"></i> 25/07/2013</li>
                    <li><i class="fa fa-comments"></i> 17</li>
                    <li><i class="fa fa-tags"></i> Metronic, Keenthemes, UI Design</li>
                    </ul>
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui sint blanditiis prae sentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing condimentum eleifend enim a feugiat.</p>
                    <a href="blog-item.html" class="more">Read more <i class="icon-angle-right"></i></a>
                </div>
                </div>
                <hr class="blog-post-sep">
                <div class="row">
                <div class="col-md-4 col-sm-4">
                    <img class="img-responsive" alt="" src="./assets/pages/img/works/img4.jpg">
                </div>
                <div class="col-md-8 col-sm-8">
                    <h2><a href="blog-item.html">Corrupti quos dolores etquas</a></h2>
                    <ul class="blog-info">
                    <li><i class="fa fa-calendar"></i> 25/07/2013</li>
                    <li><i class="fa fa-comments"></i> 17</li>
                    <li><i class="fa fa-tags"></i> Metronic, Keenthemes, UI Design</li>
                    </ul>
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui sint blanditiis prae sentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing condimentum eleifend enim a feugiat.</p>
                    <a href="blog-item.html" class="more">Read more <i class="icon-angle-right"></i></a>
                </div>
                </div>
                <hr class="blog-post-sep">
                <div class="row">
                <div class="col-md-4 col-sm-4">
                    <!-- BEGIN VIDEO -->   
                    <iframe height="205" allowfullscreen="" style="width:100%; border:0" src="http://player.vimeo.com/video/56974716?portrait=0"></iframe>
                    <!-- END VIDEO -->   
                </div>
                <div class="col-md-8 col-sm-8">
                    <h2><a href="blog-item.html">Corrupti quos dolores etquas</a></h2>
                    <ul class="blog-info">
                    <li><i class="fa fa-calendar"></i> 25/07/2013</li>
                    <li><i class="fa fa-comments"></i> 17</li>
                    <li><i class="fa fa-tags"></i> Metronic, Keenthemes, UI Design</li>
                    </ul>
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui sint blanditiis prae sentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing condimentum eleifend enim a feugiat.</p>
                    <a href="blog-item.html" class="more">Read more <i class="fa fa-angle-right"></i></a>
                </div>
                </div>
                <hr class="blog-post-sep">
                <div class="row">
                <div class="col-md-4 col-sm-4">
                    <img class="img-responsive" alt="" src="./assets/pages/img/works/img2.jpg">
                </div>
                <div class="col-md-8 col-sm-8">
                    <h2><a href="javascript:;">Corrupti quos dolores etquas</a></h2>
                    <ul class="blog-info">
                    <li><i class="fa fa-calendar"></i> 25/07/2013</li>
                    <li><i class="fa fa-comments"></i> 17</li>
                    <li><i class="fa fa-tags"></i> Metronic, Keenthemes, UI Design</li>
                    </ul>
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui sint blanditiis prae sentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing condimentum eleifend enim a feugiat.</p>
                    <a href="blog-item.html" class="more">Read more <i class="fa fa-angle-right"></i></a>
                </div>
                </div>
                <hr class="blog-post-sep">
                <ul class="pagination">
                <li><a href="javascript:;">Prev</a></li>
                <li><a href="javascript:;">1</a></li>
                <li><a href="javascript:;">2</a></li>
                <li class="active"><a href="javascript:;">3</a></li>
                <li><a href="javascript:;">4</a></li>
                <li><a href="javascript:;">5</a></li>
                <li><a href="javascript:;">Next</a></li>
                </ul>               
            </div>
            <!-- END LEFT SIDEBAR -->

            <!-- BEGIN RIGHT SIDEBAR -->            
            <div class="col-md-3 col-sm-3 blog-sidebar">
                <!-- CATEGORIES START -->
                <h2 class="no-top-space">Categories</h2>
                <ul class="nav sidebar-categories margin-bottom-40">
                <li><a href="javascript:;">London (18)</a></li>
                <li><a href="javascript:;">Moscow (5)</a></li>
                <li class="active"><a href="javascript:;">Paris (12)</a></li>
                <li><a href="javascript:;">Berlin (7)</a></li>
                <li><a href="javascript:;">Istanbul (3)</a></li>
                </ul>
                <!-- CATEGORIES END -->

                <!-- BEGIN RECENT NEWS -->                            
                <h2>Recent News</h2>
                <div class="recent-news margin-bottom-10">
                <div class="row margin-bottom-10">
                    <div class="col-md-3">
                    <img class="img-responsive" alt="" src="./assets/pages/img/people/img2-large.jpg">                        
                    </div>
                    <div class="col-md-9 recent-news-inner">
                    <h3><a href="javascript:;">Letiusto gnissimos</a></h3>
                    <p>Decusamus tiusto odiodig nis simos ducimus qui sint</p>
                    </div>                        
                </div>
                <div class="row margin-bottom-10">
                    <div class="col-md-3">
                    <img class="img-responsive" alt="" src="./assets/pages/img/people/img1-large.jpg">                        
                    </div>
                    <div class="col-md-9 recent-news-inner">
                    <h3><a href="javascript:;">Deiusto anissimos</a></h3>
                    <p>Decusamus tiusto odiodig nis simos ducimus qui sint</p>
                    </div>                        
                </div>
                <div class="row margin-bottom-10">
                    <div class="col-md-3">
                    <img class="img-responsive" alt="" src="./assets/pages/img/people/img3-large.jpg">                        
                    </div>
                    <div class="col-md-9 recent-news-inner">
                    <h3><a href="javascript:;">Tesiusto baissimos</a></h3>
                    <p>Decusamus tiusto odiodig nis simos ducimus qui sint</p>
                    </div>                        
                </div>
                </div>
                <!-- END RECENT NEWS -->                            

                <!-- BEGIN BLOG TALKS -->
                <div class="blog-talks margin-bottom-30">
                <h2>Popular Talks</h2>
                <div class="tab-style-1">
                    <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#tab-1">Multipurpose</a></li>
                    <li><a data-toggle="tab" href="#tab-2">Documented</a></li>
                    </ul>
                    <div class="tab-content">
                    <div id="tab-1" class="tab-pane row-fluid fade in active">
                        <p class="margin-bottom-10">Raw denim you probably haven't heard of them jean shorts Austin. eu banh mi, qui irure terry richardson ex squid Aliquip placeat salvia cillum iphone.</p>
                        <p><a class="more" href="javascript:;">Read more</a></p>
                    </div>
                    <div id="tab-2" class="tab-pane fade">
                        <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. aliquip jean shorts ullamco ad vinyl aesthetic magna delectus mollit. Keytar helvetica VHS salvia..</p>
                    </div>
                    </div>
                </div>
                </div>                            
                <!-- END BLOG TALKS -->

                <!-- BEGIN BLOG PHOTOS STREAM -->
                <div class="blog-photo-stream margin-bottom-20">
                <h2>Photos Stream</h2>
                <ul class="list-unstyled">
                    <li><a href="javascript:;"><img alt="" src="./assets/pages/img/people/img5-small.jpg"></a></li>
                    <li><a href="javascript:;"><img alt="" src="./assets/pages/img/works/img1.jpg"></a></li>
                    <li><a href="javascript:;"><img alt="" src="./assets/pages/img/people/img4-large.jpg"></a></li>
                    <li><a href="javascript:;"><img alt="" src="./assets/pages/img/works/img6.jpg"></a></li>
                    <li><a href="javascript:;"><img alt="" src="./assets/pages/img/pics/img1-large.jpg"></a></li>
                    <li><a href="javascript:;"><img alt="" src="./assets/pages/img/pics/img2-large.jpg"></a></li>
                    <li><a href="javascript:;"><img alt="" src="./assets/pages/img/works/img3.jpg"></a></li>
                    <li><a href="javascript:;"><img alt="" src="./assets/pages/img/people/img2-large.jpg"></a></li>
                </ul>                    
                </div>
                <!-- END BLOG PHOTOS STREAM -->

                <!-- BEGIN BLOG TAGS -->
                <div class="blog-tags margin-bottom-20">
                <h2>Tags</h2>
                <ul>
                    <li><a href="javascript:;"><i class="fa fa-tags"></i>OS</a></li>
                    <li><a href="javascript:;"><i class="fa fa-tags"></i>Metronic</a></li>
                    <li><a href="javascript:;"><i class="fa fa-tags"></i>Dell</a></li>
                    <li><a href="javascript:;"><i class="fa fa-tags"></i>Conquer</a></li>
                    <li><a href="javascript:;"><i class="fa fa-tags"></i>MS</a></li>
                    <li><a href="javascript:;"><i class="fa fa-tags"></i>Google</a></li>
                    <li><a href="javascript:;"><i class="fa fa-tags"></i>Keenthemes</a></li>
                    <li><a href="javascript:;"><i class="fa fa-tags"></i>Twitter</a></li>
                </ul>
                </div>
                <!-- END BLOG TAGS -->
            </div>
            <!-- END RIGHT SIDEBAR -->            
            </div>
        </div>
        </div>
        <!-- END CONTENT -->
    </div>
    <!-- END SIDEBAR & CONTENT -->
</div>
@endsection