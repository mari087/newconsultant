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
   $consultant_id= $_POST['consultant_id'];
   $name= $_POST['name'];    

        


     mysql_query("delete from consultantdetails  WHERE consultant_id = '$consultant_id'")or die(mysql_error());
        mysql_query("insert into activity_log (date,username,action) values(NOW(),'$firstname','Deleted Laptop Information of $name')")or die(mysql_error());
        header('location:consultants.php');
       



?>




