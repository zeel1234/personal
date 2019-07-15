<?php 
   $undecided = 3.14;    
   $holder = ( double ) $undecided;  
   print gettype( $holder ) ;  
   print " -- $holder<br />";   
   $holder = ( string ) $undecided;  
   print gettype( $holder );  
   print " -- $holder<br />";   
   $holder = ( integer ) $undecided; 
   print gettype( $holder ); 
   print " -- $holder<br />"; 
   $holder = ( double ) $undecided;
   print gettype( $holder ); 
   print " -- $holder<br />";  
   $holder = ( boolean ) $undecided;   
   print gettype( $holder );  
   print " -- $holder<br />";      
?> 