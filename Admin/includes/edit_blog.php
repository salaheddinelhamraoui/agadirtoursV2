<!DOCTYPE html>
<html>
<head><meta charset="windows-1252">
<style>
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
  border: 2px solid #c6852b;
}

.button1:hover {
  background-color: #c6852b;
  color: white;
}
</style>
</head>
<body>

<?php 
$edit_cat = mysqli_query($con,"select * from blog where IdBlog='$_GET[IdBlog]' ");

$fetch_edit = mysqli_fetch_array($edit_cat);
?>


    <div class="form_box">

	  <form action="" method="post" id="form_summer" enctype="multipart/form-data">
	   
	   <table align="center" width="100%">
	    
		 <tr>
		   <td colspan="7">
		   <h3>Modifier blog</h3>
		   <div class="border_bottom"></div><!--/.border_bottom -->
		   </td>
		 </tr>
		 
		 <tr  >
		   <td><b>Titre Blog :</b></td>
		   <td><input type="text" class="form-control" name="TitreBlog" value="<?php echo $fetch_edit['TitreBlog'];  ?>" size="60" required/></td>
		 </tr>
		 
		 <tr  >
		  <td><b>Date de publication :  </b></td>
		  <td><input type="date" class="form-control" name="CreatedDate" value="<?php echo $fetch_edit['CreatedDate']; ?>" /></td>
		</tr>

		<tr  >
		   <td valign="top"><b>Description :</b></td>
		   <td><textarea name="Description" class="form-control" rows="10"><?php echo $fetch_edit['Description'];?></textarea></td>
		</tr>
		
        <tr  >
		  <td valign="top"><b>Image :</b></td>
		  <td>
		  <input type="file" name="Image" />
		  <div class="edit_image">
		   <img src="<?php echo $fetch_edit['Image']; ?>" width="100" height="70" />
		  </div>
		  </td>
		</tr>
		
		
		
		<tr  >
		   <td valign="top"><b>Description Long :</b></td>
		   <td><br>
		   
		   <textarea name="DescriptionLong" class="form-control" rows="10"><?php echo $fetch_edit['DescriptionLong'];?></textarea>

	
		   
		   
		   
		   
		   
		   
		   </td>
		</tr>
		
		
		<tr>
		   <td></td>
		  
		   <td colspan="7"><button class="button button1" onclick="change_()" name="edit_blog" style="font-family:'Great Vibes', cursive;";>Sauvegarder</button></td>
		</tr>
	   </table>
	   
	 </form>
	 
  </div><!-- /.form_box -->

<?php 

if(isset($_POST['edit_blog'])){
   $TitreBlog = trim(mysqli_real_escape_string($con,$_POST['TitreBlog']));
   $CreatedDate = $_POST['CreatedDate'];
   $Description = $_POST['Description'];
   $DescriptionLong = trim(mysqli_real_escape_string($con,$_POST['DescriptionLong']));
   
   // Getting the image from the field
   $Image  = $_FILES['Image']['name'];
   $Image_tmp = $_FILES['Image']['tmp_name'];
   
   if(!empty($_FILES['Image']['name'])){
   
   if(move_uploaded_file($Image_tmp,"images/$Image")){
   
   $update_cat = mysqli_query($con,"update blog set `CreatedDate`='$CreatedDate', Description='$Description', TitreBlog='$TitreBlog', DescriptionLong='$DescriptionLong',Image='images/$Image' where IdBlog='$_GET[IdBlog]' ");
   
   }
   
   }else{
   $update_cat = mysqli_query($con,"update blog set `Description`='$Description', CreatedDate='$CreatedDate', TitreBlog='$TitreBlog', DescriptionLong='$DescriptionLong' where IdBlog='$_GET[IdBlog]' ");
   
   }
   
   if($update_cat){
   
   echo "<script>alert('Le blog a été mise à jour avec succés!')</script>";
   
   echo "<script>window.open(window.location.href,'_self')</script>";
   }
   
   }
?>
	   
		  

</body>
</html>




