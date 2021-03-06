
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900' rel='stylesheet' type='text/css'>

    <!-- Page title -->
    <title>Mauaque Resettlement Highschool</title>

    <!-- Vendor styles -->
    <link rel="stylesheet" href="{{asset('vendor/fontawesome/css/font-awesome.css')}}"/>
    <link rel="stylesheet" href="{{asset('vendor/animate.css/animate.css')}}"/>
    <link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.css')}}"/>
    <link rel="icon" href="{{ asset('images/favicon-96x96.png') }}">

    <!-- App styles -->
    <link rel="stylesheet" href="{{asset('styles/pe-icons/pe-icon-7-stroke.css')}}"/>
    <link rel="stylesheet" href="{{asset('styles/pe-icons/helper.css')}}"/>
    <link rel="stylesheet" href="{{asset('styles/stroke-icons/style.css')}}"/>
    <link rel="stylesheet" href="{{asset('styles/style.css')}}">
</head>
<body>

<!-- Wrapper-->
<div class="wrapper">

    <!-- Header-->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <div id="mobile-menu">
                    <div class="left-nav-toggle">
                        <a href="#">
                            <i class="stroke-hamburgermenu"></i>
                        </a>
                    </div>
                </div>
                <a class="navbar-brand" href="index.html">
                    MRHS
                        <span>v.1.0</span>
                </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <div class="left-nav-toggle">
                    <a href="">
                        <i class="stroke-hamburgermenu"></i>
                    </a>
                </div>
                <form class="navbar-form navbar-left">
                    <input type="text" class="form-control" placeholder="Search data for analysis" style="width: 175px">
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li class=" profil-link">
                        <a href="login.html" data-toggle="dropdown">
                            <span class="profile-address">{{$admins['email']}}</span>
                            <img src="{{asset($admins['profile'])}}" width="35" class="img-circle" alt="">
                        </a>
                        <ul class="dropdown-menu">
                                    <li><a href="/admin/account/profile">Profile</a></li>
                                    <li><a href="#">Messages</a></li>
                                    <li><a href="/admin/notification">Notifications</a></li>
                                    <li class="divider"></li>
                                    <li class="li-logout"><a class="logout" href="/admin/logout">Sign Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End header-->

    <!-- Navigation-->
    <aside class="navigation">
        <nav>
            <ul class="nav luna-nav">
                <li class="nav-category">
                    General
                </li>
                <li>
                    <a href="/admin"><span class="pe pe-7s-home icons"></span>Dashboard</a>
                </li>
                <li>
                    <a href="/admin/message"><span class="pe pe-7s-chat icons"></span>Message</a>
                </li>
                <li class="active">
                    <a href="#notification" data-toggle="collapse" aria-expanded="false">
                        <span class="pe pe-7s-bell icons"></span>
                        Notification<span class="sub-nav-icon"> <i class="stroke-arrow"></i> </span>
                        <span class="badge pull-right">{{$totalnotif}}</span>
                    </a>
                    <ul id="notification" class="nav nav-second collapse in">
                        <li  class="active"><a href="/admin/notification">Notification <span class="badge pull-right">{{$totalnotif}}</span></a></li>
                        <li><a href="/admin/notification-settings">Setting</a></li>
                    </ul>
                </li>
                <li class="nav-category">
                   Academics
                </li>
                <li>
                    <a href="#users" data-toggle="collapse" aria-expanded="false">
                        <span class="pe pe-7s-users icons"></span>
                        Users<span class="sub-nav-icon"> <i class="stroke-arrow"></i> </span>
                    </a>
                    <ul id="users" class="nav nav-second collapse">
                        <li><a href="/admin/users">Users</a></li>
                        <li><a href="/admin/users/admin">Admin</a></li>
                        <li><a href="/admin/users/students">Student</a></li>
                        <li><a href="/admin/users/teachers">Teacher</a></li>
                        <li><a href="/admin/users/parents">Parent</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#taskmanager" data-toggle="collapse" aria-expanded="false">
                        <span class="pe pe-7s-graph1 icons"></span>
                        Task Manager<span class="sub-nav-icon"> <i class="stroke-arrow"></i> </span>
                    </a>
                    <ul id="taskmanager" class="nav nav-second collapse">
                        <li><a href="/admin/taskmanager/account">Account</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#subject" data-toggle="collapse" aria-haspopup="true" aria-expanded="true">
                        <span class="pe pe-7s-notebook icons"></span>
                        Subject<span class="sub-nav-icon"> <i class="stroke-arrow"></i> </span>
                    </a>
                    <ul id="subject" class="nav nav-second collapse">
                        <li><a href="/admin/subject/section">Section</a></li>
                        <li><a href="/admin/subject/class">Class</a></li>
                        <li><a href="/admin/subject/schedule">Schedule</a></li>
                        <li><a href="/admin/subject">Subject</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#grades" data-toggle="collapse" aria-expanded="false">
                        <span class="pe pe-7s-bookmarks icons"></span>
                        Grades<span class="sub-nav-icon"> <i class="stroke-arrow"></i> </span>
                    </a>
                    <ul id="grades" class="nav nav-second collapse">
                        <li><a href="/admin/grades">Grades</a></li>
                        <li><a href="/admin/grades/grading-system">Grading System</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#events" data-toggle="collapse" aria-expanded="false">
                        <span class="pe pe-7s-star icons"></span>
                        Events <span class="sub-nav-icon"> <i class="stroke-arrow"></i> </span>
                    </a>
                    <ul id="events" class="nav nav-second collapse">
                        <li><a href="/admin/events/events&program">Event/Program</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#account" data-toggle="collapse" aria-expanded="false">
                        <span class="pe pe-7s-config icons"></span>
                        Account<span class="sub-nav-icon"> <i class="stroke-arrow"></i> </span>
                    </a>
                    <ul id="account" class="nav nav-second collapse">
                        <li><a href="/admin/account/profile">Profile</a></li>
                        <li><a href="/admin/account/account-settings">Account Settings</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#pages" data-toggle="collapse" aria-expanded="false">
                        <span class="pe pe-7s-copy-file icons"></span>
                        Pages <span class="sub-nav-icon"> <i class="stroke-arrow"></i> </span>
                    </a>
                    <ul id="pages" class="nav nav-second collapse">
                        <li><a href="#">Profile</a></li>
                        <li><a href="#">Support</a></li>
                        <li><a href="#">List</a></li>
                        <li><a href="#">Timeline</a></li>

                    </ul>
                </li>
                <li>
                    <a href="#agenda" data-toggle="collapse" aria-expanded="false">
                        <span class="fa fa-calendar-check-o icons"></span>
                        Agenda <span class="sub-nav-icon"> <i class="stroke-arrow"></i> </span>
                    </a>
                    <ul id="agenda" class="nav nav-second collapse">
                        <li><a href="/admin/agenda/events">Events</a></li>
                        <li><a href="/admin/agenda/program">Program</a></li>
                        <li><a href="/admin/agenda/news">News</a></li>
                        <li><a href="/admin/agenda/announcement">Announcement</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#database" data-toggle="collapse" aria-expanded="false">
                        <span class="pe pe-7s-server icons"></span>
                        Database <span class="sub-nav-icon"> <i class="stroke-arrow"></i> </span>
                    </a>
                    <ul id="database" class="nav nav-second collapse">
                        <li><a href="/admin/database/export">Export</a></li>
                    </ul>
                </li>  
                <li class="nav-info">
                    <i class="pe pe-7s-science text-accent"></i>
                    <div class="m-t-xs">
                        <span class="c-white">Wekonek</span> "WE" as a family connecting to become one and to make your life easier with <strong>wekonek</strong>.
                    </div>
                </li>
            </ul>
        </nav>
    </aside>
    <!-- End navigation-->


    <!-- Main content-->
    <section class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">
                    

                            <div class="row">
                                <div class="col-md-3 col-xs-6 text-center">
                                    
                                </div>
                                <div class="col-md-3 col-xs-6 text-center">
                                    <div class="panel panel-filled">

                        <div class="panel-body">
                                    <h2 class="no-margins">
                                        {{$totalnotif}}
                                    </h2>
                                    <span class="c-white">Total</span> Notifications
                                </div>
                            </div>
                                </div>
                                <div class="col-md-3 col-xs-6 text-center">
                                    <div class="panel panel-filled">

                        <div class="panel-body">
                                    <h2 class="no-margins">
                                        {{$totalnotif}}
                                    </h2>
                                    <span class="c-white">Unread</span> Notifications
                                </div>
                            </div>
                                </div>
                                
                            </div>
                </div>
            </div>
            <div class="row">

