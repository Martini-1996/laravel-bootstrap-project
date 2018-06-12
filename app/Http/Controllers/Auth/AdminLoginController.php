<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Validation\ValidationException;
class AdminLoginController extends Controller
{
    
public function __construct(){
	    $this->middleware('guest:admin');
}

public function showLoginForm(){

	return view('auth.admin-login');
}

public function login(Request $request){

$this->validate($request,[
'name'=>'required',
'password'=>'required|min:6'
]
);

if(Auth::guard('admin')->attempt(['name'=>$request->name,'password'=>$request->password],$request->remember)){

	return redirect()->intended(route('admin'));


}


//return redirect()->back()->withInput($request->only('name','remember'));

 throw ValidationException::withMessages([
           'name' => [trans('auth.failed')],
            
        ]);

}



}
