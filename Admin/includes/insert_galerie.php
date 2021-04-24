
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
		   <h2 style="font-family:'Great Vibes', cursive;color:#black";>AJOUTER DANS GALERIE</h2>
		   <div class="border_bottom"></div><!--/.border_bottom -->
		   </td>
		 </tr>
		 
		     <tr>
                    <td><b>Tour :</b></td>
                    <td>
                        <select name="IdType">
                            <option>Choisissez une Tour</option>

                            <?php
$get_cats = "select * from type";

$run_cats = mysqli_query($con, $get_cats);

while ($row_cats = mysqli_fetch_array($run_cats)) {
	$cat_id = $row_cats['IdType'];

	$cat_title = $row_cats['TitreType'];

	echo "<option value='$cat_id'>$cat_title</option>";
}
?>
                        </select>
                    </td>

                </tr>

	
		
        <tr  >
		  <td><b>Image : </b></td>
		  <td><input type="file" name="ImageGalerie" /></td>
		</tr>
		
		
		
		<tr>
		   <td></td>
		   <td colspan="7"><button class="button button1" type="submit" name="insert_post" style="font-family:'Great Vibes', cursive;";>Ajouter</button></td>
		</tr>
	   </table>
	   
	 </form>
	 
  </div><!-- /.form_box -->

<?php 

if(isset($_POST['insert_post'])){
   $IdType = $_POST['IdType'];
   
   
   // Getting the image from the field
   $ImageGalerie  = $_FILES['ImageGalerie']['name'];
   $ImageGalerie_tmp = $_FILES['ImageGalerie']['tmp_name'];
   
   move_uploaded_file($ImageGalerie_tmp,"images/$ImageGalerie");
   
   $insert_galerie = " insert into galerie (IdType,ImageGalerie) 
   values ('$IdType','images/$ImageGalerie')";

   $insert_gal = mysqli_query($con, $insert_galerie);
   
   if($insert_gal){
    echo "<script>alert('L'image a été inséré avec succès!')</script>";
	
	echo "<script>window.open('AdminPanel.php?action=view_galerie','_self')</script>";
   }
   
   }
?>

</body>
</html>






