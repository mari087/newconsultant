<?php
include('dbcon.php');
 include('session.php');

                                                $query= mysql_query("select * from users where user_id = '$session_id'")or die(mysql_error());
                                                $row = mysql_fetch_array($query);
                                                $firstname=$row['firstname'];
                                                $username=$row['username'];
                                                
                                                ?>

<?php

    /* Attempt MySQL server connection. Assuming you are running MySQL

    server with default setting (user 'root' with no password) */

   include('dbcon.php');
   $corporatename= $_POST['corporatename'];
     $email= $_POST['email'];
$taxid= $_POST['taxid'];
$contactnumber= $_POST['contactnumber'];
$address= $_POST['address'];




$query=mysql_query("select * from vendordetails where corporatename='".$corporatename."'  ") or die(mysql_error());
$duplicate=mysql_num_rows($query);
if($duplicate==0)
    {
     mysql_query("INSERT INTO vendordetails(corporatename,email,contactnumber,taxid,address) values('$corporatename','$email','$contactnumber','$taxid','$address')")or die(mysql_error());
        mysql_query("insert into activity_log (date,username,action) values(NOW(),'$firstname','Add New Vendor $corporatename ')")or die(mysql_error());
        header('location:vendors.php');
        }
        else
    {
      echo'The clientname '.$clientname.'   is already present ';
    }


?>
