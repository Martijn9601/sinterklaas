<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lijst;
use App\User;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class ListController extends Controller
{
    public function create()
    {
    	return view('pages.ticket');
    }

    public function store(Request $request)
{
    $this->validate($request, [
            'title'     => 'required',
            'message'   => 'required'
        ]);

        $ticket = new Lijst([
            'title'     => $request->input('title'),
            'user_id'   => Auth::user()->id,
            'ticket_id' => strtoupper(str_random(10)),
            'message'   => $request->input('message'),
        ]);

        $ticket->save();

        return redirect()->back()->with("status", "Je nieuwe lijst met ID: #$ticket->ticket_id is aangemaakt!");
}
		public function userTickets()
		{
		    $tickets = Lijst::where('user_id', Auth::user()->id)->paginate(10);
		    

		    return view('pages.user_tickets', compact('tickets'));
		}

        public function show($ticket_id)
{
            $ticket = Lijst::where('ticket_id', $ticket_id)->firstOrFail();

            return view('pages.show', compact('ticket'));
}
}
