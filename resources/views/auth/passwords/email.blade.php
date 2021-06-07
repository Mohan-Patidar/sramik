@extends('layouts.authlayout')
@section('content')
<div class="login-page">
        <div class="login-box">
            <div class="logo-box">
                <a href="#">
                </a>
            </div>
            <div class="login-bg">
                 <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <h3 class="login-heading">पासवर्ड रीसेट</h3>
                    <div class="form-group">
                        <label>ईमेल आईडी</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    <input type="submit" class="login-btn" value="पासवर्ड रीसेट लिंक भेजें">
                </form>
                <div class="text-center">
                    <p>अभी तक कोई पहुँच नहीं ? <a href="{{ route('register') }}"> रजिस्टर करें </a></p>
                </div>
            </div>
        </div>
    </div>
@endsection
