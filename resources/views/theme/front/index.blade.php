@extends('theme.front.app')

@section('content')
<div class="col-md-9 col-sm-9 blog-posts">
    <div class="row">
      <div class="col-md-4 col-sm-4">
        <!-- BEGIN CAROUSEL -->
        <div class="front-carousel">
          <div class="carousel slide" id="myCarousel">
            <!-- Carousel items -->
            <div class="carousel-inner">
              <div class="item">
                <img alt="" src="assets/pages/img/works/img1.jpg">
              </div>
              <div class="item">
                <img alt="" src="assets/pages/img/works/img2.jpg">
              </div>
              <div class="item active">
                <img alt="" src="assets/pages/img/works/img3.jpg">
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
        <h2><a>Test of title post</a></h2>
        <ul class="blog-info">
          <li><i class="fa fa-calendar"></i> 08/01/2023</li>
          <li><i class="fa fa-comments"></i></li>
          <li><i class="fa fa-tags"></i>Design</li>
        </ul>
        <p>This is the description</p>
        <a class="more">Read more <i class="icon-angle-right"></i></a>
      </div>
    </div>
    <hr class="blog-post-sep">
    <div class="row">
      <div class="col-md-4 col-sm-4">
        <img class="img-responsive" alt="" src="{{asset('assets/front/pages/img/works/img4.jpg')}}">
      </div>
      <div class="col-md-8 col-sm-8">
        <h2><a>How to create Laravel login</a></h2>
        <ul class="blog-info">
          <li><i class="fa fa-calendar"></i> 09/01/2023</li>
          <li><i class="fa fa-comments"></i></li>
          <li><i class="fa fa-tags"></i>Laravel</li>
        </ul>
        <p>Laravel is a free and open-source PHP web framework, created by Taylor Otwell and intended for the development of web applications following the...</p>
        <a href="blog-item.html" class="more">Read more <i class="icon-angle-right"></i></a>
      </div>
    </div>
    <hr class="blog-post-sep">
    <div class="row">
      <div class="col-md-4 col-sm-4">
        <img class="img-responsive" alt="" src="{{asset('assets/front/pages/img/works/img5.jpg')}}">
      </div>
      <div class="col-md-8 col-sm-8">
        <h2><a>CDesign a web application</a></h2>
        <ul class="blog-info">
          <li><i class="fa fa-calendar"></i> 09/01/2023</li>
          <li><i class="fa fa-comments"></i></li>
          <li><i class="fa fa-tags"></i>Design</li>
        </ul>
        <p>Web design refers to the design of websites that are displayed on the internet. It usually refers to the user experience aspects of website development ...</p>
        <a class="more">Read more <i class="fa fa-angle-right"></i></a>
      </div>
    </div>
    <hr class="blog-post-sep">
    <div class="row">
      <div class="col-md-4 col-sm-4">
        <img class="img-responsive" alt="" src="{{asset('assets/front/pages/img/works/img6.jpg')}}">
      </div>
      <div class="col-md-8 col-sm-8">
        <h2><a>test</a></h2>
        <ul class="blog-info">
          <li><i class="fa fa-calendar"></i> 09/01/2023</li>
          <li><i class="fa fa-comments"></i></li>
          <li><i class="fa fa-tags"></i> Laravel</li>
        </ul>
        <p>test</p>
        <a class="more">Read more <i class="fa fa-angle-right"></i></a>
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
  @endsection

