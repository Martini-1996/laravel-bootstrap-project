@extends('layouts.master')

@section('content')

<div class="container w-50 bg-white shadow-sm" style="margin-top: 100px;margin-bottom: 80px;">
 <div class="row border text-center">
    <div class="col-sm-12 p-3 ">
    <span class="display-4 "
     style="font-family: cursive;text-align: center;">
     <small>Login</small></span>
    </div>
 </div>
     
    <div class="row border ">
        <div class="col-sm-12 p-5">
       <form action="{{route('admin.login.submit')}}" 
        method="post" > 
        <input type="hidden" name="_token" value="
        <?php echo csrf_token();?>">
        <div class="row">
            <div class="col-sm-4 text-right">
                <label class="{{ $errors->has('name') ? ' text-danger' : '' }}"><strong>User Name</strong></label>
            </div>
            <div class="col-sm-7">
            <div class="form-group">
                  <input type="text" name="name" class="form-control">
                    @if ($errors->has('name'))
                    <span class="text-danger">
                     <strong>{{ $errors->first('name') }}</strong>
                     </span>
                   @endif
            </div>
            </div>
        </div> 
         <div class="row">
            <div class="col-sm-4 text-right">
           <label class="{{ $errors->has('password') ? ' text-danger' : '' }}"><strong>Password</strong></label>
           </div>
           <div class="col-sm-7">
            <div class="form-group">
            <input type="password" name="password" class="form-control">
              @if ($errors->has('password'))
         <span class="text-danger">
         <strong>{{ $errors->first('password') }}</strong>
                </span>
              @endif
            </div>
        </div>
    </div>
     <div class="row ">
        <div class="col-sm-6  offset-sm-4">
             <div class="form-check">
               <label class="form-check-label">
               <input type="checkbox" name="remember" class="form-check-input">Remember Me</label>
            </div>
        </div>
        </div>
         <div class="row mt-3 ">
             <div class="col-sm-3 offset-sm-4">
            <input class="btn btn-primary btn-block" type="submit" value="Login">
             </div>
        </div>
        
    </form>
        </div>
    </div>

</div>
@endsection
