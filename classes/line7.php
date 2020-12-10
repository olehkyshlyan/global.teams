<?

class Line7{
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
		$this->creatingLine7();
	}
	
	private function creatingFirstTxtSection(){
		$notice = '<div id="ln7-1stSecNotice">';
		$notice .= '<div id="ln7-1stSecNtc-firstGeometryFigure"></div>';
		$notice .= '<div id="ln7-1stSecNtc-secondGeometryFigure"></div>';
		$notice .= '<span>EXCLUSIVE</span>';
		$notice .= '</div>';
		self::$firstTxtSection = '<div id="ln7-firstTxtSection">'.$notice.'<span></span></div>';
	}
	
	private function creatingSecondTxtSection(){
		$txtLines = '<div id="ln7-2ndSecLinesWrapper">';
		$txtLines .= '<div><span>100% Up to</span></div>';
		$txtLines .= '<div id="ln7-2ndSecAmount"><span>€200</span></div>';
		$txtLines .= '<div><span>+ 25 Free Spins on Book of Dead</span></div>';
		$txtLines .= '</div>';
		self::$secondTxtSection = '<div id="ln7-secondTxtSection">'.$txtLines.'</div>';
	}
	
	private function creatingThirdTxtSection(){
		$txtLines = '<div id="ln7-3rdSecLinesWrapper">';
		$txtLines .= '<div><span>Rating (1890)</span></div>';
		$txtLines .= '<div id="ln7-3rdSecStarsWrapper">';
		$txtLines .= '<span><img src="img/star.png" /></span>';
		$txtLines .= '<span><img src="img/star.png" /></span>';
		$txtLines .= '<span><img src="img/star.png" /></span>';
		$txtLines .= '<span><img src="img/star.png" /></span>';
		$txtLines .= '<span><img src="img/star.png" /></span>';
		$txtLines .= '</div>';
		$txtLines .= '</div>';
		self::$thirdTxtSection = '<div id="ln7-thirdTxtSection">'.$txtLines.'</div>';
	}
	
	private function creatingFourthTxtSection(){
		$txtLine = '<div id="ln7-4thSecRating"><span>9.4</span></div>';
		self::$fourthTxtSection = '<div id="ln7-fourthTxtSection">'.$txtLine.'</div>';
	}
	
	private function creatingFifthTxtSection(){
		$txtLine = '<div id="ln7-5thSecInputWrapper"><input id="" type="button" value="Play" /></div>';
		self::$fifthTxtSection = '<div id="ln7-fifthTxtSection">'.$txtLine.'</div>';
	}
	
	private function creatingLine7(){
		$cont = '<div id="line7" class="lines">';
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