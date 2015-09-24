<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin extends CI_Controller {
 function __construct()
 {
	   parent::__construct();
	   $this->checkStatus();
 }
public function index(){  	  //// ฟังชั่นในการเรียกใช้งานครั้งแรก 
		$loginData['loginData'] = $this->session->userdata('loginData');/// แรกข้อมูลที่เก็บใน session ชื่อ loginData
		$this->load->helper('url');
		$this->load->library('parser');

		$this->load->model('product');

		$this->product->setNum_Q($num_Q=1);
		$loginData ['blog_entries']=$this->product->getNum_Q();
	
		
	
 		$this->parser->parse('home_admin',$loginData);//// ส่งข้อมูล loginData ที่อยู่ใน session พร้อมกับ loadview ชื่อ home_admin
 }

	public function next_text($number = 0)
	{	

	
			$data['number'] = $number;
			$isError = false;
			//$isSuscess = false;
			$data['error'] = array();
			$data['suscess'] = array();
			
			
			$this->load->library('parser');
			$this->load->helper('url');
			$this->load->model('product');

		
	$this->product->setNum_Q($num_Q=1);
		
		
		

		$loginData ['blog_entries']=$this->product->getNum_Q();
	


		if($this->input->post())// ฟังก์ชั่นปุ่มแรก
		{
				
				
				if(!$isError)
			{
		
						$this->product->setNum_Q($num_Q=1+1);
						$loginData ['blog_entries']=$this->product->getNum_Q();
					
			}

					
						

					$this->parser->parse('home_admin',$loginData);

						
		}


		else{
		
			$this->parser->parse('home_admin',$loginData);

			}
	}


  function checkStatus(){
	 $session_data = $this->session->userdata('loginData'); /// แรกข้อมูลที่เก็บใน session ชื่อ loginData
	 $status = $session_data['status'];/// ให้ข้อมูลใน array session_data ชื่อ status เท่ากับ $satus
	 if($status!="admin"){//เช็คค่า $satus ว่าเป็น admin หรือไม่ ถ้าไม่ให้ทำตาม Process
		echo '<script> alert("!!!คุณไม่มีสิทธิในการใช้งานส่วนนี้");
		   	 window.location.assign("'.base_url().'index.php/CheckLogin/redirects");
		   </script>';/// ไปยัง contorller CheckLogin ฟังชั่น redirects โดยใช้ Javascript
	 }
  }
}

?>