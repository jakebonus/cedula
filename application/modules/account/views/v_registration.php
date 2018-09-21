<!DOCTYPE html>
<html lang="en">

  <head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-38967746-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-38967746-2');
</script>


   <?php define("VERSION", "2.0.0"); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo (isset($title)) ? $title . ' | CAS' : ' Cedula Application System'; ?></title>
    <link rel="icon" href="<?php echo base_url('build/images/logo.png'); ?>">
    <link href="<?php echo base_url('vendors/bootstrap/dist/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('vendors/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('vendors/nprogress/nprogress.min.css'); ?>" rel="stylesheet">

    <!-- <link rel="stylesheet" href="<?php // echo base_url('vendors/pdatatables/jquery.dataTables.min.css'); ?>"> -->

    <link href="<?php echo base_url('vendors/pnotify/dist/pnotify.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('vendors/pnotify/dist/pnotify.buttons.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('vendors/formvalidation/formValidation.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('vendors/select2/dist/css/select2.css'); ?>" rel="stylesheet">

    <!-- <link href="<?php // echo base_url('vendors/bootstrap-datepicker-master/dist/css/bootstrap-datepicker.min.css'); ?>" rel="stylesheet"> -->

    <!-- <link href="<?php // echo base_url('vendors/easyautocomplete/easy-autocomplete.min.css'); ?>" rel="stylesheet"> -->

    <!-- <link href="<?php // echo base_url('vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css'); ?>" rel="stylesheet"/> -->

    <link href="<?php echo base_url('build/css/custom.css?v='.VERSION); ?>" rel="stylesheet">
    <link href="<?php echo base_url('build/css/styles.css?v='.VERSION); ?>" rel="stylesheet">
    <script src='https://www.google.com/recaptcha/api.js'></script>

    <!-- <script type="text/javascript">

var verifyCallback = function(response) {
  alert(response);
};

var onloadCallback = function() {
  alert("grecaptcha is ready!");
};

</script>
<script type="text/javascript">

var onloadCallback = function() {
  grecaptcha.render('registration', {
    'sitekey' : '6LcGDF0UAAAAAL8MRkYSKFIRDaYKLXH6ayD3UseJ'
  });
};
grecaptcha.render('registration', {
    'sitekey' : '6LcGDF0UAAAAAL8MRkYSKFIRDaYKLXH6ayD3UseJ',
    'callback' : verifyCallback,
    'theme' : 'dark'
  });
