<?php

namespace App\Http\Controllers\Guest;

use App\Event;
use App\Ticket;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreEventsRequest;
use App\Http\Requests\Admin\UpdateEventsRequest;

class EventsController extends Controller
{

    public function __construct() {

        $this->middleware('auth', ['only' => ['show', 'store', 'create', 'edit', 'update', 'destroy']]);


        }
    /**
     * Display the Home page.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $events = Event::simplePaginate(1);

        return view('guest.index', compact('events'));
    }
    public function fetch_data(Request $request)
    {
    if ($request->ajax())
    {
    $events = Event::simplePaginate(1);
    return view('guest.events', compact('events'))->render();
    }
    }

//     public function login()
//      {
//      return view('guest.login')
//      }

    /**
     *
     *
     * @return about us
     */
    public function about()
    {

        return view('guest.about');
    }

    /**
         *
         *
         * @return playlist page
         */
        public function playlist()
        {


            return view('guest.playlist');
        }



    /**
     * Display Event.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $now = Carbon::now()->toDateString();
        // don't display tickets which are not available
        $match = [
            ['event_id', '=', $id],
            ['available_from', '<=', $now],
            ['available_to', '>=', $now]
        ];

        // used collect method to be able to sortBy
        $tickets = Ticket::where($match)->orderBy('price')->get();

        $event = Event::findOrFail($id);

        return view('guest.attend', compact('event', 'tickets'));
    }
}
