<?

class Line8{
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
		$this->creatingLine8();
	}
	
	private function creatingFirstTxtSection(){
		self::$firstTxtSection = '<div id="ln8-firstTxtSection"><span></span></div>';
	}
	
	private function creatingSecondTxtSection(){
		$txtLines = '<div id="ln8-2ndSecLinesWrapper">';
		$txtLines .= '<div><span>Welcome Bonus</span></div>';
		$txtLines .= '<div id="ln8-2ndSecAmount"><span>€250</span></div>';
		$txtLines .= '<div><span>+ 20 Free Spins</span></div>';
		$txtLines .= '</div>';
		self::$secondTxtSection = '<div id="ln8-secondTxtSection">'.$txtLines.'</div>';
	}
	
	private function creatingThirdTxtSection(){
		$txtLines = '<div id="ln8-3rdSecLinesWrapper">';
		$txtLines .= '<div><span>Rating (1816)</span></div>';
		$txtLines .= '<div id="ln8-3rdSecStarsWrapper">';
		$txtLines .= '<span><img src="img/star.png" /></span>';
		$txtLines .= '<span><img src="img/star.png" /></span>';
		$txtLines .= '<span><img src="img/star.png" /></span>';
		$txtLines .= '<span><img src="img/star.png" /></span>';
		$txtLines .= '<span><img src="img/star.png" /></span>';
		$txtLines .= '</div>';
		$txtLines .= '</div>';
		self::$thirdTxtSection = '<div id="ln8-thirdTxtSection">'.$txtLines.'</div>';
	}
	
	private function creatingFourthTxtSection(){
		$txtLine = '<div id="ln8-4thSecRating"><span>9.3</span></div>';
		self::$fourthTxtSection = '<div id="ln8-fourthTxtSection">'.$txtLine.'</div>';
	}
	
	private function creatingFifthTxtSection(){
		$txtLine = '<div id="ln8-5thSecInputWrapper"><input id="" type="button" value="Play" /></div>';
		self::$fifthTxtSection = '<div id="ln8-fifthTxtSection">'.$txtLine.'</div>';
	}
	
	private function creatingLine8(){
		$cont = '<div id="line8" class="lines">';
		$cont .= self::$firstTxtSection;
		$cont .= self::$secondTxtSection;
		$cont .= self::$thirdTxtSection;
		$cont .= self::$fourthTxtSection;
		$cont .= self::$fifthTxtSection;
		$cont .= '</div>';
		self::$content = $cont;
	}
}

$line8 = new Line8();

?>