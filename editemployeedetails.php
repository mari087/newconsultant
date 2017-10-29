
<div id="editmodal<?php echo $id; ?>" class="modal fade">
    <div class="modal-dialog" role="dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title"><font color="black">Edit Employee Details</font></h5>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
                
               
            </div>
            
             <?php
  $query=mysql_query("select * from  employeedetails where employee_id='$id'")or die(mysql_error());
$row=mysql_fetch_array($query);

  ?>
            <div class="modal-body">
            
                <form role="form" class="form-horizontal" method="POST" action="updateemployeedetails.php">
                    <input type="hidden" name="_token" value="">
                    <div class="form-group">
                    <input type="hidden" class="form-control input-lg" name="employee_id" value="<?php echo $row['employee_id']; ?>">
                        <label class="control-label">EmployeeName:</label>
                        
                            <div ><input type="text" class="form-control input-lg" name="employeename" value="<?php echo $row['employeename']; ?>" required></div>
                        
                    </div>
                    <div class="form-group">
                        <label class="control-label">Work Location</label>
                        <div>
	                            <select class="form-control select2" name="worklocation"   style="width: 100%;" required>
	                            <option><?php echo $row['worklocation']; ?></option>
	                            <option>Chennai</option>
	                            <option>Delhi</option>
	                            <option>New York</option>
	                            
	                            </select>
	                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Mobile Number</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="mobilenumber" value="<?php echo $row['mobilenumber']; ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Email</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="email" value="<?php echo $row['email']; ?>" required>
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="control-label">Designation</label>
                        <div>
                             <label class="radio-inline"><input type="radio" name="designation" value="Sales" required>Sales</label>
<label class="radio-inline"><input type="radio" name="designation" value="Recruiter" required>Recruiter</label>

                        </div>
                    </div>
                    
                    
                   
                    
                    <div class="form-group">
                        <div>
                            <button type="submit" class="btn btn-success">Submit</button>
 
                           
                        </div>
                    </div>
                </form>
                
                
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
