<?

class DBConnect{
	private static $host = 'localhost';
	private static $dbname = 'globalteams';
	private static $charset = 'UTF8';
	private static $username = 'root';
	private static $password = '12345';
	
	public static $dbh;
	public static $newdb = NULL;
	public static $dbinfo = array();
	public static $dbError = array();
	
	private static function createDatabase(){
		try{
			$crtdbh = @new PDO('mysql:host='.self::$host,self::$username,self::$password);
			$crtdbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			$query = 'CREATE DATABASE IF NOT EXISTS '.self::$dbname;
			$dbCreating = $crtdbh->exec($query);
			if($dbCreating == 1){
				self::$newdb = "Database '".self::$dbname."' was created";
				self::$dbinfo['newdb'] = self::$newdb;
				unset(self::$dbError['connection']);
				self::connect();
			}
			else{
				self::$dbError['creating'] = "Database '".self::$dbname."' was NOT created";
			}
		}
		catch(PDOException $e){
			self::$dbError['creating'] = 'Database creating error: '.$e->getMessage();
		}
	}
	
	public static function connect(){
		try{
			self::$dbh = @new PDO('mysql:host='.self::$host.';dbname='.self::$dbname.';charset='.self::$charset,self::$username,self::$password);
			self::$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		}
		catch(PDOException $e){
			self::$dbError['connection'] = 'Database connection error: '.$e->getMessage();
		}
		self::$dbinfo['dbh'] = self::$dbh;
		if(self::$dbh == NULL){
			if(stripos(self::$dbError['connection'],'Unknown database') != FALSE){
				self::createDatabase();
			}
		}
	}
}

DBConnect::connect();

?>