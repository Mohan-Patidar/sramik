@extends('layouts.authlayout')
@section('content')
<section class="login">
    <div class="login-page">
        <div class="login-page-inr">
            <div class="login-left">
           
        
            </div>
            <div class="login-right">
                <div class="login-bg">
                    @if(Session::has('message'))
                    <div class="save-alert alert alert-success alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <p>{{ Session::get('message') }}</p>
                    </div>
                    @endif
                    <div class="login-head">
                    <h3 class="login-heading">लॉग इन करे</h3>
                        <p>श्रमिक सेवा साइट में आपका स्वागत है कृपया अपने खाते में लॉगिन करें</p>
                    </div>
                    <form method="POST" action="{{ route('login') }}" id="login-form">
                        @csrf
                        <div class="form-group">
                            
                            <div class="user-name">
                            <input id="name" type="text" class="user-name @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name"  placeholder="उपयोगकर्ता नाम">
                            </div>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                           
                            <div class="pass-word">
                            <input id="password" type="password" class=" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="पासवर्ड">
                            </div>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <input type="submit" class="login-btn" name="" id="" value="Login">
                    </form>
                    <div class="text-center">
                        @if (Route::has('password.request'))
                        <p><a href="{{ route('password.request') }}">पासवर्ड भूल गए ?</a></p>
                        @endif
                        <p>अभी तक कोई पहुंच नहीं? <a href="{{ route('register') }}"> रजिस्टर करें</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('additionalscripts')
    <script>
        $("#login-form").validate();
    </script>
@endsection
