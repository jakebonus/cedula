<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends MX_Controller
{
    //============ CONSTRUCTOR
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mdl_admin');
    }

    public function index() {
        if(!empty($this->session->userdata('accountId'))){
            $data['title'] = 'Masterlist';
            $data['content'] = 'admin/v_clientlist';
            $this->load->view('layouts/v_master', $data);
  
          }else{
            redirect('account');
          }
    }

    public function ajax_get_clientlist(){
        // ($score > 10 ? 'genius' : 'nobody');
        $data['ftr_refnum'] = (trim($this->input->get('ftr_refnum')) == '' ? 'N/A' : trim($this->input->get('ftr_refnum')));
        $data['ftr_fname'] = (trim($this->input->get('ftr_fname')) == '' ? 'N/A' : trim($this->input->get('ftr_fname')));
        $data['ftr_mname'] = (trim($this->input->get('ftr_mname')) == '' ? 'N/A' : trim($this->input->get('ftr_mname')));
        $data['ftr_lname'] = (trim($this->input->get('ftr_lname')) == '' ? 'N/A' : trim($this->input->get('ftr_lname')));
        $data['ftr_gender'] = (trim($this->input->get('ftr_gender')) == '' ? 'N/A' : trim($this->input->get('ftr_gender')));
        $data['ftr_ctcnum'] = (trim($this->input->get('ftr_ctcnum')) == '' ? 'N/A' : trim($this->input->get('ftr_ctcnum')));
        $result = $this->mdl_admin->m_get_clientlist($data);
        echo json_encode($result);
    }

    public function referencenumber(){
        $this->load->view('admin/v_referencenum');
    }

    public function get_clientdetails_forform(){
        $_id = $this->input->get('id');
        $result = $this->mdl_admin->m_get_clientdetails_forform($_id);
        echo json_encode($result);
    }

    public function get_clientdetails_forprinting(){
        $_id = $this->input->get('id');


        $result = $this->mdl_admin->m_get_clientdetails_forprinting($_id);
        echo json_encode($result);
        
    }

    public function saveinfo(){

        if($_POST){
            $id = $this->input->post('id');

            $data['c_username']      = '-';
            $data['c_password']      = '-';

            $data['c_profile']      = 'Online Applicant';
            $data['c_fernandinonum'] = strtoupper(trim($this->input->post('fernandinonum')));
            $data['c_fname']      = strtoupper(trim($this->input->post('fname')));
            $data['c_mname']      = strtoupper(trim($this->input->post('mname')));
            $data['c_mi']         = strtoupper(substr(trim($data['c_mname']),0,1));
            $data['c_lname']      = strtoupper(trim($this->input->post('lname')));

                    $bdate      = $this->input->post('birthdate');
                    $birthdate  =  explode("-",$bdate);

                    $yr = date('Y')-5;
            
                    if($this->validateDate($bdate)){

                        if($birthdate['0'] > '1910' && $birthdate['0'] < $yr){
                            $data['c_birthdate'] = $this->input->post('birthdate');
                        }else{
                            $result = array('status' => 'no','content'=> 'Please check birthdate');
                                echo json_encode($result);
                                 exit();
                        }
                    }else{
                        $result = array('status' => 'no','content'=> 'Please check birthdate');
                        echo json_encode($result);
                         exit();
                    }

            $data['c_birthplace'] = strtoupper(trim($this->input->post('birthplace')));
            $data['c_citizenship'] = strtoupper(trim($this->input->post('citizenship')));
            $data['c_civilstatus'] = strtoupper(trim($this->input->post('civilstatus')));
            $data['c_housenum']   = strtoupper(trim($this->input->post('housenum')));
            $data['c_brgy']       = strtoupper(trim($this->input->post('brgy')));

            $data['c_city']       = strtoupper(trim($this->input->post('city')));
            $data['c_province']   = strtoupper(trim($this->input->post('province')));

            $data['c_height']   = strtoupper(trim($this->input->post('height')));
            $data['c_weight']   = strtoupper(trim($this->input->post('weight')));
            $data['c_icrno']   = strtoupper(trim($this->input->post('icrno')));

            $data['c_mobilenum']   = trim($this->input->post('mobilenum'));
            $data['c_tin']        = trim($this->input->post('tin'));
            $data['c_gender']     = trim($this->input->post('gender'));
            $data['c_occupation'] = trim($this->input->post('occupation'));
            // $data['c_annualsalary'] = trim($this->input->post('salary'));
            $annually  = str_replace(',','',str_replace('₱ ','',$this->input->post('salary')));
            if($annually < 55000){
                $data['c_annualsalary'] = 55000;
            }else{
                $data['c_annualsalary'] = $annually;
            }

            

            if($id == '' || $id == null){
                if($a_id = $this->mdl_admin->m_saveinfo($data)){   
                    $result = array('status' => 'yes','content'=> 'Successfully Save!','c_id' => $a_id );
                    echo json_encode($result);
                    exit();
                }else{
                    $result = array('status' => 'no','content'=> 'Failed to save!');
                    echo json_encode($result);
                    exit();
                }
            }else{
                if($this->mdl_admin->m_updateinfo($id,$data)){   
                    $result = array('status' => 'yes','content'=> 'Update Successfully!','c_id' => $id );
                    echo json_encode($result);
                    exit();
                }else{
                    $result = array('status' => 'no','content'=> 'Failed to update!');
                    echo json_encode($result);
                    exit();
                }
            }
        
        }
        
    }


    function savetransaction(){

        $data['c_id'] = $this->input->post('c_id');
        $data['ctcnum']      = strtoupper(trim($this->input->post('ctcpreffix')).''.trim($this->input->post('ctcnum')));
        $data['basiccomtax']      = trim($this->input->post('t_basic'));
        $data['bygross']      = trim($this->input->post('t_brgross'));
        $data['subtotal']      = trim($this->input->post('t_subtotal'));
        $data['penalty']      = trim($this->input->post('t_penalty'));
        $data['interest']      = trim($this->input->post('t_interest'));
        $data['total']      = trim($this->input->post('t_total'));
        $data['issuedby']      = $this->session->userdata('accountId');;
        $data['issuedate']      = date('Y-m-d H:i:s');

        if($this->mdl_admin->m_savetrasaction($data)){
            $result = array('status' => 'yes','content'=> 'Successfully save trasaction!');
            echo json_encode($result);
            exit();
        }else{
            $result = array('status' => 'no','content'=> 'Failed to save!');
            echo json_encode($result);
            exit();
        }

    }


    function validateDate($date, $format = 'Y-m-d')
    {
        $d = DateTime::createFromFormat($format, $date);
        // The Y ( 4 digits year ) returns TRUE for any integer with any number of digits so changing the comparison from == to === fixes the issue.
        return $d && $d->format($format) === $date;
    }


