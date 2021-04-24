
<!DOCTYPE html>
<html>
<head>
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

    <div class="form_box">

	 <form action="" method="post" enctype="multipart/form-data">
	   
	   <table align="center" width="100%">
	     
		 <tr>
		   <td colspan="7">
		   <h2 style="font-family:'Great Vibes', cursive;color:#black";>AJOUTER TOUR</h2>
		   <div class="border_bottom"></div><!--/.border_bottom -->
		   </td>
		 </tr>
		 
		 <tr  >
		   <td><b>Titre Blog :</b></td>
		   <td><input type="text" name="TitreBlog" size="60" required/></td>
		 </tr>
			
		<tr  >
		  <td><b>Date de publication : </b></td>
		  <td><input type="date" name="CreatedDate" required/></td>
		</tr>
		
	
	        <tr  >
		  <td><b>Description : </b></td>
		  <td><textarea type="text" name="Description" ></textarea></td>
		</tr>
		
		 <tr  >
		  <td><b> Image : </b></td>
		  <td><input type="file" name="Image" /></td>
		</tr>
				<tr  >
		   <td valign="top"><b>Description Long :</b></td>
		   <td><textarea name="DescriptionLong"  rows="10"></textarea></td>
		</tr>
		

		<tr>
		   <td></td>
		   <td colspan="7"><button class="button button1" type="submit" name="insert_post" style="font-family:'Great Vibes', cursive;";>Ajouter blog</button></td>
		</tr>
	   </table>
	   
	 </form>
	 
  </div><!-- /.form_box -->

<?php 

if(isset($_POST['insert_post'])){
   $TitreBlog = $_POST['TitreBlog'];
   $CreatedDate = $_POST['CreatedDate'];
   $Description = $_POST['Description'];
   $DescriptionLong = $_POST['DescriptionLong'];
   
   // Getting the image from the field
   $Image  = $_FILES['Image']['name'];
   $Image_tmp = $_FILES['Image']['tmp_name'];
   
   move_uploaded_file($Image_tmp,"images/$Image");
 
 
      $insert_pack = " insert into blog (TitreBlog,CreatedDate,Description,Image,DescriptionLong) 
   values ('$TitreBlog','$CreatedDate','$Description','images/$Image','$DescriptionLong')";


   

 $insert_pac = mysqli_query($con, $insert_pack);
   
   if($insert_pac){
    echo "<script>alert('Tour a été inséré avec succès!')</script>";
	
	echo "<script>window.open('AdminPanel.php?action=view_blog','_self')</script>";
   }
   
   }
?>



</body>
</html>




