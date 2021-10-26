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
                <span class="dark-logo">Star Autocare</span>
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
                        <span class="icon-Align-left"><span class="path1"></span><span class="path2"></span><span
                                class="path3"></span></span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="navbar-custom-menu r-side">
            <ul class="nav navbar-nav">
                <li class="btn-group nav-item d-lg-inline-flex d-none">
                    <a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link rounded full-screen"
                        title="Full Screen">
                        <i class="icon-Expand-arrows"><span class="path1"></span><span class="path2"></span></i>
                    </a>
                </li>

                <!-- User Account-->
                <li class="dropdown user user-menu">
                    <a href="#" class="waves-effect waves-light dropdown-toggle" data-toggle="dropdown" title="User">
                        <i class="icon-User"><span class="path1"></span><span class="path2"></span></i>
                    </a>
                    <ul class="dropdown-menu animated flipInX">
                        <li class="user-body">
                            <a class="dropdown-item" href="#"><i class="ti-user text-muted mr-2"></i> Profile</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}"><i
                                    class="ti-lock text-muted mr-2"></i> Logout</a>
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
                    <i class="icon-Layout-4-blocks"><span class="path1"></span><span class="path2"></span></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li>
                <a href="{{ route('sessions.index') }}">
                    <i class="icon-Brush"><span class="path1"></span><span class="path2"></span></i>
                    <span>Sessions</span>
                </a>
            </li>

    </section>
    <div class="sidebar-footer">
        <!-- item-->
        <a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Settings"
            aria-describedby="tooltip92529"><span class="icon-Settings-2"></span></a>
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
                @if(!$tasks->isEmpty() && !$incars->isEmpty())
                <div class="send-btn">
    			  <div class="clearFix">
    				<div class="text-right pb-15">
    					<a id="email2" class="btn btn-warning" href="{{ route('session.sendMail', $session->id) }}"> <span><i class="fa fa-print"></i>Email Report</span> </a>
    				</div>
    			  </div>
    			</div>
                @endif
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
                                        <p>Time in :<span class="text-gray pl-10">{{ $session->created_at }}</span>
                                        </p>
                                        <p>Time promised :<span class="text-gray pl-10">{{ $session->timeOut }}</span>
                                        </p>
                                        <p>Milleage :<span class="text-gray pl-10">{{ $session->kilometers }}</span>
                                        </p>
                                        <p>Fuel :&nbsp;<span class="badge badge-primary">{{ $session->fuel }}%</span>
                                        </p>
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
                                            class="pull-right badge @if ($inspection->rear_view_mirror == 'N/A') badge-warning @elseif($inspection->rear_view_mirror == 'Fix')  badge-danger @else badge-success @endif">{{ $inspection->rear_view_mirror }}</span>
                                        <span class="font-size-14 text-line">Rear_view_mirror </span>
                                    </div>
                                </li>
                                <li class="p-15">
                                    <div class="box p-15 mb-0 d-block bb-2 border-warning">
                                        <span
                                            class="pull-right badge @if ($inspection->windshield == 'N/A') badge-warning @elseif($inspection->windshield == 'Fix')  badge-danger @else badge-success @endif">{{ $inspection->windshield }}</span>
                                        <span class="font-size-14 text-line">windshield </span>
                                    </div>
                                </li>
                                <li class="p-15">
                                    <div class="box p-15 mb-0 d-block bb-2 border-warning">
                                        <span
                                            class="pull-right badge @if ($inspection->air_conditioning_operation == 'N/A') badge-warning @elseif($inspection->air_conditioning_operation == 'Fix')  badge-danger @else badge-success @endif">{{ $inspection->air_conditioning_operation }}</span>
                                        <span class="font-size-14 text-line">air_conditioning_operation</span>
                                    </div>
                                </li>
                                <li class="p-15">
                                    <div class="box p-15 mb-0 d-block bb-2 border-warning">
                                        <span
                                            class="pull-right badge @if ($inspection->dash_board_instrumentation == 'N/A') badge-warning @elseif($inspection->dash_board_instrumentation == 'Fix')  badge-danger @else badge-success @endif">{{ $inspection->dash_board_instrumentation }}</span>
                                        <span class="font-size-14 text-line">dash_board_instrumentation </span>
                                    </div>
                                </li>
                                <li class="p-15">
                                    <div class="box p-15 mb-0 d-block bb-2 border-warning">
                                        <span
                                            class="pull-right badge @if ($inspection->internal_lighting == 'N/A') badge-warning @elseif($inspection->internal_lighting == 'Fix')  badge-danger @else badge-success @endif">{{ $inspection->internal_lighting }}</span>
                                        <span class="font-size-14 text-line">internal_lighting</span>
                                    </div>
                                </li>
                                <li class="p-15">
                                    <div class="box p-15 mb-0 d-block bb-2 border-warning">
                                        <span
                                            class="pull-right badge @if ($inspection->floor_carpeting == 'N/A') badge-warning @elseif($inspection->floor_carpeting == 'Fix')  badge-danger @else badge-success @endif">{{ $inspection->floor_carpeting }}</span>
                                        <span class="font-size-14 text-line">floor_carpeting</span>
                                    </div>
                                </li>
                                <li class="p-15">
                                    <div class="box p-15 mb-0 d-block bb-2 border-warning">
                                        <span
                                            class="pull-right badge @if ($inspection->tyre_condition == 'N/A') badge-warning @elseif($inspection->tyre_condition == 'Fix')  badge-danger @else badge-success @endif">{{ $inspection->tyre_condition }}</span>
                                        <span class="font-size-14 text-line">tyre_condition</span>
                                    </div>
                                </li>
                                <li class="p-15">
                                    <div class="box p-15 mb-0 d-block bb-2 border-warning">
                                        <span
                                            class="pull-right badge @if ($inspection->spear_wheel == 'N/A') badge-warning @elseif($inspection->spear_wheel == 'Fix')  badge-danger @else badge-success @endif">{{ $inspection->spear_wheel }}</span>
                                        <span class="font-size-14 text-line">spear_wheel</span>
                                    </div>
                                </li>
                                <li class="p-15">
                                    <div class="box p-15 mb-0 d-block bb-2 border-warning">
                                        <span
                                            class="pull-right badge @if ($inspection->toolkit == 'N/A') badge-warning @elseif($inspection->toolkit == 'Fix')  badge-danger @else badge-success @endif">{{ $inspection->toolkit }}</span>
                                        <span class="font-size-14 text-line">toolkit</span>
                                    </div>
                                </li>
                                <li class="p-15">
                                    <div class="box p-15 mb-0 d-block bb-2 border-warning">
                                        <span
                                            class="pull-right badge @if ($inspection->radio == 'N/A') badge-warning @elseif($inspection->radio == 'Fix')  badge-danger @else badge-success @endif">{{ $inspection->radio }}</span>
                                        <span class="font-size-14 text-line">radio</span>
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
                                <button type="button"
                                class="waves-effect waves-light btn btn-outline btn-rounded btn-warning mb-5 btn-sm"
                                data-toggle="modal" data-target="#taskStatusModal">Add Task Status</button>
                            <ul class="box-controls pull-right">
                                <li><a class="box-btn-close" href="#"></a></li>
                                <li><a class="box-btn-slide" href="#"></a></li>
                                <li><a class="box-btn-fullscreen" href="#"></a></li>
                            </ul>
                        </div>
                        <div class="box-body p-10">
                            <ul class="todo-list">
                                @foreach($tasks as $task)
                                    <li class="b-1 p-0 mb-15">
                                        <div class="position-relative p-20">
                                            <!-- drag handle -->
                                            <div class="handle handle2"></div>
                                            <table style="width:100%;">
                                                <tr><th style="width:15%;">Status</th><th style="width:55%;">Task</th><th style="width:55%;">Date</th><th style="width:10%;">Action</th></tr>
                                                <tr><td></td><td></td><td></td></tr>
                                                <tr><td><form method="POST"
                                                action="{{ route('tasks.complete', $task->id) }}"
                                                style="display: inline;">
                                                @csrf
                                                @method('PUT')
                                                <!-- checkbox -->
                                                <input type="hidden" name="completed" value="{{ $task->checked }}">
                                                <input type="hidden" name="sessionId" value="{{ $inspection->id }}">
                                                <select name="status" onChange="this.form.submit()" style="appearance: none;outline: 0;box-shadow: none;flex: 1;padding:4px 1rem;border-radius:1rem;font-size:1rem;color: #fff;background-color: #272E48;background-image: none;cursor: pointer;">
                                                    @foreach($statuses as $status)
                                                       <option value="{{ $status->status }}" @if($task->checked === $status->status) selected @endif>{{ $status->status }}
                                                    @endforeach
                                                </select>
                                            </form></td>
                                            <td><span class="text-line font-size-14">@if($task->checked ===
                                                "Completed")<strike>{{ $task->todo }}</strike>@else {{ $task->todo }} @endif</span></td>
                                                <td><em>{{ $task->updated_at->format('d/m/Y') }}</em></td>
                                                <td>
                                                <table>
                                                    <tr><td>
                                    <a href="#" data-toggle="modal" data-target="#editTaskModal" data-container="body"
                                        title="" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                                    </td><td>

                                    <!-- modal -->
                                    <div id="editTaskModal" class="modal fade" tabindex="-1" role="dialog"
                                        aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="myModalLabel">Task
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-hidden="true">×</button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="POST"
                                                        action="{{ route('tasks.update', $task->id) }}">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="box-body">

                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Edit Task</label>
                                                                        <input type="hidden" name="sessionId"
                                                                            value="{{ $session->id }}"
                                                                            class="form-control"
                                                                            placeholder="e.g Replace oil filter">
                                                                        <input type="text" name="todo"
                                                                            value="{{ $task->todo }}"
                                                                            class="form-control"
                                                                            placeholder="e.g Replace oil filter">
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <!-- /.box-body -->
                                                        <div class="box-footer">
                                                            <button type="button"
                                                                class="btn btn-rounded btn-primary btn-outline"
                                                                data-dismiss="modal">
                                                                Cancel
                                                            </button>&nbsp; &nbsp;
                                                            <button type="submit" href="inspection.php"
                                                                class="btn btn-rounded btn-warning btn-outline mr-1">
                                                                <i class="ti-save-alt"></i> Update
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>

                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>

                                    <form action="{{ route('task.delete', $task->id) }}"
                                        method="POST" style="margin:0;">
                                        @csrf
                                        @method('delete')
                                        <button type="submit"
                                            onclick="return confirm('Are you sure you want to delete this task?')"
                                            style="background:transparent;color: #a5b2cb;border:none;"><i
                                                class="fa fa-trash-o"></i></button>
                                    </form>
                                   </td>
                                </tr>
                                </table>
                                                </td></tr>
                                            </table>
                                            
                                            <!-- todo text -->
                                            
                                <!-- General tools such as edit or delete-->
                                
                                
                        </div>
                        </li>
                        @endforeach
                        </ul>
                    </div>
                    <!-- /.box-body -->
                </div>

                <div class="box box-solid box-primary" >
                    <div class="box-header with-border">
                        <h4 class="box-title">Comments</h4>&nbsp; &nbsp;
                        <ul class="box-controls pull-right">
                            <li><a class="box-btn-close" href="#"></a></li>
                            <li><a class="box-btn-slide" href="#"></a></li>
                            <li><a class="box-btn-fullscreen" href="#"></a></li>
                        </ul>
                    </div>
                    <div class="box-body p-10">
                        <ul class="todo-list">
                        @if($comments->isEmpty()) <form method="POST" action="{{ route('comments.store',  $session->id) }}"> @else <form method="POST" action="{{ route('comments.update',  $inspection->comments->id) }}">@endif
                                @csrf
                                @if(!$comments->isEmpty())  @method('PUT') @endif
                                <div class="box-body">

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Comments (Press tab after every item)</label>
                                                <input type="hidden" name="sessionId" value="{{ $session->id }}"
                                                    class="form-control">
                                                <input type="text" name="comment" class="form-control" data-role="tagsinput" @if(!$comments->isEmpty())  value="{{ $inspection->comments->comment }}" @endif>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                    <button type="submit" href="inspection.php"
                                        class="btn btn-rounded btn-warning btn-outline mr-1">
                                        <i class="ti-save-alt"></i> Save
                                    </button>
                            </form>

                        </ul>
                    </div>
                    <!-- /.box-body -->
                </div>

                <div class="box box-solid box-primary" >
                    <div class="box-header with-border">
                        <h4 class="box-title">incar</h4>&nbsp; &nbsp;
                        
                        <ul class="box-controls pull-right">
                            <li><a class="box-btn-close" href="#"></a></li>
                            <li><a class="box-btn-slide" href="#"></a></li>
                            <li><a class="box-btn-fullscreen" href="#"></a></li>
                        </ul>
                    </div>
                    <div class="box-body p-10">
                        <ul class="todo-list">
 

                                @if($incars->isEmpty()) <form method="POST" action="{{ route('incars.store',  $session->id) }}"> @else <form method="POST" action="{{ route('incars.update',  $inspection->incar->id) }}">@endif
                                @csrf
                                @if(!$incars->isEmpty())  @method('PUT') @endif
                                <div class="box-body">

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Incars (Press tab after every item)</label>
                                                <input type="hidden" name="sessionId" value="{{ $session->id }}"
                                                    class="form-control">
                                                <input type="text" name="incar" class="form-control" data-role="tagsinput" @if(!$incars->isEmpty())  value="{{ $inspection->incar->incar }}" @endif>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                    <button type="submit" href="inspection.php"
                                        class="btn btn-rounded btn-warning btn-outline mr-1">
                                        <i class="ti-save-alt"></i> Save
                                    </button>
                            </form>
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