public function to_convert(){
    
    $total = $this->input->get('total');

    $new_num = explode('.',$total);
			
    $frst_arr =  $this->convert_number(str_replace(',','',$total));
    $snd_arr =  $this->convert_number(str_replace(',','',$new_num[1]));

    $inwords = $frst_arr.' Pesos and '.$snd_arr.' Cents';

    $result = array('inwords' => $inwords );

    echo json_encode($result);
    exit();
}	

    
public function convert_number($number) {

    if (($number < 0) || ($number > 999999999)) {
        throw new Exception("Number is out of range");
    }

    $Gn = floor($number / 1000000);

    /* Millions (giga) */
    $number -= $Gn * 1000000;
    $kn = floor($number / 1000);
    /* Thousands (kilo) */
    $number -= $kn * 1000;
    $Hn = floor($number / 100);
    /* Hundreds (hecto) */
    $number -= $Hn * 100;
    $Dn = floor($number / 10);
    /* Tens (deca) */
    $n = $number % 10;
    /* Ones */
    $res = "";
    if ($Gn) {
        $res .= $this->convert_number($Gn) .  "Million";
    }
    if ($kn) {
        $res .= (empty($res) ? "" : " ") .$this->convert_number($kn) . " Thousand";
    }
    if ($Hn) {
        $res .= (empty($res) ? "" : " ") .$this->convert_number($Hn) . " Hundred";
    }
    $ones = array("", "One", "Two", "Three", "Four", "Five", "Six", "Seven", "Eight", "Nine", "Ten", "Eleven", "Twelve", "Thirteen", "Fourteen", "Fifteen", "Sixteen", "Seventeen", "Eightteen", "Nineteen");
    $tens = array("", "", "Twenty", "Thirty", "Forty", "Fifty", "Sixty", "Seventy", "Eigthy", "Ninety");
    if ($Dn || $n) {
        if (!empty($res)) {
            $res .= " ";
        }
        if ($Dn < 2) {
            $res .= $ones[$Dn * 10 + $n];
        } else {
            $res .= $tens[$Dn];
            if ($n) {
                $res .= "-" . $ones[$n];
            }
        }
    }
    if (empty($res)) {
        $res = "Zero";
    }
    return $res;
    }
}
