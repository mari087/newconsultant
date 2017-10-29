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
   $clientname= $_POST['clientname'];
     $clientemail= $_POST['clientemail'];
$clientmobilenumber= $_POST['clientmobilenumber'];
$clientlocation= $_POST['clientlocation'];
$clientaddress= $_POST['clientaddress'];




$query=mysql_query("select * from clientdetails where clientname='".$clientname."'  ") or die(mysql_error());
$duplicate=mysql_num_rows($query);
if($duplicate==0)
    {
     mysql_query("INSERT INTO clientdetails(clientname,clientemail,clientmobilenumber,clientlocation,clientaddress) values('$clientname','$clientemail','$clientmobilenumber','$clientlocation','$clientaddress')")or die(mysql_error());
        mysql_query("insert into activity_log (date,username,action) values(NOW(),'$firstname','Add New Client $clientname ')")or die(mysql_error());
        header('location:client.php');
        }
        else
    {
      echo'The clientname '.$clientname.'   is already present ';
    }


?>
