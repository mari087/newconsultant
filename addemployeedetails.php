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
   $employeename= $_POST['employeename'];
     $email= $_POST['email'];
$mobilenumber= $_POST['mobilenumber'];
$worklocation= $_POST['worklocation'];
$designation= $_POST['designation'];




$query=mysql_query("select * from employeedetails where email='".$email."'  ") or die(mysql_error());
$duplicate=mysql_num_rows($query);
if($duplicate==0)
    {
     mysql_query("INSERT INTO employeedetails(employeename,email,mobilenumber,worklocation,designation) values('$employeename','$email','$mobilenumber','$worklocation','$designation')")or die(mysql_error());
        mysql_query("insert into activity_log (date,username,action) values(NOW(),'$firstname','Add New Employee $employeename ')")or die(mysql_error());
        header('location:employees.php');
        }
        else
    {
      echo'The clientname '.$email.'   is already present ';
    }


?>
