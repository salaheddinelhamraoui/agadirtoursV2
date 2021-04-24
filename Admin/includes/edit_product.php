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
$edit_product = mysqli_query($con,"select * from day where IdDay='$_GET[IdDay]' ");

$fetch_edit = mysqli_fetch_array($edit_product);
?>

    <div class="form_box">

	 <form action="" method="post" enctype="multipart/form-data">
	   
	   <table align="center" width="100%">
	     
		 <tr>
		   <td colspan="7">
		   <h2>MODIFIER DAY</h2>
		   <div class="border_bottom"></div><!--/.border_bottom -->
		   </td>
		 </tr>
		 
		 <tr >
		   <td><b>Titre Day:</b></td>
		   <td><input type="text" name="TitreDay" value="<?php echo $fetch_edit['TitreDay'];  ?>" size="60" required/></td>
		 </tr>
		 
		
		 
		  
		 <tr  >
		   <td><b>Tour :</b></td>
		   <td>
		    <select name="IdTour">
			  <option>Choisissez une tour</option>
			  
			  <?php 
			  $get_cats ="select * from tour";
		
		$run_cats = mysqli_query($con, $get_cats);
		
		while($row_cats=mysqli_fetch_array($run_cats)){
		    $IdTour = $row_cats['IdTour'];
			
			$TitreTour = $row_cats['TitreTour'];
			
			if($fetch_edit['IdTour'] == $IdTour){
			echo "<option value='$fetch_edit[IdTour]' selected>$TitreTour</option>";
			
			}else{
			echo "<option value='$IdTour'>$TitreTour</option>";
			
			}
		}
			  ?>
			</select>
		   </td>
		   
		 </tr>
		

		
		<tr  >
		  <td><b>L'heure : </b></td>
		  <td><input type="text" name="TimeDay" value="<?php echo $fetch_edit['TimeDay']; ?>" required/></td>
		</tr>
		<tr  >
		  <td><b>Emplacement : </b></td>
		  <td><input type="text" name="EmpDay" value="<?php echo $fetch_edit['EmpDay']; ?>" size="60" required/></td>
		</tr>
		<tr  >
		  <td><b>Description : </b></td>
		  <td><textarea type="text" name="DescriptionDay" value="<?php echo $fetch_edit['DescriptionDay']; ?>" rows="10" required></textarea></td>
		</tr>
		
		
		<tr>
		   <td></td>
		   <td colspan="7"><button class="button button1" type="submit" name="edit_product" style="font-family:'Great Vibes', cursive;";>Sauvegarder</button></td>
		</tr>
	   </table>
	   
	 </form>
	 
  </div><!-- /.form_box -->

<?php 

if(isset($_POST['edit_product'])){
   $TitreDay = trim(mysqli_real_escape_string($con,$_POST['TitreDay']));
   $TimeDay = $_POST['TimeDay'];
   $EmpDay = $_POST['EmpDay'];
   $DescriptionDay = $_POST['DescriptionDay'];
   $IdTour = $_POST['IdTour'];

   
   $update_product = mysqli_query($con,"update day set  IdTour='$IdTour', TitreDay='$TitreDay', TimeDay='$TimeDay', EmpDay='$EmpDay', DescriptionDay='$DescriptionDay' where IdDay='$_GET[IdDay]' ");
     // echo $update_product;
   
   
   if($update_product){
   
   echo "<script>alert('Day a été mis à jour avec succès!')</script>";
   
   echo "<script>window.open(window.location.href,'_self')</script>";
   }
   
   }
?>



</body>
</html>




