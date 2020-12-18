<?
session_start();

include_once "dbconnect.php";

class SaveInfo{
	private static $errorInfo = array();
	private static $outputArray = array();
	private static $buttonID = NULL;
	private static $userIP = NULL;
	private static $date = NULL;
	private static $dateandtime = NULL;
	private static $table = 'userinfo';
	private static $tableNum = NULL;
	private static $queryInsert = NULL;
	private static $logsdir = '../logs';
	private static $dirExists;
	
	function __construct(){
		$this->getUserIPAddress();
		$this->getButtonID();
		$this->setDate();
		$this->checkTable();
		$this->createTable();
		$this->insertIntoTable();
		$this->checkDirectory();
		$this->insertIntoFile();
		$this->outputErrorInfo();
		$this->transformToJSON();
	}
	
	private function getButtonID(){
		if(isset($_POST['buttonID'])){
			if($_POST['buttonID'] != 'undefined'){
				if($_POST['buttonID'] != ''){
					self::$buttonID = mb_substr((string)$_POST['buttonID'],0,50,'UTF-8');
					unset($_POST['buttonID']);
					self::$outputArray['buttonid'] = self::$buttonID;
				}
				else{
					self::$errorInfo['getbuttonid'] = "Variable 'buttonID' is empty string";
				}
			}
			else{
				self::$errorInfo['getbuttonid'] = "Variable 'buttonID' is undefined";
			}
		}
		else{
			self::$errorInfo['getbuttonid'] = "Variable 'buttonID' is not set";
		}
	}
	
	private function getUserIPAddress(){
		if(self::$buttonID != NULL){
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
				self::$errorInfo['getipaddress'] = "Impossible to detect user ip address";
			}
		}
	}
	
	private function setDate(){
		if(self::$buttonID != NULL){
			self::$date = date('Y-m-d');
			self::$dateandtime = date('Y-m-d H:i:s');
			self::$outputArray['dateandtime'] = self::$dateandtime;
		}
	}
	
	private function checkTable(){
		if(self::$buttonID != NULL){
			try{
				$query = "SHOW TABLES LIKE '".self::$table."'";
				$statement = DBConnect::$dbh->query($query);
				$stmexec = $statement->execute();
				$count = $statement->rowCount();
				if($count == 1){
					self::$tableNum = $count;
				}
				elseif($count == 0){
					self::$errorInfo['checktable'] = $count.' tables were found in the database';
				}
				elseif($count > 1){
					self::$errorInfo['checktable'] = $count.' tables were found in the database';
				}
			}
			catch(PDOException $e){
				self::$errorInfo['checktable'] = 'Table check error: '.$e->getMessage();
			}
		}
	}
	
	private function createTable(){
		if(self::$buttonID != NULL){
			if(self::$tableNum == 0){
				try{
					$query = 'CREATE TABLE IF NOT EXISTS userinfo(
					  id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
						dt DATETIME NOT NULL,
						userip VARCHAR(50) NOT NULL,
						buttonid VARCHAR(50) NOT NULL
					)';
					$queryResult = DBConnect::$dbh->exec($query);
					if($queryResult !== FALSE){
						unset(self::$errorInfo['checktable']);
					}
				}
				catch(PDOException $e){
					self::$errorInfo['createtable'] = 'Table creating error: '.$e->getMessage();
				}
			}
		}
	}
	
	private function insertIntoTable(){
		if(DBConnect::$dbh != NULL){
			try{
				$query = "INSERT INTO userinfo (dt,userip,buttonid) VALUES ('".self::$dateandtime."','".self::$userIP."','".self::$buttonID."')";
				self::$queryInsert = DBConnect::$dbh->exec($query);
			}
			catch(PDOException $e){
				self::$errorInfo['insertintotable'] = 'Inserting into the table error: '.$e->getMessage();
			}
			
			if(self::$queryInsert == 1){
				self::$outputArray['tableinsert'] = self::$queryInsert.' query was inserted into the table';
			}
			else{
				self::$errorInfo['insertintotable'] = 'Query was not inserted into the table';
			}
		}
	}
	
	private function checkDirectory(){
		if(self::$queryInsert == 1){
			self::$dirExists = is_dir(self::$logsdir);
			if(self::$dirExists == FALSE){
				$dirCreated = mkdir(self::$logsdir);
				if($dirCreated == TRUE){
					self::$dirExists = TRUE;
					self::$outputArray['dircreated'] = "Directory '".self::$logsdir."' was created";
				}
				else{
					self::$errorInfo['checkdirectory'] = "Directory '".self::$logsdir."' was not created";
				}
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
				self::$errorInfo['insertintofile'] = 'String was not inserted into the file';
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