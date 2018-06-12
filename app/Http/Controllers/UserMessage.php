<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use DB;
class UserMessage extends Controller
{
   
    public function index(Request $request){

     $this->validate($request,[
     	'name'=>'required',
     	'email'=>'required',
     	'message'=>'required'
     ]);
  $message=new message();
  $message->name=$request->input('name');
  $message->email=$request->input('email');
   $message->phone=$request->input('phone');
  $message->message=$request->input('message');

$message->save();
return redirect('/contact')->with("sukses","Message Sent Successfully");
    }
    public function book($type){

return view('book',['type'=>$type]);
    }

    public function session(Request $request){
      $type=$request->input('type');
      $floor=$request->input('floor');
      $persons=$request->input('persons');
      $price=$request->input('price');
       $request->session()->put('type',$type);
        $request->session()->put('floor',$floor);
         $request->session()->put('persons',$persons);
          $request->session()->put('price',$price);
         return redirect('/proceed');
    }

    public function proceed(Request $request){
      $type=$request->session()->get('type');
      $floor=$request->session()->get('floor');
      $persons=$request->session()->get('persons');
      $price=$request->session()->get('price');
     switch ($price) {
       case '1':
        $first="100";
        $last='200';
         break;
       case '2':
       $first="400";
        $last='600';
         break;
          case '3':
       $first="600";
        $last='700';
         break;
       case '4':
       $first="1000";
        $last='2000';
         break;

     }

     $rooms=DB::select("select * from rooms where lloji='$type' and kati='$floor' and hapsira='$persons' and cmimi>='$first' and cmimi<='$last' and prenotuar='0'  ");
     return view('proceed',['rooms'=>$rooms,'type'=>$type]);

    }



    public function finish(Request $request){
        $nr=0;
       for ($i=0; $i <500 ; $i++) { 
        if ($request->input($i)) {
        $check=$request->input($i);
        $this->validate($request,[
        "first$check"=>'required',
        "last$check"=>'required',
          'name'=>'required',
        'surname'=>'required',
        'passport'=>'required',
        'credit'=>'required'
        ]);
        $first=$request->input("first$check");
        $last=$request->input("last$check");
        $passport=$request->input('passport');

          DB::update("update rooms set prenotuar=1,From_Date='$first',Till_Date='$last',passport_id='$passport' where id=$check");
          $nr++;
        }
        
       } 
      
       if ($nr>0) {
       
        $res=DB::select("select * from reservations where passport_id=?",[$request->input('passport')]); 
        if (count($res)==0) {
          $name=$request->input('name');
          $surname=$request->input('surname');
          $passport=$request->input('passport');
          $credit=$request->input('credit');
        DB::insert("insert into reservations (Name,Surname,Passport_ID,Credit_Card) values ('$name','$surname','$passport','$credit')");
        }
       
        return redirect('/')->with('success','Your rooms have been successfully booked. ');
       }
        else  {
          return redirect('/proceed')->with('alert','Please check from the boxes below to proceed!');
        }
       




     }
   
}
