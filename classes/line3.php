<?

class Line3{
	public static $content = NULL;
	private static $firstTxtSection = NULL;
	private static $secondTxtSection = NULL;
	private static $thirdTxtSection = NULL;
	private static $fourthTxtSection = NULL;
	private static $fifthTxtSection = NULL;
	
	function __construct(){
		$this->creatingFirstTxtSection();
		$this->creatingSecondTxtSection();
		$this->creatingThirdTxtSection();
		$this->creatingFourthTxtSection();
		$this->creatingFifthTxtSection();
		$this->creatingLine3();
	}
	
	private function creatingFirstTxtSection(){
		$txtSection = 'CASINO';
		self::$firstTxtSection = '<div id="ln3-firstTxtSection"><span>'.$txtSection.'</span></div>';
	}
	
	private function creatingSecondTxtSection(){
		$txtSection = 'WELCOME BONUS';
		self::$secondTxtSection = '<div id="ln3-secondTxtSection"><span>'.$txtSection.'</span></div>';
	}
	
	private function creatingThirdTxtSection(){
		$txtSection = 'USER RATING';
		self::$thirdTxtSection = '<div id="ln3-thirdTxtSection"><span>'.$txtSection.'</span></div>';
	}
	
	private function creatingFourthTxtSection(){
		$txtSection = 'RATING';
		self::$fourthTxtSection = '<div id="ln3-fourthTxtSection"><span>'.$txtSection.'</span></div>';
	}
	
	private function creatingFifthTxtSection(){
		$txtSection = 'PLAY NOW';
		self::$fifthTxtSection = '<div id="ln3-fifthTxtSection"><span>'.$txtSection.'</span></div>';
	}
	
	private function creatingLine3(){
		$cont = '<div id="line3">';
		$cont .= self::$firstTxtSection;
		$cont .= self::$secondTxtSection;
		$cont .= self::$thirdTxtSection;
		$cont .= self::$fourthTxtSection;
		$cont .= self::$fifthTxtSection;
		$cont .= '</div>';
		self::$content = $cont;
	}
}

$line3 = new Line3();

?>