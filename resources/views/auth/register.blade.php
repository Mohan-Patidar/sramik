@extends('layouts.authlayout')

@section('content')

 <div class="login-page">
        <div class="login-box">
            <div class="logo-box">
                <a href="#">
                श्रमिक सेवा    <img src="" alt="">
                </a>
            </div>
            <div class="login-bg">
                <form method="POST" action="{{ route('register') }}" id="register-form">
                @csrf
                    <h4 class="login-heading">रजिस्टर करें</h4>
                    <div class="form-group">
                        <label>उपयोगकर्ता नाम</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label>ईमेल आईडी</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    <div class="form-group">
                        <label>पासवर्ड</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>पासवर्ड की पुष्टि कीजिये</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                    <input type="submit" class="login-btn"  value="रजिस्टर करें">
                </form>
                <div class="text-center">
                    <p>पहले से ही एक खाता है! <a href="{{ route('login') }}"> लॉग इन करे </a></p>
                </div>
            </div>
        </div>
    </div> 
@endsection
@section('additionalscripts')
<script>
    $("#register-form").validate();
</script>
@endsection