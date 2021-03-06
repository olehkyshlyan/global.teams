<?

class Line7{
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
		$this->creatingLine7();
	}
	
	private function creatingNotice(){
		$nt = '<div id="ln7-notice" class="ln-notice">';
		$nt .= '<div id="ln7-ntc-firstGeometryFigure" class="ln-ntc-firstGeometryFigure"></div>';
		$nt .= '<div id="ln7-ntc-secondGeometryFigure" class="ln-ntc-secondGeometryFigure"></div>';
		$nt .= '<span>EXCLUSIVE</span>';
		$nt .= '</div>';
		self::$notice = $nt;
	}
	
	private function creatingFirstTxtSection(){
		$logo = '<div id="ln7-1stSecLogo"><span><img src="img/lasvegas.png" /></span></div>';
		$firstArrow = '<div id="ln7-1stSec-firstArrow"></div>';
		$secondArrow = '<div id="ln7-1stSec-secondArrowContainer">';
		$secondArrow .= '<div id="ln7-1stSec-secondTopArrow"></div>';
		$secondArrow .= '<div id="ln7-1stSec-secondBottomArrow"></div>';
		$secondArrow .= '</div>';
		self::$firstTxtSection = '<div id="ln7-firstTxtSection">'.$logo.$firstArrow.$secondArrow.'</div>';
	}
	
	private function creatingSecondTxtSection(){
		$txtLines = '<div id="ln7-2ndSecLinesWrapper" class="ln-2ndSecLinesWrapper">';
		$txtLines .= '<div id="ln7-2ndSecFirstRow" class="ln-2ndSecFirstRow"><span>LeoVegas</span></div>';
		$txtLines .= '<div id="ln7-2ndSecSecondRow" class="ln-2ndSecSecondRow"><span>100% Up to</span></div>';
		$txtLines .= '<div id="ln7-2ndSecAmount" class="ln-2ndSecAmount"><span>€200</span></div>';
		$txtLines .= '<div><span>+ 25 Free Spins on Book of Dead</span></div>';
		$txtLines .= '</div>';
		self::$secondTxtSection = '<div id="ln7-secondTxtSection" class="ln-secondTxtSection">'.$txtLines.'</div>';
	}
	
	private function creatingThirdTxtSection(){
		$txtLines = '<div id="ln7-3rdSecLinesWrapper" class="ln-3rdSecLinesWrapper">';
		$txtLines .= '<div id="ln7-3rdSecLines" class="ln-3rdSecLines">';
		$txtLines .= '<div id="ln7-3rdSecRating" class="ln-3rdSecRating"><span>Rating (1890)</span></div>';
		$txtLines .= '<div id="ln7-3rdSecStarsWrapper" class="ln-3rdSecStarsWrapper">';
		$txtLines .= '<span><img src="img/star.png" /></span>';
		$txtLines .= '<span><img src="img/star.png" /></span>';
		$txtLines .= '<span><img src="img/star.png" /></span>';
		$txtLines .= '<span><img src="img/star.png" /></span>';
		$txtLines .= '<span><img src="img/star.png" /></span>';
		$txtLines .= '</div>';
		$txtLines .= '</div>';
		$txtLines .= '</div>';
		self::$thirdTxtSection = '<div id="ln7-thirdTxtSection" class="ln-thirdTxtSection">'.$txtLines.'</div>';
	}
	
	private function creatingFourthTxtSection(){
		$txtLine = '<div id="ln7-4thSecRating"><span>9.4</span></div>';
		self::$fourthTxtSection = '<div id="ln7-fourthTxtSection">'.$txtLine.'</div>';
	}
	
	private function creatingFifthTxtSection(){
		$txtLine = '<div id="ln7-5thSecInputWrapper" class="ln-5thSecInputWrapper"><input id="ln7-5thSecInput" class="ln-5thSecInput" type="button" value="Play" /></div>';
		self::$fifthTxtSection = '<div id="ln7-fifthTxtSection" class="ln-fifthTxtSection">'.$txtLine.'</div>';
	}
	
	private function creatingLine7(){
		$cont = '<div id="line7" class="line">';
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

$line7 = new Line7();

?>