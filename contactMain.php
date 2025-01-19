<html http://www.w3.org/1999/xhtml>
<head>
<meta content="text/html, charset=utf-8" http-equiv="content-type">

<title>The Design Work of Nick Biewer - Contact</title>
<meta content="Nick Biewer, Nicholas Biewer, Media, Imaging, Portraits, Photography, Studio, Photo, Digital Art, Artist, Website Development, Graphic Designer, Baltimore, Maryland, Design, PHP, Flash, CSS, Branding, Photoshop, Illustrator, Posters, Album Artwork, Music, Action Sports, Record Label, Band, Animation" name="keywords">
<meta content="The Design Work of Nick Biewer - Digital Imaging, Photography, Animation and More" name="description">

<link type="text/css" rel="stylesheet" href="styleSheet.css">
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-22594623-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</head>

<body>
<div id="full">
	<div id="header">
    	<a title="Home" href="indexPage.php"><img src="imagesNew/newHeaderSm.jpg" border="0"></a>
	</div>
    
    <ul id="bar">
    	<li class="barAbout">
        	<a title="About" href="aboutMain.php"></a>
            </li>
        <li class="barPhoto">
        	<a title="Photo" href="photoMain.php"></a>
            </li>
        <li class="barImage">
        	<a title="Imaging" href="imagingMain.php"></a>
           </li>
        <li class="barAni">
        	<a title="Animation" href="aniMain.php"></a>
      		</li>
        <li class="barContact">
        	<a title="Contact" href="contactMain.php"></a>
      </li>
      </ul>
  <div id="lBar"> 
  
  </div>
   
     
     
     <div id="container">
   	  <div class="left-col">
        	<span class="headers"> technical skills </span>
            <div class="divider"><p style="line-height: 0px;"></p></div>
            
            <div class="otherFields">
            
            
            Adobe Photoshop<br>
            Adobe Illustrator<br>
            Adobe Dreamweaver<br>
            Adobe Flash<br>
            Adobe After Effects<br><br>
            Digital Photography<br>
            Studio Lighting<br><br>
            HTML<br>
            PHP<br>
            CSS<br>
           
         
            
            
            
            
            
            </div>
            
      
        
        </div>
        <div class="center-col">
        	<span class="headers"> contact </span>
            <div class="divider"><p style="line-height: 0px;"></p></div>
            	<div class="email">
                
                 <?php

//location
$filepath = '/home/biewer2/public_html/email.txt';




//has the submit button been pressed
if(isset($_POST['submit']))
{
	//check email field
	if(empty($_POST['email']))
	{
		$error['email'] = 'You did not fill out your name'; 	
	}
	
	//subject...
	if(empty($_POST['subject']))
	{
		$error['subject'] = 'You did not fill out a subject';
	}
	
	//message...
	if(empty($_POST['message']))
	{
		$error['message'] = 'You did not fill out a message';
	} else {
	
		$data = date("m/d/Y") . ',' . $_POST['subject'] . "\n";
	
		// Write to the textfile
		$fp = fopen($filepath, "a");
		flock($fp, LOCK_EX);
		fwrite($fp, $data);
		flock($fp, LOCK_UN);
		fclose($fp);
	
	}
}


// Get the contents in the textfile
$data = file($filepath);
	
	


	
	
	//if no errors send message
	if(sizeof($error) == 0)
	{
	
	
//to, message. etc
mail('nickbiewerdesign@gmail.com', $_POST['subject'], $_POST['message'], "From: {$_POST['email']}");

	}else{
		//loop errrors
		foreach($error as $value)
		{
			echo "<span style=\"color: #990000\">" . $value . "</span><br />";
		}
	
	
}



?>


<form style= "color: #063"  method="post" action="contactMain.php">
	<label for="email">Your Email:</label>
    <input id="email" name="email" type="text" value="<?php echo $_POST['email']; ?>" /><br /><br />
    <label for"subject">Subject:</label>
    <input id="subject" name="subject" type="text" value="<?php echo $_POST['subject']; ?>" /><br /><br />
    <label for="message">Message:</label>
    <textarea is="message" name="message" rows="16" cols="40"></textarea><br /><br />
    <input name="submit" type="submit" value="Send" />
    </form>
                
                
                </div>
        
        </div>
        <div class="right-col">
            	<span class="headers"> resume </span>
        <div class="divider"><p style="line-height: 0px;"></p></div>
       		<div class="allies">
            
                        Bachelors of Fine Art, <br> Digital Arts Major <br><br>  
                        <a href="http://www.tcnj.edu">The College of New Jersey</a> <br><br><br>

          <a href="Nick_Biewer_Resume2014.pdf"><span class="titlesLg"> Download CV </span></a>
            
            
        </div>
        
        
        </div>
        
        
   
     
    
     
     <div id="footer">
     	<div id="footerBar">
        
        
        </div>
    	
        <div id="footerNav">
        	<span class="bottomNav">
            	<a href="indexPage.php">[home]</a>  
                <a href="aboutMain.php">[about]</a> 
                <a href="photoMain.php">[photo]</a>
                <a href="imageMain.php">[imaging]</a>
                <a href="aniMain.php">[animation]</a>
                <a href="contactMain.php">[contact]</a> 
                
            </span>
            <br><br>
             &copy; WEBSITE DESIGN BY NICK BIEWER 
        </div>
       
     </div>  
    
   
</div>
</div>

</body>
</html>