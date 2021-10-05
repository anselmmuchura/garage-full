
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        ss
    </title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" >
<style media="screen">
  .row {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
}
.text-right {
    text-align: right!important;
}
.col, .col-1, .col-10, .col-11, .col-12, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-auto, .col-lg, .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-auto, .col-md, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-auto, .col-sm, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-auto, .col-xl, .col-xl-1, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-auto {
    position: relative;
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
}
.col-6 {
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%;
}
.col-12 {
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%;
}
@media (min-width: 768px){
  .col-md-6 {
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%;
}
}
.col-3 {
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%;
}
.mb-15 {
    margin-bottom: 10px;
}
.clearfix::after {
    display: block;
    clear: both;
    content: "";
}
.d-inline {
    display: inline!important;
}
.h2 {
    font-size: 2rem;
}
.h3 {
    font-size: 1.75rem;
}
.h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
    margin-bottom: .5rem;
    font-weight: 500;
    line-height: 1.2;
}
.table-responsive>.table-bordered {
    border: 0;
}
.table {
    width: 100%;
    margin-bottom: 1rem;
    color: #212529;
}
table {
    border-collapse: collapse;
}
.table-bordered td, .table-bordered th {
    border: 1px solid #dee2e6;
}
.table td, .table th {
    padding: .75rem;
    vertical-align: top;
}


  .page-header {
    margin: 10px 0 20px;
    padding-bottom: 9px;
    border-bottom: 1px solid #e6e6e6;
}

.invoice {
    position: relative;
    background: #ffffff;
    border: 1px solid #d5dfea;
    padding: 20px;
    margin: 10px 10px;
}

.invoice-details {
    background-color: #fff;
    margin-bottom: 15px;
    border: 1px solid #cccccc;
    padding-top: 15px;
    padding-bottom: 15px;
}

.mb-15{
  margin-bottom:10px;
}

hr {
    margin-top: .5rem;
    margin-bottom: .5rem;
    border: 0;
    border-top: 1px solid rgba(0,0,0,.1);
}
</style>

</head>

<body class="hold-transition dark-skin sidebar-mini theme-primary sidebar-collapse">
    <div id="app">
    <section class="invoice printableArea" style="padding:30px">
      <div class="row">
      <div class="col-12">
        <div class="bb-1 clearFix">
        </div>
      </div>
      <div class="col-12">
        <div class="page-header">
        <h2 class="d-inline"><span class="font-size-30">Star Autocare </span></h2>
        <div class="pull-right text-right">
          <h3>Service card</h3>
        </div>
        </div>
      </div>
      <!-- /.col -->
      </div>
      <div class="row invoice-info">
      <div class="col-6 invoice-col">
        <strong>Vehicle: </strong>
        <address>
           <strong class="text-blue font-size-24">Mercedes 560SEL</strong><br>
         </address>
      </div>
      <!-- /.col -->
      <div class="col-6 invoice-col text-right">
        <strong>Reg: </strong>
        <address>
        <strong class="text-blue font-size-24">KAG 333V</strong><br><br>

        </address>
      </div>
      <!-- /.col -->
      <div class="col-12 invoice-col mb-15">
        <div class="invoice-details row no-margin">
          <div class="col-md-6 col-lg-3 col-3"><b>Engine number: </b>117</div>
          <div class="col-md-6 col-lg-3 col-3"><b>VIN:</b> FC12548</div>
          <div class="col-md-6 col-lg-3 col-3"><b>Mileage: </b>12000KM</div>
          <div class="col-md-6 col-lg-3 col-3"><b>Fuel: </b>20%</div>
        </div>
      </div>
      <div class="col-12 invoice-col mb-15">
        <div class="invoice-details row no-margin">
          <div class="col-md-6 col-lg-3 col-3"><b>Client name:</b>Charles</div>
          <div class="col-md-6 col-lg-3 col-3"><b>Time in: </b>12/14/2021 9:45pm</div>
          <div class="col-md-6 col-lg-3 col-3"><b>Time promised: </b>12/14/2021 9:55pm</div>
        </div>
      </div><!-- /.col -->
      </div>
      <div class="row">
          <div class="page-header" style="margin: 10px 0 20px 10px;">
             <h6 class="d-inline"><span class="font-size-15">Tasks</span></h6>
          </div>
        <div class="col-12 table-responsive mb-15">
            <table class="table table-bordered">
            <tbody>
            <tr>
              <th>#</th>
              <th>Tasks</th>
              <th class="text-right">Status</th>
            </tr>
            <tr>
              <td>1</td>
              <td>Do a paint job</td>
              <td class="text-right"><i>Done</i></td>
            </tr>
            <tr>
              <td>2</td>
              <td>Change disk brakes</td>
              <td class="text-right"><i>Pending</i></td>
            </tr>

            </tbody>
            </table>
      </div>

      <div class="col-6 table-responsive mb-15">
        <div class="page-header" style="margin: 10px 0 20px 10px;">
              <h6 class="d-inline"><span class="font-size-15">Inspection</span></h6>
        </div>
        <table class="table table-bordered">
        <tbody>
        <tr>
          <th>#</th>
          <th>Inspected item</th>
          <th class="text-right">Condition</th>
        </tr>
        <tr>
          <td>1</td>
          <td>Rear view mirror</td>
          <td class="text-right">N/I</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Windshield</td>
          <td class="text-right">Needs fixing</td>
        </tr>
        <tr>
          <td>3</td>
          <td>Air conditioning operation</td>
          <td class="text-right">Good</td>
        </tr>

        </tbody>
        </table>
      </div>

    <div class="col-6 text-left">
        <div class="page-header" style="margin: 10px 0 20px 10px;">
              <h6 class="d-inline"><span class="font-size-15">Comments</span></h6>
        </div>

        <div style="border: 1px solid #cccccc;padding: 10px;">
            <i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
            molestiae quas vel sint</i><hr>
            <i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
            molestiae quas vel sint</i><hr>
            <i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
            molestiae quas vel sint</i><hr>
        </div>


      </div><!-- /.col -->
      </div>


    </section>
    </div>

</body>

</html>