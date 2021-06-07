@extends('layouts.adminlayout')

@section('content')

<div class="page-inner ad-inr">
    @if(Session::has('message'))
    <div class="save-alert alert alert-success alert-dismissible fade in" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
        <p>{{ Session::get('message') }}</p>
    </div>
    @endif
    <section class="main-wrapper">

        <div class="page-color">
            <div class="page-header">
                <div class="page-title">
                    <span>किसान </span>
                </div>

            </div>
            <div class="tabel-head">
                <h5 class="page-title"><span></span></h5>
                <div class="form-group">
                </div>
                <div class="page-btn">
                    <a href="{{route('farmer.create')}}" class="add-btn">किसान जोड़ें</a>
                </div>
                <div class="page-btn">
                    <a href="{{url('farmer_pdf')}}" class="add-btn">PDF</a>
                </div>
            </div>
               <form id="frm-example" action="javascript:void(0)" method="get">
            <div class="page-table" id="dvData">
                <table id="" class="datastable tabel-res table-striped" style="width:100%;">
                    <thead>
                        <tr>
                        <th>पंजीयन क्रमांक</th>
                            <th>नाम</th>
                            <th>आधार न.</th>
                            <th>समग्र आई डि</th>
                            <th>फोटो</th>
                            <th>दिनांक </th>
                            <th>लींग</th>
                            <th>ग्राम</th>
                            <th>पोस्ट</th>
                            <th>तह</th>
                            <th>जिला</th>
                            <th>राज्य</th>
                            <th>पिन कोड</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($farmers as $farmer)
                        <tr>
                            <td>{{$farmer->farmer_id}}</td>
                            <td>{{$farmer->farmer_name}}</td>
                            <td>{{$farmer->aadhar_no}}</td>
                            <td>{{$farmer->samagr}}</td>
                            <td><img class="student-img" src="image/image/<?php echo $farmer->image ;?>" /></td>
                            <td>{{$farmer->date}}</td>
                            <td>{{$farmer->gender}}</td>
                            <td>{{$farmer->village}}</td>
                            <td>{{$farmer->posto}}</td>
                            <td>{{$farmer->tehsil}}</td>
                            <td>{{$farmer->district}}</td>
                            <td>{{$farmer->state}}</td>
                            <td>{{$farmer->pincode}}</td>
                            <td>
                                <a class="" href="{{route('farmer.edit',$farmer->id)}}">
                                    <img src="{{url('/')}}/assets/image/Icon-edit.svg" width="16px" alt=""></a>

                                    <a class="" href="{{url('farmerpdf',$farmer->id)}}">
                                    <img src="{{url('/')}}/assets/image/printer.png" width="16px" alt=""></a>

                                <a class="delete-btn farmer-delete" data-id="{{$farmer->id}}"
                                    data-name="{{$farmer->name }}">
                                    <img src="{{url('/')}}/assets/image/Icon-delete.svg" width="16px" alt="">
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
             <p><button type="submit" data-toggle="modal" data-target="#promoteModal">Send SMS</button></p>
                    <div class="container">
                      
                </form>
        </div>
    </section>
    @endsection
    @section('additionalscripts')>

    @endsection