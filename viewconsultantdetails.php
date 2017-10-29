<div class="modal fade" id="newviewmodal<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"><strong><font color="#504f4e">View Consultant Details</font></h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <?php
  $query=mysql_query("select * from  consultantdetails where consultant_id='$id'")or die(mysql_error());
$row=mysql_fetch_array($query);

  ?>
 <div class="modal-body">
 
                    <div class="panel-body">
                    <ul class="list-unstyled">
                    
                        <li><strong><font color="black">Name</font></strong><div class="text-success pull-center"><font color="gray"><?php echo $row['name']; ?></strong></div></li>
                        <div class="dropdown-divider"></div>
                        <li><strong><font color="black">Address</font></strong><div class="text-success pull-center"><font color="gray"><?php echo $row['address']; ?></strong></div></li>
                        <div class="dropdown-divider"></div>
                        <li><strong><font color="black">Contact Number</font></strong><div class="text-success pull-center"><font color="gray"><?php echo $row['contactnumber']; ?></strong></div></li>
                        <div class="dropdown-divider"></div>
                        <li><strong><font color="black">DOB</font></strong><div class="text-success pull-center"><font color="gray"><?php echo $row['dob']; ?></strong></div></li>
                        <div class="dropdown-divider"></div>
                        <li><strong><font color="black">Email</font></strong><div class="text-success pull-center"><font color="gray"><?php echo $row['email']; ?></strong></div></li>
                        <div class="dropdown-divider"></div>
                        <li><strong><font color="black">SSN</font></strong><div class="text-success pull-center"><font color="gray"><?php echo $row['ssn']; ?></strong></div></li>
                        <div class="dropdown-divider"></div>
                           <li><strong><font color="black">Sales</font></strong><div class="text-success pull-center"><font color="gray"><?php echo $row['sales']; ?></strong></div></li>
                        <div class="dropdown-divider"></div>
                        <li><strong><font color="black">Recruiter</font></strong><div class="text-success pull-center"><font color="gray"><?php echo $row['recruiter']; ?></strong></div></li>
                        <div class="dropdown-divider"></div>
                        <li><strong><font color="black">Work Status</font></strong><div class="text-success pull-center"><font color="gray"><?php echo $row['workstatus']; ?></strong></div></li>
                        <div class="dropdown-divider"></div>
                        <li><strong><font color="black">Client</font></strong><div class="text-success pull-center"><font color="gray"><?php echo $row['client']; ?></strong></div></li>
                        <div class="dropdown-divider"></div>
                        <li><strong><font color="black">Bill Rate</font></strong><div class="text-success pull-center"><font color="gray"><?php echo $row['billrate']; ?></strong></div></li>
                        <div class="dropdown-divider"></div>
                        <li><strong><font color="black">Pay Rate</font></strong><div class="text-success pull-center"><font color="gray"><?php echo $row['payrate']; ?></strong></div></li>
                        <div class="dropdown-divider"></div>                     
                        <li><strong><font color="black">vacation</font></strong><div class="text-success pull-center"><font color="gray"><?php echo $row['vacation']; ?></strong></div></li>
                        <div class="dropdown-divider"></div>
                        <li><strong><font color="black">Sick Days</font></strong><div class="text-success pull-center"><font color="gray"><?php echo $row['sickdays']; ?></strong></div></li>
                        <div class="dropdown-divider"></div>
                        <li><strong><font color="black">Client Holidays</font></strong><div class="text-success pull-center"><font color="gray"><?php echo $row['clientholidays']; ?></strong></div></li>
                        <div class="dropdown-divider"></div>
                        <li><strong><font color="black">Medical</font></strong><div class="text-success pull-center"><font color="gray"><?php echo $row['medical']; ?></strong></div></li>
                        <div class="dropdown-divider"></div>
                        <li><strong><font color="black">Work Type</font></strong><div class="text-success pull-center"><font color="gray"><?php echo $row['worktype']; ?></strong></div></li>
                        <div class="dropdown-divider"></div>
                        <li><strong><font color="black">Status</font></strong><div class="text-success pull-center"><font color="gray"><?php echo $row['status']; ?></strong></div></li>
                        <div class="dropdown-divider"></div>
                        
                        
                           </ul>
                        
                    
                    
                    
                    
                   
                    
                    <div class="form-group">
                        <div>
                             <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
 
                           
                        </div>
                    </div>
                
                </div>
            
           
          </div>
        </div>
      </div>
    </div>



