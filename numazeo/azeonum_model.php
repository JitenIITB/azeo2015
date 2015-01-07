<?php
class Azeonum_model extends CI_Model{


  public function new_college(){
    $this->load->database();
    $college = $this->input->get('name');
    $new_college = array(
        'name'=>$this->input->get('name'),
          );
    if(empty($college) || is_null($college)){
      $feedback = array(
        'name'=>'',
        'status'=>'Dude!! Have not you got any business rather than coming here and pressing submit with blank entries?',
          );
    }
    else{
    $this->db->insert('colleges',$new_college);
      $feedback = array(
        'name'=>$this->input->get('name'),
        'status'=>' has been added successfully to the College Database!',
          );
    }
    $this->load->view('new_college',$feedback);
  }

  public function entry_insert(){
    $this->load->database();
    $input_email = $this->input->post('email'); //Get the Email from input;
    $query = $this->db->query('SELECT * FROM azeonum');
    $if_exist_email = $this->db->query("SELECT * FROM azeonum WHERE email = '$input_email'");


  $azeo_name = $this->input->post('name'); //Get the name from input
  $initials = strtoupper(substr($azeo_name, 0,3)); // Uppercased first three lettered name (to be used for center)
  $query_initials = $this->db->query("SELECT * FROM azeonum WHERE initials = '$initials'");
  $azeonum = $query_initials->num_rows();
  $azeonum = $azeonum+101;
    $collegeid = $this->input->post('college');
  $specify = $this->input->post('specify');
  if($specify === ''){
  $college = $this->db->query("SELECT * FROM colleges WHERE id = '$collegeid'");
  foreach ($college->result() as $row)
  {
    $collegename = $row->name;
  }
  }
  else{
    $collegename = $this->input->post('college');
  }
  $azeonum_final = 'AZ-'.$initials.'-'.($azeonum);
  $data = array(
        'name'=>$this->input->post('name'),
        'state'=>$this->input->post('state'),
        'college'=>$collegename,
        'specify'=>$this->input->post('specify'),
        'gender'=>$this->input->post('gender'),
        'dob'=>$this->input->post('dob'),
        'email'=>$this->input->post('email'),
        'phone'=>$this->input->post('phone'),
        'initials'=>$initials,
        'azeonum'=>$azeonum_final,
        'suggestions'=>$this->input->post('suggestions'),
          );


    if($if_exist_email->num_rows()>0)
    {
      //redirect('/azeonum/input', 'refresh'); die();
       $if_exist_email = $this->db->query("SELECT name,azeonum FROM azeonum WHERE email = '$input_email'");
       foreach ($if_exist_email->result_array() as $row)
       {
        //echo $row['name'];
        $data_failure = array(
        'name'=>$this->input->post('name'),
        'actual_name'=>$row['name'],
        'email'=>$this->input->post('email'),
        'azeonum'=>$row['azeonum'],
        );
        $this->load->view('azeonum_failure',$data_failure);
      }
    }
    else
    {

          $config = Array(
            'protocol' => 'smtp',
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'validate' => 'TURE',
            'smtp_host' => 'server1.dmsinfosystem.com',
            'smtp_port' => 465,
            'smtp_user' => 'regdesk@azeotropy.com',
            'smtp_pass' => 'akash131'
            );
            $this->load->helper('html_helper');
        $msg = $this->load->view('azeonum_email',$data,true);
        $this->load->library('email','$config');
        $this->email->set_newline("\r\n");
        
        $this->email->from('regdesk@azeotropy.com', 'AZeotropy 2014');
        $this->email->to($input_email);
        $this->email->subject('Registration Successful');
        $this->email->message($msg);
if ($this->email->send()) 
        {
          $this->db->insert('azeonum',$data);
          $this->load->view('azeonum_success',$data);
          
        }
        else
        {
          $this->load->view('azeonum_problem',$data);
            //echo "Problem";
            //redirect('/azeonum/input', 'refresh');
        }
        
    }
  }

  public function entry_accommodation(){
    $this->load->database();
    $query = $this->db->get('azeonum');
    $input_azeonum = $this->input->post('azeonum');
    $input_email = $this->input->post('email');
    $azeonum_data = $this->db->query("SELECT * FROM azeonum WHERE azeonum = '$input_azeonum'");
    $acco_data = $this->db->query("SELECT * FROM accommodation WHERE azeonum = '$input_azeonum'");
      foreach ($azeonum_data -> result() as $row) {
        $name = $row->name;
        $college = $row->college;
        $specify = $row->specify;
        $gender = $row->gender;
        $email = $row->email;
        $phone = $row->phone;
        $azeonum = $row->azeonum;
        }

    if(!$azeonum_data->num_rows()>0){
      $this->load->view('accommodation_p1.php');

    }

    elseif ($input_email != $email) {
      $this->load->view('accommodation_p2.php');

    }

    elseif($acco_data->num_rows()>0){
      $this->load->view('accommodation_p3.php');

    }

    else {
  $data = array(
        'name' => $name,
        'college' => $college,
        'specify' => $specify,
        'gender' => $gender,
        'email' => $email,
        'phone' => $phone,
        'azeonum' => $azeonum,
        'arrival' => $this->input->post('arrival'),
          );

          $config = Array(
            'protocol' => 'smtp',
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'validate' => 'TURE',
            'smtp_host' => 'server1.dmsinfosystem.com',
            'smtp_port' => 465,
            'smtp_user' => 'registrations@azeotropy.com',
            'smtp_pass' => 'akash131'
            );

        $this->load->helper('html_helper');
        $msg = $this->load->view('azeonum_email',$data,true);
        $this->load->library('email','$config');
        $this->email->set_newline("\r\n");
        
        $this->email->from('registrations@azeotropy.com', 'AZeotropy 2014');
        $this->email->to($input_email);
        $this->email->subject('Registration Successful');
        $this->email->message($msg);
        //if ($this->email->send()) 
        //{
        $this->db->insert('accommodation',$data);
        $this->load->view('accommodation_success',$data);
        //}
        //else
        //{
        //  $this->load->view('azeonum_problem',$data);
        //}  
    }
  }

