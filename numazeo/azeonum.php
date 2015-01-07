<?php
class Azeonum extends CI_Controller{
/*
  function Books(){
  parent::Controller();
  }
*/
  function main(){
  //$this->load->library('table');
  //$this->load->helper('html');
  $this->load->model('azeonum_model');
  //$data = $this->azeonum_model->general();
  $data['query'] = $this->azeonum_model->azeonum_getall();  
  $this->load->view('azeonum_main',$data);
  }
  
  function state()
  {
    $this->load->model('azeonum_model');
    $data['query'] = $this->azeonum_model->total_getall();
    $this->load->view('azeonum_state',$data);
    //$data['query_state'] = $this->azeonum_model->state_getall();
    //$this->load->view('azeonum_state1',$data); 
  }

  function college(){
      $feedback = array(
        'name'=>'',
        'status'=>'',
          );
    $this->load->view('new_college.php',$feedback);
  }

  function college_list(){
    $this->load->database();
  $this->load->model('azeonum_model');
  //$data = $this->azeonum_model->general();
  $data['query'] = $this->azeonum_model->colleges_getall();  
  $this->load->view('college_list',$data);
  }

  function new_college(){
    $this->load->model('azeonum_model');
    $this->azeonum_model->new_college();
  }

  function truncate(){
  $this->db->truncate('azeonum');
  }
  
  public function input(){

    $this->load->model('azeonum_model');
    $data['query'] = $this->azeonum_model->total_getall();
    $this->load->view('azeonum_input',$data);
  //$this->load->helper('form');
  //$this->load->helper('html');
  //$this->load->view('azeonum_input');
  }

    public function input1(){

  $this->load->helper('form');
  $this->load->helper('html');
  $this->load->model('azeonum_model');
  
  /*
  if($this->input->post('mysubmit')){
    $this->azeonum_model->entry_insert();
  } 
  */
  //$data = $this->azeonum_model->general();
        
  $this->load->view('azeonum_input_ol',$data);
  }
  
  public function save()
  {
    $this->load->model('azeonum_model');
    /*
    $this->load->library('form_validation'); //load the validation library

    //set the rules
    $this->form_validation->set_rules('name','Name', 'trim|required');
    $this->form_validation->set_rules('college','College', 'trim|required');
    $this->form_validation->set_rules('email','Email Address', 'trim|required|valid_email');
    $this->form_validation->set_rules('phone','Phone', 'trim|required|is_natural|min_length[10]|max_length[12]');
    //
    if($this->form_validation->run() == FALSE)
    {
      $this->load->view('azeonum_input');
      //redirect('/azeonum/input', 'refresh');
    }
    else
    {*/
    //  $success = 'Form submitted!';
    $this->azeonum_model->entry_insert();
    //$this->load->view('azeonum_success',);
    //http_redirect('/azeonum/input', '$success', true, HTTP_REDIRECT_PERM);
    //redirect('/azeonum/input','$success');
    //$this->load->view('azeonum_input','$success');
    
   // }
  }

  public function azeonum_input()
  {
    $this->load->view('azeonum_input.php');
  }
}
?>