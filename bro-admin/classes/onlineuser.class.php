<?php
include_once( 'integration.class.php' );

class onlineuser extends jigowatt_integration {
	private $result;
	
	function __construct(){
		$this->result = array();
	}
	
	public function getOnlineUser(){
		
		$params = array(':timenow' => date("Y-m-d H:i:s", mktime(date("H"),date("i"),date("s")-30,date("m"),date("d"),date("Y"))));
		$stmt = parent::query("SELECT o.loginindex,l.username,o.timestamp FROM `onlineuser` o,login_users l  WHERE o.loginid= l.user_id AND o.`timestamp` >= :timenow", $params);
		
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
			$this->result[$row['loginindex']] = $row;
		}
		
		return $this->result;
	}
	
	public function getOnlineHost(){
		$params = array(':timenow' => date("Y-m-d H:i:s", mktime(date("H"),date("i"),date("s")-30,date("m"),date("d"),date("Y"))),
				':username' => 'host'
		);
		
		$stmt = parent::query("SELECT o.loginindex,l.username,o.timestamp FROM `onlineuser` o,login_users l  WHERE o.loginid= l.user_id AND o.`timestamp` >= :timenow AND l.username= :username", $params);
		
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
			$this->result[$row['loginindex']] = $row;
		}
		
		return $this->result;
	}
}
?>