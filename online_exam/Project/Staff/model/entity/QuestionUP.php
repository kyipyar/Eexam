<?php
class QuestionUP {

//question upload
       private $pans_id;
       private $ansA;
       private $ansB;
       private $ansC;
       private $ansD;
       private $qes_id;
       private $qes;
       private $corans;
       private $sub_id;
       
       //question upload
		public function getPosAnsId(){
            return $this->posansid;
       }
            
       public function setPosAnsId($pans_id){
            $this->posansidl=$pans_id;
       }
       
		public function getPosAnsA(){
            return $this->ansA;
       }
            
       public function setPosAnsA($pansA){
            $this->ansA=$pansA;
            
       }
       
		public function getPosAnsB(){
            return $this->ansB;
       }
            
       public function setPosAnsB($pansB){
            $this->ansB=$pansB;
       }
       
		public function getPosAnsC(){
            return $this->ansC;
       }
            
       public function setPosAnsC($pansC){
            $this->ansC=$pansC;
       }
       
		public function getPosAnsD(){
            return $this->ansD;
       }
            
       public function setPosAnsD($pansD){
            $this->ansD=$pansD;
       }
       
		public function getQesId(){
            return $this->qes_id;
       }
            
       public function setQesId($qes_id){
            $this->qes_id=$qes_id;
       }
		public function getQes(){
            return $this->qes;
       }
            
       public function setQes($qes){
            $this->qes=$qes;
       }
		public function getCorAns(){
            return $this->corans;
       }
            
       public function setCorAns($corans){
            $this->corans=$corans;
       }
	public function getsubId(){
            return $this->sub_id;
       }
            
       public function setsubID($subid){
            $this->sub_id=$subid;
       }
       

}