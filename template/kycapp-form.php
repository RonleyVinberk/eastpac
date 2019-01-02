<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>EASTPAC | Form KYC Application</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="jquery.dataTables.min.css">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!--DataTables-->
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.css">
  <link rel="stylesheet" href="dist/css/skins/skin-black.css">
    
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="plugins/iCheck/all.css">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
    

<style>
.status {
    padding: 40px 20px;
    border-radius: 4px;
/*    text-align: center;*/
    border: 1px solid #dce6f5;
}
.status-empty .status-icon {
    background: #eff6ff;
    border-color: #c8d8f0;
}

.status-icon {
    position: relative;
    height: 100px;
    width: 100px;
    background: #fff;
    border-radius: 50%;
    text-align: center;
    margin: 0 auto 10px;
/*    border: 2px solid #c8d8f0;*/
}
    
.imgicon{
  margin-top: 20%;      
}
    
.btn-primary {
    background: #2b56f5;
    border-color: #2b56f5;
    box-shadow: 0px 2px 18px 2px rgba(43, 86, 245, 0.25);
}
    
.step-number {
    flex-shrink: 0;
    height: 48px;
    width: 48px;
    font-size: 16px;
    color: #758698;
    border: 2px solid #b1becc;
    text-align: center;
    line-height: 45px;
    border-radius: 50%;
    margin-right: 12px;
    margin-top: 4px;
    margin-bottom: 4px;
}
</style>

<body class="hold-transition skin-black fixed">
<div class="wrapper">

<?php include('page-header.html') ?>
  <!-- Left side column. contains the logo and sidebar -->

