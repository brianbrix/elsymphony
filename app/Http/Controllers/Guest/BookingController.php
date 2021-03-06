<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Guest\StoreBookingRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use App\Booking;
use App\Ticket;
class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $bookings = Booking::where('user_id', Auth::user()->id)->get();

        return view('guest.tickets', compact('bookings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBookingRequest $request)
    {
        //
         if (! Gate::allows('booking_create')) {
                    return abort(401);
                }
         $ticket = Ticket::findOrFail($request["ticket_type"]);
         if($ticket->amount<=0)
         {
         return back()->withErrors(['no_tickets' => ['This type of tickets is not available. Please contact admin for help.']]);
         }
        $request["amount"]=$request["ticket_quantity"]*$ticket->price;
        $request["ticket_number"]='ELS-'.strtoupper(uniqid());
         $booking = Booking::create($request->all());
         $ticket->decrement('amount', $request["ticket_quantity"]);
         return redirect('/tickets')->withErrors(['registration' => ['You have booked your ticket successfully. Please wait for the team for further instructions.']]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return view('guest.tickets');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function confirm($id, $confirm)
    {
    $b=Booking::findOrFail($id);
    if($confirm == 1)
    {
    return view('guest.confirm')->with('ticket',$b);
    }
    elseif($confirm == 0)
    {
    return view('guest.no_confirmed')->with('ticket',$b);
    }
    }
}
