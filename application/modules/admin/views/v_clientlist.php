        <!-- page content -->

        <?php 
        $month = date('m');
  	switch ($month){
      // March
      case 03:
        $penalty = 6;
        break;
      case 3:
        $penalty = 6;
        break;
      //April
      case 04:
        $penalty = 8;
        break;
      case 4:
        $penalty = 8;
        break;
      // May
      case 05:
        $penalty = 10;
        break;
      case 5:
        $penalty = 10;
        break;
      // June
      case 06:
        $penalty = 12;
        break;
      case 6:
        $penalty = 12;
        break;
      // July
      case 07:
        $penalty = 14;
      break;
      case 7:
        $penalty = 14;
        break;
      // August
      // case 08:
        // $penalty = 16;
        // break;
      case 8:
        $penalty = 16;
      break;
      // September
      // case 09:
      //   $penalty = 18;
      //   break;
      case 9:
        $penalty = 18;
        break;
      // October
      case 10:
        $penalty = 20;
        break;
      // November
      case 11:
        $penalty = 22;
        break;
      // December
      case 12:
        $penalty = 24;
        break;
    
    default:
    $penalty = 0;
  }
        ?>

        <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                    <div class="row">
                      <form id="frm_ftr" name="frm_ftr">
                      <div class="form-group col-lg-1 col-md-1 col-sm-4 col-xs-4">
                        <label class="control-label">REF. #</label>
                        <input type="text" class="form-control input-sm" id="ftr_refnum" name="ftr_refnum">
                      </div>
                      <div class="form-group col-lg-2 col-md-2 col-sm-4 col-xs-4">
                        <label class="control-label">FIRST NAME</label>
                        <input type="text" class="form-control input-sm" id="ftr_fname" name="ftr_fname">
                      </div>
                      <div class="form-group col-lg-2 col-md-2 col-sm-4 col-xs-4">
                        <label class="control-label">MIDDLE NAME</label>
                        <input type="text" class="form-control input-sm" id="ftr_mname" name="ftr_mname">
                      </div>
                      <div class="form-group col-lg-2 col-md-2 col-sm-4 col-xs-4">
                        <label class="control-label">LAST NAME</label>
                        <input type="text" class="form-control input-sm" id="ftr_lname" name="ftr_lname">
                      </div>
                      <div class="form-group col-lg-1 col-md-1 col-sm-4 col-xs-4">
                        <label class="control-label">GENDER</label>
                        <select class="form-control input-sm" id="ftr_gender" name="ftr_gender" required>
                              <option value="">- - Choose - -</option>
                              <option value="M">MALE</option>
                              <option value="F">FEMALE</option>
                            </select>
                      </div>
                      <div class="form-group col-lg-2 col-md-2 col-sm-4 col-xs-4">
                        <label class="control-label">CTC NUMBER</label>
                        <input type="text" class="form-control input-sm" id="ftr_ctcnum" name="ftr_ctcnum">
                      </div>
                      <div class="form-group col-lg-1 col-md-1 col-sm-4 col-xs-4">
                        <label class="control-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <button type="button" class="form-group btn btn-success btn-sm" id="btn_ftr"><i class="fa fa-filter"></i> Filter</button>
                      </div>

                    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="ln_solid"></div>
                    </div>
                    </form>
                    </div>
                    <div class="row">
                      <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                       <table class="cell-border compact hover width-full" id="dt_clientlist" name="dt_clientlist" cellspacing="0" width="100%">
                        <thead>
                          <tr>
                            <th style="min-width: 110px">REFERENCE #</th>
                            <th style="min-width: 200px">NAME</th>
                            <th style="min-width: 110px">CITIZENSHIP</th>
                            <th style="min-width: 110px">CIVIL STATUS</th>
                            <th style="min-width: 110px">BIRTHDATE</th>
                            <th>AGE</th>
                            <th>ACTION</th>
                          </tr>
                        </thead>
                      </table>
                      </div>
                      <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                        <div class="row">
                          <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                            <label class="control-label">PENALTY IN %: </label>
                            <label class="form-control input-sm" id="_penalty"><?php echo $penalty; ?></label>
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                            <label class="control-label">BASIC: </label>
                            <label class="form-control input-sm" id="_basic">5.00</label>
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                            <label class="control-label"><x>GROSS</x> * 0.001: </label>
                            <label class="form-control input-sm" id="_bygross">55.00</label>
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                            <label class="control-label">SUBTOTAL </label>
                            <label class="form-control input-sm" id="_subtotal">60.00</label>
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                            <label class="control-label">INTEREST </label>
                            <label class="form-control input-sm" id="_interest">6.00</label>
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                            <label class="control-label">TOTAL </label>
                            <label class="form-control input-sm _total" id="_total">66.00</label>
                          </div>
                          <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <div class="ln_solid " ></div>
                          </div>
                        </div>

                      <form id="frm_ctcindividual" name="frm_ctcindividual" class="form-horizontal form-label-left">
                      <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                          <div class="form-group">
                            <label class="control-label col-lg-4 col-md-4 col-sm-4 col-xs-12"><strong> First Name:</strong><span>*</span></label>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                              
                            <input type="hidden" class="form-control input-sm" id="id" name="id" >
                              <input type="text" class="form-control input-sm" id="fname" name="fname"  required >
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-lg-4 col-md-4 col-sm-4 col-xs-12"> Middle Name:</label>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                            <input type="text" class="form-control input-sm" id="mname" name="mname" >
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-lg-4 col-md-4 col-sm-4 col-xs-12">  <strong>Last Name:</strong><span>*</span></label>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                              <input type="text" class="form-control input-sm" id="lname" name="lname"  required >
                            </div>
                          </div>

                          <div class="form-group">
                          <label class="control-label col-lg-4 col-md-4 col-sm-4 col-xs-12">TIN :</label>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                            <input type="text" class="form-control input-sm" id="tin" name="tin">
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="control-label col-lg-4 col-md-4 col-sm-4 col-xs-12"> HOUSE # :</label>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                              <input type="text" class="form-control input-sm" id="housenum" name="housenum">
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="control-label col-lg-4 col-md-4 col-sm-4 col-xs-12"> <strong>BARANGAY:</strong><span>*</span></label>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                            <input type="text" class="form-control input-sm" id="brgy" name="brgy"  required>
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="control-label col-lg-4 col-md-4 col-sm-4 col-xs-12"> <strong>MUNICIPALITY:</strong><span>*</span></label>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                            <input type="text" class="form-control input-sm" id="city" name="city" value="CITY OF SAN FERNANDO"  required>
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="control-label col-lg-4 col-md-4 col-sm-4 col-xs-12"> <strong>PROVINCE:</strong><span>*</span></label>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                            <input type="text" class="form-control input-sm" id="province" name="province" value="PAMPANGA"  required>
                            </div>
                          </div>
                          <div class="form-group">
                          <label class="control-label col-lg-4 col-md-4 col-sm-4 col-xs-12"> <strong>GENDER :</strong><span>*</span></label>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                            <select class="form-control input-sm" id="gender" name="gender" required>
                              <option value="">- - Choose - -</option>
                              <option value="M" >MALE</option>
                              <option value="F">FEMALE</option>
                            </select>
                            </div>
                          </div>
                        </div>
                      <!-- </div>

                      <div class="row"> -->
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                           <label class="control-label col-lg-4 col-md-4 col-sm-4 col-xs-12"> HEIGHT :</label>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                              <input type="text" class="form-control input-sm" id="height" name="height"   >
                            </div>
                          </div><div class="form-group">
                           <label class="control-label col-lg-4 col-md-4 col-sm-4 col-xs-12"> WEIGHT :</label>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                              <input type="text" class="form-control input-sm" id="weight" name="weight" >
                            </div>
                          </div><div class="form-group">
                           <label class="control-label col-lg-4 col-md-4 col-sm-4 col-xs-12"> ICR No. :</label>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                              <input type="text" class="form-control input-sm" id="icrno" name="icrno" >
                            </div>
                          </div>
                          <div class="form-group">
                          <label class="control-label col-lg-4 col-md-4 col-sm-4 col-xs-12"> <strong>CIVIL STATUS :</strong><span>*</span></label>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                            <select class="form-control input-sm" id="civilstatus" name="civilstatus" required>
                              <option value="">- - Choose - -</option>
                              <option value="SINGLE" >SINGLE </option>
                              <option value="MARRIED">MARRIED </option>
                              <option value="WIDOW / WIDOWER">WIDOW / WIDOWER </option>
                              <option value="LEGALLY SEPARATED">LEGALLY SEPARATED </option>
                              <option value="DIVORCED">DIVORCED </option>
                          </select>
                            </div>
                          </div>
                          <div class="form-group">
                           <label class="control-label col-lg-4 col-md-4 col-sm-4 col-xs-12"> <strong>CITIZENSHIP :</strong><span>*</span></label>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                              <input type="text" class="form-control input-sm" id="citizenship" name="citizenship" value="FILIPINO"  required>
                            </div>
                          </div>

                          <div class="form-group">
                          <label class="control-label col-lg-4 col-md-4 col-sm-4 col-xs-12"> <strong>Birth date :</strong><span>*</span></label>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                              <input type="text" class="form-control input-sm date"  id="birthdate" name="birthdate"  required>
                            </div>
                          </div>

                          <div class="form-group">
                          <label class="control-label col-lg-4 col-md-4 col-sm-4 col-xs-12"> <strong>Birth place :</strong><span>*</span></label>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                            <input type="text" class="form-control input-sm"  id="birthplace" name="birthplace" required >
                            </div>
                          </div>

                          <div class="form-group">
                          <label class="control-label col-lg-4 col-md-4 col-sm-4 col-xs-12"> <strong>OCCUPATION:</strong><span>*</span></label>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                            <input type="text" class="form-control input-sm" id="occupation" name="occupation" required value="UNEMPLOYED">
                            </div>
                          </div>

                          <div class="form-group">
                          <label class="control-label col-lg-7 col-md-7 col-sm-7 col-xs-12"> <strong>GROSS ANNUAL INCOME:</strong><span>*</span></label>
                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                            <input type="text" class="form-control input-sm currency" id="salary" name="salary" required value="55000.00">
                            </div>
                          </div>
                          <div class="form-group">
                          <label class="control-label col-lg-4 col-md-4 col-sm-4 col-xs-12"> MOBILE #: </label>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                            <input type="text" class="form-control input-sm mobilenum" id="mobilenum" name="mobilenum">
                            </div>
                          </div>

                      </div>
                      
                      <div class="form-group">
                      <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="ln_solid"></div>
                      </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-2">
                        
                             <button type="submit" class="btn btn-primary btn-sm col-xs-4" id="btn_saveinfo" name="btn_saveinfo"><i class="fa fa-save"></i> SAVE</button>
                            <button type="button" class="btn btn-primary btn-sm col-xs-4" id="btn_print" name="btn_print"><i class="fa fa-print"></i> PRINT</button>
                        </div>
                      </div>
                      </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->


