 <?php
 date_default_timezone_set('Asia/Calcutta');
  $cur=date("G:i -m/d/y",time());
  $itm=60*24*60+time();
  echo "Current time ".$cur;
  setcookie('last_visit',date("G:i -m/d/y"),$itm);
   if(isset($_COOKIE['last_visit'])) {
        $visit=$_COOKIE['last_visit'];

        echo " <br> Your last visit was- " .$visit;
    }
  
 ?>   
 