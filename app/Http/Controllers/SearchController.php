<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent\Model;
//use App\Models\bus;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = Booking::where([
            ['source', '!=',Null],
            ['destination', '!=',Null],
            [function($queryFrom) use ($request) {
            if(($from = $request->from)){
                $queryFrom->orWhere('source','LIKE', '%' . $from . '%')->get();
            }
        }],
            [function($queryTo) use ($request) {
                if(($to = $request->to)){
                    $queryTo->orWhere('destination','LIKE', '%' . $to . '%')->get();
                }
            }]
    ]);
       return view ('customerViews.search',compact('search'));
    }

    public function tripSearch(){
        $source = $_GET['source'];
        $destination = $_GET['destination'];

        $tripsearch = DB::select('select trips.departure, trips.arrival, trips.date, routes.source, routes.destination, routes.boarding_place, routes.price,routes.price from routes inner join trips on routes.id = trips.route_id where routes.source=? and routes.destination=?',['$source','$destination']);
        return view('customerViews.search',compact('source','destination','tripsearch'));
    }


}
