<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CardController extends Controller
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

        $cards = \App\Card::where('user_id', $user->id)->get();

        return view('cards/list', ['cards' => $cards]);
    }

    /**
     */
    public function add(Request $request)
    {
        if ($cardData = $request->get('card')) {

            $cardData['user_id'] = \Auth::user()->id;

            \App\Card::create($cardData);

            return redirect('/cards/')->with('status', 'Card created successfully.');
        }
        return view('/cards/add');
    }
}
