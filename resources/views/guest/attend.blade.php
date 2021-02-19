@extends('guest.header')
@section('title')
Elsymphony
@endsection
@section('content')
<style>
body {
    color: #000;
    overflow-x: hidden;
    height: 100%;
    background-color: #B0BEC5;
    background-repeat: no-repeat
}

.card0 {
    box-shadow: 0px 4px 8px 0px #757575;
    border-radius: 0px
}

.card2 {
    margin: 0px 40px
}

.logo {
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

.facebook {
    background-color: #3b5998;
    color: #fff;
    font-size: 18px;
    padding-top: 5px;
    border-radius: 50%;
    width: 35px;
    height: 35px;
    cursor: pointer
}

.twitter {
    background-color: #1DA1F2;
    color: #fff;
    font-size: 18px;
    padding-top: 5px;
    border-radius: 50%;
    width: 35px;
    height: 35px;
    cursor: pointer
}

.linkedin {
    background-color: #2867B2;
    color: #fff;
    font-size: 18px;
    padding-top: 5px;
    border-radius: 50%;
    width: 35px;
    height: 35px;
    cursor: pointer
}

.line {
    height: 1px;
    width: 45%;
    background-color: #E0E0E0;
    margin-top: 10px
}

.or {
    width: 10%;
    font-weight: bold
}

.text-sm {
    font-size: 14px !important
}

::placeholder {
    color: #BDBDBD;
    opacity: 1;
    font-weight: 300
}

:-ms-input-placeholder {
    color: #BDBDBD;
    font-weight: 300
}

::-ms-input-placeholder {
    color: #BDBDBD;
    font-weight: 300
}

input,
textarea {
    padding: 10px 12px 10px 12px;
    border: 1px solid lightgrey;
    border-radius: 2px;
    margin-bottom: 5px;
    margin-top: 2px;
    width: 100%;
    box-sizing: border-box;
    color: #2C3E50;
    font-size: 14px;
    letter-spacing: 1px
}

input:focus,
textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: 1px solid #304FFE;
    outline-width: 0
}

button:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    outline-width: 0
}

a {
    color: inherit;
    cursor: pointer
}

.btn-blue {
    background-color: #1A237E;
    width: 150px;
    color: #fff;
    border-radius: 2px
}

.btn-blue:hover {
    background-color: #000;
    cursor: pointer
}

.bg-blue {
    color: #fff;
    background-color: #1A237E
}

