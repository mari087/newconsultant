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
   $sourcename= $_POST['sourcename'];
     
$taxid= $_POST['taxid'];
$date= $_POST['date'];
$address= $_POST['address'];




$query=mysql_query("select * from sourcedetails where sourcename='".$sourcename."'  ") or die(mysql_error());
$duplicate=mysql_num_rows($query);
if($duplicate==0)
    {
     mysql_query("INSERT INTO sourcedetails(sourcename,address,taxid,newdate) values('$sourcename','$address','$taxid','$date')")or die(mysql_error());
        mysql_query("insert into activity_log (date,username,action) values(NOW(),'$firstname','Add New Source $sourcename ')")or die(mysql_error());
        header('location:source.php');
        }
        else
    {
      echo'The sourcename '.$sourcename.'   is already present ';
    }


?>
