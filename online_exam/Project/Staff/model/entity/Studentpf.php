<?php
class Studentpf{
	private $txtRoll_No_search;
	
	public function setRollnoSearch($txtRoll_No_search){
		$this->txtRoll_No_search=$txtRoll_No_search;		
	}
	
	public function getRollnoSearch(){
			return $this->txtRoll_No_search;		
		}
}