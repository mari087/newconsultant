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
   $employee_id= $_POST['employee_id'];
   $employeename= $_POST['employeename'];
   $email= $_POST['email'];
   $mobilenumber= $_POST['mobilenumber'];
   $worklocation= $_POST['worklocation'];
   $designation= $_POST['designation'];
    

        


     mysql_query("UPDATE employeedetails SET employeename = '$employeename' , email  = '$email' , 
mobilenumber = '$mobilenumber' , worklocation = '$worklocation' , designation = '$designation' WHERE employee_id = '$employee_id'")or die(mysql_error());
        mysql_query("insert into activity_log (date,username,action) values(NOW(),'$firstname','updated employeedetails of $employeename ')")or die(mysql_error());
        header('location:employees.php');
       



?>

