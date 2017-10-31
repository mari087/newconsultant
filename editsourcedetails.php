
<div id="editmodal<?php echo $id; ?>" class="modal fade">
    <div class="modal-dialog" role="dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title"><font color="black">Edit Corporate Details</font></h5>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
                
               
            </div>
            
             <?php
  $query=mysql_query("select * from  sourcedetails where source_id='$id'")or die(mysql_error());
$row=mysql_fetch_array($query);

  ?>
            <div class="modal-body">
            
                <form role="form" class="form-horizontal" method="POST" action="updatesourcedetails.php">
                    <input type="hidden" name="_token" value="">
                    <div class="form-group">
                    <input type="hidden" class="form-control input-lg" name="source_id" value="<?php echo $row['source_id']; ?>">
                        <label class="control-label">Source Name:</label>
                        
                            <div ><input type="text" class="form-control input-lg" name="sourcename" value="<?php echo $row['sourcename']; ?>" required></div>
                        
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
                        <div>
                            <button type="submit" class="btn btn-primary">Save Changes</button>
 
                           
                        </div>
                    </div>
                </form>
                
                
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
