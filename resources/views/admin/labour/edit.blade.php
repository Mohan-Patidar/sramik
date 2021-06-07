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
                    श्रमिक जनाकारी परिवर्तन</span>
                </div>
                <div class="page-btn">
                    <a href="{{url('/labour')}}" class="add-btn">
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
                    <form class="add-student-form" method="Post" id="labour-eform" action="{{route('labour.update',$labour->id)}}" enctype="multipart/form-data">
                        <input type="hidden" name="_method" value="PUT">
                        @csrf
                        <div class="row align-items-center">
                            <div class="col-12">
                                <div class="form-group">
                                    <input type="hidden" name="id" value="{{$labour->id}}" />
                                    <label for="">पंजीयन क्रमांक</label>
                                    <input type="number" class="" name="labour_id" value="{{$labour->labour_id}}">
                                </div>
                                @error('labour_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <div class="d-flex justify-content-between w-100">
                                    <div class="form-group">
                                        <label for="">दिनांक चुनें</label>
                                        <input type="date" name="date" value="{{$labour->date}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="">फ़ोटो चुनें</label>
                                        <input type="file" name="image" >
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group">
                                    <label for="">लीडर का नाम</label>
                                    <input type="text" placeholder="लीडर का नाम" name="leader_name" value="{{$labour->leader_name}}">
                                </div>

                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group">
                                    <label for="">लीडर का मो. नं.</label>
                                    <input type="text" placeholder="लीडर का मो. नं." name="leader_contact" value="{{$labour->leader_contact}}">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group">
                                    <label for="">श्रमिक का नाम</label>
                                    <input type="text" placeholder="किसान का नाम" name="labour_name" value="{{$labour->labour_name}}">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group">
                                    <label for="">जन्म दिनांक</label>
                                    <input type="date" name="dob" value="{{$labour->dob}}">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group">
                                    <label for="">मो. नं.</label>
                                    <input type="number" name="mobile_no" value="{{$labour->mobile_no}}">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group">
                                    <label for="">आधार न.</label>
                                    <input type="text" name="aadhar_no" value="{{$labour->aadhar_no}}">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group">
                                    <label for="">पिता का नाम</label>
                                    <input type="text" name="f_name" value="{{$labour->f_name}}">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group">
                                    <label for="">आयु</label>
                                    <input type="text" name="age" value="{{$labour->age}}">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group">
                                    <label for="">समग्र परिवार आई डि.</label>
                                    <input type="text" name="samagr" value="{{$labour->samagr}}">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group">
                                    <label for="">ग्राम </label>
                                    <input type="text" name="village" value="{{$labour->village}}">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group">
                                    <label for="">पोस्ट </label>
                                    <input type="text" name="posto" value="{{$labour->posto}}">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group">
                                    <label for="">तह.</label>
                                    <input type="text" name="tehsil" value="{{$labour->tehsil}}">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group">
                                    <label for="">जिला </label>
                                    <input type="text" name="district" value="{{$labour->district}}">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group">
                                    <label for="">राज्य </label>
                                    <input type="text" name="state" value="{{$labour->state}}">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group">
                                    <label for="">पिन कोड </label>
                                    <input type="text" name="pincode" value="{{$labour->pincode}}">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group ">
                                    <label class="d-inline-block mr-3">लींग</label>
                                    <input type="radio" id="female" name="gender" value="महिला" {{ $labour->gender == 'महिला' ? 'checked' : '' }}>
                                    <label for="female" class="d-inline-block mr-3">महिला</label>
                                    <input type="radio" id="male" name="gender" value="पुरुष" {{ $labour->gender == 'पुरुष' ? 'checked' : '' }}>
                                    <label for="male" class="d-inline-block ">पुरुष</label>
                                </div>
                            </div>
                           
                            <div class="col-12">
                                <div class="form-group">
                                    <b> कार्य का चयन करें </b><br>
                                    <input type="checkbox" id="driver" name="work[]" value="driver" <?php if($labour->work != null) {
																											foreach ($labour->work as $w) {
																													if ($w == 'driver') {
																														echo 'checked';
																													}
																													}
																													} ?> >
                                    <label for="driver" class="d-inline-block mr-3">ड्राइवर</label>
                                    <input type="checkbox" id="worker" name="work[]" value="worker" <?php if($labour->work != null) {
																											foreach ($labour->work as $w) {
																													if ($w == 'worker') {
																														echo 'checked';
																													}
																													}
																													} ?> >
                                    <label for="worker" class="d-inline-block mr-3">मजदूर</label>
                                    <input type="checkbox" id="mechanic" name="work[]" value="mechanic" <?php if($labour->work != null) {
																											foreach ($labour->work as $w) {
																													if ($w == 'mechanic') {
																														echo 'checked';
																													}
																													}
																													} ?> >
                                    <label for="mechanic" class="d-inline-block mr-3">मैकेनिक</label>
                                    <input type="checkbox" id="electrician" name="work[]" value="electrician" <?php if($labour->work != null) {
																											foreach ($labour->work as $w) {
																													if ($w == 'electrician') {
																														echo 'checked';
																													}
																													}
																													} ?> >
                                    <label for="electrician" class="d-inline-block mr-3">इलेक्ट्रीशियन</label>
                                    <input type="checkbox" id="plumber" name="work[]" value="plumber" <?php if($labour->work != null) {
																											foreach ($labour->work as $w) {
																													if ($w == 'plumber') {
																														echo 'checked';
																													}
																													}
																													} ?> >
                                    <label for="plumber" class="d-inline-block mr-3">प्लंबर</label>
                                    <input type="checkbox" id="mistree" name="work[]" value="mistree" <?php if($labour->work != null) {
																											foreach ($labour->work as $w) {
																													if ($w == 'mistree') {
																														echo 'checked';
																													}
																													}
																													} ?> >
                                    <label for="mistree" class="d-inline-block mr-3">मिस्त्री</label>
                                    <input type="text" id="any" name="ex_work" placeholder="अन्य कार्य" class="any-work" value="{{$labour->ex_work}}">
                                </div>
                            </div>
                            <!-- <div class="col-md-6 col-lg-4">
                                <div class="form-group">
                                    <label for="">कार्य अवधि</label>
                                    <input type="text" name="worktime" placeholder="कार्य अवधि">
                                </div>
                            </div> -->
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group">
                                    <label for="">अनुभव</label>
                                    <input type="text" name="experience" value="{{$labour->experience}}">
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
                                <?php if($labour->class != null) {
										$count = 1;		
        	foreach ($labour->class as $c) {
        

		?>	
        																									<tr>
         <td><?php echo $count; ?></td>
         <td><input type="text" name="class[]" id="" value="<?php echo $c['class']; ?>"></td>
         <td><input type="text" name="year[]" id="" value="<?php echo $c['year']; ?>"></td>
         <td><input type="text" name="marks[]" id="" value="<?php echo $c['marks']; ?>"></td>
         <td><input type="text" name="max[]" id="" value="<?php echo $c['max']; ?>"></td>
         <td><input type="text" name="percentage[]" id="" value="<?php echo $c['percentage']; ?>"></td>
         
        </tr>
        <?php	
    $count++;																											}
																												} ?>	

                                   
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
                                        <input type="text" class="d-inline-block" name="bank_name"  value="{{$labour->bank_name}}" id="" placeholder="बैंक नाम">
                                    </td>
                                    <td>
                                        <input type="text" class="d-inline-block" name="ifsc" id="" value="{{$labour->ifsc}}" placeholder="आई एफ एस सी कोड ">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="text" class="d-inline-block" name="acc_no"  value="{{$labour->acc_no}}" id="" placeholder="अकाउंट नंबर">
                                    </td>
                                    <td>
                                        <input type="text" name="branch" id="" value="{{$labour->branch}}" placeholder="शाखा">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <input type="text" name="bank_add" id="" value="{{$labour->bank_add}}" placeholder="पता">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <input type="text" name="pan" id="" value="{{$labour->pan}}" placeholder="पैन कार्ड नंबर">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <input type="text" name="acc_holder" id="" value="{{$labour->acc_holder}}" placeholder="खाताधारक नाम">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="col-12 text-center">
                            <div class="form-group ">
                                &nbsp
                                <input type="submit" name="save" class="add-btn" id="save" value="श्रमिक जोड़ें">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    @endsection
    @section('additionalscripts')
    <script>
        $("#labour-form").validate();
    </script>

    @endsection