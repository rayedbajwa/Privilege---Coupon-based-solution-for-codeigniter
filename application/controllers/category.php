<?php 

class Category extends CI_Controller
{
	public function __construct()
	{
	
		  parent::__construct();
	}
	
	function showData()
	{
		$this->load->model('cat');
		
		
	$w=$this->cat->getAll();		
	foreach($w as $row)
	{
		echo '<ul>ID:'.$row->id.'<li>'.$row->name.'</li></ul>';
		
	}
	}
	
}
?>