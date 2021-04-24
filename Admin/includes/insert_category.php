
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
		   <h2 style="font-family:'Great Vibes', cursive;color:#black";>AJOUTER UNE CATÉGORIE</h2>
		   <div class="border_bottom"></div><!--/.border_bottom -->
		   </td>
		 </tr>
		 
		 <tr  >
		   <td><b>Nom Catégorie:</b></td>
		   <td><input type="text" name="TitreCategorie" size="60" required/></td>
		 </tr>
		
		<tr  >
		   <td><b>Type:</b></td>
		   <td><input type="text" name="Type" size="60" /></td>
		 </tr>
		 
		<tr  >
		  <td><b>index: </b></td>
		  <td>
		  
		   <select class="form-control"  name="index">
			  <option value="1" >Afficher dans la page d'accueil</option>
			  <option value="0" >Ne pas afficher dans la page d'accueil</option>
			
			</select>
		  
		  
		</tr>
	
		
        <tr  >
		  <td><b>Image Catégorie: </b></td>
		  <td><input type="file" name="imageCategorie" /></td>
		</tr>
		
		<tr  >
		   <td valign="top"><b>Description:</b></td>
		   <td><textarea name="DescriptionCategorie"  rows="10"></textarea></td>
		</tr>
		
		
		
		<tr>
		   <td></td>
		   <td colspan="7"><button class="button button1" type="submit" name="insert_post" style="font-family:'Great Vibes', cursive;";>Ajouter la Catégorie</button></td>
		</tr>
	   </table>
	   
	 </form>
	 
  </div><!-- /.form_box -->

<?php 

if(isset($_POST['insert_post'])){
   $TitreCategorie = $_POST['TitreCategorie'];
   $Type = $_POST['Type'];
   $index = $_POST['index'];
   $DescriptionCategorie = trim(mysqli_real_escape_string($con,$_POST['DescriptionCategorie']));
   
   
   // Getting the image from the field
   $imageCategorie  = $_FILES['imageCategorie']['name'];
   $imageCategorie_tmp = $_FILES['imageCategorie']['tmp_name'];
   
   move_uploaded_file($imageCategorie_tmp,"assets/images/menu/menu-mixed/$imageCategorie");
   
   $insert_category = " insert into categorie (Type,TitreCategorie,`index`,DescriptionCategorie,imageCategorie) 
   values ('$Type','$TitreCategorie','$index','$DescriptionCategorie','assets/images/menu/menu-mixed/$imageCategorie')";
   echo $insert_category;

   $insert_cat = mysqli_query($con, $insert_category);
   
   if($insert_cat){
    echo "<script>alert('La Catégorie a été inséré avec succès!')</script>";
	
	//echo "<script>window.open('index.php?insert_category','_self')</script>";
   }
   
   }
?>

</body>
</html>






