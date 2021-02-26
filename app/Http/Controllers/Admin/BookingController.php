<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Booking;
use App\Event;
class BookingController extends Controller
{
public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if (! Gate::allows('booking_access')) {
                    return abort(401);
                }

                $bookings = Booking::all();

                return view('admin.bookings.index', compact('bookings'));
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
//          dd($ticket);
        $request["amount"]=$request["ticket_quantity"]*$ticket->price;
        $request["ticket_number"]='ELS-'.strtoupper(uniqid());
//         $request["ticket_number"]='ELS-'.strtoupper(uniqid());
         $booking = Booking::create($request->all());
//          return redirect()->back()->withErrors('message', '');
// dd($booking);
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
       if (! Gate::allows('booking_view')) {
           return abort(401);
       }
       $booking = Booking::findOrFail($id);

       return view('admin.bookings.show', compact('booking'));
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
        if (! Gate::allows('booking_edit')) {
                    return abort(401);
                }
//                 $events = Event::get()->pluck('title', 'id')->prepend('Please select', '');

                $booking = Booking::findOrFail($id);

                return view('admin.bookings.edit', compact('booking'));
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
         if (! Gate::allows('booking_edit')) {
                    return abort(401);
                }
                $booking = Booking::findOrFail($id);
                $confirmed=0;
                if($request->has("confirmed"))
                $confirmed=1;
                else
                $confirmed=0;
                $booking->update(['additional_info'=>$request->get('additional_info'),'confirmed'=>$confirmed]);
                return redirect()->route('admin.bookings.index')->with('message', 'The ticket was updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('booking_delete')) {
                    return abort(401);
                }
                $booking = Booking::findOrFail($id);
                $booking->delete();

                return redirect()->route('admin.bookings.index');
    }

    public function massDestroy(Request $request)
        {
            if (! Gate::allows('booking_delete')) {
                return abort(401);
            }
            if ($request->input('ids')) {
                $entries = Booking::whereIn('id', $request->input('ids'))->get();

                foreach ($entries as $entry) {
                    $entry->delete();
                }
            }
        }

}

