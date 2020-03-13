<!DOCTYPE html>
<html lang="en">
 <head>
<title>Kate Baldwin: Web Developer Examples and Resources</title>
  <meta charset="utf-8" />
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <link rel="stylesheet" href="css/big.css" />
  <link rel="stylesheet" href="css/nav.css" />
  
  <!-- JQUERY -->
  <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
  <!-- MENUMAKER PLUGIN -->
  <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
  <script src="js/script.js"></script>
  <!-- ICON LIBRARY -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
     
 </head>
 <body>
     
     <main>
     <header>
        <h1>Web Developer Examples and Resources by Kate Baldwin</h1>
        <nav id ="cssmenu">
         <ul>
            <li><a href="../index.html"><i class="fa fa-fw fa-institution"></i> WEB110</a></li>
            <li><a href="index.html"><i class="fa fa-fw fa-home"></i> BIG Website</a></li>
            <li><a href="gallery.html"><i class="fa fa-fw fa-camera-retro"></i>Gallery</a></li>
             
            <!-- DROPDOWN FOR RESEARCH -->
            <li><a href="#"><i class="fa fa-fw fa-globe"></i>Research</a>
                <ul>
                  <li><a href="accessibility.html"><i class="fa fa-fw fa-thumbs-o-up"></i> Accessibility</a></li>
                  <li><a href="smo.html"><i class="fa fa-fw fa-thumbs-o-up"></i>SMO</a></li>
                  <li><a href="forms.html"><i class="fa fa-fw fa-thumbs-o-up"></i>Forms</a></li>
                </ul>
            </li>
             
            <!-- DROPDOWN FOR GOOGLE TOOLS -->
            <li><a href="#"><i class="fa fa-fw fa-bars"></i> Google Tools</a>
                <ul>
                  <li><a href="seo.html"><i class="fa fa-fw fa-desktop"></i> SEO</a></li>
                  <li><a href="calendar.html"><i class="fa fa-fw fa-calendar"></i> Calendar</a></li>
                  <li><a href="map.html"><i class="fa fa-fw fa-map-o"></i> Map</a></li>
                </ul>
            </li>
            <li><a href="contact.php"><i class="fa fa-fw fa-check-square"></i> Contact Kate</a></li>
          </ul>
        </nav>
     </header>
     
   <main class="wrapper">
       <h2 class="subheader">Contact Kate</h2>
       	<?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        //place you/your client's email address here
        //$toAddress = "katharine.baldwin@seattlecolleges.edu";  
        //$toName = "Kate Baldwin"; //place your client's name here
        //$website = "WEB110 Portal Website";  //place NAME of your client's website

        echo loadContact('simple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements

	?>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://www.google.com/recaptcha/api.js?hl=en"></script>
    <script>
        /**
        * requires reCAPTCHA so user doesn't lose form data 
        *
        * https://stackoverflow.com/questions/27706594/how-can-i-make-recaptcha-a-required-field
        * 
        * In this version, jQuery is required and code will find first form on page and require 
        * the reCAPTCHA for that form using document.forms[0]
        */
    
        function checkRecaptcha() {
            res = $('#g-recaptcha-response').val();
            if (res == "" || res == undefined || res.length == 0)
                return false;
            else
                return true;
        }
        $(function() {
            let thisForm = document.forms[0];
            $(thisForm).submit(function(e) {            
                if(!checkRecaptcha()) {
                    alert("Please confirm you are not a robot.");
                    return false;
                }
            });
        }); 
         
    </script> 
       
    <footer>
      <p><small>&copy; 2020 by <a href="contact.php">Contact Kate Baldwin</a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
    </footer>
  </main>
     
 </body>
</html>