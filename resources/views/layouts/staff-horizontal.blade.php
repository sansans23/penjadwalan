<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Staff</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="{{asset('css/horizontal-admin.css')}}" rel="stylesheet" />
    <!-- DATATABLE STYLE  -->
    <link href="{{asset('js/dataTables/dataTables.bootstrap.css')}}" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Sansita" rel="stylesheet">
    {{-- full calendar --}}
    <link rel='stylesheet' href='{{asset('fullcalendar/fullcalendar.css')}}' />
    {{-- datepicker css --}}
    <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.min.css')}}">
    <!-- Bootstrap datepicker -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">

    <style type="text/css">
        html, body{
            width:100%;
            height:100%;
            background-color:#fff;
            font-family: 'Sansita', sans-serif;
        }
    </style>
    @yield('css')

</head>
<body>
    <div class="navbar navbar-inverse set-radius-zero" >
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">

                    <img src="{{asset('img/logo/SetyaAji.png')}}" />
                </a>

            </div>

            <div class="right-div">
                <a href="#" class="btn btn-info pull-right" onclick="event.preventDefault();document.getElementById('logout-form').submit();">LOG ME OUT</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>
    <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a href="{{url('admin/schedule')}}" @yield('schedule-active') ><i class="fa fa-calendar-o"></i> Schedule</a></li>
                            <li><a href="{{url('admin/staff')}}" @yield('staff-active') ><i class="fa fa-group"></i> Staff</a></li>
                            
                        </ul>
                            <!-- /.dropdown -->
                    </div>
                </div>

            </div>
        </div>
    </section>
     <!-- MENU SECTION END-->
    <div class="content-wrapper">
    @yield('content')
    </div>

    {{-- every modal placed here --}}
    
    {{-- end modal --}}

     <!-- CONTENT-WRAPPER SECTION END-->
    <section class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                   &copy; PTIK 2014 |<a href="http://ardata.co.id" target="_blank"  > UNNES</a>
                </div>

            </div>
        </div>
    </section>
      <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="{{asset('js/jquery-1.10.2.js')}}"></script>
    {{-- angular --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.2.20/angular.min.js"></script>
    {{-- jquery currency --}}
    <script src="{{asset('js/jquery.formatCurrency-1.4.0.min.js')}}" charset="utf-8"></script>
    <script src="{{asset('js/jquery.formatCurrency.id-ID.js')}}" charset="utf-8"></script>
    {{-- bootstrap and angular tags input --}}
    <script src="{{asset('js/bootstrap-tagsinput.js')}}"></script>
    <script src="{{asset('js/bootstrap-tagsinput-angular.js')}}"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- DATATABLE SCRIPTS  -->
    <script src="{{asset('js/dataTables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('js/dataTables/dataTables.bootstrap.js')}}"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="{{asset('js/horizontal-admin.js')}}"></script>
    <script src="{{asset('fullcalendar/lib/moment.min.js')}}"></script>
    <script src="{{asset('fullcalendar/fullcalendar.min.js')}}"></script>
    <script src="{{asset('fullcalendar/locale/id.js')}}"></script>
    <script src="{{asset('js/bootstrap-datepicker.js')}}" charset="utf-8"></script>
    <script src="{{asset('locales/bootstrap-datepicker.id.min.js')}}" charset="utf-8"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <script src="{{asset('js/printThis.js')}}" charset="utf-8"></script>
    <script type="text/javascript">
        
    </script>
    @yield('script')
</body>
</html>
