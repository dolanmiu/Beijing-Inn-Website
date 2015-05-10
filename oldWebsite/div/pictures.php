<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/xml; charset=ISO-8859-1" />
	<title>Beijing Inn -  Chinese Restaurant and Takeaway</title>
	<meta name="description" content="Beijing Inn is the best number 1 Chinese restaurant in the business in Gillingham and Medway. Chinese, Malaysian, Thai dishes are all part of our extensive menu, and we offer buffet too! Located off Gillinham's busy high street, it is an easily accessible. If travelling isn't an option, try out our takeaway service!" />
	<meta name="keywords" content="Beijing Inn Chinese Malaysian Thai Restaurant Gillingham Kent Good service cheap high class family lunch dinner traditional buffet sunday valentines party bar drinks takeaway fast Tony Miu Dolan" />
	<link rel="stylesheet" type="text/css" href="../styles.css" media="screen" />
    <link rel="stylesheet" href="../css/lightbox.css" type="text/css" media="screen" />
	<!--[if IE]>
	<link rel="stylesheet" type="text/css" href="iestyles.css" media="screen" />
	<![endif]-->
    <link rel="alternate" type="application/rss+xml" title="John Bokma RSS" href="/feed.xml">
	<link id="meta" rel="rel:meta" href="http://www.w3.org/2000/08/w3c-synd/#meta" />
    <script type="text/javascript" src="../swfobject.js"></script>
    <script type="text/javascript" src="../js/prototype.js"></script>
	<script type="text/javascript" src="../js/scriptaculous.js?load=effects,builder"></script>
	<script type="text/javascript" src="../js/lightbox.js"></script>
</head>

<body>
<bgsound id="sound" /> 
<div id="box">
	<div id="top"></div>
  <div id="header">
    <ul id="navigation">
      <a onmouseover="PlaySound('beep.wav')" href="index.php"><li>Home</li></a>
      <a onmouseover="PlaySound('beep.wav')" href="menu.php"><li>Menu</li></a>
      <a onmouseover="PlaySound('beep.wav')" href="location.php"><li>Location</li></a>
      <a onmouseover="PlaySound('beep.wav')" href="contact.php"><li>Contact</li></a>
      <a onmouseover="PlaySound('beep.wav')" href="pictures.php"><li>Pictures</li></a>
      <a onmouseover="PlaySound('beep.wav')" href="testimonials.php"><li>Testimonial</li></a>
    </ul>
	</div>
	<div id="container">
		<div id="leftColumn">
          <div id="leftcolumn_head">
          	
            		<script type="text/javascript">		
						var so = new SWFObject("../flash_banner.swf", "sotester", "552", "200", "9", "#FFFFFF");
						so.addVariable("flashVarText", "Banner - Enjoy the pictures");
						so.addParam("menu", "false");
						so.write("flashcontent");
					</script>
					<?php include '../picture_content.html'; ?>
          </div>
          <div id="leftcolumn_foot">       		
          </div>
        </div>
  		<div id="rightColumn">
        	<div id="rightcol_top">
            </div>
            <div id="rightcol_middle">
                <div id="rssicon"><a href="../feed.xml"><img src="../images/rss.png" border="0"/></a>
                </div>
            	<?php include '../news.html'; ?>
            </div>
  		</div>
  </div>
	<div id="footer">
	  <p class="textfoot">Beijing Inn and its content on this site is Copyright © 2010. All rights reserved.</div>
</div>
</body>
</html>