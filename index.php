<html>
<title> Aventure Cloud </title>
<body>
<h1>
<center>
<IMG SRC="logo.png" ALT="logo"><br>
<?php
  echo "Internal IP:-";
echo $_SERVER['SERVER_ADDR'];
  echo "          | Your IP:-";
  // PHP code to extract IP  
  
function getVisIpAddr() { 
      
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) { 
        return $_SERVER['HTTP_CLIENT_IP']; 
    } 
    else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) { 
        return $_SERVER['HTTP_X_FORWARDED_FOR']; 
    } 
    else { 
        return $_SERVER['REMOTE_ADDR']; 
    } 
} 
  
// Store the IP address 
$vis_ip = getVisIPAddr(); 
  
// Display the IP address 
echo $vis_ip; 
?>
</center>
</h1>
</body>
</html>
