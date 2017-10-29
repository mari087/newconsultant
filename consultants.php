<!DOCTYPE html>
<html lang="en">

<?php include('allheader.php') ?>
<?php include('session.php'); ?>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <?php include('allnavigation.php')?>
  <div id="ModalLoginForm" class="modal fade">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Consultant</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
            
            <div class="modal-body">
            
                <form role="form" method="POST" action="addconsultantdetails.php">
                    <input type="hidden" name="_token" value="">
                    <div class="form-group">
                    <div class="form-row">
                    <div class="col-md-6">
                        <label class="control-label">Name</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="name" value="" required>
                        </div>
                    </div>
                  
                    
                   <div class="col-md-6">
                        <label class="control-label">Address</label>
                        <div>
                            <textarea class="form-control custom-control" rows="3" name="address" style="resize:none"></textarea> 
                        </div>
                        </div>
                        </div>
                    </div>
                  
                    <div class="form-group">
                    <div class="form-row">
                    <div class="col-md-6">
                        <label class="control-label">Contact Number</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="contactnumber" value="" required>
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
        <input class="form-control" id="date" name="date" placeholder="YYYY/MM/DD" type="text"/>
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
                            <input type="text" class="form-control input-lg" name="email" value="" required>
                        </div>
                    </div>  
                    <div class="col-md-6">
                        <label class="control-label">SSN</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="ssn" value="" required>
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
				<option></option>
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
                    
                    <div class="col-md-6">
                        <label class="control-label">Recruiter</label>
                        <div>
                        <select class="form-control select2" name="recruiter"   style="width: 100%;" required>
				<option></option>
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
                    
                    <div class="form-group">
                    <div class="form-row">
                    <div class="col-md-6">
                        <label class="control-label">Work Status</label>
                        <div>
	                            <select class="form-control select2" name="workstatus"   style="width: 100%;" required>
	                            <option></option>
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
				<option></option>
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
                    <div class="form-group">
 <div class="form-row">
                    <div class="col-md-6">
                    <label class="control-label">Bill Rate</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="billrate" value="" required>
                        </div>
                    </div>  
                     
                    <div class="col-md-6">
                        <label class="control-label">Pay Rate</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="payrate" value="" required>
                        </div>
                    </div> 
                    </div>
                    </div>
                    <div class="form-group">
                     <div class="form-row">
                    <div class="col-md-6">
                        <label class="control-label">Vacation</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="vacation" value="" required>
                        </div>
                    </div>  
                    
                    <div class="col-md-6">
                        <label class="control-label">Sick Days</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="sickdays" value="" required>
                        </div>
                    </div>
                    </div>
                    </div>  
                    <div class="form-group">
                    <div class="form-row">
                    <div class="col-md-6">
                        <label class="control-label">Client Holidays</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="clientholidays" value="" required>
                        </div>
                    </div>  
                  
                    <div class="col-md-6">
                        <label class="control-label">Medical</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="medical" value="" required>
                        </div>
                    </div>
                    </div>
                    </div> 
                    <div class="form-group">
                    <label class="control-label">Work Type</label>
                    <div>
	                            <select class="form-control select2" name="worktype"   style="width: 100%;" required>
	                            <option></option>
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
                    
                    <div class="form-group">
                        <div>
                            <button type="submit" class="btn btn-primary">Submit</button>
 
                           
                        </div>
                    </div>
                </form>
                
                
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active"> Consultant Details</li>
      </ol>
      <!-- Example DataTables Card-->
      
      <div class="card mb-3">
       
        <div class="card-body">
         &nbsp;&nbsp;&nbsp; <button type="button" class="btn btn-primary btn-small" data-toggle="modal" data-target="#ModalLoginForm" ><i class="fa fa-plus-circle" aria-hidden="true"></span></i> Add Consultant Info
       </button><br/><br/>
       
          <div class="table-responsive">
            <table class="table table-condensed" id="dataTable" width="100%" cellspacing="0">
              <thead bgcolor="#eeeeee">
                <tr>
                  <th><font color="#4d4d4d">Name</font></th>
                                            <th><font color="#4d4d4d">Contact Number</font></th>
                                           
                                            <th><font color="#4d4d4d">Email</font></th>
                                             <th><font color="#4d4d4d">SSN</font></th>
                                             
                                             <th><font color="#4d4d4d">Work Type</font></th>
                                             <th><font color="#4d4d4d">Work Status</font></th>
                                             
                                             <th><font color="#4d4d4d">Status</font></th>
                                         	<th><font color="#4d4d4d">Action</font></th>
                </tr>
              </thead>
             
              <tbody>
                <?php
                                                 include('dbcon.php');
                                                                $result= mysql_query("select *from consultantdetails " ) or die (mysql_error());
                                                                while ($row= mysql_fetch_array ($result) ){
                                                                $id=$row['consultant_id'];
                                                                ?>
                <tr>
                  							<td><?php echo $row ['name']; ?></td>
                                            <td><?php echo $row ['contactnumber']; ?></td>
                                            <td><?php echo $row ['email']; ?></td>
                                            <td><?php echo $row ['ssn']; ?></td>
                                            
                                            <td><?php echo $row ['worktype']; ?></td>
                                            <td><?php echo $row ['workstatus']; ?></td>
                                            
                                            <td><?php echo $row ['status']; ?></td>
                                            
                                            
                                           
                                           
                                            <td style="text-align:center;">
                                            
                                            <a href="editconsultantdetails.php<?php echo '?id='.$id; ?>"> <font color="#424242"><i class="fa fa-pencil-square-o" aria-hidden="true" ></i></a>
                                           
                         <a href data-toggle="modal"  data-target="#deletemodal<?php echo $id; ?>"> <font color="#424242"><i class="fa fa-trash-o" aria-hidden="true" ></i></a>
                         <a href data-toggle="modal"  data-target="#newviewmodal<?php echo $id; ?>"> <font color="#424242"><i class="fa fa-eye" aria-hidden="true" ></i></a>
                                            </td>
                                            
                                           <?php include ('deleteconsultantdetails.php');?> 
                                           <?php include ('viewconsultantdetails.php');?> 
                                           
                                           
                </tr>
                <?php } ?>
                
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted"></div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
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
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    

<!-- Include Date Range Picker -->
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




