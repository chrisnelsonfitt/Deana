<?php

$emailSubject = 'New Website Message!';
$webMaster =  'deanajohnson09@gmail.com';


$Name = $_POST['name'];
    
$Email = $_POST['email'];
    
$Type = $_POST['type'];
$Phone = $_POST['phone'];

$Message = $_POST['message'];


$body = <<<EOD
<<<<<<< HEAD
<br><br><br>


<html>
    <head>
        <title> Deanajphotography</title>
        <meta name='viewport' content="width=device-width, initial_scale=1.0">
        <link href="css/bootstrap.min.css" rel = 'stylesheet'>
        <link href="css/style.css" rel='stylesheet'>
          
        <link href='http://fonts.googleapis.com/css?family=Great+Vibes|Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
  
    </head>
    <header>
    <h1>Inquery</h1>  
    </header> 
    <body>
     <br><br>
<div id= 'email-html'>
    <h2>Contact Information</h2>
Name: $Name <br>
Phone:$Phone <br>
Email: $Email <br><br><br>
<h2>Message</h2>

Subject: $Type <br><br>
Message: $Message <br><br><br>
</div>
      
    </body>
   
       
  <footer>
  
  </footer>
        
   
        
   
    </html>
  






=======
<br><hr><br>
Name: $Name <br>
Phone:$Phone <br>
Email: $Email <br><br>


Subject: $Type <br><br>
Message: $Message <br><br><br>
>>>>>>> 795186f62e768cdeac1312ac12a0464173e13d32

EOD;


$headers = "From: $Email\r\n";
$headers .= "Content-type: text/html\r\n";
$success = mail($webMaster, $emailSubject, $body, $headers);
       


$theResults = <<<EOD
 <html>
    <head>
        <title> Deanajphotography</title>
        <meta name='viewport' content="width=device-width, initial_scale=1.0">
        <link href="css/bootstrap.min.css" rel = 'stylesheet'>
        <link href="css/style.css" rel='stylesheet'>
           <link href="css/slide .css" rel='stylesheet'>
        <link href='http://fonts.googleapis.com/css?family=Great+Vibes|Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
       
     <script src="js/bootstrap.min.js"></script>
        
        <script src="http://malsup.github.com/jquery.cycle2.js"></script>
     
    </head>
    <header>
        
              
        
              
      <div class="navbar navbar-default navbar-static-top header">
        <div class= 'container'>
                <div class="navbar-header">
                     <div class='navbar-brand'><a href='index.html'>
                    
Home
                         </a>
                    </div>
                   
                       <button class="navbar-toggle" data-toggle="collapse" data-target = ".navHeaderCollapse">
                            Menu
                        </button>
                </div>
                <div class="collapse navbar-collapse navHeaderCollapse">
                    <ul class="nav navbar-nav navbar-right">
                          <li class = "dropdown"> 
                            <a href ="#" class = "dropdown-toggle" data-toggle = "dropdown">Portfolio</a> 
                        
                            <ul class = " dropdown-menu">
                               <li><a href = "portraits.html"> Portaits</a></li>       
                               
                                <li><a href = "couples.html"> Couples</a></li> 
                                
                                <li><a href = "families.html"> Families</a></li> 
                               
                                <li><a href = "travel.html"> Adventures</a></li> 
                                
                            </ul>
                        </li>
                        
                        <li><a href="https://deanajphotography.wordpress.com/author/deanajphotography/">Blog</a></li>
                        <li>
                               <li><a href="about.html">About</a></li>
                        <li><a href="info.html">Info</a></li>
                        <li><a href="contact.html">Leave Me A Note</a></li>
                        
<li><a href="#"></a></li>
                        <li class = "dropdown"> 
                           
                        </li>
                        
                    </ul>
                    
            </div>
                </div>
        <h1>Deanajphotography</h1>
          
        </div>
         
        
    </header>
        
    <body>
       <br>
       <br>
 <h2 id='sent_message'>
 Message sent successfully!
 </h2>
       <br>
       <br>
         
      
    </body>
   
       
  <footer>
     
    
      <div id='icon'>
           <ul >
   <li><a href='https://instagram.com/deanajphotography/'> <img src="img/instagram.png"></a></li> 
      <li><a href='https://www.facebook.com/deanajphotography'> <img src="img/facebook.png"></a></li> 
         </ul>
               </div>
               
          
               
               <ul class='bottom-footer'>  
                <li class='email-tag'>deanajohnson09@gmail.com</li>
                 <li class='email-tag'>&copy Deanajphotography </li>
                
      </ul>
               
               
               
               
               
   
        </footer>
        
          <script src="js/app.js"></script>
    <script src="js/button.js"></script>
        
        
        
        
        
   
    </html>
  

EOD;


echo "$theResults";



?>