<?
session_start();

class SaveInfo{
	private static $errorInfo = NULL;
	private static $outputArray = array();
	private static $request = FALSE;
	private static $buttonID = NULL;
	private static $userIP = NULL;
	private static $date = NULL;
	
	function __construct(){
		$this->checkRequest();
		$this->getUserIPAddress();
		$this->getButtonID();
		$this->setDate();
		$this->outputErrorInfo();
		$this->transformToJSON();
	}
	
	private function checkRequest(){
		if(isset($_POST['request'])){
			if($_POST['request'] != 'undefined'){
				if($_POST['request'] == 'yes'){
					unset($_POST['request']);
					//print('Request is accepted');
					self::$request = TRUE;
					self::$outputArray['request'] = self::$request;
				}
				else{
					self::$errorInfo .= "Variable 'request' has wrong value";
				}
			}
			else{
				self::$errorInfo .= "Variable 'request' is undefined";
			}
		}
		else{
			self::$errorInfo .= "Variable 'request' is not set";
		}
	}
	
	private function getButtonID(){
		if(isset($_POST['buttonID'])){
			if($_POST['buttonID'] != 'undefined'){
				if($_POST['buttonID'] != ''){
					self::$buttonID = $_POST['buttonID'];
					unset($_POST['buttonID']);
					self::$outputArray['buttonid'] = self::$buttonID;
				}
				else{
					self::$errorInfo .= "Variable 'buttonID' is empty string";
				}
			}
			else{
				self::$errorInfo .= "Variable 'buttonID' is undefined";
			}
		}
		else{
			self::$errorInfo .= "Variable 'buttonID' is not set";
		}
	}
	
	private function getUserIPAddress(){
		if(self::$request != FALSE){
			if(!empty($_SERVER['HTTP_CLIENT_IP'])){
				self::$userIP = $_SERVER['HTTP_CLIENT_IP'];
				self::$outputArray['userip'] = self::$userIP;
			}
			elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
				self::$userIP = $_SERVER['HTTP_X_FORWARDED_FOR'];
				self::$outputArray['userip'] = self::$userIP;
			}
			elseif(!empty($_SERVER['REMOTE_ADDR'])){
				self::$userIP = $_SERVER['REMOTE_ADDR'];
				self::$outputArray['userip'] = self::$userIP;
			}
			else{
				self::$errorInfo .= "Impossible to detect user ip address";
			}
		}
	}
	
	private function setDate(){
		if(self::$request != FALSE){
			self::$date = date('Y-m-d');
			self::$outputArray['date'] = self::$date;
		}
	}
	
	private function outputErrorInfo(){
		self::$outputArray['errorinfo'] = self::$errorInfo;
	}
	
	private function transformToJSON(){
		$outputArrayJSON = json_encode(self::$outputArray);
		print($outputArrayJSON);
	}
	
}

$saveInfo = new SaveInfo();

?>