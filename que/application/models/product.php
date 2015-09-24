
<?php
class Product extends CI_Model
{
	
			var $id; //
			var $num_Q; //
		
	function __construct()
	{
		$this->load->database();
		parent::__construct();
	}
		public function setId($id)
	{
		$this->id = $id;
	}

	public function getId()
	{
		return $this->id;
	}
	public function setNum_Q($num_Q)
	{
		$this->num_Q = $num_Q;
	}

	public function getNum_Q()
	{
		return $this->num_Q;
	}

}

?>
