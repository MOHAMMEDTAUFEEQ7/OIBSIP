<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>G. Pullaiah College of Engineering and Technology</title>
<link href="dynamic_site.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="main">
<?php
include_once("layout.php");
drawheader();

?>

 <marquee id="ml" direction="left"
        scrolldelay="10" scrollamount="10" onmouseover="this.stop()" onmouseout="this.start();">
                              

        <strong><font color="red">Flash News:</font></strong>
        </div>
        <span> G PULLAIAH COLLEGE OF ENGINEERING AND TECHNOLOGY::</span> <a href="placementcell.php">PLACEMENTS CELL</a>
       
           </marquee>
<div class="page">
<div id="content">
<?php
include_once("layout.php");
drawmain();
drawsubmain();

?>

</div>
</div>

<?php
drawsidebar();
	echo " <div style=\"clear: both;\">&nbsp;</div>
</div>";
drawfooter();
?>

</div>
</body>
</html>