
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
		   <td><b>Titre Tour :</b></td>
		   <td><input type="text" name="TitreTour" size="60" required/></td>
		 </tr>
			
		<tr  >
		  <td><b>Sous Titre Tour : </b></td>
		  <td><input type="text" name="SousTitreTour" required/></td>
		</tr>
		
	
	        <tr  >
		  <td><b>Prix Tour : </b></td>
		  <td><input type="text" name="PrixTour" /></td>
		</tr>
		
		 <tr  >
		  <td><b> Image Tour: </b></td>
		  <td><input type="file" name="ImageTour" /></td>
		</tr>

				<tr  >
		  <td><b>Titre Description1 : </b></td>
		  <td><input type="text" name="TitreDescription1" /></td>
		</tr>
		
				<tr  >
		   <td valign="top"><b>Description1 :</b></td>
		   <td><textarea name="Description1"  rows="10"></textarea></td>
		</tr>
		
						<tr  >
		  <td><b>Titre Description2 : </b></td>
		  <td><input type="text" name="TitreDescription2" /></td>
		</tr>
		
				<tr  >
		   <td valign="top"><b>Description2 :</b></td>
		   <td><textarea name="Description2"  rows="10"></textarea></td>
		</tr>
	
		<tr>
		   <td></td>
		   <td colspan="7"><button class="button button1" type="submit" name="insert_post" style="font-family:'Great Vibes', cursive;";>Ajouter Tour</button></td>
		</tr>
	   </table>
	   
	 </form>
	 
  </div><!-- /.form_box -->

<?php 

if(isset($_POST['insert_post'])){
   $TitreTour = $_POST['TitreTour'];
   $SousTitreTour = $_POST['SousTitreTour'];
   $PrixTour = $_POST['PrixTour'];
   $TitreDescription1 = $_POST['TitreDescription1'];
   $TitreDescription2 = $_POST['TitreDescription2'];
   $Description1 = trim(mysqli_real_escape_string($con,$_POST['Description1']));
   $Description2 = trim(mysqli_real_escape_string($con,$_POST['Description2']));
   
   // Getting the image from the field
   $ImageTour  = $_FILES['ImageTour']['name'];
   $ImageTour_tmp = $_FILES['ImageTour']['tmp_name'];
   
   move_uploaded_file($ImageTour_tmp,"images/$ImageTour");
 
 
      $insert_pack = " insert into tour (TitreTour,SousTitreTour,PrixTour,ImageTour,TitreDescription1,Description1,TitreDescription2,Description2) 
   values ('$TitreTour','$SousTitreTour','$PrixTour','images/$ImageTour','$TitreDescription1','$Description1','$TitreDescription2','$Description2')";


   

 $insert_pac = mysqli_query($con, $insert_pack);
   
   if($insert_pac){
    echo "<script>alert('Tour a été inséré avec succès!')</script>";
	
	echo "<script>window.open('AdminPanel.php?action=view_pack','_self')</script>";
   }
   
   }
?>



</body>
</html>