@media screen and (max-width: 991px) {
    .logo {
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
</style>
<div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
    <div class="card card0 border-0">
        <div class="row d-flex">
            <div class="col-lg-6">
                <div class="card1 pb-5">
                    <div class="row"> <div class="col-md-6"><img src="{{ asset(str_replace(app_path(),'',$event->image_path))}}" class="logo"> </div><div class="col-md-6 mt-5"> <h3>{{ $event->title }}</h3></div> </div>

                     <div class="row px-3 justify-content-center mt-1 ml-3 mb-5 border-line">
                         <p> {{$event->start_time}}</p>
                         <p><?php echo $event->description ?></p>
                     </div>
                      <div class="row px-3 justify-content-center mt-1 ml-3 mb-5 border-line">

                              <br>
                               <ol>
                               <li> <h3> Event Booking instructions</h3></li>
                             <li>1.On the M-PESA Menu Go to "Send Money" and Select <b>Buy Goods</b></li>
                             <li>2.Enter <b>07xxxxxxxx</b> as the Phone Number</b></li>
                             <li>3.Enter <b id="amount"></b> as the Amount</b></li>
                             <li>4.Enter your PIN and confirm that all details are correct abd press OK.</b></li>
                             <li>5.Confirm that the bill is being sent to <b>Mirriam Bitange</b>.</b></li>
                             <li>6.Enter the M-PESA code you receive in mpesa code box below and press Confirm.</b></li>
                             <li>7. <b>Please indicate the phone number used to make the payment in the form.</b> </b></li>
                             <li>8. <b>Voila!!!. The team will contact you on how to print your ticket.</b> </b></li>

                             </ol>
                          </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card2 card border-0 px-4 py-5">

                    <div class="row px-3 mb-4">
                        <div class="line"></div> <small class="or text-center">Ticket Details</small>
                        <div class="line"></div>
                        @if (count($errors) > 0)
                                                <div class="alert alert-danger">
                                                    <strong>Whoops!</strong> There were problems with input:
                                                    <br><br>
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                    </div>
                    <form role="form" method="POST" action="{{route('tickets.store')}}">
                    <input type="hidden"
                                                             name="_token"
                                                             value="{{ csrf_token() }}">
                                                             <input type="hidden"
                                                                                          name="event_id"
                                                                                          value="{{ $event->id }}">

                    			    			 <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                                      <div class="row">
                    			    				<div class="col-xs-6 col-sm-6 col-md-6">
                    			    					<div class="form-group">
                    			                <input type="text" name="first_name" value="{{Auth::user()->first_name}}" id="first_name" class="form-control input-sm" placeholder="First Name">
                    			    					</div>
                    			    				</div>
                    			    				<div class="col-xs-6 col-sm-6 col-md-6">
                    			    					<div class="form-group">
                    			    						<input type="text" name="last_name" value="{{Auth::user()->last_name}}" id="last_name" class="form-control input-sm" placeholder="Last Name">
                    			    					</div>
                    			    				</div>
                    			    			</div>

                    			    			<div class="form-group">
                    			    				<input type="email" name="email" id="email" value="{{Auth::user()->email}}" readonly class="form-control input-sm" placeholder="Email Address">
                    			    			</div>

                    			    			<div class="form-group">
                                                    <textarea name="physical_address" id="physical Address" class="form-control input-sm" placeholder="Physical address">{{Auth::user()->physical_address}}</textarea>
                                                </div>
                                                <div class="row">
                                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                                        <label>Ticket Type</label>
                                                            <div class="form-group">
                                                               <select class="form-control" name="ticket_type" id="ticket_type">
                                                               @if(count($tickets)>0)
                                                               @foreach($tickets as $ticket)
                                                               <option value="{{$ticket->id}}" data-id="{{$ticket->price}}">{{$ticket->title}} (Ksh {{$ticket->price}})</option>
                                                               @endforeach
                                                               @endif
                                                               </select>

                                                            </div>
                                                        </div>
                                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                                        <label>Number of tickets</label>
                                                            <div class="form-group">
                                                            <input type="number" name="ticket_quantity" id="ticket_quantity" class="form-control input-sm" placeholder="" min="1" value="1">

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                            <h3>Amount payable: Ksh <b id="amount2"></b><h3>
                                                    </div>


                    			    			<div class="row">
                    			    				<div class="col-xs-6 col-sm-6 col-md-6">
                    			    					<div class="form-group">
                    			    						<input type="text" name="phone_number" id="phone_number" value="{{Auth::user()->phone_number}}" class="form-control input-sm" placeholder="MPESA Number">
                    			    					</div>
                    			    				</div>
                    			    				<div class="col-xs-6 col-sm-6 col-md-6">
                    			    					<div class="form-group">
                    			    					<input type="text" name="mpesa_code" id="password" class="form-control input-sm" placeholder="MPESA Code">

                    			    					</div>
                    			    				</div>
                    			    			</div>

                                            <div class="row mb-3 px-3"> <button type="submit" class="btn btn-blue text-center">Confirm</button> </div>

                    			    		</form>

            </div>
        </div>

    </div>
</div>
@endsection
@section('scripts')
<script>

$(document).ready(function(){

$("#amount").html($("#ticket_type option:selected").attr('data-id')*$("#ticket_quantity").val());
$("#amount2").html($("#ticket_type option:selected").attr('data-id')*$("#ticket_quantity").val());
 $(document).on('change', '#ticket_type, #ticket_quantity', function(event){
$("#amount").html($("#ticket_type option:selected").attr('data-id')*$("#ticket_quantity").val());
$("#amount2").html($("#ticket_type option:selected").attr('data-id')*$("#ticket_quantity").val());
  event.preventDefault();


 });



});
</script>
@endsection