<footer class="main-footer">
    <div class="pull-right d-none d-sm-inline-block">
        <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
            <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">FAQ</a>
            </li>
        </ul>
    </div>
    &copy; 2021 <a href="http://starautocare.co.ke">Star Autocare</a>. All Rights Reserved.
</footer>


<!-- modal -->
<div id="taskModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Add task</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('tasks.store', $inspection->id) }}">
                    @csrf
                    <div class="box-body">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Task</label>
                                    <input type="hidden" name="sessionId" value="{{ $session->id }}"
                                        class="form-control" placeholder="e.g Replace oil filter">
                                    <input type="text" name="todo" class="form-control">
                                </div>
                            </div>

                        </div>

                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="button" class="btn btn-rounded btn-primary btn-outline" data-dismiss="modal">
                            Cancel
                        </button>&nbsp; &nbsp;
                        <button type="submit" href="inspection.php"
                            class="btn btn-rounded btn-warning btn-outline mr-1">
                            <i class="ti-save-alt"></i> Save
                        </button>
                    </div>
                </form>
            </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!-- modal -->
<div id="taskStatusModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Add task status</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('taskStatus.store') }}">
                    @csrf
                    <div class="box-body">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Task Status</label>
                                    <input type="hidden" name="sessionId" value="{{ $session->id }}"
                                        class="form-control" placeholder="e.g Replace oil filter">
                                    <input type="text" name="status" class="form-control">
                                </div>
                            </div>

                        </div>

                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="button" class="btn btn-rounded btn-primary btn-outline" data-dismiss="modal">
                            Cancel
                        </button>&nbsp; &nbsp;
                        <button type="submit" href="inspection.php"
                            class="btn btn-rounded btn-warning btn-outline mr-1">
                            <i class="ti-save-alt"></i> Save
                        </button>
                    </div>
                </form>
            </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!-- modal -->
