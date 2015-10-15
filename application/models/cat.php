<?php

class Cat extends CI_Model
{
	function getAll()
	{
		$q=$this->db->get('category');
		
		$re=$q->result();
		return $re;
	}
	
}?>