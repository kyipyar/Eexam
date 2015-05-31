<?php

class stdRnoNPwd{
	private $stdRno;
	private $stdPwd;
	
 	public function getstdRno(){
            return $this->stdRno;
       }
            
       public function setstdRno($stdRno){
            $this->stdRno=$stdRno;
       }
	public function getstdPwd(){
            return $this->stdPwd;
       }
            
       public function setstdPwd($stdPwd){
            $this->stdPwd=$stdPwd;
       }
}