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
   $consultant_id=$_POST['consultant_id'];
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

        

        


     mysql_query("UPDATE consultantdetails SET name = '$name' , address  = '$address' , contactnumber  = '$contactnumber' ,
dob = '$date' , email = '$email' , ssn = '$ssn' , sales = '$sales' ,  recruiter = '$recruiter' , worktype = '$worktype' , workstatus = '$workstatus' , client = '$client' , billrate = '$billrate' , payrate = '$payrate' , vacation = '$vacation' , sickdays = '$sickdays' , clientholidays = '$clientholidays' , medical = '$medical' , status= '$status' WHERE consultant_id = '$consultant_id'")or die(mysql_error());
        mysql_query("insert into activity_log (date,username,action) values(NOW(),'$firstname','updated Laptop details of $user')")or die(mysql_error());
        header('location:consultants.php');
       



?>






