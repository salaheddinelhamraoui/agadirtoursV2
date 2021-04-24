<!DOCTYPE html>
<html>

<head>
    <style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td,
    th {
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
        height: 100vh;
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


                        <h3 style=" color: black">LES TOURS</h3>
                        <div class="border_bottom"></div>

                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Select</th>
                                        <th>Titre Tour</th>
										<th>Sous Titre Tour</th>
                                        <th>Prix Tour</th>
										<th>Image Tour</th>
                                        <th>Titre Description1</th>
										<th>Description1</th>
										<th>Titre Description2</th>
										<th>Description2</th>


                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>




                                    <?php

$all_products = mysqli_query($con, "select * from tour order by IdTour ASC ");

$i = 1;

while ($row = mysqli_fetch_array($all_products)) {
?>





                                    <tr>
                                        <td><input type="checkbox" name="deleteAll[]"
                                                value="<?php echo $row['IdTour']; ?>" /></td>
                                        <td><?php echo $row['TitreTour']; ?></td>
										<td><?php echo $row['SousTitreTour']; ?></td>	
                                        <td><?php echo $row['PrixTour']; ?>.00DH</td>
										  <td><img src="<?php echo $row["ImageTour"]; ?>" width="30"
                                                height="30" /></td>	
                                        <td><?php echo $row['TitreDescription1']; ?></td>
										<td><?php echo $row['Description1']; ?></td>
										<td><?php echo $row['TitreDescription2']; ?></td>
										<td><?php echo $row['Description2']; ?></td>

                                        <td><a
                                                href="AdminPanel.php?action=view_pack&delete_pack=<?php echo $row['IdTour']; ?>"><i
                                                    class="fa fa-trash" style="font-size:20px;color:#cc0000"></i></a>
                                            <a
                                                href="AdminPanel.php?action=edit_pack&IdTour=<?php echo $row['IdTour']; ?>"><i
                                                    class="fa fa-edit" style="font-size:20px;color:black"></i></a>
                                        </td>


                                    </tr>




                                    <?php $i++;
} // End while loop ?>



                                </tbody>
                                <tfoot>
                                    <tr>
                                             <th>Select</th>
                                        <th>Titre Tour</th>
										<th>Sous Titre Tour</th>
                                        <th>Prix Tour</th>
										<th>Image Tour</th>
                                        <th>Titre Description1</th>
										<th>Description1</th>
										<th>Titre Description2</th>
										<th>Description2</th>

                                        <th></th>
                                    </tr>
                                </tfoot>
                            </table>
                            <button class="button button1" type="submit" name="delete_all" style="" ;> Retirer Selection
                                <i class="fa fa-trash" style="font-size:15px;color:red"></i></button>
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
// Delete Product

if (isset($_GET['delete_pack'])) {
  $delete_pack = mysqli_query($con, "delete from tour where IdTour='$_GET[delete_pack]' ");

  if ($delete_pack) {
    echo "<script>alert('Tour a été supprimée avec succès!')</script>";

    echo "<script>window.open('AdminPanel.php?action=view_pack','_self')</script>";

  }
}

// Remove items selected using foreach loop
if (isset($_POST['deleteAll'])) {
  $remove = $_POST['deleteAll'];

  foreach ($remove as $key) {
    $run_remove = mysqli_query($con, "delete from tour where IdTour='$key'");

    if ($run_remove) {
      echo "<script>alert('Tour sélectionnés ont été supprimés avec succès!')</script>";

      echo "<script>window.open('AdminPanel.php?action=view_pack','_self')</script>";
    }
    else {
      echo "<script>alert('Mysqli Failed: mysqli_error($con)!')</script>";
    }
  }
}


?>






</body>

</html>