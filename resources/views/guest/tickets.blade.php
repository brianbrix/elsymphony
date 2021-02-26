@extends('guest.header')
@section('title')
Elsymphony
@endsection
@section('content')
@if(count($bookings)>0)
<style>


.card0 {
    box-shadow: 0px 4px 8px 0px #757575;
    border-radius: 0px
}

.card2 {
    margin: 0px 40px
}

.logo2 {
    width: 200px;
    height: 100px;
    margin-top: 20px;
    margin-left: 35px
}

.image {
    width: 360px;
    height: 280px
}

.border-line {
    border-right: 1px solid #EEEEEE
}

@media screen and (max-width: 991px) {
    .logo2 {
        margin-left: 0px
    }

    .image {
        width: 300px;
        height: 220px
    }

    .border-line {
        border-right: none
    }

    .card2 {
        border-top: 1px solid #EEEEEE !important;
        margin: 0px 15px
    }
}

.contenido {
  margin: 30px auto;
  max-height: 430px;
  max-width: 245px;
  overflow: hidden;
  box-shadow: 0 0 10px rgb(202, 202, 204);
  background-color:;
  border-radius: 2px;
}
.details {
  padding: 26px;
  background:white;
  border-top: 1px dashed #c3c3c3;
}
.tinfo {
  font-size: 0.5em;
  font-weight: 300;
  color: #c3c3c3;
  font-family: 'Roboto', sans-serif;
  text-transform: uppercase;
  letter-spacing: 1px;
  margin:7px 0;
}

.tdata {
  font-size: 0.7em;
  font-weight: 400;
  font-family: 'Roboto', sans-serif;
  letter-spacing: 0.5px;
  margin:7px 0;
}

.name {
  font-size: 1.3em;
  font-weight: 300;
}

.link {
  text-align: center;
  margin-top:10px;
}

a {
  text-decoration: none;
  color:#55C9E6;
  font-weight: 400;
  font-family: 'Roboto', sans-serif;
  letter-spacing: 0.7px;
  font-size: 0.7em;
}
.hqr{
  display: table;
  width: 100%;
  table-layout: fixed;
  margin: 0px auto;
}
  .left-one{
  background-repeat: no-repeat;
  background-image: radial-gradient(circle at 0 96% , rgba(0,0,0,0) .2em, gray .3em, white .1em);
}
  .right-one{
  background-repeat: no-repeat;
  background-image: radial-gradient(circle at 100% 96% , rgba(0,0,0,0) .2em, gray .3em, white .1em);
}
.column
{
    display: table-cell;
    padding: 37px 0px;
}
.center{
  background:white;
}

#qr-code img{
  height:70px;
  width:70px;
  margin: 0 auto;
}
.masinfo{
  display:block;
}
.left,.right{
  width:49%;
  display:inline-table;
}

.nesp{
  letter-spacing: 0px;
}

</style>



