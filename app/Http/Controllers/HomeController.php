<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
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

        $beacons = \App\Beacon::where('user_id', $user->id)->get();

        return view('home', ['beacons' => $beacons]);
    }

    /**
     */
    public function add(Request $request)
    {
        if ($beaconData = $request->get('beacon')) {

            $beaconData['user_id'] = \Auth::user()->id;

            \App\Beacon::create($beaconData);

            return redirect('/')->with('status', 'Beacon registered successfully.');
        }
        return view('add');
    }
}
