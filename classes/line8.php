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
		$logo = '<div id="ln8-1stSecLogo"><span><img src="img/casumo.png" /></span></div>';
		$firstArrow = '<div id="ln8-1stSec-firstArrow"></div>';
		$secondArrow = '<div id="ln8-1stSec-secondArrowContainer">';
		$secondArrow .= '<div id="ln8-1stSec-secondTopArrow"></div>';
		$secondArrow .= '<div id="ln8-1stSec-secondBottomArrow"></div>';
		$secondArrow .= '</div>';
		self::$firstTxtSection = '<div id="ln8-firstTxtSection">'.$logo.$firstArrow.$secondArrow.'</div>';
	}
	
	private function creatingSecondTxtSection(){
		$txtLines = '<div id="ln8-2ndSecLinesWrapper" class="ln-2ndSecLinesWrapper">';
		$txtLines .= '<div id="ln8-2ndSecFirstRow" class="ln-2ndSecFirstRow"><span>Casumo</span></div>';
		$txtLines .= '<div id="ln8-2ndSecSecondRow" class="ln-2ndSecSecondRow"><span>Welcome Bonus</span></div>';
		$txtLines .= '<div id="ln8-2ndSecAmount" class="ln-2ndSecAmount"><span>€250</span></div>';
		$txtLines .= '<div><span>+ 20 Free Spins</span></div>';
		$txtLines .= '</div>';
		self::$secondTxtSection = '<div id="ln8-secondTxtSection" class="ln-secondTxtSection">'.$txtLines.'</div>';
	}
	
	private function creatingThirdTxtSection(){
		$txtLines = '<div id="ln8-3rdSecLinesWrapper" class="ln-3rdSecLinesWrapper">';
		$txtLines .= '<div id="ln8-3rdSecLines" class="ln-3rdSecLines">';
		$txtLines .= '<div id="ln8-3rdSecRating" class="ln-3rdSecRating"><span>Rating (1816)</span></div>';
		$txtLines .= '<div id="ln8-3rdSecStarsWrapper" class="ln-3rdSecStarsWrapper">';
		$txtLines .= '<span><img src="img/star.png" /></span>';
		$txtLines .= '<span><img src="img/star.png" /></span>';
		$txtLines .= '<span><img src="img/star.png" /></span>';
		$txtLines .= '<span><img src="img/star.png" /></span>';
		$txtLines .= '<span><img src="img/star.png" /></span>';
		$txtLines .= '</div>';
		$txtLines .= '</div>';
		$txtLines .= '</div>';
		self::$thirdTxtSection = '<div id="ln8-thirdTxtSection" class="ln-thirdTxtSection">'.$txtLines.'</div>';
	}
	
	private function creatingFourthTxtSection(){
		$txtLine = '<div id="ln8-4thSecRating"><span>9.3</span></div>';
		self::$fourthTxtSection = '<div id="ln8-fourthTxtSection">'.$txtLine.'</div>';
	}
	
	private function creatingFifthTxtSection(){
		$txtLine = '<div id="ln8-5thSecInputWrapper" class="ln-5thSecInputWrapper"><input id="ln8-5thSecInput" class="ln-5thSecInput" type="button" value="Play" /></div>';
		self::$fifthTxtSection = '<div id="ln8-fifthTxtSection" class="ln-fifthTxtSection">'.$txtLine.'</div>';
	}
	
	private function creatingLine8(){
		$cont = '<div id="line8" class="line">';
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