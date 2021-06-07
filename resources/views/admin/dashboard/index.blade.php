@extends('layouts.adminlayout')
@section('content')
<section class="main-wrapper">
    <div class="page-color">
        <div class="page-header">
            <div class="page-title">
                <h3><span>{{$msg}}</span> <span class="hello-icon"><img src="{{url('/')}}/assets/image/hello-icon.svg" alt=""></span></h3>
                <div class="user-drop-sec">
                    <ul>
                        <li>
                            <a href="javascript:void(0)"><i>
                                    <img src="{{url('/')}}/assets/image/username.svg" class="menu-show" alt="">
                                </i><span></span>
                                <span class="drop-arrow">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10.831" height="6.197" viewBox="0 0 10.831 6.197">
                                        <path id="Icon_ionic-ios-arrow-back" data-name="Icon ionic-ios-arrow-back" d="M13.113,11.6,17.2,7.51a.773.773,0,1,0-1.094-1.091l-4.632,4.629a.771.771,0,0,0-.023,1.065L16.1,16.774a.774.774,0,1,0,1.1-1.09Z" transform="translate(-6.172 17.445) rotate(-90)" fill="#000" />
                                    </svg>
                                </span></a>
                            <ul>
                                <li>
                                    <a href="{{ url('/logout') }}">
                                        <i>
                                            <img src="{{url('/')}}/assets/image/logout-01.svg" class="menu-show" alt="">
                                        </i><span>लॉग आउट</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="dashboard-wrapper">
            <div class="dash-wrap-left">
                <div class="dash-wrap-left-inr">
                    <div class="dash-box-wraper">
                        <div class="dash-box dash-box-first">
                            <p>कुल श्रमिक</p>
                            <h2>{{$labour}}</h2>
                        </div>
                        <div class="dash-box dash-box-second">
                            <p>कुल किसान</p>
                            <h2>{{$farmer}}</h2>
                        </div>
                    </div>



                </div>
            </div>
        </div>
        <div class="dash-wrap-right">
            <div class="calender-sec">
                <div id="inline-cal"></div>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection
@push('scripts')

@endpush