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
   $name= $_POST['name'];
     $address= $_POST['address'];
$contactnumber= $_POST['contactnumber'];
$date= $_POST['date'];
$email= $_POST['email'];
$ssn= $_POST['ssn'];
     $sales= $_POST['sales'];
$recruiter= $_POST['recruiter'];
$worktype= $_POST['worktype'];
$workstatus= $_POST['workstatus'];
$client= $_POST['client'];
$billrate= $_POST['billrate'];
     $payrate= $_POST['payrate'];
$vacation= $_POST['vacation'];
$sickdays= $_POST['sickdays'];
$clientholidays= $_POST['clientholidays'];
$medical= $_POST['medical'];
$status= $_POST['status'];





$query=mysql_query("select * from consultantdetails where email='".$email."'  ") or die(mysql_error());
$duplicate=mysql_num_rows($query);
if($duplicate==0)
    {
     mysql_query("INSERT INTO consultantdetails(name,address,contactnumber,dob,email,ssn,sales,recruiter,worktype,workstatus,client,billrate,payrate,vacation,sickdays,clientholidays,medical,status) values('$name','$address','$contactnumber','$date','$email','$ssn','$sales','$recruiter','$worktype','$workstatus','$client','$billrate','$payrate','$vacation','$sickdays','$clientholidays','$medical','$status')")or die(mysql_error());
        mysql_query("insert into activity_log (date,username,action) values(NOW(),'$firstname','Add New Consultant $name ')")or die(mysql_error());
        header('location:consultants.php');
        }
        else
    {
      echo'The Email  '.$email.'   is already present ';
    }


?>
