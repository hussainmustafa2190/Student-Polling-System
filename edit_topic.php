<?php
	extract($_POST);
	if(isset($save))
	{	
	
	mysqli_query($conn,"update topic set topic_name='$n'".$_GET['id']."'");	

$err="<font color='green'>topic Details updated</font>";

	}

$con=mysqli_query($conn,"select * from topic where topic_id='".$_GET['id']."'");

$res=mysqli_fetch_assoc($con);	

?>


<h1 class="page-header">Update  Faculty</h1>
<div class="col-lg-8" style="margin:15px;">
	<form method="post">
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label><?php echo @$err;?></label>
        </div>
   	</div>
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Topic Name:</label>
            	<input type="text" value="<?php echo @$res['Name'];?>" name="n" class="form-control" required>
        </div>
   	</div>
	
	
	<div class="control-group form-group">
    	<div class="controls">
            	<input type="submit" class="btn btn-success" name="save" value="Update  Faculty">
        </div>
  	</div>
	</form>


</div>