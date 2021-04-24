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


                        <h3 style=" color: black">DAYS</h3>
                        <div class="border_bottom"></div>

                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Select</th>
                                        <th>Titre Day</th>
                                        <th>Tour</th>
                                        <th>L'heure</th>
                                        <th>Emplacement</th>
                                        <th>Description </th>


                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>




                                    <?php
$all_products = mysqli_query($con, "
SELECT d.*,t.TitreTour FROM day d,tour t  WHERE d.`IdTour` = t.`IdTour` order by IdDay DESC ");

$i = 1;

while ($row = mysqli_fetch_array($all_products)) {
?>




                                    <tr>
                                        <td><input type="checkbox" name="deleteAll[]"
                                                value="<?php echo $row['IdDay']; ?>" /></td>
                                        <td><?php echo $row['TitreDay']; ?></td>
                                        <td><?php echo $row['TitreTour']; ?></td>
                                        <td><?php echo $row['TimeDay']; ?> </td>
                                        <td><?php echo $row['EmpDay']; ?></td>
                                        <td><?php echo $row['DescriptionDay']; ?></td>
                                        <td><a
                                                href="AdminPanel.php?action=view_pro&delete_product=<?php echo $row['IdDay']; ?>"><i
                                                    class="fa fa-trash" style="font-size:20px;color:#cc0000"></i></a>
                                            <a
                                                href="AdminPanel.php?action=edit_pro&IdDay=<?php echo $row['IdDay']; ?>"><i
                                                    class="fa fa-edit" style="font-size:20px;color:black"></i></a>
                                        </td>


                                    </tr>




                                    <?php $i++;
} // End while loop ?>



                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Select</th>
                                        <th>Titre Day</th>
                                        <th>Tour</th>
                                        <th>L'heure</th>
                                        <th>Emplacement</th>
                                        <th>Description </th>

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

if (isset($_GET['delete_product'])) {
  $delete_product = mysqli_query($con, "delete from day where IdDay='$_GET[delete_product]' ");

  if ($delete_product) {
    echo "<script>alert('day a été supprimée avec succès!')</script>";

    echo "<script>window.open('AdminPanel.php?action=view_pro','_self')</script>";

  }
}

// Remove items selected using foreach loop
if (isset($_POST['deleteAll'])) {
  $remove = $_POST['deleteAll'];

  foreach ($remove as $key) {
    $run_remove = mysqli_query($con, "delete from day where IdDay='$key'");

    if ($run_remove) {
      echo "<script>alert('days sélectionnés ont été supprimés avec succès!')</script>";

      echo "<script>window.open('AdminPanel.php?action=view_pro','_self')</script>";
    }
    else {
      echo "<script>alert('Mysqli Failed: mysqli_error($con)!')</script>";
    }
  }
}


?>



</body>

</html>