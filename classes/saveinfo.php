<?
session_start();

include_once "dbconnect.php";

class SaveInfo{
	private static $errorInfo = array();
	private static $outputArray = array();
	private static $request = FALSE;
	private static $buttonID = NULL;
	private static $userIP = NULL;
	private static $date = NULL;
	private static $dateandtime = NULL;
	private static $table = 'userinfo';
	private static $tableNum = NULL;
	private static $logsdir = '../logs';
	private static $dirExists;
	
	function __construct(){
		$this->checkRequest();
		$this->getUserIPAddress();
		$this->getButtonID();
		$this->setDate();
		$this->createTable();
		$this->checkTable();
		$this->insertIntoTable();
		$this->checkDirectory();
		$this->insertIntoFile();
		$this->outputErrorInfo();
		$this->transformToJSON();
	}
	
	private function checkRequest(){
		if(isset($_POST['request'])){
			if($_POST['request'] != 'undefined'){
				if($_POST['request'] == 'yes'){
					unset($_POST['request']);
					self::$request = TRUE;
					self::$outputArray['request'] = self::$request;
				}
				else{
					self::$errorInfo[] = "Variable 'request' has wrong value";
				}
			}
			else{
				self::$errorInfo[] = "Variable 'request' is undefined";
			}
		}
		else{
			self::$errorInfo[] = "Variable 'request' is not set";
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
					self::$errorInfo[] = "Variable 'buttonID' is empty string";
				}
			}
			else{
				self::$errorInfo[] = "Variable 'buttonID' is undefined";
			}
		}
		else{
			self::$errorInfo[] = "Variable 'buttonID' is not set";
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
				self::$errorInfo[] = "Impossible to detect user ip address";
			}
		}
	}
	
	private function setDate(){
		if(self::$request != FALSE){
			self::$date = date('Y-m-d');
			self::$dateandtime = date('Y-m-d H:i:s');
			self::$outputArray['dateandtime'] = self::$dateandtime;
		}
	}
	
	private function createTable(){
		try{
			$query = 'CREATE TABLE IF NOT EXISTS userinfo(
			  id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				dt DATETIME NOT NULL,
				userip VARCHAR(50) NOT NULL,
				buttonid VARCHAR(50) NOT NULL
			)';
			DBConnect::$dbh->exec($query);
		}
		catch(PDOException $e){
			self::$errorInfo[] = 'Table creating error: '.$e->getMessage();
		}
	}
	
	private function checkTable(){
		try{
			$query = "SHOW TABLES LIKE '".self::$table."'";
			$statement = DBConnect::$dbh->query($query);
			$stmexec = $statement->execute();
			$count = $statement->rowCount();
			if($count == 1){
				self::$tableNum = $count;
			}
			elseif($count == 0){
				self::$errorInfo[] = $count.' tables were found in the database';
			}
			elseif($count > 1){
				self::$errorInfo[] = $count.' tables were found in the database';
			}
		}
		catch(PDOException $e){
			self::$errorInfo[] = 'Table check error: '.$e->getMessage();
		}
	}
	
	private function insertIntoTable(){
		if(self::$tableNum == 1){
			try{
				$query = "INSERT INTO userinfo (dt,userip,buttonid) VALUES ('".self::$dateandtime."','".self::$userIP."','".self::$buttonID."')";
				$queryInsert = DBConnect::$dbh->exec($query);
			}
			catch(PDOException $e){
				self::$errorInfo[] = 'Inserting into the table error: '.$e->getMessage();
			}
			
			if($queryInsert == 1){
				self::$outputArray['tableinsert'] = $queryInsert.' query was inserted into the table';
			}
			else{
				self::$errorInfo[] = 'Query was not inserted into the table';
			}
		}
	}
	
	private function checkDirectory(){
		self::$dirExists = is_dir(self::$logsdir);
		if(self::$dirExists == FALSE){
			$dirCreated = mkdir(self::$logsdir);
			if($dirCreated == TRUE){
				self::$dirExists = TRUE;
				self::$outputArray['dircreated'] = "Directory '".self::$logsdir."' was created";
			}
			else{
				self::$errorInfo[] = "Directory '".self::$logsdir."' was not created";
			}
		}
	}
	
	private function insertIntoFile(){
		if(self::$dirExists == TRUE){
			$log = self::$userIP.'|'.self::$dateandtime.'|'.self::$buttonID.PHP_EOL;
			$fputcont = file_put_contents(self::$logsdir.'/'.self::$date.'click.log',$log,FILE_APPEND);
			if($fputcont !== FALSE){
				self::$outputArray['fileinsert'] = 'String was inserted into the file';
			}
			else{
				self::$errorInfo[] = 'String was not inserted into the file';
			}
		}
	}
	
	private function outputErrorInfo(){
		self::$outputArray['dbinfo'] = DBConnect::$dbinfo;
		self::$outputArray['dberror'] = DBConnect::$dbError;
		self::$outputArray['saveinfoerror'] = self::$errorInfo;
	}
	
	private function transformToJSON(){
		$outputArrayJSON = json_encode(self::$outputArray);
		print($outputArrayJSON);
	}
	
}

$saveInfo = new SaveInfo();

?>