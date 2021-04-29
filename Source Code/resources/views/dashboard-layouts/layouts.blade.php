<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from yellowred.info/stagb/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Apr 2021 13:36:56 GMT -->

<head>
    <title>@yield('title')</title>
    <link rel="icon" href="{{asset('dashboard/assets/img/favicon.ico')}}" />
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name=viewport content="width=device-width, initial-scale=1" />
    <link href="{{asset('dashboard/assets/dist/semantic.min.css')}}" rel="stylesheet" />
    <link href="{{asset('dashboard/assets/plugins/ionicons/css/ionicons.min.css')}}" rel="stylesheet" />
    <link href="{{asset('dashboard/assets/css/main.css')}}" rel="stylesheet" />
    <link href="{{asset('dashboard/assets/plugins/datepicker/css/bootstrap-datepicker.min.css')}}" rel="stylesheet" />
    <link href="{{asset('dashboard/assets/plugins/weather-icons/css/weather-icons-wind.min.css')}}" rel="stylesheet" />
    <link href="{{asset('dashboard/assets/plugins/weather-icons/css/weather-icons.min.css')}}" rel="stylesheet" />
    <link href="{{asset('dashboard/assets/plugins/chartist/chartist.min.css')}}" rel="stylesheet" />
    <link href="{{asset('dashboard/assets/css/chat-page.css')}}" rel="stylesheet" />
    <link rel="shortcut icon" href="{{asset('dashboard/assets/img/favicon.ico')}}" />
    <link href="{{asset('dashboard/assets/plugins/pacejs/pace.css')}}" rel="stylesheet" />
    <link href="{{asset('dashboard/assets/plugins/pacejs/pace.css')}}" rel="stylesheet" />

</head>

<body>

