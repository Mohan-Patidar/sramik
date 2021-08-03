@extends('layouts.frontlayouts')
@section('content')
<section class="bg-light">
   


    <!-- Start Contact -->
    <section class="container py-5">

        
        <div class="row pb-4">
            <div class="col-lg-4">
            <!-- Start Contact Form -->
            <div class="col-lg-8 ">
                <form class="contact-form row" method="post" action="{{url('personal_info')}}" role="form" enctype="multipart/form-data">
                        {{csrf_field()}}
                    <div class="col-lg-6 mb-4">
                        <div class="form-floating">
                            <input type="text" class="form-control form-control-lg light-300" id="floatingname" name="name" placeholder="Name">
                            <label for="floatingname light-300">User Name</label>
                        </div>
                    </div><!-- End Input Name -->

                    <div class="col-lg-6 mb-4">
                        <div class="form-floating">
                            <input type="text" class="form-control form-control-lg light-300" id="floatingemail" name="address" placeholder="Address">
                            <label for="floatingemail light-300">Address</label>
                        </div>
                    </div><!-- End Input Email -->

                    <div class="col-lg-6 mb-4">
                        <div class="form-floating">
                            <input type="text" class="form-control form-control-lg light-300" id="floatingphone" name="farming_type" placeholder="Password">
                            <label for="floatingphone light-300">Farmering Type</label>
                        </div>
                    </div><!-- End Input Phone -->

                   <!-- End Input Company Name -->

                    <div class="col-12">
                        <div class="form-floating mb-4">
                            <input type="text" class="form-control form-control-lg light-300" id="floatingsubject" name="crop" placeholder="">
                            <label for="floatingsubject light-300">crop</label>
                        </div>
                    </div><!-- End Input Subject -->

                    <div class="col-md-12 col-12 m-auto text-end">
                        <button type="submit" class="btn btn-secondary rounded-pill px-md-5 px-4 py-2 radius-0 text-light light-300">Next</button>
                    </div>

                </form>
            </div>
            <!-- End Contact Form -->


        </div>
    </section>
    <!-- End Contact -->
    @endsection