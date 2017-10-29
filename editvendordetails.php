
<div id="editmodal<?php echo $id; ?>" class="modal fade">
    <div class="modal-dialog" role="dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title"><font color="black">Edit Corporate Details</font></h5>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
                
               
            </div>
            
             <?php
  $query=mysql_query("select * from  vendordetails where vendor_id='$id'")or die(mysql_error());
$row=mysql_fetch_array($query);

  ?>
            <div class="modal-body">
            
                <form role="form" class="form-horizontal" method="POST" action="updatevendordetails.php">
                    <input type="hidden" name="_token" value="">
                    <div class="form-group">
                    <input type="hidden" class="form-control input-lg" name="vendor_id" value="<?php echo $row['vendor_id']; ?>">
                        <label class="control-label">Corporate Name:</label>
                        
                            <div ><input type="text" class="form-control input-lg" name="corporatename" value="<?php echo $row['corporatename']; ?>" required></div>
                        
                    </div>
                    <div class="form-group">
                        <label class="control-label">Address</label>
                        <div>
                            <textarea class="form-control custom-control" rows="3" name="address" style="resize:none" required>"<?php echo $row['address']; ?>" </textarea> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Tax Id</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="taxid" value="<?php echo $row['taxid']; ?>"  required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Email</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="email" value="<?php echo $row['email']; ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Contact Number</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="contactnumber" value="<?php echo $row['contactnumber']; ?>"  required>
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
