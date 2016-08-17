<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DeckController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = \Auth::user();

        $decks = \App\Deck::where('user_id', $user->id)->get();

        return view('decks/list', ['decks' => $decks]);
    }

    /**
     */
    public function add(Request $request)
    {
        if ($deckData = $request->get('deck')) {

            $deckData['user_id'] = \Auth::user()->id;

            \App\Deck::create($deckData);

            return redirect('/decks/')->with('status', 'Deck created successfully.');
        }
        return view('/decks/add');
    }
}
