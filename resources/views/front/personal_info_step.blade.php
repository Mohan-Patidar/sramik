@extends('layouts.frontlayouts')
@section('content')
    <div id="app">
        <main class="py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-3 col-md-offset-6">
                
                        <div class="card card-default">
                            <div class="card-header">
                                personal Information 
                            </div>
                            <div class="card-body text-center">
                            <form class="contact-form row" method="post" action="{{url('personal_info')}}" role="form" enctype="multipart/form-data">
                        {{csrf_field()}}
                                <div class="form-group mt-1 mb-1">
                                <label>Kisan Name</label>
                                    <input type="text" name="farmer_name" class="form-control" >
                                </div>
                                <div class="form-group mt-1 mb-1">
                                <label>Address</label>
                                    <input type="text" name="address" class="form-control" >
                                </div>
                                <div class="form-group mt-1 mb-1">
                                <label>Gender</label>
                                    <input type="radio" id="female" name="gender" value="female">
                                    <label for="female" class="d-inline-block mr-3">Female</label>
                                    <input type="radio" id="male" name="gender" value="male" checked>
                                    <label for="male" class="d-inline-block ">Male</label>
                                </div>
                                <div class="form-group mt-1 mb-1">
                                <label>Crops</label>
                                    <input type="checkbox" id="gehu" name="work[]" value="gehu">
                                    <label for="gehu" class="d-inline-block mr-3">????????????</label>
                                    <input type="checkbox" id="soyabin" name="work[]" value="soyabin">
                                    <label for="soyabin" class="d-inline-block mr-3">?????????????????????</label>
                                    <input type="checkbox" id="pyaj" name="work[]" value="pyaj">
                                    <label for="pyaj" class="d-inline-block mr-3">???????????????</label>
                                    <input type="checkbox" id="lahsun" name="work[]" value="lahsun">
                                    <label for="lahsun" class="d-inline-block mr-3">???????????????</label>
                                    <input type="checkbox" id="bagbani" name="work[]" value="bagbani">
                                    <label for="bagbani" class="d-inline-block mr-3">?????????????????????</label>
                                    <input type="checkbox" id="sichai" name="work[]" value="hybrid">
                                    <label for="sichai" class="d-inline-block mr-3">????????????????????????</label>
                                </div>
                                <!-- <button action="{{url('/greet')}}">Previous</button> -->
                                <button id="" class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    @endsection