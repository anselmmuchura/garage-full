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
                    <h3 class="page-title">Inspection</h3>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                <li class="breadcrumb-item" aria-current="page">client</li>
                                <li class="breadcrumb-item active" aria-current="page">Inspection</li>
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
                        <div class="box-header">
                            <h4 class="box-title">{{ $vehicle->regNo }} {{ $vehicle->make }} {{ $vehicle->model }}
                            </h4>
                        </div>

                        <form method="POST"
                            action="{{ route('components.update', $component->id) }}">
                            @csrf
                            @method('put')
                            <!-- .box-header -->
                            <div class="box-header with-border">
                                <i class="fa fa-check-circle text-black"></i>
                                <h5 class="box-title">Rear view mirror</h5>
                            </div>

                            <input type="hidden" name="vehicle_id" value="{{ $vehicle->id }}">

                            <input type="hidden" name="session_id" value="{{ $sessions->id }}">

                            <div class="box-body">

                                <div class="demo-radio-button">
                                    <input name="rear_view_mirror" type="radio" id="radio_30" value="N/A"
                                        class="with-gap radio-col-primary" @if($component->rear_view_mirror ===
                                    'N/A')checked="" @endif>
                                    <label for="radio_30">{{ $component->rear_view_mirror }}</label>
                                    <input name="rear_view_mirror" type="radio" id="radio_32" value="Good"
                                        class="with-gap radio-col-success" @if($component->rear_view_mirror ===
                                    'Good')checked="" @endif>
                                    <label for="radio_32">Good</label>
                                    <input name="rear_view_mirror" type="radio" id="radio_33" value="Fix"
                                        class="with-gap radio-col-info" @if($component->rear_view_mirror ===
                                    'Fix')checked="" @endif>
                                    <label for="radio_33">Fix</label>

                                </div>

                            </div>

                            <!-- .box-header -->
                            <div class="box-header with-border">
                                <i class="fa fa-check-circle text-black"></i>
                                <h5 class="box-title">Windshield</h5>
                            </div>
                            <div class="box-body">

                                <div class="demo-radio-button">
                                    <input name="windshield" type="radio" id="radio_34" value="N/A"
                                        class="with-gap radio-col-primary" @if($component->windshield ===
                                    'N/A')checked="" @endif>
                                    <label for="radio_34">N/A</label>
                                    <input name="windshield" type="radio" id="radio_35" value="Good"
                                        class="with-gap radio-col-success" @if($component->windshield ===
                                    'Good')checked="" @endif>
                                    <label for="radio_35">Good</label>
                                    <input name="windshield" type="radio" id="radio_36" value="Fix"
                                        class="with-gap radio-col-info" @if($component->windshield === 'Fix')checked=""
                                    @endif>
                                    <label for="radio_36">Fix</label>

                                </div>

                            </div>

                            <!-- .box-header -->
                            <div class="box-header with-border">
                                <i class="fa fa-check-circle text-black"></i>
                                <h5 class="box-title">Air Conditioning Operation</h5>
                            </div>
                            <div class="box-body">

                                <div class="demo-radio-button">
                                    <input name="air_conditioning_operation" type="radio" id="radio_37" value="N/A"
                                        class="with-gap radio-col-primary" @if($component->air_conditioning_operation
                                    === 'N/A')checked="" @endif>
                                    <label for="radio_37">N/A</label>
                                    <input name="air_conditioning_operation" type="radio" id="radio_38" value="Good"
                                        class="with-gap radio-col-success" @if($component->air_conditioning_operation
                                    === 'Good')checked="" @endif>
                                    <label for="radio_38">Good</label>
                                    <input name="air_conditioning_operation" type="radio" id="radio_39" value="Fix"
                                        class="with-gap radio-col-info" @if($component->air_conditioning_operation ===
                                    'Fix')checked="" @endif>
                                    <label for="radio_39">Fix</label>

                                </div>

                            </div>

                            <!-- .box-header -->
                            <div class="box-header with-border">
                                <i class="fa fa-check-circle text-black"></i>
                                <h5 class="box-title">Dash Board Instrumentation</h5>
                            </div>
                            <div class="box-body">

                                <div class="demo-radio-button">
                                    <input name="dash_board_instrumentation" type="radio" id="radio_40" value="N/A"
                                        class="with-gap radio-col-primary" @if($component->dash_board_instrumentation
                                    === 'N/A')checked="" @endif>
                                    <label for="radio_40">N/A</label>
                                    <input name="dash_board_instrumentation" type="radio" id="radio_41" value="Good"
                                        class="with-gap radio-col-success" @if($component->dash_board_instrumentation
                                    === 'Good')checked="" @endif>
                                    <label for="radio_41">Good</label>
                                    <input name="dash_board_instrumentation" type="radio" id="radio_42" value="Fix"
                                        class="with-gap radio-col-info" @if($component->dash_board_instrumentation ===
                                    'Fix')checked="" @endif>
                                    <label for="radio_42">Fix</label>

                                </div>

                            </div>

                            <!-- .box-header -->
                            <div class="box-header with-border">
                                <i class="fa fa-check-circle text-black"></i>
                                <h5 class="box-title">Internal Lighting</h5>
                            </div>
                            <div class="box-body">

                                <div class="demo-radio-button">
                                    <input name="internal_lighting" type="radio" id="radio_43" value="N/A"
                                        class="with-gap radio-col-primary" @if($component->internal_lighting ===
                                    'N/A')checked="" @endif>
                                    <label for="radio_43">N/A</label>
                                    <input name="internal_lighting" type="radio" id="radio_44" value="Good"
                                        class="with-gap radio-col-success" @if($component->internal_lighting ===
                                    'Good')checked="" @endif>
                                    <label for="radio_44">Good</label>
                                    <input name="internal_lighting" type="radio" id="radio_45" value="Fix"
                                        class="with-gap radio-col-info" @if($component->internal_lighting ===
                                    'Fix')checked="" @endif>
                                    <label for="radio_45">Fix</label>

                                </div>

                            </div>

                            <!-- .box-header -->
                            <div class="box-header with-border">
                                <i class="fa fa-check-circle text-black"></i>
                                <h5 class="box-title">Floor Carpeting</h5>
                            </div>
                            <div class="box-body">

                                <div class="demo-radio-button">
                                    <input name="floor_carpeting" type="radio" id="radio_46" value="N/A"
                                        class="with-gap radio-col-primary" @if($component->floor_carpeting ===
                                    'N/A')checked="" @endif>
                                    <label for="radio_46">N/A</label>
                                    <input name="floor_carpeting" type="radio" id="radio_47" value="Good"
                                        class="with-gap radio-col-success" @if($component->floor_carpeting ===
                                    'Google')checked="" @endif>
                                    <label for="radio_47">Good</label>
                                    <input name="floor_carpeting" type="radio" id="radio_48" value="Fix"
                                        class="with-gap radio-col-info" @if($component->floor_carpeting ===
                                    'Fix')checked="" @endif>
                                    <label for="radio_48">Fix</label>

                                </div>

                            </div>

                            <!-- .box-header -->
                            <div class="box-header with-border">
                                <i class="fa fa-check-circle text-black"></i>
                                <h5 class="box-title">Tyre Condition</h5>
                            </div>
                            <div class="box-body">

                                <div class="demo-radio-button">
                                    <input name="tyre_condition" type="radio" id="radio_49" value="N/A"
                                        class="with-gap radio-col-primary" @if($component->tyre_condition ===
                                    'N/A')checked="" @endif>
                                    <label for="radio_49">N/A</label>
                                    <input name="tyre_condition" type="radio" id="radio_50" value="Good"
                                        class="with-gap radio-col-success" @if($component->tyre_condition ===
                                    'Good')checked="" @endif>
                                    <label for="radio_50">Good</label>
                                    <input name="tyre_condition" type="radio" id="radio_51" value="Fix"
                                        class="with-gap radio-col-info" @if($component->tyre_condition ===
                                    'Fix')checked="" @endif>
                                    <label for="radio_51">Fix</label>

                                </div>

                            </div>

                            <!-- .box-header -->
                            <div class="box-header with-border">
                                <i class="fa fa-check-circle text-black"></i>
                                <h5 class="box-title">Spear Wheel</h5>
                            </div>
                            <div class="box-body">

                                <div class="demo-radio-button">
                                    <input name="spear_wheel" type="radio" id="radio_52" value="N/A"
                                        class="with-gap radio-col-primary" @if($component->spear_wheel ===
                                    'N/A')checked="" @endif>
                                    <label for="radio_52">N/A</label>
                                    <input name="spear_wheel" type="radio" id="radio_53" value="Good"
                                        class="with-gap radio-col-success" @if($component->spear_wheel ===
                                    'Good')checked="" @endif>
                                    <label for="radio_53">Good</label>
                                    <input name="spear_wheel" type="radio" id="radio_54" value="Fix"
                                        class="with-gap radio-col-info" @if($component->spear_wheel === 'Fix')checked=""
                                    @endif>
                                    <label for="radio_54">Fix</label>

                                </div>

                            </div>

                            <!-- .box-header -->
                            <div class="box-header with-border">
                                <i class="fa fa-check-circle text-black"></i>
                                <h5 class="box-title">Toolkit</h5>
                            </div>
                            <div class="box-body">

                                <div class="demo-radio-button">
                                    <input name="toolkit" type="radio" id="radio_55" class="with-gap radio-col-primary"
                                        value="N/A" <blade
                                        if|(%24component-%3Etoolkit%20%3D%3D%3D%20%26%2339%3BN%2FA%26%2339%3B)checked%3D%26%2334%3B%26%2334%3B%20%40endif%3E%0D>
                                    <label for="radio_55">N/A</label>
                                    <input name="toolkit" type="radio" id="radio_56" class="with-gap radio-col-success"
                                        value="Good" @if($component->toolkit === 'Good')checked="" @endif>
                                    <label for="radio_56">Good</label>
                                    <input name="toolkit" type="radio" id="radio_57" class="with-gap radio-col-info"
                                        value="Fix" @if($component->toolkit === 'Fix')checked="" @endif>
                                    <label for="radio_57">Fix</label>

                                </div>

                            </div>

                            <!-- .box-header -->
                            <div class="box-header with-border">
                                <i class="fa fa-check-circle text-black"></i>
                                <h5 class="box-title">Radio</h5>
                            </div>
                            <div class="box-body">

                                <div class="demo-radio-button">
                                    <input name="radio" type="radio" id="radio_58" class="with-gap radio-col-primary"
                                        value="N/A" <blade
                                        if|(%24component-%3Eradio%20%3D%3D%3D%20%26%2339%3BN%2FA%26%2339%3B)checked%3D%26%2334%3B%26%2334%3B%20%40endif%3E%0D>
                                    <label for="radio_58">N/A</label>
                                    <input name="radio" type="radio" id="radio_59" class="with-gap radio-col-success"
                                        value="Good" @if($component->radio === 'Good')checked="" @endif>
                                    <label for="radio_59">Good</label>
                                    <input name="radio" type="radio" id="radio_60" class="with-gap radio-col-info"
                                        value="Fix" @if($component->radio === 'Fix')checked="" @endif>
                                    <label for="radio_60">Fix</label>

                                </div>

                            </div>



                            <div class="box-body">
                                <!-- Date -->
                                <div class="form-group">

                                    <div class="input-group date">
                                        <button type="submit"
                                            class="waves-effect waves-light btn btn-outline btn-rounded btn-warning mb-5 btn-sm"
                                            data-toggle="modal" data-target="#myModal">Save</button>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->
                            </div>
                            <!-- /.box-body -->
                        </form>

                    </div>
                    <!-- /.box -->
                </div>
                <!-- ./col -->
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

@endsection
