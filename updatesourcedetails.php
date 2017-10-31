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
   $source_id= $_POST['source_id'];
       $sourcename= $_POST['sourcename'];
     
$taxid= $_POST['taxid'];

$address= $_POST['address'];

        


     mysql_query("UPDATE sourcedetails SET sourcename = '$sourcename' , address  = '$address' , taxid = '$taxid'  WHERE source_id = '$source_id'")or die(mysql_error());
        mysql_query("insert into activity_log (date,username,action) values(NOW(),'$firstname','updated sourcedetails of $sourcename ')")or die(mysql_error());
        header('location:source.php');
       



?>

