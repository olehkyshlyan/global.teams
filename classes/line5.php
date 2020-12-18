<?

class Line5{
	public static $content = NULL;
	private static $notice = NULL;
	private static $firstTxtSection = NULL;
	private static $secondTxtSection = NULL;
	private static $thirdTxtSection = NULL;
	private static $fourthTxtSection = NULL;
	private static $fifthTxtSection = NULL;
	
	function __construct(){
		$this->creatingNotice();
		$this->creatingFirstTxtSection();
		$this->creatingSecondTxtSection();
		$this->creatingThirdTxtSection();
		$this->creatingFourthTxtSection();
		$this->creatingFifthTxtSection();
		$this->creatingLine5();
	}
	
	private function creatingNotice(){
		$nt = '<div id="ln5-notice" class="ln-notice">';
		$nt .= '<div id="ln5-ntc-firstGeometryFigure" class="ln-ntc-firstGeometryFigure"></div>';
		$nt .= '<div id="ln5-ntc-secondGeometryFigure" class="ln-ntc-secondGeometryFigure"></div>';
		$nt .= '<span>TRENDING</span>';
		$nt .= '</div>';
		self::$notice = $nt;
	}
	
	private function creatingFirstTxtSection(){
		$logo = '<div id="ln5-1stSecLogo"><span><img src="img/machance.png" /></span></div>';
		$firstArrow = '<div id="ln5-1stSec-firstArrow"></div>';
		$secondArrow = '<div id="ln5-1stSec-secondArrowContainer">';
		$secondArrow .= '<div id="ln5-1stSec-secondTopArrow"></div>';
		$secondArrow .= '<div id="ln5-1stSec-secondBottomArrow"></div>';
		$secondArrow .= '</div>';
		self::$firstTxtSection = '<div id="ln5-firstTxtSection" class="ln-firstTxtSection">'.$logo.$firstArrow.$secondArrow.'</div>';
	}
	
	private function creatingSecondTxtSection(){
		$txtLines = '<div id="ln5-2ndSecLinesWrapper" class="ln-2ndSecLinesWrapper">';
		$txtLines .= '<div id="ln5-2ndSecFirstRow" class="ln-2ndSecFirstRow"><span>Machance</span></div>';
		$txtLines .= '<div id="ln5-2ndSecSecondRow" class="ln-2ndSecSecondRow"><span>200% Up to</span></div>';
		$txtLines .= '<div id="ln5-2ndSecAmount" class="ln-2ndSecAmount"><span>€500</span></div>';
		$txtLines .= '<div><span>+ 20 FREE SPINS</span></div>';
		$txtLines .= '</div>';
		self::$secondTxtSection = '<div id="ln5-secondTxtSection" class="ln-secondTxtSection">'.$txtLines.'</div>';
	}
	
	private function creatingThirdTxtSection(){
		$txtLines = '<div id="ln5-3rdSecLinesWrapper" class="ln-3rdSecLinesWrapper">';
		$txtLines .= '<div id="ln5-3rdSecLines" class="ln-3rdSecLines">';
		$txtLines .= '<div id="ln5-3rdSecRating" class="ln-3rdSecRating"><span>Rating (2063)</span></div>';
		$txtLines .= '<div id="ln5-3rdSecStarsWrapper" class="ln-3rdSecStarsWrapper">';
		$txtLines .= '<span><img src="img/star.png" /></span>';
		$txtLines .= '<span><img src="img/star.png" /></span>';
		$txtLines .= '<span><img src="img/star.png" /></span>';
		$txtLines .= '<span><img src="img/star.png" /></span>';
		$txtLines .= '<span><img src="img/star.png" /></span>';
		$txtLines .= '</div>';
		$txtLines .= '</div>';
		$txtLines .= '</div>';
		self::$thirdTxtSection = '<div id="ln5-thirdTxtSection" class="ln-thirdTxtSection">'.$txtLines.'</div>';
	}
	
	private function creatingFourthTxtSection(){
		$txtLine = '<div id="ln5-4thSecRating"><span>9.9</span></div>';
		self::$fourthTxtSection = '<div id="ln5-fourthTxtSection">'.$txtLine.'</div>';
	}
	
	private function creatingFifthTxtSection(){
		$txtLine = '<div id="ln5-5thSecInputWrapper" class="ln-5thSecInputWrapper"><input id="ln5-5thSecInput" class="ln-5thSecInput" type="button" value="Play" /></div>';
		self::$fifthTxtSection = '<div id="ln5-fifthTxtSection" class="ln-fifthTxtSection">'.$txtLine.'</div>';
	}
	
	private function creatingLine5(){
		$cont = '<div id="line5" class="line">';
		$cont .= self::$notice;
		$cont .= self::$firstTxtSection;
		$cont .= self::$secondTxtSection;
		$cont .= self::$thirdTxtSection;
		$cont .= self::$fourthTxtSection;
		$cont .= self::$fifthTxtSection;
		$cont .= '</div>';
		self::$content = $cont;
	}
}

$line5 = new Line5();

?>