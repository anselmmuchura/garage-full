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
        table.fixed{
            table-layout: fixed;
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
    padding-bottom: 9px;
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
td{
  font-size:12px;
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


    <table class="page" border="0" cellpadding="0" cellspacing="0" width="100%">
        
        <tr>
            <td align="center" style="padding: 0px 10px 0px 10px;">
                <!--[if (gte mso 9)|(IE)]>
            <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
            <tr>
            <td align="center" valign="top" width="600">
            <![endif]-->
                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 100%;">
                    <!-- COPY -->
                    <tr>
                        <td bgcolor="#ffffff" align="left"
                            style="padding:0; color: #666666; font-family: 'Poppins', sans-serif; font-size: 16px; font-weight: 400; line-height: 25px;">
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
                                    <table class="fixed" border="0" cellpadding="0" cellspacing="0" width="100%">
                                     <tr>
                                        <td bgcolor="#ffffff" align="left"  style="width:33%;padding:0; color: #666666;">
                                            <strong>Vehicle: </strong> <span class="text-blue font-size-24"> $vehicle->model </span>
                                        </td>
                                        <td bgcolor="#ffffff" align="left"  style="width:33%;padding:0; color: #666666;">
                                            <strong>Reg: </strong>
                                            <span class="text-blue font-size-24">$vehicle->regNo </span>
                                        </td>
                                        <td bgcolor="#ffffff" align="left"  style="width:33%;padding:0; color: #666666;">
                                            <b>Engine No: </b>
                                            <span class="text-blue font-size-24"> $vehicle->engineNo </span>
                                        </td>
                                      <tr>
                                    </table>
                                    <table class="fixed" border="0" cellpadding="0" cellspacing="0" width="100%">
                                      <tr>
                                        <td bgcolor="#ffffff" align="left"  style="width:33%;padding:0; color: #666666;"><b>VIN:</b>  $vehicle->vinNo </td>
                                        <td bgcolor="#ffffff" align="left"  style="width:33%;padding:0; color: #666666;"><b>Mileage: </b> $session->kilometers  Km</td>
                                        <td bgcolor="#ffffff" align="left"  style="width:33%;padding:0; color: #666666;"><b>Fuel: </b> $session->fuel  %</td>
                                      </tr>
                                    </table>
                                    <table class="fixed" border="0" cellpadding="0" cellspacing="0" width="100%">
                                        <td bgcolor="#ffffff" align="left"  style="width:33%;padding:0; color: #666666;"><b>Client: </b> $vehicle->fullName </td>
                                        <td bgcolor="#ffffff" align="left"  style="width:33%;padding:0; color: #666666;"><b>Time in: </b> $session->created_at </td>
                                        <td bgcolor="#ffffff" align="left"  style="width:33%;padding:0; color: #666666;"><b>Time promised: </b>$session->timeOut</td>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="page-header">
                                        <h4 class="d-inline" style="margin-bottom:0;"><span class="font-size-15">Tasks</span></h4>
                                    </div>
                                    <div class="col-12 table-responsive mb-15">
                                    <table class="table table-bordered">
                                    <tbody>
                                    <tr>
                                    <th align="left">No</th>
                                    <th align="left">Task</th>
                                    <th align="left">Status</th>
                                    </tr>
                                    <tr>
                                    <td> $task->id </td>
                                    <td> $task->todo </td>
                                    <td class="text-right">Done  </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                </div>

                                <div class="col-6 table-responsive">
                                    <div class="page-header">
                                            <h4 class="d-inline" style="margin-bottom:0;"><span class="font-size-15">Inspection</span></h4>
                                    </div>
                                    <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                        <th align="left">Component</th>
                                        <th align="left">Status</th>
                                        </tr>
                                        <tr><td>Rear view mirror</td><td> $component->rear_view_mirror </td></tr>
                                        <tr><td>Windshield</td><td> $component->windshield </td></tr>
                                        <tr><td>Air conditioning operation</td><td> $component->air_conditioning_operation </td></tr>
                                        <tr><td>Dashboard instrumentation</td><td> $component->dash_board_instrumentation </td></tr>
                                        <tr><td>Internal Lighting</td><td> $component->internal_lighting </td></tr>
                                        <tr><td>Floor Carpeting</td><td> $component->floor_carpeting </td></tr>
                                        <tr><td>Tyre Condition</td><td> $component->tyre_condition </td></tr>
                                        <tr><td>Spear Wheel</td><td> $component->spear_wheel </td></tr>
                                        <tr><td>Toolkit</td><td>$component->toolkit </td></tr>
                                        <tr><td>Radio</td><td>$component->radio </td></tr>
                                    </tbody>
                                    </table>
                                </div>

                                <div class="col-6 text-left">
                                        <div class="page-header">
                                              <h4 class="d-inline" style="margin-bottom:0;"><span class="font-size-15">Comments</span></h4>
                                        </div>

                                        <div style="width:100%;    overflow-wrap: normal;">
                                         <table class="table" border="0">
                                            <tbody>
                                                    <tr>
                                                        <td>$comment->comment </td>
                                                    </tr>
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