<?php include('page-sidebar.html') ?>
  <!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <section class="content">
      <div class="row">
        <div class="col-sm-12" style="margin-top: 10px">
            <div class="box box-warning">
                <div class="box-header with-border">
                    <h2 class="box-title">Begin your ID-Verification</h2>
                    <div class="box-body">
                        <p>Verify your identity to participate in tokensale.</p>

                          <div class="status status-empty">
                                <div class="step-head" style="display: flex; align-items: center"><div class="step-number">01</div><div class="step-head-text"><h4 class="pull-left">Personal Details</h4></div>
                                </div>
                                <hr>
                                
                                <p><i class="fa fa-info-circle" style="color:#f39c12"></i> Please type carefully and fill out the form with your personal details. Your can’t edit these details once you submitted the form.</p>
                                <div class="row">
                                    <div class="col-md-6">
                                         <div class="form-group">
                                            <label for="first-name">First Name</label>
                                            <input type="text" class="form-control" id="first-name" placeholder="">
                                          </div>
                                    </div>
                                    <div class="col-md-6">
                                         <div class="form-group">
                                            <label for="last-name">Last Name</label>
                                            <input type="text" class="form-control" id="last-name" placeholder="">
                                          </div>
                                    </div>
                                  
                                </div>
                                <div class="row">
                                     <div class="col-md-6">
                                         <div class="form-group">
                                            <label for="email">Email Address</label>
                                            <input type="email" class="form-control" id="email" placeholder="">
                                          </div>
                                    </div>
                                    <div class="col-md-6">
                                         <div class="form-group">
                                            <label for="phone">Phone Number</label>
                                            <input type="number" class="form-control" id="phone" placeholder="">
                                          </div>
                                    </div>
                                  
                                </div>
                               <div class="row">
                                    <div class="col-md-6">
                                         <div class="form-group">
                                            <label for="birthdate">Date of Birth</label>
                                            <input type="text" class="form-control" id="birthdate"  data-date-format="yyyy/mm/dd" placeholder="">
                                          </div>
                                    </div>
                                   
                                  
                                </div>
                              
                              <div class="row"><div class="col-md-6"><h4 class="pull-left">Your Address</h4></div></div>
                              <div class="row">
                                    <div class="col-md-6">
                                         <div class="form-group">
                                            <label for="address">Address Line 1</label>
                                            <input type="text" class="form-control" id="address" placeholder="">
                                          </div>
                                    </div>
                                    <div class="col-md-6">
                                         <div class="form-group">
                                            <label for="address2">Address Line 2</label>
                                            <input type="text" class="form-control" id="address2" placeholder="">
                                          </div>
                                    </div>
                              </div>
                              <div class="row">
                                    <div class="col-md-6">
                                         <div class="form-group">
                                            <label for="city">City</label>
                                            <input type="text" class="form-control" id="city" placeholder="">
                                          </div>
                                    </div>
                                    <div class="col-md-6">
                                         <div class="form-group">
                                            <label for="state">State</label>
                                            <input type="text" class="form-control" id="state" placeholder="">
                                          </div>
                                    </div>
                              </div>
                              <div class="row">
                                    <div class="col-md-6">
                                         <div class="form-group">
                                            <label for="nationality">Nationality</label>
                                            <input type="text" class="form-control" id="nationality" placeholder="">
                                          </div>
                                    </div>
                                    <div class="col-md-6">
                                         <div class="form-group">
                                            <label for="zip-code">Zip Code</label>
                                            <input type="text" class="form-control" id="zip-code" placeholder="">
                                          </div>
                                    </div>
                              </div>
                              <hr>
                              <div class="step-head" style="display: flex; align-items: center"><div class="step-number">02</div><div class="step-head-text"><h4 class="pull-left">Document Upload</h4></div>
                              </div>
                              <hr>
                              <p><i class="fa fa-info-circle" style="color:#f39c12"></i> In order to complete, please upload any of the following personal document.</p>
                              <div class="row">
                                <div class="col-md-6">
                                    <p><b>To avoid delays when verifying account, Please make sure bellow:</b></p>
                                    <p><i class="fa fa-check"></i> Chosen credential must not be expaired.</p>
                                    <p><i class="fa fa-check"></i> Document should be good condition and clearly visible.</p>
                                    <p><i class="fa fa-check"></i> Make sure that there is no light glare on the card.</p>
                                    <br>
                                    <p><b>Upload Here Your Passport Copy</b></p>
                                </div>
                              </div>
                              <hr>
                                 <div class="step-head" style="display: flex; align-items: center"><div class="step-number">03</div><div class="step-head-text"><h4 class="pull-left">Your Paying Wallet</h4></div>
                                 </div>
                              <hr>
                              <div class="row" style="display:none;">
                                    <div class="col-md-6">
                                         <div class="form-group">
                                            <label for="wallet">Select Wallet</label>
                                            <select id="wallet"><option value="1">Ethereum</option></select>
                                          </div>
                                    </div>
                              </div>
                              <div class="row">
                                    <div class="col-md-6">
                                         <div class="form-group">
                                            <label for="nationality">Your Address for tokens:</label>
                                            <input type="text" class="form-control" id="nationality" value="0xFf2463e6c45B6263638168c54e8049842dFB73dF">
                                             <small style="color:grey;">Note: Address should be ERC20-compliant.</small>
                                          </div>
                                    </div>
                                    
                              </div>
                              <div class="row">
                                    <div class="col-md-6">
                                         <div class="form-group">
                                             <label>
                                              <input type="checkbox" class="minimal-red">
                                              I Have Read The Terms Of Condition And Privary Policy.
                                             </label>
                                          </div>
                                          <div class="form-group">
                                             <label>
                                              <input type="checkbox" class="minimal-red">
                                              All The Personal Information I Have Entered Is Correct.
                                             </label>
                                          </div>
                                    </div>
                                    
                              </div>
                          </div>

                    </div>
              </div>
                
           
          </div>
        </div>
      </div>
      
</section>

</div>
</div>
<!--Footer section-->
<?php include('page-footer.html'); ?>

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap  -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/moment.min.js"></script>
<script src="bower_components/chart.js/Chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.bundle.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="dist/js/pages/dashboard2.js"></script> -->
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="bower_components/Flot/jquery.flot.js"></script>
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script src="bower_components/Flot/jquery.flot.resize.js"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<script src="bower_components/Flot/jquery.flot.pie.js"></script>
<!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
<script src="bower_components/Flot/jquery.flot.categories.js"></script>
<script src="bower_components/chart.js/amcharts.js"></script>
<script src="bower_components/chart.js/serial.js"></script>
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="plugins/iCheck/icheck.min.js"></script>
<script>
    //Date picker
    $('#birthdate').datepicker({
      autoclose: true
    })
    
     //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
</script>

</body>
</html>