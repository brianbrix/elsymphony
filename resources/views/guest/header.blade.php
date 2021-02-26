<!DOCTYPE html>
<html lang="en">
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>@yield('title')</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{url('home/css/bootstrap.min.css')}}">
    <!-- style css -->
    <link rel="stylesheet" href="{{url('home/css/style.css')}}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{url('home/css/responsive.css')}}">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{url('home/css/jquery.mCustomScrollbar.min.css')}}">
    <link rel="stylesheet" href="{{url('home/css/banner.css')}}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!--[if lt IE 9]>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
       <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="{{url('home/images/loading.gif')}}" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="{{url('/')}}"><img src="{{url('home/images/logof.png')}}" alt="logo" style="height:82px; width:168px;"/></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12">
                        <div class="menu-area">
                            <div class="limit-box">
                                <nav class="main-menu">
                                    <ul class="menu-area-main">
                                        <li class="active"> <a href="{{url('/')}}">Home</a> </li>
                                        <li> <a href="{{url('playlist')}}">playlist</a> </li>
                                        <li> <a href="{{url('about')}}">about</a> </li>
                                        <li> <a href="album.html"> Albums</a> </li>
                                        <li> <a href="{{url('/')}}#events">Events</a> </li>
                                        <li> <a href="{{route('tickets.index')}}">Tickets</a> </li>
                                        @if(!Auth::user())
                                        <li> <a href="{{url('account')}}">Account</a> </li>
                                        @else
                                        <li>  <a href="#logout" onclick="$('#logout').submit();">Logout</a> </li>
                                        @endif
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- end header inner -->
    </header>
    <!-- end header -->
    {!! Form::open(['route' => 'auth.logout', 'style' => 'display:none;', 'id' => 'logout']) !!}
    <button type="submit">Logout</button>
    {!! Form::close() !!}

@yield('content')
     <!--  footer -->
     <footr id="footer_with_contact">
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12 width">
                        <div class="address">
                            <h3>Contact Us</h3>
                            <ul class="locarion_icon">
                                <li><img src="{{url('home/icon/1.png')}}" alt="icon" />100 Nairobi , Kenya</li>
                                <li><img src="{{url('home/icon/2.png')}}" alt="icon" />Phone : ( +71 5896547 )</li>
                                <li><img src="{{url('home/icon/3.png')}}" alt="icon" />Email : elsymphonyke@gmail.com</li>

                            </ul>

                            <ul class="contant_icon">
                                <li><img src="{{url('home/icon/fb.png')}}" alt="icon" /></li>
                                <li><img src="{{url('home/icon/tw.png')}}" alt="icon" /></li>
                                <li><img src="{{url('home/icon/lin(2).png')}}" alt="icon" /></li>
                                <li><img src="{{url('home/icon/instagram.png')}}" alt="icon" /></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 width">
                        <div class="address">
                            <h3>Get In Touch</h3>
                            <form>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <input class="contactus" placeholder="Name" type="text" name="Name">
                                    </div>
                                    <div class="col-sm-12">
                                        <input class="contactus" placeholder="Phone" type="text" name="Email">
                                    </div>
                                    <div class="col-sm-12">
                                        <input class="contactus" placeholder="Email" type="text" name="Email">
                                    </div>
                                    <div class="col-sm-12">
                                        <textarea class="textarea" placeholder="Message" type="text" name="Message"></textarea>
                                    </div>
                                    <div class="col-sm-12">
                                        <button class="send">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 width">
                        <div class="address">
                            <h3>New Music </h3>
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 ">
                                    <figure><img src="images/music1.jpg" /></figure>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 ">
                                    <figure><img src="images/music2.jpg" /></figure>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 ">
                                    <figure><img src="images/music3.jpg" /></figure>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 ">
                                    <figure><img src="images/music4.jpg" /></figure>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <p class="footer-company">All Rights Reserved. &copy; <script>document.write(new Date().getFullYear())</script> <a href="{{url('/')}}">Elsymphony Ke. </a>Developed by :
                           <a href="https://uptechpay.com">Uptech Payouts</a></p>
            </div>
        </div>
    </footr>
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="{{url('home/js/jquery.min.js')}}"></script>
    <script src="{{url('home/js/popper.min.js')}}"></script>
    <script src="{{url('home/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('home/js/jquery-3.0.0.min.js')}}"></script>

    <script src="{{url('home/js/banner.js')}}"></script>
    <!-- sidebar -->
    <script src="{{url('home/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{url('home/js/custom.js')}}"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
     <script src="{{url('home/js/plugin.js')}}"></script>
    <script>
        $(document).ready(function() {
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });

            $(".zoom").hover(function() {

                $(this).addClass('transition');
            }, function() {

                $(this).removeClass('transition');
            });
        });
    </script>
    @yield('scripts')
</body>

</html>