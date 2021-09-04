<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>श्रमिक सेवा</title>
    <link rel="stylesheet" href="{{url('/')}}/assets/css/global.css">
   
</head>

<body>
    <!-- dashboard starts here -->
    <main>
        <!-- sidebar start -->
        <aside class="main-aside">
            <div class="sidebar-wrapper">
                <!-- logo -->
                <div class="main-logo">
                    <a href="#">
                        <img class="desk-show" src="{{url('/')}}/assets/image/logo-blue.svg" alt="">
                        <img class="mob-show" src="{{url('/')}}/assets/image/logo-icon.svg" alt="">
                    </a>
                </div>
                <div class="overlay-close"></div>
                <!-- navigations  -->
                <div class="menu-button">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="main-menus">
                    <div class="menu-logo">
                        <a href="#">
                        श्रमिक सेवा
                        </a>
                    </div>
                
                    <ul class="side-menu">
                        <li @if(request()->segment(1) == 'dashboard') class="active" @endif>
                            <a href="{{url('/dashboard')}}">
                                <i>
                                    <img src="{{url('/')}}/assets/image/dashboard-icon.svg" class="menu-show" alt="">
                                </i>
                                <span>डैशबोर्ड</span>
                            </a>
                        </li>
                        <li @if(request()->segment(1) == 'labour') class="active" @endif>
                            <a href="{{ url('/labour') }}">
                                <i>
                                    <img src="{{url('/')}}/assets/image/student-icon.svg" class="menu-show" alt="">
                                </i>
                                <span>मजदूर</span>
                            </a>
                        </li>
                        <li @if(request()->segment(1) == 'farmer') class="active" @endif>
                            <a href="{{ url('/farmer') }}">
                                <i>
                                    <img src="{{url('/')}}/assets/image/dashboard-icon.svg" class="menu-show" alt="">
                                </i>
                                <span>किसान</span>
                            </a>
                        </li>
                        
                        <li @if(request()->segment(1) == 'bussiness') class="active" @endif>
                            <a href="{{ url('/bussiness') }}">
                                <i>
                                    <img src="{{url('/')}}/assets/image/dashboard-icon.svg" class="menu-show" alt="">
                                </i>
                                <span>व्यापारी</span>
                            </a>
                        </li>
                    <li @if(request()->segment(1) == 'profile') class="active" @endif>
                        <a href="{{url('/profile')}}">
                            <i>
                                <img src="{{url('/')}}/assets/image/setting-icon.svg" class="menu-show" alt="">
                            </i>
                            <span>सेटिंग </span>
                        </a>
                    </li>
                    </ul>
                    <ul class="log-our-sec">
                        <li>
                            <a href="{{ url('/logout') }}">
                                <span>लॉग आउट</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </aside>
        @yield('content')
    </main>
    <!-- dashboard ends here -->

    <!-- data table js -->
    
    <script src="{{url('/')}}/assets/js/jquery-3.5.1.min.js"></script>
    <script src="{{url('/')}}/assets/js/bootstrap.min.js"></script>
    <script src="{{url('/')}}/assets/js/datatables.min.js"></script>
    <script src="{{url('/')}}/assets/js/dataTables.checkboxes.min.js"></script>
    <script src="{{url('/')}}/assets/js/dataTables.buttons.min.js"></script>
    <script src="{{url('/')}}/assets/js/buttons.html5.min.js"></script>
  
    <script src="{{url('/')}}/assets/js/validate.js"></script>
    <script src="{{url('/')}}/assets/js/bootstrap-datepicker.js"></script>
    <script src="{{url('/')}}/assets/js/sweetalert.min.js"></script>
    <!-- custom js -->
    <script src="{{url('/')}}/assets/js/custom.js"></script>
    <script>
    $('body').on('click','.labour-delete',function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            var id = $(this).data("id");
            event.preventDefault();
            swal({
                    title: `Are you sure you want to delete ${name}?`,

                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        $.ajax({
                            url: "{{route('labour.store')}}" + '/' + id,
                            type: "DELETE",
                            data: {
                                id: id,
                                "_token": "{{ csrf_token() }}",
                            },
                            success: function(data) {
                                location.reload();


                            }

                        });
                    }
                });
        });

        $('body').on('click','.farmer-delete',function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            var id = $(this).data("id");
            event.preventDefault();
            swal({
                    title: `Are you sure you want to delete ${name}?`,

                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        $.ajax({
                            url: "{{route('farmer.store')}}" + '/' + id,
                            type: "DELETE",
                            data: {
                                id: id,
                                "_token": "{{ csrf_token() }}",
                            },
                            success: function(data) {
                                location.reload();


                            }

                        });
                    }
                });
        });
        function sendSms(id){
                 $.ajax({
                            url: "http://nextige.com/sramik-sewa/sendsms",
                            type: "GET",
                            data: {
                                id: id,
                                "_token": "{{ csrf_token() }}",
                            },
                            success: function(data) {
                          
  

                            }

                        });
        }
   </script>
</body>

</html>