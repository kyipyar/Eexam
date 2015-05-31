<?php
class TeacherQes{
	private $major_major_id;
	
	public function setRollnoSearch($major_major_id){
		$this->major_major_id=$major_major_id;		
	}
	
	public function getRollnoSearch(){
			return $this->major_major_id;		
		}
}