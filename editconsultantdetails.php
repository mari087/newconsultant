<!DOCTYPE html>
<html lang="en">

<?php include('allheader.php') ?>
<?php include('session.php'); ?>
<?php $id=$_GET['id'];?>
<?php
  $query=mysql_query("select * from  consultantdetails where consultant_id='$id'")or die(mysql_error());
$row=mysql_fetch_array($query);

  ?>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <?php include('allnavigation.php')?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Update Consultant Information</li>
      </ol>
      <!-- Area Chart Example-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-area-chart"></i> Edit Consultant Information</div>
        <div class="card-body">
          <form role="form" class="form-horizontal" method="POST" action="updateconsultantdetails.php">
                    <input type="hidden" name="_token" value="">
                    
                    <div class="form-group">
                    <div class="form-row">
                    <div class="col-md-6">
                    <input type="hidden" class="form-control input-lg" name="consultant_id" value="<?php echo $row['consultant_id']; ?>">
                        <label class="control-label">Name:</label>
                        
                            <div ><input type="text" class="form-control input-lg" name="name" value="<?php echo $row['name']; ?>"></div>
                        
                    </div>
                   
                    <div class="col-md-6">
                        <label class="control-label">Address</label>
                        <div>
                            <textarea class="form-control custom-control" rows="3" name="address" style="resize:none"><?php echo $row['address']; ?></textarea> 
                        </div>
                        </div>
                        </div>
                    </div>
                  
                    <div class="form-group">
                    <div class="form-row">
                    <div class="col-md-6">
                        <label class="control-label">Contact Number</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="contactnumber" value="<?php echo $row['contactnumber']; ?>" required>
                        </div>
                    </div>
                    <div class="col-md-6">
      <label class="control-label ">
      DOB
       
      </label>
      <div class="col-sm-6">
       <div class="input-group">
        <div class="input-group-addon">
         <i class="fa fa-calendar">
         </i>
        </div>
        <input class="form-control" id="date" name="date" value="<?php echo $row['dob']; ?>" placeholder="YYYY/MM/DD" type="text"/>
       </div>
      </div>
     </div>
     </div>
     </div>
                  <div class="form-group">
                   <div class="form-row">
                    <div class="col-md-6">
                        <label class="control-label">Email</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="email" value="<?php echo $row['email']; ?>" required>
                        </div>
                    </div>  
                    <div class="col-md-6">
                        <label class="control-label">SSN</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="ssn" value="<?php echo $row['ssn']; ?>" required>
                        </div>
                    </div>  
                    </div>
                    </div>
                    
                    <div class="form-group">
                    <div class="form-row">
                    <div class="col-md-6">
                        <label class="control-label">Sales</label>
                        <div>
                        <select class="form-control select2" name="sales"   style="width: 100%;" required>
				<option><?php echo $row['sales']; ?></option>
				<?php 
                  $result = mysql_query("select * from employeedetails where designation='Sales' ")or die(mysql_error());
											while($row = mysql_fetch_array($result)){
											$employeename = $row['employeename'];		
									?>
								<option value="<?php echo $employeename;?>"> <?php echo $employeename;?> </option>
									<?php }?>
                  
                </select>
                </div>
                    </div>
                    <?php
  $query=mysql_query("select * from  consultantdetails where consultant_id='$id'")or die(mysql_error());
$row=mysql_fetch_array($query);

  ?>
                    
                    <div class="col-md-6">
                        <label class="control-label">Recruiter</label>
                        <div>
                        <select class="form-control select2" name="recruiter"   style="width: 100%;" required>
				<option><?php echo $row['recruiter']; ?></option>
				<?php 
                  $result = mysql_query("select * from employeedetails where designation='Recruiter' ")or die(mysql_error());
											while($row = mysql_fetch_array($result)){
											$employeename = $row['employeename'];			
									?>
								<option value="<?php echo $employeename;?>"> <?php echo $employeename;?> </option>
									<?php }?>
                  
                </select>
                </div>
                    </div>
                    </div>
                    </div>
                    <?php
  $query=mysql_query("select * from  consultantdetails where consultant_id='$id'")or die(mysql_error());
