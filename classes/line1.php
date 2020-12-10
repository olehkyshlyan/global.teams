<?

class Line1{
	public static $content = NULL;
	private static $line1Logo = NULL;
	
	function __construct(){
		$this->creatingImage1();
		$this->creatingElement1();
	}
	
	private function creatingImage1(){
		$logo = '<div id="line1Logo">';
		$logo .= '<img src="img/line1Logo.png" />';
		$logo .= '</div>';
		self::$line1Logo = $logo;
	}
	
	private function creatingElement1(){
		$cont = '<div id="line1">';
		$cont .= self::$line1Logo;
		$cont .= '</div>';
		self::$content = $cont;
	}
}

$line1 = new Line1();

?>