<?

class Line4{
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
		$this->creatingLine4();
	}
	
	private function creatingNotice(){
		$nt = '<div id="ln4-notice" class="ln-notice">';
		$nt .= '<div id="ln4-ntc-firstGeometryFigure" class="ln-ntc-firstGeometryFigure"></div>';
		$nt .= '<div id="ln4-ntc-secondGeometryFigure" class="ln-ntc-secondGeometryFigure"></div>';
		$nt .= '<span>PLAYER FAVOURITE</span>';
		$nt .= '</div>';
		self::$notice = $nt;
	}
	
	private function creatingFirstTxtSection(){

		$logo = '<div id="ln4-1stSecLogo"><span><img src="img/playzee.png" /></span></div>';
		$firstArrow = '<div id="ln4-1stSec-firstArrow"></div>';
		$secondArrow = '<div id="ln4-1stSec-secondArrowContainer">';
		$secondArrow .= '<div id="ln4-1stSec-secondTopArrow"></div>';
		$secondArrow .= '<div id="ln4-1stSec-secondBottomArrow"></div>';
		$secondArrow .= '</div>';
		self::$firstTxtSection = '<div id="ln4-firstTxtSection" class="ln-firstTxtSection">'.$logo.$firstArrow.$secondArrow.'</div>';
	}
	
	private function creatingSecondTxtSection(){
		$txtLines = '<div id="ln4-2ndSecLinesWrapper" class="ln-2ndSecLinesWrapper">';
		$txtLines .= '<div id="ln4-2ndSecFirstRow" class="ln-2ndSecFirstRow"><span>Playzee</span></div>';
		$txtLines .= '<div id="ln4-2ndSecSecondRow" class="ln-2ndSecSecondRow"><span>100% Up to</span></div>';
		$txtLines .= '<div id="ln4-2ndSecAmount" class="ln-2ndSecAmount"><span>€1500</span></div>';
		$txtLines .= '<div><span>+ 150 Zee Spins</span></div>';
		$txtLines .= '<div><span>+ 500 Zee Points</span></div>';
		$txtLines .= '</div>';
		self::$secondTxtSection = '<div id="ln4-secondTxtSection" class="ln-secondTxtSection">'.$txtLines.'</div>';
	}
	
	private function creatingThirdTxtSection(){
		$txtLines = '<div id="ln4-3rdSecLinesWrapper" class="ln-3rdSecLinesWrapper">';
		$txtLines .= '<div id="ln4-3rdSecLines" class="ln-3rdSecLines">';
		$txtLines .= '<div id="ln4-3rdSecRating" class="ln-3rdSecRating"><span>Rating (2589)</span></div>';
		$txtLines .= '<div id="ln4-3rdSecStarsWrapper" class="ln-3rdSecStarsWrapper">';
		$txtLines .= '<span><img src="img/star.png" /></span>';
		$txtLines .= '<span><img src="img/star.png" /></span>';
		$txtLines .= '<span><img src="img/star.png" /></span>';
		$txtLines .= '<span><img src="img/star.png" /></span>';
		$txtLines .= '<span><img src="img/star.png" /></span>';
		$txtLines .= '</div>';
		$txtLines .= '</div>';
		$txtLines .= '</div>';
		self::$thirdTxtSection = '<div id="ln4-thirdTxtSection" class="ln-thirdTxtSection">'.$txtLines.'</div>';
	}
	
	private function creatingFourthTxtSection(){
		$txtLine = '<div id="ln4-4thSecRating"><span>10.0</span></div>';
		self::$fourthTxtSection = '<div id="ln4-fourthTxtSection">'.$txtLine.'</div>';
	}
	
	private function creatingFifthTxtSection(){
		$txtLine = '<div id="ln4-5thSecInputWrapper" class="ln-5thSecInputWrapper"><input id="ln4-5thSecInput" class="ln-5thSecInput" type="button" value="Play" /></div>';
		self::$fifthTxtSection = '<div id="ln4-fifthTxtSection" class="ln-fifthTxtSection">'.$txtLine.'</div>';
	}
	
	private function creatingLine4(){
		$cont = '<div id="line4" class="line">';
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

$line4 = new Line4();

?>