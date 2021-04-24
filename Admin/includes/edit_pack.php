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

<?php 
$edit_pack = mysqli_query($con,"select * from tour where IdTour='$_GET[IdTour]' ");

$fetch_edit = mysqli_fetch_array($edit_pack);
?>

    <div class="form_box">

	 <form action="" method="post" enctype="multipart/form-data">
	   
	   <table align="center" width="100%">
	     
		 <tr>
		   <td colspan="7">
		   <h2 style="font-family:'Great Vibes', cursive;color:#black";>MODIFIER Tour</h2>
		   <div class="border_bottom"></div><!--/.border_bottom -->
		   </td>
		 </tr>
		 
		 <tr  >
		   <td><b>Nom Tour :</b></td>
		   <td><input type="text" name="TitreTour" value="<?php echo $fetch_edit['TitreTour'];  ?>" size="60" required/></td>
		 </tr>

		
		<tr  >
		  <td><b>Sous Titre Tour : </b></td>
		  <td><input type="text" name="SousTitreTour" value="<?php echo $fetch_edit['SousTitreTour']; ?>" required/></td>
		</tr>
			
		        <tr  >
		  <td valign="top"><b>Image Tour : </b></td>
		  <td>
		  <input type="file" name="ImageTour" />
		  <div class="edit_image">
		   <img src="<?php echo $fetch_edit['ImageTour']; ?>" width="100" height="70" />
		  </div>
		  </td>
		</tr>
		


		<tr  >
		  <td><b>Prix Tour : </b></td>
		  <td><input type="text" name="PrixTour" value="<?php echo $fetch_edit['PrixTour']; ?>.00DH" required/></td>
		</tr>
		
		<tr  >
		   <td><b>Titre Description1 :</b></td>
		   <td><input type="text" name="TitreDescription1" value="<?php echo $fetch_edit['TitreDescription1'];  ?>" size="60" /></td>
		 </tr>
		
		<tr  >
		   <td valign="top"><b>Description1 :</b></td>
		   <td><textarea name="Description1"  rows="10"><?php echo $fetch_edit['Description1'];?></textarea></td>
		</tr>
		<tr  >
		
		   <tr  >
		   <td><b>Titre Description2 :</b></td>
		   <td><input type="text" name="TitreDescription2" value="<?php echo $fetch_edit['TitreDescription2'];  ?>" size="60" /></td>
		 </tr>
		
		<tr  >
		   <td valign="top"><b>Description2 :</b></td>
		   <td><textarea name="Description2"  rows="10"><?php echo $fetch_edit['Description2'];?></textarea></td>
		</tr>
		
		<tr>
		   <td></td>
		   <td colspan="7"><button class="button button1" type="submit" name="edit_pack" style="font-family:'Great Vibes', cursive;";>Sauvegarder</button></td>
		</tr>
	   </table>
	   
	 </form>
	 
  </div><!-- /.form_box -->

<?php 

if(isset($_POST['edit_pack'])){
   $TitreTour = trim(mysqli_real_escape_string($con,$_POST['TitreTour']));
   $SousTitreTour = $_POST['SousTitreTour'];
   $PrixTour = $_POST['PrixTour'];
    $TitreDescription1 = $_POST['TitreDescription1'];
	 $TitreDescription2 = $_POST['TitreDescription2'];
   $Description1 = trim(mysqli_real_escape_string($con,$_POST['Description1']));
   $Description2 = trim(mysqli_real_escape_string($con,$_POST['Description2']));
   
   // Getting the image from the field
   $ImageTour  = $_FILES['ImageTour']['name'];
   $ImageTour_tmp = $_FILES['ImageTour']['tmp_name'];
   
   if(!empty($_FILES['ImageTour']['name'])){
   
   if(move_uploaded_file($ImageTour_tmp,"images/$ImageTour")){
   
   $update_product = mysqli_query($con,"update tour set SousTitreTour='$SousTitreTour', TitreTour='$TitreTour', PrixTour='$PrixTour', TitreDescription1='$TitreDescription1', Description1='$Description1', TitreDescription2='$TitreDescription2', Description2='$Description2',ImageTour='images/$ImageTour' where IdTour='$_GET[IdTour]' ");
   
   }
   
   }else{
   $update_product = mysqli_query($con,"update tour set SousTitreTour='$SousTitreTour', TitreTour='$TitreTour', PrixTour='$PrixTour', TitreDescription1='$TitreDescription1', Description1='$Description1', TitreDescription2='$TitreDescription2', Description2='$Description2' where IdTour='$_GET[IdTour]' ");
   
   }
   
   if($update_product){
   
   echo "<script>alert('Tour a été mis à jour avec succès!')</script>";
   
   echo "<script>window.open(window.location.href,'_self')</script>";
   }
   
   }
?>


</body>
</html>





