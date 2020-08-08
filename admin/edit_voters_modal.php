<?php
	if(!$bool){
?>
<div class="modal fade" id="edit_voters<?php  echo $voters_id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
											<h4 class="modal-title" id="myModalLabel">         
												<div class="panel panel-primary">
													<div class="panel-heading">
														<center>Edit voter Details</center>
													</div>    
												</div>
											</h4>
										</div>
										
										
                                        <div class="modal-body">		
					
										  <form method = "post" enctype = "multipart/form-data">	
					<input type="hidden" name="voters_id" value="<?php echo $row['voters_id'] ?>">
											<div class="form-group">
												<label>ID Number</label>
												<input type = "text" class = "form-control" name = "id_number" value="<?php echo $row1 ['id_number']?>"	>												
											</div>
											
											<div class="form-group">
	
												<label>Password</label>
													<input class="form-control" type ="text" name = "password" id = "pass" required="true" value = "<?php echo $row1 ['password']?>">
											</div>
										
											<div class="form-group">
												<label>Firstname</label>
													<input class="form-control" type ="text" name = "firstname" required="true" value = "<?php echo $row1 ['firstname']?>">
											</div>
											<div class="form-group">
												<label>Lastname</label>
													<input class="form-control"  type = "text" name = "lastname" value = "<?php echo $row1 ['lastname']?>" required="true">
											</div>
											
											<div class="form-group">
												<label>Year_Level</label>
													<select class = "form-control" name = "year_level" required="true">
														<option><?php echo $row1 ['year_level']?></option>
														<option></option>
														<option>1st Year</option>
														<option>2nd Year</option>
														<option>3rd Year</option>
														<option>4th Year</option>
														
														
														
													
													</select>
											</div>
											
											
											<div class="form-group">
												<label>Account</label>
													<select class = "form-control" name = "account">
														<option><?php echo $row1 ['account']?></option>
														<option></option>
														<option>Active</option>
																								
													</select>
											</div>
																					
											 
												 <button name = "done" type="submit" class="btn btn-primary">Save Data</button>
												 <button name = "cancel" type="reset" class="btn btn-success">Cancel All</button>




										 
										 </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                           
                                        </div>										
										</form>
				
									</div>
									
								</div>
									</div>
                                    <!-- /.modal-content -->
										<?php 
		require 'dbcon.php';
		
		if(ISSET($_POST['update'])){
			$bool = true;

			$id_number=$_POST['id_number'];
			$password=$_POST['password'];
			$firstname=$_POST['firstname'];
			$year_level=$_POST['year_level'];
			$account=$_POST['account'];	
			$voters_id=$_POST['voters_id'];
	
			$conn->query("UPDATE voters SET id_number = '$id_number', password = '$password', firstname = '$firstname', year_level = '$year_level', account = '$account' WHERE voters_id = '$voters_id'")or die(mysql_error());
			echo "<script> window.location='voters.php' </script>";
		}	
	?>
								
<?php
	}
?>
                                
