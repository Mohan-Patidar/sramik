@extends('layouts.frontlayouts')
@section('content')
 
<div class="container">
    <div class="alert alert-danger" id="error" style="display: none;"></div>  
    <div class="card">
     
      <div class="card-body">  
        <div class="alert alert-success" id="sentSuccess" style="display: none;"></div>
        <form id="register">
        {{csrf_field()}}
        <div class="col-lg-6 mb-4">

        <div class="card-body text-center">
                                <div class="form-group mt-1 mb-1">
                                <label>User Name</label>
                                    <input type="text" name="name" class="form-control name" id="name" >
                                </div>
                                <div class="form-group mt-1 mb-1">
                                <label>Email</label>
                                    <input type="text" name="email" id="email" class="form-control email" >
                                </div>
                                <div class="form-group mt-1 mb-1">
                                <label>Mobile Number</label>
                                    <input type="text" id="number" class="form-control" placeholder="+91 9876543210" >
                                </div>
                                <div class="form-group mt-1 mb-1">
                                <label>Password</label>
                                    <input type="password" name="password" id="password" class="form-control" >
                                </div>
                                <div class="form-group mt-1 mb-1">
                                <label>Confirm Password</label>
                                    <input type="password" name="cpassword" id="cpassword" class="form-control" >
                                </div>
                                <div id="recaptcha-container"></div><br>
                                <button type="button" class="btn btn-success" onclick="SendCode();">Send Code</button>
                              </form>
                            </div>
                      
    </div>
  
      <div class="card-body">
        <div class="alert alert-success" id="successRegsiter" style="display: none;"></div>
        <form>
            <input type="text" id="verificationCode" class="form-control" placeholder="Enter Verification Code"><br>
            <button type="button" class="btn btn-success" onclick="VerifyCode();">Verify Code</button>
        </form>
      </div>
    
  
</div>
  

  
@endsection
