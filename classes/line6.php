<?

class Line6{
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
		$this->creatingLine6();
	}
	
	private function creatingNotice(){
		$nt = '<div id="ln6-notice" class="ln-notice">';
		$nt .= '<div id="ln6-ntc-firstGeometryFigure" class="ln-ntc-firstGeometryFigure"></div>';
		$nt .= '<div id="ln6-ntc-secondGeometryFigure" class="ln-ntc-secondGeometryFigure"></div>';
		$nt .= '<span>NUMBER 1 IN EUROPE</span>';
		$nt .= '</div>';
		self::$notice = $nt;
	}
	
	private function creatingFirstTxtSection(){
		$logo = '<div id="ln6-1stSecLogo"><span><img src="img/casino.intense.png" /></span></div>';
		$firstArrow = '<div id="ln6-1stSec-firstArrow"></div>';
		$secondArrow = '<div id="ln6-1stSec-secondArrowContainer">';
		$secondArrow .= '<div id="ln6-1stSec-secondTopArrow"></div>';
		$secondArrow .= '<div id="ln6-1stSec-secondBottomArrow"></div>';
		$secondArrow .= '</div>';
		self::$firstTxtSection = '<div id="ln6-firstTxtSection">'.$logo.$firstArrow.$secondArrow.'</div>';
	}
	
	private function creatingSecondTxtSection(){
		$txtLines = '<div id="ln6-2ndSecLinesWrapper" class="ln-2ndSecLinesWrapper">';
		$txtLines .= '<div id="ln6-2ndSecFirstRow" class="ln-2ndSecFirstRow"><span>Intense</span></div>';
		$txtLines .= '<div id="ln6-2ndSecSecondRow" class="ln-2ndSecSecondRow"><span>200% Up to</span></div>';
		$txtLines .= '<div id="ln6-2ndSecAmount" class="ln-2ndSecAmount"><span>€3000</span></div>';
		$txtLines .= '<div><span>+ 30 FREE SPINS</span></div>';
		$txtLines .= '</div>';
		self::$secondTxtSection = '<div id="ln6-secondTxtSection" class="ln-secondTxtSection">'.$txtLines.'</div>';
	}
	
	private function creatingThirdTxtSection(){
		$txtLines = '<div id="ln6-3rdSecLinesWrapper" class="ln-3rdSecLinesWrapper">';
		$txtLines .= '<div id="ln6-3rdSecLines" class="ln-3rdSecLines">';
		$txtLines .= '<div id="ln6-3rdSecRating" class="ln-3rdSecRating"><span>Rating (1975)</span></div>';
		$txtLines .= '<div id="ln6-3rdSecStarsWrapper" class="ln-3rdSecStarsWrapper">';
		$txtLines .= '<span><img src="img/star.png" /></span>';
		$txtLines .= '<span><img src="img/star.png" /></span>';
		$txtLines .= '<span><img src="img/star.png" /></span>';
		$txtLines .= '<span><img src="img/star.png" /></span>';
		$txtLines .= '<span><img src="img/star.png" /></span>';
		$txtLines .= '</div>';
		$txtLines .= '</div>';
		$txtLines .= '</div>';
		self::$thirdTxtSection = '<div id="ln6-thirdTxtSection" class="ln-thirdTxtSection">'.$txtLines.'</div>';
	}
	
	private function creatingFourthTxtSection(){
		$txtLine = '<div id="ln6-4thSecRating"><span>9.8</span></div>';
		self::$fourthTxtSection = '<div id="ln6-fourthTxtSection">'.$txtLine.'</div>';
	}
	
	private function creatingFifthTxtSection(){
		$txtLine = '<div id="ln6-5thSecInputWrapper" class="ln-5thSecInputWrapper"><input id="ln6-5thSecInput" class="ln-5thSecInput" type="button" value="Play" /></div>';
		self::$fifthTxtSection = '<div id="ln6-fifthTxtSection" class="ln-fifthTxtSection">'.$txtLine.'</div>';
	}
	
	private function creatingLine6(){
		$cont = '<div id="line6" class="line">';
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

$line6 = new Line6();

?>