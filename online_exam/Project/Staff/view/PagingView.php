<?php
class PagingView{
	private $noOfStudent;
	private $usecase;
	private $action;
	public function __construct($noOfStudent,$usecase,$action)
	{
		$this->noOfStudent=$noOfStudent;
		$this->usecase=$usecase;
		$this->action=$action;
		//echo $this->usecase."~~~~~~~~~~~~~".$this->action;
	}
	public function displayPrevNext(){
	$url="";
	if(@$_GET['student_id']!=null)
		$url.="&student_id=".$_GET['student_id'];
	if(@$_GET['student_name']!=null) 
		$url.="&student_name=".$_GET['student_name'];
	if(@$_GET['student_rollNo']!=null)
		$url.="&student_rollNo=".$_GET['student_rollNo'];
	if(@$_GET['total_marks']!=null)
		$url.="&total_marks=".$_GET['total_marks'];
	if(@$_GET['exam_status']!=null)
		$url.="&exam_status=".$_GET['exam_status'];
		
	$limit=2;
	if(isset($_GET['start_row']))
		$start_row=@$_GET['start_row'];		
	else 
		$start_row=0;

	$usecase=$this->usecase;
	$action=$this->action;
	//Previous Button
	if ($start_row>0) {
		$prev_start = max(($start_row - $limit), 0);
		echo "<span style='float : left; margin-bottom : 20px; padding:5px; margin:10px; background-color:yellow;'><a id='prev' href=";
		echo "?start_row=$prev_start&usecase=$usecase&action=$action&$url".">Previous Page</a></span>";
	}
	else echo "<span style='float : left; margin-bottom : 20px; padding:5px; margin:10px; background-color:olive;'><a>Previous Page</a></span>";
	
	
	//Next Button
	if ($start_row + $limit < $this->noOfStudent) {
		$next_start = $start_row + $limit;
		echo "<span style='float : right; margin-bottom : 20px; padding:5px; margin:10px; background-color:yellow;'><a id='next' href=";
		echo "?start_row=$next_start&usecase=$usecase&action=$action&$url".">Next Page</a></span>";
	}	
	else echo "<span style='float : right; margin-bottom : 20px; padding:5px; margin:10px; background-color:olive;'><a>Next Page</a></span>";
	}
	
	
}