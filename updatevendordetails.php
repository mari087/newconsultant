<?php
include('dbcon.php');
 include('session.php');

                                                $query= mysql_query("select * from users where user_id = '$session_id'")or die(mysql_error());
                                                $row = mysql_fetch_array($query);
                                                $firstname=$row['firstname'];
                                                ?>
<?php

    /* Attempt MySQL server connection. Assuming you are running MySQL

    server with default setting (user 'root' with no password) */

   include('dbcon.php');
   $vendor_id= $_POST['vendor_id'];
       $corporatename= $_POST['corporatename'];
     $email= $_POST['email'];
$taxid= $_POST['taxid'];
$contactnumber= $_POST['contactnumber'];
$address= $_POST['address'];

        


     mysql_query("UPDATE vendordetails SET corporatename = '$corporatename' , email  = '$email' , 
contactnumber = '$contactnumber' , taxid = '$taxid' , address = '$address' WHERE vendor_id = '$vendor_id'")or die(mysql_error());
        mysql_query("insert into activity_log (date,username,action) values(NOW(),'$firstname','updated corporatedetails of $corporatename ')")or die(mysql_error());
        header('location:vendors.php');
       



?>

