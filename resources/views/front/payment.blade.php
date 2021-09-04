@extends('layouts.frontlayouts')
@section('content')

    <div id="app">
        <main class="py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-3 col-md-offset-6">
                        @if($message = Session::get('error'))
                            <div class="alert alert-danger alert-dismissible fade in" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <strong>Error!</strong> {{ $message }}
                            </div>
                        @endif
                            <div class="alert alert-success success-alert alert-dismissible fade show" role="alert" style="display: none;">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <strong>Success!</strong> <span class="success-message"></span>
                            </div>
                        {{ Session::forget('success') }}
                        <div class="card card-default">
                            <div class="card-header">
                                Razorpay Example
                            </div>
                            <div class="card-body text-center">
                                <div class="form-group mt-1 mb-1">
                                <label>Name</label>
                                    <input type="text" name="name" class="form-control name" >
                                </div>
                                <div class="form-group mt-1 mb-1">
                                <label>Email</label>
                                    <input type="text" name="email" class="form-control email" >
                                </div>
                                <div class="form-group mt-1 mb-1">
                                <label>Mobile Number</label>
                                    <input type="text" name="mobile_no" placeholder="" class="form-control mobile_no" >
                                </div>
                                <div class="form-group mt-1 mb-1">
                                <label>Payment</label>
                                    <input type="text" name="amount" class="form-control amount" >
                                </div>
                                <button id="rzp-button1" class="btn btn-success btn-lg">Pay</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection