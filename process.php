<?php
chdir('comments');
  $counter = Count(glob('*.txt')) + 1;
 $file = fopen($counter.".txt","w");
 echo fwrite($file,"First Name: ");
 echo fwrite($file, $_POST['fname']);
 echo fwrite($file, "\r\nLast Name: ");
 echo fwrite($file, $_POST['lname']);
 echo fwrite($file, "\r\nEmail: ");
 echo fwrite($file, $_POST['email']);
 echo fwrite($file, "\r\nComment: \r\n");
 echo fwrite($file, $_POST['message']);
 fclose($file);
 echo "Successful Submit!"
 ?>
