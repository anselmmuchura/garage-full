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
                                <li class="breadcrumb-item active" aria-current="page">Session list</li>
                            </ol>
                        </nav>
                    </div>
                </div>

            </div>
        </div>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">

                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Session list</h3> &nbsp; &nbsp;
                            <button type="button"
                                class="waves-effect waves-light btn btn-outline btn-rounded btn-warning mb-5 btn-sm"
                                data-toggle="modal" data-target="#myModal">Add new Session</button>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="sessionTable" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Registration</th>
                                            <th>Make</th>
                                            <th>Kilometers</th>
                                            <th>fuel</th>
                                            <th>TimeIn</th>
                                            <th>TimeOut</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if($sessions->count() > 0)
                                            @foreach($sessions as $session)
                                                <tr>
                                                    <td>{{ $session->regNo }}</td>
                                                    <td>{{ $session->make }}</td>
                                                    <td>{{ $session->kilometers }}</td>
                                                    <td>
                                                        {{ $session->fuel }} %
                                                    </td>
                                                    <td>{{ $session->created_at }}</td>
                                                    <td>{{ $session->timeOut }}</td>
                                                    <td class="text-right" style="display:flex;">
                                                        <a href="{{ route('session.view', $session->id) }}"
                                                            class="waves-effect waves-light btn btn-primary-light btn-circle"><span
                                                                class="icon-Settings-1 font-size-18"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span></span></a>

                                                        <a href="{{ route('inspections.index', $session->id) }}"
                                                            class="waves-effect waves-light btn btn-primary btn-circle mx-5"><span
                                                                class="icon-Search"><span class="path1"></span><span
                                                                    class="path2"></span></span></a>


                            </div>
                            </td>
                            </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="7" style="text-align: center;">No Sessions at the moment
                                </td>
                            </tr>
                            @endif

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Registration</th>
                                    <th>Make</th>
                                    <th>Kilometers</th>
                                    <th>fuel</th>
                                    <th>TimeIn</th>
                                    <th>TimeOut</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            </table>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

            </div>

            <!-- /.col -->
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
    &copy; 2021 <a href="https://www.codeisystems.co.ke">Codei systems</a>. All Rights Reserved.
</footer>

<!-- modal -->
<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Add Session</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('sessions.store') }}">
                    @csrf
                    <div class="box-body">
                        <h4 class="box-title text-info"><i class="ti-user mr-15"></i>Session Info</h4>
                        <hr class="my-15">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Time Promised</label>
                                    <input class="form-control" type="date" name="timeOut" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Milleage</label>
                                    <input type="number" name="milleage" class="form-control" placeholder="Milleage"
                                        required />
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Fuel (%)</label>
                                    <input type="number" name="fuel" max="100" min="0" class="form-control"
                                        placeholder="Fuel" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Battery</label>
                                    <input type="text" name="battery" class="form-control" placeholder="Battery"
                                        required />
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Vehicle</label>
                                    <select name="vehicle_id" class="form-control select2"
                                        style="width: 100%;max-height: 50px; overflow: auto;" tabindex="-1"
                                        aria-hidden="true" @if ($vehicles->count() < 1) disabled @endif>
                                            @if($vehicles->count() > 0)
                                                @foreach($vehicles as $vehicle)
                                                    <option value="{{ $vehicle->id }}">{{ $vehicle->regNo }}
                                                    </option>
                                                @endforeach
                                            @endif
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="button" class="btn btn-rounded btn-primary btn-outline" data-dismiss="modal">
                            <i class="ti-save-alt"></i> Cancel
                        </button>
                        <button type="submit" class="btn btn-rounded btn-warning btn-outline mr-1">
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
