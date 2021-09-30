@extends('layouts.app')

@section('content')

    <header class="main-header">
        <div class="d-flex align-items-center logo-box justify-content-center">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="logo">
                <!-- logo-->
                <div class="logo-mini">
                    <!-- <span class="light-logo"><img src="../images/logo-light.png" alt="logo"></span> -->
                    <span class="dark-logo">SA</span>
                </div>
                <!-- logo-->
                <div class="logo-lg">
                    <span class="dark-logo">Star auto</span>
                    <!-- <span class="dark-logo"><img src="../images/logo-light-text.png" alt="logo"></span> -->
                </div>
            </a>
        </div>
        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top pl-10">
            <!-- Sidebar toggle button-->
            <div class="app-menu">
                <ul class="header-megamenu nav">
                    <li class="btn-group nav-item">
                        <a href="#" class="waves-effect waves-light nav-link rounded push-btn" data-toggle="push-menu"
                            role="button">
                            <span class="icon-Align-left"><span class="path1"></span><span
                                    class="path2"></span><span class="path3"></span></span>
                        </a>
                    </li>
                    <li class="btn-group nav-item d-none d-xl-inline-block">
                        <a href="#" class="waves-effect waves-light nav-link rounded svg-bt-icon" title="Chat">
                            <i class="icon-Chat"><span class="path1"></span><span
                                    class="path2"></span></i>
                        </a>
                    </li>
                    <li class="btn-group nav-item d-none d-xl-inline-block">
                        <a href="#" class="waves-effect waves-light nav-link rounded svg-bt-icon" title="Mailbox">
                            <i class="icon-Mailbox"><span class="path1"></span><span
                                    class="path2"></span></i>
                        </a>
                    </li>
                    <li class="btn-group nav-item d-none d-xl-inline-block">
                        <a href="#" class="waves-effect waves-light nav-link rounded svg-bt-icon" title="Taskboard">
                            <i class="icon-Clipboard-check"><span class="path1"></span><span
                                    class="path2"></span><span class="path3"></span></i>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="navbar-custom-menu r-side">
                <ul class="nav navbar-nav">
                    <li class="btn-group nav-item d-lg-inline-flex d-none">
                        <a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link rounded full-screen"
                            title="Full Screen">
                            <i class="icon-Expand-arrows"><span class="path1"></span><span
                                    class="path2"></span></i>
                        </a>
                    </li>

                    <!-- User Account-->
                    <li class="dropdown user user-menu">
                        <a href="#" class="waves-effect waves-light dropdown-toggle" data-toggle="dropdown" title="User">
                            <i class="icon-User"><span class="path1"></span><span
                                    class="path2"></span></i>
                        </a>
                        <ul class="dropdown-menu animated flipInX">
                            <li class="user-body">
                                <a class="dropdown-item" href="#"><i class="ti-user text-muted mr-2"></i> Profile</a>
                                <a class="dropdown-item" href="#"><i class="ti-settings text-muted mr-2"></i> Settings</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="ti-lock text-muted mr-2"></i> Logout</a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
        </nav>
    </header>

    <aside class="main-sidebar">
        <!-- sidebar-->
        <section class="sidebar">

            <!-- sidebar menu-->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">Menu </li>

                <li>
                    <a href="{{ route('dashboard') }}">
                        <i class="icon-Layout-4-blocks"><span class="path1"></span><span
                                class="path2"></span></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('sessions.index') }}">
                        <i class="icon-Brush"><span class="path1"></span><span
                                class="path2"></span></i>
                        <span>Sessions</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('sessions.index') }}">
                        <i class="icon-Write"><span class="path1"></span><span
                                class="path2"></span></i>
                        <span>Inspections</span>
                    </a>
                </li>

        </section>
        <div class="sidebar-footer">
            <!-- item-->
            <a href="javascript:void(0)" class="link" data-toggle="tooltip" title=""
                data-original-title="Settings" aria-describedby="tooltip92529"><span class="icon-Settings-2"></span></a>
            <!-- item-->
            <a href="{{ route('logout') }}" class="link" data-toggle="tooltip" title=""
                data-original-title="Logout"><span class="icon-Lock-overturning"><span class="path1"></span><span
                        class="path2"></span></span></a>
        </div>
    </aside>

    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="mr-auto">
                        <h3 class="page-title">Sessions</h3>
                        <div class="d-inline-block align-items-center">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                    <li class="breadcrumb-item" aria-current="page">sessions</li>
                                    <li class="breadcrumb-item active" aria-current="page">{{ $vehicle->regNo }}</li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class=" col-lg-5 col-xl-4">
                        <div class="box box-widget widget-user">
                            <!-- Add the bg color to the header using any of the bg-* classes -->
                            <div class="widget-user-header bg-black"
                                style="/* background: url('../images/gallery/full/10.jpg') center center; */">
                                <h3 class="widget-user-username">{{ $vehicle->regNo }}</h3>
                                <h6 class="widget-user-desc">{{ $vehicle->make }} {{ $vehicle->model }}</h6>
                            </div>

                        </div>
                        <div class="box">
                            <div class="box-body box-profile">
                                <div class="row">
                                    <div class="col-12">
                                        <div>
                                            <p>Time in :<span class="text-gray pl-10">{{ $session->timeIn }}</span> </p>
                                            <p>Time promised :<span
                                                    class="text-gray pl-10">{{ $session->timeOut }}</span> </p>
                                            <p>Milleage :<span class="text-gray pl-10">{{ $session->kilometers }}</span>
                                            </p>
                                            <p>Fuel :&nbsp;<span
                                                    class="badge badge-primary">{{ $session->fuel }}%</span></p>
                                            <p>Battery :<span class="text-gray pl-10">{{ $session->battery }}</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>


                    </div>

                    <div class="col-12 col-lg-7 col-xl-8">
                        <div class="box box-solid box-warning">
                            <div class="box-header with-border">
                                <h4 class="box-title">Inspection</h4>

                                <ul class="box-controls pull-right">
                                    <li><a class="box-btn-close" href="#"></a></li>
                                    <li><a class="box-btn-slide" href="#"></a></li>
                                    <li><a class="box-btn-fullscreen" href="#"></a></li>
                                </ul>
                            </div>
                            <div class="box-body p-0">
                                <ul class="todo-list">
                                    <li class="p-15">
                                        <div class="box p-15 mb-0 d-block bb-2 border-danger">
                                            <span
                                                class="pull-right badge @if ($inspection->rear_view_mirror == 'N/A')badge-danger @elseif($inspection->rear_view_mirror == 'Fix') badge-warning @else badge-success @endif">{{ $inspection->rear_view_mirror }}</span>
                                            <span class="font-size-14 text-line">Rear_view_mirror </span>
                                        </div>
                                    </li>
                                    <li class="p-15">
                                        <div class="box p-15 mb-0 d-block bb-2 border-warning">
                                            <span class="pull-right badge badge-warning">Fix</span>
                                            <span class="font-size-14 text-line">windshield </span>
                                        </div>
                                    </li>
                                    <li class="p-15">
                                        <div class="box p-15 mb-0 d-block bb-2 border-warning">
                                            <span class="pull-right badge badge-warning">Fix</span>
                                            <span class="font-size-14 text-line">windshield </span>
                                        </div>
                                    </li>
                                    <li class="p-15">
                                        <div class="box p-15 mb-0 d-block bb-2 border-warning">
                                            <span class="pull-right badge badge-warning">Fix</span>
                                            <span class="font-size-14 text-line">windshield </span>
                                        </div>
                                    </li>
                                    <li class="p-15">
                                        <div class="box p-15 mb-0 d-block bb-2 border-warning">
                                            <span class="pull-right badge badge-warning">Fix</span>
                                            <span class="font-size-14 text-line">windshield </span>
                                        </div>
                                    </li>
                                    <li class="p-15">
                                        <div class="box p-15 mb-0 d-block bb-2 border-warning">
                                            <span class="pull-right badge badge-warning">Fix</span>
                                            <span class="font-size-14 text-line">windshield </span>
                                        </div>
                                    </li>
                                    <li class="p-15">
                                        <div class="box p-15 mb-0 d-block bb-2 border-warning">
                                            <span class="pull-right badge badge-warning">Fix</span>
                                            <span class="font-size-14 text-line">windshield </span>
                                        </div>
                                    </li>
                                    <li class="p-15">
                                        <div class="box p-15 mb-0 d-block bb-2 border-warning">
                                            <span class="pull-right badge badge-warning">Fix</span>
                                            <span class="font-size-14 text-line">windshield </span>
                                        </div>
                                    </li>
                                    <li class="p-15">
                                        <div class="box p-15 mb-0 d-block bb-2 border-warning">
                                            <span class="pull-right badge badge-warning">Fix</span>
                                            <span class="font-size-14 text-line">windshield </span>
                                        </div>
                                    </li>
                                    <li class="p-15">
                                        <div class="box p-15 mb-0 d-block bb-2 border-warning">
                                            <span class="pull-right badge badge-warning">Fix</span>
                                            <span class="font-size-14 text-line">windshield </span>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                            <!-- /.box-body -->
                        </div>

                        <div class="box box-solid box-primary">
                            <div class="box-header with-border">
                                <h4 class="box-title">Tasks</h4>&nbsp; &nbsp;
                                <button type="button"
                                    class="waves-effect waves-light btn btn-outline btn-rounded btn-warning mb-5 btn-sm"
                                    data-toggle="modal" data-target="#taskModal">Add task</button>
                                <ul class="box-controls pull-right">
                                    <li><a class="box-btn-close" href="#"></a></li>
                                    <li><a class="box-btn-slide" href="#"></a></li>
                                    <li><a class="box-btn-fullscreen" href="#"></a></li>
                                </ul>
                            </div>
                            <div class="box-body p-10">
                                <ul class="todo-list">
                                    <li class="b-1 p-0 mb-15">
                                        <div class="position-relative p-20">
                                            <!-- drag handle -->
                                            <div class="handle handle2"></div>
                                            <!-- checkbox -->
                                            <input type="checkbox" id="basic_checkbox_19" class="filled-in">
                                            <label for="basic_checkbox_19" class="mb-0 h-15 ml-15"></label>
                                            <!-- todo text -->
                                            <span class="text-line font-size-14">Phasellus interdum</span>
                                            <!-- General tools such as edit or delete-->
                                            <div class="pull-right d-block text-dark flexbox">
                                                <a href="#" data-toggle="tooltip" data-container="body" title=""
                                                    data-original-title="Edit"><i class="fa fa-edit"></i></a>
                                                <a href="#" data-toggle="tooltip" data-container="body" title=""
                                                    data-original-title="Remove"><i class="fa fa-trash-o"></i></a>
                                            </div>
                                            <div class="mt-5 ml-50 pl-5"><em>21/06/2018</em></div>
                                        </div>
                                    </li>
                                    <li class="b-1 p-0 mb-15">
                                        <div class="position-relative p-20">
                                            <!-- drag handle -->
                                            <div class="handle handle2"></div>
                                            <!-- checkbox -->
                                            <input type="checkbox" id="basic_checkbox_20" class="filled-in">
                                            <label for="basic_checkbox_20" class="mb-0 h-15 ml-15"></label>
                                            <!-- todo text -->
                                            <span class="text-line font-size-14">Floor cool cinders</span>
                                            <!-- General tools such as edit or delete-->
                                            <div class="pull-right d-block text-dark flexbox">
                                                <a href="#" data-toggle="tooltip" data-container="body" title=""
                                                    data-original-title="Edit"><i class="fa fa-edit"></i></a>
                                                <a href="#" data-toggle="tooltip" data-container="body" title=""
                                                    data-original-title="Remove"><i class="fa fa-trash-o"></i></a>
                                            </div>
                                            <div class="mt-5 ml-50 pl-5"><em>21/06/2018</em></div>
                                        </div>
                                    </li>
                                    <li class="b-1 p-0 mb-15">
                                        <div class="position-relative p-20">
                                            <!-- drag handle -->
                                            <div class="handle handle2"></div>
                                            <!-- checkbox -->
                                            <input type="checkbox" id="basic_checkbox_21" class="filled-in">
                                            <label for="basic_checkbox_21" class="mb-0 h-15 ml-15"></label>
                                            <!-- todo text -->
                                            <span class="text-line font-size-14">Floor cool cinders</span>
                                            <!-- General tools such as edit or delete-->
                                            <div class="pull-right d-block text-dark flexbox">
                                                <a href="#" data-toggle="tooltip" data-container="body" title=""
                                                    data-original-title="Edit"><i class="fa fa-edit"></i></a>
                                                <a href="#" data-toggle="tooltip" data-container="body" title=""
                                                    data-original-title="Remove"><i class="fa fa-trash-o"></i></a>
                                            </div>
                                            <div class="mt-5 ml-50 pl-5"><em>21/06/2018</em></div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <div class="box box-solid box-primary">
                            <div class="box-header with-border">
                                <h4 class="box-title">Comments</h4>&nbsp; &nbsp;
                                <button type="button"
                                    class="waves-effect waves-light btn btn-outline btn-rounded btn-warning mb-5 btn-sm"
                                    data-toggle="modal" data-target="#commentModal">Add comment</button>
                                <ul class="box-controls pull-right">
                                    <li><a class="box-btn-close" href="#"></a></li>
                                    <li><a class="box-btn-slide" href="#"></a></li>
                                    <li><a class="box-btn-fullscreen" href="#"></a></li>
                                </ul>
                            </div>
                            <div class="box-body p-10">
                                <ul class="todo-list">
                                    <li class="b-1 p-0 mb-15">
                                        <div class="position-relative p-20">
                                            <!-- todo text -->
                                            <span class="text-line font-size-14">Phasellus interdum</span>
                                            <!-- General tools such as edit or delete-->
                                            <div class="pull-right d-block text-dark flexbox">
                                                <a href="#" data-toggle="tooltip" data-container="body" title=""
                                                    data-original-title="Edit"><i class="fa fa-edit"></i></a>
                                                <a href="#" data-toggle="tooltip" data-container="body" title=""
                                                    data-original-title="Remove"><i class="fa fa-trash-o"></i></a>
                                            </div>
                                            <div class="mt-5 ml-50 pl-5"><em>21/06/2018</em></div>
                                        </div>
                                    </li>
                                    <li class="b-1 p-0 mb-15">
                                        <div class="position-relative p-20">
                                            <!-- todo text -->
                                            <span class="text-line font-size-14">Floor cool cinders</span>
                                            <!-- General tools such as edit or delete-->
                                            <div class="pull-right d-block text-dark flexbox">
                                                <a href="#" data-toggle="tooltip" data-container="body" title=""
                                                    data-original-title="Edit"><i class="fa fa-edit"></i></a>
                                                <a href="#" data-toggle="tooltip" data-container="body" title=""
                                                    data-original-title="Remove"><i class="fa fa-trash-o"></i></a>
                                            </div>
                                            <div class="mt-5 ml-50 pl-5"><em>21/06/2018</em></div>
                                        </div>
                                    </li>
                                    <li class="b-1 p-0 mb-15">
                                        <div class="position-relative p-20">
                                            <!-- todo text -->
                                            <span class="text-line font-size-14">Floor cool cinders</span>
                                            <!-- General tools such as edit or delete-->
                                            <div class="pull-right d-block text-dark flexbox">
                                                <a href="#" data-toggle="tooltip" data-container="body" title=""
                                                    data-original-title="Edit"><i class="fa fa-edit"></i></a>
                                                <a href="#" data-toggle="tooltip" data-container="body" title=""
                                                    data-original-title="Remove"><i class="fa fa-trash-o"></i></a>
                                            </div>
                                            <div class="mt-5 ml-50 pl-5"><em>21/06/2018</em></div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                            <!-- /.box-body -->
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </section>
            <!-- /.content -->

        </div>
    </div>

    @yield('footer')

    <div id="chat-box-body">
        <div id="chat-circle" class="waves-effect waves-circle btn btn-circle btn-lg btn-warning l-h-70">
            <div id="chat-overlay"></div>
            <span class="icon-Group-chat font-size-30"><span class="path1"></span><span
                    class="path2"></span></span>
        </div>

        <div class="chat-box">
            <div class="chat-box-header p-15 d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <button
                        class="waves-effect waves-circle btn btn-circle btn-primary-light h-40 w-40 rounded-circle l-h-45"
                        type="button" data-toggle="dropdown">
                        <span class="icon-Add-user font-size-22"><span class="path1"></span><span
                                class="path2"></span></span>
                    </button>
                    <div class="dropdown-menu min-w-200">
                        <a class="dropdown-item font-size-16" href="#">
                            <span class="icon-Color mr-15"></span>
                            New Group</a>
                        <a class="dropdown-item font-size-16" href="#">
                            <span class="icon-Clipboard mr-15"><span class="path1"></span><span
                                    class="path2"></span><span class="path3"></span><span
                                    class="path4"></span></span>
                            Contacts</a>
                        <a class="dropdown-item font-size-16" href="#">
                            <span class="icon-Group mr-15"><span class="path1"></span><span
                                    class="path2"></span></span>
                            Groups</a>
                        <a class="dropdown-item font-size-16" href="#">
                            <span class="icon-Active-call mr-15"><span class="path1"></span><span
                                    class="path2"></span></span>
                            Calls</a>
                        <a class="dropdown-item font-size-16" href="#">
                            <span class="icon-Settings1 mr-15"><span class="path1"></span><span
                                    class="path2"></span></span>
                            Settings</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item font-size-16" href="#">
                            <span class="icon-Question-circle mr-15"><span class="path1"></span><span
                                    class="path2"></span></span>
                            Help</a>
                        <a class="dropdown-item font-size-16" href="#">
                            <span class="icon-Notifications mr-15"><span class="path1"></span><span
                                    class="path2"></span></span>
                            Privacy</a>
                    </div>
                </div>
                <div class="text-center flex-grow-1">
                    <div class="text-dark font-size-18">Mayra Sibley</div>
                    <div>
                        <span class="badge badge-sm badge-dot badge-primary"></span>
                        <span class="text-muted font-size-12">Active</span>
                    </div>
                </div>
                <div class="chat-box-toggle">
                    <button id="chat-box-toggle"
                        class="waves-effect waves-circle btn btn-circle btn-danger-light h-40 w-40 rounded-circle l-h-45"
                        type="button">
                        <span class="icon-Close font-size-22"><span class="path1"></span><span
                                class="path2"></span></span>
                    </button>
                </div>
            </div>
            <div class="chat-box-body">
                <div class="chat-box-overlay">
                </div>
                <div class="chat-logs">
                    <div class="chat-msg user">
                        <div class="d-flex align-items-center">
                            <span class="msg-avatar">
                                <img src="{{ asset('images/avatar/2.jpg') }}" class="avatar avatar-lg">
                            </span>
                            <div class="mx-10">
                                <a href="#" class="text-dark hover-primary font-weight-bold">Mayra Sibley</a>
                                <p class="text-muted font-size-12 mb-0">2 Hours</p>
                            </div>
                        </div>
                        <div class="cm-msg-text">
                            Hi there, I'm Jesse and you?
                        </div>
                    </div>
                    <div class="chat-msg self">
                        <div class="d-flex align-items-center justify-content-end">
                            <div class="mx-10">
                                <a href="#" class="text-dark hover-primary font-weight-bold">You</a>
                                <p class="text-muted font-size-12 mb-0">3 minutes</p>
                            </div>
                            <span class="msg-avatar">
                                <img src="images/avatar/3.jpg" class="avatar avatar-lg">
                            </span>
                        </div>
                        <div class="cm-msg-text">
                            My name is Anne Clarc.
                        </div>
                    </div>
                    <div class="chat-msg user">
                        <div class="d-flex align-items-center">
                            <span class="msg-avatar">
                                <img src="images/avatar/2.jpg" class="avatar avatar-lg">
                            </span>
                            <div class="mx-10">
                                <a href="#" class="text-dark hover-primary font-weight-bold">Mayra Sibley</a>
                                <p class="text-muted font-size-12 mb-0">40 seconds</p>
                            </div>
                        </div>
                        <div class="cm-msg-text">
                            Nice to meet you Anne.<br>How can i help you?
                        </div>
                    </div>
                </div>
                <!--chat-log -->
            </div>
            <div class="chat-input">
                <form>
                    <input type="text" id="chat-input" placeholder="Send a message..." />
                    <button type="submit" class="chat-submit" id="chat-submit">
                        <span class="icon-Send font-size-22"></span>
                    </button>
                </form>
            </div>
        </div>
    </div>

@endsection
