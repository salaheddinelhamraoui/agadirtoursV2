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
$details_reserv = mysqli_query($con,"select * from reservation where IdReservation='$_GET[IdReservation]'");

$fetch_reserv = mysqli_fetch_array($details_reserv);

?>


    <div class="form_box">

	 <form action="" method="post" enctype="multipart/form-data">
	   
	   
	     
		 <tr>
		   <td colspan="7">
		   <h2 style="font-family:'Great Vibes', cursive;color:#black";>DÉTAILS DE RÉSERVATION</h2>
		   <div class="border_bottom"></div><!--/.border_bottom -->
		   </td>
		 </tr>
		 <table align="center" width="100%">
		 <tr>
		   <td  ><b>Nom :</b></td>
		   <td><?php echo $fetch_reserv['NomClient'];  ?></td>
		 </tr>	 
		
		
		 
		 <tr>
		   <td  ><b>Date de commande :</b></td>
		   <td><?php echo $fetch_reserv['DateCommand'];  ?></td>
		 </tr>
		 
		 <tr>
		   <td  ><b>Événement :</b></td>
		   <td><?php echo $fetch_reserv['EventRes'];  ?></td>
		 </tr>
		 
		 <tr>
		   <td  ><b>Type de réservation :</b></td>
		   <td><?php echo $fetch_reserv['TypeReservation'];  ?></td>
		 </tr>
		 
		 		 <tr>
		   <td  ><b>Date du réservation :</b></td>
		   <td><?php echo $fetch_reserv['DateReservation'];  ?></td>
		 </tr>
		 
		
		 <tr>
		   <td  ><b>Email :</b></td>
		   <td><?php echo $fetch_reserv['EmailClient'];  ?></td>
		 </tr>
		 
		 
		 <tr>
		   <td  ><b>Téléphone client :</b></td>
		   <td><?php echo $fetch_reserv['TelClient'];  ?></td>
		 </tr>
		 

		 
		 <tr>
		   <td  ><b>Serveur :</b></td>
		   <td><?php 
   if($fetch_reserv['Serveur'] == 1){
	    ?>
     <i class="fa fa-check" style="font-size:20px;color:black"></i>
	 <?php 
   }else{
	   ?>
	  
    <i class="fa fa-close" style="font-size:20px;color:black"></i>
	<?php 
   }
   ?></td>
		 </tr>
		 
		 <tr>
		   <td  ><b>Matériel :</b></td>
		   <td><?php 
   if($fetch_reserv['Materiel'] == 1){
	    ?>
     <i class="fa fa-check" style="font-size:20px;color:black"></i>
	 <?php 
   }else{
	   ?>
	  
    <i class="fa fa-close" style="font-size:20px;color:black"></i>
	<?php 
   }
   ?></td>
		 </tr>
		 
		 <tr>
		   <td  ><b>Description :</b></td>
		   <td><?php echo $fetch_reserv['descriptionRes'];  ?></td>
		 </tr>
		 
<tr>
		   <td  ><b>Statut :</b></td>
		   <td><?php echo $fetch_reserv['statut'];  ?></td>
		 </tr>
		
	   </table>
	<br></br>
	   <tr>
		   <td></td>
		   <td colspan="7"><a href="AdminPanel.php?action=view_reserv" class="button button1" style="font-family:'Great Vibes', cursive;";>Retour</a></td>
		</tr>
		
	 </form>
	 
  </div><!-- /.form_box -->




</body>
</html>





