
<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #faf4ea;
}
.button {
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 13px;
  margin: 2px 1px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: #faf5ea; 
  color: black; 
  border: 2px solid #cc0000;
}

.button1:hover {
  background-color: #cc0000;
  color: white;
}


.left_sidebar {
    width: 25%;
    HEIGHT: 1148px;
}


</style>
</head>
<body>



<form action="" method="post" enctype="multipart/form-data" />
  <!-- Data Table area Start-->
    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                    <div class="data-table-list">
                      

<h3 style=" color: black">BLOG</h3>
<div class="border_bottom"></div>

                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Select</th>
									<th>Titre Blog</th>
   <th>Description</th>
   <th>Date de publication</th>
    <th>Image</th>
    <th> Description Long</th>
                                        
                                         
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
								
								
								
								
<?php 
 $all_menu = mysqli_query($con,"select * from blog order by IdBlog ASC ");
 
 $i = 1;
 
 while($row=mysqli_fetch_array($all_menu)){
 ?>
 
								
								
								
                                    <tr>
									 <td><input type="checkbox" name="deleteAll[]" value="<?php echo $row['IdBlog'];?>" /></td>
                                        <td><?php echo $row['TitreBlog']; ?></td>
      <td><?php echo $row['Description']; ?></td>

   <td><?php echo $row['CreatedDate']; ?></td>
   <td><img src="<?php echo  $row["Image"]; ?>" width="30" height="30" /></td>
   <td><?php echo  $row["DescriptionLong"]; ?></td>
  <td><a href="AdminPanel.php?action=view_blog&delete_blog=<?php echo $row['IdBlog'];?>"><i class="fa fa-trash" style="font-size:20px;color:#cc0000"></i></a> 
                                         <a href="AdminPanel.php?action=edit_blog&IdBlog=<?php echo $row['IdBlog'];?>"><i class="fa fa-edit" style="font-size:20px;color:black"></i></a></td>
                                   

								   </tr>
                                     
                                    
                                    
								
 <?php $i++;} // End while loop ?>	
									
									
                                      
                                </tbody>
                                <tfoot>
                                    <tr>
									 <th>Select</th>
                   <th>Titre Blog</th>
   <th>Description</th>
   <th>Date de publication</th>
    <th>Image</th>
    <th> Description Long</th>
                                         
                                        <th></th>
                                    </tr>
                                </tfoot>
                            </table>
							<button class="button button1" type="submit" name="delete_all" style=""; > Retirer Selection  <i class="fa fa-trash" style="font-size:15px;color:red"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Data Table area End-->
    <!-- Start Footer area-->
 




</form>



 







<?php

// Delete Brand

if(isset($_GET['delete_blog'])){
  $delete_blog = mysqli_query($con,"delete from blog where IdBlog='$_GET[delete_blog]' ");
  
  if($delete_blog){
  echo "<script>alert('La publication a ??t?? supprim??e avec succ??s!')</script>";
  
  echo "<script>window.open('AdminPanel.php?action=view_blog','_self')</script>";
  
  }
}

// Remove items selected using foreach loop
if(isset($_POST['deleteAll'])){
  $remove = $_POST['deleteAll'];
  
  foreach($remove as $key){
  $run_remove = mysqli_query($con,"delete from blog where IdBlog='$key'");
  
  if($run_remove){
  echo "<script>alert('Les publications s??lectionn??s ont ??t?? supprim??s avec succ??s!')</script>";
  
  echo "<script>window.open('AdminPanel.php?action=view_blog','_self')</script>";
  }else{
  echo "<script>alert('Mysqli Failed: mysqli_error($con)!')</script>";
  }
  }
}

 ?>

</body>
</html>
