<?

include_once "classes/line1.php";
include_once "classes/line2.php";
include_once "classes/line3.php";
include_once "classes/line4.php";
include_once "classes/line5.php";
include_once "classes/line6.php";
include_once "classes/line7.php";
include_once "classes/line8.php";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  
  <title></title>
  
  <link rel="stylesheet" type="text/css" href="css/index.css" />
	<link rel="stylesheet" type="text/css" href="css/line1.css" />
	<link rel="stylesheet" type="text/css" href="css/line2.css" />
	<link rel="stylesheet" type="text/css" href="css/line3.css" />
	<link rel="stylesheet" type="text/css" href="css/line4.css" />
	<link rel="stylesheet" type="text/css" href="css/line5.css" />
	<link rel="stylesheet" type="text/css" href="css/line6.css" />
	<link rel="stylesheet" type="text/css" href="css/line7.css" />
	<link rel="stylesheet" type="text/css" href="css/line8.css" />
  <style type="text/css">
    
  </style>
  
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script type='text/javascript' src='js/index.js'></script>
  <script type="text/javascript">
	  
  </script>
</head>

<body>

<div id="wrapper">
<? print(Line1::$content); ?>
<? print(Line2::$content); ?>
<? print(Line3::$content); ?>
<? print(Line4::$content); ?>
<? print(Line5::$content); ?>
<? print(Line6::$content); ?>
<? print(Line7::$content); ?>
<? print(Line8::$content); ?>
</div>

</body>

</html>