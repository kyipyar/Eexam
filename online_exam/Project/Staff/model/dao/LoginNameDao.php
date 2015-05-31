<?php
class LoginNameDao extends DAO{

	public function checkLoginName($loginName)
	{
		$sql="select * from teacher where login_name=:hh";
		$this->openDB();
		$this->prepareQuery($sql);
		$this->bindQueryParam(":hh", $loginName);
		$result=$this->executeQuery();		
		return $result;
	}
}