<div id="contextWrap">
    <!--sidebar-->
    <div class="ui sidebar vertical left menu overlay  borderless visible sidemenu inverted  grey" style="-webkit-transition-duration: 0.1s; transition-duration: 0.1s;" data-color="grey">
        <a class="item logo" href="{{route('index')}}">
            <img src="{{asset('dashboard/assets/img/logo.png')}}" alt="stagblogo" /><img src="{{asset('dashboard/assets/img/thumblogo.png')}}" alt="stagblogo" class="displaynone" />
        </a>
        <div class="ui accordion inverted">

            <a class="title item">
                <i class="users icon titleIcon icon"></i> Manage Admins <i class="dropdown icon"></i>
            </a>
            <div class="content">
                <a class="item" href="{{route('admin.all')}}">
                    Admins
                </a>
                <a class="item" href="{{route('admin.create')}}">
                    Create New Admin
                </a>
            </div>

            <div class="title item">
                <i class="browser icon titleIcon icon"></i>

                <i class="dropdown icon"></i> Category
            </div>
            <div class="content">
                <a class="item" href="{{route('category.all')}}">
                    All Categories
                </a>

                <a class="item" href="{{route('category.create')}}">
                    Create New Category
                </a>
            </div>

            <div class="title item">
                <i class="ion-briefcase titleIcon icon"></i>

                <i class="dropdown icon"></i> Manage Jobs
            </div>
            <div class="content">
                <a class="item" href="{{route('job.all')}}">
                    All Jobs
                </a>
                <a class="item" href="{{route('job.create')}}">
                    Create New Job
                </a>
            </div>

            <div class="title item">
                <i class="file text icon titleIcon icon"></i>

                <i class="dropdown icon"></i> Manage Applied
            </div>
            <div class="content">
                <a class="item" href="{{route('applied.all')}}">
                    All Applieds
                </a>
            </div>
            <div class="title item">
                <i class="comment icon titleIcon icon"></i>

                <i class="dropdown icon"></i> Manage Messages
            </div>
            <div class="content">
                <a class="item" href="{{route('contact.all')}}">
                    All Messages
                </a>
            </div>

            <div class="title item">
                <i class="sign out icon titleIcon icon"></i>

                <i class="dropdown icon"></i> logout
            </div>
            <div class="content">
                <div class="item">
                <a class="text-danger font-weight-bold" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>
        </div>

        <div class="ui dropdown item displaynone scrolling">
            <span>Dashboard</span>
            <i class="users icon icon"></i>

            <div class="menu">
                <div class="header">
                    Manage Admins
                </div>
                <div class="ui divider"></div>
                <a class="item" href="{{route('admin.all')}}">
                    Admins
                </a>
                <a class="item" href="{{route('admin.create')}}">
                    Create New Admin
                </a>
            </div>
        </div>


        <div class="ui dropdown item displaynone scrolling">
            <span>Manage Category</span>
            <i class="browser icon icon"></i>

            <div class="menu">
                <div class="header">
                    Manage Category
                </div>
                <div class="ui divider"></div>
                <a class="item" href="{{route('category.all')}}">
                    All Categories
                </a>

                <a class="item" href="{{route('category.create')}}">
                    Create New Category
                </a>
            </div>
        </div>

        <div class="ui dropdown item displaynone scrolling">
            <span>Manage Jobs</span>
            <i class="ion-briefcase  icon"></i>

            <div class="menu">
                <div class="header">
                    Manage Jobs
                </div>
                <div class="ui divider"></div>
                <a class="item" href="{{route('job.all')}}">
                    All Jobs
                </a>
                <a class="item" href="{{route('job.create')}}">
                    Create New Job
                </a>
            </div>
        </div>

        <div class="ui dropdown item displaynone scrolling">
            <span>Manage Applied</span>
            <i class="file text icon  icon"></i>
            <div class="menu">
                <div class="header">
                    Manage Applied
                </div>
                <div class="ui divider"></div>
                <a class="item" href="{{route('applied.all')}}">
                    All Applieds
                </a>
            </div>
        </div>
        <div class="ui dropdown item displaynone scrolling">
            <span>Manage Messages</span>
            <i class="comment icon icon"></i>
            <div class="menu">
                <div class="header">
                    Manage Messages
                </div>
                <div class="ui divider"></div>
                <a class="item" href="{{route('contact.all')}}">
                    All Messages
                </a>
            </div>
        </div>

        <div class="ui dropdown item displaynone scrolling">
            <span>Logout</span>
            <i class="sign out icon icon"></i>
            <div class="menu">
                <div class="header">
                    Logout
                </div>
                <div class="ui divider"></div>
                <div class="item"> Logout
                    <a class="text-danger font-weight-bold" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>

        <a class="item hiddenCollapse">
            <div class="ui one tiny inverted statistics">
            </div>
    </div>
    </a>
    <!--sidebar-->
    <div class="ui right sidebar">
        <div class="ui pointing secondary two item tabular menu">
            <a class="item active" data-tab="first"><i class="red icon ion-chatbox-working icon"></i></a>

            <a class="item" data-tab="fourth"><i class="blue icon ion-gear-a"></i></a>
        </div>
        <div class="ui tab active" data-tab="first">
            <div class="ui small feed">
                <h4 class="ui header">Followers Activity</h4>
                <div class="event">
                    <div class="label">
                        <img src="{{asset('dashboard/assets/img/avatar/people/Abraham.png')}}" alt="label-image" />
                    </div>
                    <div class="content">
                        <div class="date">
                            3 days ago
                        </div>
                        <div class="summary">
                            You added <a>Jenny Hess</a> to your <a>coworker</a> group.
                        </div>
                    </div>
                </div>
                <div class="event">
                    <div class="label">
                        <img src="{{asset('dashboard/assets/img/avatar/people/carol.png')}}" alt="label-image" />
                    </div>
                    <div class="content">
                        <div class="summary">
                            You added <a>Jenny Hess</a> to your <a>coworker</a> group.
                            <div class="date">
                                3 days ago
                            </div>
                        </div>
                    </div>
                </div>
                <div class="event">
                    <div class="label">
                        <img src="img/avatar/people/Daryl.png" alt="label-image" />
                    </div>
                    <div class="content">
                        <div class="date">
                            3 days ago
                        </div>
                        <div class="summary">
                            You added <a>Jenny Hess</a> to your <a>coworker</a> group.
                        </div>
                    </div>
                </div>
                <div class="event">
                    <div class="label">
                        <img src="img/avatar/people/deana.png" alt="label-image" />
                    </div>
                    <div class="content">
                        <div class="summary">
                            You added <a>Jenny Hess</a> to your <a>coworker</a> group.
                            <div class="date">
                                3 days ago
                            </div>
                        </div>
                    </div>
                </div>
                <div class="event">
                    <div class="label">
                        <img src="img/avatar/people/enid.png" alt="label-image" />
                    </div>
                    <div class="content">
                        <div class="date">
                            3 days ago
                        </div>
                        <div class="summary">
                            You added <a>Jenny Hess</a> to your <a>coworker</a> group.
                        </div>
                    </div>
                </div>
                <div class="event">
                    <div class="label">
                        <img src="img/avatar/people/Glenn.png" alt="label-image" />
                    </div>
                    <div class="content">
                        <div class="summary">
                            You added <a>Jenny Hess</a> to your <a>coworker</a> group.
                            <div class="date">
                                3 days ago
                            </div>
                        </div>
                    </div>
                </div>
                <div class="event">
                    <div class="label">
                        <img src="img/avatar/people/Hershell.png" alt="label-image">
                    </div>
                    <div class="content">
                        <div class="date">
                            3 days ago
                        </div>
                        <div class="summary">
                            You added <a>Jenny Hess</a> to your <a>coworker</a> group.
                        </div>
                    </div>
                </div>
                <div class="event">
                    <div class="label">
                        <img src="img/avatar/people/Hershell.png" alt="label-image" />
                    </div>
                    <div class="content">
                        <div class="summary">
                            You added <a>Jenny Hess</a> to your <a>coworker</a> group.
                            <div class="date">
                                3 days ago
                            </div>
                        </div>
                    </div>
                </div>
                <div class="event">
                    <div class="label">
                        <img src="img/avatar/people/Meggie.png" alt="label-image" />
                    </div>
                    <div class="content">
                        <div class="date">
                            3 days ago
                        </div>
                        <div class="summary">
                            You added <a>Jenny Hess</a> to your <a>coworker</a> group.
                        </div>
                    </div>
                </div>
                <div class="event">
                    <div class="label">
                        <img src="img/avatar/people/Michonne.png" alt="label-image" />
                    </div>
                    <div class="content">
                        <div class="summary">
                            You added <a>Jenny Hess</a> to your <a>coworker</a> group.
                            <div class="date">
                                3 days ago
                            </div>
                        </div>
                    </div>
                </div>
                <div class="event">
                    <div class="label">
                        <img src="img/avatar/people/Rick.png" alt="label-image" />
                    </div>
                    <div class="content">
                        <div class="date">
                            3 days ago
                        </div>
                        <div class="summary">
                            You added <a>Jenny Hess</a> to your <a>coworker</a> group.
                        </div>
                    </div>
                </div>
                <div class="event">
                    <div class="label">
                        <img src="img/avatar/people/Tara.png" alt="label-image" />
                    </div>
                    <div class="content">
                        <div class="summary">
                            You added <a>Jenny Hess</a> to your <a>coworker</a> group.
                            <div class="date">
                                3 days ago
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="ui tab" data-tab="fourth">
            <div class="ui form fluid">
                <div class="grouped fields">
                    <label>Connection Limited</label>
                    <div class="field">
                        <div class="ui slider checkbox">
                            <input type="radio" name="throughput" checked="checked">
                            <label>20 mbps max</label>
                        </div>
                    </div>
                    <div class="field">
                        <div class="ui slider checkbox">
                            <input type="radio" name="throughput">
                            <label>10mbps max</label>
                        </div>
                    </div>
                    <div class="field">
                        <div class="ui slider checkbox">
                            <input type="radio" name="throughput">
                            <label>5mbps max</label>
                        </div>
                    </div>
                    <div class="field">
                        <div class="ui slider checkbox checked">
                            <input type="radio" name="throughput">
                            <label>Unmetered</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ui divider"></div>
            <div class="ui form fluid">
                <div class="grouped fields">
                    <label>Notifications</label>
                    <div class="field">
                        <div class="ui toggle checkbox">
                            <input type="checkbox" checked name="public">
                            <label class="coloring red">Enabled</label>
                        </div>
                    </div>
                    <div class="field">
                        <div class="ui toggle checkbox">
                            <input type="checkbox" name="public">
                            <label class="coloring green">Updates</label>
                        </div>
                    </div>
                    <div class="field">
                        <div class="ui toggle checkbox">
                            <input type="checkbox" name="public">
                            <label>Comments</label>
                        </div>
                    </div>
                    <div class="field">
                        <div class="ui toggle checkbox">
                            <input type="checkbox" name="public">
                            <label>Chat</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ui divider"></div>

            <h4 class="ui header">Navbar Color</h4>
            <div class="ui basic segment">

                <ul class="colorlist">
                    <li>
                        <a class="ui segment yellow inverted" data-addClass="inverted yellow">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment red inverted" data-addClass="inverted red">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment blue inverted" data-addClass="inverted blue">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment black inverted" data-addClass="inverted black">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment orange inverted" data-addClass="inverted orange">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment pink inverted" data-addClass="inverted pink">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment green inverted" data-addClass="inverted green">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment purple inverted" data-addClass="inverted purple">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment violet inverted" data-addClass="inverted violet">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment brown inverted" data-addClass="inverted brown">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment teal inverted" data-addClass="inverted teal">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment greenli inverted" data-addClass="inverted greenli">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment grey inverted" data-addClass="inverted grey">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment redli inverted" data-addClass="inverted redli">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment yellowli inverted" data-addClass="inverted yellowli">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment blueli inverted" data-addClass="inverted blueli">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment darkpurpleli inverted" data-addClass="inverted darkpurpleli">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment darkorangeli inverted" data-addClass="inverted darkorangeli">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment greenli2 inverted" data-addClass="inverted greenli2">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment pinkli inverted" data-addClass="inverted pinkli">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment lightyellowli inverted" data-addClass="inverted lightyellowli">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment darkli inverted" data-addClass="inverted darkli">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment lightbrownli inverted" data-addClass="inverted lightbrownli">
                        </a>
                    </li>
                </ul>
            </div>
            <h4 class="ui header">Sidebar Color</h4>
            <div class="ui basic segment">

                <ul class="sidecolor">
                    <li>
                        <a class="ui segment yellow inverted" data-addClass="inverted yellow">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment red inverted" data-addClass="inverted red">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment blue inverted" data-addClass="inverted blue">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment black inverted" data-addClass="inverted black">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment orange inverted" data-addClass="inverted orange">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment pink inverted" data-addClass="inverted pink">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment green inverted" data-addClass="inverted green">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment purple inverted" data-addClass="inverted purple">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment violet inverted" data-addClass="inverted violet">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment brown inverted" data-addClass="inverted brown">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment teal inverted" data-addClass="inverted teal">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment greenli inverted" data-addClass="inverted greenli">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment grey inverted" data-addClass="inverted grey">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment redli inverted" data-addClass="inverted redli">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment yellowli inverted" data-addClass="inverted yellowli">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment blueli inverted" data-addClass="inverted blueli">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment darkpurpleli inverted" data-addClass="inverted darkpurpleli">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment darkorangeli inverted" data-addClass="inverted darkorangeli">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment greenli2 inverted" data-addClass="inverted greenli2">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment pinkli inverted" data-addClass="inverted pinkli">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment lightyellowli inverted" data-addClass="inverted lightyellowli">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment darkli inverted" data-addClass="inverted darkli">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment lightbrownli inverted" data-addClass="inverted lightbrownli">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="pusher">
        <!--navbar-->
        <div class="navslide navwrap">
            <div class="ui menu icon borderless grid" data-color="inverted white">
                <a class="item labeled openbtn">
                    <i class="ion-navicon-round big icon"></i>
                </a>
                <a class="item labeled expandit" onclick="toggleFullScreen(document.body)">
                    <i class="ion-arrow-expand big icon"></i>
                </a>
                <div class="item ui colhidden">
                    <div class="ui icon input">
                        <input type="text" placeholder="Search...">
                        <i class="search icon"></i>
                    </div>
                </div>
            </div>
        </div>
        <!--navbar-->
        <!--maincontent-->
        <div class="mainWrap navslide">
            <div class="ui equal width left aligned padded grid stackable">
