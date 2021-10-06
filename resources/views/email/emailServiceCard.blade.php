<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <style type="text/css">
        /* FONTS */
        @import url('https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i');

        /* CLIENT-SPECIFIC STYLES */
        body,
        table,
        td,
        a {
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }

        table,
        td {
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
        }

        img {
            -ms-interpolation-mode: bicubic;
        }

        /* RESET STYLES */
        img {
            border: 0;
            height: auto;
            line-height: 100%;
            outline: none;
            text-decoration: none;
        }

        table {
            border-collapse: collapse !important;
        }

        body {
            height: 100% !important;
            margin: 0 !important;
            padding: 0 !important;
            width: 100% !important;
        }

        /* iOS BLUE LINKS */
        a[x-apple-data-detectors] {
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }

        /* MOBILE STYLES */
        @media screen and (max-width:600px) {
            h1 {
                font-size: 32px !important;
                line-height: 32px !important;
            }
        }

        /* ANDROID CENTER FIX */
        div[style*="margin: 16px 0;"] {
            margin: 0 !important;
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
    padding: 20px ;
    margin: 10px 10px;
}

.invoice-details {
    background-color: #fff;
    margin-bottom: 15px;
    border: 1px solid #cccccc;
    padding: 15px 20px;
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
.table-bordered {
    border: 1px solid #dee2e6;
}
.table {
    width: 100%;
    margin-bottom: 1rem;
    background-color: transparent;
}
.table-bordered td, .table-bordered th {
    border: 1px solid #dee2e6;
}
@media print {
    .page {
        clear: both;
        page-break-before: always;
    }
}
    </style>
</head>

<body style="background-color: #f3f5f7; margin: 0 !important; padding: 0 !important;">


    <table class="page" border="0" cellpadding="0" cellspacing="0" width="100%" style="page-break-after: always;">
        <!-- LOGO -->
        <tr>
            <td align="center">
                <!--[if (gte mso 9)|(IE)]>
            <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
            <tr>
            <td align="center" valign="top" width="600">
            <![endif]-->
                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 700px;">
                    <tr>
                        <td align="center" valign="top" style="padding: 40px 10px 10px 10px;">
                            <a href="#" target="_blank" style="text-decoration: none;">
                                <span
                                    style="display: block; font-family: 'Poppins', sans-serif; color: #3e8ef7; font-size: 36px;"
                                    border="0"><b style="color:#ff4c52">Star</b> Auto</span>
                            </a>
                        </td>
                    </tr>
                </table>
                <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
            </td>
        </tr>
        <!-- COPY BLOCK -->
        <tr>
            <td align="center" style="padding: 0px 10px 0px 10px;">
                <!--[if (gte mso 9)|(IE)]>
            <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
            <tr>
            <td align="center" valign="top" width="600">
            <![endif]-->
                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                    <!-- COPY -->
                    <tr>
                        <td bgcolor="#ffffff" align="left"
                            style="padding:0; color: #666666; font-family: 'Poppins', sans-serif; font-size: 16px; font-weight: 400; line-height: 25px;">
                            <section class="invoice printableArea" style="padding:30px">
                            <div class="pull-right text-right">
                              <h2>Service card</h2>
                              <hr>
                            </div>
 
    		  <div class="row invoice-info">
              <div class="col-12 invoice-col">
                <strong>Vehicle: </strong> <span class="text-blue font-size-24">{{ $vehicle->make }} {{ $vehicle->model }}</span><br>
              </div>
              <!-- /.col -->
              <div class="col-12 invoice-col text-right">
                <strong>Reg: </strong>
                <span class="text-blue font-size-24">{{ $vehicle->regNo }}</span><br><br>

                </address>
              </div>
              <!-- /.col -->
              <div class="col-12 invoice-col mb-15">
                <div class="invoice-details row no-margin">
                  <div class="col-md-6 col-lg-3 col-3"><b>Engine number: </b>{{ $vehicle->engNo }}</div>
                  <div class="col-md-6 col-lg-3 col-3"><b>VIN:</b> {{ $vehicle->vinNo }}</div>
                  <div class="col-md-6 col-lg-3 col-3"><b>Mileage: </b>{{ $session->kilometers }}</div>
                  <div class="col-md-6 col-lg-3 col-3"><b>Fuel: </b>{{ $session->fuel }} %</div>
                </div>
              </div>
              <div class="col-12 invoice-col mb-15">
                <div class="invoice-details row no-margin">
                  <div class="col-md-6 col-lg-3 col-3"><b>Client name:</b>{{ $vehicle->fullName }}</div>
                  <div class="col-md-6 col-lg-3 col-3"><b>Time in: </b>{{ $session->created_at }}</div>
                  <div class="col-md-6 col-lg-3 col-3"><b>Time promised: </b>{{$session->timeOut}}</div>
                </div>
              </div><!-- /.col -->
              </div>
              <div class="row">
                  <div class="page-header" style="margin: 10px 0 20px 10px;">
                    <h4 class="d-inline" style="margin-bottom:0;"><span class="font-size-15">Tasks</span></h4>
                  </div>
                <div class="col-12 table-responsive">
                <table class="table table-bordered">
                <tbody>
                <tr>
                  
                </tr>
                @foreach($tasks as $task)
                  <th>{{ $task->todo }}}</th>
                  <th class="text-right">@if($task->checked === true)Done @else Pending @endif</th>
                @endforeach
                </tbody>
                </table>
              </div>

    	    </div>


    		</section>
                        </td>
                    </tr>
                    
                </table>
                <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
            </td>
        </tr>
        <!-- FOOTER -->
        <tr>
            <td align="center" style="padding: 10px 10px 50px 10px;">
                <!--[if (gte mso 9)|(IE)]>
            <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
            <tr>
            <td align="center" valign="top" width="600">
            <![endif]-->
                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                    <!-- COPYRIGHT -->
                    <tr>
                        <td align="center"
                            style="padding: 30px 30px 30px 30px; color: #333333; font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 400; line-height: 18px;">
                            <p style="margin: 0;">Copyright © 2021. All rights reserved.</p>
                        </td>
                    </tr>
                </table>
                <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
            </td>
        </tr>
    </table>


    <table class="page" border="0" cellpadding="0" cellspacing="0" width="100%">
        <!-- LOGO -->
        <tr>
            <td align="center">
                <!--[if (gte mso 9)|(IE)]>
            <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
            <tr>
            <td align="center" valign="top" width="600">
            <![endif]-->
                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 700px;">
                    <tr>
                        <td align="center" valign="top" style="padding: 40px 10px 10px 10px;">
                            <a href="#" target="_blank" style="text-decoration: none;">
                                <span
                                    style="display: block; font-family: 'Poppins', sans-serif; color: #3e8ef7; font-size: 36px;"
                                    border="0"><b style="color:#ff4c52">Star</b> Auto</span>
                            </a>
                        </td>
                    </tr>
                </table>
                <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
            </td>
        </tr>
        <!-- COPY BLOCK -->
        <tr>
            <td align="center" style="padding: 0px 10px 0px 10px;">
                <!--[if (gte mso 9)|(IE)]>
            <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
            <tr>
            <td align="center" valign="top" width="600">
            <![endif]-->
                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 700px;">
                    <!-- COPY -->
                    <tr>
                        <td bgcolor="#ffffff" align="left"
                            style="padding:0; color: #666666; font-family: 'Poppins', sans-serif; font-size: 16px; font-weight: 400; line-height: 25px;">
                            <section class="invoice printableArea" style="padding:30px">
 
                                <div class="row invoice-info">
                                      <div class="col-6 table-responsive">
                                        <div class="page-header" style="margin: 10px 0 20px 10px;">
                                              <h4 class="d-inline" style="margin-bottom:0;"><span class="font-size-15">Inspection</span></h4>
                                        </div>
                                        <table class="table table-bordered">
                                        <tbody>
                                          @foreach($tasks as $task)
                                            <th>{{ $task->todo }}}</th>
                                            <th class="text-right">@if($task->checked === true)Done @else Pending @endif</th>
                                          @endforeach
                                        </tbody>
                                        </table>
                                      </div>

                                      <div class="col-6 text-left">
                                        <div class="page-header" style="margin: 10px 0 20px 10px;">
                                              <h4 class="d-inline" style="margin-bottom:0;"><span class="font-size-15">Comments</span></h4>
                                        </div>

                                        <div>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                                            molestiae quas vel sint</p><hr>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                                            molestiae quas vel sint</p><hr>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                                            molestiae quas vel sint</p><hr>
                                        </div>


                                      </div><!-- /.col -->
                                </div>


                            </section>
                </td>
            </tr>
            
        </table>
        <!--[if (gte mso 9)|(IE)]>
    </td>
    </tr>
    </table>
    <![endif]-->
    </td>
</tr>
<!-- FOOTER -->
<tr>
    <td align="center" style="padding: 10px 10px 50px 10px;">
        <!--[if (gte mso 9)|(IE)]>
    <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
    <tr>
    <td align="center" valign="top" width="600">
    <![endif]-->
        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 700px;">

            <!-- COPYRIGHT -->
            <tr>
                <td align="center"
                    style="padding: 30px 30px 30px 30px; color: #333333; font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 400; line-height: 18px;">
                    <p style="margin: 0;">Copyright © 2021. All rights reserved.</p>
                </td>
            </tr>
        </table>
        <!--[if (gte mso 9)|(IE)]>
    </td>
    </tr>
    </table>
    <![endif]-->
    </td>
</tr>
</table>

</body>

<!-- Mirrored from adnix-admin-template.multipurposethemes.com/main-dark-mini-sidebar/email_welcome.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 22 Sep 2021 15:36:22 GMT -->

</html>
