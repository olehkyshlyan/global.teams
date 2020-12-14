<?

class Line4{
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
		$this->creatingLine4();
	}
	
	private function creatingFirstTxtSection(){
		$notice = '<div id="ln4-1stSecNotice">';
		$notice .= '<div id="ln4-1stSecNtc-firstGeometryFigure"></div>';
		$notice .= '<div id="ln4-1stSecNtc-secondGeometryFigure"></div>';
		$notice .= '<span>PLAYER FAVOURITE</span>';
		$notice .= '</div>';
		$logo = '<div id="ln4-1stSecLogo"><span><img src="img/playzee.png" /></span></div>';
		$firstArrow = '<div id="ln4-1stSec-firstArrow"></div>';
		$secondArrow = '<div id="ln4-1stSec-secondArrowContainer">';
		$secondArrow .= '<div id="ln4-1stSec-secondTopArrow"></div>';
		$secondArrow .= '<div id="ln4-1stSec-secondBottomArrow"></div>';
		$secondArrow .= '</div>';
		self::$firstTxtSection = '<div id="ln4-firstTxtSection">'.$notice.$logo.$firstArrow.$secondArrow.'</div>';
	}
	
	private function creatingSecondTxtSection(){
		$txtLines = '<div id="ln4-2ndSecLinesWrapper">';
		$txtLines .= '<div><span>100% Up to</span></div>';
		$txtLines .= '<div id="ln4-2ndSecAmount"><span>€1500</span></div>';
		$txtLines .= '<div><span>+ 150 Zee Spins</span></div>';
		$txtLines .= '<div><span>+ 500 Zee Points</span></div>';
		$txtLines .= '</div>';
		self::$secondTxtSection = '<div id="ln4-secondTxtSection">'.$txtLines.'</div>';
	}
	
	private function creatingThirdTxtSection(){
		$txtLines = '<div id="ln4-3rdSecLinesWrapper">';
		$txtLines .= '<div id="ln4-3rdSecLines">';
		$txtLines .= '<div><span>Rating (2589)</span></div>';
		$txtLines .= '<div id="ln4-3rdSecStarsWrapper">';
		$txtLines .= '<span><img src="img/star.png" /></span>';
		$txtLines .= '<span><img src="img/star.png" /></span>';
		$txtLines .= '<span><img src="img/star.png" /></span>';
		$txtLines .= '<span><img src="img/star.png" /></span>';
		$txtLines .= '<span><img src="img/star.png" /></span>';
		$txtLines .= '</div>';
		$txtLines .= '</div>';
		$txtLines .= '</div>';
		self::$thirdTxtSection = '<div id="ln4-thirdTxtSection">'.$txtLines.'</div>';
	}
	
	private function creatingFourthTxtSection(){
		$txtLine = '<div id="ln4-4thSecRating"><span>10.0</span></div>';
		self::$fourthTxtSection = '<div id="ln4-fourthTxtSection">'.$txtLine.'</div>';
	}
	
	private function creatingFifthTxtSection(){
		$txtLine = '<div id="ln4-5thSecInputWrapper"><input id="ln4-5thSecInput" class="ln-5thSecInput" type="button" value="Play" /></div>';
		self::$fifthTxtSection = '<div id="ln4-fifthTxtSection">'.$txtLine.'</div>';
	}
	
	private function creatingLine4(){
		$cont = '<div id="line4">';
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