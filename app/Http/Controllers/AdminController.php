<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\reservation;
use App\message;
use DB;
class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservations=DB::select("select registration_nr,numri,name,surname,reservations.passport_id,credit_card,from_date,till_date from reservations join rooms where reservations.passport_id=rooms.passport_id");
        $messages=message::all();
        return view('admin',['reservations'=>$reservations,
            'messages'=>$messages]);
    }
}
