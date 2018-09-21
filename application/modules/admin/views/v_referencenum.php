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

  
  </head>
  <body>

    <div class="container body">
      <div class="main_container">
        <!-- page content -->
            <div class="row">
              <div class="col-lg-offset-3 col-md-offset-3 col-sm-offset-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <!-- <div class=""> -->
                <form id="frm_personalinfo" name="frm_personalinfo" class="refnumlayout">
                <div class="x_panel">
                    <div class="x_title">
                      <h3><center> <strong>REFERENCE NUMBER</strong><small> CEDULA </small></center></h3>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="refnum" id="refnum" name="refnum"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="validitydate" id="validitydate" name="validitydate"></div>
                            </div>
                        </div>
                    </div>
                    </div> 
                </form>
              </div>
            </div>
        <!-- /page content -->
      </div>
    </div>

    <div id="custom_notifications" class="custom-notifications dsp_none">
      <div id="notif-group" class="tabbed_notifications"></div>
    </div>

    <!-- jQuery -->
    <script type="text/javascript">

        document.getElementById("refnum").innerHTML = localStorage.refnum;
        document.getElementById("validitydate").innerHTML = "Valid until " + localStorage.validitydate;


        localStorage.removeItem("refnum");
        localStorage.removeItem("validitydate");
        var base_url = "<?php echo base_url(); ?>";
    </script>

    <script src="<?php echo base_url('vendors/jquery/dist/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('vendors/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js'); ?>"></script>
    <script src="<?php echo base_url('vendors/nprogress/nprogress.min.js'); ?>"></script>

    <script src="<?php echo base_url('vendors/pnotify/dist/pnotify.js'); ?>"></script>
    <script src="<?php echo base_url('vendors/pnotify/dist/pnotify.buttons.js'); ?>"></script>

    <!-- <script src="<?php // echo base_url('vendors/formvalidation/formValidation.min.js'); ?>"></script>
    <script src="<?php // echo base_url('vendors/formvalidation/framework/bootstrap.min.js'); ?>"></script> -->

    <!-- <script src="<?php // echo base_url('vendors/select2/dist/js/select2.full.min.js'); ?>"></script>
    <script src="<?php // echo base_url('vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js'); ?>"></script> -->

    <!-- dataTables -->
    <!-- <script src="<?php // echo base_url('vendors/pdatatables/jquery.dataTables.min.js'); ?>"></script>
    <script src="<?php // echo base_url('vendors/pdatatables/dataTables.buttons.min.js'); ?>"></script>
    <script src="<?php // echo base_url('vendors/pdatatables/buttons.print.min.js'); ?>"></script>
    <script src="<?php // echo base_url('vendors/pdatatables/jszip.min.js'); ?>"></script>
    <script src="<?php // echo base_url('vendors/pdatatables/buttons.html5.min.js'); ?>"></script> -->

    <!-- <script src="<?php // echo base_url('vendors/easyautocomplete/jquery.easy-autocomplete.min.js'); ?>"></script> -->

    <script src="<?php echo base_url('build/js/custom.js?v='.VERSION); ?>"></script>
    <!-- <script src="<?php // echo base_url('build/js/registration.js?v='.VERSION); ?>"></script> -->
  </body>
</html>
