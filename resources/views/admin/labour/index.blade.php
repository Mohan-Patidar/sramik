@extends('layouts.adminlayout')

@section('content')

<div class="page-inner ad-inr">
    @if(Session::has('message'))
    <div class="save-alert alert alert-success alert-dismissible fade in" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                aria-hidden="true">×</span></button>
        <p>{{ Session::get('message') }}</p>
    </div>
    @endif
    <section class="main-wrapper">

        <div class="page-color">
            <div class="page-header">
                <div class="page-title">
                    <span>श्रमिक </span>
                </div>
            </div>
            <div class="tabel-head">
                <h5 class="page-title"><span></span></h5>
                <div class="form-group">
                    <!-- <p>
                        <select id="table-filter">
                            <option value="">सभी </option>
                            <option>जामली</option>
                            <option></option>
                            <option></option>
                            <option></option>
                            <option></option>
                            <option></option>
                            <option></option>
                            <option></option>
                            <option></option>
                            <option></option>
                            <option></option>
                        </select>
                    </p> -->
                </div>
                <div class="page-btn">
                    <a href="{{route('labour.create')}}" class="add-btn">श्रमिक जोड़ें</a>
                </div>
                <div class="page-btn">
                    <a href="{{url('labour_pdf')}}" class="add-btn">PDF</a>
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
                        @foreach($labours as $labour)
                        <tr>
                            <td>{{$labour->labour_id}}</td>
                            <td>{{$labour->labour_name}}</td>
                            <td>{{$labour->aadhar_no}}</td>
                            <td>{{$labour->samagr}}</td>
                            <td><img class="student-img" src="image/image/<?php echo $labour->image ;?>" /></td>
                            <td>{{$labour->date}}</td>
                            <td>{{$labour->gender}}</td>
                            <td>{{$labour->village}}</td>
                            <td>{{$labour->posto}}</td>
                            <td>{{$labour->tehsil}}</td>
                            <td>{{$labour->district}}</td>
                            <td>{{$labour->state}}</td>
                            <td>{{$labour->pincode}}</td>
                            <td>
                                <a class="" href="{{route('labour.edit',$labour->id)}}">
                                    <img src="{{url('/')}}/assets/image/Icon-edit.svg" width="16px" alt=""></a>

                                    <a class="" href="{{url('labourpdf',$labour->id)}}">
                                    <img src="{{url('/')}}/assets/image/printer.png" width="16px" alt=""></a>

                                <a class="delete-btn labour-delete" data-id="{{$labour->id}}"
                                    data-name="{{$labour->name }}">
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