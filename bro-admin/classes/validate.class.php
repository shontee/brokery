<?php

include_once( 'integration.class.php' );

class validate extends jigowatt_integration {
	private $user;
	private $session;
	private $ipaddress;
	private $userid;
	
	function __construct($user,$session,$ipaddress) {
		$this->user = $user;
		$this->session = $session;
		$this->ipaddress = $ipaddress;
		
	}
	
	public function updateUser(){
		
		if($this->user != "" AND $this->session != "" AND $this->ipaddress != ""){
			$params = array( ':username' => $this->user );
			$stmt = parent::query("SELECT user_id FROM `login_users` WHERE `username` = :username;", $params);
			$this->result = $stmt->fetch();
			$this->userid = $this->result['user_id'];
			
			//update current timestamp
			if($this->userid != ""){
				$params = array( ':userid' => $this->userid,
						':session' => $this->session,
						':ipaddress' => $this->ipaddress
				 );
				
				$stmt = parent::query("SELECT loginindex FROM `onlineuser` WHERE loginid = :userid AND ipaddress= :ipaddress AND sessionid = :session;", $params);
				$this->result = $stmt->fetch();
				
				if($this->result['loginindex'] != ""){
					$params = array( ':loginindex' => $this->result['loginindex']);
					$stmt = parent::query("UPDATE onlineuser SET timestamp = CURRENT_TIMESTAMP WHERE loginindex = :loginindex;", $params);	
					return 1;
				}else{
					return 0;
				}
			}else{
				return 0;
			}
			
		}
	}
	
	public function updateHost(){
		if($this->user != ""){
			$params = array( ':username' => $this->user );
			$stmt = parent::query("SELECT user_id FROM `login_users` WHERE `username` = :username;", $params);
			$this->result = $stmt->fetch();
			$this->userid = $this->result['user_id'];
			
			if($this->userid != ""){
				$params = array(':userid' => $this->userid);
				
				$stmt = parent::query("SELECT loginindex FROM `onlineuser` WHERE loginid = :userid", $params);
				$this->result = $stmt->fetch();
				
				if($this->result['loginindex'] == ""){
					
					$params = array(
							':user_id'    => $this->userid,
							':ip'         => $this->ipaddress
					);
					
					$stmt = parent::query("INSERT INTO `onlineuser` (`loginid` ,`sessionid` ,`timestamp` ,`ipaddress`) VALUES (:user_id, '', CURRENT_TIMESTAMP,:ip);", $params);
					
					$stmt = parent::query("SELECT loginindex FROM `onlineuser` WHERE loginid = :userid", $params);
					$this->result = $stmt->fetch();
				}
				
				if($this->result['loginindex'] != ""){
					$params = array( ':loginindex' => $this->result['loginindex']);
					$stmt = parent::query("UPDATE onlineuser SET timestamp = CURRENT_TIMESTAMP WHERE loginindex = :loginindex;", $params);
					return 1;
				}
			}
		}
	}
}
?>