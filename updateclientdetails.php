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
   $client_id= $_POST['client_id'];
      $clientname= $_POST['clientname'];
     $clientemail= $_POST['clientemail'];
$clientmobilenumber= $_POST['clientmobilenumber'];
$clientlocation= $_POST['clientlocation'];
$clientaddress= $_POST['clientaddress'];

        


     mysql_query("UPDATE clientdetails SET clientname = '$clientname' , clientemail  = '$clientemail' , 
clientmobilenumber = '$clientmobilenumber' , clientlocation = '$clientlocation' , clientaddress = '$clientaddress' WHERE client_id = '$client_id'")or die(mysql_error());
        mysql_query("insert into activity_log (date,username,action) values(NOW(),'$firstname','updated clientdetails of $clientname ')")or die(mysql_error());
        header('location:client.php');
       



?>

