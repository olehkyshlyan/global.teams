<?

class Line2{
	public static $content = NULL;
	private static $firstTxtLine = NULL;
	private static $secondTxtLine = NULL;
	private static $thirdTxtLine = NULL;
	
	function __construct(){
		$this->creatingFirstTxtLine();
		$this->creatingSecondTxtLine();
		$this->creatingThirdTxtLine();
		$this->creatingLine2();
	}
	
	private function creatingFirstTxtLine(){
		self::$firstTxtLine = '<div id="ln2-firstTxtLine"><span>TOP 5 Real Money Online Casino Bonus List !</span></div>';
	}
	
	private function creatingSecondTxtLine(){
		$txtLine1 = 'Play online slots for real money at trusted online casinos in Europe.';
		$txtLine2 = 'Claim your exclusive welcome bonus and start playing slots today !';
		self::$secondTxtLine = '<div id="ln2-secondTxtLine"><span>'.$txtLine1.' '.$txtLine2.'</span></div>';
	}
	
	private function creatingThirdTxtLine(){
		$txtLine = '10,302 Claimed Bonuses and Counting !';
		self::$thirdTxtLine = '<div id="ln2-thirdTxtLine"><span>'.$txtLine.'</span></div>';
	}
	
	private function creatingLine2(){
		$cont = '<div id="line2">';
		$cont .= '<div id="ln2TxtWrap">';
		$cont .= self::$firstTxtLine;
		$cont .= self::$secondTxtLine;
		$cont .= self::$thirdTxtLine;
		$cont .= '</div>';
		$cont .= '</div>';
		self::$content = $cont;
	}
}

$line2 = new Line2();

?>