</script> -->
  </head>
  <body>

    <div class="container body">
      <div class="main_container">
        <!-- page content -->
        <br/><br/>
            <div class="row">
              <div class="col-lg-offset-3 col-md-offset-3 col-sm-offset-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <form id="frm_personalinfo" name="frm_personalinfo">
                <!-- <div id="registration"> -->
                <div class="x_panel">
                    <div class="x_title">
                      <h3><center><strong>CEDULA</strong> Online Application <sup><?php echo VERSION; ?></sup></center></h3>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                      <div class="row">
                        <div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
                          <label class="control-label"><strong> First Name:</strong><span>*</span></label>
                          <input type="text" class="form-control input-sm" id="fname" name="fname"  required>
                        </div>
                        <div class="form-group col-lg-4 col-md-4 col-sm-8 col-xs-12">
                          <label class="control-label"> Middle Name:</label>
                          <input type="text" class="form-control input-sm" id="mname" name="mname">
                        </div>
                        <div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
                          <label class="control-label"> <strong>Last Name:</strong><span>*</span></label>
                          <input type="text" class="form-control input-sm" id="lname" name="lname"  required >
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-4">
                          <label class="control-label"> <strong>Birth date :</strong><span>*</span></label>
                          <input type="text" class="form-control input-sm date"  id="birthdate" name="birthdate"  required>
                        </div>
                        <div class="form-group col-lg-4 col-md-4 col-sm-8 col-xs-8">
                          <label class="control-label"> <strong>Birth place :</strong><span>*</span></label>
                          <input type="text" class="form-control input-sm"  id="birthplace" name="birthplace" required>
                        </div>
                        <div class="form-group col-lg-4 col-md-4 col-sm-6 col-xs-12">
                          <label class="control-label"> <strong>Citizenship :</strong><span>*</span></label>
                          <input type="text" class="form-control input-sm" id="citizenship" name="citizenship" value="FILIPINO"  required>
                        </div>
                      </div>
                      <div class="row">
                      <div class="form-group col-lg-4 col-md-4 col-sm-6 col-xs-12">
                          <label class="control-label"> FERNANDINO ID # :</label>
                          <input type="text" class="form-control input-sm" id="fernandinonum" name="fernandinonum" >
                        </div>
                        <div class="form-group col-lg-4 col-md-4 col-sm-6 col-xs-12">
                          <label class="control-label"> HOUSE # :</label>
                          <input type="text" class="form-control input-sm" id="housenum" name="housenum">
                        </div>
                        <div class="form-group col-lg-4 col-md-4 col-sm-6 col-xs-12">
                          <label class="control-label"> <strong>BARANGAY :</strong><span>*</span></label>
                          <input type="text" class="form-control input-sm" id="brgy" name="brgy"  required>
                        </div>
                        <div class="form-group col-lg-4 col-md-4 col-sm-6 col-xs-12">
                          <label class="control-label"> <strong>MUNICIPALITY :</strong><span>*</span></label>
                          <input type="text" class="form-control input-sm" id="city" name="city" value="CITY OF SAN FERNANDO"  required>
                        </div>
                        <div class="form-group col-lg-4 col-md-4 col-sm-6 col-xs-12">
                          <label class="control-label"> <strong>PROVINCE :</strong><span>*</span></label>
                          <input type="text" class="form-control input-sm" id="province" name="province" value="PAMPANGA"  required>
                        </div>
                        <div class="form-group col-lg-4 col-md-4 col-sm-6 col-xs-12">
                          <label class="control-label"> Contact # </label>
                          <input type="text" class="form-control input-sm mobilenum" id="mobilenum" name="mobilenum">
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-lg-4 col-md-4 col-sm-6 col-xs-12">
                          <label class="control-label"> TIN :</label>
                          <input type="text" class="form-control input-sm" id="tin" name="tin">
                        </div>
                        <div class="form-group col-lg-4 col-md-4 col-sm-6 col-xs-6">
                          <label class="control-label"> <strong>Gender :</strong><span>*</span></label>
                          <select class="form-control input-sm" id="gender" name="gender" required>
                              <option value="">- - Choose - -</option>
                              <option value="M">MALE</option>
                              <option value="F">FEMALE</option>
                          </select>
                        </div>
                        <div class="form-group col-lg-4 col-md-4 col-sm-6 col-xs-6">
                          <label class="control-label"><strong> Civil Status :</strong><span>*</span></label>
                          <select class="form-control input-sm" id="civilstatus" name="civilstatus" required>
                              <option value="">- - Choose - -</option>
                              <option value="SINGLE">SINGLE </option>
                              <option value="MARRIED ">MARRIED </option>
                              <option value="WIDOWED ">WIDOWED </option>
                              <option value="SEPARATED ">SEPARATED </option>
                              <option value="DIVORCED ">DIVORCED </option>
                          </select>
                        </div>
                     </div>
                    <div class="row">
                      <div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
                          <label class="control-label"> HEIGHT :</label>
                          <input type="text" class="form-control input-sm" id="height" name="height">
                        </div>
                        <div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
                          <label class="control-label">WEIGHT</label>
                          <input type="text" class="form-control input-sm" id="weight" name="weight" >
                        </div>
                        <div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
                          <label class="control-label">ICR NO.</label>
                          <input type="text" class="form-control input-sm" id="icrno" name="icrno" >
                        </div>
                      <div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
                          <label class="control-label"><strong> Occupation :</strong><span>*</span></label>
                          <input type="text" class="form-control input-sm" id="occupation" name="occupation" required value="UNEMPLOYED">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-8 col-xs-8">
                          <label class="control-label"> <strong>Salary as per last year:</strong><span>*</span></label>
                          <input type="text" class="form-control input-sm currency"  id="salary" name="salary" required>
                        </div>
                        <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-4">
                          <label class="control-label"><strong> Per  :</strong><span>*</span></label>
                          <select class="form-control input-sm" id="salaryper" name="salaryper" required>
                              <option value="">- - Choose - -</option>
                              <option value="DAILY">DAILY </option>
                              <option value="MONTHLY">MONTHLY</option>
                              <option value="ANUALLY">ANNUALLY</option>
                          </select>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-8 col-xs-8">
                          <label class="control-label">Email Address:</label>
                          <input type="email" class="form-control input-sm currency"  id="email" name="email" >
                        </div>
                      </div>
                      <div class="row">
                      <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="ln_solid"></div>
                      </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
           
                          <div id="registration" class="g-recaptcha" data-sitekey="6LcGDF0UAAAAAL8MRkYSKFIRDaYKLXH6ayD3UseJ"  data-callback="recaptchaCallback" ></div><br/>
                          <!-- <button type="submit" class="btn btn-primary col-xs-12" id="btn_saveinfo" name="btn_saveinfo"><i class="fa fa-save"></i> SAVE</button> -->
                       </div>
                       <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
           
                          <!-- <div id="registration" class="g-recaptcha" data-sitekey="6LcGDF0UAAAAAL8MRkYSKFIRDaYKLXH6ayD3UseJ"  data-callback="recaptchaCallback" ></div><br/> -->
                          <button type="submit" class="btn btn-primary col-xs-12" id="btn_saveinfo" name="btn_saveinfo"><i class="fa fa-save"></i> SAVE</button>
                       </div>
                      </div>
                    </div>
                    </div> 
                <!-- </div>  -->
                </form>
                <!-- <form action="?" method="POST">
                <div class="g-recaptcha" data-sitekey="6LcGDF0UAAAAAL8MRkYSKFIRDaYKLXH6ayD3UseJ"></div>
                <br/>
                <input type="submit" value="Submit">
              </form> -->
              </div>
            </div>
        <!-- /page content -->
      </div>
    </div>

    <div id="custom_notifications" class="custom-notifications dsp_none">
      <div id="notif-group" class="tabbed_notifications"></div>
    </div>

    <!-- jQuery -->
   
     <!-- <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script> -->
      <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer> </script>

    <script type="text/javascript">
        var base_url = "<?php echo base_url(); ?>";
    </script>
  

    <script src="<?php echo base_url('vendors/jquery/dist/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('vendors/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js'); ?>"></script>
    <script src="<?php echo base_url('vendors/nprogress/nprogress.min.js'); ?>"></script>

    <script src="<?php echo base_url('vendors/pnotify/dist/pnotify.js'); ?>"></script>
    <script src="<?php echo base_url('vendors/pnotify/dist/pnotify.buttons.js'); ?>"></script>

  <script src="<?php echo base_url('vendors/formvalidation/formValidation.min.js'); ?>"></script>
    <script src="<?php echo base_url('vendors/formvalidation/framework/bootstrap.min.js'); ?>"></script>

    <!-- <script src="<?php // echo base_url('vendors/select2/dist/js/select2.full.min.js'); ?>"></script> -->
    <script src="<?php  echo base_url('vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js'); ?>"></script>

    <!-- dataTables -->
    <!-- <script src="<?php // echo base_url('vendors/pdatatables/jquery.dataTables.min.js'); ?>"></script>
    <script src="<?php // echo base_url('vendors/pdatatables/dataTables.buttons.min.js'); ?>"></script>
    <script src="<?php // echo base_url('vendors/pdatatables/buttons.print.min.js'); ?>"></script>
    <script src="<?php // echo base_url('vendors/pdatatables/jszip.min.js'); ?>"></script>
    <script src="<?php // echo base_url('vendors/pdatatables/buttons.html5.min.js'); ?>"></script> -->

    <!-- <script src="<?php // echo base_url('vendors/easyautocomplete/jquery.easy-autocomplete.min.js'); ?>"></script> -->

    <script src="<?php echo base_url('build/js/custom.js?v='.VERSION); ?>"></script>
    <script src="<?php echo base_url('build/js/registration.js?v='.VERSION); ?>"></script>
    <script>
          $(document).ready(function() {
        $(".time").inputmask("hh:mm",{ "placeholder": "hh:mm" });
        $(".date").inputmask("yyyy-mm-dd",{ "placeholder": "yyyy-mm-dd" });
        $(".numeric").inputmask('decimal', { rightAlign: false });
        $(".currency").inputmask("numeric", {
            radixPoint: ".",
            groupSeparator: ",",
            digits: 9,
            autoGroup: true,
            prefix: '₱ ',
            rightAlign: false,
            oncleared: function () { self.Value(''); 
            }
        });
        $(".mobilenum").inputmask({"mask": "9999-999-9999"});
      });
      </script>
  </body>
</html>
