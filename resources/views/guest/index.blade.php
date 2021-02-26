@extends('guest.header')
@section('title')
Elsymphony
@endsection
@section('content')
<style>

.tit{

color:white;
}
.tit {
  position: relative;
  font-family: sans-serif;
  text-transform: uppercase;
  letter-spacing: 4px;
  overflow: hidden;
  background: linear-gradient(90deg, #000, #fff, #000);
  background-repeat: no-repeat;
  background-size: 80%;
  animation: animate 10s linear infinite;
  -webkit-background-clip: text;
  -webkit-text-fill-color: rgba(255, 255, 255, 0);
}

@keyframes animate {
  0% {
    background-position: -500%;
  }
  100% {
    background-position: 500%;
  }
}

</style>
    <section class="banner_section header">
       <div class="container-fluid my-1">
           <div id="carouselExample1" class="carousel slide z-depth-1-half" data-ride="carousel">
             <div class="carousel-inner">
               <div class="carousel-item active">
                 <img class="d-block w-100" src="{{url('home/images/rsz_image1.jpg')}}" alt="First slide">
                   <div class="carousel-caption">
                     <h1 class="display-1 tit">Elsymphony Kenya</h1>
                      <small>
                     <a class="btn btn-warning btn-lg" href="{{url('playlist')}}">Playlist</a>
                      </small>
                   </div>
               </div>
               <div class="carousel-item">
                 <img class="d-block w-100" src="{{url('home/images/rsz_ban.jpg')}}" alt="Second slide">
                 <div class="carousel-caption">
                  <h1 class="display-2 tit">Transforming sound to music</h1>
                   <small>
                  <a class="btn btn-warning btn-lg" href="{{url('playlist')}}">Playlist</a>
                   </small>
                </div>
               </div>
               <div class="carousel-item">
                 <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(47).jpg" alt="Third slide">
                 <div class="carousel-caption">
                  <h1 class="display-3 tit">For the creator of the heavens and earth</h1>
                   <small>
                  <a class="btn btn-warning btn-lg" href="{{url('playlist')}}">Playlist</a>
                   </small>
                </div>

               </div>
             </div>
             <a class="carousel-control-prev" href="#carouselExample1" role="button" data-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="sr-only">Previous</span>
             </a>
             <a class="carousel-control-next" href="#carouselExample1" role="button" data-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="sr-only">Next</span>
             </a>
           </div>

    </section>

    <!-- music-box  -->
    <div class="music-box" style="margin-top:">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="for-box">
                        <i><img src="{{url('home/icon/icon1.png')}}" alt="icon"/></i>
                        <h3>Music for praise</h3>
                        <p>Our music is all about praising our Lord Jesus </p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="for-box">
                        <i><img src="{{url('home/icon/icon2.png')}}" alt="icon"/></i>
                        <h3>Authentic Music</h3>
                        <p>Our music is authentic, written by ourselves. </p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="for-box">
                        <i><img src="{{url('home/icon/icon3.png')}}" alt="icon"/></i>
                        <h3>Music Playlist</h3>
                        <p>Our playlist is unending. Support us by downloading our music. </p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="for-box">
                        <i><img src="{{url('home/icon/icon4.png')}}" alt="icon"/></i>
                        <h3>Elsymphony Events</h3>
                        <p>We have events like concerts, singspirations, sermons, homecomings. e.t.c More news on this website. </p>
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
