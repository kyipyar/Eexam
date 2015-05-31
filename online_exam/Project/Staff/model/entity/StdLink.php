<?php
class StdLink{
       private $std_id;
       private $stdName;
       private $gender;
       private $nrcCode;
       private $nrcName;
       private $nrcNo;
       private $class;
       private $major;
       
       public function getLinkId(){
            return $this->std_id;
       }
            
       public function setLinkId($std_id){
            $this->std_id=$std_id;
       }
       
       
       public function getStdName(){
            return $this->stdName;
       }
            
       public function setStdName($stdName){
            $this->stdName=$stdName;
       }
       
            
        public function getNrcCode(){
            return $this->nrcCode;
        }
            
       public function setNrcCode($nrcCode){
            $this->nrcCode=$nrcCode;
       }
       
       
		public function getNrcName(){
            return $this->nrcName;
        }
            
       public function setNrcName($nrcName){
            $this->nrcName=$nrcName;
       }
       
       
		public function getNrcNo(){
            return $this->nrcNo;
        }
            
       public function setNrcNo($nrcNo){
            $this->nrcNo=$nrcNo;
       }
       
       
              
       public function getGender(){
            return $this->gender;
        }
            
       public function setGender($gender){
            $this->gender=$gender;
       }
       
       
	   public function getClass(){
            return $this->class;
        }
            
       public function setClass($class){
            $this->class=$class;
       }
       
       
		public function getMajor(){
            return $this->major;
        }
            
       public function setMajor($major){
            $this->major=$major;
       }
       
		
      
       
  }