@if($setNotif !== null)
                        <div class="col-md-2"></div>
                <div class="col-md-7">

                    <div class="panel">
                        <div class="panel-body">
                            <h4>Notification History</h4>

                            <div class="v-timeline vertical-container">
                                @foreach($mynotif as $notification)
                                <div class="vertical-timeline-block">
                                    <div class="vertical-timeline-icon">
                                        <i class="fa {{$notification['icon']}}"></i>
                                    </div>
                                    @if($notification['key'] == 'deactivation')
                                    <div class="vertical-timeline-content">
                                        <div class="p-sm">
                                            <span class="vertical-date pull-right"> <small>{{$notification['time']}}</small> </span>

                                            <h2>{{$notification['title']}}</h2>

                                            <p><img src="{{asset($admins['profile'])}}" width="25" class="img-circle icons"> <strong style="color:#fff;">{{$admins['firstname']}}</strong> {{$notification['message']}} {{$notification['role']}} <strong style="color:#fff;">{{$notification['firstname']}} {{$notification['lastname']}}</strong> for a certain reason.</p>
                                        </div>
                                    </div>
                                    @elseif($notification['key'] == 'update')
                                    <div class="vertical-timeline-content">
                                        <div class="p-sm">
                                            <span class="vertical-date pull-right"> <small>{{$notification['time']}}</small> </span>

                                            <h2>{{$notification['title']}}</h2>

                                            <p><img src="{{asset($admins['profile'])}}" width="25" class="img-circle icons"> <strong style="color:#fff;">{{$admins['firstname']}}</strong> {{$notification['message']}} {{$notification['role']}} <strong style="color:#fff;">{{$notification['firstname']}} {{$notification['lastname']}}</strong></p>
                                        </div>
                                    </div>
                                    @elseif($notification['key'] == 'subject')
                                    <div class="vertical-timeline-content">
                                        <div class="p-sm">
                                            <span class="vertical-date pull-right"> <small>{{$notification['time']}}</small> </span>

                                            <h2>{{$notification['title']}}</h2>

                                            <p><img src="{{asset($admins['profile'])}}" width="25" class="img-circle icons"> <strong style="color:#fff;">{{$admins['firstname']}}</strong> Successfully {{$notification['message']}} {{$notification['role']}} <strong style="color:#fff;">{{$notification['firstname']}}</strong></p>
                                        </div>
                                    </div>
                                    @elseif($notification['key'] == 'demoted')
                                    <div class="vertical-timeline-content">
                                        <div class="p-sm">
                                            <span class="vertical-date pull-right"> <small>{{$notification['time']}}</small> </span>

                                            <h2>{{$notification['title']}}</h2>

                                            <p><img src="{{asset($admins['profile'])}}" width="25" class="img-circle icons"> <strong style="color:#fff;">{{$admins['firstname']}}</strong> {{$notification['message']}} {{$notification['role']}} <strong style="color:#fff;">{{$notification['firstname']}} {{$notification['lastname']}}. </strong>"Back to being <strong style="color:#fff;">Teacher</strong>."</p>
                                        </div>
                                    </div>
                                    @elseif($notification['key'] == 'promoted')
                                    <div class="vertical-timeline-content">
                                        <div class="p-sm">
                                            <span class="vertical-date pull-right"> <small>{{$notification['time']}}</small> </span>

                                            <h2>{{$notification['title']}}</h2>

                                            <p><img src="{{asset($admins['profile'])}}" width="25" class="img-circle icons"> <strong style="color:#fff;">{{$admins['firstname']}}</strong> {{$notification['message']}} {{$notification['role']}} <strong style="color:#fff;">{{$notification['firstname']}} {{$notification['lastname']}}</strong>. "Promoted to <strong style="color:#fff;">Admin</strong>."</p>
                                        </div>
                                    </div>
                                    @elseif($notification['key'] == 'create')
                                    <div class="vertical-timeline-content">
                                        <div class="p-sm">
                                            <span class="vertical-date pull-right"> <small>{{$notification['time']}}</small> </span>

                                            <h2>{{$notification['title']}}</h2>

                                            <p><img src="{{asset($admins['profile'])}}" width="25" class="img-circle icons"> <strong style="color:#fff;">{{$admins['firstname']}}</strong> {{$notification['message']}} <strong style="color:#fff;">{{$notification['firstname']}} {{$notification['lastname']}}</strong> with ID {{$notification['id_number']}}</p>
                                        </div>
                                    </div>
                                    @elseif($notification['key'] == 'activation')
                                    <div class="vertical-timeline-content">
                                        <div class="p-sm">
                                            <span class="vertical-date pull-right"> <small>{{$notification['time']}}</small> </span>

                                            <h2>{{$notification['title']}}</h2>

                                            <p><img src="{{asset($admins['profile'])}}" width="25" class="img-circle icons"> <strong style="color:#fff;">{{$admins['firstname']}}</strong> {{$notification['message']}} {{$notification['role']}} <strong style="color:#fff;">{{$notification['firstname']}} {{$notification['lastname']}}</strong> from being Deactivated.</p>
                                        </div>

                                    </div>
                                    @endif

                                </div>
                                
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                @endif

            </div>
        </div>
    </section>
    <!-- End main content-->

</div>
<!-- End wrapper-->

<!-- Vendor scripts -->
<script src="{{asset('vendor/pacejs/pace.min.js')}}"></script>
<script src="{{asset('vendor/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('vendor/flot/jquery.flot.min.js')}}"></script>
<script src="{{asset('vendor/flot/jquery.flot.resize.min.js')}}"></script>
<script src="{{asset('vendor/flot/jquery.flot.spline.js')}}"></script>

<!-- App scripts -->
<script src="{{asset('scripts/luna.js')}}"></script>
</body>

</html>