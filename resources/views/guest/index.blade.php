@extends('guest.header')
@section('title')
Elsymphony
@endsection
@section('content')
    <section class="banner_section">
        <div class="banner-main">
            <img src="{{url('home/images/image.jpg')}}"  style="height: 800px; width: 1920px;"/>
            <div class="container">

                <div class="text-bg relative1">
                    <h1>Elsymphony<br><span class="Perfect">Acapella Group</span><br>Amazing Harmony</h1>
                    <p>We make music out of sound. </p>
                    <a href="{{url('playlist')}}">Download Music</a>
                </div>

            </div>
        </div>

    </section>

    <!-- music-box  -->
    <div class="music-box">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="for-box">
                        <i><img src="{{url('home/icon/icon1.png')}}" alt="icon"/></i>
                        <h3>Custom Player</h3>
                        <p>t is a long established fact that a reader will be distracted by the readable </p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="for-box">
                        <i><img src="{{url('home/icon/icon2.png')}}" alt="icon"/></i>
                        <h3>Easy customize</h3>
                        <p>t is a long established fact that a reader will be distracted by the readable </p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="for-box">
                        <i><img src="{{url('home/icon/icon3.png')}}" alt="icon"/></i>
                        <h3>Music Playlist</h3>
                        <p>t is a long established fact that a reader will be distracted by the readable </p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="for-box">
                        <i><img src="{{url('home/icon/icon4.png')}}" alt="icon"/></i>
                        <h3>Custom Gallery</h3>
                        <p>t is a long established fact that a reader will be distracted by the readable </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end music-box  -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 padding">
                <div class="img-box">
                    <figure><img src="{{url('home/images/banner.jpg')}}" alt="img" /></figure>
                </div>
            </div>
            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 padding">
                <div class="text-box">
                    <div class="box">
                        <i><img src="{{url('home/images/5.png')}}"/></i>
                        <h3>MEET OUR Music Writers</h3>
                        <p>Our music is written from scratch by our very own. </p>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Download -->
    <div id="screenshot" class="Lastestnews">
        <div class="container" id="events">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Latest Events</h2>
                        <span>Get the latest events organized by Elsymphony acapella  </span>
                    </div>
                </div>
            </div>
            <div class="data">


            @include('guest.events')

            </div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script>

$(document).ready(function(){

 $(document).on('click', '.relative', function(event){
  event.preventDefault();
  var page = $(this).attr('href').split('page=')[1];
  console.log(page);
  fetch_data(page);
 });

 function fetch_data(page)
 {
  $.ajax({
   url:"/pagination/fetch_data?page="+page,
   success:function(data)
   {
    $('.data').html(data);
   }
  });
 }

});
</script>





        </div>

    </div>

    <!-- end Download -->

    <!-- Albums -->
    <div id="screenshot" class="Albums">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Albums-box </h2>
                        <span>It is a long established fact that a reader will be distracted by the readable <br>content of a page when looking at its layout. The point of using Lorem </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 margin">
                    <div class="Albums-box">
                        <figure>
                            <a href="images/album1.jpg" class="fancybox" rel="ligthbox">
                                <img src="{{url('home/images/album1.jpg')}}" class="zoom img-fluid " alt="">
                            </a>
                            <span class="hoverle">
                        <a href="{{url('home/images/album1.jpg')}}" class="fancybox" rel="ligthbox"><img src="images/search.png"></a>
                        </span>
                        </figure>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 margin">
                    <div class="Albums-box">
                        <figure>
                            <a href="images/album2.jpg" class="fancybox" rel="ligthbox ">
                                <img src="{{url('home/images/album2.jpg')}}" class="zoom img-fluid " alt="">
                            </a>
                            <span class="hoverle">
                        <a href="{{url('home/images/album2.jpg')}}" class="fancybox" rel="ligthbox"><img src="images/search.png"></a>
                        </span>
                        </figure>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- end Albums -->

    <!-- Newsletter -->
    <div class="Newsletter">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <h2>Newsletter</h2>
                    <div class="row">
                        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 padding-right">
                            <input class="email" placeholder="Enter Your Email" type="text" name="Enter Your Email">
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 padding-left">
                            <button class="submit-btn">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <!-- end Newsletter -->

   @endsection
