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
                    <h3 class="page-title">Clients</h3>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                <li class="breadcrumb-item" aria-current="page">clients</li>
                                <li class="breadcrumb-item active" aria-current="page">Client list</li>
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
                            <h3 class="box-title">Client list</h3> &nbsp; &nbsp;
                            <button type="button"
                                class="waves-effect waves-light btn btn-outline btn-rounded btn-warning mb-5 btn-sm"
                                data-toggle="modal" data-target="#myModal">Add new client</button>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="clientTable" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Registration</th>
                                            <th>Make</th>
                                            <th>Model</th>
                                            <th>Engine number</th>
                                            <th>vinNo</th>
                                            <th>Owner</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if($clients->count() > 0)
                                            @foreach($clients as $client)
                                                <tr>
                                                    <td>{{ $client->regNo }}</td>
                                                    <td>{{ $client->make }}</td>
                                                    <td>{{ $client->model }}</td>
                                                    <td>{{ $client->engineNo }}</td>
                                                    <td>{{ $client->vinNo }}</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div>
                                                                <a href="#"
                                                                    class="text-dark font-weight-600 hover-primary mb-1 font-size-16">{{ $client->fullName }}</a>
                                                                <span
                                                                    class="text-fade d-block">{{ $client->email }}</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td style="display:flex;"><a
                                                            href="{{ route('client.profile', $client->id) }}"
                                                            class="waves-effect waves-light btn btn-primary btn-circle mx-5"><span
                                                                class="icon-Arrow-right"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span></span></a>

                                                    </td>

                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="6" style="text-align: center;">No clients at the moment
                                                </td>
                                            </tr>
                                        @endif

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Registration</th>
                                            <th>Make</th>
                                            <th>Model</th>
                                            <th>Engine number</th>
                                            <th>vinNo</th>
                                            <th>Owner</th>
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
    &copy; 2021 <a href="http://starautocare.co.ke">Star Autocare</a>. All Rights Reserved.
</footer>

<!-- modal -->
<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Add Client</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('storeVehicle') }}">
                    @csrf
                    <div class="box-body">
                        <h4 class="box-title text-info"><i class="ti-user mr-15"></i> Personal Info</h4>
                        <hr class="my-15">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Full name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Full Name"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Phone number</label>
                                    <input type="tel" name="phone" class="form-control" placeholder="Phone Number"
                                        pattern="[0-9]*" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>E-mail</label>
                                    <input type="email" name="email" class="form-control" placeholder="E-mail" required>
                                </div>
                            </div>

                        </div>
                        <br>
                        <h4 class="box-title text-info"><i class="ti-save mr-15"></i> Vehicle info</h4>
                        <hr class="my-15">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Registration</label>
                                    <input type="text" name="regNo" class="form-control"
                                        placeholder="Registration number" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Make</label>
                                    <input type="text" name="make" class="form-control" placeholder="Make" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Model</label>
                                    <input type="text" name="model" class="form-control" placeholder="Model" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>VIN number</label>
                                    <input type="text" name="vinNo" class="form-control" placeholder="VIN number"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Engine number</label>
                                    <input type="text" name="engineNo" class="form-control" placeholder="Engine number"
                                        required>
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