<div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
@error('registration')
                       <div class="alert alert-success">{{ $message }}</div>
                   @enderror
    <div class="card card0 border-0">
        <div class="row d-flex">

            <div class="col-lg-6">
                <div class="card2 card border-0 px-4 py-5">

                    <div class="row px-3 mb-4">
                        <div class="line"></div> <small class="or text-center">Ticket Details</small>
                        <div class="line"></div>
                        <div class="container">

                        <div class="alert alert-primary">Click on a ticket to view and print it</div>
                        <a href="#btnPrint" id="cli"></a>
                         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                        <table class='table table-bordered table-condensed table-striped table-hover' id="myTable" style="cursor: pointer;">
                        <tr><th>Ticket Number</th><th>Booked Date</th><th>Event</th></tr>

                        @foreach($bookings as $booking)
                          <tr class="table-row{{$booking->id}}"data-href=""><td>{{$booking->ticket_number}}</td><td>{{$booking->created_at}}</td><td>{{$booking->event->title}}</td></tr>
                          <script>

                          $(document).ready(function(){
                            if({{$bookings[0]->confirmed}}==1){
                            $("#btnPrint").show();
                            $('#cli')[0].click();
                         }
                         else{
                            $("#btnPrint").hide();
                         }
                          $("#start_time").html("{{ $bookings[0]->event->start_time}}");
                          $("#title").html("{{ $bookings[0]->event->title}}");
                          $("#image").attr('src', "{{ asset(str_replace(app_path(),'',$bookings[0]->event->image_path))}}");
                          $("#description").html("<?php echo $bookings[0]->event->description ?>");

                          $("#which_ticket").val("{{ $bookings[0]->id}}");
                          $(".name").html("{{ $bookings[0]->first_name}} {{ $booking->last_name}}");
                          $(".ticket_id").html("{{ $bookings[0]->ticket_number}}");
                          $(".ev_title").html("{{ $bookings[0]->event->title}}");
                          $(".location").html("{{ $bookings[0]->event->venue}}");
                          $(".dt").html("<?php echo date('d M Y', strtotime($booking->event->start_time)) ?>");

                         $(".table-row{{$booking->id}}").click(function() {
                         if({{$booking->confirmed}}==1){
                            $("#btnPrint").show();
                            $('#cli')[0].click();
                         }
                         else{
                            $("#btnPrint").hide();
                         }
                          /* JS comes here */
                              var qr;


                              (function() {
                                     qr = new QRious({
                                     element: document.getElementById('qr-code'),
                                     size: 100,
                                     value: "{{url('tickets/confirm/'.$booking->id.'/'.$booking->confirmed)}}"
                                 });
                                     })();
//                           $(this).addClass('active').siblings().removeClass('active');
                          $(this).css("background-color", "#888895").siblings().removeAttr('style');
                        $("#start_time").html("{{ $booking->event->start_time}}");
                        $("#title").html("{{ $booking->event->title}}");
                        $("#which_ticket").val("{{ $booking->id}}");
                        $(".name").html("{{ $booking->first_name}} {{ $booking->last_name}}");
                        $(".ticket_id").html("{{ $booking->ticket_number}}");
                        $(".ev_title").html("{{ $booking->event->title}}");
                        $(".location").html("{{ $booking->event->venue}}");
                        $(".dt").html("<?php echo date('d M Y', strtotime($booking->event->start_time)) ?>");
                        $("#image").attr('src', "{{ asset(str_replace(app_path(),'',$booking->event->image_path))}}");
                        $("#description").html("<?php echo $booking->event->description ?>");
                        $("#printf").click();

                            });
                          });

                          </script>

                          @endforeach


                        </table>

                        </div>

                    </div>


            </div>
        </div>
        <div class="col-lg-6">
            <div class="card1 pb-5">
                <div class="row"> <div class="col-md-6"><img src="" id='image' class="logo2"> </div><div class="col-md-6 mt-5"> <h3 id="title"></h3></div> </div>

                 <div class="row px-3 justify-content-center mt-1 ml-3 mb-5 border-line">
                     <p id="start_time"> </p>
                     <p id="description"></p>
                 </div>
                 <div class="row px-3 justify-content-center mt-1 ml-3 mb-5 border-line tick" id="tick">
                 <div class="contenido" id="contenido">
                   <div class="ticket">
                     <div class="hqr">
                       <div class="column left-one"></div>
                       <div class="column center">
                       <input type="hidden" id="which_ticket">
                         <canvas id="qr-code"></canvas>
                         <script src="https://cdnjs.cloudflare.com/ajax/libs/qrious/4.0.2/qrious.min.js"></script>
                            <script>
                              /* JS comes here */
                              var qr;



                              (function() {

                                             qr = new QRious({
                                             element: document.getElementById('qr-code'),
                                             size: 100,
                                             value: "{{url('tickets/confirm/'.$bookings[0]->id.'/'.$bookings[0]->confirmed)}}"
                                         });
                                     })();


                            </script>
                       </div>
                       <div class="column right-one"></div>
                     </div>
                     </div>
                     <div class="details">
                       <div class="tinfo">
                         guest
                       </div>
                       <div class="tdata name">

                       </div>
                       <div class="tinfo">
                         ticket
                       </div>
                       <div class="tdata ticket_id">

                       </div>
                       <div class="tinfo">
                         event
                       </div>
                       <div class="tdata ev_title">

                       </div>
                       <div class="masinfo">
                         <div class="left">
                          <div class="tinfo">
                         date
                       </div>
                       <div class="tdata  dt">

                       </div>
                         </div>
                         <div class="right">
                         <div class="tinfo">
                         location
                       </div>
                       <div class="tdata nesp location">

                       </div>
                         </div>
                       </div>

                       <div class="link">
                         <a href="#">DIVINE MUSIC</a>
                       </div>
                     </div>
                   </div>
                 </div>


<button class="btn btn-primary btn-lg" id="btnPrint">PRINT TICKET</button>

            </div>
        </div>

    </div>

</div>
</div>
 @endif
@endsection
@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.0.272/jspdf.debug.js"></script>
<script language="javascript">
    var cache_width = $('#renderPDF').width(); //Criado um cache do CSS
    var a4 = [595.28, 841.89]; // Widht e Height de uma folha a4

    $(document).on("click", '#btnPrint', function () {
        // Setar o width da div no formato a4
//         $("#contenido").width((a4[0] * 1.33333) - 80).css('max-width', 'none');

        // Aqui ele cria a imagem e cria o pdf
        html2canvas($('#contenido'), {
            onrendered: function (canvas) {
                var img = canvas.toDataURL("image/jpeg", 1.0);
                //var doc = new jsPDF({ unit: 'px', format: 'a4' });//this line error
                var doc = new jsPDF('p', 'pt', 'letter');
                doc.addImage(img, 'JPEG', 20, 20);
                doc.save('NOME-DO-PDF.pdf');
                //Retorna ao CSS normal
                $('#contenido').width(cache_width);
            }
        });
    });
</script>

@endsection