@yield('content')
            </div>
        </div>
        <!--maincontent-->
    </div>
</div>

<script src="{{asset('dashboard/assets/js/jquery-2.1.4.min.js')}}"></script>
<!--jquery-->
<!--semantic-->
<script src="{{asset('dashboard/assets/dist/semantic.min.js')}}"></script>
<!--semantic-->
<!--counter number-->
<script src="{{asset('dashboard/assets/plugins/counterup/jquery.counterup.min.js')}}"></script>
<script src="{{asset('dashboard/assets/plugins/counterup/waypoints.min.js')}}"></script>
<!--counter number-->
<!--flot chart-->
<script src="{{asset('dashboard/assets/plugins/flot/jquery.flot.js')}}"></script>
<script src="{{asset('dashboard/assets/plugins/flot/jquery.flot.resize.min.js')}}"></script>
<script src="{{asset('dashboard/assets/plugins/flot/jquery.flot.tooltip.min.js')}}"></script>
<script src="{{asset('dashboard/assets/plugins/flot/curvedLines.js')}}"></script>
<script src="{{asset('dashboard/assets/plugins/cookie/js.cookie.js')}}"></script>
<!--flot chart-->
<!--chartjs chart-->
<script src="{{asset('dashboard/assets/plugins/chartjs/chart.min.js')}}"></script>
<!--chartjs chart-->

<script src="{{asset('dashboard/assets/plugins/nicescrool/jquery.nicescroll.min.js')}}"></script>

<script data-pace-options='{ "ajax": false }' src="{{asset('dashboard/assets/plugins/pacejs/pace.js')}}">
</script>

<script src="{{asset('dashboard/assets/plugins/chartist/chartist.min.js')}}"></script>

<script src="{{asset('dashboard/assets/js/dashboard2.js')}}"></script>
<script src="{{asset('dashboard/assets/js/main.js')}}"></script>
@yield('js')
</body>
</html>
