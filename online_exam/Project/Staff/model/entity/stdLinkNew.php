<?php
class stdLinkNew{
       //private $std_id;
       private $stdName;
      // private $gender;
      private $pwd;
      private $nrc;
      Private $rno;
       
       
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
       
            
        public function getNrc(){
            return $this->nrc;
        }
            
       public function setNrc($nrc){
            $this->nrc=$nrc;
       }
       
       
		public function getPwd(){
            return $this->pwd;
        }
            
       public function setPwd($pwd){
            $this->pwd=$pwd;
       }
       
       public function getRno(){
            return $this->rno;
        }
            
       public function setRno($rno){
            $this->rno=$rno;
       }
       
       
       
		
		
      
       
  }