<!-- modal -->
<div class="modal fade bs-example-modal-md" tabindex="-1" role="dialog" aria-hidden="true" id="printLayout" name="printLayout">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title" id="modal_title">xxxxxxxxxx</h4>
      </div>
      <div class="modal-body">
       <form id="frm_trasaction" name="frm_trasaction">
        <div class="row">
          <div class="from-group col-lg-3 col-md-3 col-sm-6 col-xs-12 col-lg-offset-3">
            <label class="control-label">Series :</label>
            <input type="text" class="form-control input-sm" id="ctcpreffix" name="ctcpreffix" maxlength=7>
          </div>
          <div class="from-group col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <label class="control-label">Number :</label>
            <input type="text" class="form-control input-sm" id="ctcnum" name="ctcnum" maxlength=8>
          </div>
          
          <input type="hidden" id="c_id" name="c_id">
          
          <input type="hidden" id="t_basic" name="t_basic">
          <input type="hidden" id="t_brgross" name="t_brgross">
          <input type="hidden" id="t_subtotal" name="t_subtotal">
          <input type="hidden" id="t_penalty" name="t_penalty">
          <input type="hidden" id="t_interest" name="t_interest">
          <input type="hidden" id="t_total" name="t_total">
          
        </div>
        <div class="row">
        <div class="col-xs-12"><hr>
          </div>
        </div>
        </form>
        <div id="cedula">
        <div class="layout">
          <!-- <img src="<?php //  echo base_url('pictures/cedula.jpg'); ?>" class="layout"> -->
          <div id="_yr" name="_yr"><?php echo date("y"); ?></div>
          <div id="_pissue" name="_pissue">CITY OF SAN FERNANDO (P)</div>
          <div id="_fname" name="_fname"></div>
          <div id="_mname" name="_mname"></div>
          <div id="_lname" name="_lname"></div>
          <div id="_tin" name="_tin"></div>
          <div id="_fulladd" name="_fulladd"></div>
          <div id="_gender" name="_gender"></div>
          <div id="_civilstatus" name="_civilstatus"></div>
          <div id="_citizenship" name="_citizenship"></div>
          <div id="_birthdate" name="_birthdate"></div>
          <div id="_birthplace" name="_birthplace"></div>
          <div id="_occupation" name="_occupation"></div>
          <div id="_occupation2" name="_occupation2"></div>
          <div id="_salary" name="_salary"></div>

          <div id="_height" name="_height"></div>
          <div id="_weight" name="_weight"></div>
          <div id="_icrno" name="_icrno"></div>
          <div id="_inwords" name="_inwords"></div>
          <div id="_signatory" name="_signatory">MARY ANN P. BAUTISTA</div>
          <div id="_month" name="_month"><?php echo date('m'); ?></div>
          <div id="_day" name="_day"><?php echo date('d'); ?></div>
          <div id="_year" name="_year"><?php echo date('y'); ?></div>

          <div id="basic" name="basic"></div>
          <div id="brgross" name="brgross"></div>
          <div id="subtotal" name="subtotal"></div>
          <div id="interest" name="interest"></div>
          <div id="total" name="total"></div>
          <img src="<?php echo base_url('pictures/CT_HeadSig.png'); ?>" id="_signature" name="_signature">
          
        </div>
      </div>
       </div>

       <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-remove"></i>Close</button>
          <button type="submit" class="btn btn-primary" id="printcedula"><i class="fa fa-print"></i>Save changes</button>
        </div>
       </div>
    </div>
</div>