$row=mysql_fetch_array($query);

  ?>
                    <div class="form-group">
                    <div class="form-row">
                    <div class="col-md-6">
                        <label class="control-label">Work Status</label>
                        <div>
	                            <select class="form-control select2" name="workstatus"   style="width: 100%;" required>
	                            <option><?php echo $row['workstatus']; ?></option>
	                            <option>H1B</option>
	                            <option>H4 EAD</option>
	                            <option>GC</option>
	                            <option>US Citizen</option>
	                            <option>GC EAD</option>
	                            <option>OPT EAD</option>
	                            <option>L2 EAD</option>
	                            <option>TN VISA</option>
	                            
	                            </select>
	                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="control-label">Client</label>
                        <div>
                        <select class="form-control select2" name="client"   style="width: 100%;" required>
				<option><?php echo $row['client']; ?></option>
				<?php 
                  $result = mysql_query("select * from clientdetails ")or die(mysql_error());
											while($row = mysql_fetch_array($result)){
											$clientname = $row['clientname'];			
									?>
								<option value="<?php echo $clientname;?>"> <?php echo $clientname;?> </option>
									<?php }?>
                  
                </select>
                </div>
                    </div>
                    </div>
                    </div>
                    <?php
  $query=mysql_query("select * from  consultantdetails where consultant_id='$id'")or die(mysql_error());
$row=mysql_fetch_array($query);

  ?>
                    <div class="form-group">
 <div class="form-row">
                    <div class="col-md-6">
                    <label class="control-label">Bill Rate</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="billrate" value="<?php echo $row['billrate']; ?>" required>
                        </div>
                    </div>  
                     
                    <div class="col-md-6">
                        <label class="control-label">Pay Rate</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="payrate" value="<?php echo $row['payrate']; ?>" required>
                        </div>
                    </div> 
                    </div>
                    </div>
                    <div class="form-group">
                     <div class="form-row">
                    <div class="col-md-6">
                        <label class="control-label">Vacation</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="vacation" value="<?php echo $row['vacation']; ?>" required>
                        </div>
                    </div>  
                    
                    <div class="col-md-6">
                        <label class="control-label">Sick Days</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="sickdays" value="<?php echo $row['sickdays']; ?>" required>
                        </div>
                    </div>
                    </div>
                    </div>  
                    <div class="form-group">
                    <div class="form-row">
                    <div class="col-md-6">
                        <label class="control-label">Client Holidays</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="clientholidays" value="<?php echo $row['clientholidays']; ?>" required>
                        </div>
                    </div>  
                  
                    <div class="col-md-6">
                        <label class="control-label">Medical</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="medical" value="<?php echo $row['medical']; ?>" required>
                        </div>
                    </div>
                    </div>
                    </div> 
                    <div class="form-group">
                    <label class="control-label">Work Type</label>
                    <div>
	                            <select class="form-control select2" name="worktype"   style="width: 100%;" required>
	                            <option><?php echo $row['worktype']; ?></option>
	                           <option>w2</option>
	                           <option>C2C</option>
	                           <option>Referral/Fulltime</option>
	                                                       
	                            </select>
	                        </div>
                    </div>
                    <div class="form-group">
                    
                        <label class="control-label">Status</label>
                        
                        <div>
                             <label class="radio-inline"><input type="radio" name="status" value="active" required>Active</label>
<label class="radio-inline"><input type="radio" name="status" value="inactive" required>In Active</label>

                        </div>
                    </div> 
                    
                    
                    
                    
                    
                    
                    
                    
                    	
                    
                    
                    
                   
                   
                    
                    
                    
                    
                    
                    
                    
                    <div class="col-md-6">
                    <div class="form-group">
                        <div>
                            <button type="submit" class="btn btn-primary">Update</button>
                             <a href="consultants.php" class="btn btn-danger">Cancel</a>

<script>
function goBack() {
    window.history.back(-1);
}
</script> 
 
                          </div> 
                        </div>
                    </div>
                </form>
        </div>
        <div class="card-footer small text-muted"></div>
      </div>
      
    </div>
    
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2017</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-charts.min.js"></script>
    <script type="text/javascript" src="datepicker/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="datepicker/bootstrap-datepicker3.css"/>

<script>
	$(document).ready(function(){
		var date_input=$('input[name="date"]'); //our date input has the name "date"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker({
			format: 'yyyy/mm/dd',
			container: container,
			todayHighlight: true,
			autoclose: true,
		})
	})
</script>
  </div>
</body>

</html>

