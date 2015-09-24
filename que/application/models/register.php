<?php
class Register extends CI_Model
{
		var $SetName; //
		var $SetPass; //
		var $SetUser; //
		var $SetMemberName;//
		var $SetMemberLastName;//
		var $SetId;//
		var	$Email;
		var $SetMemberTel;
		var $OldPass; //


		

	function __construct()
	{
		$this->load->database();
		parent::__construct();
	}

		public function setOldPass($OldPass)
	{
		$this->OldPass = $OldPass;
	}

	public function getOldPass()
	{
		return $this->OldPass;
	}

	function setSetName($SetName)
	{
		$this->SetName = $SetName;
	}

	
	function getSetName()
	{
		return $this->SetName;
	}
	
	function setSetPass($SetPass)
	{
		$this->SetPass = $SetPass;
	}


	function getSetPass()
	{
		return $this->SetPass;
	}

	function setSetUser($SetUser)
	{
		$this->SetUser = $SetUser;
	}

	
	function getSetUser()
	{
		return $this->SetUser;
	}

	function setSetMemberName($SetMemberName)
	{
		$this->SetMemberName = $SetMemberName;
	}


	function getSetMemberName()
	{
		return $this->SetMemberName;
	}

	function setSetMemberLastName($SetMemberLastName)
	{
		$this->SetMemberLastName = $SetMemberLastName;
	}

	function getSetMemberLastName()
	{
		return $this->SetMemberLastName;
	}

	function setSetAddress($SetAddress)
	{
		$this->SetAddress = $SetAddress;
	}


	function getSetAddress()
	{
		return $this->SetAddress;
	}

	function setSetId($SetId)
	{
		$this->SetId = $SetId;
	}


	function getSetId()
	{
		return $this->SetId;
	}

	public function setSetEmail($setEmail)
	{
		$this->setEmail = $setEmail;
	}

	public function getSetEmail()
	{
		return $this->setEmail;
	}
	public function setSetMemberTel($setMemberTel)
	{
		$this->setMemberTel = $setMemberTel;
	}

	public function getSetMemberTel()
	{
		return $this->setMemberTel;
	}

	public function setEmail($Email)
	{
		$this->Email = $Email;
	}

	public function getEmail()
	{
		return $this->Email;
	}

	function add()
	{
		$data=array(
			'id'=>$this->getSetId(),
			'username'=>$this->getSetName(),
			'password'=>md5 ($this->getSetPass()),
			'status'=>$this->getSetUser(),
			'membername'=>$this->getSetMemberName(),
			'memberlastname'=>$this->getSetMemberLastName(),
			'email'=>$this->getEmail(),
			'memberTel'=>$this->getSetMemberTel()

			
			
		);

		$this->db->insert('member',$data);
	}
		function findByPk($pk)
	{
		$query=$this->db->query
			('
				SELECT id,membername,memberlastname FROM member WHERE id LIKE "%'. $pk .'%" ORDER BY username
			');
			
		return $query;
	}


	public function update()
	{
		$data = array(
				'id'=>$this->getSetId(),
				'password'=>md5 ($this->getSetPass()),
				
       
	);

		
		 $this -> db -> select('*');  ###########
		 $this -> db -> from('member'); ########### เช็คข้อมูลใน DB 
		$this -> db -> where('password', md5($this->getOldPass())); ###########
		
		
		$this -> db -> limit(1); ############## ตำกัดให้คืนค่าแค่ record เดียว

		 $query = $this -> db -> get(); ##############  สั่งดึงข้อมูลตามเงื่อนไข

   if($query -> num_rows() == 1)  ############  เมื่อมีข้อมูล 1 record 
   {
		
	$this->db->where('id', $this->getSetId());
		$this->db->update('member', $data);
		 echo '<center></br> '.'<font color="green">เปลี่ยนรหัสผ่านสำเร็จ   </font></center>';
	return true;
   }
   else 
   {
		   echo '<center></br> '.'<font color="red">รหัสผ่านไม่ตรงกัน    </font></center>';  ############# ส่งค้า FALSE กลับ
		return false;
   }
	}
}
?>


