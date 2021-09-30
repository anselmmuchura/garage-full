@extends('layouts.app')

@section('content')

    <header class="main-header">
        <div class="d-flex align-items-center logo-box justify-content-center">
            <!-- Logo -->
            <a href="index-2.html" class="logo">
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
                    <a href="index.php">
                        <i class="icon-Layout-4-blocks"><span class="path1"></span><span
                                class="path2"></span></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="index.php">
                        <i class="icon-User"><span class="path1"></span><span
                                class="path2"></span></i>
                        <span>Clients</span>
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
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Registration</th>
                                                <th>Make</th>
                                                <th>Model</th>
                                                <th>Owner</th>
                                                <th>last serviced</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>KBC 401A</td>
                                                <td>Mercedes benz</td>
                                                <td>E200</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div>
                                                            <a href="#"
                                                                class="text-dark font-weight-600 hover-primary mb-1 font-size-16">Mark
                                                                Townhouse</a>
                                                            <span class="text-fade d-block">markt@gmail.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>2011/04/25</td>
                                                <td><a href="profile.php"
                                                        class="waves-effect waves-light btn btn-primary btn-circle mx-5"><span
                                                            class="icon-Arrow-right"><span
                                                                class="path1"></span><span
                                                                class="path2"></span></span></a></td>
                                            </tr>
                                            <tr>
                                                <td>KBC 401A</td>
                                                <td>Mercedes benz</td>
                                                <td>E200</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div>
                                                            <a href="#"
                                                                class="text-dark font-weight-600 hover-primary mb-1 font-size-16">Mark
                                                                Townhouse</a>
                                                            <span class="text-fade d-block">markt@gmail.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>2011/04/25</td>
                                                <td><a href="#"
                                                        class="waves-effect waves-light btn btn-primary btn-circle mx-5"><span
                                                            class="icon-Arrow-right"><span
                                                                class="path1"></span><span
                                                                class="path2"></span></span></a></td>
                                            </tr>
                                            <tr>
                                                <td>KBC 401A</td>
                                                <td>Mercedes benz</td>
                                                <td>E200</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div>
                                                            <a href="#"
                                                                class="text-dark font-weight-600 hover-primary mb-1 font-size-16">Mark
                                                                Townhouse</a>
                                                            <span class="text-fade d-block">markt@gmail.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>2011/04/25</td>
                                                <td><a href="#"
                                                        class="waves-effect waves-light btn btn-primary btn-circle mx-5"><span
                                                            class="icon-Arrow-right"><span
                                                                class="path1"></span><span
                                                                class="path2"></span></span></a></td>
                                            </tr>
                                            <tr>
                                                <td>KBC 401A</td>
                                                <td>Mercedes benz</td>
                                                <td>E200</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div>
                                                            <a href="#"
                                                                class="text-dark font-weight-600 hover-primary mb-1 font-size-16">Mark
                                                                Townhouse</a>
                                                            <span class="text-fade d-block">markt@gmail.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>2011/04/25</td>
                                                <td><a href="#"
                                                        class="waves-effect waves-light btn btn-primary btn-circle mx-5"><span
                                                            class="icon-Arrow-right"><span
                                                                class="path1"></span><span
                                                                class="path2"></span></span></a></td>
                                            </tr>
                                            <tr>
                                                <td>KBC 401A</td>
                                                <td>Mercedes benz</td>
                                                <td>E200</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div>
                                                            <a href="#"
                                                                class="text-dark font-weight-600 hover-primary mb-1 font-size-16">Mark
                                                                Townhouse</a>
                                                            <span class="text-fade d-block">markt@gmail.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>2011/04/25</td>
                                                <td><a href="#"
                                                        class="waves-effect waves-light btn btn-primary btn-circle mx-5"><span
                                                            class="icon-Arrow-right"><span
                                                                class="path1"></span><span
                                                                class="path2"></span></span></a></td>
                                            </tr>
                                            <tr>
                                                <td>KBC 401A</td>
                                                <td>Mercedes benz</td>
                                                <td>E200</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div>
                                                            <a href="#"
                                                                class="text-dark font-weight-600 hover-primary mb-1 font-size-16">Mark
                                                                Townhouse</a>
                                                            <span class="text-fade d-block">markt@gmail.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>2011/04/25</td>
                                                <td><a href="#"
                                                        class="waves-effect waves-light btn btn-primary btn-circle mx-5"><span
                                                            class="icon-Arrow-right"><span
                                                                class="path1"></span><span
                                                                class="path2"></span></span></a></td>
                                            </tr>
                                            <tr>
                                                <td>KBC 401A</td>
                                                <td>Mercedes benz</td>
                                                <td>E200</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div>
                                                            <a href="#"
                                                                class="text-dark font-weight-600 hover-primary mb-1 font-size-16">Mark
                                                                Townhouse</a>
                                                            <span class="text-fade d-block">markt@gmail.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>2011/04/25</td>
                                                <td><a href="#"
                                                        class="waves-effect waves-light btn btn-primary btn-circle mx-5"><span
                                                            class="icon-Arrow-right"><span
                                                                class="path1"></span><span
                                                                class="path2"></span></span></a></td>
                                            </tr>
                                            <tr>
                                                <td>KBC 401A</td>
                                                <td>Mercedes benz</td>
                                                <td>E200</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div>
                                                            <a href="#"
                                                                class="text-dark font-weight-600 hover-primary mb-1 font-size-16">Mark
                                                                Townhouse</a>
                                                            <span class="text-fade d-block">markt@gmail.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>2011/04/25</td>
                                                <td><a href="#"
                                                        class="waves-effect waves-light btn btn-primary btn-circle mx-5"><span
                                                            class="icon-Arrow-right"><span
                                                                class="path1"></span><span
                                                                class="path2"></span></span></a></td>
                                            </tr>
                                            <tr>
                                                <td>KBC 401A</td>
                                                <td>Mercedes benz</td>
                                                <td>E200</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div>
                                                            <a href="#"
                                                                class="text-dark font-weight-600 hover-primary mb-1 font-size-16">Mark
                                                                Townhouse</a>
                                                            <span class="text-fade d-block">markt@gmail.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>2011/04/25</td>
                                                <td><a href="#"
                                                        class="waves-effect waves-light btn btn-primary btn-circle mx-5"><span
                                                            class="icon-Arrow-right"><span
                                                                class="path1"></span><span
                                                                class="path2"></span></span></a></td>
                                            </tr>
                                            <tr>
                                                <td>KBC 401A</td>
                                                <td>Mercedes benz</td>
                                                <td>E200</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div>
                                                            <a href="#"
                                                                class="text-dark font-weight-600 hover-primary mb-1 font-size-16">Mark
                                                                Townhouse</a>
                                                            <span class="text-fade d-block">markt@gmail.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>2011/04/25</td>
                                                <td><a href="#"
                                                        class="waves-effect waves-light btn btn-primary btn-circle mx-5"><span
                                                            class="icon-Arrow-right"><span
                                                                class="path1"></span><span
                                                                class="path2"></span></span></a></td>
                                            </tr>
                                            <tr>
                                                <td>KBC 401A</td>
                                                <td>Mercedes benz</td>
                                                <td>E200</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div>
                                                            <a href="#"
                                                                class="text-dark font-weight-600 hover-primary mb-1 font-size-16">Mark
                                                                Townhouse</a>
                                                            <span class="text-fade d-block">markt@gmail.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>2011/04/25</td>
                                                <td><a href="#"
                                                        class="waves-effect waves-light btn btn-primary btn-circle mx-5"><span
                                                            class="icon-Arrow-right"><span
                                                                class="path1"></span><span
                                                                class="path2"></span></span></a></td>
                                            </tr>
                                            <tr>
                                                <td>KBC 401A</td>
                                                <td>Mercedes benz</td>
                                                <td>E200</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div>
                                                            <a href="#"
                                                                class="text-dark font-weight-600 hover-primary mb-1 font-size-16">Mark
                                                                Townhouse</a>
                                                            <span class="text-fade d-block">markt@gmail.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>2011/04/25</td>
                                                <td><a href="#"
                                                        class="waves-effect waves-light btn btn-primary btn-circle mx-5"><span
                                                            class="icon-Arrow-right"><span
                                                                class="path1"></span><span
                                                                class="path2"></span></span></a></td>
                                            </tr>
                                            <tr>
                                                <td>KBC 401A</td>
                                                <td>Mercedes benz</td>
                                                <td>E200</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div>
                                                            <a href="#"
                                                                class="text-dark font-weight-600 hover-primary mb-1 font-size-16">Mark
                                                                Townhouse</a>
                                                            <span class="text-fade d-block">markt@gmail.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>2011/04/25</td>
                                                <td><a href="#"
                                                        class="waves-effect waves-light btn btn-primary btn-circle mx-5"><span
                                                            class="icon-Arrow-right"><span
                                                                class="path1"></span><span
                                                                class="path2"></span></span></a></td>
                                            </tr>
                                            <tr>
                                                <td>KBC 401A</td>
                                                <td>Mercedes benz</td>
                                                <td>E200</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div>
                                                            <a href="#"
                                                                class="text-dark font-weight-600 hover-primary mb-1 font-size-16">Mark
                                                                Townhouse</a>
                                                            <span class="text-fade d-block">markt@gmail.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>2011/04/25</td>
                                                <td><a href="#"
                                                        class="waves-effect waves-light btn btn-primary btn-circle mx-5"><span
                                                            class="icon-Arrow-right"><span
                                                                class="path1"></span><span
                                                                class="path2"></span></span></a></td>
                                            </tr>
                                            <tr>
                                                <td>KBC 401A</td>
                                                <td>Mercedes benz</td>
                                                <td>E200</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div>
                                                            <a href="#"
                                                                class="text-dark font-weight-600 hover-primary mb-1 font-size-16">Mark
                                                                Townhouse</a>
                                                            <span class="text-fade d-block">alvot@gmail.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>2011/04/25</td>
                                                <td><a href="#"
                                                        class="waves-effect waves-light btn btn-primary btn-circle mx-5"><span
                                                            class="icon-Arrow-right"><span
                                                                class="path1"></span><span
                                                                class="path2"></span></span></a></td>
                                            </tr>

                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Registration</th>
                                                <th>Make</th>
                                                <th>Model</th>
                                                <th>Owner</th>
                                                <th>last serviced</th>
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

    @yield('footer')

    <!-- modal -->
    <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Medium model</h4>
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
                                        <input type="text" name="name" class="form-control" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Phone number</label>
                                        <input type="number" name="phone" class="form-control"
                                            placeholder="Phone Number">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>E-mail</label>
                                        <input type="email" name="email" class="form-control" placeholder="E-mail">
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
                                            placeholder="Registration number">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Make</label>
                                        <input type="text" name="make" class="form-control" placeholder="Make">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Model</label>
                                        <input type="text" name="model" class="form-control" placeholder="Model">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>VIN number</label>
                                        <input type="text" name="vinNo" class="form-control" placeholder="VIN number">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Engine number</label>
                                        <input type="text" name="engineNo" class="form-control"
                                            placeholder="Engine number">
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
