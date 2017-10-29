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
    

        


     mysql_query("delete from clientdetails  WHERE client_id = '$client_id'")or die(mysql_error());
        mysql_query("insert into activity_log (date,username,action) values(NOW(),'$firstname','Deleted clientdetails of $clientname')")or die(mysql_error());
        header('location:client.php');
       



?>
