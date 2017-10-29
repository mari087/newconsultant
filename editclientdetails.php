
<div id="editmodal<?php echo $id; ?>" class="modal fade">
    <div class="modal-dialog" role="dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title"><font color="black">Edit Client Details</font></h5>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
                
               
            </div>
            
             <?php
  $query=mysql_query("select * from  clientdetails where client_id='$id'")or die(mysql_error());
$row=mysql_fetch_array($query);

  ?>
            <div class="modal-body">
            
                <form role="form" class="form-horizontal" method="POST" action="updateclientdetails.php">
                    <input type="hidden" name="_token" value="">
                    <div class="form-group">
                    <input type="hidden" class="form-control input-lg" name="client_id" value="<?php echo $row['client_id']; ?>">
                        <label class="control-label">Client Name:</label>
                        
                            <div ><input type="text" class="form-control input-lg" name="clientname" value="<?php echo $row['clientname']; ?>" required></div>
                        
                    </div>
                    <div class="form-group">
                        <label class="control-label">Client Email</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="clientemail" value="<?php echo $row['clientemail']; ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Client Mobile Number</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="clientmobilenumber" value="<?php echo $row['clientmobilenumber']; ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Client Location</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="clientlocation" value="<?php echo $row['clientlocation']; ?>" required>
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="control-label">Client address</label>
                        <div>
                            <textarea class="form-control custom-control" rows="3" name="clientaddress" style="resize:none" required><?php echo $row['clientaddress']; ?></textarea> 
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