<div id="commentModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Add comments</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('comments.store', $inspection->id) }}">
                    @csrf
                    <div class="box-body">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Comments</label>
                                    <input type="hidden" name="sessionId" value="{{ $session->id }}"
                                        class="form-control">
                                    <input type="text" name="comment" class="form-control"
                                        placeholder="Comment goes here">
                                </div>
                            </div>

                        </div>

                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="button" class="btn btn-rounded btn-primary btn-outline" data-dismiss="modal">
                            Cancel
                        </button>&nbsp; &nbsp;
                        <button type="submit" href="inspection.php"
                            class="btn btn-rounded btn-warning btn-outline mr-1">
                            <i class="ti-save-alt"></i> Save
                        </button>
                    </div>
                </form>
            </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!-- modal -->
<div id="incarModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Add incars</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('incars.store', $inspection->id) }}">
                    @csrf
                    <div class="box-body">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Incars</label>
                                    <input type="hidden" name="sessionId" value="{{ $session->id }}"
                                        class="form-control">
                                    <input type="text" name="incar" class="form-control"
                                        placeholder="In car goes here">
                                </div>
                            </div>

                        </div>

                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="button" class="btn btn-rounded btn-primary btn-outline" data-dismiss="modal">
                            Cancel
                        </button>&nbsp; &nbsp;
                        <button type="submit" href="inspection.php"
                            class="btn btn-rounded btn-warning btn-outline mr-1">
                            <i class="ti-save-alt"></i> Save
                        </button>
                    </div>
                </form>
            </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

@endsection
