@extends('master')
@section('content')

   <div class="container-fluid">
       <div class="row justify-content-center custom-login ">
           <div class="col-4">
               <form action="#" class="shadow-lg p-5">
                   <div class="form-group">
                       <label>Name</label>
                       <input type="text" class="form-control" name="name" autocomplete="off">
                   </div>
                   <div class="form-group">
                       <label>Password</label>
                       <input type="password" class="form-control" name="passsword">
                   </div>
                   <button class="btn btn-primary btn-block">Click Here</button>
               </form>
           </div>
       </div>
   </div>
@endsection

