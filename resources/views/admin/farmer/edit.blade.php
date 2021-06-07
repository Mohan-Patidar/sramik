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
                किसान जनाकारी परिवर्तन
                </div>
                <div class="page-btn">
                    <a href="{{url('/farmer')}}" class="add-btn">
                        <span>
                            <img src="{{url('/')}}/assets/image/Icon-arrow-back.svg" class="btn-arrow-show" alt="">
                            <img src="{{url('/')}}/assets/image/Icon-arrow-back-2.svg" class="btn-arrow-hide" alt="">
                        </span>
                        <span>वापस</span>
                    </a>
                </div>
            </div>
            <div class="page-table">
                <div class="profile-box container-fluid">
                    <form class="add-student-form" method="Post" action="{{route('farmer.update',$farmer->id)}}" enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="PUT">
                        @csrf
                       
                        <div class="row align-items-center">
                            <div class="col-12">
                                <div class="form-group">
                                <input type="hidden" name="id" value="{{$farmer->id}}" />
                                    <label for="">पंजीयन क्रमांक</label>
                                    <input type="number" class="any-work" name="farmer_id" id="" value="{{$farmer->farmer_id}}" placeholder="पंजीयन क्रमांक">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex justify-content-between w-100">
                                    <div class="form-group">
                                        <label for="">दिनांक चुनें</label>
                                        <input type="date" name="date" id="" value="{{$farmer->date}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="">फ़ोटो चुनें</label>
                                        <input type="file"  name="image">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group">
                                    <label for="">किसान का नाम</label>
                                    <input type="text" name="farmer_name" placeholder="किसान का नाम" value="{{$farmer->farmer_name}}">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group">
                                    <label for="">आधार न.</label>
                                    <input type="text" placeholder="आधार न." name="aadhar_no" value="{{$farmer->aadhar_no}}">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group">
                                    <label for="">समग्र परिवार आई डि.</label>
                                    <input type="text" placeholder="समग्र परिवार आई डि." name="samagr" value="{{$farmer->samagr}}">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group">
                                    <label for="">ग्राम :-</label>
                                    <input type="text"  name="village" placeholder="ग्राम" value="{{$farmer->village}}">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group">
                                    <label for="">पोस्ट :-</label>
                                    <input type="text" name="posto" placeholder="पोस्ट" value="{{$farmer->posto}}">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group">
                                    <label for="">तह. :-</label>
                                    <input type="text"  name="tehsil" placeholder="तह." value="{{$farmer->tehsil}}">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group">
                                    <label for="">जिला :-</label>
                                    <input type="text"  name="district" placeholder="जिला" value="{{$farmer->district}}">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group">
                                    <label for="">राज्य :-</label>
                                    <input type="text"  name="state" placeholder="राज्य" value="{{$farmer->state}}">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group">
                                    <label for="">पिन कोड :-</label>
                                    <input type="text"  name="pincode" placeholder="पिन कोड" value="{{$farmer->pincode}}">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group ">
                                    <label class="d-inline-block mr-3">लींग</label>
                                    <input type="radio" id="female" name="gender" value="महिला" {{ $farmer->gender == 'महिला' ? 'checked' : '' }}>
                                    <label for="female" class="d-inline-block mr-3">महिला</label>
                                    <input type="radio" id="male" name="gender" value="पुरुष" {{ $farmer->gender == 'पुरुष' ? 'checked' : '' }}>
                                    <label for="male" class="d-inline-block ">पुरुष</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <b> कार्य का चयन करें :-</b><br>
                                    <input type="checkbox" id="gehu" name="work[]" value="gehu" <?php if($farmer->work != null) {
																											foreach ($farmer->work as $w) {
																													if ($w == 'gehu') {
																														echo 'checked';
																													}
																													}
																													} ?> >
                                    <label for="gehu" class="d-inline-block mr-3">गेहू कटाई</label>
                                    <input type="checkbox" id="soyabin" name="work[]" value="soyabin" <?php if($farmer->work != null) {
																											foreach ($farmer->work as $w) {
																													if ($w == 'soyabin') {
																														echo 'checked';
																													}
																													}
																													} ?>>
                                    <label for="soyabin" class="d-inline-block mr-3">सोयाबीन कटाई</label>
                                    <input type="checkbox" id="pyaj" name="work[]" value="pyaj" <?php if($farmer->work != null) {
																											foreach ($farmer->work as $w) {
																													if ($w == 'pyaj') {
																														echo 'checked';
																													}
																													}
																													} ?>>
                                    <label for="pyaj" class="d-inline-block mr-3">प्याज</label>
                                    <input type="checkbox" id="lahsun" name="work[]" value="lahsun" <?php if($farmer->work != null) {
																											foreach ($farmer->work as $w) {
																													if ($w == 'lahsun') {
																														echo 'checked';
																													}
																													}
																													} ?>>
                                    <label for="lahsun" class="d-inline-block mr-3">लहसुन</label>
                                    <input type="checkbox" id="bagbani" name="work[]" value="bagbani" <?php if($farmer->work != null) {
																											foreach ($farmer->work as $w) {
																													if ($w == 'bagbani') {
																														echo 'checked';
																													}
																													}
																													} ?>>
                                    <label for="bagbani" class="d-inline-block mr-3">बागबानी</label>
                                    <input type="checkbox" id="sichai" name="work[]" value="sichai" <?php if($farmer->work != null) {
																											foreach ($farmer->work as $w) {
																													if ($w == 'sichai') {
																														echo 'checked';
																													}
																													}
																													} ?>>
                                    <label for="sichai" class="d-inline-block mr-3">सिंचाई</label>
                                    <input type="checkbox" id="tractor" name="work[]" value="tractor" <?php if($farmer->work != null) {
																											foreach ($farmer->work as $w) {
																													if ($w == 'tractor') {
																														echo 'checked';
																													}
																													}
																													} ?>>
                                    <label for="tractor" class="d-inline-block mr-3">ट्रैक्टर ड्राइवर</label>
                                    <input type="text" id="any" name="ex_work" placeholder="अन्य कार्य" class="any-work" value="{{$farmer->ex_work}}">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group">
                                    <label for="">मजदूरों की संख्या</label>
                                    <input type="number" name="labour_no" placeholder="मजदूरों की संख्या" value="{{$farmer->labour_no}}">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group">
                                    <label for="">जमीन (बीघा में)</label>
                                    <input type="text" name="land" placeholder="जमीन" value="{{$farmer->land}}">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group">
                                    <label for="">कार्य अवधि</label>
                                    <input type="text" name="work_time" placeholder="कार्य अवधि" value="{{$farmer->work_time}}">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group">
                                    <label for="">मो. नं.</label>
                                    <input type="number" name="mobile" placeholder="मोबाइल नंबर" value="{{$farmer->mobile}}">
                                </div>
                            </div>

                        </div>
                        <div class="table-div">

                            <b>शैक्षणिक योग्यता</b>
                            <table border="1xp">
                                <thead>
                                    <tr>
                                        <th>क्रमांक</th>
                                        <th>कक्षा</th>
                                        <th>उत्तीर्ण वर्ष</th>
                                        <th>प्राप्तांक</th>
                                        <th>पुर्णांक</th>
                                        <th>प्रतिशत</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @php $count = 0; @endphp
                                    @foreach($farmer->class as $c)
                                   @php $count++; @endphp
                                    <tr>
                                        <td>{{$count}}</td>
                                        <td>
                                            <input type="text" name="class[]" id="" value="{{$c['class']}}">
                                        </td>
                                        <td>
                                            <input type="text" name="year[]" id="" value="{{$c['year']}}">
                                        </td>
                                        <td>
                                            <input type="text" name="marks[]" id="" value="{{$c['marks']}}">
                                        </td>
                                        <td>
                                            <input type="text" name="max[]" id="" value="{{$c['max']}}">
                                        </td>
                                        <td>
                                            <input type="text" name="percentage[]" id="" value="{{$c['percentage']}}">
                                        </td>
                                    </tr>
                                                                                                                    @endforeach
                                   
                                </tbody>
                            </table>
                        </div>
                        <div class="mt-3">
                            <b>बैंकिंग जानकारी</b>
                        </div>
                        <table class="w-100" border="1px">
                            <tbody>
                                <tr>
                                    <td>
                                        <input type="text" class="d-inline-block" name="bank_name" id=""  value="{{$farmer->bank_name}}" placeholder="बैंक नाम">
                                    </td>
                                    <td>
                                        <input type="text" class="d-inline-block" name="ifsc" id="" value="{{$farmer->ifsc}}" placeholder="आई एफ एस सी कोड ">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="text" class="d-inline-block" name="acc_no" value="{{$farmer->acc_no}}"  id="" placeholder="अकाउंट नंबर">
                                    </td>
                                    <td>
                                        <input type="text" name="branch" id=""  value="{{$farmer->branch}}" placeholder="शाखा">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <input type="text" name="bank_add" id="" value="{{$farmer->bank_add}}" placeholder="पता">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <input type="text" name="pan" id=""  value="{{$farmer->pan}}" placeholder="पैन कार्ड नंबर">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <input type="text" name="acc_holder" id="" value="{{$farmer->acc_holder}}" placeholder="खाताधारक नाम">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="col-12 text-center">
                            <div class="form-group ">
                            <input type="submit" name="save" class="add-btn" id="save" value="किसान जोड़ें">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    @endsection
    @section('additionalscripts')


    @endsection