  public function reg_compi(){
  $this->load->database();
  $query = $this->db->get('azeonum');
  for ($i=1; $i <6 ; $i++) { 
    $input_azeonum = $this->input->post('m'.$i);
    $input_email = $this->input->post('e'.$i);
    $azeonum_data = $this->db->query("SELECT * FROM azeonum WHERE azeonum = '$input_azeonum'");
      foreach ($azeonum_data -> result() as $row) {
        $email = $row->email;
        }

    if(!$azeonum_data->num_rows()>0){
      echo "Pehle AZeo number to lelo";
      die();
    }

    elseif (!$input_email == $email) {
          echo "saale email sahi daalo!";
          die();
        }
/*
    else{
          $query = $this->db->query("SELECT * FROM azeonum WHERE azeonum = '$input_azeonum'");
          foreach ($query -> result() as $row) 
          {
            '$n'.$i = $row->name;
            '$c'.$i = $row->college;
            '$p'.$i = $row->phone;
          }
        }
*/  
  }

$input_azeonum1 = $this->input->post('m1');
$input_azeonum2 = $this->input->post('m2');
$input_azeonum3 = $this->input->post('m3');
$input_azeonum4 = $this->input->post('m4');
$input_azeonum5 = $this->input->post('m5');

$query1 = $this->db->query("SELECT * FROM azeonum WHERE azeonum = '$input_azeonum1'");
$query2 = $this->db->query("SELECT * FROM azeonum WHERE azeonum = '$input_azeonum2'");
$query3 = $this->db->query("SELECT * FROM azeonum WHERE azeonum = '$input_azeonum3'");
$query4 = $this->db->query("SELECT * FROM azeonum WHERE azeonum = '$input_azeonum4'");
$query5 = $this->db->query("SELECT * FROM azeonum WHERE azeonum = '$input_azeonum5'");

foreach ($query1 -> result() as $row) {
  $n1 = $row->name;
  $c1 = $row->college;
  $p1 = $row->phone;
}
foreach ($query2 -> result() as $row) {
  $n2 = $row->name;
  $c2 = $row->college;
  $p2 = $row->phone;
}
foreach ($query3 -> result() as $row) {
  $n3 = $row->name;
  $c3 = $row->college;
  $p3 = $row->phone;
}
foreach ($query4 -> result() as $row) {
  $n4 = $row->name;
  $c4 = $row->college;
  $p4 = $row->phone;
}
foreach ($query5 -> result() as $row) {
  $n5 = $row->name;
  $c5 = $row->college;
  $p5 = $row->phone;
}

  $data = array(
    'competition' => $this->input->post('competition'),
    'teamname' => $this->input->post('teamname'),
    'n1' => $n1,
    'n2' => $n2,
    'n3' => $n3,
    'n4' => $n4,
    'c5' => $c5,
    'c1' => $c1,
    'c2' => $c2,
    'c3' => $c3,
    'c4' => $c4,
    'c5' => $c5,
    'e1' => $this->input->post('e1'),
    'e2' => $this->input->post('e2'),
    'e3' => $this->input->post('e3'),
    'e4' => $this->input->post('e4'),
    'e5' => $this->input->post('e5'),
    'p1' => $p1,
    'p2' => $p2,
    'p3' => $p3,
    'p4' => $p4,
    'p5' => $p5,
    'm1' => $this->input->post('m1'),
    'm2' => $this->input->post('m2'),
    'm3' => $this->input->post('m3'),
    'm4' => $this->input->post('m4'),
    'm5' => $this->input->post('m5'),
    );
    $this->db->insert('competitions',$data);
    echo "Good Job!";
}

  public function azeonum_getall(){
  $this->load->database();
  $query = $this->db->get('azeonum');
  //  $total_rows = $query->num_rows();
  return $query->result();
  //return $total_rows->result();
}

  public function acco_reg(){
  $this->load->database();
  $query = $this->db->get('accommodation');
  //  $total_rows = $query->num_rows();
  return $query->result();
  //return $total_rows->result();
}

  public function ambassadors_list(){
  $this->load->database();
  $query = $this->db->get('ambassadors');
  //  $total_rows = $query->num_rows();
  return $query->result();
  //return $total_rows->result();
}

  public function total_getall(){
  $this->load->database();
  $query = $this->db->get('colleges');
  //  $total_rows = $query->num_rows();
  return $query->result();
  //return $total_rows->result();
}

  public function state_getall(){
  $this->load->database();
  $query = $this->db->get('colleges');
  //  $total_rows = $query->num_rows();
  return $query->result();
  //return $total_rows->result();
}
  public function colleges_getall(){
  $this->load->database();
  $query = $this->db->get('colleges');
  $total_rows = $query->num_rows();
  return $query->result();
  //return $total_rows->result();
}

}
?>